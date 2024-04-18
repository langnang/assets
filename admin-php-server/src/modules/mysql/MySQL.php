<?php

class MySQLDataBaseModel
{
}

class MySQLColumnModel
{
  public $name;
  public $type;
  public $length;
  public $is_null;
}


class MySQLTableModel
{
}

/**
 * @package MySQLModule
 * @method before_insert
 * @method insert
 * @method delete
 * @method update
 * @method select
 * @method count
 */
class MySQLModule
{
  protected $config;
  protected $conn;
  protected $dbname;
  protected $tbname;

  public $before_insert = null;
  public $before_insert_execute = null;
  public $inserted = null;

  public $before_delete = null;
  public $before_delete_execute = null;
  public $deleted = null;
  function init($config)
  {
    $this->config = $config;
    $this->conn = Doctrine\DBAL\DriverManager::getConnection($this->config);
    $this->dbname = $this->config["dbname"];
    $this->tbname = $this->config["tbname"];
    if (!$this->exist_tb()) {
      $this->create();
    }
  }
  /**
   * 检测表是否存在
   * @return Boolean
   */
  function exist_tb()
  {
    $sql = "SHOW TABLES LIKE '$this->tbname';";
    $result = $this->conn->fetchAllAssociative($sql);
    return sizeof($result) === 1;
  }
  /**
   * 创建表
   */
  function create()
  {
  }
  /**
   * 删除表
   */
  function drop()
  {
    $sql = "DROP TABLE IF EXISTS `$this->dbname`.`$this->tbname`";
  }
  /**
   * 新增数据
   * @return Boolean
   */
  function insert($item)
  {
    if ($this->before_insert) {
      $item = call_user_func($this->before_insert, $item);
    }
    $columns = "";
    $values = "";
    foreach ($item as $column => $value) {
      if (is_null($value)) continue;
      $columns .= ", `$column`";
      $values .= ", :$column";
      if (is_object($value) || is_array($value)) {
        $item->{$column} = json_encode($value, JSON_UNESCAPED_UNICODE);
        // $item->{$column} = preg_replace("/\\\\/", '', json_encode($value, JSON_UNESCAPED_UNICODE));
        // $item->{$column} = preg_replace("/\"/", '\"', $item->{$column});
      }
    }
    $columns = substr($columns, 2);
    $values = substr($values, 2);
    $sql = "INSERT INTO `$this->dbname`.`$this->tbname` ($columns) VALUES ($values);";

    if ($this->before_insert_execute) {
      $sql = call_user_func($this->before_insert_execute, $sql, $item);
    }

    $result = $this->conn->executeStatement(
      $sql,
      (array)$item,
      $this->column_value_type($item)
    );

    if (!$result) return FALSE;

    if ($this->inserted) {
      $result = call_user_func($this->inserted, $result, $item);
    }

    return $result;
  }
  // 删除
  function delete($item)
  {
    if ($this->before_delete) {
      $item = call_user_func($this->before_delete, $item);
    }
    $sql = "DELETE FROM `$this->dbname`.`$this->tbname` "
      . $this->sql_condition($item);

    if ($this->before_delete_execute) {
      $sql = call_user_func($this->before_delete_execute, $sql, $item);
    }

    $result = $this->conn->executeStatement(
      $sql,
      (array)$item,
      $this->column_value_type($item)
    );
    if ($this->deleted) {
      $result = call_user_func($this->deleted, $result, $item);
    }
    return $result;
  }
  // 更新
  function update($old_item, $new_item)
  {
    if ($this->before_update) {
      $new_item = call_user_func($this->before_update, $old_item, $new_item);
    }

    foreach ($new_item as $column => $value) {
      if (is_null($value)) continue;
      if (is_object($value) || is_array($value)) {
        $new_item->{$column} = json_encode($value, JSON_UNESCAPED_UNICODE);
        // $new_item->{$column} = preg_replace("/\\\\/", '', json_encode($value, JSON_UNESCAPED_UNICODE));
        // $new_item->{$column} = preg_replace('/"/', '\"', $new_item->{$column});
      }
    }

    $sql = "UPDATE `$this->dbname`.`$this->tbname`"
      . $this->sql_update_set($new_item)
      . $this->sql_condition($old_item);

    if ($this->before_update_execute) {
      $sql = call_user_func($this->before_update_execute, $sql, $old_item, $new_item);
    }
    $result = $this->conn->executeStatement(
      $sql,
      (array)$new_item,
      $this->column_value_type($new_item)
    );
    if ($this->updated) {
      $sql = call_user_func($this->updated, $result, $old_item, $new_item);
    }
    return $result;
  }
  // 新增替换
  function replace()
  {
    if ($this->before_replace) {
    }
    $sql = "REPLACE INTO `$this->dbname`.`$this->tbname`";
  }
  // 精准查询
  function select($item, $order = [], $size = null, $page = null)
  {
    if ($this->before_select) {
      $item = call_user_func($this->before_select, $item, $order, $size, $page);
    }
    $orders = implode(", ", $order);

    $sql = "SELECT * FROM `$this->dbname`.`$this->tbname` "
      . $this->sql_condition($item)
      . (strlen($orders) !== 0 ? " ORDER BY $orders " : "")
      . (!is_null($size) ? " LIMIT $size " : "")
      . ((!is_null($page) && !is_null($size)) ? (" OFFSET " . ($page - 1) * $size) : "");

    if ($this->before_select_execute) {
      $sql = call_user_func($this->before_select_execute, $sql, $item, $order, $size, $page);
    }

    $result = $this->conn->fetchAllAssociative(
      $sql,
      (array)$item,
      $this->column_value_type($item)
    );
    if ($this->selected) {
      $result = call_user_func($this->selected, $result, $item, $order, $size, $page);
    }
    return $result;
  }
  // 模糊查询
  function furrzy($item)
  {
    $sql = "SELECT * FROM `$this->dbname`.`$this->tbname`";
  }

  function count($item)
  {
    if ($this->before_count) {
      $result = call_user_func($this->before_count, $item);
    }
    $sql = "SELECT COUNT(*) FROM (SELECT * FROM `$this->dbname`.`$this->tbname` "
      . $this->sql_condition($item)
      . ") AS `count`";

    if ($this->before_count_execute) {
      $sql = call_user_func($this->before_count_execute, $sql, $item);
    }

    $result = (int)$this->conn->fetchOne(
      $sql,
      (array)$item,
      $this->column_value_type($item)
    );
    if ($this->counted) {
      $sql = call_user_func($this->counted, $result, $item);
    }
    return $result;
  }
  /**
   * 生成SQL查询条件语句
   */
  private function sql_condition($item)
  {
    $sql = '';
    foreach ($item as $column => $value) {
      if (is_null($value) || (is_array($value) && sizeof($value) == 0)) continue;
      if (is_array($value)) {
        $sql .= "AND `$column` IN (:$column) ";
      } else {
        $sql .= "AND `$column` LIKE :$column ";
      }
    }
    if (strlen($sql) == 0) {
      return '';
    } else {
      return ' WHERE ' . substr($sql, 4);
    }
  }

  private function sql_update_set($item)
  {
    $sql = '';
    foreach ($item as $column => $value) {
      $sql .= ", `$column` = :$column ";
    }
    if (strlen($sql) == 0) {
      return '';
    } else {
      return ' SET ' . substr($sql, 2);
    }
  }

  private function column_value_type($item)
  {
    $params = [];
    foreach ($item as $column => $value) {
      if (is_null($value)) continue;
      if (is_array($value)) {
        $params[$column] = \Doctrine\DBAL\Connection::PARAM_STR_ARRAY;
      }
    }
    return $params;
  }
}

<?php

use Langnang\Component\TypechoComponent;

class TypechoFieldController extends TypechoComponent
{
  private static $_tbname = "fields";
  /**
   * 新增字段
   */
  public static function insert($conn, $field, $db)
  {
    // 判断需要新增的数据是否已存在
    // 存在则返回对应实例
    if (self::is_exists($conn, $field, $db)) return "字段数据已存在";
    // 不存在则新增
    $sql = '
    INSERT INTO `:dbname`.`:tbname`
      (`cid`, `name`, `type`, `str_value`, `int_value`, `float_value`)
    VALUES
      (?, ?, ?, ?, ?, ?);
    ';
    $sql = self::__sql(self::$_tbname, $sql, $db);
    $state = $conn->executeStatement($sql, array($field->cid, $field->name, $field->type, $field->str_value, $field->int_value, $field->float_value));
    // var_dump($resultSet);
    return $state;
  }
  public static function delete($conn, $cid, $db)
  {
    $sql = '
    DELETE FROM `:dbname`.`:tbname`
    WHERE `cid` = ?';
    $sql = self::__sql(self::$_tbname, $sql, $db);
    $state = $conn->executeStatement($sql, array($cid));
    return $state === 1;
  }
  public static function select($conn, $cid, $db)
  {
    $sql = '
    SELECT *
    FROM `:dbname`.`:tbname`
    WHERE
	    `cid` = ?;';
    $sql = self::__sql(self::$_tbname, $sql, $db);
    $resultSet = $conn->executeQuery($sql, array($cid));
    $result = $resultSet->fetchAllAssociative();
    return $result;
  }
  private static function is_exists($conn, $field, $db)
  {
    $sql = 'SELECT * FROM `:dbname`.`:tbname` WHERE `cid` = ? AND `name` = ?;';
    $data = array($field->cid, $field->name);
    return self::__is_exists($conn, $field, $db, self::$_tbname, $sql, $data);
  }
}

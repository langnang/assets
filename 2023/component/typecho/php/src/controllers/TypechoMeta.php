<?php

use Langnang\Component\TypechoComponent;

class TypechoMetaController extends TypechoComponent
{
  private static $_tbname = "metas";
  /**
   * 新增元信息
   */
  public static function insert($conn, $meta, $db)
  {
    // 判断需要新增的数据是否已存在
    // 存在则返回对应实例
    if (self::is_exists($conn, $meta, $db)) return "元信息数据已存在";
    // 不存在则新增
    $sql = '
    INSERT INTO `:dbname`.`:tbname`
      ( `name`, `slug`, `type`, `description`, `count`, `order`, `parent`)
    VALUES
      ( ?, ?, ?, NULL, 0, 0, 0);
    ';
    $sql = self::__sql(self::$_tbname, $sql, $db);
    $state = $conn->executeStatement($sql, array($meta->name, $meta->slug, $meta->type));
    self::is_exists($conn, $meta, $db);
    return $state;
  }
  public static function delete($conn, $mid, $db)
  {
    $sql = '
    DELETE FROM `:dbname`.`:tbname`
    WHERE `mid` = ?';
    $sql = self::__sql(self::$_tbname, $sql, $db);
    $state = $conn->executeStatement($sql, array($mid));
    return $state === 1;
  }
  public static function select($conn, $mid, $db)
  {
    $sql = '
    SELECT *
    FROM `:dbname`.`:tbname`
    WHERE
	    `mid` = ?;';
    $sql = self::__sql(self::$_tbname, $sql, $db);
    $resultSet = $conn->executeQuery($sql, array($mid));
    $result = $resultSet->fetchAssociative();
    return $result;
  }
  private static function is_exists($conn, $meta, $db)
  {
    $sql = 'SELECT * FROM `:dbname`.`:tbname` WHERE `type` = ? AND `slug` = ?;';
    $data = array($meta->type, $meta->slug);
    return self::__is_exists($conn, $meta, $db, self::$_tbname, $sql, $data);
  }
}

<?php

use Langnang\Component\TypechoComponent;

class TypechoRelationshipController extends TypechoComponent
{
  private static $_tbname = "relationships";
  /**
   * 新增元信息
   */
  public static function insert($conn, $relationship, $db)
  {
    // 判断需要新增的数据是否已存在
    // 存在则返回对应实例
    if (self::is_exists($conn, $relationship, $db)) return "联系数据已存在";
    // 不存在则新增
    $sql = '
    INSERT INTO `:dbname`.`:tbname`
      (`cid`, `mid`)
    VALUES
      (?, ?);
    ';
    $sql = self::__sql(self::$_tbname, $sql, $db);
    $state = $conn->executeStatement($sql, array($relationship->cid, $relationship->mid,));
    self::is_exists($conn, $relationship, $db);
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
  private static function is_exists($conn, $relationship, $db)
  {
    $sql = 'SELECT * FROM `:dbname`.`:tbname` WHERE `cid` = ? AND `mid` = ?;';
    $data = array($relationship->cid, $relationship->mid);
    return self::__is_exists($conn, $relationship, $db, self::$_tbname, $sql, $data);
  }
}

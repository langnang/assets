<?php


use Doctrine\DBAL\ParameterType;
use Langnang\Component\TypechoComponent;

class TypechoContentController extends TypechoComponent
{
  private static $_tbname = "contents";
  /**
   * 新增内容
   */
  public static function insert($conn, $content, $db)
  {
    // 判断需要新增的数据是否已存在
    if ($content->title === '') return false;
    // 存在则返回对应实例
    if (self::is_exists($conn, $content, $db)) return "数据已存在";
    // 不存在则新增
    $sql = '
    INSERT INTO `:dbname`.`:tbname`
      (`title`, `created`, `modified`, `text`, `order`, `authorId`, `template`, `type`, `status`, `password`, `commentsNum`, `allowComment`, `allowPing`, `allowFeed`, `parent`)
    VALUES
      (?, unix_timestamp(now()), unix_timestamp(now()), ?, 0, 1, NULL, \'post\', \'publish\', NULL, 0, \'1\', \'1\', \'1\', 0);
    ';
    $sql = self::__sql(self::$_tbname, $sql, $db);
    $state = $conn->executeStatement($sql, array($content->title, $content->text));
    // var_dump($resultSet);
    self::is_exists($conn, $content, $db);
    return true;
  }
  /**
   * 删除内容
   */
  public static function delete($conn, $cid, $db)
  {
    $sql = '
    DELETE FROM `:dbname`.`:tbname`
    WHERE `cid` = ?';
    $sql = self::__sql(self::$_tbname, $sql, $db);
    $state = $conn->executeStatement($sql, array($cid));
    return $state === 1;
  }
  /**
   * 更新
   */
  function update($conn, $content, $db)
  {
    $sql = '
    UPDATE `:dbname`.`:tbname`
    SET
      `title` = ?,
      `modified` = unix_timestamp(now()),
      `text` = ?,
    WHERE
	    `cid` = ?;';
    $sql = self::__sql(self::$_tbname, $sql, $db);
    $state = $conn->executeStatement($sql, array($content->title, $content->text, $content->cid));
    return $state === 1;
  }
  /**
   * 查询
   */
  public static function select($conn, $cid, $db)
  {
    $sql = '
    SELECT *
    FROM `:dbname`.`:tbname`
    WHERE
	    `cid` = ?;';
    $sql = self::__sql(self::$_tbname, $sql, $db);
    $resultSet = $conn->executeQuery($sql, array($cid));
    $result = $resultSet->fetchAssociative();
    return $result;
  }
  /**
   * 随机查询
   */
  public static function random($conn, $db, $num = 1)
  {
    $sql = '
    SELECT
      *
    FROM
      `:dbname`.`:tbname`
    WHERE
      `cid` >= (
        ( SELECT MAX( `cid` ) FROM `:dbname`.`:tbname` )
          -
        ( SELECT MIN( `cid` ) FROM `:dbname`.`:tbname` )
      ) * RAND()
        +
      ( SELECT MIN( `cid` ) FROM `:dbname`.`:tbname` )
    LIMIT ?
    ';
    $sql = self::__sql(self::$_tbname, $sql, $db);
    $resultSet = $conn->executeQuery($sql, array($num), array(ParameterType::INTEGER));
    $result = $resultSet->fetchAllAssociative();
    return $result;
  }
  /**
   * 模糊查询标题
   */
  public static function like_title($conn, $title, $db)
  {
    $sql = '
    SELECT
      `title`
    FROM
      `:dbname`.`:tbname`
    WHERE
      `title` LIKE
    LIMIT ?
    ';
    $sql = self::__sql(self::$_tbname, $sql, $db);
    $resultSet = $conn->executeQuery($sql, array('%' . $title . '%'),);
    $result = $resultSet->fetchAllAssociative();
    return $result;
  }
  /**
   * 检测所存储的数据是否已存在
   * @param $conn
   * @param $content
   * @param $db
   * @return boolean
   */
  private static function is_exists($conn, $content, $db)
  {
    $sql = 'SELECT * FROM `:dbname`.`:tbname` WHERE `cid` = ? OR `title` = ?';
    $data = array($content->cid, $content->title);
    return self::__is_exists($conn, $content, $db, self::$_tbname, $sql, $data);
  }
}

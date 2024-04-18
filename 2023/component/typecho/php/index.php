<?php

namespace Langnang\Component;

use TypechoContentController;
use TypechoContent;
use TypechoFieldController;
use TypechoFieldModel;
use TypechoMetaController;
use TypechoMetaModel;
use TypechoRelationshipController;
use TypechoRelationshipModel;

/**
 * class Typecho
 * @package Component
 * 
 * @method insert_post 新增内容
 * @method delete_post_by_id 根据ID删除内容
 * @method update_post_by_id 根据ID更新内容
 * @method select_post_info_by_id 根据ID查询单个内容
 * @method select_post_list 根据条件查询列表
 */
class TypechoComponent
{
  private static $_conn;
  private static $_db;
  /**
   * 新增文章
   */
  public static function insert_post($conn, $data, $db)
  {
    /* 内容 */
    $content = new TypechoContent(array(
      "title" => $data["title"],
      "text" => $data["text"]
    ));
    $state = TypechoContentController::insert($conn, $content, $db);
    if (is_string($state)) return $state;
    /* 自定义字段 */
    $fields = array();
    if (isset($data["fields"])) {
      foreach ($data["fields"] as $key => $value) {
        $field = new TypechoFieldModel(
          array(
            "cid" => $content->cid,
            "name" => $key,
            "value" => $value,
          )
        );
        $state = TypechoFieldController::insert($conn, $field, $db);
        array_push($fields, $field);
      }
    }
    /* 元信息: 目录 */
    $categories = array();
    if (isset($data["categories"])) {
      foreach ($data["categories"] as  $value) {
        $category = new TypechoMetaModel(
          array(
            "type" => "category",
            "name" => $value,
          )
        );
        $state = TypechoMetaController::insert($conn, $category, $db);
        array_push($categories, $category);
      }
    }
    /* 元信息: 标签 */
    $tags = array();
    if (isset($data["tags"])) {
      foreach ($data["tags"] as  $value) {
        $tag = new TypechoMetaModel(
          array(
            "type" => "tag",
            "name" => $value,
          )
        );
        $state = TypechoMetaController::insert($conn, $tag, $db);
        array_push($tags, $tag);
      }
    }
    /* 关联元信息 */
    foreach (array_merge(array(), (array)$categories, (array)$tags) as $item) {
      $relationship = new TypechoRelationshipModel(array(
        "cid" => $content->cid,
        "mid" => $item->mid,
      ));
      TypechoRelationshipController::insert($conn, $relationship, $db);
    }
    return array(
      "content" => $content,
      "fields" => $fields,
      "categories" => $categories,
      "tags" => $tags,
    );
  }
  /**
   * 删除文章
   */
  public static function delete_post($conn, $cid, $db)
  {
    // 删除关联
    TypechoRelationshipController::delete($conn, $cid, $db);
    // 删除字段
    TypechoFieldController::delete($conn, $cid, $db);
    // 删除评论
    // 删除内容
    TypechoContentController::delete($conn, $cid, $db);
  }
  function update_post($conn, $data, $db)
  {
  }
  /**
   * 根据ID查询文章
   */
  public static function select_post($conn, $cid, $db)
  {
    $content = TypechoContentController::select($conn, $cid, $db);
    $content["fields"] = TypechoFieldController::select($conn, $content["cid"], $db);
    $content["categories"] = array();
    $content["tags"] = array();
    foreach (TypechoRelationshipController::select($conn, $content["cid"], $db) as $relationship) {
      $meta = TypechoMetaController::select($conn, $relationship["mid"], $db);
      if ($meta["type"] == "category") {
        array_push($content["categories"], $meta);
      } else if ($meta["type"] == "tag") {
        array_push($content["tags"], $meta);
      }
    }
    return $content;
  }
  // 查询指定数量的随机文章
  public static function select_random_post($conn, $db, $num = 1)
  {
    $result = array();
    $contents = TypechoContentController::random($conn, $db, $num);
    foreach ($contents as $content) {
      array_push($result, self::select_post($conn, $content["cid"], $db));
    }
    return $result;
  }

  /**
   * sql 生成
   */
  protected static function __sql($tbname, $sql, $db)
  {
    return str_replace(array(":dbname", ":tbname"), array($db["database"], $db["prefix"] . $tbname), $sql,);
  }
  /**
   * 检测所存储的数据是否已存在
   * 如果存在则重新实例化，不存在返回 false
   * @param $conn
   * @param $model
   * @param $db
   * @param $tbname
   * @param $sql
   * @param $data
   * @return boolean
   */
  protected static function __is_exists($conn, $model, $db, $tbname, $sql, $data)
  {
    $sql = self::__sql($tbname, $sql, $db);
    $resultSet = $conn->executeQuery($sql, $data);
    $result = $resultSet->fetchAssociative();
    if (!$result || count($result) === 0) return false;
    $model->__construct($result);
    return true;
  }
  function __insert($conn, $model, $db)
  {
    // 判断需要新增的数据是否已存在
    // self::is_exists($conn, $model, $db);
    // 存在则返回对应实例
    // 不存在则新增
  }
  function __delete()
  {
  }
  public static function __setter($key, $value)
  {
    switch ($key) {
      case "conn":
        self::$_conn = $value;
        break;
      case "db":
        self::$_db = $value;
        break;
      default:
        break;
    }
  }
}



require_once __DIR__ . "/src/models/TypechoComment.php";
require_once __DIR__ . "/src/models/TypechoContent.php";
require_once __DIR__ . "/src/models/TypechoField.php";
require_once __DIR__ . "/src/models/TypechoLog.php";
require_once __DIR__ . "/src/models/TypechoMeta.php";
require_once __DIR__ . "/src/models/TypechoOption.php";
require_once __DIR__ . "/src/models/TypechoRelationship.php";
require_once __DIR__ . "/src/models/TypechoUser.php";

require_once __DIR__ . "/src/controllers/TypechoContent.php";
require_once __DIR__ . "/src/controllers/TypechoField.php";
require_once __DIR__ . "/src/controllers/TypechoMeta.php";
require_once __DIR__ . "/src/controllers/TypechoRelationship.php";

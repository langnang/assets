<?php

class WebSiteModel
{
  public $id;
  public $url;
  public $title;
  public $keywords;
  public $description;
  public $shortcut;
  public $metas;
  public $links;
  public $order;
  public $parent;
  public $type; // post draft
  public $status; // public protected private
  public $create_time;
  public $update_time;

  function __construct($data = [])
  {
    foreach ($data as $key => $value) {
      if (is_null($value))  continue;
      if (!property_exists($this, $key)) continue;
      $this->{$key} = $value;
    }
  }
}

class WebSiteController extends MySQLModule
{
  function __construct()
  {
    $config = array_merge($GLOBALS["env_config"]["__cloud__"], $GLOBALS["env_config"]["website"]);
    $config["tbname"] = $config["prefix"] . "";
    $this->init($config);

    $this->before_insert = function ($item) {
      $item->create_time = date('Y-m-d H:i:s');
      $item->update_time = date('Y-m-d H:i:s');
      return $item;
    };
    $this->inserted = function ($result, $item) {
      $item->metas = null;
      $item->links = null;
      return $this->select($item, ["create_time DESC"], 1)[0];
    };
    $this->before_update = function ($old_item, $new_item) {
      $new_item->update_time = date('Y-m-d H:i:s');
      return $new_item;
    };
    $this->updated = function ($result, $old_item, $new_item) {
      $new_item->update_time = null;
      return $this->select(new WebSiteModel(["id" => $new_item->id]), ["update_time DESC"], 1)[0];
    };
  }

  function create()
  {
    $sql =
      "CREATE TABLE `develop`.`Untitled`  (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `url` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
        `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
        `keywords` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
        `description` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
        `shortcut` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
        `metas` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
        `status` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
        `links` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
        `type` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
        `order` int(6) NULL DEFAULT NULL,
        `parent` int(11) NULL DEFAULT NULL,
        `create_time` timestamp NULL DEFAULT NULL,
        `update_time` timestamp NULL DEFAULT NULL,
        PRIMARY KEY (`id`) USING BTREE
      ) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;";
  }


  function keywords($keyword)
  {
    $sql =
      "SELECT * FROM (
        SELECT DISTINCT
          TRIM( SUBSTRING_INDEX( SUBSTRING_INDEX( t1.keywords, ',', t2.help_topic_id + 1 ), ',',- 1 ) )  AS keyword
        FROM
          `$this->dbname`.`$this->tbname` t1
          JOIN mysql.help_topic t2 ON t2.help_topic_id < ( length( t1.keywords ) - length( REPLACE ( t1.keywords, ',', '' )) + 1 ) 
        WHERE
          t1.keywords LIKE '%,%'
        UNION
        SELECT DISTINCT
          TRIM( SUBSTRING_INDEX( SUBSTRING_INDEX( t1.keywords, '|', t2.help_topic_id + 1 ), '|',- 1 ) ) AS keyword
        FROM
          `$this->dbname`.`$this->tbname` t1
          JOIN mysql.help_topic t2 ON t2.help_topic_id < ( length( t1.keywords ) - length( REPLACE ( t1.keywords, '|', '' )) + 1 ) 
        WHERE
          t1.keywords LIKE '%|%'
      ) AS t
      WHERE
        t.keyword LIKE '%$keyword%'
      ORDER BY
        t.keyword
      
    ";
    $result = $this->conn->fetchAllAssociative(
      $sql,
      array()
    );
    return array_map(function ($item) {
      return $item["keyword"];
    }, $result);
  }
}

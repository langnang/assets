<?php

class TypechoContent
{
  public $cid;
  // 标题
  // 数据库字段长度限制为200，中文截取字符会存在乱码
  public $title;
  public $slug;
  public $created;
  public $modified;
  public $text;
  public $order;
  public $authorId;
  public $template;
  public $type;
  public $status;
  public $password;
  public $commentsNum;
  public $allowComment;
  public $allowPing;
  public $allowFeed;
  public $parent;

  function __construct($params)
  {
    $this->cid = (int)(isset($params["cid"]) ? $params["cid"] : 0);
    $this->title = strlen($params["title"]) > 200 ? mb_strcut($params["title"], 0, 200) : $params["title"];
    if (substr($params["text"], 0, 15) === '<!--markdown-->') {
      $this->text = $params["text"];
    } else {
      $this->text = '<!--markdown-->' . $params["text"];
    }
  }
}

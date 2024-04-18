<?php

namespace Langnang\Typecho;

use Langnang\Typecho\TypechoInterface;
use Langnang\Typecho\TypechoModel;

class TypechoUserModel extends TypechoModel
{
  public $uid;
  public $name;
  // public $password;
  public $mail;
  public $url;
  public $screenName;
  public $created;
  public $activated;
  public $logged;
  public $group;
  // public $authCode;
  protected $suffix_tbname = "users";

  function setUid($uid)
  {
    if (!is_null($uid)) {
      $this->uid = (int)$uid;
    }
  }

  function setCreated($created)
  {
    if (!is_null($created)) {
      $this->created = date('Y-m-d H:m:s', (int)$created);
    }
  }

  function setActivated($activated)
  {
    if (!is_null($activated)) {
      $this->activated = date('Y-m-d H:m:s', (int)$activated);
    }
  }
  function setLogged($logged)
  {
    if (!is_null($logged)) {
      $this->logged = date('Y-m-d H:m:s', (int)$logged);
    }
  }
}

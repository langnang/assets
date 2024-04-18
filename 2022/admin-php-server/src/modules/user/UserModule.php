<?php

namespace Langnang\Module\User;

class UserModule
{
  function init()
  {
  }
}


class UserModel
{
  public $uid;
  public $name;
  public $password;
  public $email;
  public $create_time;
  public $update_time;
  public $delete_time;
}

interface UserInterface
{
}

class UserController implements UserInterface
{
}

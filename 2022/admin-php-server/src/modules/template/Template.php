<?php

namespace Langnang\Component\Template;

class TemplateModel
{
  /**
   * 构造方法
   */
  function __construct($model = array(), ...$args)
  {
    foreach ($model as $name => $value) {
      $this->__set($name, $value);
    }
    if (method_exists($this, '__self__construct')) {
      $this->{'__self__construct'}($model, ...$args);
    }
  }

  function __set($name, $value)
  {
    if (method_exists($this, 'set' . $name)) {
      $this->{'set' . $name}($value);
    } else if (!property_exists($this, $name)) {
      return;
    } else {
      $this->{$name} = $value;
    }
  }
  function __get($name)
  {
    if (method_exists($this, 'get' . $name)) {
      $this->{'get' . $name}();
    } else
    if (!isset($this->{$name})) return;
    return $this->{$name};
  }
}

class TemplateController
{
}

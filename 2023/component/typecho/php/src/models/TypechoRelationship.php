<?php

class TypechoRelationshipModel
{
  public $cid;
  public $mid;
  function __construct($params)
  {
    $this->cid = (int)(isset($params["cid"]) ? $params["cid"] : 0);
    $this->mid = (int)(isset($params["mid"]) ? $params["mid"] : 0);
  }
}

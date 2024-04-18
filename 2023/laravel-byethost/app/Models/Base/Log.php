<?php

namespace App\Models\Base;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Log extends Model
{
  use HasFactory;
  public $table = '_logs';
  protected $hidden = [
    'user'
  ];
  public function toArray()
  {
    $return = parent::toArray();
    if ($return['type'] == 'json') {
      $return['value'] = json_decode($return['value'], true);
    }
    return $return;
  }
}

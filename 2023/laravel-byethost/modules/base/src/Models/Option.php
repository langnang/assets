<?php

namespace App\Modules\Base\Models;


use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Option extends Model
{
  use HasFactory;

  public $table = '_options';
  public $primaryKey = 'name';
  public $incrementing = false;
  protected $hidden = [
    'user',
    'id',
  ];
  protected $fillable = [
    'name',
    'type',
    'description',
    'value',
    'created_at',
    'updated_at',
    'release_at',
    'deleted_at'
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

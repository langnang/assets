<?php

namespace App\Models\Base;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class LinkRule extends Model
{
  use HasFactory;
  public $table = '_rules';
  public $primaryKey = "id";
  public $parentColumn = 'parent';

  protected $casts = [
    "text" => "array",
  ];
}

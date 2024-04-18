<?php

namespace App\Modules\Base\Models;


use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Link extends Model
{
  use HasFactory;
  public $table = '_links';
  public $primaryKey = "lid";
}

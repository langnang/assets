<?php

namespace App\Modules\Base\Models;


use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Relationship extends Model
{
  use HasFactory;
  public $table = '_relationships';
}

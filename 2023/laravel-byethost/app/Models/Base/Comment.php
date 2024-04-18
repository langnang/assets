<?php

namespace App\Models\Base;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
  use HasFactory;
  public $table = '_comments';
}

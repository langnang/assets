<?php

namespace App\Modules\Base\Models;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
  use HasFactory;
  public $table = '_comments';
}

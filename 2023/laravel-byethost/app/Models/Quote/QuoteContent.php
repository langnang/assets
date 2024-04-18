<?php

namespace App\Models\Quote;

use App\Models\Base\Content;
use App\Traits\WebStackTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class QuoteContent extends Content
{
  use \App\Traits\Modules\QuoteTrait;
}
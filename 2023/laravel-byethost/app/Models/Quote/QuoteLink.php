<?php

namespace App\Models\Quote;

use App\Models\Base\Link;
use App\Traits\WebStackTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class QuoteLink extends Link
{
  use \App\Traits\Modules\QuoteTrait;
}

<?php

namespace App\Models\Typecho;

use Illuminate\Database\Eloquent\Factories\HasFactory;


class TypechoField extends \App\Models\Typecho\Typecho
{
    use HasFactory;

    protected $prefix = "typecho";
    protected $ucPrefix = "Typecho";
    protected $table = "typecho_fields";

    protected $primaryKey = "id";
    public function children()
    {
        return $this->hasMany("App\Models\\" . ucfirst($this->prefix) . "\\" . ucfirst($this->prefix) . "Field", "parent", "id")->with(['children']);
    }
}

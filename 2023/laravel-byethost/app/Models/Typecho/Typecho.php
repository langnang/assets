<?php

namespace App\Models\Typecho;

use Illuminate\Database\Eloquent\Factories\HasFactory;


class Typecho extends Model
{
    use HasFactory;
    protected $prefix;

    protected $ucPrefix;

    protected $table;

    protected $columns;

    protected $spliceColumns;

    protected $primaryKey;

    protected $parentColumn = 'parent';

    protected $prevColumn;

    protected $nextColumn;
    /**
     *
     */
    public function getPrefix()
    {
        return $this->prefix;
    }
    /**
     *
     */
    public function getUcPrefix()
    {
        return $this->ucPrefix;
    }
    public function getTable()
    {
        return $this->table;
    }
    public function getPrimaryKey()
    {
        return $this->primaryKey;
    }
    public function getColumns()
    {
        if (isset($this->spliceColumns) && !empty($this->spliceColumns)) {
            foreach ($this->spliceColumns as $splice) {
                array_splice($this->columns, ...$splice);
            }
        }
        return empty($this->columns) ? [] : $this->columns;
    }
    public function _metas()
    {
    }
    public function _contents()
    {
    }
    public function _comments()
    {
    }
    public function _links()
    {
    }
    public function template_children()
    {
        return $this->hasMany(static::class, 'template', $this->primaryKey)->with(['children']);
    }
    /**
     * 子元素
     */
    public function children()
    {
        return $this->hasMany(static::class, $this->parentColumn, $this->primaryKey)->with(['children']);
    }
    /**
     * 子孙元素
     */
    public function descendants()
    {
    }
    /**
     * 父元素
     */
    public function parent()
    {
    }
    /**
     * 祖先元素
     */
    public function ancestors()
    {
    }
    public function prev()
    {
    }

    public function next()
    {
    }
}

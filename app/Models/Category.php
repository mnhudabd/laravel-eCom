<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($category){
            $category->slug = str_slug($category->title);
        });
    }

    public function parent_category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
    	return $this -> belongsTo(__CLASS__);
    }

    public function child_category():  \Illuminate\Database\Eloquent\Relations\HasMany

    {
    	return $this->hasMany(__CLASS__);
    }

    public function products(): \Illuminate\Database\Eloquent\Relations\HasMany

    {
    	return $this->hasMany(Product::class);
    }
}

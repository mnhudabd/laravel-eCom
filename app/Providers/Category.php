<?php

namespace App\Providers;

use App\Providers\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    protected $guarded = [];

    public static function boot(): void
    {
        parent::boot();

        static::creating(function ($category){
            $category -> slug = str::slug($category -> name);
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

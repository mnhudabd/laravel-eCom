<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Illuminate\Support\Str;

class Product extends Model implements HasMedia
{
	use HasMediaTrait;

    protected $guarded = [];

    /**
    * the "booting" method of the model,
    *
    * @return void

    */

    protected static function boot() 
    {
    	parent::boot();

    	static::creating(function ($product) {
    		$product -> slug = str::slug($product -> title);
    	});
    }

    public function category(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
    	return $this->hasOne(Category::class);
    }
}

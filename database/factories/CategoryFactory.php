<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Category;
use Faker\Generator as Faker;



$factory -> define (App\Models\Category::class, function (Faker $faker) {
    return [
        
        'name' => $faker -> colorName,
        'banner' => $faker -> imageUrl(),
    ];
});

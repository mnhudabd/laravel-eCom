<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Category;
use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(App\Models\Product::class, function (Faker $faker) {
    return [
        'category_id' => Category::all()->random()->id,
        'title' => $faker->text(25),
        'description' => $faker->realText(),
        'price' => random_int(700, 2000),
        'sale_price' => random_int(0, 2000),
    ];
});

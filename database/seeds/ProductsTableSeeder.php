<?php

use App\Models\Product;
use Illuminate\Database\Seeder;


class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
    	
        factory(App\Models\Product::class, 30)->create();

        $products = Product::select('id')->get();

        foreach ($products as $product) {
        	$product->addMediaFromUrl('https://lorempixel.com/640/480/?43477')->toMediaCollection('products');
        }
    }
}

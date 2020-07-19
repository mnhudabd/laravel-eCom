<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class CartController extends Controller
{
    public function showCart()
    {

    }

    public function addToCart(Request $request)
    {
    	$cart = [];

    	$cart['product'] = [
    		[
    			'id' => 1,

    			'title' => 1,

    			'quantity' => 1,
    			'price' = 100,

    		],

    		[
    			'id' => 2,

    			'title' => 2,

    			'quantity' => 2,
    			'price' = 100,

    		],

    	];

    	//$cart['total_price'] = 100;


    	try {
    		$this->validate($request, [

    		'product_id' => 'required|numeric',

    	]);
    	} catch (ValidationException $e){

    		return redirect()->back();

    	}

    	$product = Product::findOrFail($request->input('product_id'));

    	$cart['products'] = [

    		'id' => $product->id,
    		'title' => $product->title,
    		'quantity' => 1,
    		'price' => $product->price,
    	];
    }
}

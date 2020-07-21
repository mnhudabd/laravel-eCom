<?php

namespace App\Http\Controllers\Frontend;


use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class CartController extends Controller
{
    	public function showCart()
    	{
    		
    		$data = [];
    		$data['cart'] = session()->has('cart') ? session()->get('cart') : [];

    		return view('frontend.cart', $data);

    	}
    	
    	public function addToCart(Request $request)
    	{
    		try {
			$this->validate($request, [

				'product_id' => 'required|numeric',
			]);

		} catch (ValidationExeption $e) {
			return redirect()->back();
		}

		$product = Product::findOrFail($request->input('product_id'));
		$cart = session()->has('cart') ? session()->get('cart') : [];

		if (array_key_exists($product->id, $cart)) {
			$cart[$product->id]['quantity']++;
		} else {
			$cart[$product->id] = [
				'title' => $product->title,
				'quantity' => 1,
				'price' => ($product->sale_price !== null && $product->sale_price > 0 ) ? $product->sale_price : $product->price,
			];

		}
	
		session(['cart' => $cart]);

		session()->flash('message', $product->title.' added to cart');

		return redirect()->route('cart.show');


    }
}

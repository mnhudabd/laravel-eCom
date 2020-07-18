<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;

class HomeController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function showHomePage()
    {
        $data = [];
        $data['products'] = Product::select(['id', 'title', 'slug', 'price', 'sale_price'])
            ->where('active', 1)
            ->paginate(8);

        return view('frontend.home', $data);
    }

    
}

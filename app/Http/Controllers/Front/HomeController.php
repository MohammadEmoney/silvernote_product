<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;

class HomeController extends Controller
{
    public function home()
    {
        $products = Product::homeProducts();
        // dd($products);
        return view('front.home', compact('products'));
    }

    public function show(Product $product)
    {
        return view('front.blog.single', compact('product'));
    }
}

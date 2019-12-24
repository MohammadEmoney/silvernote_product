<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;

class HomeController extends Controller
{
    public function home()
    {
        $products = Product::orderBy('id', 'DESC')->take(6)->get()->chunk(3);
        // dd($products[0]);
        return view('front.home', compact('products'));
    }
}

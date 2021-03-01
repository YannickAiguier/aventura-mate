<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homeShowController()
    {
        CartController::initCart();
        $products = Product::take(3)->get();
        return view('home', ['products' => $products]);
    }
}

//$product = product::find(1);
//return view('home', ['product' => $product]);

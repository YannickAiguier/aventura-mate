<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function HomeShowcontroller () {
        $product = product::find(1);
}
}

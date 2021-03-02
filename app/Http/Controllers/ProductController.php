<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of all the products
     */
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('catalog', [
            'products' => $products,
            'categories' => $categories
        ]);
    }

    //appel de la vue catalogue de produits filtrés par catégorie
    public function indexByCategory (int $categoryId)
    {
        $products = Product::where('categories_id', $categoryId)->get();
        $category = Category::findOrFail($categoryId);
        $categories = Category::all();
        return view('catalog', [
            'products' => $products,
            'category' => $category,
            'categories' => $categories
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified product according to its id in the URI
     *
     * @param  \App\Models\Product  $product
     * return \Illuminate\Http\Response
     */
    public static function show(int $id)
    {
        $featuresProduct = Product::findOrFail($id);
        return view('product', ['product' => $featuresProduct]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}

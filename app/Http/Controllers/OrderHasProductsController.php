<?php

namespace App\Http\Controllers;

use App\Models\OrderHasProducts;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Void_;

class OrderHasProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public static function  store(int $orderId, int $productId, int $quantity)
    {
        $product = Product::find($productId);
        DB::table('order_has_products')->insert([
            'orders_id' => $orderId,
            'products_id' => $productId,
            'quantity' => $quantity,
            'price' => $product->price,
            'title' => $product->title,
            'weight' => $product->weight,
            'vat' => $product->vat,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OrderHasProducts  $order_has_Products
     * @return \Illuminate\Http\Response
     */
    public function show(OrderHasProducts $order_has_Products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OrderHasProducts  $order_has_Products
     * @return \Illuminate\Http\Response
     */
    public function edit(OrderHasProducts $order_has_Products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OrderHasProducts  $order_has_Products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrderHasProducts $order_has_Products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrderHasProducts  $order_has_Products
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrderHasProducts $order_has_Products)
    {
        //
    }
}

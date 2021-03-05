<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderHasProducts;
use DateInterval;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
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
    public function store()
    {
        $newOrder = new Order;
        $lastOrder = Order::latest()->first();
        $newOrder->number = $lastOrder->number + 1;
        $date = new DateTime('now');
        $newOrder->creation_date = $date->format('Y-m-d');
        $interval = new DateInterval('P5D');
        $date->add($interval);
        $newOrder->delivery_date = $date->format('Y-m-d');
        $newOrder->users_id = Auth::id();
        $newOrder->save();
        // appeler la fonction de creation dans OrderHasProductController
        $lastOrder = Order::latest()->first();
        foreach(session('cart') as $id => $quantity)
        {
            OrderHasProductsController::store($lastOrder->id, $id, $quantity);
        }
        return view('order', ['id' => $lastOrder->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class CartController extends Controller
{
    /**
     * Initiazlize the cart if does not exist
     */
    public static function initCart()
    {
        /*if (!session()->has('cart'))
        {
            session(['cart' => []]);
        }*/
        session()->get('cart', []);
    }

    /**
     * Return total products and price of the cart
     *
     */
    public static function totalCart()
    {
        $total = 0;
        $nbProducts = 0;
        foreach (session('cart') as $id => $quantity) {
            $product = Product::findOrFail($id);
            $total += ($quantity * $product->price_vat);
            $nbProducts += $nbProducts + $quantity;
        }

        return [$total, $nbProducts];
    }

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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tab = session('cart');
        $fid = $request->input('id');
        $fnb = $request->input('nb');

        if (empty($tab) || !array_key_exists($fid, $tab)) {
            $tab[$fid] = $fnb;

        } else {
            $tab[$fid] += $fnb;

        }
        session(['cart' => $tab]);
        return redirect()->action([CartController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     *  Mise à jour du panier (modification des quantités, si quantité = 0 suppression de l'article du panier)
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function update(Request $request)
    {
        $myCart = session('cart');
        foreach ($myCart as $id => $qty)
        {
            // récupération des infos du formulaire par la requête
            $formQty = $request->input('qty_'.$id);
            if ($formQty == 0)
            {
                //supprimer produit panier, pas encore implémenté
            } else
            {
                $myCart[$id] = $formQty;
            }
        }
        session(['cart' => $myCart]);

        return redirect()->action([CartController::class, 'index']);
    }

    /**
     * Suppression d'un produit du panier
     */
    public function destroy(int $id)
    {
        $myCart = session('cart');
        unset($myCart[$id]);
        session(['cart' => $myCart]);

        return redirect()->action([CartController::class, 'index']);
    }
}

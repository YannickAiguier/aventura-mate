@extends('base')
@section('content')

    <?php $productsInCart = session('cart') ?>


<h1>Mon panier</h1>
<form action="{{route('updateCart')}}" method="POST">

    @foreach ($productsInCart as $id => $quantity)
    @csrf
        <div>
            <?php $product = \App\Models\Product::findorfail($id) ?>

            <h3>{{$product->title}}</h3>
            <p>{{$product->price_vat}} €</p>
            <p><input type="number" name="qty_{{$id}}" value="{{$quantity}}"></p>
            <button type="submit" name="deleteProductInCart">Supprimer le produit</button>
        </div>
        <hr>
    @endforeach

    <button type="submit" name="updateCart">Modifier le panier</button>

@endsection

@extends('base')
@section('content')


<h1>Mon panier</h1>
<form action="{{route('updateCart')}}" method="POST">



    @foreach ($products as $product)
    @csrf
        <div>
            <h3>{{$product[0]->title}}</h3>
            <p>{{\App\Models\Product::calculatorVAT($product[0]->id)}} €</p>
            <p><input type="number" name="qty_{{$product[0]->id}}" value="{{$product[1]}}"></p>
            <button type="submit" name="deleteProductInCart">Supprimer le produit</button>
        </div>
        <hr>

    @endforeach

    <button type="submit" name="updateCart">Modifier le panier</button>

@endsection

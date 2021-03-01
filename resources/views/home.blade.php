@extends('base')
@section('content')
<h1>L'accueil le plus compliqué du monde</h1>
@foreach($products as $product)
<div class="card col-3" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">{{$product->title}}</h5>
        <p class="card-text">{{$product->description}}</p>
        <a href="{{route('product', ['id' => $product->id])}}" class="card-link">Prix : {{$product->calculatorVAT($product->id)}} €</a>
    </div>
</div>
@endforeach
@endsection

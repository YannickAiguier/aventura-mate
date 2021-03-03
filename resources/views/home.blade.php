@extends('base')
@section('content')
<h1>L'acceuil la plus compliquée du monde</h1>
@foreach($products as $product)
<div class="card col-3" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">{{$product->title}}</h5>
        <p class="card-text">{{$product->description}}</p>
        <a href="#" class="card-link">Prix : {{$product->price_vat}}</a>
        <form method="post" action="{{route('storeCart')}}" >
            @csrf
            <label for="nb">Nombre : </label>
            <input type="number" id="nb" name="nb"
                   min="0" max="100" value="0" required>
            <input type="hidden" value="{{$product->id}}" name="id">
            <button type="submit" class="btn btn-success">Ajouter au panier</button>
        </form>
    </div>
</div>
@endforeach
@endsection

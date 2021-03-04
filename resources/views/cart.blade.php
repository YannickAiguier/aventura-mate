@extends('base')
@section('content')
    <h1>Mon panier</h1>
    @if(empty($products))
        votre panier est vide
    @else

        @foreach ($products as $product)
            <div>
                <h3>{{$product[0]->title}}</h3>
                <p>{{$product[0]->price_vat}} €</p>
                <form action="{{route('update',$product[0]->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <p><input type="number" name="qty" value="{{$product[1]}}"></p>
                    <button type="submit" name="updateCart">Modifier le produit</button>
                </form>
                <form action="{{route('destroyCart',$product[0]->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" name="destroyCart">Supprimer le produit</button>
                </form>
            </div>
            <hr>
        @endforeach
        <p>{{$total[1]}} article(s) pour un total de {{$total[0]}} €</p>
        @if($loggedIn)
            <form action="{{route('validateCart')}}" method="POST">
                @csrf
                @method('POST')
                <input type="submit" value="Commander">
            </form>
        @else
            <form action="{{route('validateCart')}}" method="POST">
                @csrf
                @method('POST')
                <input type="submit" value="Valider mon panier">
            </form>
        @endif
    @endif
@endsection

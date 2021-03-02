@extends('base')
@section('content')
    <h1> Je suis le produit : {{$product->title}}</h1>
    <article>
        {{$product->description}}
    </article>
    <div class="card col-3" style="width: 18rem;">
        <div class="card-body">
        <h2>Mes caractéristiques</h2>
        <ul class="list-group">
            <li class="list-group-item">Prix : {{$product->price_vat}} €</li>
            <li class="list-group-item">Poid : {{$product->weight}}</li>
            <li class="list-group-item">TVA : {{$product->vat}}</li>
        </ul>
            <form method="post" action="{{route('addCart')}}" >
                @csrf
                <label for="nb">Nombre : </label>
                <input type="number" id="nb" name="nb"
                       min="0" max="100" value="0" required>
                <input type="hidden" value="{{$product->id}}" name="id">
                <button type="submit" class="btn btn-success">Ajouter au panier</button>
            </form>
        </div>
    </div>
@endsection

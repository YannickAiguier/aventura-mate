@extends('base')
@section('content')

    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            Choissisez votre catégorie
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            @foreach($categories as $cat)
            <li><a class="dropdown-item" href="/catalog/{{$cat->id}}">{{$cat->name}}</a></li>
            @endforeach
        </ul>
    </div>

@if (isset($category->name))
    <h1>Tout notre choix : {{$category->name}} </h1>
@else
    <h1>Tout notre choix </h1>
@endif

@foreach ($products as $product)
    <h2><a href="/product/{{$product->id}}">{{$product->title}}</a></h2>
    <p>{{$product->description}}</p>
    <hr>
@endforeach



@endsection


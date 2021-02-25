@extends('base')
@section('content')
<h1>L'acceuil la plus compliquée du monde</h1>
@foreach($product as $value)
<div class="card col-3" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">{{$value->title}}</h5>
        <p class="card-text">{{$value->description}}</p>
        <a href="#" class="card-link">Prix : {{$value->price}}</a>
    </div>
</div>
@endforeach
@endsection

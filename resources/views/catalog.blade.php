@extends('base')

@section('content')
    <h1>Tout notre choix de maté</h1>
    <?php foreach ($products as $product) { ?>
    <h2><a href="/product/<?=$product->id?>"><?=$product->title?></a></h2>
    <p><?=$product->description?></p>
    <hr>
    <?php } ?>
@endsection

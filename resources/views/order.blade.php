
@extends('base')
@section('content')
    <h2>La commande {{$id}} a été expédiée</h2>
    <h1>nom du mec : {{Auth::user()->name}}</h1>
@endsection

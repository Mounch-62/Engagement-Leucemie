@extends("front.base-front")
@section("title")
@parent - Partenaires
@stop
@section("content")
ici on affiche les partenaires
@foreach ($partenaires as $partenaire)
    <p>{{$partenaire->nom}}</p>
    
@endforeach
@stop
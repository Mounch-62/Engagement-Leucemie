@extends('admin.base-admin')
@section('content')
@foreach ($partenaires as $partenaire )
    <p>{{$partenaire['nom']}}</p>
@endforeach
@stop
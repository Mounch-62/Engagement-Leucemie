@extends('admin.base-admin')
@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">titre</th>

    </tr>
  </thead>
  <tbody>
    @foreach ($actualites as $actualite )
           <tr>
                <th scope="row">{{$actualite->id}}</th>
                <td>{{$actualite->titre}}</td>

            </tr> 
    @endforeach


  </tbody>
</table>
 @stop
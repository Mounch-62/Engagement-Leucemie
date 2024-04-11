@extends('admin.base-admin')
@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">Titre</th>
      <th scope="col">Contenu</th>
      <th scope="col">Nombre d'inscrits</th>
      <th scope="col">Date</th>
      <th scope="col">Lieu</th>
      <th scope="col">Ville</th>
      <th scope="col">Adresse</th>
      <th scope="col">Nombre de participant</th>
      <th scope="col">Terminé</th>
      <th>
        <a href="{{ route ('actualite.create') }}">Ajouter</a>
      </th>
    </tr>
  </thead>
  
  <tbody>
    @foreach ($actualites as $actualite)
      <tr class="col">
        <td>{{$actualite->titre}}</td>
        <td>{{$actualite->contenu}}</td>
        <td>{{$actualite->nombre_inscrit}}</td>
        <td>{{date('d-m-Y', strtotime($actualite->date))}}</td>
        <td>{{$actualite->lieu}}</td>
        <td>{{$actualite->ville}}</td>
        <td>{{$actualite->adresse}}</td>
        <td>{{$actualite->nombre_participant}}</td>
        <td>{{$actualite->is_visible}}</td> 
        <td>
          <a href="{{ route('actualite.show', $actualite) }}">Voir</a>
          <form method="post" action="{{ route ('actualite.destroy' , [$actualite['id']])}}">
            @csrf
            @method("delete")
            <input type="submit" value="Supprimer">                                  
          </form>
        </td>
      </tr> 
    @endforeach
  </tbody>
</table>
 @stop
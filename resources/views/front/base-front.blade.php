@extends("base")
@section("title")
Site de Engagement Leucémie
@stop
@section("base-content")


  <div class="">
    <p>56, chemin des Montarmot 25000 BESANCON</p>
    <a></a>
    <a></a>
    <a></a>
    <a></a>
    <a></a>
  </div>
  <div class="d-flex">
    <div class="bg-primary">
      <a>ACCUEIL</a>
      <a>MOELLE OSSEUSE</a>
      <a>DON DE MOELLE OSSEUSE</a>
      <a>L'ASSOCIATION</a>
      <a href="{{ route('front.actualite')}}">NOS ACTUALITÉS</a>
      <a>CONTACT</a>
    </div>
    <button class="border-0 bg-orange">DEVENIR DONNEUR</button>

  </div>


<a href="{{ route('front.actualite')}}">Actualités</a>

@yield("content")

footer

@stop
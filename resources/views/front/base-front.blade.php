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
  <div class="d-flex gap-3 ">
    <nav class="col-9 navbar navbar-expand-lg light bg-primary ">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
      <div class="navbar-nav d-flex flex-row justify-content-center">
        <a class="nav-link active text-light" aria-current="page" href="#">ACCUEIL</a>
        <a class="nav-link text-light text-hover-white" href="#">MOELLE OSSEUSE</a>
        <a class="nav-link text-light" href="#">DON DE MOELLE OSSEUSE</a>
        <a class="nav-link text-light" href="#">L'ASSOCIATION</a>
        <a class="nav-link text-light" href="{{ route('front.actualite')}}">NOS ACTUALITÉS</a>
        <a class="nav-link text-light" href="#">CONTACT</a>
      </div>
    </div>
  </div>
</nav>
    
    <button class="col-3 border-0 bg-orange fw-bold">DEVENIR DONNEUR</button>

  </div>




@yield("content")

footer

@stop
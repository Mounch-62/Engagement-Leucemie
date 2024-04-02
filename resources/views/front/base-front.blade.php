@extends("base")
@section("title")
Site de Engagement Leucémie
@stop
@section("base-content")


  <div class="d-flex col-12  justify-content-center align-items-center p-0" >
    <div class="d-flex col-2 justify-content-center p-0">
      <img src="../public/images/EL.svg" class="img-fluid p-1">
    </div>
    <div class="col-8 p-0">
      <p>56, chemin des Montarmot 25000 BESANCON</p>
    </div>
    <div class="col-2 d-flex justify-content-around ps-3">
      <a href="#" class="d-flex bg-primary justify-content-center align-items-center rounded-5" style="padding-bottom: 1px; height: 21px; width: 21px;">
        <i class="icon bi-twitter-x text-white"></i>
      </a>
      <a href="#" class="d-flex bg-primary justify-content-center align-items-center rounded-5" style="padding-bottom: 1px; height: 21px; width: 21px;">
        <i class="icon bi-tiktok text-white"></i>
      </a>
      <a href="#" class="d-flex justify-content-center align-items-center" style="padding-bottom: 2px; height: 21px; width: 21px;">
        <i class="icon bi-facebook text-primary" style="font-size: 1.3rem;"></i>
      </a>
      <a href="#" class="d-flex bg-primary justify-content-center align-items-center rounded-5" style="padding-bottom: 1px; height: 21px; width: 21px;">
        <i class="icon bi-instagram text-white" style="font-size: 1rem; color: #fff;"></i>
      </a>
    </div>
  </div>

  <div class="d-flex col-12 p-0 ">
      
          <div class="d-flex col-2 justify-content-center align-items-center p-0 bg-primary">
            <img src="../public/images/EngagementLeucemie.svg" class="img-fluid p-1">
          </div>

          <div class="col-8 d-flex p-0">
            <nav class="d-flex justify-content-around navbar navbar-expand-lg bg-primary w-100 p-0" style="border-bottom-right-radius: 50px">
            
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse p-0" id="navbarNavAltMarkup">
                <div class="d-flex navbar-nav justify-content-around w-100">
                  <a class="nav-link active text-light" aria-current="page" href="#">ACCUEIL</a>
                  <a class="nav-link text-light" href="#">MOELLE OSSEUSE</a>
                  <a class="nav-link text-light" href="#">DON DE MOELLE OSSEUSE</a>
                  <a class="nav-link text-light" href="#">L'ASSOCIATION</a>
                  <a class="nav-link text-light" href="{{ route('front.actualite')}}">NOS ACTUALITÉS</a>
                  <a class="nav-link text-light" href="#">CONTACT</a>
                </div>     
              </div>
            </nav> 
          </div> 
      
          <div class="d-flex col-2 p-0 justify-content-end" >
            <button class="col-11 border-0 bg-orange fw-bold p-0 flex-end" style="border-bottom-left-radius: 50px">DEVENIR DONNEUR</button>
          </div>
  </div>







@yield("content")



@stop
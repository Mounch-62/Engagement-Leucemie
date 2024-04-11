@extends("front.base-front")
@section("title")
@parent - Actualités
@stop
@section("content")

<div class="col-8 mt-5 mx-auto ">
<h2 class="text-start mb-5 ms-4" >NOS ACTIONS DE <span class="text-black">SENSIBILISATION</span> À VENIR</h2>
    @foreach($actualites as $actualite)
        <div class="container d-flex bg-primary text-light rounded mb-3 p-3">
            <div class="d-flex flex-column col-7">
                <h3 class="text-center">{{$actualite->titre}}</h3>
                <p>
                {{$actualite->date}}
                <br>
                {{$actualite->contenu}}
                </p>
            </div>
            <div class="col-5 bg-secondary">
                <img src="../public/images/EL.svg">
            </div>
        </div>
        
    @endforeach()
</div>

@stop
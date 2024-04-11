@extends("front.base-front")
@section("title")
@parent - Actualités
@stop
@section("content")

<div class="col-8 mt-5 mx-auto ">
<h2 class="text-start mb-5 ms-4" >NOS ACTIONS DE <span class="text-black">SENSIBILISATION</span> À VENIR</h2>
    @foreach($actualites as $actualite)
        @if($actualite->is_visible == 0)
            <article class="container d-flex bg-primary text-light rounded mb-3 p-3">
                <div class="d-flex flex-column col-7">
                    <h3 class="text-center">{{$actualite->titre}}</h3>
                    <p>
                    {{date('d-m-Y', strtotime($actualite->date))}}
                    <br>
                    {{$actualite->contenu}}
                    </p>
                </div>
                <div class="col-5 bg-secondary">
                    <img src="../public/images/EL.svg">
                </div>
            </article>
        @endif
    @endforeach
</div>

<div class="col-8 mt-5 mx-auto ">
<h2 class="text-start mb-5 ms-4" >NOS ACTIONS DE <span class="text-black">SENSIBILISATION</span> PASSÉES</h2>
    @foreach($actualites as $actualite)
        @if($actualite->is_visible == 1)
            <article class="container d-flex bg-primary text-light rounded mb-3 p-3">
                <div class="d-flex flex-column col-7">
                    <h3 class="text-center">{{$actualite->titre}}</h3>
                    <p>
                    {{date('d-m-Y', strtotime($actualite->date))}}
                    <br>
                    {{$actualite->contenu}}
                    </p>
                </div>
                <div class="col-5 bg-secondary">
                    <img src="../public/images/EL.svg">
                </div>
            </article>
        @endif
    @endforeach
</div>

@stop
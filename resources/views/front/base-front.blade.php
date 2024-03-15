@extends("base")
@section("title")
Site de Engagement Leucémie
@stop
<body>
<div class="d-flex">
    <p>56, chemin des Montarmot 25000 BESANCON</p>
    <a></a>
    <a></a>
    <a></a>
    <a></a>
    <a></a>
</div>
<div class="d-flex ">
    <div class="bg-primary">
        <a>ACCUEIL</a>
        <a>MOELLE OSSEUSE</a>
        <a>DON DE MOELLE OSSEUSE</a>
        <a>L'ASSOCIATION</a>
        <a class="text-light" href="{{ route('front.actualite')}}">NOS ACTUALITÉS</a>
        <a>CONTACT</a>
    </div>
    <button class="border-0 bg-orange">DEVENIR DONNEUR</button>

</div>
@section("base-content")
    <div class="container">
        <div class=" column-flex">
            <div class="col-md-12">   
                @include("front.carousel")
            </div>
            <div class="col-md-12>
                @include("front.video")
            </div>
        </div>
    </div>
</body>
@section('footer')
@show()

    <footer class="pt-2">
        <div class="d-flex justify-content-around  h-25 mt-5">
            <div class="d-flex bg-primary w-100 ">
                <img  src="{{ asset('images/footer.png')}}" class="mr-5" alt="Footer Image" width="fit-content" height="fit-content" >
                <div class="mt-4 ml-5 mr-5"> 
                    <a href="#" class="d-flex bg-primary justify-content-center align-items-center mb-2" style="padding-bottom: 1px; height: 21px; width: 21px; border-radius: 50%;">
                    <i class="bi-twitter-x" style="font-size: 1rem; color: #fff;"></i>
                    </a>
                    <a href="#" class="d-flex mb-2 bg-primary justify-content-center align-items-center mb-3" style="padding-bottom: 1px; height: 21px; width: 21px; border-radius: 50%;">
                        <i class="bi-tiktok" style="font-size: 1rem; color: #fff;"></i>
                    </a>
                    <a href="#" class="d-flex mb-2 bg-primary justify-content-center align-items-center mb-3" style="padding-bottom: 2px;color:white; background-color:#16a64c; height: 21px; width: 21px; border-radius: 50%;">
                        <i class="bi-facebook " style="font-size: 1.3rem;"></i>
                    </a>
                    <a href="#" class="d-flex bg-primary justify-content-center align-items-center mt-1" style="padding-bottom: 1px; height: 21px; width: 21px; border-radius: 50%;">
                        <i class="bi-instagram" style="font-size: 1rem; color: #fff;"></i>
                    </a>
                </div>
                <div class="d-flex mt-3 ml-5 mr-5">
                    <div>
                    <h8 class="text-light">COORDONEES :</h2>
                    <br>
                    <i class="bi bi-envelope-fill ml-5"></i>
                    <br>
                    <div class="ml-3">
                        <p class="text-light ml-5"> engagementleucemie@gmail.com</p>
                    </div>
                    <i class="bi bi-geo-alt-fill ml-5"></i>
                    <div class="ml-3">
                        <p class="text-light ml-5 mr-5">56, Chemin des Montarmots 25000 BESANCON</p>
                    </div>
                </div>
                <div class="d-flex mr-5 ml-5">
                    
                        <div class="vr text-light mb-3 " >

                        </div>
                </div>
                <div class="d-flex justify-content-around ml flex-column text-light ml-5" >
                    <a>
                        Don de moelle osseuse
                    </a>
                    <a>
                        L'association
                    </a>
                    <a>
                        Nous contacter
                    </a>
                
                </div>
            </div> 
        </div>

    </footer>
@endsection()
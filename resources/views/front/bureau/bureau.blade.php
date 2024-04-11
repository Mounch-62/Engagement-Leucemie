@extends("front.base-front")
@section("bureau")
@parent - personalbureau
@stop
@section("content")

<div class="container mt-5">
    <h2 class="text-center mb-5">NOTRE <span class="text-black">PERSONNEL</span> DU <span class="text-black">BUREAU</span></h2>
    <div class="row row-cols-1 row-cols-md-3 g-5">
        @foreach($personalbureau as $b)
        <div class="col">
            <div class="card" style="border-color: #16A64C; border-width: 3px; border-radius: 15px">
                <div class="card-body">
                    <h5 class="card-title">{{$b->nom}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$b->prenom}}</h6>
                    <p class="card-text">{{$b->role}}</p>        
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@stop

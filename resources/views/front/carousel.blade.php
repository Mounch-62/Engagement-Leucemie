<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    
@section("carousel")
@show()
    <div class="container mt-5">
        <div id="myCarousel" class="carousel slide carousel-fade bg-success" data-ride="carousel">
            <ol class="carousel-indicators">
                @foreach($images as $key => $image)
                <li data-target="#myCarousel" data-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}"></li>
                @endforeach
            </ol>

            <div class="carousel-inner">
                @foreach($images as $key => $image)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                    <div class="row align-items-center">
                        <div class="col-2">
                        </div>
                        <div class="col-4 ">
                            <h2 class="fw-bold text-light">{{ $image->titre }}</h2>
                            <p class="text-white">{{ $image->description }}</p>
                        </div>
                        <div class="col-5">
                            <img src="{{ $image->lien }}" class="w-100 h-50  img-fluid" alt="{{ $image->titre }}" style=" height: 300px !important;" >
                        </div>
                        <div class="col-1">
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <a class="carousel-control-prev " href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>


    @section("video")
    <div class="container">
        <div class="d-flex">
            <p class="font-weight-bold text-success">NOS</p>
            <p class="font-weight-bold ">&nbsp; VIDEOS :</p>
        </div>
        <div class="d-flex row mt-5">
            @foreach($videos as $video)
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $video->titre }}</h5>
                            <p class="card-text">{{ $video->description }}</p>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="{{ $video->lien }}" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="d-flex justify-content-center w-100">
                 <button type="button" class="btn btn-success " > voir toutes nos videos</button>
            </div>
        </div>
    </div>
    @show

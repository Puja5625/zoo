@extends('visitor/visitorpage')
@section('content')
<section class=" p-3"  style="background-image:linear-gradient(50deg,white,lightgreen);">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-10 mt-4">
                <h2 class="lined">Amphibians</h2>

                <div class="animal-carousel mt-5" style="max-width: 50vw">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img src="/an_image/{{($amphibian['a_image'])}}" class="d-block w-50 m-auto" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="..." class="d-block w-50 m-auto" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="..." class="d-block w-50 m-auto" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev carousel-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next carousel-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        </div>
                </div>

                <div class="mt-5">
                    <h4 class="text-secondary">Details</h4>
                    <div class="row mt-4">
                        <div class="col-6">
                            <h6 class="my-2"><span class="text-muted">Given name:</span>&ensp;{{$amphibian['a_name']}}</h6>
                            <h6 class="my-2"><span class="text-muted">Species name:</span>&ensp;{{$amphibian['a_species_name']}}</h6>
                            <h6 class="my-2"><span class="text-muted">Date of birth:</span>&ensp;{{$amphibian['a_dob']}}</h6>
                            <h6 class="my-2"><span class="text-muted">Gender:</span>&ensp;{{$amphibian['a_gender'] == "m" ? "Male" : "Female"}}</h6>
                            <h6 class="my-2"><span class="text-muted">Average Lifespan:</span>&ensp;{{$amphibian['a_avg_lifespan']}}</h6>
                            <h6 class="my-2"><span class="text-muted">Dietary Requirements:</span>&ensp;{{$amphibian['a_dietary_req']}}</h6>
                            <h6 class="my-2"><span class="text-muted">Zoo join date:</span>&ensp;{{$amphibian['a_joindate']}}</h6>
                        </div>
                        <div class="col-6">
                            <h6 class="my-2"><span class="text-muted">Height:</span>&ensp;{{$amphibian['a_height']}}</h6>
                            <h6 class="my-2"><span class="text-muted">Weight:</span>&ensp;{{$amphibian['a_weight']}}</h6>
                          
                          
                            <h6 class="my-2"><span class="text-muted">Reproduction Type:</span>&ensp;{{$amphibian['a_rep_type']}} </h6>
                            <h6 class="my-2"><span class="text-muted">Average Clutch Size:</span>&ensp;{{$amphibian['a_clutch_size']}} </h6>
                            <h6 class="my-2"><span class="text-muted">Average Number of Offsprings:</span>&ensp;{{$amphibian['a_num_offspring']}}</h6>
                            
                            <h6 class="my-2"><span class="text-muted">Description:</span>&ensp;{{$amphibian['a_description']}}</h6>
                          
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>

@endsection
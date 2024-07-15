@extends('sponsor/sponsorpage')
@section('content')
<section class="p-3"  style="background-image:linear-gradient(50deg,white,lightgreen);">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-10 mt-4">
                <h2 class="lined">Birds</h2>

                <div class="animal-carousel mt-5" style="max-width: 50vw">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img src="/an_image/{{($bird['b_image'])}}" class="d-block w-50 m-auto img-thumbnail" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="/an_image/{{($bird['b_image'])}}" class="d-block w-50 m-auto rounded-circle" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="/an_image/{{($bird['b_image'])}}" class="d-block w-50 m-auto" alt="...">
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
                            <h6 class="my-2"><span class="text-muted">Given name:</span>&ensp;{{$bird['b_name']}}</h6>
                            <h6 class="my-2"><span class="text-muted">Species name:</span>&ensp;{{$bird['b_species_name']}}</h6>
                            <h6 class="my-2"><span class="text-muted">Date of birth:</span>&ensp;{{$bird['b_dob']}}</h6>
                            <h6 class="my-2"><span class="text-muted">Gender:</span>&ensp;{{$bird['b_gender'] == "m" ? "Male" : "Female"}}</h6>
                            <h6 class="my-2"><span class="text-muted">Average Lifespan:</span>&ensp;{{$bird['b_avg_lifespan']}}</h6>
                            <h6 class="my-2"><span class="text-muted">Dietary Requirements:</span>&ensp;{{$bird['b_dietary_req']}}</h6>
                            <h6 class="my-2"><span class="text-muted">Zoo join date:</span>&ensp;{{$bird['b_joindate']}}</h6>
                        </div>
                        <div class="col-6">
                            <h6 class="my-2"><span class="text-muted">Height:</span>&ensp;{{$bird['b_height']}}</h6>
                            <h6 class="my-2"><span class="text-muted">Weight:</span>&ensp;{{$bird['b_weight']}}</h6>
                          
                          
                            <h6 class="my-2"><span class="text-muted">Nest Construction Method:</span>&ensp;{{$bird['b_nest_const'] }}</h6>
                            <h6 class="my-2"><span class="text-muted">Clutch Size:</span>&ensp;{{$bird['b_cluth_size'] }}</h6>
                            <h6 class="my-2"><span class="text-muted">Wingspan:</span>&ensp;{{$bird['b_wingspan'] }}</h6>
                            <h6 class="my-2"><span class="text-muted">Ability to Fly:</span>&ensp;{{$bird['b_ability_fly'] }}</h6>
                            <h6 class="my-2"><span class="text-muted">Plumage Color Variant:</span>&ensp;{{$bird['b_color_variant'] }}</h6>
                            
                            <h6 class="my-2"><span class="text-muted">Description:</span>&ensp;{{$bird['b_description']}}</h6>
                          
                        </div>
                    </div>
                </div>
                <div class="w-50 mx-auto mt-5 text-center">
                        <?php $check='true'; ?>
                        @foreach($sponsoranimals as $sp)
                           
                            @if($sp['sponsor_animal'] == $bird['b_name'])
          
                            <div>
                            <h2 class="text-center font-weight-light mb-3">Animal Sponsored By</h2>
                            <a href="https://{{$sp['s_url']}}" target="_blank">
                                <img src="/s_image//{{$sp['signage_photo']}}" alt="" title="click the photo" width="500" height="400" class="rounded-circle">
                            </a>

                            </div>
                            <?php $check='false'; ?>
                            @break
                            @endif     
                            @endforeach


                            @if($check == 'true')
                                <h5 class=" font-weight-light">Animal available for sponsorship</h5>
                                    <a href="{{route('secsponsoranimal',$bird['id'])}}"  class="btn  btn-primary text_center w-100">Sponsor Animal</a>
                                   
          
                                @endif
                          

          
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
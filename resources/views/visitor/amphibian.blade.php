@extends('visitor/visitorpage')
@section('content')


<section class=" p-3"  style="background-image:linear-gradient(50deg,white,lightgreen);">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-10  mt-4">
                <h2 class="  lined ">Amphibians</h2>
                @if(count($amphibians) != 0)
                <div class="row justify-content-left mt-4">

                   @foreach ($amphibians as $amphibian) 
                        <div class="col-xs-6 col-sm-6 col-md-4 col-xl-3 my-2">
                            <a href="{{route('amphibianinfo',$amphibian['id'])}}" class="product-class-link">
                                <div class="card product-card">
                                    <img src="../an_image/{{($amphibian['a_image'])}}" height="200px" title="Please click the card to see full information!" class="card-img-top animal-image-style" />
                                    <div class="card-body pt-2">
                                        <hr class="mt-0" />
                                        <h5 class="card-title font-weight-bold color-header">{{ $amphibian['a_name']}}</h5>
                                        <p class="card-text">Species name: {{ $amphibian['a_species_name']}} </p>
                                    </div>
                                    <div class="card-footer text-muted card-footer-address">
                                        <div class="d-flex justify-content-between">
                                            <span>{{ $amphibian['a_gender'] == "m" ? "Male":"Female"}}</span>
                                            <span>DOB {{ $amphibian['a_dob']}}</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach

                </div>
                @else
                 <h3 class="text-muted text-center">There is no animal!</h3>
                    @endif
            </div>
        </div>
    </div>
</section>
@endsection
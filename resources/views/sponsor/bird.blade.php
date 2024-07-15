@extends('sponsor/sponsorpage')
@section('content')


<section class="p-3"  style="background-image:linear-gradient(50deg,white,lightgreen);">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-10  mt-4">
                <h2 class="  lined ">Birds</h2>
                @if(count($birds) != 0)
                <div class="row justify-content-left mt-4">

                   @foreach ($birds as $bird) 
                        <div class="col-xs-6 col-sm-6 col-md-4 col-xl-3 my-2">
                            <a href="{{route('s_bird',$bird['id'])}}" class="product-class-link">
                                <div class="card product-card">
                                    <img src="../an_image/{{($bird['b_image'])}}" alt="" height="200px" class="card-img-top animal-image-style" />
                                    <div class="card-body pt-2">
                                        <hr class="mt-0" />
                                        <h5 class="card-title font-weight-bold color-header">{{ $bird['b_name']}}</h5>
                                        <p class="card-text">Species name: {{ $bird['b_species_name']}} </p>
                                    </div>
                                    <div class="card-footer text-muted card-footer-address">
                                        <div class="d-flex justify-content-between">
                                            <span>{{ $bird['b_gender'] == "m" ? "Male":"Female"}}</span>
                                            <span>DOB {{ $bird['b_dob']}}</span>
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
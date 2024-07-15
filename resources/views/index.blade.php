@extends('layout')
@section('content')

<main style="background-image:linear-gradient(50deg,white,lightgreen);">
<section class="py-5 bg-cover bg-center" style="background: url(/image/zo.jpg)">  
<!-- <div id="carouselExampleCaptions" class="carousel slide " data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/image/zo.jpg" class="d-block w-100 h-30" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Zoo Management System</h5>
        <p> A zoo is a place where animals are kept and shown to visitors. Zoos give people the chance to see animals
        that they might not see anywhere else.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/image/zoo.jpg" class="d-block w-100 h-30" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/image/zoolg.png" class="d-block w-100 h-30" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> -->
    <div class="hero-overlay"></div>
      
    <div class="container py-5 px-0 text-white text-left" >
        <h1 class="text-shadow hero-heading font-weight-normal">Zoo Management System</h1>
        <p class="text-shadow font-weight-light mt-3 mb-4" style="width: 40%">
        A zoo is a place where animals are kept and shown to visitors. Zoos give people the chance to see animals
        that they might not see anywhere else. Famous zoos include the San Diego Zoo and the Bronx Zoo in the United
        States, the London Zoo in England, and the Prague Zoo in the Czech Republic.

        </p>
    </div> 
 </section>
<!-- welcome to Zoo Management System -->
<section class="pb-2 pt-5" >
    <div class="container-fluid p-5 pb-2">
        <div class="row px-2">
            <div class="col-lg-6 col-sm-12">
                <h2>Welcome to <span class="font-weight-bold text-light-green">Zoo Management System</span></h2>
                <div style="width: 8%">

                    <hr style="border-top: 10px solid #489A33;">
                </div>
                <p class="lead text-secondary"> the goal of zoos is animal conservation and that traditionally record keeping was done manually but a computerized system was designed called the Zoo Management System (ZMS). The ZMS is a web-based system that manages people's and animal details and provides tickets to visitors and provede sponsor animals.</p>
                <p class="text-small text-secondary"> the goal of zoos is animal conservation and that traditionally record keeping was done manually but a computerized system was designed called the Zoo Management System (ZMS). The ZMS is a web-based system that manages people's and animal details and provides tickets to visitors.</p>
                <a href="{{route('sgallery')}}" class="btn btn-primary btn-sm" style="border-radius: 50px;">View Gallery</a>
            </div>
            <div class="col-lg-6 col-sm-12 mt-sm-4">
                <div class="row">
                    <div class="col">
                        <img src="/image/ausgeck.jpg" alt="" class="img-fluid mb-4" width="200px">
                        <h4 class="h5 mb-2">Australian Gecko</h4>
                        <p class="text-small text-muted">Australian geckos don’t have eyelids. Their eyes are protected by a transparent membrane, and they take care of them by licking them clean.</p>
                    </div>
                    <div class="col">
                        <img src="/image/grizzlybear.jpg" alt="" class="img-fluid mb-4" width="200px">
                        <h4 class="h5 mb-2">Grizzly Bear</h4>
                        <p class="text-small text-muted">The grizzly-polar bear hybrid is a cross between a Polar bear and a grizzly bear and named the ‘pizzly bear.’</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- animal of the week -->
<section class="py-5" >
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>
                    This week's featured <span class="font-weight-bold" style="color: #BE9D0D">Animal</span>
                    <img src="/image/number_1_hand.png" alt="" width="40px">
                </h2>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <!-- <div style="width: 8%">
                    <hr style="border-top: 10px solid #FFE263;">
                </div> -->
                
                <div>
                    <img src="../an_image/{{$setanimals['setweekan_image']}}" alt="" style="border-radius: 20px;width:350px;height:300px;">
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 pt-sm-4 pt-lg-2">
                <div class="row">
                    <div class="col">
                                <h3> <span class="text-muted">Given name:</span>&ensp; {{$setanimals['setweekan_name'] }}</h3>
                                <h6> <span class="text-muted">Species name:</span>&ensp;{{$setanimals['setweekan_species_name']}}</h6>
                                <h6> <span class="text-muted">Date of birth:</span>&ensp; {{$setanimals['setweekan_dob']}} </h6>
                                <h6> <span class="text-muted">Gender:</span>&ensp;{{$setanimals['setweekan_gender'] == "m" ? "Male":"Female" }}</h6>
                                <h6> <span class="text-muted">Zoo join date:</span>&ensp;{{$setanimals['setweekan_joindate']}}</h6>
                        <?php if ($setanimals['setweekan_description'] != "") { ?>
                            <h6> <span class="text-muted">Description</span>&ensp;{{$setanimals['setweekan_description'] }}</h6>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>

</section>


<!-- our sponsors -->
<section class="p-3 bg-secondary" >
    <div class="container">
        <div class="row mb-3">
            <div class="col">
                <h3 class="text-center font-weight-bold text-white">Our Sponsors</h3>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach($tests as $test)
                <div class="col-lg-4 col-sm-10 text-center mb-sm-4">
                    <div class="">
                        <img src="/image/sponsor_image/testi.jfif" alt="" width="195px" style="border-radius: 100%; border: 7px solid black">
                    </div>
                    <?php
                       $s = \App\Models\Sponsor::find($test->sponsor_id);
                       $s_name = $s->s_name;

                    ?>
                    <h5 class="text-white mt-2">{{$s_name}}</h5>
                    <p class="" style="color: white">{{$test['test_message']}}</p>
                </div>
            @endforeach
          
        </div>
    </div>
</section>



<section class="bg-gray py-5">
    <div class="container-fluid py-5">
        <div class="row">
            <div class="col">
                <h2 class="mb-5 lined ml-5">Map of Zoo</h2>
                <div class="row justify-content-center">
                    <div class="col-xs-10 col-lg-6">
                        <img src="/image/map.jpeg" alt="" width="90%" class="img-thumbnail" style="border:3px solid black;">
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</section>
</main>

@endsection

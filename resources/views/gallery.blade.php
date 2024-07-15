@extends('layout')
@section('content')

<main style="background-image:linear-gradient(50deg,white,lightgreen);">
<section class="py-5 ">
    <div class="container py-5">
        <h2 class="lined mb-4">Image Gallery</h2> <!-- needs 600x400 image -->
        @if(count($galleries) != 0)
        <p class="lead">Photos of animals in their habitat.</p>
       
        <div class="row">
           
            @foreach ($galleries as $gal)
                <a href="../images/{{$gal['g_file_name']}}" data-lightbox="gallery" data-title="Description of Project No.1" class="col-lg-4 col-sm-6 p-0">
                    <img src="../images/{{$gal['g_file_name']}}" alt="" class="img-fluid p-2" style="width:400px;height:400px;border-radius:20px;">
                </a>
                @endforeach
                
        </div>
       
        @else
        <h3 class="text-muted text-center">There is no image!</h3>
        @endif


        <h2 class="lined mb-4 mt-5">Video Gallery</h2> <!-- needs 600x400 image -->
        @if(count($videos) != 0)
        <p class="lead">Videos of animals in their habitat.</p>
      
        <div class="row ">
        @foreach($videos as $video)
       
        <a href="../videos/{{$video['v_file_name']}}" data-toggle="lightbox" data-gallery="youtubevideos" data-title="Description of Project No.1" class="col-lg-4 col-sm-12 p-5">
        <video src="../videos/{{$video['v_file_name']}}" poster="" width="480" class=" p-5" height="400" controls>
        </video>	</a>
       
                
        @endforeach
        </div>
      
        @else
        <h3 class="text-muted text-center">There is no video!</h3>
        @endif
    </div>
</section>
</main>
@endsection
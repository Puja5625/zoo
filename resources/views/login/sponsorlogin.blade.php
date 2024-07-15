@extends('layout')
@section('content')

<main  style="background-image:linear-gradient(50deg,white,lightgreen);">
   <section class="py-5 ">
    <div class="container py-5 ">
   
        <h2 class="mb-4 text-center">Login Panel As Sponsor</h2> <!-- needs 600x400 image -->
       
        <div class="row justify-content-center">
            <div class="col-4 ">
            @include('flashmessages')
                <form class="form-signin text-center" action="{{route('checksponsor')}}" method="post">
                    @csrf
                    <!-- <img class="mb-4" src="../img/favicon.jpg" alt="" width="100"> -->
                    <!-- <h1 class="h3 mb-3 font-weight-normal my-3 text-center">Please sign in</h1> -->
                   
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="email" name="email" id="inputEmail" class="form-control my-2 @error('email') is-invalid @enderror" placeholder="Email address">
                    @error('email')
                    <div class="form-error text-danger">
                        {{$message}}
                    </div>
                @enderror
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" name="password" id="inputPassword" class="form-control my-2 @error('password') is-invalid @enderror" placeholder="Password">
                    @error('password')
                    <div class="form-error text-danger">
                        {{$message}}
                    </div>
                @enderror
                   
                    <button  type="submit" style="background: linear-gradient(45deg,  #fff172,green); border:2px solid black;" class="btn btn-lg btn-primary text_center w-100  text-dark" name="submit">Log In</button>
                   
                </form>
            </div>
        </div>
    </div>
</section>
</main>
@endsection

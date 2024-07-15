@extends('layout')
@section('content')

<main style="background-image:linear-gradient(50deg,white,lightgreen);">
    <section class="py-5">

        <div class="container py-5 ">
            <h2 class="lined mb-4 ">Visitor Registration</h2> <!-- needs 600x400 image -->
            <div class="row">
                <div class="col-8 pt-3">
                @include('flashmessages')
                    <form action="{{route('visitorcreate')}}" method="POST">
                    @csrf
                        <input type="hidden" name="visitor_id" value="">
                        <div class="row">
                            <div class="col-md-6 mb-4 field-required">
                                <label for="givenname">First name</label>
                                <input type="text" class="form-control @error('v_fistname') is-invalid @enderror" id="givenname" name="v_firstname" placeholder="" value="" >
                                @error('v_firstname')
                                    <div class="form-error text-danger">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-4 field-required">
                                <label for="speciesname">Last Name</label>
                                <input type="text" class="form-control @error('v_lastname') is-invalid @enderror" id="speciesname" name="v_lastname" placeholder="" value="" >
                                 @error('v_lastname')
                                <div class="form-error text-danger">
                                    {{$message}}
                                </div>
                         @enderror
                            </div>
                        </div>

                        <div class="mb-4 field-required">
                            <label for="dob">Email</label>
                            <input type="email" value="" class="form-control @error('v_email') is-invalid @enderror" name="v_email" id="dob" >
                             @error('v_email')
                                <div class="form-error text-danger">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-4 field-required">
                            <label for="address">Address</label>
                            <input type="text" value="" class="form-control @error('v_address') is-invalid @enderror" name="v_address" id="address" >
                             @error('v_address')
                                <div class="form-error text-danger">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>

                            <div class="mb-4 field-required">
                                <label for="password">Password</label>
                                <input type="password" value="" class="form-control @error('v_password') is-invalid @enderror" name="v_password" id="password" >
                                 @error('v_password')
                                <div class="form-error text-danger">
                                    {{$message}}
                                </div>
                            @enderror
                            </div>


                        <button class="btn btn-primary btn-lg text_center w-100 " type="submit" name="submit">Register</button>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

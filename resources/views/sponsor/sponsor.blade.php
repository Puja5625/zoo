@extends('layout')
@section('content')

<main  style="background-image:linear-gradient(50deg,white,lightgreen);">
<section class="py-5  ">
    <div class="container py-5 ">
        <h2 class="lined mb-4">Sponsor Registration</h2> <!-- needs 600x400 image -->
        <div class="row">
            <div class="col-8 pt-3">
            @include('flashmessages')
                <form action="{{route('sponsorcreate')}}" method="POST">
                   @csrf
                    <input type="hidden" name="sponsor_id" value="">
                    <div class="mb-4 field-required">
                        <label for="givenname">Client/Company Name</label>
                        <input type="text" class="form-control @error('s_name') is-invalid @enderror" id="givenname" name="s_name" placeholder="" value="" >
                        @error('s_name')
                                <div class="form-error text-danger">
                                    {{$message}}
                                </div>
                            @enderror
                    </div>
                    <div class="mb-4 field-required">
                        <label for="select_animal">Existing Customer</label>
                        <select class="custom-select d-block w-100 form-control " name="s_existing_name" id="select_animal" >
                            <option value="yes" selected>Yes</option>
                            <option value="no">No</option>
                        </select>
                       
                    </div>

                    <div class="mb-4 field-required">
                        <label for="s_phone_number">Phone</label>
                        <input type="number" value="" class="form-control @error('s_phone_number') is-invalid @enderror" name="s_phone_number" id="s_phone_number" >
                        @error('s_phone_number')
                                <div class="form-error text-danger">
                                    {{$message}}
                                </div>
                            @enderror
                    </div>
                    <div class="mb-4 field-required">
                        <label for="s_client_address">Client/Company Address</label>
                        <textarea name="s_address" placeholder="...." class="form-control @error('s_address') is-invalid @enderror" id="s_client_address" cols="30" rows="5" ></textarea>
                        @error('s_address')
                                <div class="form-error text-danger">
                                    {{$message}}
                                </div>
                            @enderror
                    </div>
                    <div class="mb-4 field-required">
                        <label for="s_business_type">Business Type</label>
                        <input type="text" value="" class="form-control @error('s_business_type') is-invalid @enderror" name="s_business_type" id="s_business_type" >
                        @error('s_business_type')
                                <div class="form-error text-danger">
                                    {{$message}}
                                </div>
                            @enderror
                    </div>
                    <div class="mb-4 field-required">
                        <label for="s_yearly_revenue">Yearly Revenue/Income</label>
                        <input type="number" value="" class="form-control @error('s_yearly_revenue') is-invalid @enderror" name="s_yearly_revenue" id="s_yearly_revenue" >
                        @error('s_yearly_revenue')
                                <div class="form-error text-danger">
                                    {{$message}}
                                </div>
                            @enderror
                    </div>
                    <div class="mb-4 field-required">
                        <label for="s_email">Email</label>
                        <input type="email" value="" class="form-control @error('s_email') is-invalid @enderror" name="s_email" id="s_email" >
                        @error('s_email')
                                <div class="form-error text-danger">
                                    {{$message}}
                                </div>
                            @enderror
                    </div>


                        <div class="mb-4 field-required">
                            <label for="s_password">Password</label>
                            <input type="password" value="" class="form-control @error('s_password') is-invalid @enderror" name="s_password" id="s_password" >
                            @error('s_password')
                                <div class="form-error text-danger">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>


                    <button class="btn btn-primary btn-lg text_center w-100 " type="submit" name="submit">Apply for Sponsorship</button>
            </div>
        </div>
    </div>
</section>

</main>
@endsection

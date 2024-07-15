@extends('sponsor/sponsorpage')
@section('content')

<main>
<section class="py-5"  style="background-image:linear-gradient(50deg,white,lightgreen);">
    <div class="container py-5">
        <h2 class="lined mb-4">Update Sponsor Registration</h2> <!-- needs 600x400 image -->
        <div class="row">
            <div class="col-8 pt-3">
            @include('flashmessages')
                <form action="{{route('updatesponsor',$sponsors['id'])}}" method="POST">
                   @csrf
                    <input type="hidden" name="sponsor_id" value="">
                    <div class="mb-4 field-required">
                        <label for="givenname">Client/Company Name</label>
                        <input type="text" class="form-control" id="givenname" name="s_name" placeholder="" value="{{$sponsors['s_name']}}" required>
                    </div>
                    <div class="mb-4 field-required">
                        <label for="select_animal">Existing Customer</label>
                        <input type="text" class="form-control" id="givenname" name="s_existing_name" placeholder="" value="{{$sponsors['s_existing_name']}}" required>

                      
                    </div>

                    <div class="mb-4 field-required">
                        <label for="s_phone_number">Phone</label>
                        <input type="number" value="{{$sponsors['s_phone_number']}}" class="form-control" name="s_phone_number" id="s_phone_number" required>
                    </div>
                    <div class="mb-4 field-required">
                        <label for="s_client_address">Client/Company Address</label>
                        <textarea name="s_address" placeholder="...." class="form-control" id="s_client_address" cols="30" rows="5" required>{{$sponsors['s_address']}}</textarea>

                    </div>
                    <div class="mb-4 field-required">
                        <label for="s_business_type">Business Type</label>
                        <input type="text" value="{{$sponsors['s_business_type']}}" class="form-control" name="s_business_type" id="s_business_type" required>
                    </div>
                    <div class="mb-4 field-required">
                        <label for="s_yearly_revenue">Yearly Revenue/Income</label>
                        <input type="number" value="{{$sponsors['s_yearly_revenue']}}" class="form-control" name="s_yearly_revenue" id="s_yearly_revenue" required>
                    </div>
                    <div class="mb-4 field-required">
                        <label for="s_email">Email</label>
                        <input type="email" value="{{$sponsors['s_email']}}" class="form-control" name="s_email" id="s_email" required>
                    </div>


                        <div class="mb-4 field-required">
                            <label for="s_password">Password</label>
                            <input type="password" value="" class="form-control" placeholder="retype correct password or change new password..." name="s_password" id="s_password" required>
                        </div>


                    <button class="btn btn-primary btn-lg w-100" type="submit" name="submit">Apply for Sponsorship</button>
            </div>
        </div>
    </div>
</section>

</main>
@endsection

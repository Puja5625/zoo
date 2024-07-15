@extends('visitor/visitorpage')
@section('content')

<main>
    <section class="py-5"  style="background-image:linear-gradient(50deg,white,lightgreen);">

        <div class="container py-5 ">
            <h2 class="lined mb-4 "> Update Visitor Registration</h2> <!-- needs 600x400 image -->
            <div class="row">
                <div class="col-8 pt-3">
                   @include('flashmessages')
                   
                    <form action="{{route('updatevisitor',$visitors['id'])}}" method="POST">
                    @csrf
                        <input type="hidden" name="visitor_id" value="">
                        <div class="row">
                            <div class="col-md-6 mb-4 field-required">
                                <label for="givenname">First name</label>
                                <input type="text" class="form-control" id="givenname" name="v_firstname" placeholder="" value="{{$visitors['v_firstname']}}" required>
                            </div>
                            <div class="col-md-6 mb-4 field-required">
                                <label for="speciesname">Last Name</label>
                                <input type="text" class="form-control" id="speciesname" name="v_lastname" placeholder="" value="{{$visitors['v_lastname']}}" required>
                            </div>
                        </div>

                        <div class="mb-4 field-required">
                            <label for="dob">Email</label>
                            <input type="email" value="{{$visitors['v_email']}}" class="form-control" name="v_email" id="dob" required>
                        </div>

                        <div class="mb-4 field-required">
                            <label for="address">Address</label>
                            <input type="text" value="{{$visitors['v_address']}}" class="form-control" name="v_address" id="address" required>
                        </div>

                            <div class="mb-4 field-required">
                                <label for="password">Password</label>
                                <input type="password" value="" class="form-control" placeholder="retype correct password or change new password..." name="v_password" id="password" required>
                            </div>


                        <button class="btn btn-primary btn-lg w-100" type="submit" name="submit">Update Visitor</button>
                    </form>
                
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

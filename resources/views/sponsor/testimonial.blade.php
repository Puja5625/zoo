@extends('sponsor/sponsorpage')
@section('content')

<section class="py-5"  style="background-image:linear-gradient(50deg,white,lightgreen);">
    <div class="container py-5">
        <h2 class="lined mb-4">Add Testimonial</h2> <!-- needs 600x400 image -->
        <div class="row">
            <div class="col-8 pt-3">
            @include('flashmessages')
                
                <form action="{{route('testcreate',$sponsors['id'])}}" method="POST">
                    @csrf
                  
                    <div class="mb-4 field-required">
                        <label for="testimonial">Testimonial Message</label>
                        <textarea name="test_message" class="form-control" placeholder="..." id="testimonial" cols="30" rows="5" required></textarea>
                    </div>
                   <div  style="float:right;">
                   <button class="btn btn-primary btn-lg " type="submit" name="submit">submit</button>
                   </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

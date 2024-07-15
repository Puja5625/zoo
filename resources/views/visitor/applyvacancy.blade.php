@extends('visitor/visitorpage')
@section('content')

<section class="py-5"  style="background-image:linear-gradient(50deg,white,lightgreen);">
    <div class="container py-5">
        <h2 class="lined mb-4">Apply to Vacancy</h2> <!-- needs 600x400 image -->
        <div class="row">
            <div class="col-8 pt-3">
            @include('flashmessages')
                <form action="{{route('applicationcreate')}}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="mb-4 field-required">
                        <label for="fullname">Full Name</label>
                        <input type="text" class="form-control" id="fullname" name="a_fullname" placeholder="" value="" required>
                    </div>
                    <div class="mb-4 field-required">
                        <label for="email">Email</label>
                        <input type="email" value="" class="form-control" name="a_email" id="email" required>
                    </div>
                    <div class="mb-4 field-required">
                        <label for="phone">Phone</label>
                        <input type="number" value="" class="form-control" name="a_phone" id="phone" required>
                    </div>
                    <div class="form-group mb-4 field-required">
                        <label for="file">Upload CV</label><br />
                        <input type="file" name="cv" className="form-control-file" id="file" required />
                    </div>
                   <div class="text-right">
                   <button class="btn btn-primary btn-lg " type="submit" name="submit">Apply</button>
                   </div>
            </div>
        </div>
    </div>
</section>


@endsection

@extends('admin/adminlayout')
@section('content')
<div class="container">
    <div class="row pb-5">
        <div class="col-md-8 order-md-1">
            <?php
            if (isset($_GET['msg'])) {
                echo '<div class="alert alert-' . $_GET['type'] . ' alert-dismissible fade show" role="alert">' . $_GET['msg'] . '
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>';
            }
            ?>
            <h1 class="h3 mb-4 text-gray-800">Edit Animal(fish)</h1>
            <form action="{{route('updatefish',$fish['id'])}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="animal_id" value="">
                <div class="row">
                    <div class="col-md-6 mb-4 field-required">
                        <label for="givenname">Given name</label>
                        <input type="text" class="form-control" id="givenname" name="f_name" placeholder="" value="{{$fish['f_name']}}" required>
                    </div>
                    <div class="col-md-6 mb-4 field-required">
                        <label for="speciesname">Species Name</label>
                        <input type="text" class="form-control" id="speciesname" name="f_species_name" placeholder="" value="{{$fish['f_species_name']}}" required>
                    </div>
                </div>

                <div class="mb-4">
                    <label for="dob">Date of Birth</label>
                    <input type="date" value="{{$fish['f_dob']}}" class="form-control" name="f_dob" id="dob">
                </div>

                <div class="mb-4 field-required">
                    <label for="gender">Gender</label>
                    <input type="text" class="form-control" id="gender" name="f_gender" placeholder="" value="{{$fish['f_gender']}}" required>

                   
                </div>

                <div class="mb-4 field-required">
                    <label for="lifespan">Average Lifespan</label>
                    <input type="text" value="{{$fish['f_avg_lifespan']}}" class="form-control" id="lifespan" placeholder="Eg: 2 Years, 1.5 Years" name="f_avg_lifespan" required>
                </div>

               
               
                <div class="mb-4 field-required">
                    <label for="dietary">Dietary Requirement</label>
                    <input type="text" value="{{$fish['f_dietary_req']}}" class="form-control" id="dietary" placeholder="Eg: About 1.5 KGs of meat a day" name="f_dietary_req" required>
                </div>

               

             

                <div class="mb-4 field-required">
                    <label for="joindate">Zoo Join Date</label>
                    <input type="date" value="{{$fish['f_joindate']}}" class="form-control" name="f_joindate" id="joindate" required>
                </div>

                <div class="mb-4 field-required">
                    <label for="height">Animal Height</label>
                    <input type="number" value="{{$fish['f_height']}}" class="form-control" id="height" placeholder="" name="f_height" min="0" required step="0.01">
                    <small class="text-muted">In meters</small>
                </div>

                <div class="mb-4 field-required">
                    <label for="weight">Animal Weight</label>
                    <input type="number" value="{{$fish['f_weight']}}" class="form-control" id="weight" placeholder="" name="f_weight" min="0" required step="0.01">
                    <small class="text-muted">In KG</small>
                </div>

                <div class="mb-4">
                    <label for="description">Description for Signage</label>
                    <textarea name="f_description" placeholder="...." class="form-control" id="description" cols="30" rows="5">{{$fish['f_description']}}</textarea>
                </div>
              
                <hr class="mb-4">

                <div class="form-group mb-4">
                    <label for="file">Select Images</label><br />
                    <img src="/an_image/{{$fish['f_image']}}" width="150" height="150" alt=""></br></br>
                    <input type="file" value="" name="image" className="form-control-file @error('image') is-invalid @enderror" id="file" accept="image/*" multiple />
                    @error('image')
                    <div class="form-error text-danger">
                        {{$message}}
                    </div>
                @enderror
                </div>

               
               
                <div class="mb-4">
                    <label for="f_body_temp">Average Body Temperature</label>
                    <input type="number" value="{{$fish['f_body_temp']}}" class="form-control" id="f_body_temp" placeholder="" name="f_body_temp" min="0" step="0.01">
                    <small class="text-muted">In Celcius</small>
                </div>

                <div class="mb-4">
                    <label for="f_water_type">Water Type</label>
                    <input type="text" value="{{$fish['f_water_type']}}" class="form-control" id="f_water_type" placeholder="Eg: Salt, Fresh" name="f_water_type">
                </div>

                <div class="mb-4">
                    <label for="f_color_variant">Color Variants</label>
                    <input type="text" value="{{$fish['f_color_variant']}}" class="form-control" id="f_color_variant" placeholder="" name="f_color_variant">
                </div>

               
               
               

              
                <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit">Edit Animal</button>
            </form>
        </div>
    </div>
</div>
@endsection
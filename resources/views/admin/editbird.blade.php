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
            <h1 class="h3 mb-4 text-gray-800">Edit Animal(bird)</h1>
            <form action="{{route('updatebird',$bird['id'])}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="animal_id" value="">
                <div class="row">
                    <div class="col-md-6 mb-4 field-required">
                        <label for="givenname">Given name</label>
                        <input type="text" class="form-control" id="givenname" name="b_name" placeholder="" value="{{$bird['b_name']}}" required>
                    </div>
                    <div class="col-md-6 mb-4 field-required">
                        <label for="speciesname">Species Name</label>
                        <input type="text" class="form-control" id="speciesname" name="b_species_name" placeholder="" value="{{$bird['b_species_name']}}" required>
                    </div>
                </div>

                <div class="mb-4">
                    <label for="dob">Date of Birth</label>
                    <input type="date" value="{{$bird['b_dob']}}" class="form-control" name="b_dob" id="dob">
                </div>

                <div class="mb-4 field-required">
                    <label for="gender">Gender</label>
                    <input type="text" class="form-control" id="gender" name="b_gender" placeholder="" value="{{$bird['b_gender']}}" required>

                   
                </div>

                <div class="mb-4 field-required">
                    <label for="lifespan">Average Lifespan</label>
                    <input type="text" value="{{$bird['b_avg_lifespan']}}" class="form-control" id="lifespan" placeholder="Eg: 2 Years, 1.5 Years" name="b_avg_lifespan" required>
                </div>

               
               
                <div class="mb-4 field-required">
                    <label for="dietary">Dietary Requirement</label>
                    <input type="text" value="{{$bird['b_dietary_req']}}" class="form-control" id="dietary" placeholder="Eg: About 1.5 KGs of meat a day" name="b_dietary_req" required>
                </div>

               

             

                <div class="mb-4 field-required">
                    <label for="joindate">Zoo Join Date</label>
                    <input type="date" value="{{$bird['b_joindate']}}" class="form-control" name="b_joindate" id="joindate" required>
                </div>

                <div class="mb-4 field-required">
                    <label for="height">Animal Height</label>
                    <input type="number" value="{{$bird['b_height']}}" class="form-control" id="height" placeholder="" name="b_height" min="0" required step="0.01">
                    <small class="text-muted">In meters</small>
                </div>

                <div class="mb-4 field-required">
                    <label for="weight">Animal Weight</label>
                    <input type="number" value="{{$bird['b_weight']}}" class="form-control" id="weight" placeholder="" name="b_weight" min="0" required step="0.01">
                    <small class="text-muted">In KG</small>
                </div>

                <div class="mb-4">
                    <label for="description">Description for Signage</label>
                    <textarea name="b_description" placeholder="...." class="form-control" id="description" cols="30" rows="5">{{$bird['b_description']}}</textarea>
                </div>
              
                <hr class="mb-4">

                <div class="form-group mb-4">
                    <label for="file">Select Images</label><br />
                    <img src="/an_image/{{$bird['b_image']}}" width="150" height="150" alt=""></br></br>
                    <input type="file" value="" name="image" className="form-control-file @error('image') is-invalid @enderror" id="file" accept="image/*" multiple />
                    @error('image')
                    <div class="form-error text-danger">
                        {{$message}}
                    </div>
                @enderror
                </div>

               
               
                
                <div class="mb-4">
                    <label for="b_nest_const">Nest Construction Method</label>
                    <input type="text" value="{{$bird['b_nest_const']}}" class="form-control" id="b_nest_const" placeholder="" name="b_nest_const">
                </div>

                <div class="mb-4">
                    <label for="b_clutch_size">Clutch Size</label>
                    <input type="number" value="{{$bird['b_clutch_size']}}" class="form-control" id="b_clutch_size" placeholder="" name="b_clutch_size" min="0" step="0.01">
                    <small class="text-muted">In CM</small>
                </div>

                <div class="mb-4">
                    <label for="b_wingspan">Wingspan</label>
                    <input type="number" value="{{$bird['b_wingspan']}}" class="form-control" id="b_wingspan" placeholder="" name="b_wingspan" min="0" step="0.01">
                    <small class="text-muted">In Inch</small>
                </div>

                <div class="mb-4">
                    <label>Ability to Fly</label>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="a-yes" name="b_ability_fly" class="custom-control-input" value="yes" >
                        <label class="custom-control-label" for="a-yes">Yes</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="a-no" name="b_ability_fly" class="custom-control-input" value="no" >
                        <label class="custom-control-label" for="a-no">No</label>
                    </div>
                </div>

                <div class="mb-4">
                    <label for="b_color_variant">Plumage Color Variants</label>
                    <input type="text" value="{{$bird['b_color_variant']}}" class="form-control" id="b_color_variant" placeholder="" name="b_color_variant">
                </div>
               
               
               

              
                <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit">Edit Animal</button>
            </form>
        </div>
    </div>
</div>
@endsection
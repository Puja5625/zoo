@extends('admin/adminlayout')
@section('content')
<div class="container">
    <div class="row pb-5">
        <div class="col-md-8 order-md-1">
        @include('flashmessages')
            <h1 class="h3 mb-4 text-gray-800">Add Animal(bird)</h1>
            <form action="{{route('birdcreate')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="animal_id" value="">
                <div class="row">
                    <div class="col-md-6 mb-4 field-required">
                        <label for="givenname">Given name</label>
                        <input type="text" class="form-control" id="givenname" name="b_name" placeholder="" value="" required>
                    </div>
                    <div class="col-md-6 mb-4 field-required">
                        <label for="speciesname">Species Name</label>
                        <input type="text" class="form-control" id="speciesname" name="b_species_name" placeholder="" value="" required>
                    </div>
                </div>

                <div class="mb-4">
                    <label for="dob">Date of Birth</label>
                    <input type="date" value="" class="form-control" name="b_dob" id="dob">
                </div>

                <div class="mb-4 field-required">
                    <label for="gender">Gender</label>
                    <select class="custom-select d-block w-100" name="b_gender" id="gender" required>
                        <option value="m">Male</option>
                        <option value="f">Female</option>
                    </select>
                </div>

                <div class="mb-4 field-required">
                    <label for="lifespan">Average Lifespan</label>
                    <input type="text" value="" class="form-control" id="lifespan" placeholder="Eg: 2 Years, 1.5 Years" name="b_avg_lifespan" required>
                </div>

               
               
                <div class="mb-4 field-required">
                    <label for="dietary">Dietary Requirement</label>
                    <input type="text" value="" class="form-control" id="dietary" placeholder="Eg: About 1.5 KGs of meat a day" name="b_dietary_req" required>
                </div>

               

               

                <div class="mb-4 field-required">
                    <label for="joindate">Zoo Join Date</label>
                    <input type="date" value="" class="form-control" name="b_joindate" id="joindate" required>
                </div>

                <div class="mb-4 field-required">
                    <label for="height">Animal Height</label>
                    <input type="number" value="" class="form-control" id="height" placeholder="" name="b_height" min="0" required step="0.01">
                    <small class="text-muted">In Centemeters</small>
                </div>

                <div class="mb-4 field-required">
                    <label for="weight">Animal Weight</label>
                    <input type="number" value="" class="form-control" id="weight" placeholder="" name="b_weight" min="0" required step="0.01">
                    <small class="text-muted">In Grams</small>
                </div>

                <div class="mb-4">
                    <label for="description">Description for Signage</label>
                    <textarea name="b_description" placeholder="...." class="form-control" id="description" cols="30" rows="5"></textarea>
                </div>
              
                <hr class="mb-4">

                <div class="form-group mb-4">
                    <label for="file">Select Images</label><br />
                    <input type="file" name="image" className="form-control-file" id="file" accept="image/*" multiple />
                </div>

               
               
                
                <div class="mb-4">
                    <label for="b_nest_const">Nest Construction Method</label>
                    <input type="text" value="" class="form-control" id="b_nest_const" placeholder="" name="b_nest_const">
                </div>

                <div class="mb-4">
                    <label for="b_clutch_size">Clutch Size</label>
                    <input type="number" value="" class="form-control" id="b_clutch_size" placeholder="" name="b_clutch_size" min="0" step="0.01">
                    <small class="text-muted">In CM</small>
                </div>

                <div class="mb-4">
                    <label for="b_wingspan">Wingspan</label>
                    <input type="number" value="" class="form-control" id="b_wingspan" placeholder="" name="b_wingspan" min="0" step="0.01">
                    <small class="text-muted">In Centemeter</small>
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
                    <input type="text" value="" class="form-control" id="b_color_variant" placeholder="" name="b_color_variant">
                </div>
               
               

              
                <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit">Add Animal</button>
            </form>
        </div>
    </div>
</div>
@endsection
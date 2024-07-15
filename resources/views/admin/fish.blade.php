@extends('admin/adminlayout')
@section('content')
<div class="container">
    <div class="row pb-5">
        <div class="col-md-8 order-md-1">
           @include('flashmessages')
            <h1 class="h3 mb-4 text-gray-800">Add Animal(fish)</h1>
            <form action="{{route('fishcreate')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="animal_id" value="">
                <div class="row">
                    <div class="col-md-6 mb-4 field-required">
                        <label for="givenname">Given name</label>
                        <input type="text" class="form-control" id="givenname" name="f_name" placeholder="" value="" required>
                    </div>
                    <div class="col-md-6 mb-4 field-required">
                        <label for="speciesname">Species Name</label>
                        <input type="text" class="form-control" id="speciesname" name="f_species_name" placeholder="" value="" required>
                    </div>
                </div>

                <div class="mb-4">
                    <label for="dob">Date of Birth</label>
                    <input type="date" value="" class="form-control" name="f_dob" id="dob">
                </div>

                <div class="mb-4 field-required">
                    <label for="gender">Gender</label>
                    <select class="custom-select d-block w-100" name="f_gender" id="gender" required>
                        <option value="m">Male</option>
                        <option value="f">Female</option>
                    </select>
                </div>

                <div class="mb-4 field-required">
                    <label for="lifespan">Average Lifespan</label>
                    <input type="text" value="" class="form-control" id="lifespan" placeholder="Eg: 2 Years, 1.5 Years" name="f_avg_lifespan" required>
                </div>

               
               
                <div class="mb-4 field-required">
                    <label for="dietary">Dietary Requirement</label>
                    <input type="text" value="" class="form-control" id="dietary" placeholder="Eg: About 1.5 KGs of meat a day" name="f_dietary_req" required>
                </div>

               

             

                <div class="mb-4 field-required">
                    <label for="joindate">Zoo Join Date</label>
                    <input type="date" value="" class="form-control" name="f_joindate" id="joindate" required>
                </div>

                <div class="mb-4 field-required">
                    <label for="height">Animal Height</label>
                    <input type="number" value="" class="form-control" id="height" placeholder="" name="f_height" min="0" required step="0.01">
                    <small class="text-muted">In Centemeters</small>
                </div>

                <div class="mb-4 field-required">
                    <label for="weight">Animal Weight</label>
                    <input type="number" value="" class="form-control" id="weight" placeholder="" name="f_weight" min="0" required step="0.01">
                    <small class="text-muted">In Grams</small>
                </div>

                <div class="mb-4">
                    <label for="description">Description for Signage</label>
                    <textarea name="f_description" placeholder="...." class="form-control" id="description" cols="30" rows="5"></textarea>
                </div>
              
                <hr class="mb-4">

                <div class="form-group mb-4">
                    <label for="file">Select Images</label><br />
                    <input type="file" name="image" className="form-control-file" id="file" accept="image/*" multiple />
                </div>

               
               
                
                <div class="mb-4">
                    <label for="f_body_temp">Average Body Temperature</label>
                    <input type="number" value="" class="form-control" id="f_body_temp" placeholder="" name="f_body_temp" min="0" step="0.01">
                    <small class="text-muted">In Celcius</small>
                </div>

                <div class="mb-4">
                    <label for="f_water_type">Water Type</label>
                    <input type="text" value="" class="form-control" id="f_water_type" placeholder="Eg: Salt, Fresh" name="f_water_type">
                </div>

                <div class="mb-4">
                    <label for="f_color_variant">Color Variants</label>
                    <input type="text" value="" class="form-control" id="f_color_variant" placeholder="" name="f_color_variant">
                </div>

               

              
                <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit">Add Animal</button>
            </form>
        </div>
    </div>
</div>
@endsection
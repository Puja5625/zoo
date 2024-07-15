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
            <h1 class="h3 mb-4 text-gray-800">Edit Animal(reptile)</h1>
            <form action="{{route('updatereptile',$reptile['id'])}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="animal_id" value="">
                <div class="row">
                    <div class="col-md-6 mb-4 field-required">
                        <label for="givenname">Given name</label>
                        <input type="text" class="form-control" id="givenname" name="r_name" placeholder="" value="{{$reptile['r_name']}}" required>
                    </div>
                    <div class="col-md-6 mb-4 field-required">
                        <label for="speciesname">Species Name</label>
                        <input type="text" class="form-control" id="speciesname" name="r_species_name" placeholder="" value="{{$reptile['r_species_name']}}" required>
                    </div>
                </div>

                <div class="mb-4">
                    <label for="dob">Date of Birth</label>
                    <input type="date" value="{{$reptile['r_dob']}}" class="form-control" name="r_dob" id="dob">
                </div>

                <div class="mb-4 field-required">
                    <label for="gender">Gender</label>
                    <input type="text" class="form-control" id="gender" name="r_gender" placeholder="" value="{{$reptile['r_gender']}}" required>

                   
                </div>

                <div class="mb-4 field-required">
                    <label for="lifespan">Average Lifespan</label>
                    <input type="text" value="{{$reptile['r_avg_lifespan']}}" class="form-control" id="lifespan" placeholder="Eg: 2 Years, 1.5 Years" name="r_avg_lifespan" required>
                </div>

               
               
                <div class="mb-4 field-required">
                    <label for="dietary">Dietary Requirement</label>
                    <input type="text" value="{{$reptile['r_dietary_req']}}" class="form-control" id="dietary" placeholder="Eg: About 1.5 KGs of meat a day" name="r_dietary_req" required>
                </div>

               

             

                <div class="mb-4 field-required">
                    <label for="joindate">Zoo Join Date</label>
                    <input type="date" value="{{$reptile['r_joindate']}}" class="form-control" name="r_joindate" id="joindate" required>
                </div>

                <div class="mb-4 field-required">
                    <label for="height">Animal Height</label>
                    <input type="number" value="{{$reptile['r_height']}}" class="form-control" id="height" placeholder="" name="r_height" min="0" required step="0.01">
                    <small class="text-muted">In meters</small>
                </div>

                <div class="mb-4 field-required">
                    <label for="weight">Animal Weight</label>
                    <input type="number" value="{{$reptile['r_weight']}}" class="form-control" id="weight" placeholder="" name="r_weight" min="0" required step="0.01">
                    <small class="text-muted">In KG</small>
                </div>

                <div class="mb-4">
                    <label for="description">Description for Signage</label>
                    <textarea name="r_description" placeholder="...." class="form-control" id="description" cols="30" rows="5">{{$reptile['r_description']}}</textarea>
                </div>
              
                <hr class="mb-4">

                <div class="form-group mb-4">
                    <label for="file">Select Images</label><br />
                    <img src="/an_image/{{$reptile['r_image']}}" width="150" height="150" alt=""></br></br>
                    <input type="file" value="" name="image" className="form-control-file @error('image') is-invalid @enderror" id="file" accept="image/*" multiple />
                    @error('image')
                    <div class="form-error text-danger">
                        {{$message}}
                    </div>
                @enderror
                </div>

               
               
              
                <div class="mb-4">
                    <label for="rep_type">Reproduction Type</label>
                    <input type="text" value="{{$reptile['r_rep_type']}}" class="form-control" id="rep_type" placeholder="Eg: Egg layer, Livebearer" name="r_rep_type">

                </div>

                <div class="mb-4">
                    <label for="clutch_size">Average Clutch Size</label>
                    <input type="number" value="{{$reptile['r_cluth_size']}}" class="form-control" id="clutch_size" placeholder="" name="r_clutch_size" step="0.01">
                </div>

                <div class="mb-4">
                    <label for="num_offspring">Average Number of Offspring</label>
                    <input type="number" value="{{$reptile['r_num_offspring']}}" class="form-control" id="num_offspring" placeholder="" name="r_num_offspring">
                </div>
               
               
               

              
                <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit">Edit Animal</button>
            </form>
        </div>
    </div>
</div>
@endsection
@extends('admin/adminlayout')
@section('content')
<div class="container">
    <div class="row pb-5">
        <div class="col-md-8 order-md-1">
           
            <h1 class="h3 mb-4 text-gray-800">Edit Animal(mammal)</h1>
            <form action="{{route('updatemammal',$mammal['id'])}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="animal_id" value="">
                <div class="row">
                    <div class="col-md-6 mb-4 field-required">
                        <label for="givenname">Given name</label>
                        <input type="text" class="form-control" id="givenname" name="m_name" placeholder="" value="{{$mammal['m_name']}}" required>
                    </div>
                    <div class="col-md-6 mb-4 field-required">
                        <label for="speciesname">Species Name</label>
                        <input type="text" class="form-control" id="speciesname" name="m_species_name" placeholder="" value="{{$mammal['m_species_name']}}" required>
                    </div>
                </div>

                <div class="mb-4">
                    <label for="dob">Date of Birth</label>
                    <input type="date" value="{{$mammal['m_dob']}}" class="form-control" name="m_dob" id="dob">
                </div>

                <div class="mb-4 field-required">
                    <label for="gender">Gender</label>
                    <input type="text" class="form-control" id="gender" name="m_gender" placeholder="" value="{{$mammal['m_gender']}}" required>

                   
                </div>

                <div class="mb-4 field-required">
                    <label for="lifespan">Average Lifespan</label>
                    <input type="text" value="{{$mammal['m_avg_lifespan']}}" class="form-control" id="lifespan" placeholder="Eg: 2 Years, 1.5 Years" name="m_avg_lifespan" required>
                </div>

               
               
                <div class="mb-4 field-required">
                    <label for="dietary">Dietary Requirement</label>
                    <input type="text" value="{{$mammal['m_dietary_req']}}" class="form-control" id="dietary" placeholder="Eg: About 1.5 KGs of meat a day" name="m_dietary_req" required>
                </div>

               

             

                <div class="mb-4 field-required">
                    <label for="joindate">Zoo Join Date</label>
                    <input type="date" value="{{$mammal['m_joindate']}}" class="form-control" name="m_joindate" id="joindate" required>
                </div>

                <div class="mb-4 field-required">
                    <label for="height">Animal Height</label>
                    <input type="number" value="{{$mammal['m_height']}}" class="form-control" id="height" placeholder="" name="m_height" min="0" required step="0.01">
                    <small class="text-muted">In meters</small>
                </div>

                <div class="mb-4 field-required">
                    <label for="weight">Animal Weight</label>
                    <input type="number" value="{{$mammal['m_weight']}}" class="form-control" id="weight" placeholder="" name="m_weight" min="0" required step="0.01">
                    <small class="text-muted">In KG</small>
                </div>

                <div class="mb-4">
                    <label for="description">Description for Signage</label>
                    <textarea name="m_description" placeholder="...." class="form-control" id="description" cols="30" rows="5">{{$mammal['m_description']}}</textarea>
                </div>
              
                <hr class="mb-4">

                <div class="form-group mb-4">
                    <label for="file">Select Images</label><br />
                    <img src="/an_image/{{$mammal['m_image']}}" width="150" height="150" alt=""></br></br>
                    <input type="file" value=""  name="image" className="form-control-file @error('image') is-invalid @enderror" id="file" accept="image/*" />
                    @error('image')
                    <div class="form-error text-danger">
                        {{$message}}
                    </div>
                @enderror
                </div>

               
               
                

                <div class="mb-4">
                    <label for="gast_per">Gestational Period</label>
                    <input type="text" value="{{$mammal['m_gest_period']}}" class="form-control" id="gast_per" placeholder="" name="m_gest_period">
                </div>

                <div class="mb-4">
                    <label for="m_category">Mammal Category</label>
                    <input type="text" value="{{$mammal['m_category']}}" class="form-control" id="m_category" placeholder="Eg: Prototheria, Metatheria" name="m_category">
                </div>

                <div class="mb-4">
                    <label for="avg_temp">Average Body Temperature</label>
                    <input type="number" value="{{$mammal['m_avg_body_temp']}}" class="form-control" id="avg_temp" placeholder="Eg: 12.6" name="m_avg_body_temp" min="0" step="0.01">
                    <small class="text-muted">In Celcius</small>
                </div>

               
               

              
                <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit">Edit Animal</button>
            </form>
        </div>
    </div>
</div>
@endsection
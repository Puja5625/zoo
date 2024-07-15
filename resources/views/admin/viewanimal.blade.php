@extends('admin/adminlayout')
@section('content')


<div class="container-fluid">
@include('flashmessages')
    <div class="row">
   
        <div class="col">
        <h1 class="h3 mb-4 text-gray-800">View  Animals</h1>
        <div class="col-3 offset-9">
        <form action="{{route('showanimal')}}">
            <div class="row">
                <input type="text" name="msearchkey" value="{{request('msearchkey')}}" placeholder="Enter search key....." class="form-control col">
                <button class="btn btn-danger col-2" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
        </form>
        </div>
           
        
                        <div class="table-responsive">
                        <!-- for mammal -->
                         <h4>Mammals</h4>
                         @if(count($mammals) != 0   )
                            <table class="table table-hover">
                                <thead class="bg-secondary text-white  ">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Species Name</th>
                                        <th scope="col">DOB</th>
                                        <th scope="col">Gender</th>
                                        <th scope="col">Lifespan</th>
                                     
                                        <th scope="col">Diet Requirement</th>
                                        
                                      
                                        <th scope="col">Join Date</th>
                                        <th scope="col">Height</th>
                                        <th scope="col">Weight</th>
                                        <th scope="col">Gestational Period</th>
                                        <th scope="col">Mammal Category</th>
                                        <th scope="col">Body Temperature</th>
                                      
                                    
                                    </tr>
                                </thead>
                                <tbody>
                                
                                    @foreach ($mammals as $mammal)
                                      
                                            <tr>
                                                <th scope="row">{{$mammal['id']}}</th>
                                                <td><img src="../an_image/{{$mammal['m_image']}}" alt="" width="100px"  height="100px"  style="border-radius: 20px;"></td>
                                                <td>{{$mammal['m_name'] }}</td>
                                                <td>{{$mammal['m_species_name'] }}</td>
                                                <td>{{$mammal['m_dob']== null ? "N/A" : $mammal['m_dob']  }}</td>
                                                <td>{{$mammal['m_gender'] }}</td>
                                                <td>{{$mammal['m_avg_lifespan'] }}</td>
                                               
                                                <td>{{$mammal['m_dietary_req'] }}</td>
                                              
                                               
                                                <td>{{$mammal['m_joindate'] }}</td>
                                                <td>{{$mammal['m_height'] }}</td>
                                                <td>{{$mammal['m_weight'] }}</td>

                                             
                                               
                                                    <td>{{$mammal['m_gest_period'] }}</td>
                                                    <td>{{$mammal['m_category'] }}</td>
                                                    <td>{{$mammal['m_avg_body_temp'] }}</td>
                                                   
                                            </tr>
                                            <tr  class="text-right">                   
                                            <td   colspan="14">
                                                <a href="{{route('editmammal',$mammal['id'])}}" class="btn btn-primary btn-sm d-inline-block"><i class="fas fa-edit"></i> Edit</a>
                                                <a href="{{route('deletemammal',$mammal['id'])}}" class="btn btn-danger btn-sm d-inline-block"><i class="fas fa-archive"></i> Delete</a>
                                            </td>
                                            </tr>
                                      @endforeach 
                                </tbody>
                            </table>
                           <div style="float:right;">
                           {{ $mammals->appends(request()->query())->links() }}
                           </div>
                            @else
                            <h5 class="text-muted text-center mt-5">There is no animal!</h5>

                            @endif
                        </div>

                    
               
            
        </div>
    </div>
    <hr>
     <!-- for bird -->
    <div class="row">
        <div class="col">
        <div class="col-3 offset-9">
        <form action="{{route('showanimal')}}">
            <div class="row">
                <input type="text" name="bsearchkey" value="{{request('bsearchkey')}}" placeholder="Enter search key....." class="form-control col">
                <button class="btn btn-danger col-2" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
        </form>
        </div>
        
                        <div class="table-responsive">
                      
                         <h4>Birds</h4>
                         @if(count($birds) != 0)
                            <table class="table table-hover">
                                <thead class="bg-secondary text-white  ">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Species Name</th>
                                        <th scope="col">DOB</th>
                                        <th scope="col">Gender</th>
                                        <th scope="col">Lifespan</th>
                                     
                                        <th scope="col">Diet Requirement</th>
                                        
                                      
                                        <th scope="col">Join Date</th>
                                        <th scope="col">Height</th>
                                        <th scope="col">Weight</th>
                                        <th scope="col">Nest Construction</th>
                                        <th scope="col">Clutch Size</th>
                                        <th scope="col">Wingspan</th>
                                        <th scope="col">Can Fly</th>
                                        <th scope="col">Color Variant</th>
                                       
                                    
                                    </tr>
                                </thead>
                                <tbody>
                                  
                                    @foreach ($birds as $bird)
                                      
                                            <tr>
                                                <th scope="row">{{$bird['id']}}</th>
                                                <td><img src="../an_image/{{$bird['b_image']}}" alt="" height="100px"  width="100px" style="border-radius: 20px;"></td>
                                                <td>{{$bird['b_name'] }}</td>
                                                <td>{{$bird['b_species_name'] }}</td>
                                                <td>{{$bird['b_dob']== null ? "N/A" : $bird['b_dob']  }}</td>
                                                <td>{{$bird['b_gender'] }}</td>
                                                <td>{{$bird['b_avg_lifespan'] }}</td>
                                               
                                                <td>{{$bird['b_dietary_req'] }}</td>
                                              
                                               
                                                <td>{{$bird['b_joindate'] }}</td>
                                                <td>{{$bird['b_height'] }}</td>
                                                <td>{{$bird['b_weight'] }}</td>

                                             
                                               
                                                <td>{{ $bird['b_nest_const'] }}</td>
                                                    <td>{{ $bird['b_cluth_size'] }}</td>
                                                    <td>{{ $bird['b_wingspan'] }}</td>
                                                    <td>{{ $bird['b_ability_fly'] }}</td>
                                                    <td>{{ $bird['b_color_variant'] }}</td>
                                                    
                                            
                                            </tr>
                                            <tr class="text-right">
                                            <td  colspan="16">
                                                <a href="{{route('editbird',$bird['id'])}}" class="btn btn-primary btn-sm d-inline-block"><i class="fas fa-edit"></i> Edit</a>
                                                <a href="{{route('deletebird',$bird['id'])}}" class="btn btn-danger btn-sm d-inline-block"><i class="fas fa-archive"></i> Delete</a>
                                            </td>
                                            </tr>
                                      @endforeach 
                                </tbody>
                            </table>
                            <div style="float:right;">
                           {{ $birds->appends(request()->query())->links() }}
                           </div>
                            @else
                            <h5 class="text-muted text-center  mt-5">There is no animal!</h5>

                            @endif
                        </div>

                    
               
            
        </div>
    </div>
    <hr>
     <!-- for fish -->
    <div class="row">
        <div class="col">
        <div class="col-3 offset-9">
        <form action="{{route('showanimal')}}">
            <div class="row">
                <input type="text" name="fsearchkey" value="{{request('fsearchkey')}}" placeholder="Enter search key....." class="form-control col">
                <button class="btn btn-danger col-2" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
        </form>
        </div>
        
                        <div class="table-responsive">
                      
                         <h4>Fishs</h4>
                         @if(count($fishs) != 0)
                            <table class="table table-hover  ">
                                <thead class="bg-secondary text-white  ">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Species Name</th>
                                        <th scope="col">DOB</th>
                                        <th scope="col">Gender</th>
                                        <th scope="col">Lifespan</th>
                                     
                                        <th scope="col">Diet Requirement</th>
                                        
                                      
                                        <th scope="col">Join Date</th>
                                        <th scope="col">Height</th>
                                        <th scope="col">Weight</th>
                                        <th scope="col">Body Temperature</th>
                                        <th scope="col">Water Type</th>
                                        <th scope="col">Color Variant</th>
                                     
                   
                                    </tr>
                                </thead>
                                <tbody>
                                  
                                    @foreach ($fishs as $fish)
                                      
                                            <tr>
                                                <th scope="row">{{$fish['id']}}</th>
                                                <td><img src="../an_image/{{$fish['f_image']}}" alt="" height="100px"  width="100px" style="border-radius: 20px;"></td>
                                                <td>{{$fish['f_name'] }}</td>
                                                <td>{{$fish['f_species_name'] }}</td>
                                                <td>{{$fish['f_dob'] == null ? "N/A" : $fish['f_dob']  }}</td>
                                                <td>{{$fish['f_gender'] }}</td>
                                                <td>{{$fish['f_avg_lifespan'] }}</td>
                                               
                                                <td>{{$fish['f_dietary_req'] }}</td>
                                              
                                               
                                                <td>{{$fish['f_joindate'] }}</td>
                                                <td>{{$fish['f_height'] }}</td>
                                                <td>{{$fish['f_weight'] }}</td>

                                             
                                               
                                                <td>{{ $fish['f_body_temp'] }}</td>
                                                    <td>{{ $fish['f_water_type'] }}</td>
                                                    <td>{{ $fish['f_color_variant'] }}</td>
                                                   
                                            
                                            </tr>

                                            <tr class="text-right">
                                            <td  colspan="14">
                                                <a href="{{route('editfish',$fish['id'])}}" class="btn btn-primary btn-sm d-inline-block"><i class="fas fa-edit"></i> Edit</a>
                                                <a href="{{route('deletefish',$fish['id'])}}" class="btn btn-danger btn-sm d-inline-block"><i class="fas fa-archive"></i> Delete</a>
                                            </td>
                                            </tr>
                                      @endforeach 
                                </tbody>
                            </table>
                            <div style="float:right;">
                           {{ $fishs->appends(request()->query())->links() }}
                           </div>
                            @else
                            <h5 class="text-muted text-center  mt-5">There is no animal!</h5>

                            @endif
                        </div>

                    
               
            
        </div>
    </div>
    <hr>
     <!-- for amphibian -->
    <div class="row">
        <div class="col">
           
        <div class="col-3 offset-9">
        <form action="{{route('showanimal')}}">
            <div class="row">
                <input type="text" name="rsearchkey" value="{{request('rsearchkey')}}" placeholder="Enter search key....." class="form-control col">
                <button class="btn btn-danger col-2" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
        </form>
        </div>
                        <div class="table-responsive">
                      
                         <h4>Reptiles</h4>
                         @if(count($reptiles) != 0)
                            <table class="table table-hover ">
                                <thead class="bg-secondary text-white  ">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Species Name</th>
                                        <th scope="col">DOB</th>
                                        <th scope="col">Gender</th>
                                        <th scope="col">Lifespan</th>
                                     
                                        <th scope="col">Diet Requirement</th>
                                        
                                      
                                        <th scope="col">Join Date</th>
                                        <th scope="col">Height</th>
                                        <th scope="col">Weight</th>
                                        <th scope="col">Reproduction Type</th>
                                        <th scope="col">Clutch Size</th>
                                        <th scope="col">No. of Offspring</th>
                                       
                   
                                    </tr>
                                </thead>
                                <tbody>
                             
                                    @foreach ($reptiles as $reptile)
                                      
                                            <tr>
                                                <th scope="row">{{$reptile['id']}}</th>
                                                <td><img src="../an_image/{{$reptile['r_image']}}" alt="" height="100px"  width="100px" style="border-radius: 20px;"></td>
                                                <td>{{$reptile['r_name'] }}</td>
                                                <td>{{$reptile['r_species_name'] }}</td>
                                                <td>{{$reptile['r_dob']== null ? "N/A" : $reptile['r_dob'] }}</td>
                                                <td>{{$reptile['r_gender'] }}</td>
                                                <td>{{$reptile['r_avg_lifespan'] }}</td>
                                               
                                                <td>{{$reptile['r_dietary_req'] }}</td>
                                              
                                               
                                                <td>{{$reptile['r_joindate'] }}</td>
                                                <td>{{$reptile['r_height'] }}</td>
                                                <td>{{$reptile['r_weight'] }}</td>

                                             
                                               
                                                <td>{{ $reptile['r_rep_type'] }}</td>
                                                    <td>{{ $reptile['r_cluth_size'] }}</td>
                                                    <td>{{ $reptile['r_num_offspring'] }}</td>
                                                   
                                            
                                            </tr>
                                        <tr class="text-right">
                                        <td  colspan="14">
                                            <a href="{{route('editreptile',$reptile['id'])}}" class="btn btn-primary btn-sm d-inline-block"><i class="fas fa-edit"></i> Edit</a>
                                            <a href="{{route('deletereptile',$reptile['id'])}}" class="btn btn-danger btn-sm d-inline-block"><i class="fas fa-archive"></i> Delete</a>
                                        </td>
                                        </tr>
                                      @endforeach 
                             
                                  
                                </tbody>
                            </table>
                            <div style="float:right;">
                           {{ $reptiles->appends(request()->query())->links() }}
                           </div>
                            @else
                            <h5 class="text-muted text-center  mt-5">There is no animal!</h5>

                            @endif
                        </div>

                    
               
            
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col">
        <div class="col-3 offset-9">
        <form action="{{route('showanimal')}}">
            <div class="row">
                <input type="text" name="asearchkey" value="{{request('asearchkey')}}" placeholder="Enter search key....." class="form-control col">
                <button class="btn btn-danger col-2" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
        </form>
        </div>
        
                        <div class="table-responsive">
                      
                         <h4>Amphibians</h4>
                         @if(count($amphibians ) != 0)
                            <table class="table table-hover">
                                <thead class="bg-secondary text-white  ">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Species Name</th>
                                        <th scope="col">DOB</th>
                                        <th scope="col">Gender</th>
                                        <th scope="col">Lifespan</th>
                                     
                                        <th scope="col">Diet Requirement</th>
                                        
                                      
                                        <th scope="col">Join Date</th>
                                        <th scope="col">Height</th>
                                        <th scope="col">Weight</th>
                                        <th scope="col">Reproduction Type</th>
                                        <th scope="col">Clutch Size</th>
                                        <th scope="col">No. of Offspring</th>
                                        <th scope="col">Actions</th>
                   
                                    </tr>
                                </thead>
                                <tbody>
                                  
                                    @foreach ($amphibians as $amphibian)
                                      
                                            <tr>
                                                <th scope="row">{{$amphibian['id']}}</th>
                                                <td><img src="../an_image/{{$amphibian['a_image']}}" height="100px"  alt="" width="100px" style="border-radius: 20px;"></td>
                                                <td>{{$amphibian['a_name'] }}</td>
                                                <td>{{$amphibian['a_species_name'] }}</td>
                                                    <td>{{$amphibian['a_dob']== null ? "N/A" : $amphibian['a_dob']}}</td>
                                                <td>{{$amphibian['a_gender'] }}</td>
                                                <td>{{$amphibian['a_avg_lifespan'] }}</td>
                                               
                                                <td>{{$amphibian['a_dietary_req'] }}</td>
                                              
                                               
                                                <td>{{$amphibian['a_joindate'] }}</td>
                                                <td>{{$amphibian['a_height'] }}</td>
                                                <td>{{$amphibian['a_weight'] }}</td>

                                             
                                               
                                                <td>{{ $amphibian['a_rep_type'] }}</td>
                                                    <td>{{ $amphibian['a_cluth_size'] }}</td>
                                                    <td>{{ $amphibian['a_num_offspring'] }}</td>
                                                   
                                            
                                            </tr>
                                            <tr class="text-right">
                                            <td  colspan="14">
                                                <a href="{{route('editamphibian',$amphibian['id'])}}" class="btn btn-primary btn-sm d-inline-block"><i class="fas fa-edit"></i> Edit</a>
                                                <a href="{{route('deleteamphibian',$amphibian['id'])}}" class="btn btn-danger btn-sm d-inline-block"><i class="fas fa-archive"></i> Delete</a>
                                            </td>
                                            </tr>
                                      @endforeach 
                                </tbody>
                            </table>
                            <div style="float:right;">
                           {{ $amphibians->appends(request()->query())->links() }}
                           </div>
                            @else
                            <h5 class="text-muted text-center  mt-5">There is no animal!</h5>

                            @endif
                        </div>

                    
               
            
        </div>
    </div>
</div>
@endsection
@extends('admin/adminlayout')
@section('content')


<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h1 class="h3 mb-4 text-gray-800">View  Animals</h1>
        
                        <div class="table-responsive">
                        <!-- for mammal -->
                         <h4>Mammals</h4>
                         @if(count($mammals) != 0   )
                            <table class="table table-hover  ">
                                <thead class="bg-secondary text-white  ">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Species Name</th>
                                        <th scope="col">DOB</th>
                                        <th scope="col">Gender</th>
                                      
                                        <th scope="col">Join Date</th>
                                        <th scope="col">Descriptions</th>
                                       
                                        <th scope="col">Actions</th>
                                    
                                    </tr>
                                </thead>
                                <tbody>
                                  
                                    @foreach ($mammals as $mammal)
                                      
                                            <tr>
                                                <th scope="row">{{$mammal['id']}}</th>
                                                <td><img src="../an_image/{{$mammal['m_image']}}" alt="" width="100px" style="border-radius: 20px;"></td>
                                                <td>{{$mammal['m_name'] }}</td>
                                                <td>{{$mammal['m_species_name'] }}</td>
                                                <td>{{$mammal['m_dob'] }}</td>
                                                <td>{{$mammal['m_gender'] }}</td>
                                               
                                                <td>{{$mammal['m_joindate'] }}</td>
                                                <td>{{$mammal['m_description'] }}</td>
                                             
                                                    <td style="min-width: 180px;text-align:center;">
                                                    <form action="{{route('setmammalcreate',$mammal['id'])}}" method="post">
                                                            @csrf
                                                            <button type="submit" class="btn btn-dark text-warning btn-sm d-inline-block"><i class="fas fa-trophy"></i>&emsp;Set Animal of the Week</button>
                                                        </form>
                                                   

                                                        </td>
                                            
                                            </tr>
                                      @endforeach 
                                    
                                   
                                    <tr><td colspan="9"><h4>Birds</h4></td></tr>
                                    @foreach ($birds as $bird)
                                      <tr>
                                          <th scope="row">{{$bird['id']}}</th>
                                          <td><img src="../an_image/{{$bird['b_image']}}" alt="" width="100px"   height="100px" style="border-radius: 20px;"></td>
                                          <td>{{$bird['b_name'] }}</td>
                                          <td>{{$bird['b_species_name'] }}</td>
                                          <td>{{$bird['b_dob'] }}</td>
                                          <td>{{$bird['b_gender'] }}</td>
                                        
                                        
                                         
                                          <td>{{$bird['b_joindate'] }}</td>
                                          <td>{{$bird['b_description'] }}</td>                      
                                              <td style="min-width: 180px;text-align:center;">
                                              <form action="{{route('setbirdcreate',$bird['id'])}}" method="post">
                                                      @csrf
                                                      <button class="btn btn-dark text-warning btn-sm d-inline-block "><i class="fas fa-trophy"></i>&emsp;Set Animal of the Week</button>
                                                  </form>  
                                                  </td>
                                      
                                      </tr>
                                @endforeach 
                              
                               
                                <tr><td colspan="9"><h4>Fishs</h4></td></tr>
                                @foreach ($fishs as $fish)
                                      <tr>
                                          <th scope="row">{{$fish['id']}}</th>
                                          <td><img src="../an_image/{{$fish['f_image']}}" alt="" width="100px"  height="100px" style="border-radius: 20px;"></td>
                                          <td>{{$fish['f_name'] }}</td>
                                          <td>{{$fish['f_species_name'] }}</td>
                                          <td>{{$fish['f_dob'] }}</td>
                                          <td>{{$fish['f_gender'] }}</td>
                                        
                                         
                                          <td>{{$fish['f_joindate'] }}</td>
                                          <td>{{$fish['f_description'] }}</td>
                                         
                                              <td style="min-width: 180px;text-align:center;">
                                              <form action="{{route('setfishcreate',$fish['id'])}}" method="post">
                                                      @csrf
                                                      <button class="btn btn-dark text-warning  btn-sm d-inline-block"><i class="fas fa-trophy"></i>&emsp;Set Animal of the Week</button>
                                                  </form>                                                        
                                              </td>
                                      
                                      </tr>
                                @endforeach 
                               
                               
                                <tr><td colspan="9"><h4>reptiles</h4></td></tr>
                                @foreach ($reptiles as $reptile)
                                      <tr>
                                          <th scope="row">{{$reptile['id']}}</th>
                                          <td><img src="../an_image/{{$reptile['r_image']}}" alt="" width="100px"  height="100px" style="border-radius: 20px;"></td>
                                          <td>{{$reptile['r_name'] }}</td>
                                          <td>{{$reptile['r_species_name'] }}</td>
                                          <td>{{$reptile['r_dob'] }}</td>
                                          <td>{{$reptile['r_gender'] }}</td>
                                        
                                         
                                          <td>{{$reptile['r_joindate'] }}</td>
                                          <td>{{$reptile['r_description'] }}</td>

                                       
                                         
                                         
                                              <td style="min-width: 180px">
                                              <form action="{{route('setreptilecreate',$reptile['id'])}}" method="post">
                                                      @csrf
                                                      <button class="btn btn-dark text-warning btn-sm d-inline-block"><i class="fas fa-trophy"></i>&emsp;Set Animal of the Week</button>
                                                  </form>
                                                  </td>
                                      
                                      </tr>
                                @endforeach 
                               
                                
                                <tr><td colspan="9"><h4>Amphibians</h4></td></tr>
                                @foreach ($amphibians as $amphibian)    
                                      <tr>
                                          <th scope="row">{{$amphibian['id']}}</th>
                                          <td><img src="../an_image/{{$amphibian['a_image']}}" alt="" width="100px"  height="100px" style="border-radius: 20px;"></td>
                                          <td>{{$amphibian['a_name'] }}</td>
                                          <td>{{$amphibian['a_species_name'] }}</td>
                                          <td>{{$amphibian['a_dob'] }}</td>
                                          <td>{{$amphibian['a_gender'] }}</td>
                                        
                                         
                                          <td>{{$amphibian['a_joindate'] }}</td>
                                          <td>{{$amphibian['a_description'] }}</td>
                                       
                                         
                                          
                                              <td style="min-width: 180px">
                                              <form action="{{route('setamphibiancreate',$amphibian['id'])}}" method="post">
                                                      @csrf
                                                      <button class="btn btn-dark text-warning btn-sm d-inline-block"><i class="fas fa-trophy"></i>&emsp;Set Animal of the Week</button>
                                                  </form>
                                                  </td>
                                      
                                      </tr>
                                @endforeach 
                                </tbody>
                            </table>
                            <div  style="float:right;">
                            {{ $mammals,$birds,$fishs,$reptiles,$amphibians->appends(request()->query())->links() }}
                            </div>
                           
                            @else
                            <h5 class="text-muted text-center">There is no animal!</h5>

                            @endif
                        </div>

                    
               
            
        </div>
    </div>
    <hr>
   
   
   
    
    
    

    <div class="mt-4">
                <div class="card mb-4">
                    <div class="card-header h5 text-gray-800 font-weight-bold">
                        Current Animal of the Week
                    </div>
                    <div class="card-body d-flex ">
                     
                      
                            <div class="text-center mr-5">
                                <img src="../an_image/{{$setanimals['setweekan_image']}}" alt="" width="400px" height="300px" style="border-radius: 20px">
                            </div>
                            <div>
                                <h6> <span class="text-muted">Given name:</span>&ensp; {{$setanimals['setweekan_name'] }}</h6>
                                <h6> <span class="text-muted">Species name:</span>&ensp;{{$setanimals['setweekan_species_name']}}</h6>
                                <h6> <span class="text-muted">Date of birth:</span>&ensp; {{$setanimals['setweekan_dob']}} </h6>
                                <h6> <span class="text-muted">Gender:</span>&ensp;{{$setanimals['setweekan_gender'] == "m" ? "Male":"Female" }}</h6>
                                <h6> <span class="text-muted">Zoo join date:</span>&ensp;{{$setanimals['setweekan_joindate']}}</h6>
                            </div>
                          
                     
                     
                    </div>
                </div>
            </div>
</div>
@endsection
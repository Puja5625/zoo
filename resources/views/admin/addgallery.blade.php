@extends('admin/adminlayout')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
        @include('flashmessages')
            <h1 class="h3 mb-4 text-gray-800">Update Gallery Contents</h1>
           
            <div class="tab-content" id="myTabContent">
        
                <h3 class="h4 mb-4 text-gray-800"> Image Contents</h3>
                

                        <div class="table-responsive">
                        @if(count($galleries) != 0)
                            <table class="table table-hover  ">
                                <thead class="bg-secondary text-white">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  
                                    @foreach ($galleries as $gal)
                                      
                                            <tr>
                                                <th scope="row">{{$gal['id']}}</th>
                                               
                                                  
                                              
                                                    <td><img src="../images/{{$gal['g_file_name']}}" alt="" width="120px"  height="100px" style="border-radius: 20px;"></td>
                                              
                                                <td>
                                                    <a href="{{route('deletegallery',$gal['id'])}}" class="btn btn-danger btn-sm d-inline-block"><i class="fas fa-archive"></i> Delete</a>
                                                </td>
                                            </tr>
                                      @endforeach
                                </tbody>
                            </table>
                            @else
                             <h5 class="text-muted text-center  mt-5">There is no image!</h5>
                                @endif
                        </div>
                        <h3 class="h4 mb-4 text-gray-800"> Video Contents</h3>
                        <div class="table-responsive">
                        @if(count($videos) != 0)
                            <table class="table table-hover table-striped ">
                                <thead  class="bg-secondary text-white">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Video</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  
                                    @foreach ($videos as $video)
                                      
                                            <tr>
                                                <th scope="row">{{$video['id']}}</th>
                                               
                                                  
                                              
                                                    <td>{{$video['v_file_name']}}</td>
                                              
                                                <td>
                                                    <a href="{{route('deletegallery',$video['id'])}}" class="btn btn-danger btn-sm d-inline-block"><i class="fas fa-archive"></i> Delete</a>
                                                </td>
                                            </tr>
                                      @endforeach
                                </tbody>
                            </table>
                            @else
                            <h5 class="text-muted text-center  mt-5">There is no video!</h5>
                            @endif
                        </div>

                
          
            </div>

            <div class="mt-5">
                <h4 class="mb-4">Upload Image for Gallery</h4>
                <form action="{{route('gallerycreate')}}" method="POST" enctype="multipart/form-data">

                    @csrf
                    <div class="form-group mb-4">

                        <input type="file" name="image" className="form-control-file" accept="image/*" required />
                    </div>
                    <button class="btn btn-primary" type="submit" name="submit_image">Add Image</button>
                </form>
            </div>
            <div class="mt-5">
                <h4 class="mb-4">Upload Video for Gallery</h4>
                <form action="{{route('videocreate')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-4">

                        <input type="file" name="video" className="form-control-file" accept="video/*" required />
                    </div>
                    <button class="btn btn-primary" type="submit" name="submit_video">Add Video</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

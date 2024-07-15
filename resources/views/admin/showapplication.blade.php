@extends('admin/adminlayout')
@section('content')

<div class="container-fluid">
<div class="col-4 offset-8">
        <form action="{{route('viewapplication')}}">
            <div class="row">
                <input type="text" name="searchkey" value="{{request('searchkey')}}" placeholder="Enter search key....." class="form-control col">
                <button class="btn btn-danger col-2" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
        </form>
        </div>
    <div class="row">
        <div class="col">
        @include('flashmessages')
            <h1 class="h3 mb-4 text-gray-800">View Job Applications</h1>
           
            <div class="tab-content" id="myTabContent">

                        
                        <div class="table-responsive">
                        @if(count($applications) != 0)
                            <table class="table table-hover">
                                <thead  class="bg-secondary text-white">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Applicant Fullname</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">CV</th>
                                        {{-- <th scope="col">Applied Position</th> --}}
                                        <th scope="col">Actions/Info</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($applications as $app)

                                            <tr>
                                                <th scope="row">{{$app['id']}}</th>
                                                <td> {{$app['a_fullname']}}</td>
                                                <td>{{ $app['a_email']}}</td>
                                                <td>{{$app['a_phone']}}</td>
                                                <td><a href="/../images/{{$app['a_cv']}}" class="btn btn-secondary">Download</a></td>

                                                <!-- for other classes add here  -->
                                                <!-- for other classes add here  -->

                                                    <td>
                                                        <form action="{{route('employeecreate',$app['id'])}}" method="post">
                                                            @csrf
                                                            <button class="btn btn-success btn-sm d-inline-block"><i class="fas fa-check"></i> Accept</button>
                                                            <a href="{{route('deleteapplication',$app['id'])}}" class="btn btn-danger btn-sm d-inline-block"><i class="fas fa-times"></i> Reject</a>

                                                        </form>
                                                    </td>


                                            </tr>
                                     @endforeach
                                </tbody>
                            </table>
                            {{ $applications->appends(request()->query())->links() }}
                         @else
                            <h4 class="text-muted text-center  mt-5">There is no apply for vacancy!</h4>

                        @endif
                        </div>


            </div>
        </div>
    </div>
</div>

@endsection

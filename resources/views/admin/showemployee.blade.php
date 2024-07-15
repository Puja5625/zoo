@extends('admin/adminlayout')
@section('content')

<div class="container-fluid">
<div class="col-4 offset-8">
        <form action="{{route('viewemployee')}}">
            <div class="row">
                <input type="text" name="searchkey" value="{{request('searchkey')}}" placeholder="Enter search key....." class="form-control col">
                <button class="btn btn-danger col-2" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
        </form>
        </div>
    <div class="row">
        <div class="col">
            <?php
            if (isset($_GET['msg'])) {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">' . $_GET['msg'] . '
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>';
            }
            ?>
            <h1 class="h3 mb-4 text-gray-800">View Employees</h1>
          
            <div class="tab-content" id="myTabContent">

                  
                        <div class="table-responsive">
                        @if(count($employees) != 0)
                            <table class="table table-hover">
                                <thead  class="bg-secondary text-white">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Emplyee Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                      
                                      
                                        <th scope="col">Actions/Info</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($employees as $employee)

                                            <tr>
                                                <th scope="row">{{$employee['id']}}</th>
                                                <td> {{$employee['Employee_name']}}</td>
                                                <td>{{ $employee['Email']}}</td>
                                                <td>{{$employee['Phone']}}</td>
                                              

                                                <!-- for other classes add here  -->
                                                <!-- for other classes add here  -->

                                                    <td>
                                                       
                                                        <a href="{{route('deleteemployee',$employee['id'])}}" class="btn btn-danger btn-sm d-inline-block"><i class="fas fa-times"></i> Delete</a>
                                                    </td>


                                            </tr>
                                     @endforeach
                                </tbody>
                            </table>
                            {{ $employees->appends(request()->query())->links() }}
                        @else
                            <h4 class="text-muted text-center  mt-5">There is no employee record!</h4>

                        @endif
                        </div>


            </div>
        </div>
    </div>
</div>

@endsection

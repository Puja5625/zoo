@extends('visitor/visitorpage')
@section('content')

<section class="py-5"  style="background-image:linear-gradient(50deg,white,lightgreen);">
<div class="container py-5">
    <div class="row">
        <div class="col">
           
            <h1 class="h3 mb-4 text-gray-800 lined">View Employees Lists</h1>
          
            <div class="tab-content" id="myTabContent">


                        <div class="table-responsive">
                        @if(count($employees) != 0)
                            <table class="table table-hover table-striped table-bordered bg-dark text-white">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Emplyee Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                      
                                      
                                       
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

                                                   


                                            </tr>
                                     @endforeach
                                </tbody>
                            </table>
                            {{ $employees->links() }}
                            @else
                            <h4 class="text-muted text-center  mt-5">There is no employee record!</h4>

                        @endif
                        </div>


            </div>
        </div>
    </div>
</div>
</section>
@endsection



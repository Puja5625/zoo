@extends('admin/adminlayout')
@section('content')

<div class="container-fluid">
<div class="col-4 offset-8">
        <form action="{{route('viewticket')}}">
            <div class="row">
                <input type="text" name="searchkey" value="{{request('searchkey')}}" placeholder="Enter search key....." class="form-control col">
                <button class="btn btn-danger col-2" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
        </form>
        </div>
    <div class="row">
        <div class="col">
            <h1 class="h3 mb-4 text-gray-800">View Booked Tickets</h1>
          
            <div class="table-responsive">
            @if(count($tickets) != 0)
                <table class="table table-hover table-striped " style="min-width: 600px;">
                    <thead  class="bg-secondary text-white">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Booked For</th>
                            <th scope="col">Child Tickets #</th>
                            <th scope="col">Student Tickets #</th>
                            <th scope="col">Regular Tickets #</th>
                            <th scope="col">Total Price</th>
                            <th scope="col">Visit Date</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tickets as $ticket)
                            <tr>
                                <th scope="row">{{$ticket['id']}}</th>
                                <td>{{$ticket['book_name']}}</td>
                                <td>{{$ticket['child_num']}}</td>
                                <td>{{$ticket['student_num']}}</td>
                                <td>{{$ticket['regular_num']}}</td>
                                <td>{{$ticket['regular_num'] * 3000 +  $ticket['student_num'] * 2500 + $ticket['child_num'] * 2000 }}ks</td>
                                <td>{{$ticket['t_date']}}</td>
                                <td>
                                <a href="{{route('report',$ticket['id'])}}" class="btn btn-success btn-sm d-inline-block"><i class="fa-solid fa-print"></i>&nbsp;Print</a>


                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $tickets->appends(request()->query())->links() }}
                @else
                    <h4 class="text-muted text-center  mt-5">There is no booking record!</h4>

                @endif
            </div>
        </div>
    </div>
</div>

@endsection

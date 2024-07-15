@extends('admin/adminlayout')
@section('content')

<div class="container-fluid">
<div class="col-4 offset-8">
        <form action="{{route('viewsponsor')}}">
            <div class="row">
                <input type="text" name="searchkey" value="{{request('searchkey')}}" placeholder="Enter search key....." class="form-control col">
                <button class="btn btn-danger col-2" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
        </form>
        </div>
    <div class="row">
        <div class="col">
        @include('flashmessages')
            <h1 class="h3 mb-4 text-gray-800">View Sponsor Registrations</h1>



                   

                        <div class="table-responsive">
                        @if(count($sponsors) != 0)
                            <table class="table table-hover">
                                <thead  class="bg-secondary text-white">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Client/Company Name</th>
                                        <th scope="col">Existing Customer</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Client/Company Address</th>
                                        <th scope="col">Yearly Revenue</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Business Type</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($sponsors as $sponsor)

                                            <tr>
                                                <th scope="row">{{$sponsor['id']}}</th>
                                                <td>{{ $sponsor['s_name'] }}</td>
                                                <td>{{$sponsor['s_existing_name']}}</td>
                                                <td>{{$sponsor['s_phone_number'] }}</td>
                                                <td>{{$sponsor['s_address']}}</td>
                                                <td>{{$sponsor['s_yearly_revenue']}}</td>
                                                <td>{{$sponsor['s_email']}}</td>
                                                <td>{{$sponsor['s_business_type']}}</td>

                                                    <td style="min-width: 200px">

                                                        <a href="{{route('deletesponsor',$sponsor['id'])}}" class="btn btn-danger btn-sm d-inline-block"><i class="fas fa-times"></i> Reject</a>
                                                    </td>


                                            </tr>
                                      @endforeach
                                </tbody>
                            </table>
                            {{ $sponsors->appends(request()->query())->links() }}
                        @else
                            <h4 class="text-muted text-center  mt-5">There is no sponsor  record!</h4>

                        @endif
                        </div>




        </div>
    </div>
</div>
@endsection

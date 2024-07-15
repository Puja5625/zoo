@extends('admin/adminlayout')
@section('content')
    <div class="container-fluid">
        <div class="col-4 offset-8">
        <form action="{{route('viewvisitor')}}">
            <div class="row">
                <input type="text" name="searchkey" value="{{request('searchkey')}}" placeholder="Enter search key....." class="form-control col">
                <button class="btn btn-danger col-2" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
        </form>
        </div>
       
    <div class="row">
        <div class="col">
        @include('flashmessages')
            <h1 class="h3 mb-4 text-gray-800">View  Visitors</h1>
          
            <div class="table-responsive">
            @if(count($visitors) != 0)
                <table class="table table-hover">
                    <thead class="bg-secondary text-white">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Address</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                         @foreach ($visitors as $visitor)
                            <tr>
                                <th scope="row">{{$visitor['id']}}</th>
                                <td>{{$visitor['v_firstname']}}</td>
                                <td>{{$visitor['v_lastname']}}</td>
                                <td>{{$visitor['v_email']}}</td>
                                <td> {{$visitor['v_address']}}</td>
                                    <td>
                                        <a href="{{route('deletevisitor',$visitor['id'])}}" class="btn btn-danger btn-sm d-inline-block"><i class="fas fa-archive"></i> Delete</a>
                                    </td>



                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $visitors->appends(request()->query())->links() }}
                @else
                <h4 class="text-muted text-center mt-5">There is no visitor  record!</h4>

                @endif
            </div>
        </div>
    </div>
</div>
@endsection

@extends('admin/adminlayout')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col">
        @include('flashmessages')
            <h1 class="h3 mb-4 text-gray-800">View <span class="text-capitalize"> Admin</span> </h1>
          
            <div class="table-responsive">
            @if(count($accounts) != 0)
                <table class="table table-hover">
                    <thead  class="bg-secondary text-white">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Full Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($accounts as  $account)
                            <tr>
                                <th scope="row">{{$account['id']}}</th>
                                <td>{{$account['admin_name']}}</td>
                                <td>{{$account['admin_email']}}</td>
                                <td>
                                    <a href="{{route('editadmin',$account['id'])}}" class="btn btn-primary btn-sm d-inline-block ml-3"><i class="fas fa-edit"></i> Edit</a>
                                    <a href="{{route('deleteadmin',$account['id'])}}" class="btn btn-danger btn-sm d-inline-block"><i class="fas fa-archive"></i> Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $accounts->links() }}
            @else
                <h4 class="text-muted text-center  mt-5">There is no account for login!</h4>

            @endif
            </div>
        </div>
    </div>
</div>



@endsection
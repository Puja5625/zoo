@extends('admin/adminlayout')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h1 class="h3 mb-4 text-gray-800">View Classifications</h1>
            <div class="table-responsive">
                <table class="table table-hover table-striped table-bordered" style="min-width: 700px;">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Classification Display Name</th>
                            <th scope="col">Classification Table Name</th>
                           
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($classifications as  $classification)
                            <tr>
                                <th scope="row">{{$classification['id']}}</th>
                                <td>{{$classification['class_display_name']}}</td>
                                <td>{{$classification['class_table_name']}}</td>
                               
                              
                                    <td style="max-width: 200px;">
                                        <a href="" class="btn btn-primary btn-sm d-inline-block"><i class="fas fa-edit"></i> Edit</a>
                                        <a href="" class="btn btn-danger btn-sm d-inline-block"><i class="fas fa-archive"></i> Delete</a>
                                    </td>
                               
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
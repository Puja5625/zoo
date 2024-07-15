@extends('admin/adminlayout')
@section('content')

<div class="container-fluid">
<div class="col-4 offset-8">
        <form action="{{route('activevacancy')}}">
            <div class="row">
                <input type="text" name="searchkey" value="{{request('searchkey')}}" placeholder="Enter search key....." class="form-control col">
                <button class="btn btn-danger col-2" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
        </form>
        </div>
    <div class="row">
        <div class="col">
        @include('flashmessages')
            <h1 class="h3 mb-4 text-gray-800">View Active Vacancies</h1>
            <div class="table-responsive">
            @if(count($vacancies) != 0)
                <table class="table table-hover" style="min-width: 500px;">
                    <thead  class="bg-secondary text-white">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Position</th>
                            <th scope="col">Description</th>
                            <th scope="col">Contract Type</th>
                            <th scope="col">Start Date</th>
                            <th scope="col">End Date</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($vacancies as $vacancy)
                            <tr>
                                <th scope="row">{{$vacancy['id']}}</th>
                                <td>{{$vacancy['v_position']}}</td>
                                <td>{{$vacancy['v_description']}}</td>
                                <td class="text-capitalize">{{$vacancy['v_type']}}</td>
                                <td>{{$vacancy['v_start_date']}}</td>
                                <td>{{$vacancy['v_end_date'] == null ? "N/A" : $vacancy['v_end_date']}}</td>
                                <td width="170px">
                                    <a href="{{route('editvacancy',$vacancy['id'])}}" class="btn btn-primary btn-sm d-inline-block"><i class="fas fa-edit"></i> Edit</a>
                                    <a href="{{route('deletevacancy',$vacancy['id'])}}" class="btn btn-danger btn-sm d-inline-block"><i class="fas fa-archive"></i> Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $vacancies->appends(request()->query())->links() }}
                @else
                <h3 class="text-muted text-center mt-5">There is no vacancy for apply!</h3>

                @endif
            </div>
        </div>
    </div>
</div>
@endsection

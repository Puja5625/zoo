@extends('layout')
@section('content')
<section class="py-5" style="background-image:linear-gradient(50deg,white,lightgreen);">
 <div class="container py-5">
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>

        Please register for apply vacancy!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

     </div>

   
        <h2 class="lined mb-4">Vacancies</h2> <!-- needs 600x400 image -->
        @if(count($vacancies) != 0)
        <p class="lead">Following jobs are available in Zoo</p>
        <div class="row">
            <div class="col mt-3">
                @foreach ($vacancies as $vacancy)
                    <div class="border bg-white p-4 mt-3">
                        <h3 class="font-weight-normal">{{$vacancy['v_position']}}</h3>
                        <p class="m-0 py-1"><i class="font-weight-bold">Description:</i>&ensp;<span class="font-weight-normal">{{$vacancy['v_description']}}</span></p>
                        <p class="m-0 py-1"><i class="font-weight-bold">Job Type:</i>&ensp;<span class="font-weight-normal text-capitalize">{{$vacancy['v_type']}}</span></p>
                        <p class="m-0 py-1"><i class="font-weight-bold">Job Start Date:</i>&ensp;<span class="font-weight-normal text-capitalize">{{$vacancy['v_start_date'] }}</span></p>
                        @if ($vacancy['v_type'] == 'temporary')
                            <p class="m-0 py-1"><i class="font-weight-bold">Job End Date:</i>&ensp;<span class="font-weight-normal text-capitalize">{{ $vacancy['v_end_date']}}</span></p>
                        @endif
                        <div style="float:right;">
                            
                            <button class="btn btn-primary" type="submit"  value="apply">Apply</button>
                            
                        </div>
                    </div>
                    @endforeach
            </div>
        </div>
        @else
        <h3 class="text-muted text-center">There is no vacancy for apply job!</h3>
        @endif
    </div>
</section>
@endsection

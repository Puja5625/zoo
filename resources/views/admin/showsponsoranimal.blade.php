@extends('admin/adminlayout')
@section('content')
<div class="container-fluid">
<div class="col-4 offset-8">
        <form action="{{route('viewsponsoranimal')}}">
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
            <h1 class="h3 mb-4 text-gray-800">View Animal Sponsorship Applications</h1>
           
           
               
                       

                        <div class="table-responsive">
                        @if(count($sponsoranimals) != 0)
                            <table class="table table-hover">
                                <thead  class="bg-secondary text-white">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Client/Company Name</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Yearly Revenue</th>
                                        <th scope="col">Business Type</th>
                                        <th scope="col">Website</th>
                                        
                                        <th scope="col">Total Price</th>
                                        <th scope="col">Start Date</th>
                                        <th scope="col">End Date</th>
                                        <th scope="col">Sponsored Animal</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  
                                    @foreach ($sponsoranimals as $spon)
                                                <?php
                                                    $sn = \App\Models\Sponsor::find($spon->sponsor_id);
                                                    $s_name = $sn->s_name;
                                                    $s_phone_number = $sn->s_phone_number;
                                                    $s_yearly_revenue = $sn->s_yearly_revenue;
                                                    $s_business_type = $sn->s_business_type;


                                                ?>
                                       
                                            <tr>
                                                <th scope="row">{{$spon['id']}}</th>
                                                <td>{{$s_name}}</td>
                                                <td>{{$s_phone_number}}</td>
                                                <td>{{$s_yearly_revenue}}</td>
                                                <td>{{$s_business_type}}</td>
                                                <td>{{ $spon['s_url'] }}</td>
                                              
                                                <td>{{ $spon['total_price'] }}ks</td>
                                                <td>{{ $spon['start_date'] }}</td>
                                                <td>{{ $spon['end_date'] }}</td>
                                                <td>{{ $spon['sponsor_animal'] }}</td>
                                              
                                                    <td style="min-width: 200px">
                                                       
                                                        <a href="{{route('deletesponsoranimal',$spon['id'])}}" class="btn btn-danger btn-sm d-inline-block"><i class="fas fa-times"></i> Reject</a>
                                                    </td>
                                             
                                                    
                                               
                                            </tr>
                                    @endforeach 
                                </tbody>
                            </table>
                            {{ $sponsoranimals->appends(request()->query())->links() }}
                         @else
                            <h4 class="text-muted text-center  mt-5">There is no  sponsor animal!</h4>

                         @endif
                        </div>

        </div>
    </div>
</div>
@endsection
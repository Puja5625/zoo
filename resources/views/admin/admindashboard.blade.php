@extends('admin/adminlayout')
@section('content')

    <div class="container-fluid px-5">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
       
        

    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-5 mr-5">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Sponsorship Revenue (Yearly)</div>
                            <div class="h5 mb-0 px-4 font-weight-bold text-gray-800"> {{$totalprice}}ks</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-dark-500"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-5  mr-5">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Animals</div>
                            <div class="h5 mb-0 px-4 font-weight-bold text-gray-800">
                               {{$totalanimal}}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dog fa-2x text-dark-500"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-5 mr-5">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Sponsors</div>
                            <div class="h5 mb-0 px-4 font-weight-bold text-gray-800">{{$sponsors->total()}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-dark-500"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       
    </div>


    <div class="row">
         <!-- Pending Requests Card Example -->
         <div class="col-xl-3 col-md-6 mb-5 mr-5">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Available Vacancies</div>
                            <div class="h5 mb-0 px-4 font-weight-bold text-gray-800">{{$vacancies->total()}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-file-contract fa-2x text-dark-500"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Booked Tickets -->
        <div class="col-xl-3 col-md-6 mb-5 mr-5">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Tickets Booked</div>
                            <div class="h5 mb-0 px-4 font-weight-bold text-gray-800">{{$tickets->total()}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-ticket-alt fa-2x text-dark-500"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Visitors -->
        <div class="col-xl-3 col-md-6 mb-5 mr-5">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Registered Visitors</div>
                            <div class="h5 mb-0 px-4 font-weight-bold text-gray-800">{{$visitors->total()}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-address-card fa-2x text-dark-500"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        


      


        <div class="row">
        
        </div>
         <!-- Total Job Applications -->
         <div class="col-xl-3 col-md-6 mb-5 mr-5">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Job Applications</div>
                                <div class="h5 mb-0 px-4 font-weight-bold text-gray-800">{{$applications->total()}}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-file-signature fa-2x text-dark-500"></i>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
         <!-- Total Sponsor Registration -->
         <div class="col-xl-3 col-md-6 mb-5 mr-5">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Employees</div>
                                <div class="h5 mb-0 px-4 font-weight-bold text-gray-800">{{$employees->total()}}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-circle-notch fa-2x text-dark-500"></i>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

            <!-- Total System Users -->
            <div class="col-xl-3 col-md-6 mb-5 mr-5">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total System Users</div>
                                <div class="h5 mb-0 px-4 font-weight-bold text-gray-800">{{$accounts->total()}}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users-cog fa-2x text-dark-500"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       
    </div>

@endsection

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin Page</title>
  <link rel="shortcut icon" href="/image/favicon.png">

  <!-- Custom fonts for this template-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="/CSS/sb-admin-2.min.css" rel="stylesheet">
  <link href="/CSS/custom.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body id="page-top" style=" font-family: 'Times New Romen';">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary pt-3 sidebar sidebar-primary accordion" id="accordionSidebar" style="background-image:linear-gradient(45deg,black,black ,black);">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex mb-4 align-items-center justify-content-center" href="{{route('admindashboard')}}">
        <!-- <div class="sidebar-brand-icon rotate-n-15"> -->
        <div class="sidebar-brand-icon">
          <!-- <i class="fas fa-laugh-wink"></i> -->
          <img src="/image/logo.jfif" alt="" style="width: 50px; border-radius: 100%">
        </div>
       
           <b class="text-warning fs-2">Z</b> <b class="text-success fs-2">O</b> <b class="text-danger fs-2">O</b>
          
        <div class="sidebar-brand-text mx-3">Admin</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="{{route('admindashboard')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Animal Heading -->
      <div class="sidebar-heading text-warning">
        Animals
      </div>

      <!-- Animal collapse menu-->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAnimal" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-asterisk"></i>
          <span>Animals</span>
        </a>
        <div id="collapseAnimal" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded" style="background-image:linear-gradient(to right,white,gray);">

          <a id="navbarDropdownMenuLink" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link font-weight-bold text-dark px-lg-3 py-lg-4 dropdown-toggle">Add Animals</a>
              <div aria-labelledby="navbarDropdownMenuLink" class="dropdown-menu mt-0" style="background-image:linear-gradient(to right,white,blue);">
              
              <a href="{{route('mammal')}}" class="dropdown-item small">Mammals</a>
              <a href="{{route('bird')}}" class="dropdown-item small">Birds</a>
              <a href="{{route('fish')}}" class="dropdown-item small">Fish</a>
              <a href="{{route('reptile')}}" class="dropdown-item small">Reptiles</a>
              <a href="{{route('amphibian')}}" class="dropdown-item small">Amphibians</a>
             
              </div>
              <a class="collapse-item" href="{{route('showanimal')}}">View Animals</a>
             
              <a class="collapse-item" href="{{route('showsetweekanimal')}}">Set Animal of the Week</a>
           
              <a class="collapse-item" href="view_animal_watchlist">View Animals in Watchlist</a>
             

          </div>
        </div>
      </li>



        <!-- Location collapse menu-->
        <!-- <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLocation">
            <i class="fas fa-fw fa-location-arrow"></i>
            <span>Locations</span>
          </a>
          <div id="collapseLocation" class="collapse" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="save_location">Add Location</a>
              <a class="collapse-item" href="view_locations">View Locations</a>
              <a class="collapse-item" href="view_locations?archived=true">View Archived Locations</a>
            </div>
          </div>
        </li> -->

        <!-- Classification Heading -->
        <!-- <div class="sidebar-heading text-warning">
          Classification
        </div> -->

        <!-- Classification collapse menu-->
        <!-- <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseClassification">
            <i class="fas fa-fw fa-th"></i>
            <span>Classifications</span>
          </a>
          <div id="collapseClassification" class="collapse" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="{{route('adminclassification')}}">Add Classification</a>
              <a class="collapse-item" href="{{route('showclassification')}}">View Classification</a>
             
            </div>
          </div>
        </li> -->
       <!-- Visitor -->
       <div class="sidebar-heading text-warning">
          Visitor
        </div>

        <!-- Vacancy collapse menu-->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseVisitor">
            <i class="fas fa-fw fa-address-card"></i>
            <span>Visitors</span>
          </a>
          <div id="collapseVisitor" class="collapse" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded"style="background-image:linear-gradient(to right,white,gray);">
              <a class="collapse-item" href="{{route('viewvisitor')}}">View Visitor Accounts</a>
              <a class="collapse-item" href="">View Archived Visitors</a>
            </div>
          </div>
        </li>

      <!-- visitors -->

      <!-- Tickets -->
      <div class="sidebar-heading text-warning">
          Ticket
        </div>

        <!-- Vacancy collapse menu-->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTicket">
            <i class="fas fa-fw fa-ticket-alt"></i>
            <span>Tickets</span>
          </a>
          <div id="collapseTicket" class="collapse" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded" style="background-image:linear-gradient(to right,white,gray);">
              <a class="collapse-item" href="{{route('viewticket')}}">View Booked Tickets</a>
            </div>
          </div>
        </li>

        <!-- Tickets -->

        <div class="sidebar-heading text-warning">
          Sponsorship Scheme
        </div>

        <!-- Vacancy collapse menu-->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSponsor">
            <i class="fas fa-fw fa-list-alt"></i>
            <span>Sponsorship Scheme</span>
          </a>
          <div id="collapseSponsor" class="collapse" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded" style="background-image:linear-gradient(to right,white,gray);">
              <a class="collapse-item" href="{{route('viewsponsor')}}">View Sponsor Registrations</a>
              <a class="collapse-item" href="{{route('viewsponsoranimal')}}">Sponsor Animal Requests</a>
            </div>
          </div>
        </li>

         <!-- gallery -->
         <div class="sidebar-heading text-warning">
          Gallery
        </div>

        <!-- Vacancy collapse menu-->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseGallery">
            <i class="fas fa-fw fa-images"></i>
            <span>Gallery</span>
          </a>
          <div id="collapseGallery" class="collapse" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded" style="background-image:linear-gradient(to right,white,gray);">
              <a class="collapse-item" href="{{route('showgallery')}}">Update Gallery Content</a>
            </div>
          </div>
        </li>


        <!-- Vacancy Heading -->
        <div class="sidebar-heading text-warning">
          Vacancy
        </div>

        <!-- Vacancy collapse menu-->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseVacancy">
            <i class="fas fa-fw fa-bullhorn"></i>
            <span>Vacancies</span>
          </a>
          <div id="collapseVacancy" class="collapse" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded" style="background-image:linear-gradient(to right,white,gray);">
              <a class="collapse-item" href="{{route('regvacancy')}}">Add Vacancy</a>
              <a class="collapse-item" href="{{route('activevacancy')}}">View Active Vacancies</a>
              <a class="collapse-item" href="{{route('viewapplication')}}">View Applications</a>
            </div>
          </div>
        </li>

        <!-- Employee -->
        <div class="sidebar-heading text-warning">
          Employee
        </div>

        <!-- Vacancy collapse menu-->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEmployee">
            <i class="fas fa-fw fa-users"></i>
            <span>Employees</span>
          </a>
          <div id="collapseEmployee" class="collapse" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded" style="background-image:linear-gradient(to right,white,gray);">
              <a class="collapse-item" href="{{route('viewemployee')}}">View Employees</a>
              <!-- <a class="collapse-item" href="view_employees?archived=true">View Archived Employees</a> -->
            </div>
          </div>
        </li>

       

        <!-- Feedback -->
        <!-- <div class="sidebar-heading">
          Feedback
        </div> -->

        <!-- Vacancy collapse menu-->
        <!-- <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFeedback">
            <i class="fas fa-fw fa-comment-alt"></i>
            <span>Feedbacks</span>
          </a>
          <div id="collapseFeedback" class="collapse" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="view_feedback">View Unreviewed Feedback</a>
              <a class="collapse-item" href="view_feedback?reviewed=true">View Reviewed Feedback</a>
            </div>
          </div>
        </li> -->

       
        
       
        <!-- Admin, Manager, Zookeeper -->
        <div class="sidebar-heading text-warning">
          Admin
        </div>

        <!-- Vacancy collapse menu-->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAdmin">
            <i class="fas fa-fw fa-users-cog"></i>
            <span>Accounts</span>
          </a>
          <div id="collapseAdmin" class="collapse" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded" style="background-image:linear-gradient(to right,white,gray);">
              <a class="collapse-item" href="{{route('addadmin')}}">Add Account</a>
              <a class="collapse-item" href="{{route('viewadmin')}}">View Admins</a>
              <!-- <a class="collapse-item" href="view_accounts?type=manager">View Managers</a>
              <a class="collapse-item" href="view_accounts?type=zookeeper">View Zookeepers</a> -->
             
            </div>
          </div>
        </li>

        <!-- Events -->


        <!-- Vacancy collapse menu-->
        <!-- <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEvent">
            <i class="fas fa-fw fa-calendar-alt"></i>
            <span>Events</span>
          </a>
          <div id="collapseEvent" class="collapse" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="save_event">Add Event</a>
              <a class="collapse-item" href="view_events">View Events</a>
              <a class="collapse-item" href="view_events?archived=true">View Archived Events</a>

            </div>
        </li> -->


      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
      
        <!-- Topbar -->
        <nav class=" navbar-expand navbar-light bg-white topbar mb-4 static-top shadow" >
       
         
          

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
        
          
         
       
         
          <!-- Topbar Search -->
         
         
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto sticky-top" style="float:right;">

            <!-- Nav Item - Alerts -->
           
            <!-- Nav Item - Messages -->
           
            <div id="google_translate_element" class="mt-3">
            </div>
            <div class="topbar-divider d-none d-sm-block">
            
            </div>
           
            
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?php
                       $a = \App\Models\Admin::all()->last();
                       $a_name = $a['admin_name'];

                    ?>
                 <h3 class="text-dark">Welcome &nbsp; <strong class="mr-2 d-none d-lg-inline text-danger">{{$a_name}}</strong></h3>   
            
                <img class="img-profile rounded-circle " src="/images/profile.jpg">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-bottom shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
@yield('content')
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>&copy; <?php echo date('Y') ?> - Zoo Management System</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-danger" href="{{route('logout')}}">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->

</body>
<script type="text/javascript">
  function googleTranslateElementInit() {
    new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
  }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
 <script src="/jquery/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <!-- <script src="../vendor/bootstrap/js/bootstrap.js"></script> -->

  <!-- Core plugin JavaScript-->
  <script src="/jquery/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="/JS/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="/JS/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="/JS/bootstrap.bundle.js"></script>
  <script src="/JS/demo/chart-area-demo.js"></script>
  <script src="/JS/demo/chart-pie-demo.js"></script>
</html>

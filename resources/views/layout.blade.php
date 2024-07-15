
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Home</title>
  <meta name="google-translate-customization" content="9f841e7780177523-3214ceb76f765f38-gc38c6fe6f9d06436-c"></meta>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="all,follow">

  <!-- Bootstrap CSS-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Google fonts-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700"> -->
  <!-- Icon fonts-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Custom stylesheet - for your changes-->
  <link rel="stylesheet" href="/CSS/custom.css">
  <link rel="stylesheet" href="/CSS/style.green.css">
  {{-- <link rel="stylesheet" href="/CSS/pe-icon-7.stroke.css"> --}}
  <link rel="stylesheet" href="/CSS/leaflet.css">
  <link rel="stylesheet" href="/CSS/lightbox.min.css">
  <link rel="shortcut icon" href="/image/favicon.png">


  <!-- Favicon-->

  <!-- Tweaks for older IEs-->



</head>

<body style=" font-family: 'Times New Romen';">
  <!-- navbar-->
  <header class="header sticky-top">
    <nav class="navbar navbar-expand-lg bg-header navbar-dark py-lg-0" style="background-color: black;">
      <div class="container-fluid">
        <a href="index" class="navbar-brand font-weight-bold p-0 " style=" text-decoration:none;">
          <div class="d-flex align-items-center">
            <div>
              <img src="/image/logo.jfif" width="60" style="border-radius: 100%" />
            </div>
           
           <b class="text-warning fs-2">Z</b> <b class="text-success fs-2">O</b> <b class="text-danger fs-2">O</b>
           <div class=" ml-3">
            </div>
          </div>
        </a>
        <button type="button" id="navar-toggle-button" data-toggle="collapse" data-target="#navbarSupportedContent" class="navbar-toggler navbar-toggler-right small"><span class="text-uppercase text-white mr-2">Menu</span><i class="fas fa-bars"></i></button>
        <div id="navbarSupportedContent" class="collapse navbar-collapse">
          <ul class="navbar-nav ml-auto d-lg-flex align-items-lg-center  ">
            <li class="nav-item"><a href="index" class="nav-link font-weight-bold text-white px-lg-3 py-lg-4 fs-5">Home </a>
            </li>
            <li class="nav-item"><a href="{{route('sgallery')}}" class="nav-link font-weight-bold text-white fs-5  px-lg-3 py-lg-4">Gallery </a>
            </li>
            <li class="nav-item dropdown">
              <a id="navbarDropdownMenuLink" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link fs-5 font-weight-bold text-white px-lg-3 py-lg-4 dropdown-toggle">Animals</a>
              <div aria-labelledby="navbarDropdownMenuLink" class="dropdown-menu mt-0 " style="background-image:linear-gradient(to right,white ,gray);">
              
              <a href="{{route('showmammal')}}" class="dropdown-item small text-uppercase">Mammals</a>
              <a href="{{route('showbird')}}" class="dropdown-item small text-uppercase">Birds</a>
              <a href="{{route('showfish')}}" class="dropdown-item small text-uppercase">Fish</a>
              <a href="{{route('showreptile')}}" class="dropdown-item small text-uppercase">Reptiles</a>
              <a href="{{route('showamphibian')}}" class="dropdown-item small text-uppercase">Amphibians</a>
             
              </div>
            </li>
            <!-- show non sponsor only links -->


              <li class="nav-item"><a href="{{route('bookticket')}}" class="nav-link font-weight-bold fs-5 text-white px-lg-3 py-lg-4">Book Tickets </a>
              </li>

              <li class="nav-item"><a href="{{route('showvacancy')}}" class="nav-link fs-5 font-weight-bold text-white px-lg-3 py-lg-4">Vacancies </a>
              </li>
              <!-- <li class="nav-item"><a href="events" class="nav-link font-weight-bold text-dark px-lg-3 py-lg-4">Events </a>
              </li> -->
              <li class="nav-item"><a href="{{route('contact')}}" class="nav-link fs-5 font-weight-bold text-white px-lg-3 py-lg-4">Contact Us </a>
              </li>

              


              <li class="nav-item dropdown">
                <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link fs-5 font-weight-bold text-white px-lg-3 py-lg-4 dropdown-toggle">Register</a>
                <div class="dropdown-menu mt-0" style="background-image:linear-gradient(to bottom,white ,gray);">
                  <a href="{{route('registervisitor')}}" class="dropdown-item small text-uppercase text-dark">Visitor Registration</a>
                  <a href="{{route('registersponsor')}}" class="dropdown-item small text-uppercase text-dark">Sponsor Registration</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link fs-5 font-weight-bold text-white px-lg-3 py-lg-4 dropdown-toggle">Login</a>
                <div class="dropdown-menu mt-0" style="background-image:linear-gradient(to right,white ,gray);">
                  <a href="{{route('loginvisitor')}}" class="dropdown-item small text-uppercase text-dark">Visitor</a>
                  <a href="{{route('loginsponsor')}}" class="dropdown-item small text-uppercase text-dark">Sponsor</a>
                </div>
              </li>
              <li class="nav-item mt-4 mt-lg-0">
                <a type="button" href="{{route('adminlogin')}}" class="btn btn-outline-secondary nav-btn btn-sm navbar-login-button text-white"> <i class="fas fa-sign-out-alt mr-2"></i>Admin </a>
              </li>

               

            

          </ul>
         
        </div>
      </div>
      <div id="google_translate_element">
       
      </div>
    </nav>

  </header>

@yield('content')

  <footer style="background: #eee;" class="pt-5">
    <!-- before, background was #eee  -->
    <div class="container py-5">
      <div class="row">
        <div class="col-lg-8 col-md-6 mb-4">
          <h5 class="lined lined-dark color-header mb-3 color-header">About Zoo Management System</h5>
          <p class="text-muted text-small">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
          <p class="text-muted text-small">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <h5 class="lined lined-dark mb-3 color-header">Our Location</h5>
          <h6>Zoo Management System</h6>
          <p class="text-muted mb-0 text-small">13/25 Mya yatanar street</p>
          <p class="text-muted mb-0 text-small">yangon</p>
          <p class="text-muted mb-4 text-small">Mobile + 95933355577 </p>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <h5 class="lined lined-dark mb-3 color-header">Popular Animals</h5>
          <ul class="list-unstyled">
            <li><a href="#" class="footer-link text-small">Mammals</a></li>
            <li><a href="#" class="footer-link text-small">Reptiles & Amphibians</a></li>
            <li><a href="#" class="footer-link text-small">Birds</a></li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <h5 class="lined lined-dark mb-3 color-header">Connect with us</h5>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="#" class="social-link facebook-logo"><i class="fab fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link googleplus-logo"><i class="fab fa-google-plus-g"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link twitter-logo"><i class="fab fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link mail-logo"><i class="fas fa-envelope"></i></a></li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-6">
          <h5 class="lined lined-dark mb-3 color-header">Contact Us</h5>
          <p class="text-muted mb-4 text-small">You can contact us using the form in Contact Us page.
          </p>
        </div>
      </div>
    </div>
    <div class="bg-header py-2 text-center text-white" style="background-color: black;">
      <p class="p-0 m-0">&copy; <?php echo date('Y') ?> - Zoo Management System </p>
    </div>
  </footer>
  <!-- JavaScript files-->
  <script src="/jquery/jquery.min.js"></script>
  <script src="/JS/lightbox.min.js"></script>
  <script src="/JS/leaflet.js"></script>
  <script src="/JS/front.js"></script>
  <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->



</body>
<script type="text/javascript">
  function googleTranslateElementInit() {
    new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
  }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script src="/JS/bootstrap.bundle.js"></script>
<script src="/JS/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</html>

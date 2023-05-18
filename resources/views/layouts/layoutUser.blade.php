<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="{{ url('images/favicon.png') }}" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Bookstore</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.css') }}" />
  <!-- font awesome style -->
  <link href="{{ url('css/font-awesome.min.css') }}" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="{{ url('css/style.css') }}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{ url('css/responsive.css') }}" rel="stylesheet" />

   <!-- JavaScript Bootstrap -->
   <script src="{{ url('js/bootstrap.js') }}"></script>
   <script src="{{ url('js/bootstrap.bundle.js') }}"></script>

</head>

<body>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="welcome.blade.php">
            <span>
              BookStore.id
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link pl-lg-0" href="{{ route('welcome') }}">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('about') }}"> About</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="{{ route('categories') }}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Categories
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('agama') }}">Agama</a>
                  <a class="dropdown-item" href="{{ route('sains') }}">Sains</a>
                  <a class="dropdown-item" href="{{ route('bisnis_ekonomi') }}">Bisnis & Ekonomi</a>
                  <a class="dropdown-item" href="{{ route('komik') }}">Komik</a>
                  <a class="dropdown-item" href="{{ route('komputer_teknologi') }}">Komputer & Teknologi</a>
                  <a class="dropdown-item" href="{{ route('pengembangan_diri') }}">Pengembangan Diri</a>
                </div>
              </li>
              @auth
    @if (Auth::user()->role == 'user')
        <li class="nav-item">
            <a class="nav-link" href="{{ route('viewcart')}}"> View Cart </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('contact')}}">Contact Us</a>
        </li>
    @endif
    <li class="nav-item">
        <form action="{{ url('/logout') }}" method="post">
            @csrf
            <button type="submit" class="d-none"></button>
            <a href="#" class="nav-link" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
        </form>
    </li>
@else
    <li class="nav-item">
        <a class="nav-link" href="{{ route('login')}}"> Login </a>
    </li>
    @if (Route::has('register'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register')}}"> Register</a>
        </li>
    @endif
@endauth



            </ul>
            <form class="search_form">
              <input type="text" class="form-control" placeholder="Search here..." style="width: 300px;">
              <button class="" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </form>
          </div>

    </header>
    <!-- end header section -->

    @yield('content')

    <!-- footer starts  -->
  <!-- info section -->

  <section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 info-col">
          <div class="info_detail">
            <h4>
              About Us
            </h4>
            <p>
              "Discover your next great read"
            </p>
            <div class="info_social">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 info-col">
          <div class="info_contact">
            <h4>
              Address
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +62 81276318684
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  cinfas@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 info-col">
          <div class="info_contact">
            <h4>
              Newsletter
            </h4>
            <form action="#">
              <input type="text" placeholder="Enter email" />
              <button type="submit">
                Subscribe
              </button>
            </form>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 info-col">
          <div class="map_container">
            <div class="map">
              <div id="googleMap"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://github.com/marlinaa31/OnlineBookStore">Cinfas</a>
      </p>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="{{ url('js/jquery-3.4.1.min.js') }}"></script>
  <!-- bootstrap js -->
  <script src="{{ url('js/bootstrap.js') }}"></script>
  <!-- custom js -->
  <script src="{{ url('js/custom.js') }}"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>

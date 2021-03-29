<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Tracer.com')</title>
    
    <!-- Links Here -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Responsive.css') }}">

  </head>
  <body>
    <div class="top_navbar p-0 m-0">
      <div class="left-side p-0 m-0">
        <span class="fa fa-indent"></span>
      </div>
      <div class="right-side header pt-1 px-3">
        <!-- Right Side Navbar Here -->
        <header class="nav-header">
          <div class="d-flex justify-content-between align-items-center">
          <div class="logo">
              <h1 class="text-capitalize font-weight-bold title">Tracer</h1>
          </div>
          <div class="main-menubar d-flex align-items-center">
              <nav class="hide">
                  <a href="#">Home</a>
                  <a href="#">Members</a>
                  <a href="#">About Us</a>
                  <a href="#">Contact Us</a>
              </nav>
              <div class="menu-bar"><span class="lnr lnr-menu"></span></div>
          </div>
          </div>
        </header> 
         
        <div class="w-50 mr-auto ml-auto animated bounceInDown">
          @if(session()->has('message'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <span class="mb-0"> <strong>Success: </strong>{{ session()->get('message') }} </span>
              </div>
          @endif
          @if(session()->has('error'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <span class="mb-0"> <strong>Sorry: </strong>{{ session()->get('error') }} </span>
              </div>
          @endif
        </div>
      </div>
    </div> 

    <!-- Left Side Vertical navbar Here --> 
    <div class="sidebar-nav">
      <ul>
        <li><a href="#" class="active">
          <span class="fa fa-home icon" aria-hidden="true"></span>
        </a></li>
        <li><a href="#">
          <span class="fa fa-lastfm icon" aria-hidden="true"></span>
        </a></li>
        <li><a href="#">
          <span class="fa fa-user icon" aria-hidden="true"></span>
        </a></li>
        <li><a href="#">
          <span class="fa fa-chain icon" aria-hidden="true"></span>
        </a></li>
        <li><a href="#">
          <span class="fa fa-question-circle icon" aria-hidden="true"></span>
        </a></li>
      </ul>
    </div>

    <div class="exit_button">
      <a href="#"><span class="fa fa-sign-out" aria-hidden="true"></span></a>
    </div>

    <!-- The left side Menu part -->
    <div class="Menu-part p-0 m-0">
      <nav class="navbar p-0 m-0">
      <div class="img-frame mb-5 text-center">
        <img src="{{ asset('image/profile.jpeg') }}" class="img-fluid rounded-circle mb-2">
        <span class="text-black font-weight-bold mr-1">Zak</span><span class="text-white font-weight-bold">Rezai</span>   
      </div>
      <h5 class="text-white mt-4 mb-3 ml-auto mr-auto font-weight-bold"><span class="text-black">Shop</span> Menu</h5>
      <ul class="navbar-nav flex-column m-0" style="width: 100%">
        <li class="nav-item">
          <a class="nav-link p-0" href="/student_table"><button type="button" class="m-0">Student List</button></a>
        </li>
        <li class="nav-item">  
          <a class="nav-link p-0" href="#"><button type="button" class="">Member List</button></a>
        </li>
        <li class="nav-item">  
          <a class="nav-link p-0" href="#"><button type="button" class="">Teacher List</button></a>
        </li>
        <li class="nav-item">
          <a class="nav-link p-0" href="#"><button type="button" class="">Branch List</button></a>
        </li>
        <li class="nav-item">
          <a class="nav-link p-0" href="#"><button type="button" class="">Contact Us</button></a>
        </li>
        <li class="nav-item">
          <a class="nav-link p-0" href="#"><button type="button" class="">About Us</button></a>
        </li>
      </ul>
      </nav>
    </div>

    <!-- The main content part -->
    <div class="main-content">
      @yield('content')
    </div>
    

    <!-- Script Links Here --> 
    <script type="text/javascript" src="{{ asset('js/jquery3.4.0.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/myScript.js') }}"></script>
  </body>
</html>

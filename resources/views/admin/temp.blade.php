<!--

=========================================================
* Argon Dashboard - v1.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2019 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Tito's Superior Collection
  </title>
  <!-- Favicon -->
  <link href="./img/logo.jpg" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="./assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="./assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="./assets/css/argon-dashboard.css?v=1.1.0" rel="stylesheet" />
</head>

<body class="">
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="{{ route('home') }}">
        <img src="./img/logo.jpg" class="navbar-brand-img" alt="...">
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
          <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ni ni-bell-55"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="{{ route('home') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="./img/logo.jpg">
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome!</h6>
            </div>
            <a href="{{ route('profile') }}" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              <span>My profile</span>
            </a>
            <a href="#" class="dropdown-item">
              <i class="ni ni-calendar-grid-58"></i>
              <span>Activity</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="{{ route('logout') }}" class="dropdown-item">
              <i class="ni ni-user-run"></i>
              <span>Logout</span>
            </a>
          </div>
        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="{{ route('home') }}" class="display-4">
                Tito's Dashboard
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Form -->
        <form class="mt-4 mb-3 d-md-none">
          <div class="input-group input-group-rounded input-group-merge">
            <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fa fa-search"></span>
              </div>
            </div>
          </div>
        </form>
        <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item"  class="active">
                    <a class=" nav-link active " href="{{ route('dash') }}"> <i class="ni ni-tv-2 text-primary"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    {{-- <a class=" nav-link" href="{{ route('notification') }}"> <i class="ni ni-bell-55 text-primary"></i> Notification
                    </a> --}}
                    <a class=" nav-link" href="#notificationD" data-toggle="collapse" aria-expanded="false" aria-controls="notificationD"> 
                        <i class="ni ni-bell-55 text-primary"></i>  Notification
                    </a>
                    <div class="collapse" id="notificationD">
                        <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('notificationO') }}"><i class="ni ni-cart text-primary"></i> Orders </a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('notificationC') }}"><i class="ni ni-satisfied text-primary"></i> Comments </a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('notificationR') }}"><i class="ni ni-badge text-primary"></i> Reviews </a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('notificationS') }}"><i class="ni ni-circle-08 text-primary"></i> Signups </a></li>
                        </ul>
                    </div>
                </li>
                @if (Auth::user()->role != 'contributor')
                  <li class="nav-item">
                      <a class=" nav-link" href="#productD" data-toggle="collapse" aria-expanded="false" aria-controls="productD"> 
                          <i class="ni ni-briefcase-24 text-primary"></i>  Product
                      </a>
                      <div class="collapse" id="productD">
                          <ul class="nav flex-column sub-menu">
                          <li class="nav-item"> <a class="nav-link" href="{{ route('adminproduct.index') }}"><i class="ni ni-collection text-primary"></i> In Stock </a></li>
                          <li class="nav-item"> <a class="nav-link" href="{{ route('createProduct') }}"><i class="ni ni-cloud-upload-96 text-primary"></i> Upload Product </a></li>
                          </ul>
                      </div>
                  </li>
                @endif


                @if ((Auth::user()->role == 'admin') || (Auth::user()->role == 'editor'))
                  <li class="nav-item">
                      <a class=" nav-link" href="#webPages" data-toggle="collapse" aria-expanded="false" aria-controls="webPages"> 
                          <i class="ni ni-paper-diploma text-primary"></i>  Website Pages
                      </a>
                      <div class="collapse" id="webPages">
                          <ul class="nav flex-column sub-menu">
                          <li class="nav-item"> <a class="nav-link" href="{{ route('webhome') }}"> Home Page </a></li>
                          <li class="nav-item"> <a class="nav-link" href="{{ route('webcategory') }}"> Product Category Page </a></li>
                          <li class="nav-item"> <a class="nav-link" href="{{ route('webdetails') }}"> Product Details Page </a></li>
                          <li class="nav-item"> <a class="nav-link" href="{{ route('webcart') }}"> Cart Page </a></li>
                          <li class="nav-item"> <a class="nav-link" href="{{ route('webcheckout') }}"> Checkout Page </a></li>
                          </ul>
                      </div>
                  </li>
                @endif
                @if ((Auth::user()->role == 'admin'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('role.index') }}">
                      <i class="ni ni-bullet-list-67 text-red"></i> Roles
                      </a>
                  </li>                                        
                @endif


                <li class="nav-item">
                    <a class="nav-link " href="{{ route('profile') }}">
                    <i class="ni ni-single-02 text-yellow"></i> User profile
                    </a>
                </li>
            </ul>


      </div>
    </div>
  </nav>
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="{{ route('dash') }}">Dashboard</a>
        <!-- Form -->
        <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
          <div class="form-group mb-0">
            <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
              </div>
              <input class="form-control" placeholder="Search" type="text">
            </div>
          </div>
        </form>
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="./img/logo.jpg">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold">{{ Auth::user()->firstName }}</span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              <a href="#" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
              </a>
              <a href="#" class="dropdown-item">
                <i class="ni ni-calendar-grid-58"></i>
                <span>Activity</span>
              </a>
              <div class="dropdown-divider"></div>
              <a  href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
            </div>
            <form id="logout-form" action="{{ route('adminlogout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
            </form>
          </li>
        </ul>
      </div>
    </nav>
    <!-- End Navbar -->





    @yield('content')




  </div>


</body>
  <!--   Core   -->
  <script src="./assets/js/plugins/jquery/dist/jquery.min.js"></script>
  <script src="./assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--   Optional JS   -->
  <script src="./assets/js/plugins/chart.js/dist/Chart.min.js"></script>
  <script src="./assets/js/plugins/chart.js/dist/Chart.extension.js"></script>
  <!--   Argon JS   -->
  <script src="./assets/js/argon-dashboard.min.js?v=1.1.0"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>



  @yield('script')
</html>
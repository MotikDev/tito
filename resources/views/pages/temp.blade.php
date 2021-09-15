<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">


        <title>(Dynamic Content) | Tito's Signature Collections</title>
        <link rel="alternate" hreflang="en" href="This page link" />

        <meta name="description" content="">
        <meta name="keyword" content="">
        <meta name="author" content=""/>
        <meta name="generator" content="Brand Name"/>
        <meta name="copyright" content=""/>
        <meta name="application-name" content=""/>
        <link rel="canonical" href="The link of this page" />
        <!-- for Facebook -->
        <meta property="fb:pages" content="Get one generated">
        <meta property="fb:app_id" content="Get one generated">
        <meta property="og:locale" content="en_NG" />
        <meta property="og:site_name" content="This brand name OR details">
        <meta property="og:title" content="title of this page"/>
        <meta property="og:type" content="Think of these as categories, hotel, blog, article etc. i.e. Tito:cloth"/>
        <meta property="article:publisher" content="https://www.facebook.com/facebookPageName/" />
        <meta property="article:section" content="Generate a category" />
        <meta property="article:published_time" content="Generate from database" />
        <meta property="article:modified_time" content="Generate from database" />
        <meta property="og:updated_time" content="Generate from database" />
        <meta property="og:image" content="major image of this page"/>
        <meta property="og:image:secure_url" content="Same as above" />
        <meta property="og:image:width" content="Get one generated i.e. 940" />
        <meta property="og:image:height" content="Get one generated i.e. 470" />
        <meta property="og:url" content="this url"/>        
        <meta property="og:description" content="description of this page"/>        
        
        <!-- for Twitter -->
        <meta name="twitter:card" content="summary"/>
        <meta name="twitter:url" content="https://twitter.com/replaceWithTwitterHandle"/>
        <meta name="twitter:domain" content="The home page of this website">
        <meta name="twitter:site" content="twitter handle"/>
        <meta name="twitter:title" content="title of this page"/>  
        <meta name="twitter:description" content="description of this page WITH HASH TAGS"/>
        <meta name="twitter:image" content="Major image of this web page"/>
        <meta name="twitter:creator" content="Handle of the author" />







        <link rel="icon" href="{{ asset('img/logo.jpg') }}" type="image/gif" sizes="16x16">
    
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    
        <!-- //for bootstrap working -->
        <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,300,300i,400,400i,500,500i,600,600i,700,800" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700" rel="stylesheet">

        {{-- -FONT AWESOME FROM TORRENT --}}
        <link href="{{ asset('img/css/font-awesome.css') }}" rel="stylesheet">



        <style>
          .navbar {
            background-color: white !important;
            color: black;
          }

          .myColor {
            background-color: #f58a42;
          color: white;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          }

          .fa-shopping-cart.fa-2x {
            color: #6c757d;
          }

          .navbar-nav .nav-item.active .nav-link, .fa-shopping-cart.fa-2x:hover {
            color: #f58a42;
          }

          .navbar .dropdown-divider {
            margin: 0;
          }

          .navbar .dropdown-menu {
            padding-bottom: 0%;
            padding-top: 0%;
          }
          .navbar .dropdown-menu .dropdown-item {
            padding-top: 10px;
            padding-bottom: 10px;
            color: #6c757d !important;
          }

          .navbar .dropdown-menu .dropdown-item:hover {
            background-color: #f58a42;
            color: white !important; 
          }



          @media (max-width: 768px) {

            #searchBox {
              border-radius: 10px;
              background-color: lightgray;
            }

            #logo {
              width: 50px;
            }

            #carouselExampleIndicators {
            z-index:  10px;
            position: relative;
            margin-top: -15px;
            }

            #newProduct {
              height: 80vh;
            }

            #newProductBottom {
            position:absolute; 
            bottom:7%; 
            margin-left: 30%;
            }

            #secondNavbar {
              position: fixed;
              z-index: 100;
              margin-top: -5%;
              width: 100%;
            }

            #subscribe {
              margin-top: -5.5%;
            }
          }


          @media (min-width: 768px)
          {
            .navbar .dropdown:hover .dropdown-menu {
              display: block;
              border-color: transparent;
              animation: slideUp 0.3s linear;
            }

            #newProductBottom {
            position:absolute; 
            bottom:7%; 
            margin-left: 35%;
            }

          }



          .input-group-prepend, .input-group-prepend .input-group-text {
            background-color: transparent;
            border-color: transparent;
            color: #6c757d;
            z-index: 100px;
            position: relative;
          }

          @keyframes slideUp {
            0%{top: 140%}
            100%{top: 100%}
          }

          .myRightNav li a {
            color: #000000;
          }

          .myRightNav li a:hover {
            color: #f58a42;
            text-decoration: none;
          }

          .navbar#secondNavbar {
            background-color: #9c757d !important; 
          }

          .navbar#secondNavbar .navbar-nav li a {
            color: white; 
          }

          .navbar#secondNavbar .navbar-nav li.nav-item.active a, .myDefault {
            color: #f58a42; 
          }

          .btn-button {
            background-color: #f58a42;

          }

          .btn-button:hover {
            background-color: transparent;
            color: #f58a42 !important;
          }

          .myCaption {
            font-weight: bold;
          }

          .boldHead {
            font-weight: bolder;
            color: #000000 !important;
            border-bottom: 1px solid lightgray;
          }

          #mensC {
            background-image: url({{ asset("storage/".$home[10]->content."") }});
            background-size: cover;
          }

          #newProduct {
            background-image: url({{ asset("storage/".$home[15]->content."") }});
            background-repeat: no-repeat;
            background-size: 100% 100%;
          }

          .whatsapp {
            background-color: green;
            color: white;
          }

        </style>

        @yield('style')

    </head>
    <body>

      <!-- Major Color on the website #f58a42         second navbar background color option two(2) #ba366b  -->


        <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top shadow-sm">
          <a class="navbar-brand" href="{{ route('home') }}">
            <span> <img src="{{ asset('img/logo.jpg') }}" alt="Tito's Collections Logo" class="img-fluid" height="50px" width="70px" id="logo"> </span>
          </a>
          <a href="{{ route('cart') }}" class="navbar-nav d-block d-lg-none">
            <span>
              <span style="position:absolute; z-index:auto; margin-left:12px" class="badge badge-warning" id="cartSm">
                @if (session("cartItems.id"))
                  {{ count(session("cartItems.id")) }}                    
                @endif
              </span> <i class="fal fa-shopping-cart fa-2x"></i>  </span>
          </a>
          <button class="navbar-toggler order-first" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>        
          <div class="collapse navbar-collapse show" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <form class="form-inline" role="form" method="GET" action="{{ route('search') }}">
                  <div class="form-group">
                      <div class="input-group">       
                        <input type="text" size="80px" id="searchBox" name="searchBox" class="form-control shadow-sm" placeholder="Search for products..." aria-describedby="basic-addon2">
                        <div class="input-group-prepend d-md-none ml-n5">
                          <div class="input-group-text"><i class="fal fa-search"></i></div>
                        </div>
                        <button type="submit" class="btn btn-default myColor d-none d-lg-block"> <i class="fal fa-search"></i> </button> 
                      </div>                   
                  </div>
                </form>
              </li>
            </ul>
            <ul class="navbar-nav ml-auto myRightNav order-last">
              <li class="d-none d-lg-block">
                <a href="#"> 
                  <span>
                     
                    @if (Auth::check())

                    <div class="dropdown">
                        <a href="#"><i class="fal fa-user"></i> &nbsp; {{ Auth::user()->firstName }}</a>
                        <div class="dropdown-menu">
                          <a class="dropdown-link shadow px-5 py-3" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            Logout
                          </a>
                        </div>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                    @else
                      <a href="{{ route('ulogin') }}">
                        <i class="fal fa-user"></i> &nbsp; Login/Register
                      </a>
                    @endif
                     
                  </span> 
                </a>
              </li>
              &nbsp; &nbsp; &nbsp; &nbsp; 
              <li class="d-none d-lg-block">
                <a href="{{ route('cart') }}"> 
                  <span>
                    <span style="position:absolute; z-index:auto; margin-left:10px" class="badge badge-warning" id="cartMd">
                      @if (session("cartItems.id"))
                        {{ count(session("cartItems.id")) }}                          
                      @endif
                    </span>
                    <i class="fal fa-shopping-cart"></i> &nbsp; Cart </span>
                </a>
              </li>
            </ul>
          </div>
        </nav>



      <nav class="navbar navbar-expand-md bg-light navbar-light" id="secondNavbar">
          <div class="navbar-collapse collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item active pr-5">
                  <a class="nav-link text-uppercase h4" href="{{ route('home') }}" style="color:white">Tito's Signature Collections <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown pr-5">
                  <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    BAGS
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('category', ['cat' => 'Handbags']) }}" value="Handbags">Handbags</a> <!--INCLUDE ANOTHER DROPDOWN-->
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('category', ['cat' => 'Purses']) }}" name="purses" >Purses</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('category', ['cat' => 'Clutches']) }}" name="clutches">Clutches</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('category', ['cat' => 'Backpacks']) }}" name="backpacks">Backpacks</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('category', ['cat' => 'Knapsacks']) }}" name="knapsacks">Knapsacks</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('category', ['cat' => 'Traveling Bags']) }}" name="traveling">Traveling bags</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('category', ['cat' => 'Laptop Bags']) }}" name="laptopbags">Laptop bags</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('category', ['cat' => 'Laptop Porces']) }}" name="laptopporches">Laptop porches</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('category', ['cat' => 'School Bags']) }}" name="school">School bags</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('category', ['cat' => 'Lunch Box']) }}" name="lunchbox">Lunch box</a>
                  </div>
                </li>
                <li class="nav-item dropdown pr-5">
                  <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    SHOES
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('category', ['cat' => 'Corporate Shoes']) }}">Corporate</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('category', ['cat' => 'Casual Shoes']) }}">Casuals</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('category', ['cat' => 'Social Shoes']) }}">Socials</a>
                  </div>
                </li>              
                <li class="nav-item dropdown pr-5">
                  <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    CLOTHING
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('category', ['cat' => 'Corporate Clothings']) }}">Corporate</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('category', ['cat' => 'Casual Clothings']) }}">Casuals</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('category', ['cat' => 'African prints and fabrics']) }}">African Prints and fabrics</a>
                  </div>
                </li>
                <li class="nav-item dropdown pr-5">
                  <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    UNDERWEAR
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('category', ['cat' => 'Bras']) }}">Bras</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('category', ['cat' => 'Bikinis']) }}">Bikinis</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('category', ['cat' => 'Panties']) }}">Panties</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('category', ['cat' => 'Lingeries']) }}">Lingeries</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('category', ['cat' => 'Swin suits']) }}">Swim suits</a>
                  </div>
                </li>
                <li class="nav-item dropdown pr-5">
                  <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      JEWELRIES AND COSTUMES
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('category', ['cat' => 'Earrings']) }}">Earrings</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('category', ['cat' => 'Necklace']) }}">Necklace</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('category', ['cat' => 'Bracelets']) }}">Bracelets</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('category', ['cat' => 'Rings']) }}">Rings</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('category', ['cat' => 'Waist chains']) }}">Waist chains</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('category', ['cat' => 'Leg chains']) }}">Leg chains</a>
                  </div>
                </li>
              </ul>
          </div>
      </nav>
  
      




      @yield('content')






            <br><br>





            <!--Footer-->
            <div class="jumbotron mb-0" style="background-color:#0e0e42">
              <div class="container">
                <div class="row">
                  <div class="col-12 col-md">
                    <h5 class="text-white">Quick Links</h5>  
                    <h6 class="text-muted">Jobs</h6>
                    <h6 class="text-muted">Brand Assets</h6>
                    <h6 class="text-muted">Investor Relations</h6>
                    <h6 class="text-muted">Terms of Service</h6>  
                  </div>  
                  <div class="col-12 col-md">
                    <h5 class="text-white">Features</h5>  
                    <h6 class="text-muted">Jobs</h6>
                    <h6 class="text-muted">Brand Assets</h6>
                    <h6 class="text-muted">Investor Relations</h6>
                    <h6 class="text-muted">Terms of Service</h6>  
                  </div>  
                  <div class="col-12 col-md">
                    <h5 class="text-white">Resources</h5>  
                    <h6 class="text-muted">Guides</h6>
                    <h6 class="text-muted">Research</h6>
                    <h6 class="text-muted">Experts</h6>
                    <h6 class="text-muted">Agencies</h6>  
                  </div>  
                  <div class="col-12 col-md-4">
                    <h5 class="text-white">Newsletter</h5>  
                    <h6 class="text-muted">You can trust us, we only send promo offers</h6>
                    <form class="form-inline" id="subscribe" method="POST" action="{{ route('subscribe') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                          <label for="staticEmail2" class="sr-only">Email</label>
                          <input type="email" class="form-control" id="subscriber" name="subscriber" placeholder="email@example.com">
                        </div>
                        <button id="subscribe" type="submit" class="btn btn-primary btn-sm ml-n5 text-uppercase" >Subscribe</button>
                      </form>
                  </div>  
                </div><!--Row 1-->
                <br><br>
                <div class="row text-white">
                  <div class="col-12 col-md text-muted">
                    Copyright ©2019 All rights reserved |  Tito's Signature Collections
                    <br><br>
                  </div>
                  <div class="col-12 col-md text-muted text-md-right">
                    Designed and developed by <a href="https://motik.com.ng" class="sideBar">Motik Dev</a> 
                  </div>
                </div><!--Row 2-->
              </div>
            </div>


    </body>
    <script type="text/javascript" src="{{ asset('img/Font Awesome Pro 5.8.2/js/all.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery-3.4.1.slim.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>

    @yield('script')
</html>

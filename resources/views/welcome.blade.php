<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>(Dynamic Content) | Tito's Signature Collections</title>

        <meta name="description" content="Able Home Tutors: Able Home Tutors provide one on one home coaching or tutoring for children who are pupils in primary or student in secondary school. We are the best home tutors and home lesson teachers in lekki-ajah…">
        <meta name="keyword" content="able, home tutor, home lesson, home lesson teacher, lekki tutor, ajah tutor, best tutor, ajah home lesson, lekki home lesson, home lecture, primary, secondary">

        <meta name="author" content=""/>
        <meta name="copyright" content=""/>
        <meta name="application-name" content=""/>
        
        <!-- for Facebook -->
        <meta property="fb:app_id" content="781136408623359">
        <meta property="og:site_name" content="Tuteria">
        <meta property="og:title" content="Hire Lynda - Private home tutor in Lekki ajah, Lagos Nigeria."/>
        <meta property="og:type" content="tuteria:skills"/>
        <meta property="og:image" content="https://res.cloudinary.com/tuteria/image/upload/c_fill,f_auto,h_225,w_225/v1523965380/idgkaximjrqyk4jfojmn.jpg"/>
        <meta property="og:url" content="https://www.tuteria.com/lyndao/"/>

        
        <meta property="og:description" content="Tuteria helps you find, evaluate and book lessons with quality private tutors near you for whatever you wish to learn. From academic subjects to various exams and even skills like music, bead-making, photography, dance and more!"/>        
        <meta property="tuteria:tt_hourly_price" content="&#8358;"/>
        
        <!-- for Twitter -->
        <meta name="twitter:card" content="summary"/>
        <meta name="twitter:url" content="https%3A//www.tuteria.com/lyndao/"/>

        <meta name="twitter:site" content="@tuteria"/>
        <meta name="twitter:title" content="Hire Lynda - Private home tutor in Lekki ajah, Lagos Nigeria."/>

        
        <meta name="twitter:description" content="Tuteria helps you find, evaluate and book lessons with quality private tutors near you for whatever you wish to learn. From academic subjects to various exams and even skills like music, bead-making, photography, dance and more!"/>
        
        <meta name="twitter:image" content="idgkaximjrqyk4jfojmn"/>







        <link rel="icon" href="{{ asset('img/logo.jpg') }}" type="image/gif" sizes="16x16">
    
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    
        <!-- //for bootstrap working -->
        <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,300,300i,400,400i,500,500i,600,600i,700,800" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700" rel="stylesheet">

            {{-- -FONT AWESOME FROM TORRENT --}}
        <link href="{{ asset('img/Font Awesome Pro 5.8.2/css/all.css') }}" rel="stylesheet">
        <script type="text/javascript" src="{{ asset('img/Font Awesome Pro 5.8.2/js/all.js') }}"></script>


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

          .navbar .dropdown:hover .dropdown-menu {
              display: block;
              border-color: transparent;
              animation: slideUp 0.3s linear;
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
          }


          @media (min-width: 768px)
          {
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

          .myRightNav>li>a {
            color: #000000;
          }

          .myRightNav>li>a:hover {
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
            background-image: url("{{ asset('img/offer-bg.png') }}");
            background-size: cover;
          }

          #newProduct {
            background-image: url("{{ asset('img/f-p-2.jpg') }}");
            background-repeat: no-repeat;
            background-size: 100% 100%;
          }

        </style>


    </head>
    <body>

      <!-- Major Color on the website #f58a42-->

      
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif
        </div>



        <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top shadow-sm">
          <a class="navbar-brand" href="#">
            <span> <img src="{{ asset('img/logo.jpg') }}" alt="Tito's Collections Logo" class="img-fluid" height="50px" width="70px" id="logo"> </span>
          </a>
          <a href="#" class="navbar-nav d-block d-lg-none">
            <span> <i class="fal fa-shopping-cart fa-2x"></i> </span>
          </a>
          <button class="navbar-toggler order-first" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>        
          <div class="collapse navbar-collapse show" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <form class="form-inline" role="form">
                  <div class="form-group">
                      <div class="input-group">       
                        <input type="text" size="80px" id="searchBox" class="form-control shadow-sm" placeholder="Search for products..." aria-describedby="basic-addon2">                                
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
                <a href="#"> <span><i class="fal fa-user"></i> &nbsp; Login/Register </span> </a>
              </li>
              &nbsp; &nbsp; &nbsp; &nbsp; 
              <li class="d-none d-lg-block">
                <a href="#"> 
                  <span> <i class="fal fa-shopping-cart"></i> &nbsp; Cart </span>
                </a>
              </li>
            </ul>
          </div>
        </nav>



      <nav class="navbar navbar-expand-md bg-light navbar-light" id="secondNavbar">
          <div class="navbar-collapse collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item active pr-5">
                  <a class="nav-link text-uppercase" href="#">Tito's Collections <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown pr-5">
                  <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    BAGS
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Home</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Link</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Dropdown</a>
                  </div>
                </li>
                <li class="nav-item dropdown pr-5">
                  <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    SHOES
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Home</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Link</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Dropdown</a>
                  </div>
                </li>              
                <li class="nav-item dropdown pr-5">
                  <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    CLOTHING
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Home</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Link</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Dropdown</a>
                  </div>
                </li>
                <li class="nav-item dropdown pr-5">
                  <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    UNDERWEAR
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Home</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Link</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Dropdown</a>
                  </div>
                </li>
                <li class="nav-item dropdown pr-5">
                  <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      JEWELRIES AND COSTUMES
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Home</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Link</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Dropdown</a>
                  </div>
                </li>
              </ul>
          </div>
      </nav>
  
      


      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('img/m-blog-3.jpg') }}" class="d-block w-100" alt="..." height="700px" width="100%">
            <div class="carousel-caption text-left">
              <p class="mr-auto">Superior Collections</p>
              <h1 class="display-4 myCaption"> <span class="myDefault">Show</span> Your <br> Personal  <span class="myDefault">Style</span></h1>
              <button type="button" class="btn btn-button text-white btn-md p-2">View Collection</button>
              <br><br><br><br><br><br>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ asset('img/b2.jpg') }}" class="d-block w-100" alt="..." height="700px" width="100%">
            <div class="carousel-caption text-left">
              <p class="mr-auto">Superior Collections</p>
              <h1 class="display-4 myCaption"> <span class="myDefault">Show</span> Your <br> Personal  <span class="myDefault">Style</span></h1>
              <button type="button" class="btn btn-button text-white btn-md p-2">View Collection</button>
              <br><br><br><br><br><br>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ asset('img/m-blog-2.jpg') }}" class="d-block w-100" alt="..." height="700px" width="100%">
            <div class="carousel-caption text-left">
              <p class="mr-auto">Superior Collections</p>
              <h1 class="display-4 myCaption"> <span class="myDefault">Show</span> Your <br> Personal  <span class="myDefault">Style</span></h1>
              <button type="button" class="btn btn-button text-white btn-md p-2">View Collection</button>
              <br><br><br><br><br><br>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ asset('img/b1.jpg') }}" class="d-block w-100" alt="..." height="700px" width="100%">
            <div class="carousel-caption text-left">
              <p class="mr-auto">Superior Collections</p>
              <h1 class="display-4 myCaption"> <span class="myDefault">Show</span> Your <br> Personal  <span class="myDefault">Style</span></h1>
              <button type="button" class="btn btn-button text-white btn-md p-2">View Collection</button>
              <br><br><br><br><br><br>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ asset('img/n4.jpg') }}" class="d-block w-100" alt="..." height="700px" width="100%">
            <div class="carousel-caption text-left">
              <p class="mr-auto">Superior Collections</p>
              <h1 class="display-4 myCaption"> <span class="myDefault">Show</span> Your <br> Personal  <span class="myDefault">Style</span></h1>
              <button type="button" class="btn btn-button text-white btn-md p-2">View Collection</button>
              <br><br><br><br><br><br>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>


      <!--Featured Products-->
      <div class="container mt-5">
        <div class="row mb-5">
          <div class="col text-center text-dark text-uppercase">
            <br>
            <h4 class="text-dark"> <span class="boldHead pb-3">Featured Products</span> </h4>
          </div>
        </div>
        <br><br>
        <div class="row">
          <div class="col-xs-12 col-md-4">
            <div class="card">
              <img src="{{ asset('img/f-p-1.jpg') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-md-4">
            <div class="card">
              <img src="{{ asset('img/f-p-2.jpg') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-md-4">
            <div class="card">
              <img src="{{ asset('img/f-p-3.jpg') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div> <!--Column-->
        </div> <!--Second Row-->
      </div> <!--Container-->

            <br><br><br>

      <div class="jumbotron" id="mensC">
        <div class="container">
          <div class="row">
            <div class="col-md-6"></div>
            <div class="col col-md-6">
              <div class="text-center ">
                <h4 class="text-uppercase">All men's collection</h4>
                <h1 class="text-uppercase myCaption display-1">50% off</h1>
                <button type="button" class="btn btn-button text-white btn-md py-2 px-4 text-uppercase">discover now</button>
                <br><br>
                <h6 class="text-muted">Limited Time Offer</h6>
              </div>
            </div>

          </div>
        </div>
      </div>
            


            <!--New Products-->
            <div class="container mt-5">
              <div class="row mb-5">
                <div class="col text-center text-dark text-uppercase">
                  <br>
                  <h4 class="text-dark"> <span class="boldHead pb-3">New Products</span> </h4>
                </div>
              </div>
              <br><br>
              <div class="row">
                <div class="col-12 col-md-6 text-center text-uppercase" id="newProduct" style="position:relative">
                  <br><br>
                  <h4 class="text-muted">collection of 2019</h4>
                  <h3> <strong> men's summer t-shirt </strong></h3>

                  <div class="" id="newProductBottom" style="">
                    <h2 class="text-muted">$120.70</h2>
                    <button class="btn btn-button text-white text-uppercase px-4">add to cart</button>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="card">
                        <img src="{{ asset('img/f-p-2.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                    </div>
                    <div class="col col-md-6">
                      <div class="card">
                        <img src="{{ asset('img/f-p-3.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="card">
                        <img src="{{ asset('img/f-p-1.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                    </div>
                    <div class="col col-md-6">
                      <div class="card">
                        <img src="{{ asset('img/f-p-2.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> <!--Container-->
      
                  <br><br><br>
      


            <!--Inspired Products-->
            <div class="container mt-5">
              <div class="row mb-5">
                <div class="col text-center text-dark text-uppercase">
                  <br>
                  <h4 class="text-dark"> <span class="boldHead pb-3">Inspired Products</span> </h4>
                </div>
              </div>
              <br><br>
              <div class="row">
                <div class="col-xs-12 col-md-3">
                  <div class="card">
                    <img src="{{ asset('img/f-p-1.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
                </div><!--Column-->
                <div class="col-xs-12 col-md-3">
                  <div class="card">
                    <img src="{{ asset('img/f-p-2.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
                </div><!--Column-->
                <div class="col-xs-12 col-md-3">
                  <div class="card">
                    <img src="{{ asset('img/f-p-3.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
                </div> <!--Column-->
                <div class="col-xs-12 col-md-3">
                    <div class="card">
                      <img src="{{ asset('img/f-p-3.jpg') }}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                      </div>
                    </div>
                  </div> <!--Column-->
              </div> <!--First Row-->
<br>
              <div class="row">
                  <div class="col-xs-12 col-md-3">
                    <div class="card">
                      <img src="{{ asset('img/f-p-1.jpg') }}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                      </div>
                    </div>
                  </div><!--Column-->
                  <div class="col-xs-12 col-md-3">
                    <div class="card">
                      <img src="{{ asset('img/f-p-2.jpg') }}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                      </div>
                    </div>
                  </div><!--Column-->
                  <div class="col-xs-12 col-md-3">
                    <div class="card">
                      <img src="{{ asset('img/f-p-3.jpg') }}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                      </div>
                    </div>
                  </div> <!--Column-->
                  <div class="col-xs-12 col-md-3">
                      <div class="card">
                        <img src="{{ asset('img/f-p-3.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                    </div> <!--Column-->
                </div> <!--Second Row-->

            </div> <!--Container-->


            <br><br>





            <!--Footer-->
            <div class="jumbotron" style="background-color:darkblue">
              <div class="container">
                <div class="row">
                  <div class="col-12 col-md">
                    <h5 class="text-white">Top Products</h5>  
                    <h6 class="text-muted">Managed Website</h6>
                    <h6 class="text-muted">Manage Reputation</h6>
                    <h6 class="text-muted">Power Tools</h6>
                    <h6 class="text-muted">Marketing Service</h6>
                  </div>  
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
                    <form class="form-inline">
                        <div class="form-group">
                          <label for="staticEmail2" class="sr-only">Email</label>
                          <input type="email" class="form-control" id="staticEmail2" value="email@example.com">
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm ml-n5 text-uppercase">Subscribe</button>
                      </form>
                  </div>  
                </div><!--Row 1-->
                <br><br>
                <div class="row text-white">
                  <div class="col">
                    Copyright ©2019 All rights reserved |  
                  </div>
                  <div class="col"></div>
                  <div class="col"></div>
                </div><!--Row 2-->
              </div>
            </div>




            <script type="text/javascript" src="{{ asset('js/jquery-3.4.1.slim.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    </body>
</html>

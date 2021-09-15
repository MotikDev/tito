    @extends('pages.temp')

    @section('style')
        <style>
          .sideBar {
            color: black;
          }

          .sideBar:hover {
            color: #f58a42;
          }
        </style>
    @endsection
    @section('content')

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
            <div class="d-none">
                {{ $firstPic = $home[0]->content }}
              </div>
          <div class="carousel-item active">
            <img src="{{ asset("storage/$firstPic") }}" class="d-block w-100" alt="..." height="700px" width="100%">
            <div class="carousel-caption text-left">
              <p class="mr-auto">{{ $home[5]->content }}</p>
              <h1 class="display-4 myCaption"> <span class="myDefault">Show</span> Your <br> Personal  <span class="myDefault">Style</span></h1>
              <a href="{{ route('details', ['id' => $home[0]->id]) }}">
                  <button type="button" class="btn btn-button text-white btn-md p-2">{{ $home[7]->content }}</button>
              </a>
              <br><br><br><br><br><br>
            </div>
          </div>
          <div class="d-none">
            {{ $secondPic = $home[1]->content }}
          </div>
          <div class="carousel-item">
            <img src="{{ asset("storage/$secondPic") }}" class="d-block w-100" alt="..." height="700px" width="100%">
            <div class="carousel-caption text-left">
              <p class="mr-auto">{{ $home[5]->content }}</p>
              <h1 class="display-4 myCaption"> <span class="myDefault">Show</span> Your <br> Personal  <span class="myDefault">Style</span></h1>
              <a href="{{ route('details', ['id' => $home[1]->id]) }}">
                  <button type="button" class="btn btn-button text-white btn-md p-2">{{ $home[7]->content }}</button>
              </a>
              <br><br><br><br><br><br>
            </div>
          </div>
          <div class="d-none">
            {{ $thirdPic = $home[2]->content }}
          </div>
          <div class="carousel-item">
            <img src="{{ asset("storage/$thirdPic") }}" class="d-block w-100" alt="..." height="700px" width="100%">
            <div class="carousel-caption text-left">
              <p class="mr-auto">{{ $home[5]->content }}</p>
              <h1 class="display-4 myCaption"> <span class="myDefault">Show</span> Your <br> Personal  <span class="myDefault">Style</span></h1>
              <a href="{{ route('details', ['id' => $home[2]->id]) }}">
                  <button type="button" class="btn btn-button text-white btn-md p-2">{{ $home[7]->content }}</button>
              </a>
              <br><br><br><br><br><br>
            </div>
          </div>
          <div class="d-none">
            {{ $fourthPic = $home[3]->content }}
          </div>
          <div class="carousel-item">
            <img src="{{ asset("storage/$fourthPic") }}" class="d-block w-100" alt="..." height="700px" width="100%">
            <div class="carousel-caption text-left">
              <p class="mr-auto">{{ $home[5]->content }}</p>
              <h1 class="display-4 myCaption"> <span class="myDefault">Show</span> Your <br> Personal  <span class="myDefault">Style</span></h1>
              <a href="{{ route('details', ['id' => $home[3]->id]) }}">
                  <button type="button" class="btn btn-button text-white btn-md p-2">{{ $home[7]->content }}</button>
              </a>
              <br><br><br><br><br><br>
            </div>
          </div>
          <div class="d-none">
            {{ $fifthPic = $home[4]->content }}
          </div>
          <div class="carousel-item">
            <img src="{{ asset("storage/$fifthPic") }}" class="d-block w-100" alt="..." height="700px" width="100%">
            <div class="carousel-caption text-left">
              <p class="mr-auto">{{ $home[5]->content }}</p>
              <h1 class="display-4 myCaption"> <span class="myDefault">Show</span> Your <br> Personal  <span class="myDefault">Style</span></h1>
              <a href="{{ route('details', ['id' => $home[4]->id]) }}">
                  <button type="button" class="btn btn-button text-white btn-md p-2">{{ $home[7]->content }}</button>
              </a>
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



      <div class="container mt-5">
        <div class="row mt-5">
          @include('components.sideBar')
          <div class="col-12 col-md-9">
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
              <div class="card shadow">
                <a href="{{ route('details', ['id' => $fProduct[0]->id]) }}">
                    <img src="{{ asset('storage/'.$fProduct[0]->frontPicture) }}" height="300px" class="card-img-top" alt="...">
                </a>
  
                <div class="card-body">
                  <p class="card-text">{{ $fProduct[0]->brand }} {{ $fProduct[0]->product }}</p>
                  <hr>
                  <a href="https://api.whatsapp.com/send?phone=2348134673765&text={{ $fProduct[0]->brand }} {{ $fProduct[0]->product }} ₦{{ $fProduct[0]->price }}" class="btn btn-default">
                    ₦{{ $fProduct[0]->price }} &nbsp; <img src="../img/whatsapp.png" width="20px" height="20px" class="float-right" alt="">
                  </a>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-md-4">
              <div class="card shadow">
                <a href="{{ route('details', ['id' => $fProduct[1]->id]) }}">
                    <img src="{{ asset('storage/'.$fProduct[1]->frontPicture) }}" height="300px" class="card-img-top" alt="...">
                </a>
  
                <div class="card-body">
                    <p class="card-text">{{ $fProduct[1]->brand }} {{ $fProduct[1]->product }}</p>
                    <hr>
                    <a href="https://api.whatsapp.com/send?phone=2348134673765&text={{ $fProduct[1]->brand }} {{ $fProduct[1]->product }} ₦{{ $fProduct[1]->price }}" class="btn btn-default">
                      ₦{{ $fProduct[1]->price }} &nbsp; <img src="../img/whatsapp.png" width="20px" height="20px" class="float-right" alt="">
                    </a>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-md-4">
              <div class="card shadow">
                <a href="{{ route('details', ['id' => $fProduct[2]->id]) }}">
                    <img src="{{ asset('storage/'.$fProduct[2]->frontPicture) }}" height="300px" class="card-img-top" alt="...">
                </a>
  
                <div class="card-body">
                    <p class="card-text">{{ $fProduct[2]->brand }} {{ $fProduct[2]->product }}</p>
                    <hr>
                    <a href="https://api.whatsapp.com/send?phone=2348134673765&text={{ $fProduct[2]->brand }} {{ $fProduct[2]->product }} ₦{{ $fProduct[2]->price }}" class="btn btn-default">
                      ₦{{ $fProduct[2]->price }} &nbsp; <img src="../img/whatsapp.png" width="20px" height="20px" class="float-right" alt="">
                    </a>
                </div>
              </div>
            </div> <!--Column-->
          </div> <!--Second Row-->
  
          <br>
  
          <div class="row">
            <div class="col-xs-12 col-md-4">
              <div class="card shadow">
                <a href="{{ route('details', ['id' => $fProduct[3]->id]) }}">
                    <img src="{{ asset('storage/'.$fProduct[3]->frontPicture) }}" height="300px" class="card-img-top" alt="...">
                </a>
  
                <div class="card-body">
                    <p class="card-text">{{ $fProduct[3]->brand }} {{ $fProduct[3]->product }}</p>
                    <hr>
                    <a href="https://api.whatsapp.com/send?phone=2348134673765&text={{ $fProduct[3]->brand }} {{ $fProduct[3]->product }} ₦{{ $fProduct[3]->price }}" class="btn btn-default">
                      ₦{{ $fProduct[3]->price }} &nbsp; <img src="../img/whatsapp.png" width="20px" height="20px" class="float-right" alt="">
                    </a>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-md-4">
              <div class="card shadow">
                <a href="{{ route('details', ['id' => $fProduct[4]->id]) }}">
                    <img src="{{ asset('storage/'.$fProduct[4]->frontPicture) }}" height="300px" class="card-img-top" alt="...">
                </a>
  
                <div class="card-body">
                    <p class="card-text">{{ $fProduct[4]->brand }} {{ $fProduct[4]->product }}</p>
                    <hr>
                    <a href="https://api.whatsapp.com/send?phone=2348134673765&text={{ $fProduct[4]->brand }} {{ $fProduct[4]->product }} ₦{{ $fProduct[4]->price }}" class="btn btn-default">
                      ₦{{ $fProduct[4]->price }} &nbsp; <img src="../img/whatsapp.png" width="20px" height="20px" class="float-right" alt="">
                    </a>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-md-4">
              <div class="card shadow">
                <a href="{{ route('details', ['id' => $fProduct[5]->id]) }}">
                    <img src="{{ asset('storage/'.$fProduct[5]->frontPicture) }}" height="300px" class="card-img-top" alt="...">
                </a>
  
                <div class="card-body">
                    <p class="card-text">{{ $fProduct[5]->brand }} {{ $fProduct[5]->product }}</p>
                    <hr>
                    <a href="https://api.whatsapp.com/send?phone=2348134673765&text={{ $fProduct[5]->brand }} {{ $fProduct[5]->product }} ₦{{ $fProduct[5]->price }}" class="btn btn-default">
                      ₦{{ $fProduct[5]->price }} &nbsp; <img src="../img/whatsapp.png" width="20px" height="20px" class="float-right" alt="">
                    </a>
                </div>
              </div>
            </div> <!--Column-->
          </div> <!--Third Row-->
  
        </div> <!--Container-->
  
              <br><br><br>
  
        <div class="jumbotron" id="mensC">
          <div class="container">
            <div class="row">
              <div class="col-md-6"></div>
              <div class="col col-md-6">
                <div class="text-center ">
                  <h4 class="text-uppercase">{{ $home[8]->content }}</h4>
                  <h1 class="text-uppercase myCaption display-1">{{ $home[9]->content }}</h1>
                  <a href="{{ route('details', ['id' => $home[8]->id]) }}">
                      <button type="button" class="btn btn-button text-white btn-md py-2 px-4 text-uppercase">discover now</button>
                  </a>
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
                    <h4 class="text-dark"> <span class="boldHead pb-3">{{ $home[11]->content }}</span> </h4>
                  </div>
                </div>
                <br><br>
                <div class="row">
                  <div class="col-12 col-md-6 text-center text-uppercase" id="newProduct" style="position:relative">
                    <br><br>
                    <h4 class="text-muted">{{ $home[12]->content }}</h4>
                    <h3> <strong> {{ $home[13]->content }} </strong></h3>
  
                    <div class="" id="newProductBottom" style="">
                      <h2 class="text-muted">{{ $home[14]->content }}</h2>
                      <a href="{{ route('details', ['id' => $home[14]->id]) }}">
                          <button class="btn btn-button text-white text-uppercase px-4">add to cart</button>
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="card shadow">
                          <a href="{{ route('details', ['id' => $nProduct[4][0]->id]) }}">
                              <img src="{{ asset('storage/'.$nProduct[4][0]->frontPicture) }}" height="300px" class="card-img-top" alt="...">
                          </a>
  
                          <div class="card-body">
                              <p class="card-text">{{ $nProduct[4][0]->brand }} {{ $nProduct[4][0]->product }}</p>
                              <hr>
                              <a href="https://api.whatsapp.com/send?phone=2348134673765&text={{ $nProduct[4][0]->brand }} {{ $nProduct[4][0]->product }}₦{{ $nProduct[4][0]->price }}" class="btn btn-default">
                                ₦{{ $nProduct[4][0]->price }} &nbsp; <img src="../img/whatsapp.png" width="20px" height="20px" class="float-right" alt="">
                              </a>
                          </div>
                        </div>
                      </div>
                      <div class="col col-md-6">
                        <div class="card shadow">
                          <a href="{{ route('details', ['id' => $nProduct[1][0]->id]) }}">
                              <img src="{{ asset('storage/'.$nProduct[1][0]->frontPicture) }}" height="300px" class="card-img-top" alt="...">
                          </a>
  
                          <div class="card-body">
                              <p class="card-text">{{ $nProduct[1][0]->brand }} {{ $nProduct[1][0]->product }}</p>
                              <hr>
                              <a href="https://api.whatsapp.com/send?phone=2348134673765&text={{ $nProduct[1][0]->brand }} {{ $nProduct[1][0]->product }}₦{{ $nProduct[1][0]->price }}" class="btn btn-default">
                                ₦{{ $nProduct[1][0]->price }} &nbsp; <img src="../img/whatsapp.png" width="20px" height="20px" class="float-right" alt="">
                              </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="card shadow">
                          <a href="{{ route('details', ['id' => $nProduct[2][0]->id]) }}">
                              <img src="{{ asset('storage/'.$nProduct[2][0]->frontPicture) }}" height="300px" class="card-img-top" alt="...">
                          </a>
  
                          <div class="card-body">
                              <p class="card-text">{{ $nProduct[2][0]->brand }} {{ $nProduct[2][0]->product }}</p>
                              <hr>
                              <a href="https://api.whatsapp.com/send?phone=2348134673765&text={{ $nProduct[2][0]->brand }} {{ $nProduct[2][0]->product }}₦{{ $nProduct[2][0]->price }}" class="btn btn-default">
                                ₦{{ $nProduct[2][0]->price }} &nbsp; <img src="../img/whatsapp.png" width="20px" height="20px" class="float-right" alt="">
                              </a>
                          </div>
                        </div>
                      </div>
                      <div class="col col-md-6">
                        <div class="card shadow">
                          <a href="{{ route('details', ['id' => $nProduct[3][0]->id]) }}">
                              <img src="{{ asset('storage/'.$nProduct[3][0]->frontPicture) }}" height="300px" class="card-img-top" alt="...">
                          </a>
  
                          <div class="card-body">
                              <p class="card-text">{{ $nProduct[3][0]->brand }} {{ $nProduct[3][0]->product }}</p>
                              <hr>
                              <a href="https://api.whatsapp.com/send?phone=2348134673765&text={{ $nProduct[3][0]->brand }} {{ $nProduct[3][0]->product }}₦{{ $nProduct[3][0]->price }}" class="btn btn-default">
                                ₦{{ $nProduct[3][0]->price }} &nbsp; <img src="../img/whatsapp.png" width="20px" height="20px" class="float-right" alt="">
                              </a>
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
                    <h4 class="text-dark"> <span class="boldHead pb-3">{{ $home[16]->content }}</span> </h4>
                  </div>
                </div>
                <br><br>
                <div class="row">
                  <div class="col-xs-12 col-md-3">
                    <div class="card shadow">
                      <a href="{{ route('details', ['id' => $fProduct[6]->id]) }}">
                          <img src="{{ asset('storage/'.$fProduct[6]->frontPicture) }}" height="300px" class="card-img-top" alt="...">
                      </a>
  
                      <div class="card-body">
                          <p class="card-text">{{ $fProduct[6]->brand }} {{ $fProduct[6]->product }}</p>
                          <hr>
                          <a href="https://api.whatsapp.com/send?phone=2348134673765&text={{ $fProduct[6]->brand }} {{ $fProduct[6]->product }} ₦{{ $fProduct[6]->price }}" class="btn btn-default">
                            ₦{{ $fProduct[6]->price }} &nbsp; <img src="../img/whatsapp.png" width="20px" height="20px" class="float-right" alt="">
                          </a>
                      </div>
                    </div>
                  </div><!--Column-->
                  <div class="col-xs-12 col-md-3">
                    <div class="card shadow">
                      <a href="{{ route('details', ['id' => $fProduct[7]->id]) }}">
                          <img src="{{ asset('storage/'.$fProduct[7]->frontPicture) }}" height="300px" class="card-img-top" alt="...">
                      </a>
  
                      <div class="card-body">
                          <p class="card-text">{{ $fProduct[7]->brand }} {{ $fProduct[7]->product }}</p>
                          <hr>
                          <a href="https://api.whatsapp.com/send?phone=2348134673765&text={{ $fProduct[7]->brand }} {{ $fProduct[7]->product }} ₦{{ $fProduct[7]->price }}" class="btn btn-default">
                            ₦{{ $fProduct[7]->price }} &nbsp; <img src="../img/whatsapp.png" width="20px" height="20px" class="float-right" alt="">
                          </a>
                        </div>
                    </div>
                  </div><!--Column-->
                  <div class="col-xs-12 col-md-3">
                    <div class="card shadow">
                      <a href="{{ route('details', ['id' => $fProduct[8]->id]) }}">
                          <img src="{{ asset('storage/'.$fProduct[8]->frontPicture) }}" height="300px" class="card-img-top" alt="...">
                      </a>
  
                      <div class="card-body">
                          <p class="card-text">{{ $fProduct[8]->brand }} {{ $fProduct[8]->product }}</p>
                          <hr>
                          <a href="https://api.whatsapp.com/send?phone=2348134673765&text={{ $fProduct[8]->brand }} {{ $fProduct[8]->product }} ₦{{ $fProduct[8]->price }}" class="btn btn-default">
                            ₦{{ $fProduct[8]->price }} &nbsp; <img src="../img/whatsapp.png" width="20px" height="20px" class="float-right" alt="">
                          </a>
                      </div>
                    </div>
                  </div> <!--Column-->
                  <div class="col-xs-12 col-md-3">
                      <div class="card shadow">
                        <a href="{{ route('details', ['id' => $fProduct[9]->id]) }}">
                            <img src="{{ asset('storage/'.$fProduct[9]->frontPicture) }}" height="300px" class="card-img-top" alt="...">
                        </a>
  
                        <div class="card-body">
                            <p class="card-text">{{ $fProduct[9]->brand }} {{ $fProduct[9]->product }}</p>
                            <hr>
                            <a href="https://api.whatsapp.com/send?phone=2348134673765&text={{ $fProduct[9]->brand }} {{ $fProduct[9]->product }} ₦{{ $fProduct[9]->price }}" class="btn btn-default">
                              ₦{{ $fProduct[9]->price }} &nbsp; <img src="../img/whatsapp.png" width="20px" height="20px" class="float-right" alt="">
                            </a>
                        </div>
                      </div>
                    </div> <!--Column-->
                </div> <!--First Row-->
  <br>
                <div class="row">
                    <div class="col-xs-12 col-md-3">
                      <div class="card shadow">
                        <a href="{{ route('details', ['id' => $fProduct[10]->id]) }}">
                            <img src="{{ asset('storage/'.$fProduct[10]->frontPicture) }}" height="300px" class="card-img-top" alt="...">
                        </a>
  
                        <div class="card-body">
                            <p class="card-text">{{ $fProduct[10]->brand }} {{ $fProduct[10]->product }}</p>
                            <hr>
                            <a href="https://api.whatsapp.com/send?phone=2348134673765&text={{ $fProduct[10]->brand }} {{ $fProduct[10]->product }} ₦{{ $fProduct[10]->price }}" class="btn btn-default">
                              ₦{{ $fProduct[10]->price }} &nbsp; <img src="../img/whatsapp.png" width="20px" height="20px" class="float-right" alt="">
                            </a>
                        </div>
                      </div>
                    </div><!--Column-->
                    <div class="col-xs-12 col-md-3">
                      <div class="card shadow">
                        <a href="{{ route('details', ['id' => $fProduct[11]->id]) }}">
                            <img src="{{ asset('storage/'.$fProduct[11]->frontPicture) }}" height="300px" class="card-img-top" alt="...">
                        </a>
  
                        <div class="card-body">
                            <p class="card-text">{{ $fProduct[11]->brand }} {{ $fProduct[11]->product }}</p>
                            <hr>
                            <a href="https://api.whatsapp.com/send?phone=2348134673765&text={{ $fProduct[11]->brand }} {{ $fProduct[11]->product }} ₦{{ $fProduct[11]->price }}" class="btn btn-default">
                              ₦{{ $fProduct[11]->price }} &nbsp; <img src="../img/whatsapp.png" width="20px" height="20px" class="float-right" alt="">
                            </a>
                        </div>
                      </div>
                    </div><!--Column-->
                    <div class="col-xs-12 col-md-3">
                      <div class="card shadow">
                        <a href="{{ route('details', ['id' => $fProduct[12]->id]) }}">
                            <img src="{{ asset('storage/'.$fProduct[12]->frontPicture) }}" height="300px" class="card-img-top" alt="...">
                        </a>
  
                        <div class="card-body">
                            <p class="card-text">{{ $fProduct[12]->brand }} {{ $fProduct[12]->product }}</p>
                            <hr>
                            <a href="https://api.whatsapp.com/send?phone=2348134673765&text={{ $fProduct[12]->brand }} {{ $fProduct[12]->product }} ₦{{ $fProduct[12]->price }}" class="btn btn-default">
                              ₦{{ $fProduct[12]->price }} &nbsp; <img src="../img/whatsapp.png" width="20px" height="20px" class="float-right" alt="">
                            </a>
                        </div>
                      </div>
                    </div> <!--Column-->
                    <div class="col-xs-12 col-md-3">
                        <div class="card shadow">
                          <a href="{{ route('details', ['id' => $fProduct[13]->id]) }}">
                              <img src="{{ asset('storage/'.$fProduct[13]->frontPicture) }}" height="300px" class="card-img-top" alt="...">
                          </a>
  
                          <div class="card-body">
                              <p class="card-text">{{ $fProduct[13]->brand }} {{ $fProduct[13]->product }}</p>
                              <hr>
                              <a href="https://api.whatsapp.com/send?phone=2348134673765&text={{ $fProduct[13]->brand }} {{ $fProduct[13]->product }} ₦{{ $fProduct[13]->price }}" class="btn btn-default">
                                ₦{{ $fProduct[13]->price }} &nbsp; <img src="../img/whatsapp.png" width="20px" height="20px" class="float-right" alt="">
                              </a>
                          </div>
                        </div>
                      </div> <!--Column-->
                  </div> <!--Second Row-->
  
              </div> <!--Container-->
  
              {{-- -
                <div class="container mt-5">
                <div class="row">
                  <div class="col text-right">
                      <nav aria-label="...">
                        <ul class="pagination justify-content-end">
                          <li class="page-item">
                              {{ $fProduct->links('vendor.pagination.bootstrap-4') }}                        </ul>
                          </li>
                      </nav>
                  </div>
                </div>
              </div>  
              --}}

          </div>
        </div>
      </div>

    @endsection
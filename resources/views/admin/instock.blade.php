@extends('admin.temp')

@section('content')
        <!-- Header -->
        <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
                <div class="container-fluid">
                  <div class="header-body">
                    <!-- Card stats -->
                    <div class="row">
                      <div class="col-xl-3 col-lg-6">
                        <div class="card card-stats mb-4 mb-xl-0">
                          <div class="card-body">
                            <div class="row">
                              <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">Traffic</h5>
                                <span class="h2 font-weight-bold mb-0">350,897</span>
                              </div>
                              <div class="col-auto">
                                <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                  <i class="fas fa-chart-bar"></i>
                                </div>
                              </div>
                            </div>
                            <p class="mt-3 mb-0 text-muted text-sm">
                              <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                              <span class="text-nowrap">Since last month</span>
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-3 col-lg-6">
                        <div class="card card-stats mb-4 mb-xl-0">
                          <div class="card-body">
                            <div class="row">
                              <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">New users</h5>
                                <span class="h2 font-weight-bold mb-0">2,356</span>
                              </div>
                              <div class="col-auto">
                                <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                                  <i class="fas fa-chart-pie"></i>
                                </div>
                              </div>
                            </div>
                            <p class="mt-3 mb-0 text-muted text-sm">
                              <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> 3.48%</span>
                              <span class="text-nowrap">Since last week</span>
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-3 col-lg-6">
                        <div class="card card-stats mb-4 mb-xl-0">
                          <div class="card-body">
                            <div class="row">
                              <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">Sales</h5>
                                <span class="h2 font-weight-bold mb-0">924</span>
                              </div>
                              <div class="col-auto">
                                <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                                  <i class="fas fa-users"></i>
                                </div>
                              </div>
                            </div>
                            <p class="mt-3 mb-0 text-muted text-sm">
                              <span class="text-warning mr-2"><i class="fas fa-arrow-down"></i> 1.10%</span>
                              <span class="text-nowrap">Since yesterday</span>
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-3 col-lg-6">
                        <div class="card card-stats mb-4 mb-xl-0">
                          <div class="card-body">
                            <div class="row">
                              <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">Performance</h5>
                                <span class="h2 font-weight-bold mb-0">49,65%</span>
                              </div>
                              <div class="col-auto">
                                <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                                  <i class="fas fa-percent"></i>
                                </div>
                              </div>
                            </div>
                            <p class="mt-3 mb-0 text-muted text-sm">
                              <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 12%</span>
                              <span class="text-nowrap">Since last month</span>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>





















            <div class="container-fluid mt--7">
                <!-- Table -->
                <!-- Dark table -->


                  @for ($i = 0; $i < count($products); $i = $i + 3)
                    <div class="row mb-5">
                      <div class="col">
                          <div class="card-deck">
                              <div class="card">
                                <div class="d-none">
                                  {{ $firstPic = $products[$i]->frontPicture }}
                                </div>
                                  <img src="{{ asset("storage/$firstPic") }}" class="card-img-top" alt="...">
                                  <div class="card-body">
                                      <h5 class="card-title text-center text-white p-2 bg-info"> <span class="pr-2" style="border-right:1px solid white">{{ $products[$i]->brand }}</span>  <span class="px-2" style="border-right:1px solid white"> {{ $products[$i]->product }} </span> <span class="pl-2">{{ $products[$i]->price }}</span> </h5>
                                      <p>
                                        <small>Posted by: {{ $products[$i]->author }} &nbsp; on &nbsp; {{ $products[$i]->created_at }}</small>
                                      </p>
                                      <p class="card-text">Description: <br> {{ $products[$i]->description }}</p>
                                      <p class="card-text">
                                        <small class="text-muted">
                                          <button class="btn btn-default">Edit</button>    <button class="btn btn-warning float-right">Delete</button>
                                        </small>
                                      </p>
                                  </div>
                              </div>
                              @if ($products[$i+1])
                              <div class="d-none">
                                  {{ $secondPic = $products[$i+1]->frontPicture }}
                                </div>
                                <div class="card">
                                    <img src="{{ asset("storage/$secondPic") }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title text-center text-white p-2 bg-info"> <span class="pr-2" style="border-right:1px solid white">{{ $products[$i+1]->brand }}</span>  <span class="px-2" style="border-right:1px solid white"> {{ $products[$i+1]->product }} </span> <span class="pl-2">{{ $products[$i+1]->price }}</span> </h5>
                                        <p>
                                          <small>Posted by: {{ $products[$i+1]->author }} &nbsp; on &nbsp; {{ $products[$i+1]->created_at }}</small>
                                        </p>
                                        <p class="card-text">Description: <br> {{ $products[$i+1]->description }}</p>
                                        <p class="card-text">
                                          <small class="text-muted">
                                            <button class="btn btn-default">Edit</button>    <button class="btn btn-warning float-right">Delete</button>
                                          </small>
                                        </p>
                                    </div>
                                </div>
                              @endif

                              @if ($products[$i+2])
                              <div class="d-none">
                                  {{ $thirdPic = $products[$i+2]->frontPicture }}
                                </div>
                                <div class="card">
                                    <img src="{{ asset("storage/$thirdPic") }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title text-center text-white p-2 bg-info"> <span class="pr-2" style="border-right:1px solid white">{{ $products[$i+2]->brand }}</span>  <span class="px-2" style="border-right:1px solid white"> {{ $products[$i+2]->product }} </span> <span class="pl-2">{{ $products[$i+2]->price }}</span> </h5>
                                        <p>
                                          <small>Posted by: {{ $products[$i+2]->author }} &nbsp; on &nbsp; {{ $products[$i+2]->created_at }}</small>
                                        </p>
                                        <p class="card-text">Description: <br> {{ $products[$i+2]->description }}</p>
                                        <p class="card-text">
                                          <small class="text-muted">
                                            <button class="btn btn-default">Edit</button>    <button class="btn btn-warning float-right">Delete</button>
                                          </small>
                                        </p>
                                    </div>
                                </div>
                              @endif

                          </div>
                        </div>    
                      </div>
                      
                  @endfor
          


                <nav aria-label="..." class="pb-5">
                  <ul class="pagination justify-content-end mb-0">
                    <li class="page-item">
                      {{ $products->links('vendor.pagination.bootstrap-4') }}
                    </li>
                  </ul>
                </nav>
{{-- -
                              <a class="page-link" href="{{ $products->previousPageUrl() }}" tabindex="-1">
                        <i class="fas fa-angle-left"></i>
                        <span class="sr-only">Previous</span>
                      </a>
                    </li>
                    <li class="page-item active">
                      <a class="page-link" href="{{ $products->onFirstPage() }}">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{ $products->url(2) }}">2 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="{{ $products->url(3) }}">3</a></li>
                    <li class="page-item">
                      <a class="page-link" href="{{ $products->nextPageUrl() }}">
                        <i class="fas fa-angle-right"></i>
                        <span class="sr-only">Next</span>
                      </a>  
  
--}}    


            <!-- Footer -->
            <footer class="footer">
                <div class="row align-items-center justify-content-xl-between">
                    <div class="col-xl-6">
                    <div class="copyright text-center text-xl-left text-muted">
                        &copy; 2018 <a href="https://www.motik.com.ng" class="font-weight-bold ml-1" target="_blank">Motik Dev</a>
                    </div>
                    </div>
                    <div class="col-xl-6">
                    <ul class="nav nav-footer justify-content-center justify-content-xl-end">
                        <li class="nav-item">
                        <a href="https://www.motik.com.ng" class="nav-link" target="_blank">Motik Dev</a>
                        </li>
                        <li class="nav-item">
                        <a href="https://www.motik.com.ng/aboutus" class="nav-link" target="_blank">About Us</a>
                        </li>
                        <li class="nav-item">
                        <a href="http://www.motik.com.ng/blog" class="nav-link" target="_blank">Blog</a>
                        </li>
                    </ul>
                    </div>
                </div>
            </footer>
        </div>
@endsection
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
                {{-- <div class="row">
                  <div class="col">
                    <div class="card">
                      <div class="card-header text-center">
                          <button type="button" class="btn btn-success btn-lg">Orders</button>
                          <button type="button" class="btn btn-info btn-lg">Comments</button>
                          <button type="button" class="btn btn-primary btn-lg">Reviews</button>
                          <button type="button" class="btn btn-dark btn-lg">Signups</button>
                      </div>
                    </div>
                  </div>
                </div> --}}


                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-header text-center">
                                <h1 class="text-primary">Comments</h1>
                                {{-- <h1 class="text-primary">Comments, Reviews and Signups</h1> --}}
                            </div>
                            <div class="table-responsive">
                                    <table class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                        <tr>
                                            <th scope="col">Ref No</th>
                                            <th scope="col">Customer's Name</th>
                                            <th scope="col">Comment</th>
                                            <th scope="col">Product</th>
                                            <th scope="col">Date</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                          @foreach ($user->notifications()->paginate(10) as $i => $notification)
                                            @if ( ($notification->type == 'App\Notifications\Comments') )
                                              <tr>
                                                <th scope="row">
                                                    {{ $notification->data[0]['id'] }}
                                                </th>
                                                <td>
                                                    {{ $notification->data[0]['userName'] }}
                                                </td>
                                                <td>
                                                <span class="badge badge-dot mr-4">
                                                    {{ $notification->data[0]['body'] }}
                                                </span>
                                                </td>
                                                <td>
                                                    <a href="{{ route('details', ['id' => $notification->data[0]['productID']]) }}">
                                                        {{ $product[$i] }}
                                                    </a>
                                                </td>
                                                <td class="text-right">
                                                    {{ $notification->data[0]['created_at'] }}
                                                </td>
                                              </tr>
                                            @endif

                                          @endforeach

                                          
                                        </tbody>
                                    </table>
                                </div>
                        </div>
                        <br><br>
                        <nav aria-label="..." class="pb-5">
                          <ul class="pagination justify-content-end mb-0">
                            <li class="page-item">
                                {{$user->notifications()->paginate(10)->links('vendor.pagination.bootstrap-4')}}
                            </li>
                          </ul>
                        </nav>
                    </div>
                </div>




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
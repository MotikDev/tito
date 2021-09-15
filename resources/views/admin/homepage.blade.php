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
                    @include('admin.messages')
                  </div>
                </div>
            </div>





















            <div class="container-fluid mt--7">
                <!-- Table -->
                <div class="row">
                    <div class="col">
                        <div class="card shadow">
                            <div class="card-header border-0">
                            <h1 class="mb-0">Home Page Fixed Contents</h1>
                            </div>

                            <hr>
                            <form class="px-5" action="{{ route('userhome') }}" method="POST" enctype="multipart/form-data">
                              {{ csrf_field() }}
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="sliderPic1" name="sliderPic1">
                                    <label class="custom-file-label" for="sliderPic1">Choose picture for the first slider background</label>
                                </div>
                                <br><br>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="sliderPic2" name="sliderPic2">
                                    <label class="custom-file-label" for="sliderPic2">Choose picture for the second slider background</label>
                                </div>
                                <br><br>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="sliderPic3" name="sliderPic3">
                                    <label class="custom-file-label" for="sliderPic3">Choose picture for the third slider background</label>
                                </div>
                                <br><br>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="sliderPic4" name="sliderPic4">
                                    <label class="custom-file-label" for="sliderPic4">Choose picture for the fourth slider background</label>
                                </div>
                                <br><br>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="sliderPic5" name="sliderPic5">
                                    <label class="custom-file-label" for="sliderPic5">Choose picture for the fifth slider background</label>
                                </div>
                                <br><br>
                                <div class="form-group">
                                  <input type="text" name="sliderContent1" class="form-control" id="sliderContent1" value="{{ $pages[5]->content }}">
                                </div>
                                <div class="form-group">
                                  <input type="text" name="sliderContent2" class="form-control" id="sliderContent2" value="{{ $pages[6]->content }}">
                                </div>
                                <div class="form-group">
                                  <input type="text" name="sliderContentBtn" class="form-control" id="sliderContentBtn" value="{{ $pages[7]->content }}">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="firstSection1" class="form-control" id="firstSection1" value="{{ $pages[8]->content }}">
                                </div>

                                <div class="form-group">
                                    <input type="text" name="firstSection2" id="firstSection2" class="form-control" value="{{ $pages[9]->content }}">
                                </div>

                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="firstBg" name="firstBg">
                                    <label class="custom-file-label" for="firstBg">Choose picture for discounted product</label>
                                </div>

                                <div class="form-group pt-4">
                                    <input type="text" name="secondHeading" id="secondHeading" class="form-control" value="{{ $pages[11]->content }}">
                                </div>

                                <div class="form-group">
                                    <input type="text" name="secondSection1" id="secondSection1" class="form-control" value="{{ $pages[12]->content }}">
                                </div>
                                
                                <div class="form-group">
                                    <input type="text" name="secondSection2" id="secondSection2" class="form-control" value="{{ $pages[13]->content }}">
                                </div>

                                <div class="form-group">
                                    <input type="text" name="secondSection3" id="secondSection3" class="form-control" value="{{ $pages[14]->content }}"> 
                                </div>

                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" id="secondBg" name="secondBg">
                                  <label class="custom-file-label" for="secondBg">Choose picture for the last big background picture.</label>
                                </div><br><br>

                                <div class="form-group">
                                    <input type="text" name="thirdSection" id="thirdSection" class="form-control" value="{{ $pages[16]->content }}">
                                </div>
                                
                                <button type="submit" class="btn btn-primary mb-5 float-md-right">Submit</button>
                            </form>




                        </div>
                    </div>
                </div>
                <!-- Dark table -->






































                
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
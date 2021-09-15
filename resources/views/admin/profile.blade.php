@extends('admin.temp')

@section('content')
        <!-- Header -->
        <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url(../img/logo.jpg); background-size: cover; background-position: center top;">
            <!-- Mask -->
            <span class="mask bg-gradient-default opacity-8"></span>
            <!-- Header container -->
            <div class="container-fluid d-flex align-items-center">
              <div class="row">
                <div class="col-lg-7 col-md-10">
                  <h1 class="display-2 text-white">Hello Admin</h1>
                  <p class="text-white mt-0 mb-5">This is your profile page. You can see the progress you've made with your work and manage your projects or assigned tasks</p>
                  <a href="#!" class="btn btn-info">Edit profile</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Page content -->
          <div class="container-fluid mt--7">
            <div class="row">
              <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                <div class="card card-profile shadow">
                  <div class="row justify-content-center">
                    <div class="col-lg-3 order-lg-2">
                      <div class="card-profile-image">
                        <a href="#">
                          <img src="./img/logo.jpg" class="rounded-circle">
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                    <div class="d-flex justify-content-between">
                      <a href="#" class="btn btn-sm btn-info mr-4">Activity logs</a>
                      <a href="#" class="btn btn-sm btn-default float-right">Edit Picture</a>
                    </div>
                  </div>
                  <div class="card-body pt-0 pt-md-4">
                    <div class="row">
                      <div class="col">
                        <div class="card-profile-stats d-flex justify-content-center mt-md-5">

                        </div>
                      </div>
                    </div>
                    <div class="text-center">
                      <h3>
                        Full Name
                      </h3>
                      <div class="h5 font-weight-300">
                        <i class="ni location_pin mr-2"></i>Residence
                      </div>
                      <div class="h5 mt-4">
                        <i class="ni business_briefcase-24 mr-2"></i>Current Position 
                      </div>
                      <div>
                        <i class="ni education_hat mr-2"></i>Tito's Signature Collection
                      </div>
                      <hr class="my-4" />
                      <p>Bio — Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, corporis sed laudantium deserunt maxime, laborum repellat quo nemo libero enim rem quia sint minima ab est quod culpa reiciendis dolorum.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-8 order-xl-1">
                <div class="card bg-secondary shadow">
                  <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                      <div class="col-8">
                        <h3 class="mb-0">My account</h3>
                      </div>
                      <div class="col-4 text-right">
                        <a href="#!" class="btn btn-sm btn-primary">Settings</a>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <form>
                      <h6 class="heading-small text-muted mb-4">User information</h6>
                      <div class="pl-lg-4">
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label class="form-control-label" for="input-username">Username</label>
                              <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Username" value="username">
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label class="form-control-label" for="input-email">Email address</label>
                              <input type="email" id="input-email" class="form-control form-control-alternative" placeholder="email@example.com">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label class="form-control-label" for="input-first-name">First name</label>
                              <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="First name" value="first-name">
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label class="form-control-label" for="input-last-name">Last name</label>
                              <input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="Last name" value="last-name">
                            </div>
                          </div>
                        </div>
                      </div>
                      <hr class="my-4" />
                      <!-- Address -->
                      <h6 class="heading-small text-muted mb-4">Contact information</h6>
                      <div class="pl-lg-4">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label class="form-control-label" for="input-address">Address</label>
                              <input id="input-address" class="form-control form-control-alternative" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09" type="text">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="form-group">
                              <label class="form-control-label" for="input-city">City</label>
                              <input type="text" id="input-city" class="form-control form-control-alternative" placeholder="City" value="your-city">
                            </div>
                          </div>
                          <div class="col-lg-4">
                            <div class="form-group">
                              <label class="form-control-label" for="input-country">Country</label>
                              <input type="text" id="input-country" class="form-control form-control-alternative" placeholder="Country" value="Nigeria">
                            </div>
                          </div>
                          <div class="col-lg-4">
                            <div class="form-group">
                              <label class="form-control-label" for="input-country">Postal code</label>
                              <input type="number" id="input-postal-code" class="form-control form-control-alternative" placeholder="Postal code">
                            </div>
                          </div>
                        </div>
                      </div>
                      <hr class="my-4" />
                      <!-- Description -->
                      <h6 class="heading-small text-muted mb-4">About me</h6>
                      <div class="pl-lg-4">
                        <div class="form-group">
                          <label>About Me</label>
                          <textarea rows="4" class="form-control form-control-alternative" placeholder="A few words about you ...">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur vitae voluptas a delectus, ipsum ab ducimus nulla voluptatum, iste magni corrupti fuga doloremque sequi exercitationem facilis eum illum sint. Quaerat?</textarea>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
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
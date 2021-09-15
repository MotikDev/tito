@extends('admin.temp')

@section('content')
        <!-- Header -->
        <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8 mb-5">
                <div class="container-fluid">
                  <div class="header-body">

                    @include('admin.messages')


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





















            <div class="container-fluid mt--7 mb-5">

                <form class="bg-secondary p-4" method="POST" action="{{ route('role.store') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <br><br><br><br>
                    <div class="text-center header">
                      <h1>Add a new role</h1>
                    </div>
                    <hr>
                    <div class="form-group row">
                      <label for="role" class="col-sm-2 col-form-label">First Name</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="lastName" class="col-sm-2 col-form-label">Surname</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Surname">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="email" class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="password" class="col-sm-2 col-form-label">Password</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="phone" class="col-sm-2 col-form-label">Phone Number</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="house" class="col-sm-2 col-form-label">House Number</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="house" name="house" placeholder="House Number">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="street" class="col-sm-2 col-form-label">Street</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="street" name="street" placeholder="Street">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="city" class="col-sm-2 col-form-label">City/Town</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="city" name="city" placeholder="City/Town">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="state" class="col-sm-2 col-form-label">State</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="state" name="state" placeholder="State">
                      </div>
                    </div>


                    <fieldset class="form-group">
                      <div class="row">
                        <legend class="col-form-label col-sm-2 pt-0">Role</legend>
                        <div class="col-sm-10">
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="role" id="gridRadios1" value="admin" checked>
                            <label class="form-check-label" for="gridRadios1">
                              Admin
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="role" id="gridRadios2" value="editor">
                            <label class="form-check-label" for="gridRadios2">
                              Editor
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="role" id="gridRadios3" value="author">
                            <label class="form-check-label" for="gridRadios3">
                              Author
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="role" id="gridRadios3" value="contributor" checked>
                            <label class="form-check-label" for="gridRadios3">
                              Contributor
                            </label>
                          </div>
                        </div>
                      </div>
                    </fieldset>
                    <div class="form-group row">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="picture" id="picture">
                          <label class="custom-file-label" for="customFile">Upload a picture</label>
                        </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-10 d-flex">
                        <button type="submit" class="btn btn-primary mx-auto">Add Role</button>
                      </div>
                    </div>
                  </form>



                  <br><br>

                <!-- Table -->
                <div class="row">
                    <div class="col">
                        <div class="card shadow">
                            <div class="card-header border-0">
                            <h3 class="mb-0">Admin Roles</h3>
                            </div>
                            <div class="table-responsive">
                                <table class="table align-items-center table-flush">
                                    <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Role</th>
                                        <th scope="col">Posts</th>
                                        <th scope="col">Picture</th>
                                        <th scope="col">Comments/Reply</th>
                                        <th scope="col"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                      @foreach ($roles as $role)
                                        <tr>
                                          <th scope="row">
                                          <div class="media align-items-center">
                                              <div class="media-body">
                                              <span class="mb-0 text-sm">{{ $role->firstName." ".$role->lastName }}</span>
                                              </div>
                                          </div>
                                          </th>
                                          <td>
                                              {{ $role->role }}
                                          </td>
                                          <td>
                                          <span class="badge badge-dot mr-4">
                                              NA
                                          </span>
                                          </td>
                                          <td>
                                          <div class="avatar-group">
                                              <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Ryan Tompson">
                                              <img alt="Image placeholder" src="{{ asset("storage/adminImages/$role->picture") }}" class="rounded-circle">
                                              </a>
                                          </div>
                                          </td>
                                          <td>
                                          <div class="d-flex align-items-center">
                                              <div>
                                                  NA
                                              </div>
                                          </div>
                                          </td>
                                          <td class="text-right">
                                          <div class="dropdown">
                                              <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                              <i class="fas fa-ellipsis-v"></i>
                                              </a>
                                              <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                  <a class="dropdown-item" href="#">Edit</a>
                                                  <a class="dropdown-item" href="#">Delete</a>
                                              </div>
                                          </div>
                                          </td>
                                        </tr>
                                      @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer py-4">
                                <nav aria-label="...">
                                    <ul class="pagination justify-content-end mb-0">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1">
                                        <i class="fas fa-angle-left"></i>
                                        <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item active">
                                        <a class="page-link" href="#">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">
                                        <i class="fas fa-angle-right"></i>
                                        <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Table Divider -->
                


            <!-- Footer -->
            <footer class="footer">
                <div class="row align-items-center justify-content-xl-between">
                    <div class="col-xl-6">
                    <div class="copyright text-center text-xl-left text-muted">
                        &copy; {{ date("Y") }} <a href="https://www.motik.com.ng" class="font-weight-bold ml-1" target="_blank">Motik Dev</a>
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
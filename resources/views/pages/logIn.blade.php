@extends('pages.temp')

@section('content')
    <div class="jumbotron" id="firstJumbotron">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md">
                        <h3>Log In</h3>
                        <h6 class="text-muted">
                            
                        </h6>
                    </div>
                    <div class="col-12 col-md"></div>
                    <div class="col-12 col-md">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class=" text-muted">Home</a></li>
                            <li class="breadcrumb-item"><a href="#" class=" text-muted">Product Checkout</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    <br>
    <br>

    





          <!-- Page content -->
          <div class="container mt--8 pb-5">
            <div class="row justify-content-center">
              <div class="col-lg-5 col-md-7">
                <div class="card bg-secondary shadow border-0">
                  <div class="card-header bg-transparent pb-3">
                    <div class="text-white text-center mt-2 mb-3 display-4"> <strong> Sign in</strong></div>
                  </div>
                  <div class="card-body px-lg-5 py-lg-5">
                    <div class="text-center text-muted mb-4">
                    </div>
                    <form role="form" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}


                      <div class="form-group mb-3">
                        <div class="input-group input-group-alternative">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                          </div>
                          <input class="form-control" placeholder="Email" type="email" name="email">

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                    
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group input-group-alternative {{ $errors->has('password') ? ' has-error' : '' }}">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                          </div>
                          <input class="form-control" placeholder="Password" type="password" name="password">
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                      </div>
                      <div class="custom-control custom-control-alternative custom-checkbox">
                        <input class="" id="customCheckLogin" type="checkbox">
                        <label class="" for="customCheckLogin">
                          <span class="text-white" {{ old('remember') ? 'checked' : '' }}>Remember me</span>
                        </label>
                      </div>
                      <div class="ml-4 text-light">
                          <small>
                            Don't have an account? Register 
                            <a href="{{ route('checkout') }}" >here</a>
                          </small>
                      </div>
                      <div class="text-center">
                        <button type="submit" class="btn btn-primary my-4">Sign in</button>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-6">
                    <a href="{{ route('password.request') }}" class="text-light"><small>Forgot password?</small></a>
                  </div>
                  <div class="col-6 text-right">
                    <a href="#" class="text-light"><small></small></a>
                  </div>
                </div>
              </div>
            </div>
          </div>














@endsection
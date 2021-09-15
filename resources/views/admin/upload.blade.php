@extends('admin.temp')

@section('content')

<script type="text/javascript" src="{{ asset('js/jquery-3.4.1.slim.min.js') }}"></script>
        <!-- Header -->
        <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
                <div class="container-fluid">
                  <div class="header-body">
                    <div class="row">
                      <div class="col">
                        @include('admin.messages')
                      </div>
                    </div>
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
                <div class="row">
                    <div class="col">
                        <div class="card shadow">
                            <div class="card-header border-0">
                            <h1 class="mb-0">Upload Product</h1>
                            </div>

                            <hr>
                            <form class="px-5" action="{{ route('adminproduct.store') }}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="product">Product Name or Title</label>
                                    <input type="text" class="form-control" id="product" name="product" placeholder="Name or title for the product" required>
                                </div>
                                <div class="form-group">
                                    <label for="productBrand">Brand</label>
                                    <input type="text" class="form-control" id="productBrand" name="productBrand" placeholder="The brand of the product." required>
                                </div>
                                <div class="form-group">
                                    <label for="productPrice">Price</label>
                                    <input type="number" class="form-control" id="productPrice" name="productPrice" value="10000" placeholder="Product price" required>
                                </div>
                                <div class="form-group">
                                    <label for="productDiscount">Discount</label>
                                    <input type="number" class="form-control" id="productDiscount" name="productDiscount" value="500" placeholder="Product discount" required>
                                </div>
                                <div class="form-group row">
                                  <label for="category" class="col-auto">Category: &nbsp;&nbsp;</label>
                                  <select name="category" class="form-control col-6" id="category" required>
                                    <option value="" class="form-control col-6" id="">Select a category</option>
                                    <option value="bags" class="form-control col-6" id="bags">Bags</option>
                                    <option value="shoes" class="form-control col-6" id="shoes">Shoes</option>
                                    <option value="clothings" class="form-control col-6" id="clothings">Clothings</option>
                                    <option value="underwears" class="form-control col-6" id="underwears">Underwears</option>
                                    <option value="jewelries and costumes" class="form-control col-6" id="jewelries">Jewelries and Custumes</option>
                                  </select>
                                </div>
                                <div class="form-group row">
                                    <label for="subCategory" class="col-auto">Sub-category: &nbsp;&nbsp;</label>
                                    <select name="subCategory" class="form-control col-5" id="subCategory" required>
                                      
                                    </select>
                                  </div>
                                <div class="form-group">
                                  <label for="productSex">Sex: &nbsp; &nbsp;</label>
                                  <input type="radio" name="sex" id="male" value="male"> &nbsp; Male &nbsp; &nbsp;
                                  <input type="radio" name="sex" id="female" value="female"> &nbsp; Female &nbsp; &nbsp;
                                  <input type="radio" name="sex" id="both" value="both"> &nbsp; Both 
                                </div>
                                <div class="form-group">
                                    <label>Size</label>
                                    <div class="row">
                                      <div class="col-auto">
                                          <input type="text" class="form-control" id="productHeight" name="productHeight" placeholder="Height i.e. 35 cm" required>
                                          <br class="d-md-none">
                                      </div>
                                      <div class="col-auto">
                                          <input type="text" class="form-control" id="productWidth" name="productWidth" placeholder="Width i.e. 35 cm" required>
                                          <br class="d-md-none">
                                      </div>
                                      <div class="col-auto">
                                          <input type="text" class="form-control" id="productDepth" name="productDepth" placeholder="Depth i.e. 35 cm" required>
                                      </div>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label for="productWeight">Weight</label>
                                    <div class="row">
                                      <div class="col-auto">
                                        <input type="number" class="form-control" id="productWeight" name="productWeight" value="200" required>
                                        <br class="d-md-none">
                                      </div>
                                      <div class="col-auto">
                                        <select name="measurement" id="measurement" class="form-control" required>
                                          <option value="null" disabled selected>Select Measurement</option>
                                          <option value="gram">g</option>
                                          <option value="kilogram">kg</option>
                                        </select>
                                      </div>
                                    </div>
                                </div>

                                <label for="custom-file">Main Picture</label>
                                <div class="custom-file mb-4">
                                  <input type="file" class="custom-file-input" id="frontPicture" name="frontPicture" required>
                                  <label class="custom-file-label" for="productPicture">Choose the main picture...</label>
                                </div>

                                <label for="custom-file">Second (side) Picture</label>
                                <div class="custom-file mb-4">
                                  <input type="file" class="custom-file-input" id="picture2" name="picture2" required>
                                  <label class="custom-file-label" for="productPicture">Choose another picture...</label>
                                </div>

                                <label for="custom-file">Third (rear) Picture</label>
                                <div class="custom-file mb-4">
                                  <input type="file" class="custom-file-input" id="picture3" name="picture3" required>
                                  <label class="custom-file-label" for="productPicture">Choose another picture...</label>
                                </div>

                                
                                <div class="form-group">
                                    <label for="productKeywords">Keywords</label>
                                    <input type="text" class="form-control" id="productKeywords" name="productKeywords" maxlength="120" placeholder="Enter maximum of ten keywords for this product, seperate each keyword with a comma" required>
                                </div>

                                <div class="form-group">
                                  <label for="productHistory">History or Story</label>
                                  <textarea name="productHistory" id="productHistory" class="form-control" maxlength="80" cols="30" rows="5" placeholder="Brief history or story about the product" required></textarea>
                                </div>
                                <div class="form-group">
                                  <label for="productDescription">Description</label>
                                  <textarea name="productDescription" class="form-control" id="productDescription" maxlength="200" cols="30" rows="10" placeholder="Description of the product that shows up when an individual product is clicked." required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary mb-5 float-md-right">Submit</button>
                            </form>




                        </div>
                    </div>
                </div>
                <!-- Dark table -->












<script>
    function showSubCategory(){
      var categor = document.getElementById("category").value;
      var target = document.getElementById("subCategory");
      var param = "category="+categor;
      var url = "subcategory";

      console.log(param);
      


      var xhr = new XMLHttpRequest();
      xhr.open('GET', url +'?'+param, true);
      xhr.onreadystatechange = function (data){

        if (xhr.readyState == 2){
          target.innerHTML = "2 Loading";
        }
        if (xhr.readyState == 4 && xhr.status == 200){          
          
          $('#subCategory').empty();
          target = JSON.parse(xhr.responseText);


          $('#subCategory').append('<option value="0" disabled="true" selected="true">Select Sub-category</option>');

          $.each(target, function(index, subCategoryObj){
            $('#subCategory').append('<option value="' + subCategoryObj + '">' + subCategoryObj + '</option>');
          })

        }

      }

      xhr.send();
    }

  var list = document.getElementById("category");
  list.addEventListener("change", showSubCategory);
</script>







                
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

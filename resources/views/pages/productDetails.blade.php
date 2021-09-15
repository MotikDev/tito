@extends('pages.temp')

@section('style')

<style>
    .myAshBg {
        background-color: #e9ecef;
    }

    .nav-pills#pills-tab {
        padding: 15px;
    }

    #pills-tab .nav-item {
        background-color: white;
    }

    
    .nav-link {
        color: black;
    }

    .nav-link:hover {
        color: black;
    }
    
    .nav-pills .nav-link.active,.nav-pills .show>.nav-link {
        background-color: #f58a42;
    }

    .textColor {
        color: #f58a42;
    }
    #cartBtn:hover {
        border-color:#f58a42;
    }
    #loveBtn {
        background-color: #d6d8db;
        width: 2.3rem;
        height: 2.3rem;
        -webkit-transition: width 2s, height 2s; /* For Safari 3.1 to 6.0 */
        transition: width 1s, height 1s;
    }
    #loveBtn:hover {
        background-color: whitesmoke;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        width: 2.4rem;
        height: 2.4rem;
    }
    

    /* For Safari 3.1 to 6.0 */
    #loveBtn {-webkit-transition-timing-function: ease;}
        
    /* Standard syntax */
    #loveBtn {transition-timing-function: ease;}



    .objectImg {
        height: 90px;
        width: 90px;
        border-radius: 100px;
    }

    .curvedBtn {
        border-radius: 100px;
    }
</style> 
@endsection
@section('content')
    <div class="jumbotron" id="firstJumbotron">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md">
                    <h3>{{ $thisP->subCategory }}</h3>
                    <h6 class="text-muted">{{ $home[17]->content }}</h6>
                </div>
                <div class="col-12 col-md"></div>
                <div class="col-12 col-md">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class=" text-muted">Home</a></li>
                        <li class="breadcrumb-item"><a href="#" class=" text-muted">Product Details</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>



    <div class="container my-5">
        <div class="row my-5">
            <div class="col-sm-12 col-md-6">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-interval="5000">
                        <img src="{{ asset('storage/'.$thisP->frontPicture) }}" height="550px" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item" data-interval="5000">
                        <img src="{{ asset('storage/'.$thisP->picture2) }}" height="550px" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item" data-interval="5000">
                        <img src="{{ asset('storage/'.$thisP->picture3) }}" height="550px" class="d-block w-100" alt="...">
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
            </div> <!--Column-->
            <div class="col-sm-12 col-md-6 p-4">
                <h3 class="text-muted">
                    {{ $thisP->product }}
                </h3>
                <h3 class="textColor">
                    ₦ {{ $thisP->price }}
                </h3>
                <br>
                <h6 class="text-muted ">
                    <span class="mr-5"> Category </span> <span class="textColor"> : {{ $thisP->category }} </span>
                </h6>
                <h6 class="text-muted ">
                    <span class="mr-4"> Availability </span> <span class=""> : In Stock </span>
                </h6>
                <br>
                <hr>

                <p class="text-muted">
                    {{ $thisP->story }}
                </p>

                <br><br><br>

                {{-- <h6 class="text-muted form-inline">
                    <span class="mr-2">Quantity:</span> 
                    <select name="quantity" id="quantity" class="form-control w-25">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </h6> --}}
                <br>
                <button class="btn btn-button btn-sm px-5 py-2 myColor text-uppercase" id="{{ $thisP->id }}">Add to cart</button>
                &nbsp;
                <button class="btn btn-button btn-sm px-2 py-2" id="loveBtn"><i class="fal fa-heart"></i></button>
                <br><div id="answer"></div>
            </div> <!--Column-->
        </div> <!--Row-->

        <div class="row">
            <div class="col">
                <div class="border">
                    <ul class="nav nav-pills mb-3 justify-content-center myAshBg" id="pills-tab" role="tablist">
                        <li class="nav-item ml-3  mb-2 mb-md-0">
                            <a class="nav-link px-5 active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-home" aria-selected="true">Description</a>
                        </li>
                        <li class="nav-item ml-3 mb-2 mb-md-0">
                            <a class="nav-link px-5" id="pills-specification-tab" data-toggle="pill" href="#pills-specification" role="tab" aria-controls="pills-profile" aria-selected="false">Specification</a>
                        </li>
                        <li class="nav-item ml-3  mb-2 mb-md-0">
                            <a class="nav-link px-5" id="pills-comments-tab" data-toggle="pill" href="#pills-comments" role="tab" aria-controls="pills-contact" aria-selected="false">Comments</a>
                        </li>
                        <li class="nav-item ml-3  mb-2 mb-md-0">
                            <a class="nav-link px-5" id="pills-reviews-tab" data-toggle="pill" href="#pills-reviews" role="tab" aria-controls="pills-contact" aria-selected="false">Reviews</a>
                        </li>
                    </ul>
                    <div class="tab-content p-4 text-muted" id="pills-tabContent">
                        <div class="tab-pane fade show active " id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
                            Description <br>
                            {{ $thisP->description }}
                        </div>
                        <div class="tab-pane fade" id="pills-specification" role="tabpanel" aria-labelledby="pills-specification-tab">
                            <div class="container text-muted">
                                <div class="row">
                                    <div class="col-6">Width</div>
                                    <div class="col-6">{{ $thisP->width }}</div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-6">Height</div>
                                    <div class="col-6">{{ $thisP->height }}</div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-6">Depth</div>
                                    <div class="col-6">{{ $thisP->depth }}</div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-6">Weight</div>
                                    <div class="col-6">{{ $thisP->weight }} gm</div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-6">Quality Checking</div>
                                    <div class="col-6">Yes</div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-comments" role="tabpanel" aria-labelledby="pills-comments-tab">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-md-6">

                                        <div class="container">
                                            <div class="row">
                                                <div class="col-3 col-md-3">
                                                    <img src="{{ asset('img/s-product-1.jpg') }}" class="ml-n3 objectImg" alt="" srcset="">
                                                </div>
                                                <div class="col-7 col-md-7">
                                                    <h4>
                                                        Blake Ruiz
                                                    </h4>
                                                    <small>12th Feb, 2017 at 05:56 pm</small>
                                                </div>
                                                <div class="col-2 col-md-2">
                                                    <button class="btn btn-button float-right myColor curvedBtn">Reply</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab quo aliquam amet natus facilis distinctio culpa recusandae doloribus deserunt odio sint enim nam illo, officia nesciunt at maiores accusantium magnam.
                                                </div>
                                            </div>
                                        </div>
                                        @foreach ($comments as $comment)
                                        <br>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-3 col-md-3">
                                                        <img src="{{ asset('img/s-product-1.jpg') }}" class="ml-n3 objectImg" alt="" srcset="">
                                                    </div>
                                                    <div class="col-7 col-md-7">
                                                        <h4>
                                                            {{ $comment->userName }}
                                                        </h4>
                                                        <small>{{ $comment->created_at }}</small>
                                                    </div>
                                                    <div class="col-2 col-md-2">
                                                        <button class="btn btn-button float-right myColor curvedBtn">Reply</button>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        {{ $comment->body }}
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                        <br><br>
                                    </div>


                                    <div class="col-12 col-md-6">
                                        <form action="{{ route('storecomment', ['id' => $thisP->id ]) }}" method="POST">
                                            {{ csrf_field() }}
                                            <h3 class="text-dark">Leave a commment</h3>
                                            <br>
                                            {{-- <div class="form-group row">
                                              <label for="addName" class="col-sm-2 col-form-label">Name:</label>
                                                <div class="col-sm-10">
                                                    <input type="text" id="addName" name="addName" class="form-control" aria-describedby="passwordHelpInline" placeholder="Your full name">
                                                </div>
                                                        
                                            </div>
                                            <div class="form-group row">
                                                <label for="addEmail" class="col-sm-2 col-form-label">Email:</label>
                                                <div class="col-sm-10">
                                                    <input type="email" id="addEmail" class="form-control" aria-describedby="passwordHelpInline" placeholder="Email Address">
                                                </div>
                                                        
                                            </div>
                                            <div class="form-group row">
                                                <label for="addPhone" class="col-sm-2 col-form-label">Phone:</label>
                                                <div class="col-sm-10">
                                                    <input type="email" id="addPhone" class="form-control" aria-describedby="passwordHelpInline" placeholder="Phone Number">
                                                </div>
                                                        
                                            </div> --}}
                                            <div class="form-group row">
                                                <label for="addMessage" class="col-sm-2 col-form-label">Message:</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" placeholder="Message" id="addMessage" maxlength="200" name="addMessage" rows="3"></textarea>
                                                    <br>
                                                    <div class="text-right">
                                                        <button class="btn btn-button myColor mx-auto" type="submit">Submit Now</button>
                                                    </div>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div> <!--Comments-->
                        <div class="tab-pane fade" id="pills-reviews" role="tabpanel" aria-labelledby="pills-reviews-tab">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                            @foreach ($reviews as $review)
                                            <br>
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-3 col-md-3">
                                                            <img src="{{ asset('img/s-product-1.jpg') }}" class="ml-n3 objectImg" alt="" srcset="">
                                                        </div>
                                                        <div class="col-7 col-md-7">
                                                            <h4>
                                                                {{ $review->userName }}
                                                            </h4>
                                                            <small class="reviewRating">{{ $review->rating }}</small>
                                                        </div>
                                                        <div class="col-2 col-md-2">
                                                            <button class="btn btn-button float-right myColor curvedBtn">Reply</button>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            {{ $review->body }}
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <form action="{{ route('storereview', ['id' => $thisP->id ]) }}" method="POST">
                                            {{ csrf_field() }}
                                            <h4 class="text-dark">Add a Review</h4>
                                            <h6>Your Rating: &nbsp; &nbsp; <span id="1" data-index="1" class="starRating"><i class="fal fa-star"></i></span><span id="2" data-index="2" class="starRating"><i class="fal fa-star"></i></span><span id="3" data-index="3" class="starRating"><i class="fal fa-star"></i></span><span id="4" data-index="4" class="starRating"><i class="fal fa-star"></i></span><span id="5" data-index="5" class="starRating"><i class="fal fa-star"></i></span>   &nbsp;&nbsp; Outstanding</h6>
                                            <br><br>
                                            <input type="hidden" name="userRating" id="userRating" value="">
                                            {{-- <div class="form-group row">
                                                <label for="addName" class="col-sm-2 col-form-label">Name:</label>
                                                <div class="col-sm-10">
                                                    <input type="text" id="addName" class="form-control" aria-describedby="passwordHelpInline" placeholder="Your full name">
                                                </div>
                                                        
                                            </div>
                                            <div class="form-group row">
                                                <label for="addEmail" class="col-sm-2 col-form-label">Email:</label>
                                                <div class="col-sm-10">
                                                    <input type="email" id="addEmail" class="form-control" aria-describedby="passwordHelpInline" placeholder="Email Address">
                                                </div>
                                                        
                                            </div>
                                            <div class="form-group row">
                                                <label for="addPhone" class="col-sm-2 col-form-label">Phone:</label>
                                                <div class="col-sm-10">
                                                    <input type="email" id="addPhone" class="form-control" aria-describedby="passwordHelpInline" placeholder="Phone Number">
                                                </div>
                                                        
                                            </div> --}}
                                            <div class="form-group row">
                                                <label for="addReview" class="col-sm-2 col-form-label">Review:</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" name="addReview" placeholder="Review" id="addReview" rows="3"></textarea>
                                                    <br>
                                                    <div class="text-right">
                                                        <button class="btn btn-button myColor mx-auto" type="submit">Submit Now</button>
                                                    </div>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div> <!--Reviews-->
                    </div> <!--Div for collapsing content-->
                </div> <!--Border-->
            </div> <!--Column-->

        </div> <!--Row-->


    </div>
        <script>
            function addNewItem() {
                var id = document.getElementById("{{ $thisP->id }}").getAttribute("id");
                var target = document.getElementById("answer");
                var token = $('meta[name="csrf-token"]').attr('content');
                var qty = 1;
                var param = "id="+id+"&qty="+qty;
                var url = "{{ route('cartitems') }}";

                console.log(param);

                var xhr = new XMLHttpRequest();
                xhr.open('POST', url, true);
                xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhr.setRequestHeader("X-Requested-With", "XMLHttpRequest");
                xhr.setRequestHeader("X-CSRF-TOKEN", token);
                xhr.onreadystatechange = function (data){

                    if (xhr.readyState == 2){
                        console.log("Sent");
                    }
                    if (xhr.readyState == 3){
                        console.log("In progress");
                        console.log(data);
                    }
                    if (xhr.readyState == 4 && xhr.status == 200){          
                                      
                    var cartSm = document.getElementById("cartSm");         
                    cartSm.innerHTML = xhr.responseText;
                    var cartMd = document.getElementById("cartMd");         
                    cartMd.innerHTML = xhr.responseText;
                    }
                }
                xhr.send(param);
            }
            var newCartItem = document.getElementById("{{ $thisP->id }}");
            newCartItem.addEventListener('click', addNewItem);





            //ADD REVIEWS RATINGS
            function listStars() {
                rating = [];
                rating = document.getElementsByClassName("reviewRating");
                console.log(rating);
                for (var i = 0; i < rating.length; i++) {
                    ratingElement = rating.item(i).innerHTML;    
                    // console.log(ratingElement);               
                    rating.item(i).innerHTML = generateRating(ratingElement);                   
                }
                function generateRating(ratingElement) {
                    var starArray = [];
                    for (var i = 1; i < 6; i++) {
                        if (i <= ratingElement) {
                            starArray[starArray.length] = "<span style='color:gold'><i class='fal fa-star'></i></span>"
                        }
                        else{
                            starArray[starArray.length] = "<span style='color:grey'><i class='fal fa-star'></i></span>"
                        }                    
                    }

                    starArray = starArray.join("");

                    return starArray;                    
                }




            }
            window.addEventListener('load', listStars)
        </script>
        <script>
            function rating(){
                var index = this.getAttribute("data-index");
                var id = this.getAttribute("id");

                if (document.getElementById(1).style.color = "gold") {
                    for (var count = 1;count <= 5; count++)
                    {
                        document.getElementById(count).style.color = "grey";
                    }                    
                }
                for (var count = 1;count <= index; count++)
                {
                    document.getElementById(count).style.color = "gold";
                }
                var userRating = index;

                document.getElementById("userRating").value = userRating;
                
            }
            var star = document.getElementsByClassName("starRating");
            for (i = 0; i < star.length; i++) {
                star.item(i).addEventListener('click', rating);
            }
        </script>
@endsection


{{-- @section('script')
<button id="myBtn" class="btn btn-default">Toast</button>
<div class="toast">
        <div class="toast-header">
          Toast Header
        </div>
        <div class="toast-body">
          Some text inside the toast body
        </div>
      </div>
    </div>
    
    <script>
    $(document).ready(function(){
      $("#myBtn").click(function(){
        $('.toast').toast('show');
      });
    });
    </script>

    <script>
    $(document).ready(function(){
        $(".show-toast").click(function(){
            $("#myToast").toast({ delay: 3000 });
            $("#myToast").toast('show');
        }); 
    });
    </script>
@endsection --}}
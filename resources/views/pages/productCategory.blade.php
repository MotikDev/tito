@extends('pages.temp')

@section('style')

<style>
    @media (max-width: 768px) {
        #firstJumbotron {
            z-index:  10px;
            position: relative;
            margin-top: -20px;
        }
    }
    @media (min-width: 992px) {
        .breadcrumb {
            padding-left: 120px;
        }
    }

    #displayPrice {
        border: none
    }

    .sideBar {
        color: black;
    }

    .sideBar:hover {
        color: #f58a42;
    }
</style>
        
@endsection

@section('content')
    <div class="jumbotron" id="firstJumbotron">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md">
                    <h3>{{ $subcat[0]->subCategory }}</h3>
                    <h6 class="text-muted">Personalized description of the category</h6>
                </div>
                <div class="col-12 col-md"></div>
                <div class="col-12 col-md">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class=" text-muted" >All</a></li>
                        <li class="breadcrumb-item"><a href="#" class=" text-muted">Male</a></li>
                        <li class="breadcrumb-item"><a href="#" class=" text-muted">Female</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            @include('components.sideBar')
            <div class="col-12 col-md-9">
                <div class="p-3 mb-2 text-dark" style="background-color:#d6d8db">
                    <div class="form-inline">
                        <div class="btn-group mb-2">
                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Price
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">
                                    Min: <input type="text" name="minP" id="minP">
                                </a>
                                <a class="dropdown-item" href="#">
                                    Max: <input type="text" name="maxP" id="maxP">
                                </a>
                            </div>
                        </div>
                        <select name="category" id="category" class="form-control ml-md-3 col-md-3 mb-2">
                            <option value="" disabled selected>Category</option>
                            <option class="cate" value="bags">Bags</option>
                            <option class="cate" value="shoes">Shoes</option>
                            <option class="cate" value="clothings">Clothings</option>
                            <option class="cate" value="underwears">Underwears</option>
                            <option class="cate" value="jewelries">Jewelries and Custumes</option>
                        </select>
                        <select name="brand" id="brand" class="form-control col-md-3 mb-2 ml-md-3">
                            <option value="" disabled selected>Select Brand </option>
                            <option class="brand" value="Gucci">Gucci</option>
                            <option class="brand" value="Prada">Prada</option>
                            <option class="brand" value="Local">Local</option>
                            <option class="brand" value="D&G">D&G</option>
                            <option class="brand" value="Mama">Mama</option>
                            <option class="brand" value="Victorial'sSecret">Victorial's Secret</option>
                        </select>
                        <select name="sex" id="sex" class="form-control col-md-3 mb-2 ml-md-3">
                            <option value="" disabled selected>Sex</option>
                            <option class="sex" value="male">Male</option>
                            <option class="sex" value="female">Female</option>
                            <option class="sex" value="both">Unisex</option>
                        </select>
                    </div>




                </div>
                
                {{-- -FOR LOOP START --}}
                @for ($i = 0; $i < count($subcat); $i = $i + 3)
                    <div class="row mb-5" id="sortResults">
                      <div class="col">
                          <div class="card-deck">
                              <div class="card">
                                <a href="{{ route('details', ['id' => $subcat[$i]->id]) }}">
                                    <img src="{{ asset("storage/".$subcat[$i]->frontPicture."") }}" class="card-img-top" alt="...">
                                </a>

                                  <div class="card-body">
                                        <p class="card-text">
                                            {{ $subcat[$i]->brand }} {{ $subcat[$i]->product }}
                                        </p>
                                        <hr>
                                        <a href="https://api.whatsapp.com/send?phone=2348134673765&text=Product Details with Price" class="btn btn-default">
                                            ₦ {{ $subcat[$i]->price }} &nbsp; <img src="../img/whatsapp.png" width="20px" height="20px" class="float-right" alt="">
                                        </a>
                                  </div>
                              </div>
                              @if ($subcat[$i+1])
                                <div class="card">
                                    <a href="{{ route('details', ['id' => $subcat[$i+1]->id]) }}">
                                        <img src="{{ asset("storage/".$subcat[$i+1]->frontPicture."") }}" class="card-img-top" alt="...">
                                    </a>
                                    <div class="card-body">
                                        <p class="card-text">
                                            {{ $subcat[$i+1]->brand }} {{ $subcat[$i+1]->product }}
                                        </p>
                                        <hr>
                                        <a href="https://api.whatsapp.com/send?phone=2348134673765&text=Product Details with Price" class="btn btn-default">
                                            ₦ {{ $subcat[$i+1]->price }} &nbsp; <img src="../img/whatsapp.png" width="20px" height="20px" class="float-right" alt="">
                                        </a>
                                    </div>
                                </div>
                            @else
                            <div class="col-md-4"></div>
                            @endif

                            @if ($subcat[$i+2])
                                <div class="card">
                                    <a href="{{ route('details', ['id' => $subcat[$i+2]->id]) }}">
                                        <img src="{{ asset("storage/".$subcat[$i+2]->frontPicture."") }}" class="card-img-top" alt="...">
                                    </a>
                                    <div class="card-body">
                                        <p class="card-text">
                                            {{ $subcat[$i+2]->brand }} {{ $subcat[$i+2]->product }}
                                        </p>
                                        <hr>
                                        <a href="https://api.whatsapp.com/send?phone=2348134673765&text=Product Details with Price" class="btn btn-default">
                                            ₦ {{ $subcat[$i+2]->price }} &nbsp; <img src="../img/whatsapp.png" width="20px" height="20px" class="float-right" alt="">
                                        </a>
                                    </div>
                                </div>
                            @else
                            <div class="col-md-4"></div>
                            @endif

                          </div>
                        </div>    
                      </div>
                      
                  @endfor
                {{-- -FOR LOOP END --}}

                <nav aria-label="..." class="pb-5">
                    <ul class="pagination justify-content-end mb-0">
                      <li class="page-item">
                        {{ $subcat->links('vendor.pagination.bootstrap-4') }}
                      </li>
                    </ul>
                  </nav>


            </div>
        </div>
    </div>

@endsection


@section('script')
    <script>
        function minPr(e) {
            e.preventDefault();
            var mini = document.getElementById("minP").value;
            var maxi = document.getElementById("maxP").value;
            var category = document.getElementById("category").value;
            var brand = document.getElementById("brand").value;
            var sex = document.getElementById("sex").value;

            var params = 'mini='+mini+'&maxi='+maxi+'&category='+category+'&brand='+brand+'&sex='+sex;
            console.log(params);

            var url = "{{ route('sort') }}";
            var xhr = new XMLHttpRequest();
            xhr.open('GET', url +'?'+params, true);
            xhr.onreadystatechange = function (data){

                if (xhr.readyState == 2){
                    console.log("2 Loading");
                }
                if (xhr.readyState == 4 && xhr.status == 200){          
                   var result = JSON.parse(xhr.responseText);
                   console.log(result);

                    var sortings = document.getElementById("sortResults");
                    $("#sortResults").empty();
                    $('#dynamic').empty();

                    for (var i = 0; i < result.length; i+=3) {
                        second = i + 1;
                        third = i+2;

                        
                        if (result[third]) {
                                $('#sortResults').after(
                                    '<div class="row mb-5" id="dynamic">'+
                                        '<div class="col">'
                                            +'<div class="card-deck">'+
                                                '<div class="card col-md-4" id="firstElement">'
                                                    +'<a id="firstSHref" href="/details/'+result[i].id+'">'+
                                                        '<img src="../storage/'+result[i].frontPicture+'" class="card-img-top" alt="...">'
                                                    +'</a>'+

                                                    '<div class="card-body">'
                                                        +'<p class="card-text">'+
                                                            result[i].brand +" "+ result[i].product
                                                        +'</p>'+
                                                        '<hr>'+
                                                        '<a href="https://api.whatsapp.com/send?phone=2348134673765&text='+result[i].brand+' '+result[i].product+' '+'₦'+result[i].price+'" class="btn btn-default">'+
                                                            '₦' + result[i].price + '&nbsp;' + '<img src="../img/whatsapp.png" width="20px" height="20px" class="float-right" alt="">'+
                                                            '</a>'+

                                                    '</div>'+
                                                '</div>'+
                                                // if (result[second]){
                                                    '<div class="card col-md-4" id="secondElement">'
                                                        +'<a id="firstSHref" href="/details/'+result[i+1].id+'">'+
                                                            '<img src="../storage/'+result[i+1].frontPicture+'" class="card-img-top" alt="...">'
                                                        +'</a>'+

                                                        '<div class="card-body">'
                                                            +'<p class="card-text">'+
                                                                result[i+1].brand +" "+ result[i+1].product
                                                            +'</p>'+
                                                            '<hr>'+
                                                            '<a href="https://api.whatsapp.com/send?phone=2348134673765&text='+result[i+1].brand+' '+result[i+1].product+' '+'₦'+result[i+1].price+'" class="btn btn-default">'+
                                                                '₦' + result[i+1].price + '&nbsp;' + '<img src="../img/whatsapp.png" width="20px" height="20px" class="float-right" alt="">'+
                                                                '</a>'+

                                                        '</div>'+
                                                    '</div>'+
                                                // }
                                                // if (result[third]) {
                                                    '<div class="card col-md-4">'
                                                        +'<a id="firstSHref" href="/details/'+result[i+2].id+'">'+
                                                            '<img src="../storage/'+result[i+2].frontPicture+'" class="card-img-top" alt="...">'
                                                        +'</a>'+

                                                        '<div class="card-body">'
                                                            +'<p class="card-text">'+
                                                                result[i+2].brand +" "+ result[i+2].product
                                                            +'</p>'+
                                                            '<hr>'+
                                                            '<a href="https://api.whatsapp.com/send?phone=2348134673765&text='+result[i+2].brand+' '+result[i+2].product+' '+'₦'+result[i+2].price+'" class="btn btn-default">'+
                                                                '₦' + result[i+2].price + '&nbsp;' + '<img src="../img/whatsapp.png" width="20px" height="20px" class="float-right" alt="">'+
                                                                '</a>'+

                                                        '</div>'+
                                                    '</div>'+
                                                // }

                                            '</div>'+
                                        '</div>'+
                                    '</div>'
                                );
                            continue;
                            } 
                            else if (result[second]) {
                                $('#sortResults').after(
                                    '<div class="row mb-5" id="dynamic">'+
                                        '<div class="col">'
                                            +'<div class="card-deck">'+
                                                '<div class="card col-md-4" id="firstElement">'
                                                    +'<a id="firstSHref" href="/details/'+result[i].id+'">'+
                                                        '<img src="../storage/'+result[i].frontPicture+'" class="card-img-top" alt="...">'
                                                    +'</a>'+

                                                    '<div class="card-body">'
                                                        +'<p class="card-text">'+
                                                            result[i].brand +" "+ result[i].product
                                                        +'</p>'+
                                                        '<hr>'+
                                                        '<a href="https://api.whatsapp.com/send?phone=2348134673765&text='+result[i].brand+' '+result[i].product+' '+'₦'+result[i].price+'" class="btn btn-default">'+
                                                            '₦' + result[i].price + '&nbsp;' + '<img src="../img/whatsapp.png" width="20px" height="20px" class="float-right" alt="">'+
                                                            '</a>'+

                                                    '</div>'+
                                                '</div>'+
                                                    '<div class="card col-md-4" id="secondElement">'
                                                        +'<a id="firstSHref" href="/details/'+result[i+1].id+'">'+
                                                            '<img src="../storage/'+result[i+1].frontPicture+'" class="card-img-top" alt="...">'
                                                        +'</a>'+

                                                        '<div class="card-body">'
                                                            +'<p class="card-text">'+
                                                                result[i+1].brand +" "+ result[i+1].product
                                                            +'</p>'+
                                                            '<hr>'+
                                                            '<a href="https://api.whatsapp.com/send?phone=2348134673765&text='+result[i+1].brand+' '+result[i+1].product+' '+'₦'+result[i+1].price+'" class="btn btn-default">'+
                                                                '₦' + result[i+1].price + '&nbsp;' + '<img src="../img/whatsapp.png" width="20px" height="20px" class="float-right" alt="">'+
                                                                '</a>'+

                                                        '</div>'+
                                                    '</div>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'

                                );
                           continue;
                            } 
                            else {
                                $('#sortResults').after(
                                    '<div class="row mb-5" id="dynamic">'+
                                        '<div class="col">'
                                            +'<div class="card-deck">'+
                                                '<div class="card col-md-4" id="firstElement">'
                                                    +'<a id="firstSHref" href="/details/'+result[i].id+'">'+
                                                        '<img src="../storage/'+result[i].frontPicture+'" class="card-img-top" alt="...">'
                                                    +'</a>'+

                                                    '<div class="card-body">'
                                                        +'<p class="card-text">'+
                                                            result[i].brand +" "+ result[i].product
                                                        +'</p>'+
                                                        '<hr>'+
                                                        '<a href="https://api.whatsapp.com/send?phone=2348134673765&text='+result[i].brand+' '+result[i].product+' '+'₦'+result[i].price+'" class="btn btn-default">'+
                                                            '₦' + result[i].price + '&nbsp;' + '<img src="../img/whatsapp.png" width="20px" height="20px" class="float-right" alt="">'+
                                                            '</a>'+

                                                    '</div>'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'
                                );
                            }

                    }
                    
                    
                }

            }

            xhr.send();            
        }
        var minP = document.getElementById("minP");
        minP.addEventListener('keyup', minPr);

        var minP = document.getElementById("maxP");
        maxP.addEventListener('keyup', minPr);

        var categor = document.getElementById("category");
        categor.addEventListener('change', minPr);

        var bran = document.getElementById("brand");
        bran.addEventListener('change', minPr);

        var sexy = document.getElementById("sex");
        sexy.addEventListener('change', minPr);
    </script>
@endsection
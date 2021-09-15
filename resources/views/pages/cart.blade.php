@extends('pages.temp')

@section('style')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')
<div class="jumbotron" id="firstJumbotron">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md">
                <h3>Cart</h3>
                <h6 class="text-muted">
                    Very us move be blessed multiply night
                </h6>
            </div>
            <div class="col-12 col-md"></div>
            <div class="col-12 col-md">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" class=" text-muted">Home</a></li>
                    <li class="breadcrumb-item"><a href="#" class=" text-muted">Cart</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>

<form action="{{ route('checkout') }}" method="get">
        <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Price (₦)</th>
                                        <th>Quantity</th>
                                        <th>Subtotal (₦)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($items)
                                        <div class="d-none">{{ $count = -1 }}</div>
                                        
                                        @foreach ($items as $list)
                                        
                                            @foreach ($list as $key => $item)
                                                <tr>
                                                    <td><img src="{{ asset('storage/'.$item->frontPicture).''}}" height="100px" width="100px" alt="" srcset=""></td>
                                                    <td id="p{{ $item->id }}">{{ $item->price }}</td>
                                                    <td>
                                                        <select name="q{{ $item->id }}" class="quantity" id="{{ $item->id }}">
                                                            <option value="" disabled selected>0</option>
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
                                                        <div class="d-none productN">{{ $item->product }}</div>
                                                        {{-- <input type="number" width="10px" name="q{{ $item->id }}" min="1" class="quantity" id="{{ $item->id }}" value="1"> --}}
                                                    </td>
                                                    <td id="s{{ $item->id }}" class="subTotals"> </td>
                                                    <td> <button class="remove" style="background-color:transparent; border-color:transparent" id="{{ $count += 1 }}">Remove</button> </td>
                                                </tr>                            
                                            @endforeach
                                        @endforeach
                                    @else
                                        <tr>
                                            <td class="text-center">
                                                    No item found in cart.
                                            </td>
                                        </tr>
                                        
                                    @endif
            
            
                                </tbody>
                            </table>
                        </div>
            
                    </div>
                </div><!--First Row-->
                <div class="row">
                    <div class="col">
                        <hr>
                        <div class="float-md-left">
                            <br>
                            <button class="btn btn-danger px-3" id="clearCart">Clear Cart</button>
                            <br><br><br>
                        </div>
                        <div class="float-md-right display-5 bold pt-2" style="font-size:1.5em">
                                <span class="float-left mr-md-5 pr-md-5 bold">Total:</span> <span class="float-right ml-md-5 pl-md-5 bold"> ₦<span id="totalPrice">0</span> </span>
                            {{-- <br>
                            <button class="btn btn-secondary px-3">Update Cart</button>
                            <br><br><br> --}}
                        </div>
                    </div>
                </div>
                {{-- <div class="row">
                    <div class="col">
                        <div class="float-md-right">
                            <h5>
                                <span class="float-left mr-md-5 pr-md-5 bold">Total</span> <span class="float-right ml-md-5 pl-md-5 bold">N10 000</span>
                            </h5>
                            <br><br>
                        </div>
                    </div>
                </div> --}}
                <div class="row">
                    <div class="col">
                        <hr>
                        <div class="float-md-right">
                            <a href="{{ route('home') }}" class="btn btn-secondary px-3 my-2 mx-2 shadow text-uppercase" role="button">Continue shopping</a> 
                            <input type="submit" id="checkOutB" class="btn btn-button myColor px-3 my-2 mx-2 text-uppercase" value="proceed to checkout">
                            <br><br><br>
                        </div>
                    </div>
                </div>
            
            </div>
</form>


<script>
    function cartItemPrice()
    {
        var qtyId = this.getAttribute("id");
        var priceId = "p"+qtyId;
        var subId = "s"+qtyId;
        target = document.getElementById(subId);

        var qtyNum = document.getElementById(qtyId).value;
        qtyNum = parseInt(qtyNum);
        var priceVal = document.getElementById(priceId);
        priceVal = priceVal.innerHTML;
        priceVal = parseInt(priceVal);
        subVal = qtyNum * priceVal;
        target.innerHTML = subVal;


        var allSubT = document.getElementsByClassName("subTotals");
        allSubTVal = [];
        for ( var i = 0; i < allSubT.length; i++) {
            allSubTVal[allSubTVal.length] = allSubT[i].getAttribute("id");
        }

        totalVals = [];
        for (var i = 0; i < allSubTVal.length; i++) {
            totalVals[totalVals.length] = parseInt(document.getElementById(allSubTVal[i]).innerHTML);
        }




        addings = 0;
        for (var ind = 0; ind < totalVals.length; ind++) {
            addings = addings + totalVals[ind];
        }

        console.log(addings);


        var finalP = document.getElementById("totalPrice");
        finalP.innerHTML = addings;


    }
    var cartItemP = document.getElementsByClassName("quantity");
    for ( i = 0; i < cartItemP.length; i++) {
         cartItemP.item(i).addEventListener('change', cartItemPrice);
    }



    //CHECKOUT
    function checkBtn(e){
        //
        e.preventDefault();
        var products = document.getElementsByClassName("productN");

        productsName = [];
        for ( var index = 0; index < products.length; index++) {
            productsName[productsName.length] = products[index].innerHTML;
        }

        console.log(productsName);

        var quantity = document.getElementsByClassName("quantity");

        qty = [];
        for (var index = 0; index < quantity.length; index++) {
            qty[qty.length] = quantity[index].value;
        }

        var subTot = document.getElementsByClassName("subTotals");
        subT = [];
        for (var index = 0; index < subTot.length; index++) {
            subT[subT.length] = subTot[index].innerHTML;
        }

        var totP = document.getElementById("totalPrice").innerHTML;

        console.log(productsName);
        console.log(qty);
        console.log(subT);
        console.log(totP);



        // session('checkout.products', [productsName]);
        // session('checkout.qty', [qty]);
        // session('checkout.subTotal', [subT]);
        // session('checkout.total', [totP]);

        var param = "products[]="+productsName+"&qty[]="+qty+"&subTotal[]="+subT+"&totalP="+totP;
        var token = $('meta[name="csrf-token"]').attr('content');
        var url = "{{ route('precheckout') }}";

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
                    
                    var products = JSON.parse(xhr.responseText);
                    window.location.replace('checkout');

                    
                    
                }
            }
            xhr.send(param);


        // window.location.replace('checkout');




    }
    var checkOutBtn = document.getElementById("checkOutB");
    checkOutBtn.addEventListener('click', checkBtn);
</script>
<script>
    function clearCart () {
        var url = "clearCart";

        var xhr = new XMLHttpRequest();
            xhr.open('GET', url, true);
            xhr.onreadystatechange = function (data){

                if (xhr.readyState == 2){
                    console.log("2 Loading");
                }
                if (xhr.readyState == 4 && xhr.status == 200){          
                    window.location.reload();
                    // window.location.replace('cart');
                }

            }

            xhr.send();

    }
    var clearC = document.getElementById("clearCart");
    clearC.addEventListener('click', clearCart);
</script>
<script>
    function removeFromList(e) {
        e.preventDefault();
        var id = this.getAttribute("id");
        // id = parseInt(id);
        var token = $('meta[name="csrf-token"]').attr('content');
        var param = "id="+id;
        var url = "{{ route('removeitem') }}";



        console.log(id);

        var xhr = new XMLHttpRequest();
        xhr.open('DELETE', url, true);
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
                console.log(data);                
                    var cartSm = document.getElementById("cartSm");         
                    cartSm.innerHTML = xhr.responseText;
                    var cartMd = document.getElementById("cartMd");         
                    cartMd.innerHTML = xhr.responseText;
            }

        }

        xhr.send(param);

        window.location.reload();


    }
    var removeItem = document.getElementsByClassName("remove");
    for (i = 0; i < removeItem.length; i++) {
        removeItem.item(i).addEventListener('click', removeFromList);
    }
</script>
@endsection
@extends('pages.temp')

@section('style')
    <style>
        .myAshBg {
            background-color: #e9ecef;
        }
        .myText {
            color: #f58a42;
        }
/*  div#container.container{
      background-color: #e9ecef;
  }
  a{
      text-decoration: underline;
  }
  p.note{
      text-align: center;
  }
  form.row contact_form{
      margin-right: 25px
  }
*/
    </style>
@endsection


@section('content')
    <div class="jumbotron" id="firstJumbotron">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md">
                    <h3>Product Checkout</h3>
                    <h6 class="text-muted">
                        Very us move be blessed multiply night
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

@if (Auth::guest())
<div class="container">
        <div class="row">
            <div class="col">
                <div class="myAshBg py-2 px-5">
                    Returning Customer? &nbsp; <a href="{{ route('ulogin') }}" class="myText" style="text-decoration:underline">Click here to login</a>
                </div>
                <div class="py-2 px-5" style="font-size:90%" >
                    If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please proceed to the Billing & Shipping section.
                </div> <!--LOG IN FORM STARTS HERE-->
    
    
                
                <!--LOG IN FORM ENDS HERE-->
            </div>
        </div>
    </div>
        
@endif



<br>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="myAshBg py-2 px-5">
                Payment Details
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-12 col-md-8">
            @if (Auth::guest())
            <div class="py-2 px-5">
                    <h4 class="text-center h2">Registration Form</h4>
                    <hr>
                    <form method="POST" action="{{ route('register') }}">
                        <!--NOTE THE ROUTE FOR THIS FORM HAS NOT BEEN SET-->
                        <input type='hidden' name='_token' value='{{ csrf_token() }}'> 
                        <div class="form-row">
                            <div class="col-12 col-md mx-2 {{ $errors->has('firstName') ? ' has-error' : '' }}">
                                <input type="text" class="form-control" placeholder="First name" name="firstName">
                                @if ($errors->has('firstName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstName') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <br>
                            <div class="col-12 col-md mx-2 {{ $errors->has('lastName') ? ' has-error' : '' }}">
                                <input type="text" class="form-control" placeholder="Last name" name="lastName">
                                @if ($errors->has('lastName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col-12 col-md mx-2 {{ $errors->has('phone') ? ' has-error' : '' }}">
                                <input type="tel" class="form-control" placeholder="Phone number" name="phone" required>
                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <br>
                            <div class="col-12 col-md mx-2 {{ $errors->has('email') ? ' has-error' : '' }}">
                                <input type="email" name="email" class="form-control" placeholder="Email address">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col mx-2 {{ $errors->has('password') ? ' has-error' : '' }}">
                                <input type="password" class="form-control" placeholder="Password" name="password">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col mx-2 {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col mx-2 {{ $errors->has('address1') ? ' has-error' : '' }}">
                                <input type="text" class="form-control" placeholder="Address line 01" name="address1">
                                @if ($errors->has('address1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address1') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col mx-2 {{ $errors->has('address2') ? ' has-error' : '' }}">
                                <input type="text" class="form-control" placeholder="Address line 02" name="address2">
                                @if ($errors->has('address2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address2') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col mx-2 {{ $errors->has('city') ? ' has-error' : '' }}">
                                <input type="text" class="form-control" placeholder="Town/City" name="city">
                                @if ($errors->has('city'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col mx-2 {{ $errors->has('state') ? ' has-error' : '' }}">
                                <input type="text" class="form-control" placeholder="State" name="state">
                                @if ($errors->has('state'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('state') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col mx-2 {{ $errors->has('zip') ? ' has-error' : '' }}">
                                <input type="number" class="form-control" placeholder="Zip/Postal Code" name="zip">
                                @if ($errors->has('zip'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('zip') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col text-center">
                                <input type="submit" role="button" class="btn btn-button myColor px-3" value="Register">
                                <br><br><br>
                            </div>
                        </div>
                    </form>
                </div><!--Billing Details-->
            @else
            <div class="container">
                    <script src="https://js.paystack.co/v1/inline.js"></script>
                    <div id="paystackEmbedContainer"></div>
                    
                    <script>
                    totalAmount = <?php echo json_encode($cartItems['total'][0]."00"); ?>;
                    customerEmail = <?php echo json_encode(auth::user()->email); ?>;
                    orderId = <?php
                        if (isset($orderId->id))
                        {
                            $orderId = $orderId->id;
                        }
                        else {
                            $orderId = null;
                        }
                     echo json_encode($orderId); 
                     ?>;

                      PaystackPop.setup({
                       key: 'pk_live_66c5e3050a205c17cca607298449c8ba3141826f',
                       email: customerEmail,
                       amount: totalAmount,
                       container: 'paystackEmbedContainer',
                       callback: function(response){
                            alert('Payment successfully. transaction ref is ' + response.orderId);
                        },
                      });
                    </script>
            </div>
            @endif

        </div>
        <div class="col-12 col-md-4 myAshBg py-3 px-5">
            <h5>Your Order</h5>
            <hr>
            <div class="d-flex">
                <span class="float-left text-muted">Product</span> <span class="mx-auto">Q</span> <span class="float-right text-muted">Total</span>
            </div>
            @for ($i = 0; $i < count($cartItems['product']); $i++)
                <hr>
                <div class="d-flex">
                    <span class="float-left text-muted">{{ $cartItems['product'][$i] }}</span> <span class="mx-auto">{{ $cartItems['qty'][$i] }}</span> <span class="float-right text-muted">{{ $cartItems['subTotal'][$i] }}</span>
                </div>
            @endfor


            <hr>
            <strong>
                <span class="float-left text-muted">TOTAL</span> <span class="float-right text-muted">{{ $cartItems['total'][0] }}</span>
            </strong>
            <br><hr>

            <h5>Payment Method</h5>
            <form>
{{-- -
                <div class="form-row">
                    <div class="col">
                        <input type="radio" name="payment" id="paystack" class="mr-3 mb-2">Paystack 
                    </div>
                </div>
 --}}
                <div class="form-row">
                    <div class="col">
                      {{-- -  Or <br> --}}
                        <a role="button"  href="https://api.whatsapp.com/send?phone=2348134673765&text=Product Details with Price" class="btn btn-success mt-2" id="whatsA">
                            Whatsapp &nbsp;&nbsp;
                            <img src="../img/whatsapp.png" width="20px" height="20px" style="border-radius:8px" class="float-right" alt="">
                          </a>
                    </div>
                </div>





@if(Auth::guest())
                <div class="form-group text:white">
                    Don't have an account with us, please <a href="{{ route('checkout') }}"> sign up here </a>
                </div>
@endif
                










                      
                <br>
                <div class="form-row">
                    <div class="col">
                        <input type="checkbox" name="terms" id="terms" class="mr-3"> <small>I’ve read and accept the <span class="myText"> terms & conditions</span> </small> 
                    </div>
                </div>

                <br>
                <input type="submit" role="button" class="btn btn-button myColor form-control" value="Proceed with payment">
            </form>

        </div><!--Order List Column 4-->

    </div><!--Second Row-->
</div><!--Container-->
<br><br>
<script>
    function updatePaystack() {
        totalAmount = <?php echo json_encode($cartItems['total'][0]); ?>;
    }
    window.addEventListener('load', updatePaystack);
</script>
<script>
        products = <?php echo json_encode($cartItems['product']); ?>;
        qty = <?php echo json_encode($cartItems['qty']); ?>;
        subTotal = <?php echo json_encode($cartItems['subTotal']); ?>;
        total = <?php echo json_encode($cartItems['total']); ?>;
    function whatsApp(e)
    {
        e.preventDefault();


        // products = @json($cartItems);
        console.log(products[0]);
        console.log(qty[0]);
        console.log(subTotal[0]);
        console.log(total[0]);

        var productName = [];
        for (var i = 0; i < products.length; i++) {
            productName[productName.length] = products[i] +" "+ qty[i] +" "+ subTotal[i]+"\n";
        }
        productName[productName.length] = "Total Price: " + total;
        console.log(productName);
        window.location.replace('https://api.whatsapp.com/send?phone=2348134673765&text='+productName);
        
    }
    var whatsA = document.getElementById("whatsA");
    whatsA.addEventListener('click', whatsApp);
</script>
@endsection
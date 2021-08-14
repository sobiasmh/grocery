<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="project.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Permanent+Marker&display=swap" rel="stylesheet">     
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Shopping Cart</title>         <link rel="icon" href="pic/pic2.png" type="image/icon type">

  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: rgb(104, 228, 104);">
        <div class="container">
        <a class="navbar-brand" href="#" style="color: white;"> US MART </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbar">
            <span class="navbar-toggler-icon"> </span>
        </button>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="navbar-nav m-auto my-2 my-lg-0">
                <li class="nav-item">
                    <a class="nav-link " href="/home" style="color: white;">Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/product" style="color: white;">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/About" style="color: white;">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="/contact" style="color: white;">Contact Us </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="/login" style="color: white;">Login </a>
                </li>
                
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
                <i class="fa fa-shopping-cart" style="font-size:35px; padding: 5px; color: white; " onclick="window.location.href='/cart'"></i>
                <button class="btn btn-outline-success" type="submit"><a href="/logout" style="color: inherit;">Logout</a></button>
              </form>

        </div>
        </div>
    </nav>
    <!---------------------------->
    
    <section class="mt-5">
        <div class="container">
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead" style="background-color:  rgb(104, 228, 104);">
                        <tr>
                            <th scope="col" class="text-white">Product</th>
                            <th scope="col" class="text-white">Price</th>
                            <th scope="col" class="text-white">Quantity</th>
                            <th scope="col" class="text-white">Total</th>
                            <th scope="col" class="text-white">Remove</th>

                        </tr>
 
                    </thead>
                    <tbody>
                 
<!------------------>
                            @foreach($grocery as $cart)
                        <tr class="cartpage">
                            <td>
                                <div class="main">
                                
 
                                    <div class="d-flex">
                                        <img src="{{ $cart->image }}"  class="img-fluid" alt="" style="width: 9rem; height: 9rem;">
                                    </div>
                                    <div class="description">
                                        <h6>{{$cart->productName}}</h6>
 
                                    </div>
                                </div>
                            </td>
                            <td> <h6>{{$cart->price}}</h6><input type='hidden' id='iprice' value='{{$cart->price}}'></td></td>
                            
                                <td>
                                <input type="number" value="{{ $cart->quan }}" class="form-control quantity" class="quantity"/>
                                <button class="btn btn-info btn-sm update-cart" data-token="{{ csrf_token() }}" data-id="{{ $cart->cart_id}}" style="margin: 10px;">
            <i class="fa fa-refresh"></i> Refresh</button></td>
                                <td id='itotal'>{{ $cart->price * $cart->quan }}</td>
                                <td><button type="button" class="btn btn-danger" onclick="cnt()"><a href="{{route('destroy', [$cart->cart_id])}}" style="color: inherit;">Remove</a></button></td>
                                
                               
 
                        </tr>
                        @endforeach
                        <!----------------------------------->
                       
                    </tbody>
                </table>
            </div>
 
        </div>
    </section>
 
    <div class="col-lg-5 offset-lg-6">
        <div class="checkout">
        @php $total = 0; @endphp
        @foreach($grocery as $cart)
        

        @php
            $sub_total = $cart->price * $cart->quan;
                            $total += $sub_total;
                        @endphp
                        @endforeach
            <ul>
                <li class="totalItems">Total:
                    <span>Rs: {{ $total}}</span></li>
                
            </ul>
            <div class="col-9 offset-sm-10 py-2">
                <button class="proceed-btn" onclick="window.location.href='/checkout'">Checkout</a>
            </div>
           
        </div>
    </div>

   
    </div>
    <!------------------------------>
    <footer class="newsletter py-3">
        <div class="container py-3">
            <div class="row">
                <div class="col-lg-9 m-auto text-center">
                    <h1>Join Us For Monthly Newsletter</h1>
                    <input type="text" class="px-3" placeholder="Enter Your Email">
                    <button class="btn2">Submit</button>
                </div>

            </div>

            <div class="row py-3">
                <div class="col-lg-17">
                    <div class="row">
                        <div class="col-lg-4">
                            <h5 class="pb-3">Customer Care</h5>
                            <p>On Time</p>
                            <p>Regular</p>

                        </div>
                        <div class="col-lg-4">
                            <h5 class="pb-3">Shop With Us</h5>
                            <p>FAQs</p>
                            <p>Shipping</p>
                            <p>Track Your Order</p>

                        </div>
                        <div class="col-lg-4">
                            <h5 class="pb-3">Reach Us At</h5>
                            <a href= "https://web.facebook.com/" class="btn-floating btn-fb mx-1">
                                <i class="fa fa-facebook-official fa-2x" style="color:white"> </i>
                              </a>
                              <a href= "https://www.instagram.com/" class="btn-floating btn-gplus mx-1">
                                <i class="fa fa-instagram fa-2x" style="color:white"> </i>
                              </a>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>


</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
     // Update Cart Data
     $(".update-cart").click(function (e) {
        e.preventDefault();
        var ele = $(this);
        $.ajax({
        url: "{{ url('update-cart') }}",
        method: "patch",
        data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity:
        ele.parents("tr").find(".quantity").val()},
        success: function (response) {
            window.location.reload(); 
        }
    });
 });


    }
</script>
</body>
</html>
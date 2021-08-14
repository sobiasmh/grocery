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
  
    <title>Product</title>         <link rel="icon" href="pic/pic2.png" type="image/icon type">

  </head>
  <body >
    <div class="se-pre-con"></div>
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
                    <a class="nav-link active" href="#" style="color: white;">Product</a>
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
                <p id="span" class="badge  rounded-pill" style="background-color:white; color: rgb(104, 228, 104);" ></p>
                <button class="btn btn-outline-success" type="submit"><a href="/logout" style="color: inherit;">Logout</a></button>

              </form>

        </div>
        </div>
    </nav>
    <!--------->
    <section class="products">
        <div class="container py-5">
            <div class="row py-5 ">
                <div class="col-lg-5 m-auto text-center">
                    <h1 style="font-weight: 700;">Welcome to US-Mart</h1>
                    <h6 style="color: green;">All grocery items available</h6>
                </div>
            </div>
            

            <div class="row">
            @foreach($grocery as $product)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card border-0 bg-light mb-2">
                    <div class="form-group">
                 
                  <span hidden> {{$product->pro_id}} </span>
               </div>
                        <div class="card-body">
                            <img src="{{ $product->image }}" class="img-fluid" alt="">

                        </div>
                    </div>
                    <h6> {{$product->proName}}</h6>
                    <p>Rs. {{$product->price}} </p>
                    
                    <button class="addtoCart" onclick="cnt()" ><a href="{{route('addCart', [$product->pro_id])}}" style="color: inherit;">Add to Cart</a></button>
                </div>
                @endforeach
            </div>

</section>
<!----
     @foreach($grocery as $product)

     <div class="row">
           <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                   <strong>ID:</strong>
                   {{$product->pro_id}} 
               </div>
           </div>
           <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                   <strong>Name:</strong>
                   <td>{{$product->proName}}</td>
               </div>
           </div>
           <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                   <strong>Image:</strong>
                   <img src="/image/{{ $product->image }}" width="500px">  
               </div>
           </div>
       </div>
       @endforeach
  --->

      <!--------------------------->

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




    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
    <script>
        //Get the button
        var mybutton = document.getElementById("myBtn");
        
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};
        
        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
          } else {
            mybutton.style.display = "none";
          }
        }
        
        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }

       // loader before page
    
       $(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut(5000);;
	});

    /////////
   
        var btn = document.getElementsByClassName('addtoCart');
        var span = document.getElementById('span');
        let count = 0;
        function cnt(){
            count++;
            document.getElementById('span').innerHTML = count;
            console.log(count);
        }


    

        </script>

</body>
</html>

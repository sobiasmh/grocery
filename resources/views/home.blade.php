<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="project.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Permanent+Marker&display=swap" rel="stylesheet">     
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>US Mart </title>         <link rel="icon" href="pic/pic2.png" type="image/icon type">

  </head>
  <body >
    <div class="se-pre-con"></div>
    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: rgb(104, 228, 104);">
        <div class="container">
        <a class="navbar-brand" href="#" style="color: white;"> US MART </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" >
            <span class="navbar-toggler-icon"><i class="bi bi-list"></i> </span>
        </button>
        <div class="collapse navbar-collapse " id="navbar">
            <ul class="navbar-nav m-auto my-2 my-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="#" style="color: white;">Home </a>
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
    

    <section class="main">
        <div class="container">
            
            <div id="carouselExampleCaptions" class="carousel slide pt-3" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="./pic/img5.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        
                      <h1>Welcome To US Mart</h1>
                      
                      <p>Everything at your doorsteps</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="./pic/img.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h1>Fresh Vegtables and Fruits</h1>
                      <p>Enjoy seasons fresh veggies, fruits and more.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="./pic/img7.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h1>Everything at a click away</h1>
                      
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>

        </div>
    </section>

    <!--------->

    <section class="small images">
        <div class="container py-3">
            <div class="row pt-3">
                <div class="col-lg-7 m-auto">
                    <div class="row text-center">
                        <div class="col-lg-4 ">
                            <img src="./pic/pic2.png" class="img-fluid" style="width: 100px; height: 100px;"alt="">
                            <h6>FRESH</h6>
                        </div>
                        <div class="col-lg-4 ">
                            <img src="./pic/pic1.png" style="width: 100px; height: 100px;"  class="img-fluid" alt="">
                            <h6>RELIABLE</h6>
                        </div> 
                        <div class="col-lg-4 ">
                            <img src="./pic/pic3.png" style="width: 100px; height: 100px;" class="img-fluid" alt="">
                            <h6>HEALTHY</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!--------->
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
    <!------->

        <section class="products">
            <div class="container py-5">
                <div class="row py-5 ">
                    <div class="col-lg-5 m-auto text-center">
                        <h1 style="font-weight: 700;">Explore The Products</h1>
                        <h6 style="color: green;">Buy Top Quality Products, Fruits and Vegtables</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card border-0 bg-light mb-2">
                            <div class="card-body">
                                <img src="./pic/product1.jpg" class="img-fluid" alt="">

                            </div>
                        </div>
                        <h6>Lays Salted Chips</h6>
                        <p>Rs. 50</p>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card border-0 bg-light mb-2">
                            <div class="card-body">
                                <img src="./pic/product2.jpeg" class="img-fluid" alt="">

                            </div>
                        </div>
                        <h6>Tapal Family Mixture</h6>
                        <p>Rs. 200</p>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card border-0 bg-light mb-2">
                            <div class="card-body">
                                <img src="./pic/product3.jpg" class="img-fluid" alt="">

                            </div>
                        </div>
                        <h6>Coca Cola 300 ml</h6>
                        <p>Rs. 70</p>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 ">
                        <div class="card border-0 bg-light mb-2">
                            <div class="card-body">
                                <img src="./pic/product4.jpg" class="img-fluid" alt="">

                            </div>
                        </div>
                        <h6>Olpers Milk 1ltr (12 Pieces)</h6>
                        <p>Rs. 2999</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 text-center m-auto">
                        <button class="btn1" onclick="window.location.href='/product'">Click For More</button>
                        
                    </div>
                </div>
            </div>
        </section>

    <!---------------------->
        <section class="contact py-5">
            <div class="container py-5">
                <div class="row">
                    <div class="col-lg-5 m-auto text-center">
                        <h1>Contact Us</h1>
                        <h6>Need to talk to us?</h6>
                    </div>
                </div>
                <div class="row py-5">
                    <div class="col-lg-9 col-md-6 col-sm-6">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <h6>LOCATION: </h6>
                                <p>Karachi 0544 Main Rashid Minhas Road</p>
                            
                                <h6>PHONE: </h6>
                                <p>0345-1234-567</p>
                            
                                <h6>EMAIL: </h6>
                                <p><a type="email" href="usmart@gmail.com">usmart@gmail.com></a></p>
                            
                        </div>
                        <div class="col-lg-7">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" class="form-control bg-light" placeholder="First Name">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control bg-light" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 py-3">
                                    <textarea name="" class="form-control bg-light" placeholder="Your Comments" cols="30" rows="6"></textarea>
                                </div>
                            </div>
                            <button class="btn1">Submit</button>

                        </div>
                        
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="row">
                            <div class="map-container pt-1 pr-1 pl-1 ">                    
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.195723201343!2d67.08841051500409!3d24.925401484023222!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33f3599c3a9b9%3A0x63b42a65418b2671!2s544%20Rashid%20Minhas%20Rd%2C%20Block%202%20Gulshan-e-Iqbal%2C%20Karachi%2C%20Karachi%20City%2C%20Sindh!5e0!3m2!1sen!2s!4v1625240402045!5m2!1sen!2s" width="550" height="390" style="border:0;" allowfullscreen="" loading="lazy"></iframe>            </div>
                            </div>
                            

                        </div>

                        

                    </div>
                    
                </div>
            </div>
        </section>


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
        </script>
    
</body>
</html>
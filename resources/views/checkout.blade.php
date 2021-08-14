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
    <title>Checkout</title>         <link rel="icon" href="pic/pic2.png" type="image/icon type">

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
    <div class="container">
        <main>
          <div class="py-5 text-center">
            <h2>Checkout </h2>
          </div>

          <div class="row g-5">
            <div class="col-md-7 col-lg-8">
              <h4 class="mb-3">Billing address</h4>
              <form class="needs-validation" novalidate action="checkout" method="POST">
              @csrf

                <div class="row g-3">
                  <div class="col-sm-6">
                    <label for="firstName" class="form-label" >First name</label>
                    <input type="text" class="form-control" id="firstName" name="fname" placeholder="" value="" required>
                    <div class="invalid-feedback">
                      Valid first name is required.
                    </div>
                  </div>
      
                  <div class="col-sm-6">
                    <label for="lastName" class="form-label" >Last name</label>
                    <input type="text" class="form-control" id="lastName" name="lname" placeholder="" value="" required>
                    <div class="invalid-feedback">
                      Valid last name is required.
                    </div>
                  </div>
      
                  
      
                  
      
                  <div class="col-12">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" required>
                    <div class="invalid-feedback">
                      Please enter your shipping address.
                    </div>
                  </div>
      
                  <div class="col-12">
                    <label for="address2" class="form-label">Phone Number <span class="text-muted"></span></label>
                    <input type="text" class="form-control" id="address2" name="phone" placeholder="Mobile Number">
                  </div>
      
                  <div class="col-md-5">
                    
                    <label for="city" class="form-label">City</label>
                    <select class="form-select" id="city" name="city" required>
                      <option value="">Choose...</option>
                      <option>Karachi</option>
                      <option>Islamabad </option>
                      <option>Lahore </option>

                    </select>
                    <div class="invalid-feedback">
                      Please provide a valid state.
                    </div>
                  </div>
      
                  
                  </div>
                </div>
      
                <hr class="my-4">
      
      
                <h4 class="mb-3">Payment</h4>
      
                <div class="my-3">
                  <div class="form-check">
                    <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                    <label class="form-check-label" for="credit">Cash on delivery</label>
                  </div>
                  
                </div>
              
                
      
                <hr class="my-4">
                <div class="py-2">
                <button class="proceed-btn " type="submit">Continue to checkout</button>
                </div>
              </form>
            </div>
          </main>
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


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
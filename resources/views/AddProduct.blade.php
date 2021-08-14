<!DOCTYPE html>
<html>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    
    <link rel="stylesheet" href="project.css">
    <link rel="stylesheet" href="login.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Permanent+Marker&display=swap" rel="stylesheet">   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Admin page</title>         <link rel="icon" href="pic/pic2.png" type="image/icon type">


        </head>

        <body>
            <div class="se-pre-con"></div>
            <nav class="navbar navbar-expand-lg navbar-light " style="background-color: rgb(104, 228, 104);">
                <div class="container">
                <a class="navbar-brand" href="#" style="color: white;"> ADMIN PAGE </a>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#navbar">
                    <span class="navbar-toggler-icon"> </span>
                </button>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="navbar-nav m-auto my-2 my-lg-0">
                        <li class="nav-item">
                            <a class="nav-link " href="/AddProduct" style="color: white;">Add Product </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/AdminProducts" style="color: white;">Admin Handle</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link active " href="/Orders" style="color: white;">Order Management </a>
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
           
            <header class="jumboston  " id="head1" >

                    <div class="container-fluid" style="position: relative; text-align: center; margin: 0%; padding: 0%;" >
       
                        <div class="text-block" style="position: absolute; padding: 80px;left: 32%; color: white;">
                            <h1 >Add Products</h1>
                        </div>
                        
                       
                
                        
                
                      </div>
            </header>
             <!-- contact formm-->           
            
             <div class="form-container1">
                <div class="row">
                   <div class="col-md-7">
                      <div class="row">
                         <div class="form-group col-md-12">
                            <h1>Admin Panel</h1>
                            <p style="color: #000000" >Add Product to your Store!</p>
                         </div>
                      </div>
                      <form name="contactForm" id="contactForm" method="POST" action="addproduct" enctype="multipart/form-data" >
                          @csrf
                      <div class="row">
                         <div class="col-md-12">
                            <div class="control-group">
                               <label>Product Name</label>
                               <input type="text" class="demo-default form-control" name="pr_name"placeholder="Add Name">
                            </div>
                            <div class="control-group">
                               <label>Quantity</label>
                               <input type="text" class="demo-default form-control" name="quan" placeholder="Add quantity">
                            </div>
                            <div class="control-group">
                               <label>Price</label>
                               <input type="text" class="demo-default form-control" name="price" placeholder="Add price">
                            </div>
                            <br>
                            <div class="control-group">
                               <label>Add image</label>
                               <input type="file" name="image" maxlength="30" size="30">
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-12 py-3">
                                    <label>Description</label>
                                    <textarea name="des" class="form-control bg-light" placeholder="Description of product" cols="30" rows="6"></textarea>
                                </div>
                            </div>
                            
                         </div>
                      </div>
                      <br>
                      <div class="row">
                         <div class="form-group col-md-12 text-center">
                            <input type="submit" class="btn btn-success " value="Add Product" onClick="javascript:JSFiddleSubmit();return false;">
                         </div>
                      </div>
                      </form>
                   </div>
                   
                </div>
             </div>
       
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
  // loader before page
    
  $(window).load(function() {
   // Animate loader off screen
   $(".se-pre-con").fadeOut(5000);;
});
</script>
</body>
</html>
<!DOCTYPE html>
<html>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="project.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Permanent+Marker&display=swap" rel="stylesheet">   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Sign Up</title>         <link rel="icon" href="pic/pic2.png" type="image/icon type">

        </head>
        <body id="login-body">
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

                      </form>
        
                </div>
                </div>
            </nav>
            <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12"></div>
            <div class="col-md-4 col-sm-4 col-xs-12">

                <form class="form-container" action="submit" method="POST" onsubmit="return validation()" >
                @csrf
                    <h1 style="text-align: center;"> SIGN-UP FORM </h1>
                    <div id="error_message"></div>
                    <div class="form-group">
                        <label for="inputAddress2" class="form-label">Username</label>
                        <input type="text1" class="form-control" id="Username" name="name" placeholder="Username"  >
                        <span id="user" ></span>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail4" class="form-label" >Email</label> 
                      <input type="email1" class="form-control" id="inputEmail4" name="email" placeholder="yourname@domain.com" > 
                      <span id="e"></span>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword4" class="form-label">Password</label>
                      <input type="password" class="form-control" id="Password" name="password" placeholder="password" >
                      <span id="p1"></span>
                    </div>
                    <div class="form-group">
                      <label for="inputAddress" class="form-label">Confirm password</label>
                      <input type="password" class="form-control" id="ConPassword" name="password" placeholder="confirm password" >
                      <span id="p2"></span>
                    </div>
                    <div class="form-group">
                      <label for="inputCity" class="form-label">City</label>
                      <input type="text1" class="form-control" id="inputCity" name="city" placeholder="City">
                      <span id="city"></span>
                    </div>
                      <div class="form-check">
                        
                    </div>
                      <button type="submit" class="btn btn-success btn-block" style="width: 100%; left: 20px;" >Sign-Up</button>
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

  <script>


      function validation(){
          var User=document.getElementById("Username").value;
          var Email=document.getElementById("inputEmail4").value;
          var password=document.getElementById("Password").value;
          var Confirm_password=document.getElementById("ConPassword").value;
          var city=document.getElementById("inputCity").value;


	
  

          
          error_message.style.padding = "10px";
      
          

          var text;
            if(User=="" || User.length < 5){
                text = "Please Enter valid Name. It should contain more than 5 characters";
                error_message.innerHTML = text;
                return false;
            }
            if(Email.indexOf("@") == -1 || Email.length < 6){
                text = "Please Enter valid Email. Length should be greater than 6.";
                error_message.innerHTML = text;
                return false;
            }

        

            if(password=="" || password.length < 8){
                text = "Password INVALID it must be 8 characters";
                error_message.innerHTML = text;
                return false;
            }

            if(Confirm_password=="" || password!=Confirm_password){
                text = "Confirm Password INVALID ";
                error_message.innerHTML = text;
                return false;
            }

            alert("Form Submitted Successfully!");
                return true;



        

        
        }
      
  </script>
        </body>
</html>

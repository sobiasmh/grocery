<!DOCTYPE html>
<html>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="project.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Permanent+Marker&display=swap" rel="stylesheet">   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Forget Password</title>         <link rel="icon" href="pic/pic2.png" type="image/icon type">

        </head>
        <body id="login-body">
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
                            <a class="nav-link active" href="/home" style="color: white;">Home </a>
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
                            <a class="nav-link active" href="/login" style="color: white;">Login </a>
                        </li>
                        
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                        <i class="fa fa-shopping-cart" style="font-size:35px; padding: 5px; color: white; " onclick="window.location.href='cart.html'"></i>

                      </form>
        
                </div>
                </div>
            </nav>
            <br>
    <div class="container-fluid" style="width: 80%;">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12"></div>
            <div class="col-md-4 col-sm-4 col-xs-12">

                <form class="form-container" name="myform" method="post" action="updatepassword"  onsubmit="return validation()" >
                    @csrf
                    <h1 style="text-align: center ;font-size: 30px;" > Forgot Password </h1>
                    <i class="fas fa-lock" style="font-size:80px;text-shadow:2px 2px 4px #000000;padding-left: 90px;"></i>
                    <div id="error_message"></div>
                    <div class="form-group">
                      <label for="inputEmail4" class="form-label" >Username</label> 
                      <input type="text2" class="form-control" id="user" placeholder="Username" name="name" > 
                      <span id="name"></span>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword4" class="form-label"> New Password</label>
                      <input type="password" class="form-control" id="pass" name="password" placeholder="password">
                      <span id="pass"></span>
                    </div>
                      <div class="form-check">
                        
                      
                    </div>
                      <button  type="submit" class="btn btn-success btn-block"  style="width: 100%; left: 20px;" >Change Password</button>
                      <div class="form-check">
                        
                      
                    </div>
                       
                   
                  </form>
                  
            </div>

            
        </div>
     </div>
     <br>
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
    
    $(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut(5000);;
	});

//form validation



function validation(){  
        var User=document.getElementById("user").value;
          var password=document.getElementById("pass").value;
          
          error_message.style.padding = "10px";

        var text;

            if(User=="" || User.length < 5){
                text = "Please Enter valid Name";
                error_message.innerHTML = text;
                return false;
            }
                

                if(password=="" ){
                text = "Password INVALID ";
                error_message.innerHTML = text;
                return false;
            }

            alert("Form Submitted Successfully!");
                return true;
        }
</script>
       
        
        </body>
</html>
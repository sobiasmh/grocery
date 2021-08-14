<!DOCTYPE html>
<html>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="project.css">
    <link rel="stylesheet" href="login.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> -->
    <!---<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>-->
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Permanent+Marker&display=swap" rel="stylesheet">   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Contact Us</title>         <link rel="icon" href="pic/pic2.png" type="image/icon type">


        </head>

        <body>

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
                            <a class="nav-link" href="/product" style="color: white;">Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/About" style="color: white;">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active " href="/contact" style="color: white;">Contact Us </a>
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
           
            <header class="jumboston  " id="head" >

                    <div class="container-fluid" style="position: relative; text-align: center; margin: 0%; padding: 0%;" >
       
                        <div class="text-block" style="position: absolute; padding: 80px;left: 32%; color: white;">
                            <h1 >CONTACT US</h1>
                        </div>
                        
                       
                
                        
                
                      </div>
            </header>
             <!-- contact formm-->           
            
             <div class="form-container1">
                <div class="col-md-8">
                    <div class="alert alert-success update-alert alert-dismissible fade show" style="display: none;" role="alert">             
                      <strong id="alert">Success!</strong> <span id="msg"></span>
                      {{-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button> --}}
                    </div> 
                     </div>
                <div class="row">
                   <div class="col-md-7">
                      <div class="row">
                         <div class="form-group col-md-12">
                            <h2>Tell us About Yourself</h2>
                            <p style="color: #000000">Contact us today to discuss how we can help you!</p>
                         </div>
                      </div>
                      <form name="contactForm" id="contactForm"   >
                      @csrf 
                      <div class="row">
                         <div class="col-md-12">
                            <div class="control-group">
                               <label>First Name</label>
                               <input type="text" class="demo-default form-control" id="fname" name = "fname" placeholder="First Name">
                            </div>
                            <div class="control-group">
                               <label>Last Name</label>
                               <input type="text" class="demo-default form-control"  id="lname" name = "lname" placeholder="Last Name">
                            </div>
                            <div class="control-group">
                               <label>Company</label>
                               <input type="text" class="demo-default form-control" id="company" name = "company" placeholder="Company">
                            </div>
                            <div class="control-group">
                               <label>Phone #</label>
                               <input type="text" class="demo-default form-control" id="phone" name = "phone" placeholder="Phone #">
                            </div>
                            <div class="control-group">
                               <label>Email</label>
                               <input type="email" class="demo-default form-control" id="email" name = "email" placeholder="yourname@domain.com">
                            </div>
                            <div class="row">
                                <div class="col-lg-12 py-3">
                                    <label>Your Comments</label>
                                    <textarea name="" class="form-control bg-light" id="comments" name = "comments" placeholder="Your Comments" cols="30" rows="6"></textarea>
                                </div>
                            </div>
                            
                         </div>
                      </div>
                      <br>
                      <div class="row">
                         <div class="form-group col-md-12 text-center">
                            <input type="submit" class="btn btn-success " id="form-submit" value="Contact Us" onClick="javascript:JSFiddleSubmit();return false;">
                         </div>
                      </div>
                      </form>
                   </div>
                   <div class="col-md-5 contact-right-info">
                      <h3>USMART OFFICE</h3>
                      <p style="color: #000000">0544 Main Rashid Minhas Road<br />
                        Karachi, FL 30030<br />
                         <a href="tel:4078981961">407.555.1961</a>
                      </p>
                      <h3>EMAIL ADDRESS</h3>
                      <a href="usmart@gmail.com">usmart@gmail.com</a>
                      <h3>SUPPORT</h3>
                      <a href="tel:0345-1234-567">0345-1234-567</a><br />
                      <a href="support@usmart.com">support@usmart.com</a>
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
<script >
        $(document).ready(function(){
            $('#form-submit').click(function(e){
              e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $("meta[name='csrf-token']").attr('content')

                      
                   }
               });
              $.ajax({
                  url: "{{url('/contact/send')}}",                
                  type: 'POST',
                  data: {fname: $('#fname').val(), lname: $('#lname').val(), company: $('#company').val(), email: $('#email').val(), contact: $('#contact').val(), comments: $('#comments').val()},
                  success:function(result){
                     console.log(result);
                    // $('.update-alert').show();
                    // $('#alert').html(result.nof);
                    // $('#msg').html(result.msg );
                  }
              })
            })
          })
</script>
        </body>
</html>
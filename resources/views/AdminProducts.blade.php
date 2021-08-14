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
    <title>Admin Handle</title>         <link rel="icon" href="pic/pic2.png" type="image/icon type">

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
                            <th scope="col" class="text-white">Remove</th>

                        </tr>
 
                    </thead>
                    <tbody>
                 
<!------------------>
                            @foreach($grocery as $product)
                        <tr class="cartpage">
                            <td>
                                <div class="main">
                                
 
                                    <div class="d-flex">
                                        <img src="{{ $product->image }}"  class="img-fluid" alt="" style="width: 9rem; height: 9rem;">
                                    </div>
                                    <div class="description">
                                        <h6>{{$product->proName}}</h6>
 
                                    </div>
                                </div>
                            </td>
                            <td> <h6>{{$product->price}}</h6><input type='hidden' id='iprice' ></td></td>
                            
                                <td>{{$product->quantity}}</td>
                                <td><button type="button" class="btn btn-danger" onclick="cnt()"><a href="{{route('delete', [$product->pro_id])}}" style="color: inherit;">Remove</a></button></td>
                                
                               
                                </td>
                        </tr>
                        @endforeach
                        <!----------------------------------->
                       
                    </tbody>
                </table>
            </div>
 
        </div>
    </section>
 


   
    </div>
    <!------------------------------>
    
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    

   
</script>
</body>
</html>
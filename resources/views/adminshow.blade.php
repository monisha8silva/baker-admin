
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    
 
 <link rel="stylesheet" href="{{ url('plugins/bootstrap/css/card.css') }}">

 <style>
    .box {
        box-sizing: content-box;
        width: 200px;
        height: 100px;
       
        border: 2px solid gray;
        margin-left: 140px;
        padding-right: 120px;
        padding-bottom:40px;
    }
</style>



        <!-- <div class="wrapper"> -->
                	<!-- <div class="content"> -->
                		<!-- content here -->
                		<!-- <div class="product-grid product-grid--flexbox">
                			<div class="product-grid__wrapper"> -->
                				<!-- Product list start here -->

								<!-- img block 1--- -->
                                <body>

                                <nav class="navbar navbar-dark bg-primary ">
<ul class="nav justify-content-right" >
  <li class="nav-item ">
    <a class="nav-link active " aria-current="page" href="datainputNew" style="color:black;">Products</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="adminshow" style="color:black;">Order Items</a>
  </li>
  
 
</ul>
</nav>
    
<section>
    
   
    <div class="container">
        <div class="row" style="margin-top:50px;">
            <!-- <div class="col-md-6 box">

                <h3 style="font-size:17px;">Personal Profile</h3>
                <h2 style="font-size:15px;">user name</h2>
                <h2 style="font-size:15px;">user email</h2>

            </div>
            <div class="col-md-6 box" style="margin-left:30px;">
                <h3 style="font-size:17px;">Delivery Address</h3>
                <h2 style="font-size:15px;">user name</h2>
                <address>
                    <p style="font-size:15px;">address</p>
                </address>
                <h5 style="font-size:15px;">Phone nu :</h5>
            </div>
             -->
            <h4 style="font-size:22px;color:black;">Admin</h4>

            <table class="table" style="margin-left:20px;margin-top:30px;">
                <thead >
                    <tr >
                        <th scope="col" >Order Id</th>
                        <th scope="col">Customer<br> Name</th>
                        <th scope="col">Address</th>
                        <th scope="col">Custmer<br>Number</th>
                         <th scope="col">Email</th>
                        <th scope="col">Outlet</th>
                        <th scope="col">Total</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($data as $value)
            <tr>
        
            <td>{{ $value->OrderID }}</td> 
            <td>{{ $value->customer_first_name }}</td> 
            <td>{{ $value->customer_delivery_address }}</td> 
            <td>{{ $value->customer_phone }}</td> 
            <td>{{ $value->email }}</td> 
            <td>{{ $value->outlet_name }}</td> 
            <td>{{ $value->TotalPrice }}</td> 
            <td><a href="adminproduct/{{$value->OrderID}}"><button type="submit" class="btn btn-success"></button></a></td>
         
           
        </tr>


                @endforeach
            
               
                </tbody>
            </table>
        </div>
    </div>
</section>
<body>
          
        <!--End block 1 -->
                			
<!--                 			
                                        </div>
                                    </div>
                                </div> -->
                                <!-- end Single product -->
<!-- 
                			</div>
                		</div>
                	</div>
                </div> -->

     

<!-- </div> -->




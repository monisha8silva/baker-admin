<style>
    
     .wrapper{width:0em !important}
     .cake-price h5{
    color: #048343 ;
   font-weight: 600;
}

    /* Responsive Queries */

/* Extra small devices (phones, 600px and down) */
/* @media only screen and (max-width: 600px) {
     #mob{
         margin-right:650px;
     }
} */

/* Small devices (portrait tablets and large phones, 600px and up) */
/* @media only screen and (min-width: 600px) {
  #mob{
      display:inline-block;
  } */

/* Medium devices (landscape tablets, 768px and up) */
@media only screen and (max-width: 768px) {
   
} 

/* Large devices (laptops/desktops, 992px and up) */
@media only screen and (min-width: 992px) {
    /* #email{
        margin-right:500px;
    } */
} 

/* Extra large devices (large laptops and desktops, 1200px and up) */
@media only screen and (min-width: 1200px) {
   
   
}
</style>
@extends('frontend.common.main')

@section('content')
 <link rel="stylesheet" href="{{ url('plugins/bootstrap/css/card.css') }}">
<div class="container-fluid" style="padding: 0px">

        <div class="row" style="min-height: 200px; display:flex">
                <div class="row" style="min-height: 200px; display:flex; background-image:url(public/images/Banners/2.png); background-repeat:no-repeat; background-position:center;">
                      <div class="col-md-12" style="text-align: center;margin-top: 5%;margin-bottom: 5%;">
                              <!-- <h3 class="mb-3" style="color: #FFFFFF;text-transform: uppercase;margin-bottom: 2%;">Standard Cake</h3> -->
                              <!-- <input value="ORDER NOW " style="color: white; background-color: #9b3e1c;" type="button"> -->
                      </div>
                 </div>
        </div>
</div>
        <!-- <div class="wrapper">
                	<div class="content"> -->
                		<!-- content here -->
                		<!-- <div class="product-grid product-grid--flexbox">
                			<div class="product-grid__wrapper">
                				Product list start here -->

								<!-- img block 1--- -->
   
    <section id = "img-sec" style="padding-top:60px;padding-bottom:30px; " >
        <div class="container" >
            <div class="row" id="mob">
                <div class="col-md-12 text-center">
                    <h4 style="font-size:30px;font-width:300px;">Standard Cake</h4><br>
                    <p style="margin-bottom:40px ;"></p>
                </div>
            </div>
        </div>

        <div class = "container">
            <div class = "row">
                <div class="col-md-4">
                    <div class = "img " style="margin-top: 40px; margin-bottom: 20px">
                      <img src="public/images/Chocolate gateau slice Rs. 100.jpg" class="img-fluid product-grid__img" alt="Cake img">
                     
                     </div>
                  
                    <!-- <div class="img-title text-center" style="margin:10px 0;">
                        <h5>Signature Cakes</h5>
                    </div> -->
                      
   
                    <div class = "img-name text-center" id="mob">
                        <h6>Chocolate gateau</h6>
                    </div>
                    <div class="cake-price text-center" id="mob">   
                        <h5>LKR 1000</h5>        
                    </div>
                    <div class="container" style="text-align :center">  
      
                       <p class = "design" ><button type="button" class="btn btn-default btn-sm"  id="mob" >  
                       <a href="#" class="btn btn-info btn-lg" style="border-radius:0px!important;">  
                       <span class="glyphicon glyphicon-shopping-cart" >  
                       </span> <b style="font-size:15px;"> ADD TO CART</b>  
                       </a>  
                       </p>    
                    </div>  
                </div>
                <div class="col-md-4">
                    <div class = "img" style="margin-bottom:10px!important;">
                      <img src="public/images/Chocolate biscuit pudding.jpg" class="img-fluid product-grid__img"  alt="Cake img">
                    </div>
                    
                    <!-- <div class="img-title text-center"  style="margin:10px 0;" id="mob">
                        <h5>Signature Cakes</h5>
                    </div> -->
                    <div class = "img-name text-center" style="margin-top:10px;" id="mob">
                        <h5>Birthday Cake </h5>
                    </div>
                    <div class="cake-price text-center" id="mob">   
                        <h6>LKR 1000</h6>        
                    </div>
                    <div class="container" style="text-align :center" >  
      
                       <p class = "design" ><button type="button" class="btn btn-default btn-sm" id="mob">  
                          <a href="#" class="btn btn-info btn-lg" style="border-radius:0px!important;">  
                            <span class="glyphicon glyphicon-shopping-cart">  
                            </span> <b style="font-size:15px;">ADD TO CART </b>  
                          </a>  
                        </p>    
                    </div>  
                </div>
                <div class="col-md-4">
                    <div class = "img" style="margin-bottom:10px!important;">
                      <img src="public/images/3.jpg" class="img-fluid product-grid__img" alt="Cake img">
                    </div>
                   
                    <!-- <div class="img-title text-center"  style="margin:10px 0;" id="mob">
                        <h5>Signature Cakes</h5>
                    </div> -->
                    <div class = "img-name text-center" style="margin-top:10px;margin-left:20px;" id="mob">
                        <h5>Special Cake</h5>
                    </div>
                    <div class="cake-price text-center" id="mob">   
                        <h6>LKR 1000</h6>        
                    </div>
                    <div class="container" style="text-align :center" >  
      
                      <p class = "design" ><button type="button" class="btn btn-default btn-sm" id="mob">  
                        <a href="#" class="btn btn-info btn-lg" style="border-radius:0px!important;">  
                         <span class="glyphicon glyphicon-shopping-cart" >  
                         </span> <b style="font-size:15px;"> ADD TO CART</b>  
                        </a>  
                      </p>    
                    </div>  
                </div>
<!-- </div>-->
<!-- </div>
</div> -->

</section> 
        <!--End block 1 -->
                			
<!--                 			
                                        </div>
                                    </div>
                                </div>
                                </div> -->
                                <!-- end Single product -->

                			<!-- </div>
                		</div>
                	</div>
                </div> -->

        {{--<div class="container-fluid" style="background-color: #9b3e1c; color:#fff; margin-top:20px">--}}
            {{--<div class="row" style="color: white; padding: 30px;">--}}
                {{--<div class="col-lg-2"> <h6>CONTACT US</h6></div>--}}
                {{--<div class="col-lg-10">--}}
                    {{--Our customers service personel are available to answer any requests. we will respond within business hours from 8am to 6pm--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

<!-- </div> -->



@endsection
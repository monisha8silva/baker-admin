@extends('frontend.common.main')

@section('content')

 <link rel="stylesheet" href="{{ url('plugins/bootstrap/css/card.css') }}">

 <style>
     
     .wrapper{width:0em !important}
     .cake-price h5{
    color: #048343 ;
   font-weight: 600;
}

 </style>

<div class="container-fluid" style="padding: 0px">

        <div class="row" style="min-height: 200px; display:flex">

                <div class="row" style="min-height: 200px; display:flex; background-image:url(public/images/Banners/13.png); background-repeat:no-repeat; background-position:center;">
                      <div class="col-md-12" style="text-align: center;margin-top: 5%;margin-bottom: 5%;">
                              <!-- <h3 class="mb-3" style="color: #FFFFFF;text-transform: uppercase;margin-bottom: 2%;">Special Cake</h3> -->
                              <!-- <input value="ORDER NOW " style="color: white; background-color: #9b3e1c;" type="button"> -->
                      </div>
                 </div>
        </div>
</div>
        <!-- <div class="wrapper"> -->
                	<!-- <div class="content"> -->
                		<!-- content here -->
                		<!-- <div class="product-grid product-grid--flexbox">
                			<div class="product-grid__wrapper"> -->
                				<!-- Product list start here -->

								<!-- img block 1--- -->
   
    <section id = "img-sec" style="padding-top:60px;padding-bottom:30px; " >
        <div class="container" style="height:100px;width:400px;">
            <div class="row">
               
                <div class="col-md-12 text-center">
                    <h4 style="font-size:20px;font-width:300px;" class="text-center">Your proceed has been success</h4><br>
                    <p style="margin-bottom:40px ;">Thank you </p>
                </div>
            </div>
        </div>

        
      
                
                 
                
           

        </section>
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

     
                {{--<div class="container-fluid" style="background-color: #048343; color:#fff; margin-top:20px">--}}
            {{--<div class="row" style="color: white; padding: 30px;">--}}
                {{--<div class="col-lg-2"> <h6 style="color:white">CONTACT US</h6></div>--}}
                {{--<div class="col-lg-10">--}}
                    {{--Our customers service personel are available to answer any requests. we will respond within business hours from 8am to 6pm--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

<!-- </div> -->



@endsection
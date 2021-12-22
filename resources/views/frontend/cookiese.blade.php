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

 <div class="row" style="min-height: 200px; display:flex">

<div class="row" style="min-height: 200px; display:flex; background-image:url(public/images/bannersfinal/3.png); background-repeat:no-repeat; background-position:center;">
      <div class="col-md-12" style="text-align: center;margin-top: 5%;margin-bottom: 5%;">
              <!-- <h3 class="mb-3" style="color: #FFFFFF;text-transform: uppercase;margin-bottom: 2%;">Cookiese</h3> -->
            
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
        <div class="container">
            <div class="row">
            <div class="col-md-12 text-center">
                    <h4 style="font-size:30px;font-width:300px;">Cookies</h4><br>
                    <p style="margin-bottom:40px ;"></p>
                </div>
            </div>
        </div>

        <div class = "container">
            <div class = "row">
                @foreach($food as $row)
                <div class="col-md-3">
                    <div class = "img " style="margin-top: 40px; margin-bottom: 20px">
                      <img src="public/Img/{{$row->Img}}" class="img-fluid product-grid__img" alt="Cake img" style="border-radius: 15px 15px 15px 15px">
                     
                     </div>
                  
                    <!-- <div class="img-title text-center" style="margin:10px 0;">
                        <h5>Signature Cakes</h5>
                    </div> -->
                      
   
                    <div class = "img-name text-center" style="margin-top:35px; height: 60px ">
                        <h6> {{$row->Name}}</h6>
                    </div>
                    <div class="cake-price text-center">   
                        <h5>Rs. {{$row->Price}}</h5>        
                    </div>
                    <div class="container" style="text-align :center" >  
      
                       <p class = "design" >
                           
                       <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ $row->FoodId }}" name="id">
                        <input type="hidden" value="{{ $row->Name }}" name="name">
                        <input type="hidden" value="{{ $row->Price }}" name="price">
                        <input type="hidden" value="{{ $row->Img }}"  name="image">
                        <input type="hidden" value="1" name="quantity">
                        <button type="submit" class="btn btn-success" style="color: white; background-color: #048343; font-weight:bold">Add to Cart</button>
                    </form>
                       <!-- <input value="ADD TO CART" style="color: white; background-color: #048343; font-weight:bold" type="button">     -->
                       <!-- <button type="button" class="btn btn-default btn-sm" >  
                       <a href="#" class="btn btn-info btn-lg" style="border-radius:0px!important;">  
                       <span class="glyphicon glyphicon-shopping-cart">  
                       </span> <b style="font-size:15px;"> ADD TO CART</b>  
                       </a>   -->
                       </p>    
                    </div>  
                </div>
                @endforeach
              
                
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
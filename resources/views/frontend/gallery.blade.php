@extends('frontend.common.main')

@section('content')
 <link rel="stylesheet" href="{{ url('plugins/bootstrap/css/card.css') }}">

 <style>
   .card__caption{
     color: white;

   }
</style>
<div class="container-fluid" style="padding: 0px">

        <!-- <div class="row" style="min-height: 200px; display:flex" >

                <div class="row" style="min-height: 200px; display:flex;background-image:url(images/slider-1.jpg);">
                      <div class="col-md-12" style="text-align: center;margin-top: 5%;margin-bottom: 5%;">
                              <h3 class="mb-3" style="color: #FFFFFF;text-transform: uppercase;margin-bottom: 2%;">Gallery</h3>
                              
                      </div>
                 </div>
        </div> -->

		<div class="row" >
        <!-- <div class="wrapper">-->
                	<div class="content" style="display: block;" > 
                		<!-- content here -->
                		<!-- <div class="product-grid product-grid--flexbox">
                			<div class="product-grid__wrapper"> -->

                         
<div class="cake text-center"  style="padding-top: 30px;">
					
							<input type="radio" name="filter" id="all" checked ><label for="all">All</label>
  <input type="radio" name="filter" id="standard"><label for="standard">Standard</label>
  <input type="radio" name="filter" id="dessert"><label for="dessert">Dessert</label>
  <input type="radio" name="filter" id="birthday"><label for="birthday">Birthday</label>
  
  <div class="gallery" >
   
    <figure class="card dessert" style="background-color:#fff!important;">
      <img class="card__image"  loading="lazy" src="public/images/Full cakes/cake/BUTTER COOKIE MALL.jpg" alt="" >
      <figcaption class="card__caption" style="color:black;">BUTTER COOKIES</figcaption>
    </figure>
    <figure class="card standard"  style="background-color:#ff!important;">
      <img class="card__image" loading="lazy" src="public/images/Full cakes/cake/VANILLA  CUP CAKE.jpg" alt="">
      <figcaption class="card__caption"  style="color:black;">VANILLA  CUP CAKE</figcaption>
    </figure>
    <figure class="card birthday"  style="background-color:#fff!important;">
      <img class="card__image" loading="lazy" src="public/images/Full cakes/cake/3.jpg" alt="">
      <figcaption class="card__caption"  style="color:black;">ROLLOING CAKE</figcaption>
    </figure>
    <figure class="card dessert"  style="background-color:#fff!important;">
      <img class="card__image" loading="lazy" src="public/images/Full cakes/cake/Chocolate biscuit pudding.jpg" alt="">
      <figcaption class="card__caption"  style="color:black;">CHOCOLATE BISCUIT PUDDING</figcaption>
    </figure>
    <figure class="card birthday"  style="background-color:#fff!important;">
      <img class="card__image" loading="lazy" src="public/images/Full cakes/cake/9.jpg" alt="">
      <figcaption class="card__caption"  style="color:black;">PRINCESS CAKE</figcaption>
    </figure>
    <figure class="card standard"  style="background-color:#fff!important;">
      <img class="card__image" loading="lazy" src="public/images/Full cakes/cake/Coffee cake(1).jpg" alt="">
      <figcaption class="card__caption"  style="color:black;">COFFEE CAKE</figcaption>
    </figure>
    <figure class="card birthday"  style="background-color:#fff!important;">
      <img class="card__image" loading="lazy" src="public/images/Full cakes/cake/17(1).jpg" alt="">
      <figcaption class="card__caption"  style="color:black;">SONIC CAKE</figcaption>
    </figure>
   
    <figure class="card standard"  style="background-color:#fff!important;">
      <img class="card__image" loading="lazy" src="public/images/Full cakes/cake/Chocolate gateau slice Rs. 100.jpg" alt="">
      <figcaption class="card__caption"  style="color:black;">CHCOLATE GATEAU</figcaption>
    </figure>
    <figure class="card dessert" style="background-color:#fff!important;">
      <img class="card__image" loading="lazy" src="public/images/Full cakes/cake/Chocolate biscuit pudding.jpg" alt="">
      <figcaption class="card__caption"  style="color:black;">CHOCOLATE BISCUIT PUDDING</figcaption>
    </figure>
    <figure class="card standard" style="background-color:#fff!important;">
      <img class="card__image" loading="lazy" src="public/images/Full cakes/cake/Black forest Gateau 1.2kgs Rs. 2290.jpg" alt="">
      <figcaption class="card__caption"  style="color:black;">BLACK FOREST GATEAU</figcaption>
    </figure>
    <figure class="card dessert" style="background-color:#fff!important;">
      <img class="card__image" loading="lazy" src="public/images/Full cakes/cake/Kisses(1).jpg" alt="">
      <figcaption class="card__caption"  style="color:black;">KISSES</figcaption>
    </figure>
    <figure class="card birthday" style="background-color:#fff!important;">
      <img class="card__image" loading="lazy" src="public/images/Full cakes/cake/20210219_174207.jpg" alt="">
      <figcaption class="card__caption"  style="color:black;">DORA CAKE</figcaption>
    </figure>
   
    </div>
</div>
<!-- <div class="donate">
	<p>Help me with a <a href="https://www.paypal.com/donate/?hosted_button_id=NZ9Z8YDHSMMEC" target="_blank" rel="noopener">donation in Paypal</a></p>
</div> -->
</div>














    
























 
                                    
							 </div>
                		</div> 
</div>
                	<!-- </div> -->
                </div>          

        {{--<div class="container-fluid" style="background-color: #9b3e1c; color:#fff; margin-top:20px">--}}
            {{--<div class="row" style="color: white; padding: 30px;">--}}
                {{--<div class="col-lg-2"> <h6>CONTACT US</h6></div>--}}
                {{--<div class="col-lg-10">--}}
                    {{--Our customers service personel are available to answer any requests. we will respond within business hours from 8am to 6pm--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

{{--</div>--}}



@endsection


@extends('frontend.common.main')

@section('content')
 <link rel="stylesheet" href="{{ url('plugins/bootstrap/css/card.css') }}">
<div class="container-fluid" style="padding: 0px">

        <div class="row" style="min-height: 200px; display:flex">

                <div class="row" style="min-height: 200px; display:flex;background-image:url(images/slider-1.jpg);">
                      <div class="col-md-12" style="text-align: center;margin-top: 5%;margin-bottom: 5%;">
                              <h3 class="mb-3" style="color: #FFFFFF;text-transform: uppercase;margin-bottom: 2%;">Cup Cake</h3>
                            
                      </div>
                 </div>
        </div>

		<section id ="cart">
    <div class="container">
        <div class="row">
		<div class ="col-md-6">
	           
			   <div class = "img " style="padding-top:40px;padding-right:40px;">
                      <img src="images/Images/Full cakes/Black forest Gateau 1.2kgs Rs. 2290.jpg" class="img-fluid product-grid__img" alt="Cake img">
                     
        
            </div>


           </div >
           
			<div class="col-md-6">
                <div class="title" style="margin-top:30px;">
                <h3>Chocolate Peanut</h3>
				<h4>Price : LKR 4000</h4>
				<p style="font-size:20px;">Heavenly, decadent and luxorious Chocolate Peanut doughnuts for your indulgence.</p>
				<h5>Catergory : Signature</h5>
				<h4 style="font-size:20px;font-weight:bold;">Special Message :</h4>
				<textarea class="form-control" name="message" placeholder="Message...." rows="3"></textarea>
				<div class="btn" style="margin-top:10px;">
				<button class="button" >+</button>
                 <button class="button">-</button>
		        <input type="number" class="input" value="1" min="1" />
		        <a href="product.php?add-to-cart=1" data-id="1" data-quantity="1" class="add-to-cart ajax product-1" style="font-size:20px;">Add to Cart</a>
				
             </div>
            </div>
        </div>
    </div>
</div>
</section>


<div class="cont">
   <div class="crtdiv">
      <span class="qty">
      <span class="dec">
      <i class="fa fa-minus-square" aria-hidden="true"></i>
      </span>
      <span class="num">
      1
      </span>
      <span class="inc">
      <i class="fa fa-plus-square" aria-hidden="true"></i>
      </span>
      </span>
      <button id="btn" type="button" class="cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add to cart</button>
   </div>
</div>


                					

                              

        <div class="container-fluid" style="background-color: #9b3e1c; color:#fff; margin-top:20px">
            <div class="row" style="color: white; padding: 30px;">
                <div class="col-lg-2"> <h6>CONTACT US</h6></div>
                <div class="col-lg-10">
                    Our customers service personel are available to answer any requests. we will respond within business hours from 8am to 6pm
                </div>
            </div>
        </div>

</div>



@endsection
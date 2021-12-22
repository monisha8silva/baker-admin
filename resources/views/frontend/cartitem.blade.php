@extends('frontend.common.main')

@section('content')
 <link rel="stylesheet" href="{{ url('plugins/bootstrap/css/card.css') }}">
<div class="container-fluid" style="padding: 0px">

        <div class="row" style="min-height: 200px; display:flex">

                <div class="row" style="min-height: 200px; display:flex;background-image:url(images/slider-1.jpg);">
                      <div class="col-md-12" style="text-align: center;margin-top: 5%;margin-bottom: 5%;">
                              <h3 class="mb-3" style="color: #FFFFFF;text-transform: uppercase;margin-bottom: 2%;">Cart</h3>
                            
                      </div>
                 </div>
        </div>

        <div class="wrapper">
                	<div class="content">
                		<!-- content here -->
                		<div class="product-grid product-grid--flexbox">
                			<div class="product-grid__wrapper">
                				<!-- Product list start here -->


                                 <!-- <div class="container">
                                     <div class="row">
                                         <div class="col-md-6">
                                             <img src="public/images/Full cakes/cake/Black forest Gateau 1.2kgs Rs. 2290.jpg" alt="">
                				
                                
                                        </div>
                                        <div class="cart-title">
                                            <h3></h3>
                                    </div>
                                </div> -->
                                <section id ="cart">
    <div class="container">
        <div class="row">
		<div class ="col-md-6">
	           
			   <div class = "img " style="padding-top:40px;padding-right:40px;">
                      <img src="public/images/Full cakes/cake/Black forest Gateau 1.2kgs Rs. 2290.jpg" class="img-fluid product-grid__img" alt="Cake img">
                     
        
            </div>


           </div >
           
			<div class="col-md-6">
                <div class="title" style="margin-top:30px;">
                <h3 style="color:gray;text-transform:UPPERCASE;letter-spacing:1px;font-weight:400;">Item Name</h3>
				<h4 style="color:gray;text-transform:UPPERCASE;letter-spacing:1px;font-weight:400;">Price : LKR </h4>
				<p style="font-size:20px;color:gray;letter-spacing:1px;font-weight:400;">Heavenly, decadent and luxorious Chocolate Peanut doughnuts for your indulgence.</p>
				<h5 style="color:gray;;letter-spacing:1px;font-weight:400;">Item Catergory :</h5>
				<h4 style="font-size:20px;color:gray;text-transform:UPPERCASE;letter-spacing:1px;font-weight:400;">Special Message :</h4>
				<textarea class="form-control" name="message" placeholder="Message...." rows="3"></textarea>
				<div class="btn" style="margin-top:10px;">
                <div class="input-group product_qty">
  <span class="input-group-btn">
									    <button class="btn btn-white btn-minus" type="button">
      <i class="fa fa-minus" aria-hidden="true"></i>
    </button>
  </span>
  <input type="text" class="form-control no-padding add-color text-center height-25" maxlength="3" value="0">
									  <span class="input-group-btn">
									    <button class="btn btn-red btn-plus" type="button">
                                            
      <i class="fa fa-plus" aria-hidden="true"></i>
      
    </button>
  </span>
  
  <a href="viewbag" data-id="1" data-quantity="1" class="add-to-cart ajax product-1 btn btn-primary btn-c" style="font-size:20px;margin-left:40px;margin-top:30px;">Add to Cart</a> 
</div>
                <!-- <div class="input-group">
  <input type="button" value="-" class="button-minus" data-field="quantity">
  <input type="number" step="1" max="" value="1" name="quantity" class="quantity-field">
  <input type="button" value="+" class="button-plus" data-field="quantity">
  <a href="viewbag" data-id="1" data-quantity="1" class="add-to-cart ajax product-1 btn btn-primary btn-c" style="font-size:20px;margin-left:20px;">Add to Cart</a> -->
</div>
		      
             </div>
            </div>
        </div>
    </div>
</div>
</section>



                                <!-- end Single product -->

                			</div>
                		</div>
                	</div>
                </div>
<!-- 
        <div class="container-fluid" style="background-color: #9b3e1c; color:#fff; margin-top:20px">
            <div class="row" style="color: white; padding: 30px;">
                <div class="col-lg-2"> <h6>CONTACT US</h6></div>
                <div class="col-lg-10">
                    Our customers service personel are available to answer any requests. we will respond within business hours from 8am to 6pm
                </div>
            </div>
        </div>

</div> -->



@endsection
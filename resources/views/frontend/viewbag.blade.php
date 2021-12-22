@extends('frontend.common.main')

@section('content')
 <link rel="stylesheet" href="{{ url('plugins/bootstrap/css/card.css') }}">
<div class="container-fluid" style="padding: 0px">

        <div class="row" style="min-height: 200px; display:flex">

                <div class="row" style="min-height: 200px; display:flex;background-image:url(images/slider-1.jpg);">
                      <div class="col-md-12" style="text-align: center;margin-top: 5%;margin-bottom: 5%;">
                              <h3 class="mb-3" style="color: #FFFFFF;text-transform: uppercase;margin-bottom: 2%;">ViewBag & Checkouts</h3>
                            
                      </div>
                 </div>

                
        </div>
                        <!--Viewbag-->
                        <section id="viewbag" style="padding-top:40px;">
                            <div class="container">
                            <div class="row">
                                <div class="col-md-3">
                                    <h4 style="margin-left:80px;color:gray;text-transform:UPPERCASE;letter-spacing:1px;font-weight:400;">Product</h4>
                                    <img src="public/images/Full cakes/cake/Black forest Gateau 1.2kgs Rs. 2290.jpg" alt="">
                               </div>
                               <div class="col-md-3">
                                    <h4 style="margin-left:80px;margin-left:80px;color:gray;text-transform:UPPERCASE;letter-spacing:1px;font-weight:400;">Price</h4>
                                    <h5 style="margin-left:80px;margin-top:40px;margin-left:80px;color:gray;text-transform:UPPERCASE;letter-spacing:1px;font-weight:400;">Price LKR</h5>
                               </div>
                               <div class="col-md-3" >
                                    <h4 style="margin-left:80px;color:gray;text-transform:UPPERCASE;letter-spacing:1px;font-weight:400;">Quantity</h4>
                                    <div class="input-group product_qty" style="margin-top:40px;margin-left:40px">
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
</div>
                                    
                                </div>
                               <div class="col-md-3">
                                    <h4 style="margin-left:80px;color:gray;text-transform:UPPERCASE;letter-spacing:1px;font-weight:400;"">SubTotal</h4>
                                    <h5 style="margin-left:80px;margin-top:40px;">Total</h5>
                               </div>
</div>
</div>
</section>

                                <!-- end Single product -->

                			</div>
                		</div>
                	</div>
                </div>

        <!-- <div class="container-fluid" style="background-color: #9b3e1c; color:#fff; margin-top:20px">
            <div class="row" style="color: white; padding: 30px;">
                <div class="col-lg-2"> <h6>CONTACT US</h6></div>
                <div class="col-lg-10">
                    Our customers service personel are available to answer any requests. we will respond within business hours from 8am to 6pm
                </div>
            </div>
        </div>

</div>

 -->

@endsection
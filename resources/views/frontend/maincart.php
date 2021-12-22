@extends('frontend.common.main')

@section('content')
 <link rel="stylesheet" href="{{ url('plugins/bootstrap/css/card.css') }}">
<div class="container-fluid" style="padding: 0px">

        <div class="row" style="min-height: 200px; display:flex">

                <div class="row" style="min-height: 200px; display:flex;background-image:url(images/slider-1.jpg);">
                      <div class="col-md-12" style="text-align: center;margin-top: 5%;margin-bottom: 5%;">
                              <h3 class="mb-3" style="color: #FFFFFF;text-transform: uppercase;margin-bottom: 2%;">Gallery</h3>
                            
                      </div>
                 </div>
        </div>

         <div class="container">
             <div class="row">
                 <div class="col-md-6">
                     <div class="cart-image">
                        <h3>Image </h3>
                     </div>
                     <div class="col-md-6">
                         <h3>Ferror Rocher Cake</h3>
                        <h5>LKR 3000</h5>
                        <p>chocalete cake has layerd milk chocalte and cream filling. </p>

</div>
</div>
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
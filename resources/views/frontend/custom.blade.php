@extends('frontend.common.main')

@section('content')
<style>
     .wrapper{width:0em !important}
 </style>
 <link rel="stylesheet" href="{{ url('plugins/bootstrap/css/card.css') }}">
<div class="container-fluid" style="padding: 0px">

        <div class="row" style="min-height: 200px; display:flex">

                <div class="row" style="min-height: 200px; display:flex;background-image:url(public/images/bannersfinal/14.png); background-repeat:no-repeat; background-position:center;">
                      <div class="col-md-12" style="text-align: center;margin-top: 5%;margin-bottom: 5%;">
                              <!-- <h3 class="mb-3" style="color: #FFFFFF;text-transform: uppercase;margin-bottom: 2%;">Customized Cakes </h3> -->
                            
                      </div>
                 </div>
        </div>

        <!-- Custom cake-->

        <section id ="custom">
            
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-6">
                        <div class="title-custom" style="margin-top:90px">
                        <h3>Caravan Fresh</h3>
                        </div>
                           
                           <!-- <h3 style="font-size:60px;font-family: 'Lobster Two', cursive;color:#fff">Contact Us</h3> -->
                                 <form action="#" style="font-size:20px;">
                                 
                                 <input type="text"  name="fname" placeholder="Your Name " class="form-control"><br>
                               
                                 <select name="flavours" id="" class="form-control">
                                  <option value="Vanilla(Ribbon)">Vanilla (Ribbon)</option>
                                  <option value="Chocolate">Chocolate</option>
                                     <option value="Nougat">Nougat</option>
                                </select><br>
      
     
                     <input type="text"  name="fname" placeholder="Flavour  " class="form-control"><br>
                                 <!-- <input type="text"  name="fname" placeholder="Email Address" class="form-control"><br> -->
                                 
                                 <input type="text"  name="email" placeholder="(+94)-Phone Number" class="form-control" ><br>

                                 <textarea class="form-control" name="message" placeholder="Message...." rows="3"></textarea>



                                </form><br>

                                <div class="middle">
                                                     <button type="submit" class="btn btn-success" style="color: white; background-color: #048343; font-weight:bold;">Submit</button>
                                                  </div>
                                <!-- <button type="button" class="btn btn-primary btn-lg" style="border-radius:0px;">Submit</button> -->
                  </div>
            
         <div class="col-md-6"  style="margin-top:90px; ">
         <img src="public/images/Full cakes/VANILLA  CUP CAKE.jpg" style="height:500px;widht:500px;float:right;"alt="Paris">
         </div>
</div >

</div>
</section>
      
                			{{----}}
        {{--<div class="container-fluid" style="background-color: #9b3e1c; color:#fff; margin-top:20px">--}}
            {{--<div class="row" style="color: white; padding: 30px;">--}}
                {{--<div class="col-lg-2"> <h6>CONTACT US</h6></div>--}}
                {{--<div class="col-lg-10">--}}
                    {{--Our customers service personel are available to answer any requests. we will respond within business hours from 8am to 6pm--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

{{--</div>--}}


</div>
@endsection
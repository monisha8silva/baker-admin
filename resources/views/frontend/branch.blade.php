@extends('frontend.common.main')

@section('content')
<style>
     .wrapper{width:0em !important}

     #branches{
          margin-top: 10px;
          margin-bottom: 20px;
     }
 </style>
 <link rel="stylesheet" href="{{ url('plugins/bootstrap/css/card.css') }}">
<div class="container-fluid" style="padding: 0px">

        <div class="row" style="min-height: 200px; display:flex">

                <div class="row" style="min-height: 200px; display:flex;background-image:url(public/images/bannersfinal/24.png);">
                      <div class="col-md-12" style="text-align: center;margin-top: 5%;margin-bottom: 5%;">
                              <!-- <h3 class="mb-3" style="color: #FFFFFF;text-transform: uppercase;margin-bottom: 2%;">Branch Network </h3> -->
                            
                      </div>
                 </div>
        </div>

        <!--Branch outlet-->

        <section id="branch outlet">
            <div class="tit-branch">
            <div class="carrers-title text-center" style="margin-top:90px; text-transform: uppercase;">
                        <h3>OUTLETS CLOSE TO YOU</h3>
                        </div>
                <!-- <h3 style="margin-left:520px;margin-top:30px;font-weight:300;margin-bottom:30px;">OUTLETS CLOSE TO YOU </h3> -->
                <!-- <div class="careers-underline"></div> -->
                <!-- <div class="outlet-line"></div> -->
                <div class="container">
              <div class="row">
              <div class="col-md-4">
                  <h3 style="color:black;margin-left:20px;">Head Office</h3>
                  <div class="icon-add">
                        <i class="fas fa-map-marker fa-1x" style="float:left;margin-top: 5px;"></i>
                        </div>
                  <h4 style="font-size:16px;margin-left:25px;" ><strong>Address :<br>
                        No 8,<br>
                         Bund Road, <br>
                         Hendala. </strong></h4>
                         <div class="tel" style="float:left;">
                         <i class="fas fa-phone-alt fa-1x"></i>
                         </div>
                              <h5 style="font-size:16px;margin-left:25px;"><strong>Tel :<br> 011 2 937008 </strong></h5>
                              <div class="tel" style="float:left;">
                              <i class="fas fa-envelope fa-1x"></i>
                         </div>
                         <h5 style="font-size:16px;margin-left:25px;"><strong>Email : <br> caravanfresh@lanka.switzgroup.com</strong></h5>
                         
                        
                       
                         <!-- <p>Address :  No 59/A,<br>
                         C.W.W.Kannangara Mw., <br>
                         Colombo 07.<br><strong>Tel : (+94)-715356581</strong></p><br> -->

                </div>
                  <!-- <div class="col-md-8">
                      

                  <div class="mapouter"><div class="gmap_canvas"><iframe width="1000" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=caravan%20fresh&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.whatismyip-address.com/divi-discount/"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:803px;}</style><a href="https://www.embedgooglemap.net">use google maps on website</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:803px;}</style></div></div>
               </div> -->

               <div class="mapouter"><div class="gmap_canvas"><iframe width="741" height="608" id="gmap_canvas" src="https://maps.google.com/maps?q=Caravan%20Fresh%20-%20The%20Cake%20&%20Pastry%20Shop,wa&t=&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://soap2day-to.com">soap2day</a><br><style>.mapouter{position:relative;text-align:right;height:608px;width:741px;}</style><a href="https://www.embedgooglemap.net">embedded maps google</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:608px;width:741px;}</style></div></div>
               
               
            </div>
          </div>
        </div>







        <!--Outlet end-->
        <!-- Branch -->

        <section id ="branch" style="padding:60px 0;padding-left:120px;">
        <div class="title-branch">
            <h3></h3>
            <div class="container">
                <div class="row ">
                    <div class="col-md-4" id="branches" >
                        <h3 style="font-size:20px;margin-left:20px;color:black;">ALEXANDRA PLACE</h3>
                        <div class="line"></div>
                        <div class="icon-add">
                        <i class="fas fa-map-marker fa-1x" style="float:left;margin-top: 5px;"></i>
                        </div>
                        <h4 style="font-size:16px;margin-left:25px;" ><strong>Address :<br>
                        No 59/A,<br>
                         C.W.W.Kannangara Mw., <br>
                         Colombo 07. </strong></h4>
                         <div class="tel" style="float:left;">
                         <i class="fas fa-phone-alt fa-1x"></i>
                         </div>
                              <h5 style="font-size:16px;margin-left:25px;"><strong>Tel : (+94)-715356583 </strong></h5>
                              <div class="tel" style="float:left;">
                              <!-- <i class="fas fa-envelope fa-1x"></i> -->
                         </div>
                         <!-- <h5 style="font-size:16px;margin-left:25px;"><strong>Email :</strong></h5> -->
                    </div>
                    <div class="col-md-4" >
                        <h3 style="font-size:20px;margin-left:20px;color:black;">BORELLA</h3>
                        <div class="icon-add">
                        <i class="fas fa-map-marker fa-1x" style="float:left;margin-top: 5px;"></i>
                        </div>
                        <h4 style="font-size:16px;margin-left:25px;"><strong>Address :<br>
                        No 1121,<br> Maradan Road,<br> Borella. </strong></h4>
                        <div class="tel" style="float:left;">
                         <i class="fas fa-phone-alt fa-1x"></i>
                         </div>
                              <h5 style="font-size:16px;margin-left:25px;"><strong>Tel : (+94)-715356581</strong></h5>
                              <div class="tel" style="float:left;">
                              <!-- <i class="fas fa-envelope fa-1x"></i> -->
                         </div>
                              <!-- <h5 style="font-size:16px;margin-left:25px;"><strong>Email :</strong></h5> -->
                    </div>
                    <div class="col-md-4" >
                        <h3 style="font-size:20px;margin-left:20px;color:black;">CASTLE STREET  </h3>
                        <div class="icon-add">
                        <i class="fas fa-map-marker fa-1x" style="float:left;margin-top: 5px;"></i>
                        </div>
                        <h4 style="font-size:16px;margin-left:25px;"><strong>Address :<br>
                        No 221,<br> Castle Street,<br> Colombo 08. </strong></h4>
                        <div class="tel" style="float:left;">
                         <i class="fas fa-phone-alt fa-1x"></i>
                         </div>
                              <h5 style="font-size:16px;margin-left:25px;"><strong>Tel :(+94)-718698649 </strong></h5>
                              <div class="tel" style="float:left;">
                              <!-- <i class="fas fa-envelope fa-1x"></i> -->
                         </div>
                              <!-- <h5 style="font-size:16px;margin-left:25px;"><strong>Email :</strong></h5> -->
                    </div>
                    <div class="col-md-4" style="margin-top:20px;">
                    
                        <h3 style="font-size:20px;margin-left:20px;color:black;">HENDALA</h3>
                        <div class="icon-add">
                        <i class="fas fa-map-marker fa-1x" style="float:left;margin-top: 5px;"></i>
                        </div>
                        <h4 style="font-size:16px;margin-left:25px;"><strong>Address :<br>
                        No 320/A, <br>Hendla, <br>Wattala.  </strong></h4>
                        <div class="tel" style="float:left;">
                         <i class="fas fa-phone-alt fa-1x"></i>
                         </div>
                              <h5 style="font-size:16px;margin-left:25px;"><strong>Tel :(+94)-718698650 </strong></h5>
                              <div class="tel" style="float:left;">
                              <!-- <i class="fas fa-envelope fa-1x"></i> -->
                         </div>
                              <!-- <h5 style="font-size:16px;margin-left:25px;"><strong>Email :</strong></h5> -->
                    </div>
                    <div class="col-md-4" style="margin-top:20px;">
                  
                    
                        <h3 style="font-size:20px;margin-left:20px;color:black;">KATUNAYAKE</h3>
                        <div class="icon-add">
                        <i class="fas fa-map-marker fa-1x" style="float:left;margin-top: 5px;"></i>
                        </div>
                        <h4 style="font-size:16px;margin-left:25px;"><strong>Address :<br>
                        No 32/A,<br> Colombo Road,<br> Kurana,<br> Katunayake, </strong></h4>
                        <div class="tel" style="float:left;">
                         <i class="fas fa-phone-alt fa-1x"></i>
                         </div>
                              <h5 style="font-size:16px;margin-left:25px;"><strong>Tel :(+94)-715356578 </strong></h5>
                              <div class="tel" style="float:left;">
                              <!-- <i class="fas fa-envelope fa-1x"></i> -->
                         </div>
                              <!-- <h5 style="font-size:16px;margin-left:25px;"><strong>Email :</strong></h5> -->
                    </div>
                    <div class="col-md-4" style="margin-top:20px;">
                   
                    
                        <h3 style="font-size:20px;margin-left:20px;color:black;">KOLONNAWA</h3>
                        <div class="icon-add">
                        <i class="fas fa-map-marker fa-1x" style="float:left;margin-top: 5px;"></i>
                        </div>
                        <h4 style="font-size:16px;margin-left:25px;"><strong>Address :<br>
                        No 139/A,<br> Kolonnawa Road,<br> Kolonnawa.  </strong></h4>
                        <div class="tel" style="float:left;">
                         <i class="fas fa-phone-alt fa-1x"></i>
                         </div>
                              <h5 style="font-size:16px;margin-left:25px;"><strong>Tel :(+94)-718622672 </strong></h5>
                              <div class="tel" style="float:left;">
                              <!-- <i class="fas fa-envelope fa-1x"></i> -->
                         </div>
                              <!-- <h5 style="font-size:16px;margin-left:25px;"><strong>Email :</strong></h5> -->
                    </div>
                    <div class="col-md-4" style="margin-top:20px;" >
                    
                        <h3 style="font-size:20px;margin-left:20px;color:black;">NARAHENPITA</h3>
                        <div class="icon-add">
                        <i class="fas fa-map-marker fa-1x" style="float:left;margin-top: 5px;"></i>
                        </div>
                        <h4 style="font-size:16px;margin-left:25px;"><strong>Address :<br>
                        No 221,<br> Kirula Road,<br> Narahenpita.  </strong></h4>
                        <div class="tel" style="float:left;">
                         <i class="fas fa-phone-alt fa-1x"></i>
                         </div>
                              <h5 style="font-size:16px;margin-left:25px;"><strong>Tel : (+94)-715356576 </strong></h5>
                              <div class="tel" style="float:left;">
                              <!-- <i class="fas fa-envelope fa-1x"></i> -->
                         </div>
                              <!-- <h5 style="font-size:16px;margin-left:25px;"><strong>Email :</strong></h5> -->
                    </div>
                    <!-- <div class="col-md-4" style="margin-top:20px;">
                  
                        <h3 style="font-size:20px;margin-left:20px;color:black;">MARADANA</h3>
                        <div class="icon-add">
                        <i class="fas fa-map-marker fa-1x" style="float:left;margin-top: 5px;"></i>
                        </div>
                        <h4 style="font-size:16px;margin-left:25px;"><strong>Address :<br>
                        No 23,<br> Siridhamma Mawatha,<br> Colombo 10.  </strong></h4>
                        <div class="tel" style="float:left;">
                         <i class="fas fa-phone-alt fa-1x"></i>
                         </div>
                              <h5 style="font-size:16px;margin-left:25px;"><strong>Tel : (+94)-715356567 </strong></h5>
                              <h5 style="font-size:16px;margin-left:25px;"><strong>Email :</strong></h5>
                    </div> -->
                    <div class="col-md-4" style="margin-top:20px;">
                  
                        <h3 style="font-size:20px;margin-left:20px;color:black;">BAMBALAPITIYA</h3>
                        <div class="icon-add">
                        <i class="fas fa-map-marker fa-1x" style="float:left;margin-top: 5px;"></i>
                        </div>
                        <h4 style="font-size:16px;margin-left:25px;"><strong>Address :<br>
                        No 204,<br> Galle Road,<br> Bambalapitiya,<br> Colombo 4. </strong></h4>
                        <div class="tel" style="float:left;">
                         <i class="fas fa-phone-alt fa-1x"></i>
                         </div>
                              <h5 style="font-size:16px;margin-left:25px;"><strong>Tel : (+94)-715356577 </strong></h5>
                              <div class="tel" style="float:left;">
                              <!-- <i class="fas fa-envelope fa-1x"></i> -->
                         </div>
                              <!-- <h5 style="font-size:16px;margin-left:25px;"><strong>Email :</strong></h5> -->
                    </div>
                    <div class="col-md-4" style="margin-top:20px;">
                    
                        <h3 style="font-size:20px;margin-left:20px;color:black;">KOHUWALA</h3>
                        <div class="icon-add">
                        <i class="fas fa-map-marker fa-1x" style="float:left;margin-top: 5px;"></i>
                        </div>
                        <h4 style="font-size:16px;margin-left:25px;"><strong>Address :<br>
                        No 9, <br>Ground Floor,<br> Sunethradevi Road,<br> Kohuwala.  </strong></h4>
                        <div class="tel" style="float:left;">
                         <i class="fas fa-phone-alt fa-1x"></i>
                         </div>
                              <h5 style="font-size:16px;margin-left:25px;"><strong>Tel :(+94)-718684257 </strong></h5>
                              <div class="tel" style="float:left;">
                              <!-- <i class="fas fa-envelope fa-1x"></i> -->
                         </div>
                              <!-- <h5 style="font-size:16px;margin-left:25px;"><strong>Email :</strong></h5> -->
                    </div>
                    <div class="col-md-4" style="margin-top:20px;">
                   
                        <h3 style="font-size:20px;margin-left:20px;color:black;">NAWALA</h3>
                        <div class="icon-add">
                        <i class="fas fa-map-marker fa-1x" style="float:left;margin-top: 5px;"></i>
                        </div>
                        <h4 style="font-size:16px;margin-left:25px;"><strong>Address :<br>
                        No 266 A,<br> Nawala Road,</br> Nawala.  </strong></h4>
                        <div class="tel" style="float:left;">
                         <i class="fas fa-phone-alt fa-1x"></i>
                         </div>
                              <h5 style="font-size:16px;margin-left:25px;"><strong>Tel :(+94)-718701688</strong></h5>
                              <div class="tel" style="float:left;">
                              <!-- <i class="fas fa-envelope fa-1x"></i> -->
                         </div>
                              <!-- <h5 style="font-size:16px;margin-left:25px;"><strong>Email :</strong></h5> -->
                    </div>
                    <div class="col-md-4" style="margin-top:20px;" >
                  
                        <h3 style="font-size:20px;margin-left:20px;color:black;">NEGOMBO</h3>
                        <div class="icon-add">
                        <i class="fas fa-map-marker fa-1x" style="float:left;margin-top: 5px;"></i>
                        </div>
                        <h4 style="font-size:16px;margin-left:25px;"><strong>Address :<br>
                        No 1,<br> 4Th Lane Nicholas Marcus Mawatha,<br> Negombo. </strong></h4>
                        <div class="tel" style="float:left;">
                         <i class="fas fa-phone-alt fa-1x"></i>
                         </div>
                              <h5 style="font-size:16px;margin-left:25px;"><strong>Tel : (+94)-715356558 </strong></h5>
                              <div class="tel" style="float:left;">
                              <!-- <i class="fas fa-envelope fa-1x"></i> -->
                         </div>
                              <!-- <h5 style="font-size:16px;margin-left:25px;"><strong>Email :</strong></h5> -->
                    </div>
                    <div class="col-md-4" style="margin-top:20px;">
                   
                        <h3 style="font-size:20px;margin-left:20px;color:black;">MATTAKKULIYA</h3>
                        <div class="icon-add">
                        <i class="fas fa-map-marker fa-1x" style="float:left;margin-top: 5px;"></i>
                        </div>
                        <h4 style="font-size:16px;margin-left:25px;"><strong>Address :<br>
                        No 80/A,<br> Vystwyke Road,<br> Mattakkuliya, Colombo 15. </strong></h4>
                        <div class="tel" style="float:left;">
                         <i class="fas fa-phone-alt fa-1x"></i>
                         </div>
                              <h5 style="font-size:16px;margin-left:25px;"><strong>Tel : (+94)-718684227</strong></h5>
                              <div class="tel" style="float:left;">
                              <!-- <i class="fas fa-envelope fa-1x"></i> -->
                         </div>
                              <!-- <h5 style="font-size:16px;margin-left:25px;"><strong>Email :</strong></h5> -->
                    </div>
                    <div class="col-md-4" style="margin-top:20px;">
                  
                        <h3 style="font-size:20px;margin-left:20px;color:black;">BLOEMENDHAL</h3>
                        <div class="icon-add">
                        <i class="fas fa-map-marker fa-1x" style="float:left;margin-top: 5px;"></i>
                        </div>
                        <h4 style="font-size:16px;margin-left:25px;"><strong>Address :<br>
                        No 686,<br> Bloemendhal Road,<br> Modara,<br> Colombo 15.  </strong></h4>
                        <div class="tel" style="float:left;">
                         <i class="fas fa-phone-alt fa-1x"></i>
                         </div>
                              <h5 style="font-size:16px;margin-left:25px;"><strong>Tel :(+94)-012231362</strong></h5>
                              <div class="tel" style="float:left;">
                              <!-- <i class="fas fa-envelope fa-1x"></i> -->
                         </div>
                              <!-- <h5 style="font-size:16px;margin-left:25px;"><strong>Email :</strong></h5> -->
                    </div>
                    <div class="col-md-4" style="margin-top:20px;">
                   
                        <h3 style="font-size:20px;margin-left:20px;color:black;">DEANS ROAD</h3>
                        <div class="icon-add">
                        <i class="fas fa-map-marker fa-1x" style="float:left;margin-top: 5px;"></i>
                        </div>
                        <h4 style="font-size:16px;margin-left:25px;"><strong>Address :<br>
                        Caravan Branch Address  </strong></h4>
                        <div class="tel" style="float:left;">
                         <i class="fas fa-phone-alt fa-1x"></i>
                         </div>
                              <h5 style="font-size:16px;margin-left:25px;"><strong>Tel :(+94)-711266730 </strong></h5>
                              <div class="tel" style="float:left;">
                              <!-- <i class="fas fa-envelope fa-1x"></i> -->
                         </div>
                              <!-- <h5 style="font-size:16px;margin-left:25px;"><strong>Email :</strong></h5> -->
                    </div>
                    <div class="col-md-4" style="margin-top:20px;">
                   
                        <h3 style="font-size:20px;margin-left:20px;color:black;">ALUTHKADE - COLOMBO 12.</h3>
                        <div class="icon-add">
                        <i class="fas fa-map-marker fa-1x" style="float:left;margin-top: 5px;"></i>
                        </div>
                        <h4 style="font-size:16px;margin-left:25px;"><strong>Address :<br>
                        No 48, <br>Abdul Hameed Mawatha,<br> Colombo 12.  </strong></h4>
                        <div class="tel" style="float:left;">
                         <i class="fas fa-phone-alt fa-1x"></i>
                         </div>
                              <h5 style="font-size:16px;margin-left:25px;"><strong>Tel :(+94)-705982711 </strong></h5>

                              <div class="tel" style="float:left;">
                              <!-- <i class="fas fa-envelope fa-1x"></i> -->
                         </div>                             
                          <!-- <h5 style="font-size:16px;margin-left:25px;"><strong>Email :</strong></h5> -->
</div>
                    
                    <div class="col-md-4" style="margin-top:20px;">
                   
                        <h3 style="font-size:20px;margin-left:20px;color:black;">KOLONNAWA - NEW</h3>
                        <div class="icon-add">
                        <i class="fas fa-map-marker fa-1x" style="float:left;margin-top: 5px;"></i>
                        </div>
                        <h4 style="font-size:16px;margin-left:25px;"><strong>Address :<br>
                        No 260/B,<br> Kolonnawa Road,<br> Kolonnawa.  </strong></h4>
                        <div class="tel" style="float:left;">
                         <i class="fas fa-phone-alt fa-1x"></i>
                         </div>
                              <h5 style="font-size:16px;margin-left:25px;"><strong>Tel :(+94)-705982722</strong></h5>
                              <div class="tel" style="float:left;">
                              <!-- <i class="fas fa-envelope fa-1x"></i> -->
                         </div>
                              <!-- <h5 style="font-size:16px;margin-left:25px;"><strong>Email :</strong></h5> -->
                    </div>
                    <div class="col-md-4" style="margin-top:20px;">
                   
                   <h3 style="font-size:20px;margin-left:20px;color:black;">KATUWAPITIYA</h3>
                   <div class="icon-add">
                        <i class="fas fa-map-marker fa-1x" style="float:left;margin-top: 5px;"></i>
                        </div>
                   <h4 style="font-size:16px;margin-left:25px;"><strong>Address :<br>
                   No 3/C,<br> Katuwapitiya Road,<br> Negombo. </strong></h4>
                   <div class="tel" style="float:left;">
                         <i class="fas fa-phone-alt fa-1x"></i>
                         </div>
                         <h5 style="font-size:16px;margin-left:25px;"><strong>Tel :(+94)-703826495</strong></h5>
                         <div class="tel" style="float:left;">
                              <!-- <i class="fas fa-envelope fa-1x"></i> -->
                         </div>
                         <!-- <h5 style="font-size:16px;margin-left:25px;"><strong>Email :</strong></h5> -->
               </div>
               <div class="col-md-4" style="margin-top:20px;">
                   
                   <h3 style="font-size:20px;margin-left:20px;color:black;">RADDOLUGAMA</h3>
                   <div class="icon-add">
                        <i class="fas fa-map-marker fa-1x" style="float:left;margin-top: 5px;"></i>
                        </div>
                   <h4 style="font-size:16px;margin-left:25px;"><strong>Address :<br>
                   No 65/ A,<br> National Housing Scheme,<br> Raddolugama. </strong></h4>
                   <div class="tel" style="float:left;">
                         <i class="fas fa-phone-alt fa-1x"></i>
                         </div>
                         <h5 style="font-size:16px;margin-left:25px;"><strong>Tel:(+94)-701587828</strong></h5>
                         <div class="tel" style="float:left;">
                              <!-- <i class="fas fa-envelope fa-1x"></i> -->
                         </div>
                         <!-- <h5 style="font-size:16px;margin-left:25px;"><strong>Email :</strong></h5> -->
               </div>
               <div class="col-md-4" style="margin-top:20px;">
                   
                   <h3 style="font-size:20px;margin-left:20px;color:black;">GRANDPASS</h3>
                   <h4 style="font-size:16px;margin-left:20px;"><strong>Address :<br>
                   No 49/ A,<br> Grandpass Road,<br> Colombo 14.. </strong></h4>
                   <div class="tel" style="float:left;">
                         <i class="fas fa-phone-alt fa-1x"></i>
                         </div>
                         <h5 style="font-size:16px;margin-left:25px;"><strong>Tel :(+94)-712830271</strong></h5>
                         <div class="tel" style="float:left;">
                              <!-- <i class="fas fa-envelope fa-1x"></i> -->
                         </div>
                         <!-- <h5 style="font-size:16px;margin-left:25px;"><strong>Email :</strong></h5> -->
               </div>
<!-- 
               <div class="col-md-4" style="margin-top:20px;">
                   
                   <h3 style="font-size:20px;margin-left:20px;color:black;">PRODUCTION</h3>
                   <div class="icon-add">
                        <i class="fas fa-map-marker fa-1x" style="float:left;margin-top: 5px;"></i>
                        </div>
                   <h4 style="font-size:16px;margin-left:25px;"><strong>Address :<br>
                   No 8,<br> Bund Road,<br> Hendala,<br> Wattala. </strong></h4>
                   <div class="tel" style="float:left;">
                         <i class="fas fa-phone-alt fa-1x"></i>
                         </div>
                         <h5 style="font-size:16px;margin-left:25px;"><strong>Tel:0112937008</strong></h5>
                         <div class="tel" style="float:left;">
                              <i class="fas fa-envelope fa-1x"></i>
                         </div>
                         <h5 style="font-size:16px;margin-left:25px;"><strong>Email : caravanfresh@lanka.switzgroup.com</strong></h5>
               </div> -->

               <!-- <div class="col-md-4" style="margin-top:20px;">
                   
                   <h3 style="font-size:20px;margin-left:20px;color:black;">STORE</h3>
                   <div class="icon-add">
                        <i class="fas fa-map-marker fa-1x" style="float:left;margin-top: 5px;"></i>
                        </div>
                   <h4 style="font-size:16px;margin-left:25px;"><strong>Address :<br>
                   No 8,<br> Bund Road,<br> Hendala,<br> Wattala. </strong></h4>
                   <div class="tel" style="float:left;">
                         <i class="fas fa-phone-alt fa-1x"></i>
                         </div>
                         <h5 style="font-size:16px;margin-left:25px;"><strong>Tel :(+94)-715356557<br>Office Number : 0112937008</strong></h5>
                         <div class="tel" style="float:left;">
                              <i class="fas fa-envelope fa-1x"></i>
                         </div>
                         <h5 style="font-size:16px;margin-left:25px;"><strong>Email :</strong></h5>
               </div> -->

               <!-- <div class="col-md-4" style="margin-top:20px;">
                   
                   <h3 style="font-size:20px;margin-left:20px;color:black;">MAIN FACTORY (OUTLET)</h3>
                   <div class="icon-add">
                        <i class="fas fa-map-marker fa-1x" style="float:left;margin-top: 5px;"></i>
                        </div>
                   <h4 style="font-size:16px;margin-left:25px;"><strong>Address :<br>
                   8,<br> Bund Road,<br> Hendala,<br> Wattala </strong></h4>
                   <div class="tel" style="float:left;">
                         <i class="fas fa-phone-alt fa-1x"></i>
                         </div>
                         <h5 style="font-size:16px;margin-left:25px;"><strong>Tel :011 2 937008</strong></h5>
                         <div class="tel" style="float:left;">
                              <i class="fas fa-envelope fa-1x"></i>
                         </div>
                         <h5 style="font-size:16px;margin-left:25px;"><strong>Email : caravanfresh@lanka.switzgroup.com</strong></h5>
               </div> -->

               <!-- <div class="col-md-4" style="margin-top:20px;">
                   
                   <h3 style="font-size:20px;margin-left:20px;color:black;">HR</h3>
                   <div class="icon-add">
                        <i class="fas fa-map-marker fa-1x" style="float:left;margin-top: 5px;"></i>
                        </div>
                   <h4 style="font-size:16px;margin-left:25px;"><strong>Address :<br>
                   8,<br> Bund Road, <br>Hendala,<br>Wattala</strong></h4>
                   <div class="tel" style="float:left;">
                         <i class="fas fa-phone-alt fa-1x"></i>
                         </div>
                         <h5 style="font-size:16px;margin-left:25px;"><strong>Tel :(+94)-00000000</strong></h5>
                         <div class="tel" style="float:left;">
                              <i class="fas fa-envelope fa-1x"></i>
                         </div>
                         <h5 style="font-size:16px;margin-left:25px;"><strong>Email :</strong></h5>
               </div> -->
               <div class="col-md-4" style="margin-top:20px;">
                   
                   <h3 style="font-size:20px;margin-left:20px;color:black;">SLAVE ISLAND</h3>
                   <div class="icon-add">
                        <i class="fas fa-map-marker fa-1x" style="float:left;margin-top: 5px;"></i>
                        </div>
                   <h4 style="font-size:16px;margin-left:25px;"><strong>Address :<br>
                   40/39,<br> Malay Street,<br> Colombo 2. </strong></h4>
                   <div class="tel" style="float:left;">
                         <i class="fas fa-phone-alt fa-1x"></i>
                         </div>
                         <h5 style="font-size:16px;margin-left:25px;"><strong>Tel :(+94)-0000000</strong></h5>
                         <div class="tel" style="float:left;">
                              <!-- <i class="fas fa-envelope fa-1x"></i> -->
                         </div>
                         <!-- <h5 style="font-size:16px;margin-left:25px;"><strong>Email :</strong></h5> -->
               </div>
               <div class="col-md-4" style="margin-top:20px;">
                   
                   <h3 style="font-size:20px;margin-left:20px;color:black;">KOTAHENA</h3>
                   <div class="icon-add">
                        <i class="fas fa-map-marker fa-1x" style="float:left;margin-top: 5px;"></i>
                        </div>
                   <h4 style="font-size:16px;margin-left:25px;"><strong>Address :<br>
                   118,<br> Jampettah Street,<br> Colombo 13.</strong></h4>
                   <div class="tel" style="float:left;">
                         <i class="fas fa-phone-alt fa-1x"></i>
                         </div>
                         <h5 style="font-size:16px;margin-left:25px;"><strong>Tel :(+94)-718698648</strong></h5>
                         <div class="tel" style="float:left;">
                              <!-- <i class="fas fa-envelope fa-1x"></i> -->
                         </div>
                         <!-- <h5 style="font-size:16px;margin-left:25px;"><strong>Email :</strong></h5> -->
               </div>
               <div class="col-md-4" style="margin-top:20px;">
                   
                   <h3 style="font-size:20px;margin-left:20px;color:black;">PERIYAMULLA</h3>
                   <div class="icon-add">
                        <i class="fas fa-map-marker fa-1x" style="float:left;margin-top: 5px;"></i>
                        </div>
                   <h4 style="font-size:16px;margin-left:25px;"><strong>Address :<br>
                   Katunayaka </strong></h4>
                   <div class="tel" style="float:left;">
                         <i class="fas fa-phone-alt fa-1x"></i>
                         </div>
                         <h5 style="font-size:16px;margin-left:25px;"><strong>Tel :(+94)-706253498</strong></h5>
                         <div class="tel" style="float:left;">
                              <!-- <i class="fas fa-envelope fa-1x"></i> -->
                         </div>
                         <!-- <h5 style="font-size:16px;margin-left:25px;"><strong>Email :</strong></h5> -->
               </div>
               


</div>
</div>
</section>

       
<!--                 			
        <div class="container-fluid" style="background-color: #9b3e1c; color:#fff; margin-top:20px">
            <div class="row" style="color: white; padding: 30px;">
                <div class="col-lg-2"> <h6>CONTACT US</h6></div>
                <div class="col-lg-10">
                    Our customers service personel are available to answer any requests. we will respond within business hours from 8am to 6pm
                </div>
            </div>
        </div> -->

</div>



@endsection
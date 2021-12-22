@extends('frontend.common.main')

@section('content')
<style>

body {
        font-family: 'Signika', sans-serif;
            }
            
     .wrapper{width:0em !important}
 </style>

<script src="https://www.google.com/recaptcha/api.js"></script>
<link rel="stylesheet" href="{{ url('plugins/bootstrap/css/card.css') }}">
<div class="container-fluid" style="padding: 0px">

 <div class="row" style="min-height: 200px; display:flex">

<div class="row" style="min-height: 200px; display:flex;background-image:url(public/images/bannersfinal/23.png); background-repeat:no-repeat; background-position:center;">
      <div class="col-md-12" style="text-align: center;margin-top: 5%;margin-bottom: 5%;">
              <!-- <h3 class="mb-3" style="color: #FFFFFF;text-transform: uppercase;margin-bottom: 2%;">Burgers</h3> -->
            
      </div>
 </div>
</div>
</div>


<!-- {{--Contact Us Section--}} -->
<section id="map">

        {{--map   --}}
        <div class="row" style="margin-top:25px;">
           <div class="col-md-12">
              <div class="mapouter">
                  <div class="gmap_canvas">
                        <iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Caravan%20Fresh%20-%20The%20Cake%20&%20Pastry%20Shop,wa&t=&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        <a href="https://soap2day-to.com">soap2day</a><br>
                            <style>
                            .mapouter{position:relative;text-align:right;height:500px;width:100%;}
                            </style>
                            <a href="https://www.embedgooglemap.net">embedded maps google</a>
                            <style>
                            .gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}
                            </style>
                    </div>
                </div>
           </div>
        </div>
</section>

<footer>
 <section id ="contact" >
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-left">
                            <div class="title-custom" style="margin-top:90px; text-transform: uppercase;">
                        <h3>Caravan Fresh</h3>
                        </div>
                           
                                    <!-- <h3 style="font-size:60px;font-family: 'Lobster Two', cursive;color:gray;">Caravan Fresh</h3> -->
                                    <p style="font-size:17px;letter-spacing:1px;color:gray;">Caravan fresh is a chain of gourmet bakery and patisserie shops catering to a wide range of daily, indulgence and celebration needs with its scrumptious array of cakes, breads, savories and cookies. Caravan fresh has become synonymous with the word "Cake".</p>

                                 <div class="contact-info">
                                         <address> </address>
                                         <div class="phone-fax-email" >
                                                 <p style="color:gray!important;font-size:14px;letter-spacing:1px;">
                                                 <strong>Phone :</strong>&nbsp 011 - 2 937008<br>
                                                 <!-- <strong>Fax&nbsp&nbsp&nbsp&nbsp&nbsp   :</strong>&nbsp <br> -->
                                                 <strong>Email&nbsp&nbsp :</strong>&nbspcaravanfresh@lanka.switzgroup.com<br>
                                                 <p>
                                         </div>
                                 </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                                 <div class="contact-right">
                                 <div class="title-custom" style="margin-top:90px; text-transform: uppercase;">
                        <h3>Contact Us</h3>
                        </div>
                           
                                    <!-- <h3 style="font-size:60px;font-family: 'Lobster Two', cursive;color:gray;">Contact Us</h3> -->
                                          <form id="loginform" class="form-horizontal" role="form" action="{{ route('contact-request') }}">
                                                  <input type="text"  name="fname" placeholder="Your Name " class="form-control"><br>
                                                  <input type="text"  name="email" placeholder="Email Address" class="form-control" ><br>
                                                  <textarea class="form-control" name="message" placeholder="Message...." rows="3"></textarea><br>
                                                  <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}" style="margin;top:20px;">
                                                      <div class="col-md-12">
                                                            {!! app('captcha')->display() !!}
                                                            @if ($errors->has('g-recaptcha-response'))
                                                                <span class="help-block text-danger">
                                                                    <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                                                </span>
                                                            @endif
                                                      </div>
                                                  </div>

                                                  <div class="middle">
                                                     <button type="submit" class="btn btn-success" style="color: white; background-color: #048343; font-weight:bold;">Submit</button>
                                                  </div>
                                                  <!-- <button type="submit" class="btn btn-sm" style="color: white; background-color: #048343; font-weight:bold">Submit</button> -->
                                         </form>
                                         <br>
                                 </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
</footer>

{{--<div class="container-fluid" style="background-color: #048343; color:#fff; margin-top:20px">--}}
        {{--<div class="row" style="color: white; padding: 30px;">--}}
            {{--<div class="col-lg-2"> <h6>CONTACT US</h6></div>--}}
                {{--<div class="col-lg-10">--}}
                    {{--Our customers service personel are available to answer any requests. we will respond within business hours from 8am to 6pm--}}
                {{--</div>--}}
        {{--</div>--}}
{{--</div>--}}

<script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.sitekey') }}"></script>
<script>
         grecaptcha.ready(function() {
             grecaptcha.execute('{{ config('services.recaptcha.sitekey') }}', {action: 'contact'}).then(function(token) {
                if (token) {
                  document.getElementById('recaptcha').value = token;
                }
             });
         });
</script>
        
 
@endsection

@extends('frontend.common.main')

@section('content')
<style>
     .wrapper{width:0em !important}
 </style>

<link rel="stylesheet" href="{{ url('plugins/bootstrap/css/card.css') }}">
<div class="container-fluid" style="padding: 0px">

<div class="row" style="min-height: 200px; display:flex">

<div class="row" style="min-height: 200px; display:flex;background-image:url(public/images/bannersfinal/21.png); background-repeat:no-repeat; background-position:center; margin-left:0">
      <div class="col-md-12" style="text-align: center;margin-top: 5%;margin-bottom: 5%;">
              <!-- <h3 class="mb-3" style="color: #FFFFFF;text-transform: uppercase;margin-bottom: 2%;">Burgers</h3> -->
            
      </div>
 </div>
</div>
</div>

<section id = "about" style="margin:60px 0">
   
    <div class="container">
        <div class="row">
            <div class="col-md-6">
            <img src="public/images/slider-1.jpg" style="height:300px;widht:300px;float:left;"alt="Paris">
            </div> 
            <div class="col-md-6">
              <div class="about-content-box">
                  <div class="about-title">
                    <!--<h3 style="font-size:30px;font-weight:400;">About Us</h3> -->
                  </div>
                  <div class="title-custom" style="margin-top:20px; text-transform: uppercase;">
                        <h3>Who We are</h3>
                        </div>
                  <div class="about-desc" style="font-size:18apx;letter-spacing: 1px;">
                      <p>"Caravan fresh is a chain of gourmet bakery and patisserie shops catering to a wide range of daily, indulgence and celebration needs with its scrumptious array of cakes, breads, savories and cookies. Caravan fresh has become synonymous with the word "Cake".</p>

<p>A heaven for cakes and pastries, the bakery offers freshly prepared appetizing treats ranging from the traditional to the exotic, to the "made to order" recipes."</p>
                  </div>
              </div>
            </div>
        </div>
    </div>
</section>
@endsection

                   


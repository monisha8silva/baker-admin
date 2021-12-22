@extends('frontend.common.main')

@section('content')


 
<link  rel="stylesheet" href="public/plugins/bootstrap/css/style.css">
<link rel="stylesheet" href="resources/css/app.css">
<link rel="stylesheet" href="public/plugins/bootstrap/css/floating-wpp.min.css">  



<style>
    
    body {
        font-family: 'Signika', sans-serif;
            }
    .bg-grey {
                background: #292929;
            }
/*
.carousel-control-prev,
.carousel-control-next
            
 #carouselExampleControls{
    width: 100%;
} */
h3{
    font-size: 50px;
    font-weight: bold;
}
.container{
    max-width: 75%;
}
.img {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .25s ease;
  backface-visibility: hidden;
  border-radius: 0 !important;
}

.middle {
  transition: .25s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.img:hover img {
  opacity: 0.3;
}

.img:hover .middle {
  opacity: 1;
}

.cart {
  background-color: #04AA6D;
  color: white;
  font-size: 16px;
  padding: 16px 15px;
}

.img-name{
    font-weight: bold;
}
.cake-price{
    color: #04AA6D;
    font-weight: bold;
}
 
</style>

<script type="text/javascript" src="public/plugins/bootstrap/js/floating-wpp.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<div id="carouselControls" class="container-fluid" data-ride="carousel" style="padding: 0px;">
<pqwert></p>
         <div class="row" style="min-height: 600px; display:flex">
            <div  class="home-slider owl-carousel js-fullheight" style="z-index: -2;">

                <div class="slider-item js-fullheight" style="background-image:url(images/wall.jpg);">
                    <div class="overlay"></div>
                    <div class="container">
                    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                        <div class="col-md-12 ftco-animate">
                            <div class="text w-100 text-left">
                            <h3 class="mb-3">Baked Fresh For You</h3>
                                <input value="ORDER NOW" style="color: white; background-color: #048343;" type="button">
                            </div>
                        </div>
                        </div>
                    </div>
                </div> 
  
                <div class="slider-item js-fullheight" style="background-image:url(images/slider-2.jpg);">
                    <div class="overlay"></div>
                    <div class="container">
                    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                        <div class="col-md-12 ftco-animate">
                            <div class="text w-100 text-left">
                                <h2>A Little Bliss In every Bite</h2>
                                <h3 class="mb-3">MY HAPPY PLACE</h3>
                                <input value="ORDER NOW" style="color: white; background-color: #048343;" type="button">
                            </div>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="slider-item js-fullheight" style="background-image:url(images/slider-3.jpg);">
                    <div class="overlay"></div>
                    <div class="container">
                    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                        <div class="col-md-12 ftco-animate">
                            <div class="text w-100 text-left">
                                <h3 class="mb-3">Taste Of Tradition</h3>
                                <input value="ORDER NOW " style="color: white; background-color: #048343;" type="button">
                            </div>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="slider-item js-fullheight" style="background-image:url(images/slider-1.jpg);">
                    <div class="overlay"></div>
                    <div class="container">
                    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                        <div class="col-md-12 ftco-animate">
                            <div class="text w-100 text-left">
                                <h3 class="mb-3">Taste Of Tradition</h3>
                                <input value="ORDER NOW " style="color: white; background-color: #048343;" type="button">
                            </div>
                        </div>
                        </div>
                    </div>
                </div>

            </div>
            <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev" style="z-index: -1;">
                <span class="carousel-control-prev-icon" aria-hidden="true" id="previous"></span>
                    <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next" style="z-index: -1;">
                 <span class="carousel-control-next-icon" aria-hidden="true"  id="next"></span>
                    <span class="sr-only">Next</span>
            </a>
        </div> 
        

        <!-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/slider-1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/slider-2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/slider-3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> -->
        
          <!--image slider start-->
<!--    
            <div class="slider">
                <div class="slides">

                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">

                <div class="slide first">
                    <img src="public/images/Full cakes/cake/VANILLA  CUP CAKE.jpg" alt="">
                </div>
                <div class="slide ">
                    <img src="public/images/Full cakes/cake/VANILLA  CUP CAKE.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="public/images/Full cakes/cake/VANILLA  CUP CAKE.jpg" alt="">
                </div>
                <div class="slide ">
                    <img src="public/images/Full cakes/cake/VANILLA  CUP CAKE.jpg" alt="">
                </div>

                    <div class="navigation-auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        <div class="auto-btn3"></div>
                        <div class="auto-btn4"></div>

                       </div>
                       
                </div>

                <div class="navigation-manual">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                    <label for="radio4" class="manual-btn"></label>
                </div>

               </div>
            




 --> 

           <!--image slider end -->

</div>
        <!-- img block 1--- -->
   
        <section id = "img-sec" style="padding-top:60px;padding-bottom:30px; " >
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <!-- <h4 style="font-size:30px;font-width:300px;">Signature Gateau Cakes</h4><br> -->
                        <p style="margin-bottom:40px ;"></p>
                    </div>
                </div>
            </div>

            <div class = "container">
                <div class = "row">

               
                @foreach($food as $row)
                    <div class="col-md-3">
                        <div class = "img " style="margin-bottom:10px!important;">
                          <img src="public/Img/{{$row->Img}}" class="img-fluid product-grid__img" alt="Cake img" style="border-radius:none !important" >

                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ $row->FoodId }}" name="id">
                        <input type="hidden" value="{{ $row->Name }}" name="name">
                        <input type="hidden" value="{{ $row->Price }}" name="price">
                        <input type="hidden" value="{{ $row->Img }}"  name="image">
                        <input type="hidden" value="1" name="quantity">
                        <div class="middle">
                        <button type="submit" class="btn btn-success" style="color: white; background-color: #048343; font-weight:bold">Add to Cart</button>
                        </div>
                   
                        </form>
                          
                          
                         </div>

                       
                        <div class = "img-name text-center">
                            <h6>{{$row->Name}}</h6>
                        </div>
                        <div class="cake-price text-center">
                            <h5>LKR {{$row->Price}}</h5>
                        </div>
                      
                    </div>

                    @endforeach


                </div>
                </div>

        </section>
        <!--End block 1 -->

        <!-- img block 2-->
        <section id = "img-sec" style="padding:30px 0;" >
        <div class="container">
            <div class="row">
          
                <div class="col-md-12 text-center">
                    <h4 style="font-size:30px;">Birthday Cakes</h4><br>
                    <p style="margin-bottom:40px ;"></p>
                </div>
            </div>
        </div>

        <div class = "container">
            <div class = "row">

            @foreach ($food2 as $row)

                <div class="col-md-3" style="margin:20px 0;">
                    <div class = "img" style="margin-bottom:10px!important;">
                      <img src="public/Img/{{$row->Img}}" class="img-fluid product-grid__img" alt="Cake img" >
                      <div class="middle">
                        <!-- <div class="cart">Add to Cart</div> -->
                        
                      </div>
                    </div>
                    
                    
                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ $row->FoodId }}" name="id">
                        <input type="hidden" value="{{ $row->Name }}" name="name">
                        <input type="hidden" value="{{ $row->Price }}" name="price">
                        <input type="hidden" value="{{ $row->Img }}"  name="image">
                        <input type="hidden" value="1" name="quantity">
                        <div class="middle">
                        <button type="submit" class="btn btn-success" style="color: white; background-color: #048343; font-weight:bold">Add to Cart</button>
                        </div>
                        <!-- <div class="middle">
                        <button type="submit" class="btn btn-success" style="color: white; background-color: #048343; font-weight:bold">Add to Cart</button>
                        </div> -->
                   
                        </form>
                    <div class = "img-name text-center" style="margin-top:20px !Important;">
                        <h6>{{$row->Name}}</h6>
                    </div>
                    <div class="cake-price text-center">   
                        <h5>LKR {{$row->Price}}</h5>        
                    </div>
                 
                </div>
                @endforeach
                </div>
                </div>
               
                
         
                       
            </div>
        </div>

        </section>
        <!-- End block 2-->

        <!--Cookies img block 3 -->

        <section id = "img-sec" style="padding:30px 0;" >
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h4 style="font-size:30px;">Desserts</h4><br>
                    <p style="margin-bottom:40px ;"></p>
                </div>
            </div>
        </div>

        <div class = "container">
            <div class = "row">
            @foreach ($food3 as $row)
                <div class="col-md-3" style="margin:20px 0;">
                     <div class = "img" style="margin-bottom:10px!important;">
                      <img src="public/Img/{{$row->Img}}" class="img-fluid product-grid__img" alt="Cake img" style="border-radius: 15px 15px 15px 15px">
                      <div class="middle">
                        <!-- <div class="cart">Add to Cart</div> -->
                        <input value="ADD TO CART" style="color: white; background-color: #048343;" type="button">
                      </div>
                    </div>
                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ $row->FoodId }}" name="id">
                        <input type="hidden" value="{{ $row->Name }}" name="name">
                        <input type="hidden" value="{{ $row->Price }}" name="price">
                        <input type="hidden" value="{{ $row->Img }}"  name="image">
                        <input type="hidden" value="1" name="quantity">
                        <div class="middle">
                        <button type="submit" class="btn btn-success" style="color: white; background-color: #048343; font-weight:bold">Add to Cart</button>
                        </div>
                   
                        </form>
                     
                 
                    <div class = "img-name text-center">
                        <h6>{{$row->Name}}</h6>
                    </div>
                    <div class="cake-price text-center">   
                        <h5>LKR {{$row->Price}}</h5>        
                    </div>
                   
                </div>
                @endforeach
             
                     
            
                </div> 
           </div>
        </section> -->


                          
            

            <!-- End Block 3-->


        {{--<div class="container-fluid" style="background-color: #048343; color:#fff; margin-top:20px">--}}
            {{--<div class="row" style="color: white; padding: 30px;">--}}
                {{--<div class="col-lg-2"> <h6 style="color:white">CONTACT US</h6></div>--}}
                {{--<div class="col-lg-10"> --}}
                    {{--Our customers service personel are available to answer any requests. we will respond within business hours from 8am to 6pm--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}





@endsection
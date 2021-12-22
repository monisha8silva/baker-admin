<!DOCTYPE html>
<html>

<head>
    <title> BAKERS</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="Description" CONTENT="">

    @yield('header')
    

   <link rel="stylesheet" href="{{ url('plugins/bootstrap/css/floating-wpp.min.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="{{ url('plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('plugins/fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ url('plugins/bootstrap/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('plugins/bootstrap/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ url('plugins/bootstrap/css/stylec.css') }}">
    <link rel="stylesheet" href="{{ url('plugins/bootstrap/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css"> 
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    <style>
     
  

        body {
                font-family: 'Signika', sans-serif;
            }
            .bg-grey {
                background: #292929;
            }
            .logo-footer {
                margin-bottom: 40px;
            }
            /* footer {
                    color: #9b3e1c;
            } */
            footer p, a {
            font-size: 12px;
            font-family: 'Roboto', sans-serif;
        }
        footer a:hover{
            color: #048343 !important;
        }

    
        footer h6 {
            font-family: 'Playfair Display', serif;
            margin-bottom: 40px;
            position: relative;
        }
        footer h6:after {
            position: absolute;
            content: "";
            background: grey;
            width: 12%;
            height: 1px;
            left: 0;
            bottom: -20px;
        }

        #footer-menu{
             font-size:10px !important;
             margin-bottom:2px !important;
        }
        #footer-menu a:hover{
            color: #048343 !important;
        }
            .btn-footer {
                        color: white;
                    
                        text-decoration: none;
                        border: 1px solid;
                        border-radius: 43px;
                        font-size: 13px;
                        padding: 7px 30px;
                        line-height: 47px;
            }
            .btn-footer:hover {
                        
                        text-decoration: none;
                        color: #048343;
                    
            }
            .form-footer input[type="text"] {
                border: none;
            /* border-radius: 16px 0 0 16px; */
            outline: none;
            padding-left: 10px;
            
        }
        ::placeholder {
            font-size: 12px;
            padding-left:5px;
            font-style: italic;
        }
        .form-footer input[type="button"] {
            border: none;
            background:#232323;
            margin-left: 0;
            margin-top: 5px;
            color: #fff;
            outline: none;
            /* border-radius: 0 16px 16px 0; */
            padding: 2px 10px;
            /* justify-content: right; */
        }
        footer ul li {
            list-style: none;
            display: block;
        }
        footer ul  {
        padding-left: 0;
        }
        footer ul  li a{
        text-decoration: none;
        color: black;
        font-size: 12px;
        }
        /* footer ul  li a:hover {
            text-decoration: underline;
            color: #fbee0f;
        }
        .footer-menu ul li a:hover{
            color: #fbee0f;
        } */

        /* nav-bar styles */
        .navbar .nav-item:not(:last-child) {
  margin-right: 35px;
}
.dropdown-menu {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
.dropdown-menu li a{
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}
.dropdown:hover .dropdown-menu {
  display: block;
}
.dropdown-menu li a:hover {
  color: #048343;
}
.dropdown-menu-toggle::after {
   transition: transform 0.15s linear; 
   /* background-color: #048343; */
}

.show.dropdown-mennu .dropdown-toggle::after {
  transform: translateY(3px);
}
        /* nav-bar style end */
       /* a{
        disabled : none;
       }  */
        .logo-part {
            border-right: 1px solid grey;
            height: 100%;
        }

        #myBtn {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 100000000;
            font-size: 18px;
            border: none;
            outline: none;
            background-color: #048343;
            color: white;
            cursor: pointer;
            /* padding: 15px; */
            border-radius: 100%;
        }

        #myBtn:hover {
        background-color: #555;
        }

        /* h6{
            color: #048343;
        } */

        img{
            border-radius: none !important;
        }
                /* Responsive Queries */

                @media only screen and (max-width: 360px) {
                    #topMenu{
                        display: none !important;
                    }
                }
                /* @media only screen and (min-width: 360px) and (max-width: 1300px) {
                    #topMenu{
                        display: none !important;
                    }
                } */
            #sitemap{
                color: black;
            }

            #sitemap a:hover {
                color: #048343;
            }
            #footer-topic{
                color:#048343 ;
            }

    </style>

    <script>
        // nav-bar quary
        const $dropdown = $(".dropdown");
const $dropdownToggle = $(".dropdown-toggle");
const $dropdownMenu = $(".dropdown-menu");
const showClass = "show";

$(window).on("load resize", function() {
  if (this.matchMedia("(min-width: 768px)").matches) {
    $dropdown.hover(
      function() {
        const $this = $(this);
        $this.addClass(showClass);
        $this.find($dropdownToggle).attr("aria-expanded", "true");
        $this.find($dropdownMenu).addClass(showClass);
      },
      function() {
        const $this = $(this);
        $this.removeClass(showClass);
        $this.find($dropdownToggle).attr("aria-expanded", "false");
        $this.find($dropdownMenu).removeClass(showClass);
      }
    );
  } else {
    $dropdown.off("mouseenter mouseleave");
  }
});
// nav-bar quary end


        document.addEventListener("DOMContentLoaded", function(){
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                document.getElementById('navbar_top').classList.add('fixed-top');
                // add padding top to show content behind navbar
                navbar_height = document.querySelector('.navbar').offsetHeight;
                document.body.style.paddingTop = navbar_height + 'px';
            } else {
                document.getElementById('navbar_top').classList.remove('fixed-top');
                // remove padding top from body
                document.body.style.paddingTop = '0';
            } 
        });

        var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
    mybutton.style.display = "block";
} else {
    mybutton.style.display = "none";
}
}

        }); 

        // When the user clicks on the button, scroll to the top of the document
function topFunction() {
document.body.scrollTop = 0;
document.documentElement.scrollTop = 0;
}


    $(document).on("click","#closebtn",function() {

    
  $(".modal").modal('hide');
});

    </script>

</head>

<body>
    <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal"    data-bs-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <h5 class="modal-title" id="exampleModalLabel">
          Your Shopping Cart
        </h5>
        <button id="closebtn" type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-image">
          <thead>

            <tr>
              <th scope="col"></th>
              <th scope="col">Product</th>
              <th scope="col">Price</th>
              <th scope="col">Qty</th>
              <th scope="col">Total</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
         <tbody>
        
        
          @foreach (\Cart::getContent() as $item)
            <tr>
              <td class="w-25">
                <img src="public/Img/{{ $item->attributes->image }}" class="img-fluid img-thumbnail" alt="Sheep">
              </td>
              <td>{{ $item->name }}</td>
              <td>Rs.{{ $item->price }}</td>
              <td class="qty">{{ $item->quantity }}</td>
              <td>Rs.{{ $item->price * $item->quantity }}</td>
              <td>
              
                
                <form action="{{ route('cart.remove') }}" method="POST">
                                  @csrf
                                  <input  type="hidden" value="{{ $item->id }}" name="id">
                                  <button class="btn btn-danger btn-sm"  >x</button>
                              </form>
              </td>
            </tr>
            @endforeach
           
          </tbody> 
        </table> 
        <div class="d-flex justify-content-end">
          <h5>Total: <span class="price text-success">Rs.{{ Cart::getTotal() }}</span></h5>
        </div>
      </div>
     
      <div class="modal-footer border-top-0 d-flex justify-content-between">
        <button id="closebtn" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="cart2"><button type="button" class="btn btn-success">Check Out </button></a>

      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <h5 class="modal-title" id="exampleModalLabel">
          Your Shopping Cart
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-image">
          <thead>

            <tr>
              <th scope="col"></th>
              <th scope="col">Product</th>
              <th scope="col">Price</th>
              <th scope="col">Qty</th>
              <th scope="col">Total</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <!-- <tbody>
        
        
          @foreach (\Cart::getContent() as $item)
            <tr>
              <td class="w-25">
                <img src="public/Img/{{ $item->attributes->image }}" class="img-fluid img-thumbnail" alt="Sheep">
              </td>
              <td>{{ $item->name }}</td>
              <td>Rs.{{ $item->price }}</td>
              <td class="qty"><input type="text" class="form-control" id="input1" value="{{ $item->quantity }}"></td>
              <td>Rs.{{ $item->price * $item->quantity }}</td>
              <td>
                <a href="#" class="btn btn-danger btn-sm">
                  <i class="fa fa-times"></i>
                </a>
              </td>
            </tr>
            @endforeach
           
          </tbody> -->
        </table> 
        <div class="d-flex justify-content-end">
          <h5>Total: <span class="price text-success">Rs.{{ Cart::getTotal() }}</span></h5>
        </div>
      </div>
     
      <div class="modal-footer border-top-0 d-flex justify-content-between">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Checkout</button>
      </div>
    </div>
  </div>
</div>







<button onclick="topFunction()" id="myBtn" title="Go to top">
    <i class="fas fa-chevron-up" aria-hidden="true" style="color: white; width: 25px !important; height:25px !important"></i>
</button>

    <div class="container-fluid">

        <div class="row" id="topMenu"  style="padding-left:100px;background-color: #048343; font-size: 12px; display: flex; align-items: center; padding-bottom: 6px; padding-top: 6px;">
                <div class="col-lg-1">
                <a href="/contactus"> <label style="text-align: left; color: white; vertical-align: middle; margin-bottom: 0px !important;padding:0!important"> </label></a>
                </div>
                <div class="col-lg-1">
                   <a href="/aboutus"> <label style="text-align: left; color: white; vertical-align: middle; margin-bottom: 0px !important;"></label></a>
                    <!-- <label style="text-align: center; color: white; vertical-align: middle; margin-bottom: 0px !important;"><a  href="/branch">Branch Network</a></label> -->
                </div>
                <div class="col-lg-1">
                   <a href="/careers"> <label style="text-align: left; color: white; vertical-align: middle; margin-bottom: 0px !important;"></label></a>
                    <!-- <label style="text-align: center; color: white; vertical-align: middle; margin-bottom: 0px !important;"><a  href="/branch">Branch Network</a></label> -->
                </div>
                <div class="col-lg-1">
                    <!-- <label style="text-align: left; color: white; vertical-align: middle; margin-bottom: 0px !important;">About Us</label> -->
                   
                </div>
                <!-- <div class="col-lg-2">
                  
                    <label style="text-align: center; color: white; vertical-align: middle; margin-bottom: 0px !important;margin-right:60px;!important;"><a  href="/datainput" style=" color:#fff!important;">Data Input</a></label>
                </div> -->
                <div class="col-lg-1">
                    
                </div>
                <div class="col-lg-1">
                    
                    </div>
                  

                <!-- <div class="col-lg-2">
                    <i class="fas fa-phone-square-alt" style="vertical-align: middle; color: white">  +94114699687</i>
                </div> -->


                <div class="col-lg-2">
                <i class="fas fa-phone-square-alt" style="vertical-align: center !important; color: white; font-style: sans-serif !important"></i>
                <span style="vertical-align: center !important; color: white; font-style: sans-serif !important"></span>
                
                </div>

                <div class="col-lg-2">
                <i class="fas fa-envelope-square" style="vertical-align: center !important; color: white; font-style: sans-serif !important"></i>
                <span style="vertical-align: center !important; color: white; font-style: sans-serif !important">     bakers@gmail.com</span>
                </div>

                <div class="col-lg-1">
                
                <span style="vertical-align: center !important; color: white; font-style: sans-serif !important"></span>
                <div class="dropdown show">
  <a class="btn btn-secondary dropdown-toggle btn-sm" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:white; border-color: white; color:#048343"> 
    <i class="fas fa-user" style="vertical-align: center !important; color: #048343; font-style: sans-serif !important"></i> 
    @if (Auth::check()) 
     {{ Auth::user()->name }}
     @else
       LogIn
      @endif

  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink"> 
     <a class="dropdown-item" href="/customerorder">
                                        <!-- Order History -->
                                       
                                    </a>

    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    </a>
  

                                  

  </div>
</div>
                </div>

               


                <!-- <div class="col-lg-2">
                  <label class="fas fa-envelope-square" style="text-align: center; color: white; vertical-align: middle; margin-bottom: 0px !important;">  bakers@gmail.com </label>
                  
                </div> -->
                <div class="col-lg-1">
                   
                </div>
                <!-- <div class="col-lg-1">
                   
                   <i class="fab fa-facebook-f"  style="vertical-align: middle; color: white; margin: 5px;"></i>
                </a>
                  <i class="fab fa-instagram" style="vertical-align: middle; color: white; margin: 5px;"></i></a>
                    <i class="fab fa-whatsapp" style="vertical-align: middle; color: white; margin: 5px;"></i>
                </div> -->
        </div>

        <div class="row" style="z-index: 10000;margin-left:0!important;margin-right:0!important;margin-top:10px!important;margin-bottom:10px;!important;">
            <nav id="navbar_top" class="navbar navbar-expand-lg navbar-light bg-white" style="min-height: 55px;padding:2px 0">
                <div class="container-fluid">
                    <a class="navbar-brand" href="" style="color: #9b3e1c;"> 
                        <img src="{{ url('public/images/logo.jpg') }}" class="w-50" style="width:40%!important; border-radius:0" >
                        
                      
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="padding-right:10px!important;">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-:10px;" >
                    <li class="nav-item dropdown">
                        <a style="font-weight:bold;font-size:15px;" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                            CAKES
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/signature">Signature Gateau Cake</a></li>
                            <li><a class="dropdown-item" href="/butterbase">Butter Base Cake</a></li>
                        </ul>
                        </li>
                        <li class="nav-item dropdown">
                        <a style="font-weight:bold;font-size:15px;" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                           SPECIAL CAKES
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                           
                            <li><a class="dropdown-item" href="/specialCake">Special Cakes</a></li>
                            <li><a class="dropdown-item" href="/childcake">Birthday Cakes For Children</a></li>
                            <!-- <li><a class="dropdown-item" href="#">Birthday cakes for Girls</a></li> -->
                            <li><a class="dropdown-item" href="/customcake">Create Your Dream Cake</a></li>
                        </ul>
                        </li>
                        <li class="nav-item dropdown">
                        <a style="font-weight:bold;font-size:15px;" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            DESSERTS
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/slices">Slices</a></li>
                            <li><a class="dropdown-item" href="/muffins">Muffins & Cup Cakes </a></li>
                            <!-- <li><a class="dropdown-item" href="/cupcakes">Cup Cakes</a></li> -->
                            <li><a class="dropdown-item" href="/cookiese">Cookies</a></li>
                            <li><a class="dropdown-item" href="/sweets">Sweets & Bites</a></li>
                            
                        </ul>
                        </li>
                        
                        <li class="nav-item dropdown">
                            <a style="font-weight:bold;font-size:15px;" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              OTHERS
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <!-- <li><a class="dropdown-item" href="/puff&pastry">Puff & Pastry</a></li> -->
                                <!-- <li><a class="dropdown-item" href="/croissants">Croissants</a></li> -->
                                <!-- <li><a class="dropdown-item" href="/sandwitch">Sandwich</a></li> -->
                                <!-- <li><a class="dropdown-item" href="/burgers">Burgers</a></li> -->
                                <!-- <li><a class="dropdown-item" href="/cutlets&samosas">Cutlets & Samosas</a></li> -->
                                <!-- <li><a class="dropdown-item" href="/pizzas">Pizzas</a></li> -->
                                <li><a class="dropdown-item" href="/bread">Bread & Filled Buns</a></li>
                                <li><a class="dropdown-item" href="/backed">Baked Savouries</a></li>
                                <li><a class="dropdown-item" href="/fried">Fried Savouries</a></li>
                                <li><a class="dropdown-item" href="/beverages">Beverages</a></li>

                                <!-- <li><a class="dropdown-item" href="/springrolls">Spring Rolls</a></li> -->
                            </ul>
                        </li>
                        <!-- <li class="nav-item dropdown">
                        <a style="font-weight:bold;" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                             BEVERAGES
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                         
                            <li><a class="dropdown-item" href="/mandarin">Mandarin Juice</a></li>
                           
                            <li><a class="dropdown-item" href="/lime">Lime Juice</a></li>
                            <li><a class="dropdown-item" href="/icedcoffee">Iced Coffee</a></li>
                           
                            
                        </ul>
                        </li> -->
                        <!-- <li class="nav-item">
                            <a style="font-weight:bold;" class="nav-link" href="/beverages">BEVERAGES</a>
                        </li> -->
                     
                        <li class="nav-item" style="padding-right:150px;" >
                            <a style="font-weight:bold; font-size:15px;" class="nav-link" href="/gallery">GALLERY</a>
                        </li>
                        <!-- <li class="nav-item dropdown">
                            <a style="font-weight:bold;" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            ABOUT US</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/aboutus">About Us</a></li>
                                <li><a class="dropdown-item" href="/contactus">Contact Us</a></li>
                                <!-- <li><a class="dropdown-item" href="/careers">Career</a></li> -->
                                <!-- <li><a class="dropdown-item" href="/newcar">Career</a></li>
                                
                            </ul>
                        </li> --> 
                        <!-- <li class="nav-item">
                            <a style="font-weight:bold;" class="nav-link" href="/gallery">GALLERY</a>
                        </li> -->
                    </ul>
                    <form class="d-flex" >
                         <!-- <button class="btn" type="submit" style="margin: 5px"><i class="fas fa-search" ></i></button>  -->
                        <!-- <a href="/cart2" class="btn" type="submit" style="margin: 5px"><i class="fas fa-shopping-cart"></i></a>  -->
                       <!-- <a class="btn" href="{{url('login')}}" style="margin: 5px"><i class="fas fa-user"></i></a> -->
                       <!-- <a href="/details" class="btn" type="submit" style="margin: 5px"><i class="fa fa-shopping-basket"></i></a> -->
                       <!-- <a href="/checkout" class="btn" type="submit" style="margin: 5px"><i class="fa fa-check"></i></a> -->
                              <!-- Button trigger modal -->
                     <a href class="btn btn-light" data-bs-toggle="modal"    data-bs-target="#exampleModal" style="background-color:white; color:#048343"><i class="fas fa-shopping-cart"></i></a>
          

                    </form>
                    </div>
                </div>
            </nav>
        </div>

        
        {{-- d-flex justify-content-center --}}


        <!-- <div class="container-fluid" style="margin-top: 100px; margin-bottom: 40px; background-color: red"> -->
        <div class="row">
            @yield('content')
        </div>
        

    </div>
    

</head>

<footer>
<div class="container-fluid" style="background-color: #048343;line-height:0 !important;">
<div class="row" style="color: white; padding-top:30px;padding-right: 30px;padding-left: 30px;">
            <div class="col-lg-2"> <h6 style="color: #ffffff; vertical-align:center !important">CONTACT US</h6></div>
            <div class="col-lg-10">
                <p style="color: #ffffff; vertical-align:center !important; font-size:15px; padding-top:15px">Our customer service personnel are available to answer any requests. We will respond within business hours from 8am to 6pm.</p>
            </div>
        </div>
</div>
<div class="container-fluid" style="background-color: #d9d9d9; padding-top:80px!important;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6 ">
                    <!-- <div class="logo-part"> -->
                        <img src="{{ url('images/logo.jpg') }}" class="w-50 logo-footer" style="width:80% !important; border-radius: 0" >
                        <!-- <p style="color: white;">
                        <!-- <br> -->
                        <div class="icon-add">
                        <i class="fas fa-map-marker fa" style="float:left;margin-top: 4px;color:#006400;"></i>
                        </div>
                        <!-- <h4 style="font-size:12px;margin-left:26px;color:black;"><strong>Head Office Address : <br>No. 08, Bund Road,<br> Hendala,<br> Wattala </strong></h4><br> -->
                   <div class="tel" style="float:left;color:#006400;">
                         <i class="fas fa-phone-alt fa-1x"></i>
                         </div>
                   <p style="margin-left:26px;color:black;">Telephone : <br></p><br>
                   <div class="tel" style="float:left;color:#006400;">
                              <i class="fas fa-envelope fa-1x"></i>
                         </div>
                   <p style="margin-bottom:35px;margin-left:26px;color:black;">Email : <br>bakers@lanka.switzgroup.com</p>


                  
                      
             
               
                    <!-- </div> -->
                    </div>
          

                    <div class="col-md-6 px-4">
                    <h6 id="footer-topic" style="font-weight:bold; fort-size: 15px; text-transform:uppercase"> About <br>Company</h6>
                    <p style="color: black;">bakers is a chain of gourmet bakery and patisserie shops catering to a wide range of daily, indulgence and celebration needs with its scrumptious array of cakes, breads, savories and cookies. Bakers has become synonymous with the word "Cake".</p>
                    <!-- <a href="aboutus" class="btn-footer"> More Info </a><br>
                    <a href="contactus" class="btn-footer"> Contact Us</a> -->
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6 px-4">
                    <h6 id="footer-topic" style="font-weight:bold; fort-size: 15px; text-transform:uppercase">Production <br>Categories</h6>
                    <div class="row ">
                        <div class="col-md-6" id="categories">
                            <ul>
                                <li> <a href="#"> Cakes</a> </li>
                                <li> <a href="#"> Special Cakes</a> </li>
                                <li> <a href="#"> Desserts</a> </li>
                                <li> <a href="#"> Savories</a> </li>
                                <li> <a href="#"> Beverages</a> </li>
                                
                            </ul>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-6 ">
                    <h6 id="footer-topic" style="font-weight:bold; fort-size: 15px; text-transform:uppercase">Stay Informed About <br>Our Updates </h6>
                    <form class="form-footer my-3">
                        <input type="text"  placeholder="Enter your email" name="subcribe">
                        <input type="button" value="Go" style="margin-left:0px!important;" >
                    </form>

                    <div class="footer-menu" style="color: black; font-size: 10px; padding-bottom:60px!important; padding-left: 0 !important; border-left:0 !important">
                    <p><a href="/" id="sitemap" style="font-size: 11px; border-left:0">Home</a> /<a href="/aboutus" id="sitemap" style="font-size: 11px">About Us</a> /<a href="/contactus" id="sitemap" style="font-size: 11px">Contact Us</a> </p>
                                            <!-- <ul >
                                                    <li><a href="#home" id="footer-menu">Home</a> /</li>
                                                    <li><a href="#aboutus" id="footer-menu">About Us</a> /</li>
                                                    <li><a href="#contacus" id="footer-menu">Contact Us</a> /</li>
                                                    <li><a href="#faq" id="footer-menu">Faq</a></li>
                                            </ul> -->
               </div>
              
                    <!-- {{--<div class="footer-menu" style="font-size:28px!important;padding-bottom:60px!important;">--}}
                                        {{--<ul >--}}
                                                {{--<li id="footermenu"><a href="#home">Home</a> /</li>--}}
                                                {{--<li><a href="#aboutus">About Us</a> /</li>--}}
                                                {{--<li><a href="#contacus">Contact Us</a> /</li>--}}
                                                {{--<li><a href="#faq">Faq</a></li>--}}
                                        {{--</ul>  --}}
           {{--</div>--}} -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    
-----



        </div>
</div>
</footer>

<sec class="bottom">
<div class="container"  style="background-color:black; max-width:100%; padding: 0; margin: 0">
            <div class="row">
              <div class="col-md-12" style="vertical-align:center">
               <p style="color: white; text-align:center">2021 &copy; <span style="color: white; font-size:14px">IntaHub Pvt Ltd</span></a>. All rights reserved.</p>
              </div>

            </div>
</sec>

<div id="WAButton"  ></div>  
<!-- Messenger Chat plugin Code -->
<div id="fb-root" ></div>

<!-- Your Chat plugin code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "371148299647");
  chatbox.setAttribute("attribution", "biz_inbox");

  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v12.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));


  

</script>






    @if (Session::has('error_message'))
        <script type="text/javascript">
            $(function() {
                errorMsg("{{ Session::get('error_message') }}");
            });
        </script>
    @endif

    @if (Session::has('message'))
        <script type="text/javascript">
            $(function() {
                successMsg("{{ Session::get('message') }}");
            });
        </script>
    @endif
</body>
<!-- <a href="https://icons8.com/icon/uZWiLUyryScN/whatsapp">WhatsApp icon by Icons8</a> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script> -->
<!--<script src="{{ url('plugins/bootstrap/js/jquery.min.js') }}"></script> -->
<script src="{{ url('plugins/bootstrap/js/floating-wpp.min.js') }}"></script>
<script src="{{ url('plugins/bootstrap/js/new.js') }}"></script>

<script src="{{ url('plugins/bootstrap/js/popper.js') }}"></script>
<script src="{{ url('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ url('plugins/bootstrap/js/owl.carousel.min.js') }}"></script>
<script src="{{ url('plugins/bootstrap/js/main.js') }}"></script>
<script type="text/javascript">
    function successMsg(message) {
        var msg = message;

        $('#text').text("11111111")
        // $.notify(msg,{
        //   clickToHide: true,
        //   autoHide: true,
        //   autoHideDelay: 3000,
        //   position: 'top-center',
        //   style: 'bootstrap',
        //   className: 'success',
        //   showAnimation: 'slideDown',
        //   showDuration: 400,
        //   hideAnimation: 'slideUp',
        //   hideDuration: 200,
        // });
    }

    function errorMsg(message) {
        var msg = message;
        $.notify(msg, {
            clickToHide: true,
            autoHide: true,
            autoHideDelay: 8000,
            position: 'top-center',
            style: 'bootstrap',
            className: 'error',
            showAnimation: 'slideDown',
            showDuration: 400,
            hideAnimation: 'slideUp',
            hideDuration: 200,
        });
    }
</script>
<script>  
  @if(Session::has('success'))  
        toastr.success("{{ Session::get('success') }}");  
  @endif  
  @if(Session::has('info'))  
        toastr.info("{{ Session::get('info') }}");  
  @endif  
  @if(Session::has('warning'))  
        toastr.warning("{{ Session::get('warning') }}");  
  @endif  
  @if(Session::has('error'))  
        toastr.error("{{ Session::get('error') }}");  
  @endif  
</script>  


</html>
@extends('frontend.common.main')

@section('content')
<link rel="stylesheet" href="{{ url('plugins/bootstrap/css/bootstrap.css') }}">
<link rel="stylesheet" href="{{ url('plugins/bootstrap/css/card.css') }}">
<style>
    .viewbox{
        height:0x !important;
        width: 0px !important;
    }
 /* Responsive Queries */

@media only screen and (max-width: 360px) {
    #nameLable{
        margin-left:0% !important;
    }
    #nameInput{
        margin-left:0% !important;
    }
    #nameDiv{
        width:100% !important;
    }
    
   
    
}
/* Extra small devices (phones, 600px and down) */
@media only screen and (max-width: 600px) {
    
}

/* Small devices (portrait tablets and large phones, 600px and up) */
@media only screen and (min-width: 600px) {
    
}
@media only screen and (min-width: 360px) and (max-width: 768px) {
	#nameLable{
        margin-left:20% !important;
    }
    #nameInput{
        margin-left:10% !important;
    }
    #nameDiv{
        width:80% !important;
    }
    
    
    
    /*
    #email{
        margin-left:230px;
    }
    #password{
        margin-left:230px;
    }
    #password_confirmation{
        margin-left:230px;
    } */
}
@media only screen and (min-width: 769px) and (max-width: 1200px) {
    #nameLable{
        margin-left:20% !important;
    }
    #nameInput{
        margin-left:25% !important;
    }
    #nameDiv{
        width:80% !important;
    }
    
    
}

/* Medium devices (landscape tablets, 768px and up) */
@media only screen and (max-width: 768px) {
    /* #name{
        margin-left:230px;
    }
    #email{
        margin-left:230px;
    }
    #password{
        margin-left:230px;
    }
    #password_confirmation{
        margin-left:230px;
    } */
} 

/* Large devices (laptops/desktops, 992px and up) */
@media only screen and (min-width: 992px) {
    /* #email{
        margin-right:500px;
    } */
    /* #name{
        margin-left:360px;
    }
    #email{
        margin-left:360px;
    }
    #password{
        margin-left:360px;
    }
    #password_confirmation{
        margin-left:360px;
    } */
} 

/* Extra large devices (large laptops and desktops, 1200px and up) */
@media only screen and (min-width: 1201px) {
   
    #nameLable{
        /* margin-left:5% !important; */
    }
    #nameInput{
        margin-left:50% !important;
    }
    #nameDiv{
        /* width:50% !important; */
        /* margin-left:25px; */
    }
}

 /* Responsive Queries End */   

</style>
{{--<x-guest-layout>--}}
    {{--<x-auth-card>--}}
        {{--<x-slot name="logo">--}}
            {{--<a href="/">--}}
                {{--<x-application-logo class="w-20 h-20 fill-current text-gray-500 viewbox" />--}}
            {{--</a>--}}
        {{--</x-slot>--}}
        <div class="container-fluid" style="padding: 0px">

        <div class="row" style="min-height: 200px; display:flex">

                <div class="row" style="min-height: 200px; display:flex;background-image:url(images/slider-1.jpg);">
                      <div class="col-md-12" style="text-align: center;margin-top: 5%;margin-bottom: 5%;">
                              <h3 class="mb-3" style="color: #FFFFFF;text-transform: uppercase;margin-bottom: 2%;">FORGOT PASSWORD</h3>
                              <!-- <input value="ORDER NOW " style="color: white; background-color: #9b3e1c;" type="button"> -->
                      </div>
                 </div>
        </div>
</div>
        

        <div class="mb-4 text-sm text-gray-600 text-center" style="margin-top:30px;">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div style="padding-left:500px;padding-right:500px;margin-top:60px;"  id="nameDiv"class="ad">
                <x-label for="email" :value="__('Email')" id="password" id="nameLable"/>

                <x-input id="email" class="block mt-1 w-full form-control ad" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4 ad text-center" >
                <x-button class="btn btn-primary" >
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    {{--</x-auth-card>--}}
{{--</x-guest-layout>--}}
@endsection
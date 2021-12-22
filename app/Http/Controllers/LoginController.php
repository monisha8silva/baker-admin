<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    
    // Facebook
    public function redirectToFacebook()
    {
        return Socialite::driver(driver: 'facebook')->redirect();
    }
      
     // Facebook callback

     

         public function handleFacebookCallback()
         {
              $user = Socialite::driver(driver:'facebook')->user();
         }
     
}
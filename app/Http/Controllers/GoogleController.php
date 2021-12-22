<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;


class GoogleController extends Controller
{
     public function redirectToGoogle()
    {
        return Socialite::driver(driver:'google')->redirect();
    }

     public function handle()
    {
        try{ 
                 $user = Socialite::driver( driver: 'google')->user(); 
                 $find= User::query()->where('google_id', $user->id)->first(); 
            
                if ($find)
                { 
                    Auth::login($find); 
                    return redirect('/'); 
                }
                else{ 
                    $new = User::query()->create([ 
                    'name'=>$user->name, 
                    'email'=>$user->email, 
                    'google_id'=>$user->id, 
                    'first_name'=>"",
                    'last_name'=>"",
                    'address'=>"",
                    'city'=>"",
                    'phone_number'=>"",
                    'contact_email'=>"",


                    'password'=> encrypt( value: '1234567du') ]);

                    //if the app has a role 
                    //$role = Role::query()->select( columns: 'id')->where( column:'name', operator: 'user')->first(); 


                   // $new->roles()->attach($role); 


                    Auth::login($new); 
                    return redirect( '/'); 
            
                    }
        }
       catch (\Exception $e){ 
           dd($e->getMessage()); 
        }
    
    }
}
//---------------------------------------------


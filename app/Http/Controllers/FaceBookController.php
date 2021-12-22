<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\DB;
class FaceBookController extends Controller
{
    public function redirectToFacebook()
    {
        return Socialite::driver(driver:'facebook')->redirect();
    }

     public function handle()
    {
        try{ 
                 $user = Socialite::driver(driver: 'facebook')->user(); 
                 $find= User::query()->where('facebook_id', $user->id)->first(); 

                 

                // $chkmail2=$user->email;

                 //$dbemail = DB::table('users')->where('email','lkwushu@gmail.com')->value('email');
                 //$dbemail= User::query()->where('email', $user->email)->first(); 



                         
                
                if ($find)
                { 
                    Auth::login($find); 
                    return redirect('/'); 
                }
                else{ 


                    
                     /*   if ($dbemail){

                            $new = User::query()->update(['facebook_id'=>$user->id])->where('email', 'lkwushu@gmail.com') ;
                            
                                //if the app has a role 
                                //$role = Role::query()->select( columns: 'id')->where( column:'name', operator: 'user')->first(); 
                                //$new->roles()->attach($role); 
                                Auth::login($new); 
                               
                                
                            //DB::update('update users set facebook_id =? where email = ?' ,[$find,$chkmail2]);
                            
                            return redirect('/home'); 
                
                                    }

                        else {

*/


                                    
                                $new = User::query()->create([ 
                                'name'=>$user->name, 
                                'email'=>$user->email, 
                                'facebook_id'=>$user->id, 
                                'first_name'=>"",
                                'last_name'=>"",
                                'address'=>"",
                                'city'=>"",
                                'phone_number'=>"",
                                'contact_email'=>"",


                                'password'=> encrypt( value: '1234567du') ]);
                                //if the app has a role 
                                //$role = Role::query()->select( columns: 'id')->where( column:'name', operator: 'user')->first(); 
                                //$new->roles()->attach($role); 
                                Auth::login($new); 
                                return redirect( '/'); 
                                }
                   // }
              //  }
            }
        
       catch (\Exception $e){ 
           dd($e->getMessage()); 
        }
    
    }
}

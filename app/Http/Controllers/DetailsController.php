<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use Illuminate\Routing\Redirector;

use Illuminate\Support\Facades\Auth;

class DetailsController extends Controller

{
    
 public function index() {

        
    	return view('frontend/details');
    }




    public function detailUpdate(Request $request) {

        $id= Auth::user()->id;


        $first_name = $request->input('firstname');
        $last_name = $request->input('lastname');
        $address = $request->input('address');
        $city = $request->input('city');
        $phone_number = $request->input('phone');
        $contact_email = $request->input('email');


        DB::update('update users set first_name =?, last_name =?,address =?,city =?,phone_number =?,contact_email =?  where id  = ?' ,[$first_name,$last_name,$address,$city ,$phone_number,$contact_email ,$id]);
        
        
        
        //return redirect('/datainput')->with('success','Updated');
        return redirect()->route('cart.list');


        //return view('frontend/checkout');

    }


   
}

?>
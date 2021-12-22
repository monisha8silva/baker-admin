<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{

/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {   
        
        $id= Auth::user()->id;

        $cartItems = \Cart::getContent();


        $customer_delivery_details = DB::select('select * from customer_delivery_details where 	users_id=?',[$id]);
        
        $outlets = DB::select('select * from outlets ');
        return view('frontend/checkout',['customer_delivery_details'=>$customer_delivery_details,'cartItems'=>$cartItems,'outlets'=>$outlets]);
        
     
    }

    
    public function addressadd(Request $request) {   
       // echo "test";
        
        $id= Auth::user()->id;

        $cartItems = \Cart::getContent();

            
            $customer_first_name = $request->input('customerfirstname');
            $customer_last_name = $request->input('customerlastname');
            $customer_phone = $request->input('telephone');
            $customer_delivery_address = $request->input('address');
           
      
    
         DB::insert('insert into customer_delivery_details(users_id,customer_first_name,customer_last_name,customer_phone,customer_delivery_address)values(?,?,?,?,?)' ,[$id, $customer_first_name,$customer_last_name,$customer_phone,$customer_delivery_address]);
   
     

        $customer_delivery_details = DB::select('select * from customer_delivery_details where 	users_id=?',[$id]);
        
        $outlets = DB::select('select * from outlets ');
                                   
        
        //return view('frontend/checkout', ['cartItems'=>$cartItems]);
        return view('frontend/checkout',['customer_delivery_details'=>$customer_delivery_details,'cartItems'=>$cartItems,'outlets'=>$outlets]);
        
     
    }

    function fetch(Request $request)
    {
        $value = $request->get('value');

        $customer_delivery_details = DB::select('select * from customer_delivery_details where idCustomer =?',[$value]);
        
        foreach($customer_delivery_details as $row)
        {


         $output = '<p> First Name : '.$row->customer_first_name.'</p> <p> Last Name : '.$row->customer_last_name.'</p> <p> Adress : '.$row->	customer_delivery_address.'</p><p>  Phone : '.$row->customer_phone.'</p>';
     
        }
       
    
     //$output = '<option value="">Select '.ucfirst($dependent).'</option>';
    
      //$output = "gyfyfytyty";
   
     echo $output;
    }


    
}

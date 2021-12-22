<?php

namespace App\Http\Controllers;
// use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
class AdminshowController extends Controller

{
    // function test() {
    // 	$data =DB::table('users')
    //           ->join('customer_delivery_details','customer_delivery_details.users.id','=','users.id')
    //           ->select('customer_first_name','customer_phone','customer_delivery_address') 
    //           ->get();
    // }

     public function index(){

        $data = DB::select("SELECT
        orderheader.TotalPrice, 
        orderheader.OrderID, 
        customer_delivery_details.customer_first_name, 
        customer_delivery_details.customer_delivery_address, 
        customer_delivery_details.customer_phone, 
        outlets.outlet_name, 
        users.email
    FROM
        orderheader
        INNER JOIN
        customer_delivery_details
        ON 
            orderheader.GuestID = customer_delivery_details.idCustomer
        INNER JOIN
        outlets
        ON 
            orderheader.outletid = outlets.outletid
        INNER JOIN
        users
        ON 
            orderheader.GuestID = users.id");
           
          return view('adminshow',compact('data'));

      }
}

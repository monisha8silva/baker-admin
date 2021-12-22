<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CustomerorderController extends Controller
{
    public function index() {
    	
//'SELECT * FROM orderheader WHERE GuestID = '.$id.' ORDER BY OrderID DESC '
        $id= Auth::user()->id;
        $result = DB::select( ' SELECT * FROM orderheader LEFT JOIN customer_delivery_details ON  orderheader.idCustomer = customer_delivery_details.idCustomer WHERE GuestID = '.$id.' ORDER BY OrderID DESC');
     
        return view('frontend/customerorder',['orders'=>$result]);





    }
}
<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminviewController extends Controller
{
    public function index( $OrderID) {
        //echo $OrderID;
        
        $id= Auth::user()->id;
                $result = DB::select( ' SELECT * FROM orderheader LEFT JOIN customer_delivery_details ON  orderheader.idCustomer = customer_delivery_details.idCustomer WHERE OrderID = '.$OrderID.' ORDER BY OrderID DESC');
        
                $result2 = DB::select(' SELECT *  FROM orderdetail LEFT JOIN food ON orderdetail.FoodID = food.FoodId WHERE OrderID = '.$OrderID. ' ORDER BY OrderID  DESC');
              
          
                return view('adminview',['orderheader'=>$result,'orderdetails'=>$result2]);
        
                //return view('frontend/customerorderdetails');
            }
}
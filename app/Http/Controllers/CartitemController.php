<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartitemController extends Controller
{
    public function index() {
        $result = DB::select( ' SELECT * FROM orderheader LEFT JOIN customer_delivery_details ON  orderheader.idCustomer = customer_delivery_details.idCustomer WHERE OrderID = '.$OrderID.' ORDER BY OrderID DESC');

        $result2 = DB::select(' SELECT *  FROM orderdetail LEFT JOIN food ON orderdetail.FoodID = food.FoodId WHERE OrderID = '.$OrderID. ' ORDER BY OrderID  DESC');
      
  
        return view('frontend/customerorderdetails',['orderheader'=>$result,'orderdetails'=>$result2]);
    	return view('frontend/cartitem');
    }
}

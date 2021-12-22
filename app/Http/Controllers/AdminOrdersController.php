<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class AdminOrdersController extends Controller
{
    public function orders(){
        $orders = DB::table('orderdetail')
        ->select('*')
        
        ->get();

        return view('frontend/order',compact('orders'));
    }
}

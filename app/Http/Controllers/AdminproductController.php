<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminproductController extends Controller
{
    public function index($id) {
        //echo $OrderID;
        //$id = Auth::user()->id;
        //$result = DB::table('food')->select('Name','Price', 'quantity','Img','Status','quantity')->where('FoodId', $id)->get();
        $result = DB::select("SELECT d.Quantity, f.Name, f.Price, f.Img, f.Status  from orderdetail d JOIN food f ON d.FoodID = f.FoodId WHERE OrderID = ".$id.";");
        //print_r($result);
        return view('adminproduct',['foodlist'=> $result]);
        //return view('frontend/customerorderdetails');
    }
}
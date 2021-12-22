<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class OrderSubmitController extends Controller
{
    public function ordersubmit(Request $request) {

        
    $cartItems = \Cart::getContent();

    $ldate = date('Y-m-d H:i:s');
    $id= Auth::user()->id;
    //echo $ldate;
    $totalvalue=0;
    $status=1;
    $paymentType=1;

    $idCustomer = $request->input('idCustomer');
    $paymentType = $request->input('exampleRadios');
    $outletid = $request->input('selectoutlet');


foreach ($cartItems as $item){

    $totalvalue=(float)($item->price * $item->quantity)+(float)$totalvalue; 
}

//echo "Total ".$totalvalue;
DB::insert('INSERT into orderheader(GuestID, TotalPrice ,OrderDate ,Status,idCustomer ,outletid )values(?,?,?,?,?,?)' ,[$id,$totalvalue,$ldate,$status,$idCustomer,$outletid]);
$result = DB::select('SELECT OrderID FROM orderheader WHERE GuestID = '.$id.' ORDER BY OrderID DESC Limit 1');
$OrderID=0;
foreach ($result as $item){

$OrderID=$item->OrderID;

}


foreach ($cartItems as $item){

    //$id = $item->input('paymentmethord');
 
    $name = $item->name;
    $itemId = $item->id;
    $quantity = $item->quantity;
    $price=$item->price;
    $totprice = $item->price * $item->quantity;




DB::insert('insert into orderdetail(OrderID,Quantity,FoodID,TotalPrice,foodPrice,UpdatedDate)values(?,?,?,?,?,?)' ,[$OrderID, $quantity,$itemId,$totprice,$price,$ldate]);


    
}
DB::insert('insert into paymentheader(PaymentDate,TotalPrice,PaymentType)values(?,?,?)' ,[$ldate, $totalvalue,$paymentType]);


//echo "Total ".$totalvalue;
\Cart::clear();

        session()->flash('success', 'All Item Cart Clear Successfully !');

        

return view('frontend/thankyou');





    }
}

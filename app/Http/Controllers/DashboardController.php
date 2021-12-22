<?php

namespace App\Http\Controllers;
use App\Order;
use Illuminate\Http\Request;
use DB;

class DashboardController extends Controller
{
	public function dashboard()
	{
		return view('back/pages_back.dashboard');
	}

	public function view_order()
	{
		$orders = Order::get();
		return view('back/pages_back.view_order', compact('orders'));
	}

	public function order_products($id)
	{


		// $product = DB::table('products')
		// ->select('orderproducts.quantity', 
		// 	'products.product_name', 
		// 	'products.price', 
		// 	'products.image')
		// ->join('orderproducts','orderproducts.product_id','=','products.product_id')
		// ->where('orderproducts.product_id', '=', $id)
		// ->get();

		$products = DB::table('products')
       ->join('categories', 'categories.id','products.maincat')
       //->join('categories', 'categories.id', '=', 'products.maincat')
        ->join('orderproducts', 'orderproducts.product_id','products.product_id')
        ->where('orderproducts.order_id', '=', $id)
       ->select('orderproducts.quantity', 
			'products.product_name', 
			'products.price', 
			'products.image')
     ->get();


		// $product = DB::table('products')->where('product_id', $id)->first();
		return response()->json([
			'product' => $products]);
	}
}

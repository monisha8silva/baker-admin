<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function productList()
    {
        //$products = Product::all();
        $products = DB::select('select * from food');

        return view('frontend/products', compact('products'));
    }
}

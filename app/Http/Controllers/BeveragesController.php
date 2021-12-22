<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BeveragesController extends Controller
{
    public function index() {
        $food = DB::select('select * from Food where WebCategoryId = 12');
    	return view('frontend/beverages',['food'=>$food]);
    }
}

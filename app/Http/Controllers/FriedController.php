<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FriedController extends Controller
{
    public function index() {
        $food = DB::select('select * from Food where WebCategoryId = 11');
    	return view('frontend/fried',['food'=>$food]);
    }
}

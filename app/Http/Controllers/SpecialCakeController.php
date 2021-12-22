<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SpecialCakeController extends Controller
{
    public function index() {
        $food = DB::select('select * from Food where WebCategoryId = 3');
    	return view('frontend/special',['food'=>$food]);
    }
}

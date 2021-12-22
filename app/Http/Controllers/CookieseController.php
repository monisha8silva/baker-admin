<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CookieseController extends Controller
{
    public function index() {
        $food = DB::select('select * from Food where WebCategoryId = 7');
    	return view('frontend/cookiese',['food'=>$food]);
    }
}
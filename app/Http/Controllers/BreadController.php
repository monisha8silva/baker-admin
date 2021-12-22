<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BreadController extends Controller
{
    public function index() {
        $food = DB::select('select * from Food where WebCategoryId = 9');
    	return view('frontend/bread',['food'=>$food]);
    }
}

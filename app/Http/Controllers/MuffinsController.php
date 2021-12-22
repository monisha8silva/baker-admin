<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MuffinsController extends Controller
{
    public function index() {
        $food = DB::select('select * from Food where WebCategoryId = 6');
    	return view('frontend/muffins',['food'=>$food]);
    }
}

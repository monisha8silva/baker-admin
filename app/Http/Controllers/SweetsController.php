<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SweetsController extends Controller
{
    public function index() {

        $food = DB::select('select * from Food where WebCategoryId = 8');
    	return view('frontend/sweets',['food'=>$food]);
    }
}
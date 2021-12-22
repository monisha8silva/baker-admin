<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SlicesController extends Controller
{
    public function index() {

        $food = DB::select('select * from Food where WebCategoryId = 5');
    	return view('frontend/slices',['food'=>$food]);
    }
}

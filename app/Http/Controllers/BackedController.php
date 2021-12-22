<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BackedController extends Controller
{
    public function index() {
        $food = DB::select('select * from Food where WebCategoryId = 10');
    	return view('frontend/backed',['food'=>$food]);
    }
}

<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ChildcakeController extends Controller
{
    public function index() {
        $food = DB::select('select * from Food where WebCategoryId = 4');
    	return view('frontend/childcake',['food'=>$food]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;//this line

class SignatureController extends Controller
{
    public function index() {

        $food = DB::select('select * from Food where WebCategoryId = 1');//this line
    
    	return view('frontend/signature',['food'=>$food]);
    }
}

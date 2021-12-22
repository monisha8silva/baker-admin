<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController1 extends Controller
{
    public function home() {

        $food = DB::select('select * from Food where WebCategoryId = 1 limit 4');//this line
        $food2 = DB::select('select * from Food where WebCategoryId = 4 limit 4');//this line
        $food3 = DB::select('select * from Food where WebCategoryId = 8 limit 4');//this line

    	return view('frontend/mainindex',['food'=>$food ,'food2'=>$food2,'food3'=>$food3]);


    	
    }
}

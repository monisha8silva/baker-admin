<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ButterbaseController extends Controller
{
    public function index() {

        $food = DB::select('select * from Food where WebCategoryId = 2');
    	return view('frontend/butterbase',['food'=> $food]);
    }
}

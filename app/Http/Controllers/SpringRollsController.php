<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpringRollsController extends Controller
{
    public function index() {
    	return view('frontend/springrolls');
    }
}

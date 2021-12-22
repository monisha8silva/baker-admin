<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BurgersController extends Controller
{
    public function index() {
    	return view('frontend/burgers');
    }
}

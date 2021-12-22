<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewbagController extends Controller
{
    public function index() {
    	return view('frontend/viewbag');
    }
}

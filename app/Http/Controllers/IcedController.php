<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IcedController extends Controller
{
    public function home() {
    	return view('frontend/iced');
    }
}

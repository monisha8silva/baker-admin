<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IcedCoffeeController extends Controller
{
    public function index() {
    	return view('frontend/icedcoffee');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonutsController extends Controller
{
    public function index() {
    	return view('frontend/donuts');
    }
}

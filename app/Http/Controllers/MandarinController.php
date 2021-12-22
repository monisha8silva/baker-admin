<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MandarinController extends Controller
{
    public function index() {
    	return view('frontend/mandarin');
    }
}

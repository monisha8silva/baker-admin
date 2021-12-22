<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CutletController extends Controller
{
    public function index() {
    	return view('frontend/cutlets');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewcarController extends Controller
{
    public function index() {
    	return view('frontend/newcar');
    }
}
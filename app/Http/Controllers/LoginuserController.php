<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginuserController extends Controller
{
    public function index() {
    	return view('frontend/loginuser');
    }
}

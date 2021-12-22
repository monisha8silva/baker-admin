<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminuserController extends Controller
{
    public function index() {
    	return view('frontend/adminuser');
    }

    public function orders(){

        return view('order');
    }
}

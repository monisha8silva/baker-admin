<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CroissantsController extends Controller
{
    public function index() {
    	return view('frontend/croissants');
    }
}
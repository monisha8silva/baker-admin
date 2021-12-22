<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzasController extends Controller
{
    public function index() {
    	return view('frontend/pizzas');
    }
}

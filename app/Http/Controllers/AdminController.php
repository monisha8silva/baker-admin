<?php

namespace App\Http\Controllers;
use App\models\User;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Session;
use Carbon\Carbon;

use Illuminate\Support\Facades\Auth;
use App\Models\Owner;


class AdminController extends Controller
{
	public function owner_login(Request $request)
	{
		if ($request->isMethod('post'))
		{ 
			request()->validate([

				'email' => 'required|email',

				'password' => 'required',                

			]);

			$remember = ($request->input('remember')) ? true : false;
			$credentials = $request->except(['_token']);

			$user = Owner::where('email',$request->email)->first();
	

			if($user){

				if($user->email_verified == 1){

					
					if (Auth::guard('admin')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')], $remember))

					{

						
						// $user = Auth::guard('admin')->user();

						// $user->last_login = Carbon::now();

						// $user->save();

						return redirect('dashboard');

					}

				}
				Session::flash('error','!! Please Verify Your Account !!');
				return redirect()->back();
			}
			Session::flash('error','!! Wrong User Name Or Password !!');
			return redirect()->back();

		}
		return view('back/pages_back.login');
	}


	public function owner_register(Request $request)
	{
		if ($request->isMethod('post'))
		{
			request()->validate([

				'name' => 'required|min:2|max:50',      

				'email' => 'required|email|unique:users',

				'password' => 'required|min:6',                

				'confirm_password' => 'required|min:6|max:20|same:password',

			], [

				'name.required' => 'Name is required',

				'name.min' => 'Name must be at least 2 characters.',

				'name.max' => 'Name should not be greater than 50 characters.',

			]);
			$user = User::create([
				'name' => trim($request->input('name')),
				'email' => strtolower($request->input('email')),
				'password' => Hash::make($request->input('password')),
				'email_verification_token' => Str::random(32),
				'email_verified'=> 1
			]);

			//\Mail::to($user->email)->send(new WelcomeMail($user));

       //session()->flash('message', 'Please check your email to activate your account');
			Session::flash('success','Succseefully Registered ! Please Verify Your Account Using Your Email');

			return redirect()->back();


		}

		return view('back/pages_back.register');
	}
}

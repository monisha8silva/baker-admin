<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
    	return view('frontend/contact');
    }

//       public function store(){
//         $url = 'https://www.google.com/recaptcha/api/siteverify';
//         $remoteip = $_SERVER['REMOTE_ADDR'];
//         $data = [
//                 'secret' => config('services.recaptcha.secret'),
//                 'response' => $request->get('recaptcha'),
//                 'remoteip' => $remoteip
//               ];
//         $options = [
//                 'http' => [
//                   'header' => "Content-type: application/x-www-form-urlencoded\r\n",
//                   'method' => 'POST',
//                   'content' => http_build_query($data)
//                 ]
//             ];
//         $context = stream_context_create($options);
//                 $result = file_get_contents($url, false, $context);
//                 $resultJson = json_decode($result);
//         if ($resultJson->success != true) {
//                 return back()->withErrors(['captcha' => 'ReCaptcha Error']);
//                 }
//         if ($resultJson->score >= 0.3) {
//                 //Validation was successful, add your form submission logic here
//                 return back()->with('message', 'Thanks for your message!');
//         } else {
//                 return back()->withErrors(['captcha' => 'ReCaptcha Error']);
//         }
//       protected function validateLogin(Request $request){
  
//            $request->validate([

//        $this->username()=> 'required|string',
//        'password' => 'required|string',
//        'g-recaptcha-response' => 'required|captcha'
//       ]);

           
public function form()
{
    return view('contactfrom');
}

public function contactRequest(Request $request)
{
    $this->validate($request, [
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required',
        'g-recaptcha-response' => 'required|captcha',
    ]);

    // send email
    return "Email has been sent. We will reply you soon.";
}
}
        
      

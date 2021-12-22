<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class datainputNewController extends Controller
{ 
    public function index() {
        //$food = DB::select('select * from Food');
    	//return view('frontend/datainputNew',['food'=>$food]);

    return view('frontend/datainputNew');
        }

      
        public  function update_function(Request $request,$id)
        {
            
            $Food_Name = $request->input('Name');
            $WebCategoryId = $request->input('WebCategoryId');
            $Price = $request->input('InputPrice');
          
           // $img=$request->file('Image')->store('public');
    
            if($request->hasfile('Image')){
    
                $img=$request->file('Image');
                $extension=$img->getClientOriginalExtension();
    
                $filename=time().'.'.$extension;
                $img->move('img/', $filename);
                //$imgfile->img=$filename;
            }
    
            DB::update('update Food set Name =?, WebCategoryId =?,Price =?  where FoodId = ?' ,[$Food_Name,$WebCategoryId,$Price,$id]);
            return redirect('/datainputNew')->with('success','Updated');
        }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class datainputController extends Controller
{
    public function index() {

        /*$food = DB::select('select Food.OrderTicketName AS OrderTicketName,       
        FoodType.Name AS Name,
        Food.Price AS Price,
        Food.Img AS Img,
        Food.Status AS Status                   
        from Food LEFT JOIN FoodType ON Food.WebCategoryId = FoodType.WebCategoryId');
*/
     // $food = DB::table('Food')->leftJoin('FoodType', 'Food.WebCategoryId', '=', 'FoodType.WebCategoryId')->dd();

      

    	return view('frontend/datainput',['food'=>$food]);
       
    }

    public function edit_function($id){
        $food = DB::select('select * from Food where FoodId =?',[$id]);
        return view('frontend/datainputViewUpdate',['food'=>$food]);
        
    }
   
    public  function update_function(Request $request,$id)
    {
        
        $Food_Name = $request->input('Name');
        $WebCategoryId = $request->input('WebCategoryId');
        $Price = $request->input('Price');
      
        $img=$request->file('Image')->store('public');

        if($request->hasfile('Image')){

            $img=$request->file('Image');
            $extension=$img->getClientOriginalExtension();

            $filename=time().'.'.$extension;
            $img->move('img/', $filename);
            //$imgfile->img=$filename;
        }

        DB::update('update Food set Name =?, WebCategoryId =?,Price =?,Img =?   where FoodId = ?' ,[$Food_Name,$WebCategoryId,$Price,$filename,$id]);
        return redirect('/datainput')->with('success','Updated');
    }
}

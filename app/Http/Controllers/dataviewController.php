<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class dataviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    	//$food = DB::select('select * from Food');
        $food = DB::select('select Food.OrderTicketName AS OrderTicketName,       
        FoodType.Name AS Name,
        Food.Price AS Price,
        Food.Img AS Img,
        Food.FoodId AS FoodId,
        Food.Status AS Status,
        Food.WebCategoryId AS WebCategoryId,
        Food.quantity          
        from Food LEFT JOIN FoodType ON Food.WebCategoryId = FoodType.WebCategoryId');

        $foodtype = DB::select('select * from FoodType ');


    	return view('frontend/datainputNew',['food'=>$food ,'foodtype'=>$foodtype]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Food_Name = $request->input('InputName');
        $WebCategoryId = $request->input('InputType');
        $Price = $request->input('InputPrice');
        $radioStatus = $request->input('radioStatus');
        $qty = $request->input('InputQty');

      
       // $img=$request->file('Image')->store('public');
       $filename="";
       $img=$request->file('InputFiles');
        if($request->hasfile('InputFiles')){
            $filesize=$request->file('InputFiles')->getSize();
            $filesize=round(($filesize/1000),0);
                        if($filesize<500){
                        
                        $img=$request->file('InputFiles');
                    
                        $extension=$img->getClientOriginalExtension();

                        $filename=time().'.'.$extension;
                        $img->move('img/', $filename);
                        //$imgfile->img=$filename;
                        DB::update('update Food set Name =?, WebCategoryId =?,Price =? ,Img =? ,Status =?, quantity =? where FoodId = ?' ,[$Food_Name,$WebCategoryId,$Price,$filename,$radioStatus,$qty,$id]);
                        return redirect('/datainputNew')->with('success','Updated');
                
                        }
                        else{

                            return redirect('/datainputNew')->with('danger','Too large file size' );

                        }
        }
        else{


        DB::update('update Food set Name =?, WebCategoryId =?,Price =? ,Status =? where FoodId = ?' ,[$Food_Name,$WebCategoryId,$Price,$radioStatus,$id]);
        return redirect('/datainputNew')->with('success','Updated');

}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

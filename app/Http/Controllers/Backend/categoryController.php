<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\category;
use App\Models\unit;

class categoryController extends Controller
{
    function categoryAdd(){

        $categoris = category::latest()->get();

        return view('category.addCategory',['categoris'=>$categoris]);
    }//end

    function categoryStore(Request $request){

        $data = new category;

        $data->category_name = $request->Category;
        $data->save();

        return response()->json([]);

     }//end

    function unitAdd(){


        return view('unit.unitadd');
    }//end



    function unitStore(Request $request){

        $data = new unit;
        $data->unit_name = $request->unit_name;
        $data->save();

        return response()->json([]);

     }//end




}

<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\category;
use App\Models\tex;
use App\Models\unit;

class productController extends Controller
{
    function productHome(){


        return view('product.productHome');
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

    //tex
    function texAdd(){

        return view('texes.texIndex');
    }//end

    function texStore(Request $request){

        $data = new tex();
        $data->title = $request->title;
        $data->tex = $request->tex;
        $data->save();

        return response()->json([]);

     }//end

}

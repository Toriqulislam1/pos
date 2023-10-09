<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    function categoryAdd(){


        return view('category.addCategory');
    }
    function unitAdd(){


        return view('category.unit.unitadd');
    }
}

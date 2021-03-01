<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminProductController extends Controller
{
   
    public function GetProduct()
    {
    	return view('admin.product');
    }
}

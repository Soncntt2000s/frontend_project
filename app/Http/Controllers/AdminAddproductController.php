<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAddproductController extends Controller
{
    
    public function GetAddProduct()
    {
    	return view('admin.addproduct');
    }

}

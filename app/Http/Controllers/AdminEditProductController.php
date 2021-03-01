<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminEditProductController extends Controller
{
    
    public function GetEditProduct()
    {
    	return view('admin.editproduct');
    }

}

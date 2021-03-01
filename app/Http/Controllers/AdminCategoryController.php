<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    
    public function GetCategory()
    {
    	return view('admin.category');
    }

}

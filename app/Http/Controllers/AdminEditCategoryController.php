<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminEditCategoryController extends Controller
{
    
    public function GetEditCategory()
    {
    	return view('admin.editcategory');
    }

}

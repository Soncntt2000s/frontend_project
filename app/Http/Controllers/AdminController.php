<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
	public function GetAdminHome()
	{
		return redirect()->route('adminhome');
	}

	public function GetHome()
    {
    	return view('admin.home');
    }


    public function GetEdit()
    {
    	return view('admin.edit');
    }


}

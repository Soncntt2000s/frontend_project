<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\table;
use Auth;
use App\cart;
use Session;

class ChiTietController extends Controller
{
    public function GetChiTiet(Request $req)
    {
    	$sanpham = table::where('tenlt',$req->tenlt)->first();
    	// $sanpham = Product::where('id',$req->id)->first();
    	return view('container.ChiTietLap',compact('sanpham'));
    	
	}

}
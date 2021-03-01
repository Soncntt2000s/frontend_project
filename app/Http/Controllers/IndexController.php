<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\table;
use Auth;
use App\cart;
use Session;

class IndexController extends Controller
{
	public function GetHome()
    {
    	return redirect()->route('home');
    }

    public function GetIndex()
    {
		
	    $line_table_dell = table::where('hang','DELL')->paginate(5);
	    $line_table_asus = table::where('hang','ASUS')->paginate(5);
	    $line_table_acer = table::where('hang','ACER')->paginate(5);
	    $line_table_lenovo = table::where('hang','LENOVO')->paginate(5);
	    $line_table_hp = table::where('hang','HP')->paginate(5);
	    $line_table_msi = table::where('hang','MSI')->paginate(5);

	    return view('container.home',compact('line_table_dell','line_table_asus','line_table_acer','line_table_lenovo','line_table_hp','line_table_msi'));
	    	 
    }

    public function GetSanPham()
    {
    	return view('container.san_pham');
    }

    public function getSearch(Request $req)
    {
    	$product = table::where('tenlt','like','%'.$req->key.'%')
    						->orWhere('dongia',$req->key)->paginate(5);
    	return view('container.timkiem',compact('product'));
    }
}

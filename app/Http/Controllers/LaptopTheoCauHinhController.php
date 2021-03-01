<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\table;
use Auth;
use App\cart;
use Session;

class LaptopTheoCauHinhController extends Controller
{
	public function GetCauHinh()
	{
		$cauhinh_dell_in = table::where('dongsp','INSPIRON')->paginate(5);
		$cauhinh_dell_xps = table::where('dongsp','XPS')->paginate(5);
		$cauhinh_dell_pre = table::where('dongsp','PRECISION-SERIES')->paginate(5);
		$cauhinh_dell_g = table::where('dongsp','G-SERIES')->paginate(5);
		$cauhinh_dell_13r = table::where('dongsp','13R-SERISE')->paginate(5);

		$cauhinh_asus_a = table::where('dongsp','A-SERIES VIVOBOOK')->paginate(5);
		$cauhinh_asus_tuf = table::where('dongsp','ATUF-SERIES')->paginate(5);
		$cauhinh_asus_zen = table::where('dongsp','A-SERIES VIVOBOOK')->paginate(5);
		$cauhinh_asus_a = table::where('dongsp','ZENBOOK-SERIES')->paginate(5);
		$cauhinh_asus_strix = table::where('dongsp','STRIX-SERIES')->paginate(5);

		$cauhinh_msi_gf = table::where('dongsp','GF-SERIES')->paginate(5);
		$cauhinh_msi_ps = table::where('dongsp','PS-SERIES')->paginate(5);
		$cauhinh_msi_gl = table::where('dongsp','GL-SERIES')->paginate(5);
		$cauhinh_asus_a = table::where('dongsp','A-SERIES VIVOBOOK')->paginate(5);
		$cauhinh_asus_a = table::where('dongsp','A-SERIPS-SERIESES VIVOBOOK')->paginate(5);
		$cauhinh_asus_a = table::where('dongsp','A-SERIES VIVOBOOK')->paginate(5);
		$cauhinh_asus_a = table::where('dongsp','A-SERIES VIVOBOOK')->paginate(5);
		$cauhinh_asus_a = table::where('dongsp','A-SERIES VIVOBOOK')->paginate(5);
		$cauhinh_asus_a = table::where('dongsp','A-SERIES VIVOBOOK')->paginate(5);
		$cauhinh_asus_a = table::where('dongsp','A-SERIES VIVOBOOK')->paginate(5);
		$cauhinh_asus_a = table::where('dongsp','A-SERIES VIVOBOOK')->paginate(5);
		$cauhinh_asus_a = table::where('dongsp','A-SERIES VIVOBOOK')->paginate(5);
		$cauhinh_asus_a = table::where('dongsp','A-SERIES VIVOBOOK')->paginate(5);
		$cauhinh_asus_a = table::where('dongsp','A-SERIES VIVOBOOK')->paginate(5);

		return view('home.laptoptheocauhinh',compact('cauhinh_dell_in','cauhinh_dell_xps','cauhinh_dell_pre','cauhinh_dell_g','cauhinh_dell_13r','cauhinh_asus_a','cauhinh_asus_tuf','cauhinh_asus_zen','cauhinh_asus_a','cauhinh_asus_strix','cauhinh_msi_gf','cauhinh_msi_ps','cauhinh_msi_gl'));
	}
}

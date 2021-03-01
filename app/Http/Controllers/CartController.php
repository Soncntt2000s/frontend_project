<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\table;
use Auth;
use App\cart;
use Illuminate\Support\Facades\DB;
use Session;

class CartController extends Controller
{



    public function GetaddCart($id)
	{
		$add_cart = table::find($id);
        table::add(['id' => $id,'tenlt'=>$add_cart->tenlt,'sluong'=>1,'dongia'=>$add_cart->dongia,'img'=>$add_cart->img]);
        return redirect()->route('giohang',compact($add_cart));

	}

	public function GetshowCart()
	{
        return view('container.ShoppingCart');
	}
}



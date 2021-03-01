<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;

class HomeRegister extends Controller
{
    public function GetRegister()
    {
    	return view('container.register');
    }

    public function PostVali(Request $req)
    {
    	$user = new users();
    	$user->name = $req->Username;
    	$user->email = $req->email;
    	$user->diachi = $req->access;
    	$user->phone = $req->sdt;
    	$user->password = $req->pass;
    	$user->re_password = $req->enterpass;

    	$user->save();
    	return redirect()->back()->with('thanhcong','Tạo tài khoản thành công!');
    }
}

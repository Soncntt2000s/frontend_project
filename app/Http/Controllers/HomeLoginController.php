<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\users;

class HomeLoginController extends Controller
{
    public function GetLogin()
    {
    	Return view('container.login');
    }

    public function PostVali(request $req)
    {
    	$email = $req->email;
    	$password= $req->password;
    	if (Auth::attempt(['email'=> $email,'password'=> $password])) {
    		Return view('container.home'); 
    	}
        else
        {
            Return view('container.login'); 
        }
    }
}

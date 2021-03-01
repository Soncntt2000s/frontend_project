<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminBillController extends Controller
{
    public function GetBill()
    {
        return view('admin.bill');
    }


}

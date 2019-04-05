<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HocSinhController extends Controller
{
    public function list()
    {
    	return view('admin.hocsinh.list');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonHocController extends Controller
{
    public function list()
    {
    	return view('admin.monhoc.list');
    }
}

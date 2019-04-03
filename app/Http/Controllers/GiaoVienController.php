<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GiaoVienController extends Controller
{
    public function list()
    {
    	return view('admin.giaovien.list');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GiaoVienController extends Controller
{
	public function index(){
		return view('giaovien.index');
	}


    public function qlhocsinh()
    {

    	return view('giaovien.list_hoc_sinh');
    }
}

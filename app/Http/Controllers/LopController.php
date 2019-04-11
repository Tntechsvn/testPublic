<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LopController extends Controller
{
    public function list()
    {		
    	return view('admin.lop.list');
    }

    public function createlop()
    {
    	return view('admin.lop.createlop');
    }
}

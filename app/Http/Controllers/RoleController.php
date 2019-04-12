<?php

namespace App\Http\Controllers;
use App\Role;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function list()
    {
    	$roles = Role::all();		
    	return view('admin.role.list', ['roles' => $roles]);
    }

    public function getEdit($id)
    {
    	$roles = Role::find($id);
    	return view('admin.role.edit', ['roles' => $roles]);
    }
}

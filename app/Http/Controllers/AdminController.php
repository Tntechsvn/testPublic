<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\RoleUser;

class AdminController extends Controller
{
    public function admin()
    {
        return view('admin.index');
    }

    public function list()
    {
    	$user = User::all();
    	return view('admin.user.list', ['user'=>$user]);
    }

    public function getEdit($id)
    {
    	$user = User::find($id);
    	$role = Role::all();
    	return view('admin.user.edit',['user' => $user, 'role' => $role]);
    }

    public function postEdit(Request $request, $id)
    {
    	$user = User::find($id);
    	$role = Role::all();
        $role_user = RoleUser::all();
    	$this->validate($request, [
    		'Ten' => 'required|min:5|max:50',
            'email' => 'required|email',
            'password' => 'required|string|min:4|confirmed',
    	],
    	[
    		'Ten.required' => 'Nhập tên user đê',
    		'Ten.min' => 'Tên quá ngắn, nghĩ tên nào dài ra đê',
    		'Ten.max' => 'Viết dài quá, xóa bớt đê',
            'email.required' => 'Email là trường bắt buộc',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Mật khẩu là trường bắt buộc',
            'password.min' => 'Mật khẩu phải chứa ít nhất 4 ký tự',
            'password.confirmed' => 'Xác nhận mật khẩu không đúng',
    	]);

        //dd($user);
        //dd($role);
        //dd($role_user);
        //dd($request->all());

    	$user->name = $request->Ten;
        $user->email = $request->email;
    	$role_user->role_id = $request->quyen;
        $user->password = bcrypt($request->password);

    	$user->save();
        $role_user->save();
    	return redirect()->back()->with('thongbao', 'Sửa thông tin user thành công');
    }

    public function getDelete($id)
    {
    	$user = User::find($id);
    	$user -> delete();
    	return redirect()->back()->with('thongbao', 'Xóa user thành công');
    }

    public function add()
    {
        return view('welcome');
    }
}

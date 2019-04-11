<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\RoleUser;

class HocSinhController extends Controller
{
    public function list()
    {
    	$hoc_sinh = db::table('users')->join('role_user', 'users.id', '=', 'role_user.user_id')->where('role_id', 3)->get();
    	return view('admin.hocsinh.list', ['hoc_sinh' => $hoc_sinh]);
    }

    public function getAdd()
    {
    	return view('admin.hocsinh.add');
    }

    public function postAdd()
    {
        $user = User::find($id);
        $this->validate($request, [
            'Ten' => 'required|min:5|max:50',
            'email' => 'required|email',
            'password' => 'confirmed',
        ],
        [
            'Ten.required' => 'Nhập tên user đê',
            'Ten.min' => 'Tên quá ngắn, nghĩ tên nào dài ra đê',
            'Ten.max' => 'Viết dài quá, xóa bớt đê',
            'email.required' => 'Email là trường bắt buộc',
            'email.email' => 'Email không đúng định dạng',
            'password.confirmed' => 'Xác nhận mật khẩu không đúng',
        ]);

        $user->name = $request->Ten;
        $user->email = $request->email;
        $user->attachRole($request->quyen);
        $user->password = bcrypt($request->password);

        $user->save();
        return redirect()->back()->with('thongbao', 'Sửa thông tin user thành công');
    }

    public function getEdit($id)
    {
    	$hoc_sinh = User::findOrFail($id);
    	
    	return view('admin.hocsinh.edit',['hoc_sinh' => $hoc_sinh]);
    }

    public function postEdit(Request $request, $id)
    {
    	$hoc_sinh = User::findOrFail($id);
    	$this->validate($request, [
    		'Ten' => 'required|min:3|max:50',
            'email' => 'required|email',
            'password' => 'same:confirm-password'
    	],
    	[
    		'Ten.required' => 'Nhập tên giáo viên',
    		'Ten.min' => 'Tên phải trên 3 kí tự',
    		'Ten.max' => 'Tên phải dưới 50 kí tự',
            'email.required' => 'Email là trường bắt buộc',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Mật khẩu là trường bắt buộc',
            'password.confirmed' => 'Xác nhận mật khẩu không đúng',
    	]);

    	//$input = $request->all();
    	$hoc_sinh->name = $request->Ten;
        $hoc_sinh->email = $request->email;
        $hoc_sinh->attachRole(3);
        $hoc_sinh->password = bcrypt($request->password);

        //$hoc_sinh->update($input);

        //$hoc_sinh->role_user()->delete();

        //DB::table('role_user')->where('user_id',$id)->delete();
        
        // foreach ($request->input('roles') as $key => $value) {
        //     $hoc_sinh->attachRole($value);
        // }

    	$hoc_sinh->save();
    	return redirect()->back()->with('thongbao', 'Sửa thông tin giáo viên thành công');
    }
}

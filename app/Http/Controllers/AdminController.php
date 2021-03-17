<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Session;

//use DB;
class AdminController extends Controller
{
    public function login(){
        return view('backend.admin_login');
    }
    public function show_dashboard(){
        return view('admin.dashboard');
    }
    public function dashboard(Request $request){
        $admin_email = $request->input('admin_email');
        $admin_password = md5($request->input('admin_password'));

        $result = DB::table('admin')->where('admin_email',$admin_email)->where('admin_password',$admin_password);
        return view('admin.dashboard');
       /* if( Auth::attempt(['admin_email' => $admin_email, 'admin_password' =>$admin_password])) {
			// Kiểm tra đúng email và mật khẩu sẽ chuyển trang
			return redirect('admin.dashboard');
		} else {
			// Kiểm tra không đúng sẽ trả về trang login và thông báo lỗi
			return view('admin_login',['error'=>'Sai mật khẩu hoặc tài khoản, vui lòng nhập lại']);
		}*/
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Auth;

session_start();

class AdminController extends Controller
{
    //


    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->input();
            if (Auth::attempt(['email' => $data['email'], 'password' => $data['password'], 'admin' => '1'])) {
                return Redirect::to('/admin/dashboard');
            } else {
                return Redirect::to('/admin-login')->with('flash_message_error', 'Invalid Username or Password');
            }
        }

        return view('admin.auth.login');
    }


//    public function index()
//    {
//        return view('admin.auth.login');
//    }
//
    public function admin_dashboard()
    {

        return view('admin.dashboard.master');
    }
//
//    public function dashboard(Request $request)
//    {
//        $admin_email = $request->email;
//        $admin_password = md5($request->password);
//        $result = DB::table('tbl_admin')
//            ->where('email', $admin_email)
//            ->where('password', $admin_password)
//            ->first();
////        if ($admin_email == '' && $admin_password == ''){
////            Session::put('error_message', 'Email or Password Field Can not blank ');
////            return Redirect::to('/admin-login');
////        }
//
//        if (!empty($result)) {
//            Session::put('name', $result->admin_username);
//            Session::put('admin_id', $result->admin_id);
//            return Redirect::to('/dashboard');
//        } else {
//            Session::put('message', 'Email or Password Invalid');
//            return Redirect::to('/admin-login');
//        }
//    }


}

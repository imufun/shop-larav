<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Session;

session_start();

class AdminController extends Controller
{
    //


    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->input();
          //  print_r($data);die();
            if (Auth::attempt([
                'email' => $data['email'],
                'password' => $data['password'],
                'admin' => '1'])
            ) {
                // Session::put('adminSession', $data['email']);
                return Redirect::to('/admin/dashboard');
            } else {
                return Redirect::to('/admin-login')->with('flash_message_error', 'Invalid Username or Password');
            }
        }

        return view('admin.auth.login');
    }

    public function admin_dashboard()
    {
        return view('admin.dashboard.master');
    }

    public function logout()
    {
        Session::flush();
        return Redirect::to('/admin-login')->with('flash_message_logout', 'Logout Successfully');
    }

    public function settings()
    {
        return view('admin.dashboard.layout.partials.settings');
    }

    public function checkPassword(Request $request)
    {
        $data = $request->all();
        $current_password = $data['current_password'];
        $check_password = User::where(['admin' => '1'])->first();
        if (Hash::check($current_password, $check_password->password)) {
            echo "true";die();
        } else {
            echo "false";die();
        }
    }

    public function updatePassword(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $check_password = User::where(['email' => Auth::user()->email])->first();
            $current_password = $data['current_password'];
            if (Hash::check($current_password, $check_password->password)) {
                $password = bcrypt($data['new_password']);
                User::where('id', '1')->update(['password' => $password]);
                return redirect('/admin/settings')->with('flash_message_success', 'Password update successfully');
            } else {
                return redirect('/admin/settings')->with('flash_message_error', 'Incorrect current password');
            }
        }
    }


    // old login seystem
//    public function dashboard(Request $request)
//    {
//        $admin_email = $request->email;
//        $admin_password = md5($request->password);
//        $result = DB::table('tbl_admin')
//            ->where('admin_email', $admin_email)
//            ->where('admin_password', $admin_password)
//            ->first();
////        if ($admin_email == '' && $admin_password == ''){
////            Session::put('error_message', 'Email or Password Field Can not blank ');
////            return Redirect::to('/admin-login');
////        }
//
//        if (!empty($result)) {
//            Session::put('admin_name', $result->admin_username);
//            Session::put('admin_id', $result->admin_id);
//            return Redirect::to('/dashboard');
//        } else {
//            Session::put('message', 'Email or Password Invalid');
//            return Redirect::to('/admin-login');
//        }
//    }


}

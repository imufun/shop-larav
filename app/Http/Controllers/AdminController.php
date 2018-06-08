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
                return Redirect::to('/admin/dashboard')->with('flash_message_success', 'You are successfully logged in');
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
//        Session::put('admin_name', null);
//        Session::put('admin_id', null);
        Session::flush();
        return Redirect::to('/admin-login')->with('flash_message_logout', 'Logout Successfully');
    }

}

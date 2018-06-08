<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
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
//        if (Session::has('adminSession')) {
//
//        } else {
//            return Redirect::to('/admin-login')->with('flash_message_success', 'Please login to access');
//        }

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

}

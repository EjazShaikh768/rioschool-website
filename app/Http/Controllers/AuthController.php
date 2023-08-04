<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function Signin()
    {
        // if (Auth::check()) {
        //     return redirect('admin/Dashboard');
        // }
        return view('Admin.Login');
    }

    public function admin_signin(Request $request)
    {
        $this->validate($request,[
            'email' => 'string|required',
            'password' => 'required'
        ]);

        $user_data = array(
            'email' => $request->get('email'),
            'password' => $request->get('password')
        );

        if (Auth::attempt($user_data)) {
           // $request->session()->put('loginId', $user->id);
            return redirect('dashboard');
        } else {
            return back()->with('error', 'Something Wrong');
        }
    }

    public function dashboard()
    {
        // if (Auth::check()) {
        //     return view('Admin.Dashboard');
        // }
        return redirect('admin.Dashboard');
    }
}

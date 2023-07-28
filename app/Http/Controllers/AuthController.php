<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Session;
use Cookie;

class AuthController extends Controller
{
    public function login_process(Request $request)
    {
        $usercheck = Admin::where('username', $request->username)->get();
        if($usercheck->count() > 0){
            $userfirst = Admin::where('username', $request->username)->first();
            $passwordcheck = password_verify($request->password, $userfirst->password);
            if($passwordcheck){
                $request->session()->put('loginid', $userfirst->id);
                return redirect('/account')->with('success', 'success');
            } else {
                return back()->with('error', 'error');
            }
        } else {
            return back()->with('error', 'error');
        }
    }
    public function logout_process()
    {
        if(Session::has('loginid')){
            Session::pull('loginid');
            return redirect('/login')->with('success', 'Akun Telah di Logout');
        }
    }
}

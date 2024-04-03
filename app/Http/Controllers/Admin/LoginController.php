<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        if ($request->getMethod() == 'POST') {
            $credentials = $request->only('email', 'password');
            $credentials['is_admin'] = 1;
            if (Auth::attempt($credentials)) {
                return redirect()->route('admin.home');
            } else {
                return redirect()->back()->with('error', 'Invalid User');
            }
        } else {

            return view('Back.adminLogin.index');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('front.index');
    }

}

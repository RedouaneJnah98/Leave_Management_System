<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function check(Request $request)
    {
        $request->validate([
            'username' => 'required|exists:users',
            'password' => 'required',
        ]);

//        $remember_me = $request->has('remember_me');
        $remember_me = $request->input('remember_me');
        $credentials = $request->only('username', 'password');

        if (Auth::guard('web')->attempt($credentials, $remember_me)) {
            return redirect()->route('employee.home');
        } else {
            return redirect()->route('employee.login')->with('fail', 'Something went wrong, please try again');
        }
    }

    public function logout()
    {
        Auth::guard('web')->logout();

        return redirect()->route('employee.login');
    }
}

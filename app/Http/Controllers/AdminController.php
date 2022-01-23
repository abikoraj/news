<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login(Request $request)
    {
        if ($request->getMethod() == "POST") {
            if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                return back()->with('error', 'Wrong Email or Password');
            } else {
                return redirect()->route('catecory.index');
            }
        } else {
            return view('login');
        }
    }
}

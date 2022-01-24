<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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

    public function add(Request $request)
    {
        if ($request->getMethod() == "POST") {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->save();
            return back()->with('message', 'User Added Successfully!');
        } else {
            $user = DB::table('users')->get(['id', 'name', 'email']);
            return view('user.add', ['user' => $user]);
        }
    }

    public function delete(User $user)
    {
        $user->delete();
        return back()->with('message', 'User Added Successfully!');
    }
}

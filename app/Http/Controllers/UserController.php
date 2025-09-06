<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }

    public function creatregister(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'password' => 'required',
        ]);
        User::create($data);
        return redirect()->back()->with("msg", "Registration successfully");

    }

    public function securelogin(Request $request)
    {
        $data = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($data)) {
            if (Auth::user()->isAdmin) {
                return redirect()->route("adminDashboard.page");
            }
            return redirect()->route("index.page");
        } else {
            return redirect()->back()->with("msg", "invalid Credential");
        }
    }

    public function securelogout()
    {
        Auth::logout();
        return redirect()->route('index.page');
    }

}

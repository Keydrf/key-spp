<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('log-reg.login');
    }

    public function loginpost(Request $request,)
    {
        // if (Auth::attempt($request->only('email', 'password'))) {
        //     return redirect('/spp');
        // }
        if (Auth::attempt($request->only('email', 'password'))) {
        if (auth()->user()->level == 'admin') {
            return redirect('/spp');
        } elseif (Auth::user()->level == 'petugas') {
            return redirect('/petugas');
        } elseif (Auth::user()->level == 'siswa') {
            return redirect('/siswa');
        }
         else {
            return redirect("/");
        }}

        return \redirect('login');
    }
    public function register()
    {
        return view('log-reg.register');
    }
    public function registerpost(Request $request)
    {
        $data = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'role' => $request->role,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),

        ]);
        return redirect()->route('login');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/')->with("success", "You has been Logout");
    }
}

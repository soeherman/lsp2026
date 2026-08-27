<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penulis;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $penulis = Penulis::where('email', $request->email)->first();

        if ($penulis && password_verify($request->password, $penulis->password)) {
            session(['penulis_id' => $penulis->id, 'penulis_nama' => $penulis->nama, 'penulis_role' => $penulis->role]);
            return redirect()->intended('.');
        }

        return redirect()->back()->withErrors(['email' => 'Email atau password salah.'])->withInput();
    }

    public function logout()
    {
        session()->flush();
        return redirect('/login');
    }

}

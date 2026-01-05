<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //Menampilkan halaman login
    public function index()
    {
        return view('guest.login-form');
    }


    public function login(Request $request)
    {

        $validated = $request->validate([
            'username' => 'required',
            'password' => [
                'required',
                'min:3',
                'regex:/[A-Z]/'
            ],
        ], [
            'username.required' => 'Username wajib diisi.',
            'password.required' => 'Password wajib diisi.',
            'password.min' => 'Password minimal 3 karakter.',
            'password.regex' => 'Password harus mengandung huruf kapital.',
        ]);


        if ($request->username === $request->password) {
            return view('guest.berhasil', [
                'username' => $request->username
            ]);
        }

        // 🔸 Jika tidak sesuai, kembali ke halaman login dengan pesan error
        return back()->withErrors([
            'login' => 'Username dan password harus sama agar bisa login.',
        ])->withInput();
    }
}

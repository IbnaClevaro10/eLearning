<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Models\Student;
use App\Models\Teacher;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('frontend.auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $username = $request->username;
        $password = $request->password;

        // Cek apakah user adalah Admin
        $admin = Admin::where('username', $username)->first();
        if ($admin && Hash::check($password, $admin->password)) {
            Auth::login($admin);
            return redirect('admin.index');
        }

        // Cek apakah user adalah Guru
        $guru = Teacher::where('username', $username)->first();
        if ($guru && Hash::check($password, $guru->password)) {
            Auth::login($guru);
            return redirect('guru.index');
        }

        // Cek apakah user adalah Siswa
        $siswa = Student::where('username', $username)->first();
        if ($siswa && Hash::check($password, $siswa->password)) {
            Auth::login($siswa);
            return redirect('siswa.index');
        }

        // Jika tidak ditemukan, kembali ke login dengan pesan error
        return back()->with('error', 'Username atau password salah.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}


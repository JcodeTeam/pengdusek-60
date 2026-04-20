<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\TryCatch;

class AuthController extends Controller
{
    //
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function login(Request $request)
    {
        $request->validate(
            [
                'login_as' => 'required|in:siswa,admin',
                'identifier' => 'required',
                'password' => 'required',
            ],
            [
                'identifier.required' => 'Nomor Identitas Wajib Diisi',
                'password.required' => 'Password Wajib Diisi',
            ]
        );

        try {

            if ($request->login_as == 'siswa') {
                $siswa = Siswa::where('nisn', $request->identifier)->first();
                $user = $siswa ? $siswa->user : null;
            }

            if ($request->login_as == 'admin') {
                $admin = Admin::where('nip', $request->identifier)->first();
                $user = $admin ? $admin->user : null;
            }

            if (Auth::attempt(['email' => $user->email, 'password' => $request->password])) {
                if (!$user) {
                    return back()->withErrors(['identifier' => 'Kredentials tidak cocok']);
                }

                $request->session()->regenerate();

                if ($user->role == 'siswa') {
                    return redirect()->route('siswa.dashboard');
                }

                if ($user->role == 'admin') {
                    return redirect()->route('admin.dashboard');
                }
            }

            return back()->withErrors(['identifier' => 'Kredentials tidak cocok']);
        } catch (\Exception $e) {
            return back()->withErrors(['identifier' => 'Kredentials tidak cocok']);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}

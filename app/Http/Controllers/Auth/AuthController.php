<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'nisn' => 'required|string|max:10|unique:siswas,nisn',
            'email' => 'required|string|email|max:255|unique:users,email',
            'kelas' => 'required|string|max:10',
            'password' => 'required|string|min:8|confirmed',
        ]);

        try {
            DB::beginTransaction();

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => 'siswa',
            ]);

            Siswa::create([
                'user_id' => $user->id,
                'nisn' => $request->nisn,
                'kelas' => $request->kelas,
            ]);

            DB::commit();

            return redirect()->route('user.index')->with('success', 'User berhasil dibuat');
        } catch (\Exception $e) {
            return back()->with('error', 'Terjadi kesalahan' . $e->getMessage())->withInput();
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

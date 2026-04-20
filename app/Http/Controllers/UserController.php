<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function index()
    {
        $users = User::where('role', 'siswa')->latest()->paginate(5);
        return view('admin.users.index', compact('users'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'nisn' => 'required|string|max:10|unique:siswas,nisn,' . $user->siswa->id . ',id',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'kelas' => 'required|string',
            'password' => 'nullable|string|min:8|confirmed',
        ],
        [
            'nisn.unique' => 'NISN sudah dipakai',
            'email.unique' => 'Email sudah dipakai',
        ]);

        try {
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password ? Hash::make($request->password) : $user->password,
            ]);

            $user->siswa()->update([
                'nisn' => $request->nisn,
                'kelas' => $request->kelas,
            ]);

            return redirect()->route('user.index')->with('success', 'User berhasil di update');
        } catch (\Exception $e) {
            return back()->with('error', 'Terjadi kesalahan' . $e->getMessage())->withInput();
        }
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('user.index')->with('success', 'User berhasil dihapus');
    }
}

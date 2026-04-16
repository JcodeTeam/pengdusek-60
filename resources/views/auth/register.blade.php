@extends('layouts.auth')

@section('title', 'Daftar Siswa')

@section('content')
<form action="{{ route('register') }}" method="POST" class="space-y-4">
    @csrf
    
    <div class="grid grid-cols-1 gap-4">
        <div>
            <label class="block text-gray-700 text-sm font-semibold mb-1">Nama Lengkap</label>
            <input type="text" name="name" value="{{ old('name') }}" 
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none">
            @error('name') <p class="text-red-500 text-[10px] mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block text-gray-700 text-sm font-semibold mb-1">NISN</label>
                <input type="text" name="nisn" value="{{ old('nisn') }}" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none">
                @error('nisn') <p class="text-red-500 text-[10px] mt-1">{{ $message }}</p> @enderror
            </div>
            <div>
                <label class="block text-gray-700 text-sm font-semibold mb-1">Kelas</label>
                <input type="text" name="kelas" value="{{ old('kelas') }}" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none">
                @error('kelas') <p class="text-red-500 text-[10px] mt-1">{{ $message }}</p> @enderror
            </div>
        </div>

        <div>
            <label class="block text-gray-700 text-sm font-semibold mb-1">Email</label>
            <input type="text" name="email" value="{{ old('email') }}" 
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none">
            @error('email') <p class="text-red-500 text-[10px] mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block text-gray-700 text-sm font-semibold mb-1">Password</label>
            <input type="password" name="password" 
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none">
            @error('password') <p class="text-red-500 text-[10px] mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block text-gray-700 text-sm font-semibold mb-1">Konfirmasi Password</label>
            <input type="password" name="password_confirmation" 
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none">
        </div>
    </div>

    <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 rounded-xl shadow-lg mt-4 transition-all">
        Daftar Akun
    </button>
</form>
@endsection

@section('footer')
    <p class="text-gray-600 text-sm">
        Sudah punya akun? <a href="{{ route('login') }}" class="text-indigo-600 font-bold hover:underline">Login Sekarang</a>
    </p>
@endsection
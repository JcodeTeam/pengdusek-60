@extends('layouts.auth')

@section('title', 'Login')

@section('content')
<h3 class="text-center fw-bold mb-4">Masuk</h3>

<form action="{{ route('login') }}" method="POST">
    @csrf

    <div class="mb-4">
        <label class="form-label small fw-bold text-secondary">Login Sebagai</label>
        <div class="d-flex role-toggle">
            <button type="button" id="btn-siswa" onclick="setRole('siswa')"
                class="role-btn active">
                Siswa
            </button>
            <button type="button" id="btn-admin" onclick="setRole('admin')"
                class="role-btn text-secondary">
                Admin
            </button>
        </div>
        <input type="hidden" name="login_as" id="login_as" value="{{ old('login_as', 'siswa') }}">
    </div>

    <div class="mb-3">
        <label id="label-identifier" class="form-label small fw-bold text-secondary">NISN</label>
        <input type="text" name="identifier" value="{{ old('identifier') }}"
            class="form-control form-control-lg @error('identifier') is-invalid @enderror"
            placeholder="Masukkan nomor identitas" style="border-radius: 12px;">
        @error('identifier')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-4">
        <label class="form-label small fw-bold text-secondary">Password</label>
        <input type="password" name="password"
            class="form-control form-control-lg @error('password') is-invalid @enderror"
            placeholder="••••••••" style="border-radius: 12px;">
        @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary w-full btn-primary-custom w-100">
        Masuk
    </button>
</form>
@endsection

@push('scripts')
<script>
    function setRole(role) {
        const input = document.getElementById('login_as');
        const label = document.getElementById('label-identifier');
        const btnSiswa = document.getElementById('btn-siswa');
        const btnAdmin = document.getElementById('btn-admin');

        input.value = role;
        label.innerText = role === 'siswa' ? 'NISN' : 'NIP';

        if (role === 'siswa') {
            btnSiswa.classList.add('active');
            btnSiswa.classList.remove('text-secondary');
            btnAdmin.classList.remove('active');
            btnAdmin.classList.add('text-secondary');
        } else {
            btnAdmin.classList.add('active');
            btnAdmin.classList.remove('text-secondary');
            btnSiswa.classList.remove('active');
            btnSiswa.classList.add('text-secondary');
        }
    }

    window.onload = () => {
        const currentRole = document.getElementById('login_as').value;
        setRole(currentRole);
    };
</script>
@endpush

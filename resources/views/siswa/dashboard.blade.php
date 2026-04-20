@extends('layouts.app')

@section('content')
    <div class="container-fluid py-4">
        <nav aria-label="breadcrumb" class="mb-3">
            <ol class="breadcrumb mb-0" style="font-size: 0.875rem; font-weight: 500;">
                <li class="breadcrumb-item">Dashboard</li>
            </ol>
        </nav>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-2"></i> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="row mb-4">
            <div class="col-12">
                <div class="card bg-primary text-white shadow-sm overflow-hidden"
                    style="border: none; border-radius: 15px;">
                    <div class="card-body p-4 position-relative">
                        <div class="d-flex justify-content-between align-items-center position-relative z-1">
                            <div>
                                <h2 class="fw-bold mb-1">Halo, {{ Auth::user()->name ?? 'Siswa' }}!</h2>
                                <p class="mb-0 opacity-75">Suarakan aspirasimu untuk sekolah yang lebih baik.</p>
                            </div>
                            <button type="button"
                                class="btn btn-light text-primary fw-bold px-4 py-2 shadow-sm rounded-pill"
                                data-bs-toggle="modal" data-bs-target="#modalAspirasi">
                                <span class="material-symbols-outlined align-middle me-1">edit_square</span>
                                Tulis Aspirasi Baru
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-3 mb-4">
            <div class="col-md-4">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body d-flex align-items-center">
                        <div class="bg-primary bg-opacity-10 p-3 rounded-circle text-primary me-3">
                            <span class="material-symbols-outlined">send</span>
                        </div>
                        <div>
                            <h6 class="text-muted mb-1 small text-uppercase fw-bold">Total Aspirasi</h6>
                            <h4 class="mb-0 fw-bold">{{ $riwayat->count() }}</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body d-flex align-items-center">
                        <div class="bg-warning bg-opacity-10 p-3 rounded-circle text-warning me-3">
                            <span class="material-symbols-outlined">pending</span>
                        </div>
                        <div>
                            <h6 class="text-muted mb-1 small text-uppercase fw-bold">Menunggu</h6>
                            <h4 class="mb-0 fw-bold">{{ $riwayat->where('status', 'pending')->count() }}</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body d-flex align-items-center">
                        <div class="bg-success bg-opacity-10 p-3 rounded-circle text-success me-3">
                            <span class="material-symbols-outlined">check_circle</span>
                        </div>
                        <div>
                            <h6 class="text-muted mb-1 small text-uppercase fw-bold">Selesai</h6>
                            <h4 class="mb-0 fw-bold">{{ $riwayat->where('status', 'done')->count() }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    @include('siswa.create-modal')
@endsection

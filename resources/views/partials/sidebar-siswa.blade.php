<aside class="sidebar d-none d-lg-block p-4">
    <div class="mb-4">
        <div class="d-flex align-items-center gap-2 text-primary mb-1">
            <span class="material-symbols-outlined fs-3">school</span>
            <a class="text-decoration-none" href="{{ route('siswa.dashboard') }}"><h5 class="fw-bold mb-0 text-dark">Pengdusek</h5></a>
        </div>
    </div>
    <nav class="nav flex-column">
        <a class="nav-link {{ request()->is('siswa/dashboard') ? 'active' : '' }}" href="{{ route('siswa.dashboard') }}">
            <span class="material-symbols-outlined">dashboard</span> Dashboard
        </a>
        <a class="nav-link {{ request()->is('siswa/input_aspirasi') ? 'active' : '' }}" href="{{ route('input_aspirasi.index') }}">
            <span class="material-symbols-outlined">target</span> History Aspirations
        </a>
    </nav>
</aside>

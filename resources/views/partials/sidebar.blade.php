<aside class="sidebar d-none d-lg-block p-4">
    <div class="mb-4">
        <div class="d-flex align-items-center gap-2 text-primary mb-1">
            <span class="material-symbols-outlined fs-3">school</span>
            <a class="text-decoration-none" href="{{ route('siswa.dashboard') }}"><h5 class="fw-bold mb-0 text-dark">Pengdusek</h5></a>
        </div>
    </div>
    <nav class="nav flex-column">
        <a class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}" href="{{ route('siswa.dashboard') }}">
            <span class="material-symbols-outlined">dashboard</span> Dashboard
        </a>
        <a class="nav-link {{ request()->is('admin/aspirasi') ? 'active' : '' }}" href="{{ route('aspirasi.index') }}">
            <span class="material-symbols-outlined">target</span> Aspirations
        </a>
        <a class="nav-link {{ request()->is('admin/kategori') ? 'active' : '' }}" href="{{ route('kategori.index') }}">
            <span class="material-symbols-outlined">category</span> Categories
        </a>
        <a class="nav-link {{ request()->is('admin/user') ? 'active' : '' }}" href="{{ route('user.index') }}">
            <span class="material-symbols-outlined">group</span> Users
        </a>
        {{-- <a class="nav-link" href="#">
            <span class="material-symbols-outlined">bar_chart</span> Reports
        </a> --}}
    </nav>
</aside>

{{-- <nav aria-label="breadcrumb" class="mb-4">
    <ol class="breadcrumb">
        <li class="breadcrumb-item small"><a class="text-decoration-none text-muted" href="#">Dashboard</a></li>
        <li class="breadcrumb-item small"><a class="text-decoration-none text-muted" href="#">Aspirations</a></li>
        <li aria-current="page" class="breadcrumb-item small active text-primary">Update Progress</li>
    </ol>
</nav> --}}

<nav class="navbar navbar-expand-lg bg-white border-bottom px-4 py-2 fixed-top" style="left: 260px; top: 0; z-index: 1030;">
    <div class="container-fluid">

        <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">

                <a class="nav-link p-0 d-flex align-items-center gap-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                    <span class="text-dark fw-medium small d-none d-md-inline">
                        {{ Auth::user()->name }}
                    </span>

                    <div class="rounded-circle bg-primary text-white d-flex justify-content-center align-items-center shadow-sm"
                        style="width: 35px; height: 35px; font-size: 0.8rem;"> <span class="fw-bold">
                            {{ strtoupper(substr(Auth::user()->name, 0, 2)) }}
                        </span>
                    </div>
                </a>

                <ul class="dropdown-menu dropdown-menu-end border-0 shadow-sm mt-3">
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item text-danger">Logout</button>
                        </form>
                    </li>
                </ul>
            </li>
        </ul>

    </div>
</nav>

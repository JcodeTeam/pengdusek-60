<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <title>@yield('title', 'Pengdusek')</title>

    <style>
        :root {
            --bs-primary: #137fec;
            --bs-primary-rgb: 19, 127, 236;
        }

        body {
            font-family: 'Lexend', sans-serif;
            background-color: #f6f7f8;
            /* position: fixed; */
        }

        .wrapper {
            display: flex;
            min-height: 100vh;
        }

        .main {
            flex-grow: 1;
        }

        .sidebar {
            width: 260px;
            background: white;
            border-right: 1px solid #dee2e6;
            min-height: 100vh;
        }

        .nav-link {
            color: #617589;
            font-size: 0.875rem;
            font-weight: 500;
            padding: 0.75rem 1rem;
            border-radius: 0.5rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            margin-bottom: 0.25rem;
        }

        .nav-link:hover {
            background-color: #f8f9fa;
        }

        .nav-link.active {
            background-color: rgba(19, 127, 236, 0.1);
            color: var(--bs-primary);
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }
    </style>
</head>

<body>

    <div class="wrapper">

        @include('partials.sidebar-siswa')


        <div class="main p-3">

            @include('partials.navbar')

            <div class="p-4 pt-5 mt-4">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>

        </div>
    </div>


    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    <script>
        @if (session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: '{{ session('success') }}',
            });
        @endif

        @if (session('error'))
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: '{{ session('error') }}',
            });
        @endif
    </script>

    <script>
        function confirmDelete(event, form) {
            event.preventDefault();
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: 'Data akan dihapus secara permanen!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        }
    </script>

</body>

</html>

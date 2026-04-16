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

    <style>
        body {
            font-family: 'Lexend', sans-serif;
            background-color: #f8f9fa;
        }

        .auth-card {
            max-width: 400px;
            border-radius: 1rem;
            border: none;
        }

        .role-toggle {
            background: #e9ecef;
            padding: 5px;
            border-radius: 12px;
        }

        .role-btn {
            border: none;
            border-radius: 10px;
            padding: 8px;
            transition: 0.3s;
            width: 100%;
        }

        .role-btn.active {
            background: white;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            color: #0d6efd;
            font-weight: 600;
        }

        .btn-primary-custom {
            background-color: #0d6efd;
            border: none;
            border-radius: 10px;
            padding: 12px;
            font-weight: 600;
        }
    </style>

    <title>@yield('title', 'Pengdusek')</title>

</head>

<body class="d-flex align-items-center vh-100">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card auth-card shadow-sm p-4 mx-auto">
                    @yield('content')

                    <div class="text-center mt-4">
                        @yield('footer')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    @stack('scripts')
</body>

</html>

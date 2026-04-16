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
    <title>@yield('title', 'Aplikasi Aspirasi Sarana Sekolah')</title>
    <style>
        .hover-lift {
            transition: transform 0.3s ease, shadow 0.3s ease;
        }

        .hover-lift:hover {
            transform: translateY(-8px);
            box-shadow: 0 1rem 3rem rgba(0, 0, 0, .1) !important;
        }

        .fw-black {
            font-weight: 800;
        }

        .blur-xl {
            filter: blur(40px);
        }

        .ls-tight {
            letter-spacing: -0.02em;
        }

        .card-img-top {
            height: 300px;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <div class="container px-md-4">

        <section class="py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-7">
                    <div class="pe-lg-5">
                        <h1 class="display-4 fw-black ls-tight mb-4 text-dark d-flex align-items-center"
                            style="letter-spacing: -0.03em; font-weight: 800;">
                            <span class="material-symbols-outlined display-4 fw-black me-2" style="font-size: 50px">school</span>
                            Pengdusek
                        </h1>
                        <h3 class="display-6  mb-4 text-dark" style="letter-spacing: -0.03em; font-weight: 700;">
                            Sampaikan Keluhan Anda untuk Sekolah yang Lebih Baik
                        </h3>
                        <p class="lead text-secondary mb-5">
                            Laporkan masalah fasilitas sekolah dengan cepat, mudah, dan transparan demi kenyamanan
                            belajar mengajar bersama.
                        </p>
                        <div class="d-flex flex-column flex-sm-row gap-3">
                            <a href="{{ route('input_aspirasi.create') }}"
                                class="btn btn-primary btn-lg px-4 py-3 fw-bold rounded-3 shadow-sm">
                                Buat Laporan Sekarang
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="position-relative">
                        <div class="position-absolute translate-middle top-50 start-50 w-100 h-100 bg-primary opacity-10 blur-xl rounded-4"
                            style="filter: blur(50px); z-index: -1;"></div>
                        <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
                            <img src="{{ asset('storage/public/assets/img/smkn4.png') }}" class="card-img-top img-fluid"
                                alt="School Facility">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5 mt-4" id="alur">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Alur Pengaduan</h2>
                <p class="text-muted mx-auto" style="max-width: 600px;">
                    Ikuti langkah-langkah mudah berikut untuk menyampaikan keluhan terkait sarana dan prasarana sekolah.
                </p>
            </div>

            <div class="row g-4 text-center">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm p-4 rounded-4 hover-lift">
                        <div class="bg-primary bg-opacity-10 text-primary rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4"
                            style="width: 70px; height: 70px;">
                            <span class="material-symbols-outlined fs-1">edit_note</span>
                        </div>
                        <h5 class="fw-bold mb-2">1. Laporkan</h5>
                        <p class="text-muted small">Isi formulir pengaduan dengan detail kerusakan dan lampirkan foto
                            pendukung.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm p-4 rounded-4 hover-lift">
                        <div class="bg-primary bg-opacity-10 text-primary rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4"
                            style="width: 70px; height: 70px;">
                            <span class="material-symbols-outlined fs-1">verified_user</span>
                        </div>
                        <h5 class="fw-bold mb-2">2. Verifikasi</h5>
                        <p class="text-muted small">Tim sarana prasarana akan memverifikasi laporan Anda dalam waktu
                            maksimal 24 jam.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm p-4 rounded-4 hover-lift">
                        <div class="bg-primary bg-opacity-10 text-primary rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4"
                            style="width: 70px; height: 70px;">
                            <span class="material-symbols-outlined fs-1">construction</span>
                        </div>
                        <h5 class="fw-bold mb-2">3. Tindak Lanjut</h5>
                        <p class="text-muted small">Kerusakan akan segera diperbaiki oleh tim teknis sekolah sesuai
                            prioritas.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5 mb-5" id="statistik">
            <div
                class="card border-0 bg-primary rounded-4 shadow-lg overflow-hidden text-white p-4 p-md-5 position-relative">


                <div class="row align-items-center position-relative" style="z-index: 1;">
                    <div class="col-lg-5 mb-4 mb-lg-0">
                        <h2 class="fw-bold">Statistik Pengaduan</h2>
                        <p class="text-light opacity-75">Transparansi adalah kunci. Pantau progres perbaikan fasilitas
                            sekolah setiap saat.</p>
                    </div>
                    <div class="col-lg-7">
                        <div class="row text-center g-4">
                            <div class="col-4">
                                <h2 class="fw-black mb-0">1,248</h2>
                                <small class="text-uppercase tracking-wider opacity-75">Total</small>
                            </div>
                            <div class="col-4">
                                <h2 class="fw-black mb-0">1,102</h2>
                                <small class="text-uppercase tracking-wider opacity-75">Selesai</small>
                            </div>
                            <div class="col-4">
                                <h2 class="fw-black mb-0">146</h2>
                                <small class="text-uppercase tracking-wider opacity-75">Proses</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

</body>

</html>

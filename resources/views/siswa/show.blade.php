@extends('layouts.app')

@section('content')
    <nav aria-label="breadcrumb" class="mb-3">
        <ol class="breadcrumb mb-0" style="font-size: 0.875rem; font-weight: 500;">
            <li class="breadcrumb-item"><a href="{{ route('input_aspirasi.index') }}"
                    class="text-decoration-none text-secondary">History Aspirations</a></li>
            <li class="breadcrumb-item active text-primary" aria-current="page">Detail Progress</li>
        </ol>
    </nav>

    {{-- <div class="mb-4 d-flex justify-content-between align-items-start flex-wrap gap-3">
        <div>
            <h2 class="fw-bolder mb-1" style="font-size: 2rem; color: #111418; letter-spacing: -0.033em;">Update Aspiration
                Progress</h2>
            <p class="text-secondary mb-0">Manage and provide feedback for student submissions.</p>
        </div>
    </div> --}}

    <div class="row g-4">
        <div class="col-12 col-xl-8 d-flex flex-column gap-4">

            <div class="card border-0 shadow-sm rounded-4">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center flex-wrap">
                        <div class="rounded-4 border bg-primary text-white d-flex justify-content-center align-items-center shadow-sm"
                            style="width: 96px; height: 96px; font-size: 2.5rem;">
                            <span class="fw-bold">
                                {{ strtoupper(substr($aspirasi->siswa?->user?->name, 0, 2)) }}
                            </span>
                        </div>
                        <div class="flex-grow-1 ps-3">
                            <h4 class="fw-bold mb-1" style="color: #111418;">{{ $aspirasi->siswa?->user?->name }}</h4>

                            <div class="d-flex align-items-center gap-2 text-secondary mb-1" style="font-size: 0.875rem;">
                                <span class="material-symbols-outlined" style="font-size: 1.1rem;">class</span>
                                <span>Kelas {{ $aspirasi->siswa?->kelas }}</span>
                            </div>
                            <div class="d-flex align-items-center gap-2 text-secondary mb-1" style="font-size: 0.875rem;">
                                <span class="material-symbols-outlined" style="font-size: 1.1rem;">calendar_today</span>
                                <span>Submitted {{ $aspirasi->created_at->format('d M') }}</span>
                            </div>
                            @if ($aspirasi->foto)
                                <div>
                                    <a href="{{ asset('storage/public/aspirasi_fotos/' . $aspirasi->foto) }}"
                                        target="_blank"
                                        class="d-flex align-items-center text-decoration-none gap-2 d-inline-flex mb-1"
                                        style="font-size: 0.875rem;">
                                        <span class="material-symbols-outlined"
                                            style="font-size: 1.1rem;">open_in_new</span>
                                        View Attached Photo
                                    </a>
                                </div>
                            @endif
                        </div>
                        <div class="flex-grow-1 ps-3 ms-auto d-flex flex-column align-items-end gap-2">
                            <div class="ms-auto mt-3 mt-md-0">
                                <span class="badge rounded-pill text-uppercase px-3 py-2"
                                    style="background-color: #fff3cd; color: #856404; font-size: 0.75rem; font-weight: 700;">
                                    Status: {{ $aspirasi->status }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card border-0 shadow-sm rounded-4">
                <div class="card-body p-4">
                    <h5 class="fw-bold mb-4 d-flex align-items-center gap-2" style="font-size: 1.125rem;">
                        <span class="material-symbols-outlined text-primary">description</span>
                        Detail Aspirasi
                    </h5>

                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label class="form-label fw-bold text-muted text-uppercase mb-1"
                                    style="font-size: 0.75rem; letter-spacing: 0.025em;">Judul</label>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="material-symbols-outlined text-secondary"
                                        style="font-size: 1.25rem;">title</span>
                                    <p class="mb-0 fw-semibold text-dark">{{ $aspirasi->judul }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-4">
                                <label class="form-label fw-bold text-muted text-uppercase mb-1"
                                    style="font-size: 0.75rem; letter-spacing: 0.025em;">Lokasi</label>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="material-symbols-outlined text-secondary"
                                        style="font-size: 1.25rem;">location_on</span>
                                    <p class="mb-0 fw-semibold text-dark">{{ $aspirasi->lokasi }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="p-3 rounded-4 bg-light border-0">
                                <label class="form-label fw-bold text-muted text-uppercase mb-2"
                                    style="font-size: 0.75rem; letter-spacing: 0.025em;">Isi Aspirasi / Keluhan</label>
                                <div class="text-dark lh-base" style="font-size: 0.9375rem; white-space: pre-line;">
                                    {{ $aspirasi->ket }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-xl-4">
            <div class="card border-0 shadow-sm rounded-4">
                <div class="card-body p-4">
                    <h5 class="fw-bold mb-4 d-flex align-items-center gap-2" style="font-size: 1.125rem;">
                        <span class="material-symbols-outlined text-primary">history</span>
                        Progress History
                    </h5>

                    <div class="position-relative ms-2 pe-2 overflow-y-auto" style="max-height: 500px;">
                        @if ($feedback->isNotEmpty())
                            <div class="position-absolute h-100 border-start border-2"
                                style="left: 15px; top: 10px; border-color: #e9ecef !important;"></div>
                        @endif

                        @forelse ($feedback as $fe)
                            <div class="position-relative ps-5 mb-4">
                                @if ($fe->status == 'selesai')
                                    <div class="position-absolute rounded-circle bg-primary text-white d-flex align-items-center justify-content-center border border-white border-4"
                                        style="width: 32px; height: 32px; left: 0; top: -4px;">
                                        <span class="material-symbols-outlined" style="font-size: 14px;">check_circle</span>
                                    </div>
                                @elseif($fe->status == 'proses')
                                    <div class="position-absolute rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center border border-white border-4"
                                        style="width: 32px; height: 32px; left: 0; top: -4px;">
                                        <span class="material-symbols-outlined" style="font-size: 14px;">update</span>
                                    </div>
                                @else
                                    <div class="position-absolute rounded-circle bg-light text-primary d-flex align-items-center justify-content-center border border-white border-4"
                                        style="width: 32px; height: 32px; left: 0; top: -4px;">
                                        <span class="material-symbols-outlined" style="font-size: 14px;">add_task</span>
                                    </div>
                                @endif

                                <div class="d-flex flex-column gap-1">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="fw-bold mb-0" style="font-size: 0.875rem; color: #111418;">Status
                                            updated
                                            to '{{ $fe->status }}'</p>

                                        <span class="text-secondary fw-medium text-uppercase" style="font-size: 0.625rem;">
                                            {{ $fe->created_at->format('d M') }}
                                        </span>
                                    </div>
                                    <p class="text-secondary mb-0" style="font-size: 0.75rem;">by
                                        {{ $fe->admin?->user?->name }}</p>

                                    <div class="bg-light p-3 mt-2 rounded-3 text-secondary" style="font-size: 0.875rem;">
                                        {!! $fe->deskripsi !!}
                                    </div>

                                    @if ($fe->foto)
                                        <div class="d-flex justify-content-end mt-2">
                                            <a class="text-primary text-decoration-none d-inline-flex align-items-center gap-1"
                                                style="font-size: 0.75rem; font-weight: 500;"
                                                href="{{ asset('storage/public/progres_aspirasi/' . $fe->foto) }}"
                                                target="_blank">
                                                lihat foto
                                            </a>
                                        </div>
                                    @endif

                                </div>
                            </div>
                        @empty
                            <div class="text-center py-5">
                                <span class="material-symbols-outlined text-secondary"
                                    style="font-size: 3rem;">history</span>
                                <p class="text-secondary mt-3 mb-0" style="font-size: 0.875rem;">Belum ada riwayat
                                    progress untuk aspirasi ini.</p>
                            </div>
                        @endforelse
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
    {{-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            var form = document.getElementById('myForm');

            form.addEventListener('submit', function(e) {
                var editorContent = quill.root.innerHTML;

                document.getElementById('deskripsi').value = editorContent;
            });
        });
    </script> --}}

    <script>
        Dropzone.autoDiscover = false;

        document.addEventListener('DOMContentLoaded', function() {
            var myDropzone = new Dropzone("#my-dropzone", {
                url: "{{ route('aspirasi.store') }}",
                autoProcessQueue: false,
                uploadMultiple: false,
                maxFiles: 1,
                paramName: "foto",
                acceptedFiles: "image/jpeg,image/png,image/jpg,image/svg+xml",
                maxFilesize: 5,
                addRemoveLinks: true,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                },
                init: function() {
                    var dz = this;
                    var form = document.getElementById('myForm');

                    form.addEventListener('submit', function(e) {
                        e.preventDefault();

                        var editorContent = quill.root.innerHTML;
                        if (editorContent === '<p><br></p>') {
                            editorContent = '';
                        }
                        document.getElementById('deskripsi').value = editorContent;

                        if (dz.getQueuedFiles().length > 0) {
                            dz.processQueue();
                        } else {
                            form.submit();
                        }
                    });

                    this.on("sending", function(file, xhr, formData) {
                        formData.append("input_aspirasi_id", document.querySelector(
                            "input[name='input_aspirasi_id']").value);
                        formData.append("status", document.querySelector(
                            "select[name='status']").value);
                        formData.append("deskripsi", document.getElementById('deskripsi')
                            .value);
                    });

                    this.on("success", function(file, response) {
                        window.location.href =
                            "{{ route('aspirasi.show', ['aspirasi' => $aspirasi->id]) }}";
                    });

                    this.on("error", function(file, response) {
                        console.error("Error Dropzone:", response);
                    });
                }
            });
        });
    </script>
@endsection

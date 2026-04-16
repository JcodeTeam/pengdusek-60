    <div class="modal fade" id="modalAspirasi" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title fw-bold">
                        <span class="material-symbols-outlined align-middle me-2">edit_note</span>
                        Sampaikan Aspirasi
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>

                <form action="{{ route('input_aspirasi.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body p-4">

                        <div class="row g-3">

                            <div class="col-md-6">
                                <label class="form-label fw-bold">Judul Aspirasi <span
                                        class="text-danger">*</span></label>
                                <input type="text" name="judul" class="form-control"
                                    placeholder="Contoh: Masalah di kelas" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-bold">Kategori Aspirasi <span
                                        class="text-danger">*</span></label>
                                <select name="kategori_id" class="form-select" required>
                                    <option value="" selected disabled>-- Pilih Kategori --</option>
                                    @foreach ($categories as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->nama_kategori }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-bold">Lokasi Kejadian <span
                                        class="text-danger">*</span></label>
                                <input type="text" name="lokasi" class="form-control"
                                    placeholder="Contoh: Kantin, Kelas X-1, dll" required>
                            </div>

                            <div class="col-12">
                                <label class="form-label fw-bold">Isi Aspirasi / Keluhan <span
                                        class="text-danger">*</span></label>
                                <textarea name="ket" class="form-control" rows="5"
                                    placeholder="Jelaskan aspirasi atau keluhan Anda secara detail..." required></textarea>
                            </div>

                            <div class="col-12">
                                <label class="form-label fw-bold">Bukti Foto (Opsional)</label>
                                <input type="file" name="foto" class="form-control" accept="image/*">
                                <div class="form-text">Format: JPG, PNG, JPEG. Maksimal 10MB.</div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer bg-light">
                        <button type="button" class="btn btn-link text-secondary text-decoration-none"
                            data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary px-4 fw-bold">
                            <span class="material-symbols-outlined align-middle me-1 fs-6">send</span>
                            Kirim Aspirasi
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

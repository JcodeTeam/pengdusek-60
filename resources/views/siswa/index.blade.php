@extends('layouts.app')

@section('content')
    <div class="card border-0">
        <div class="card-header bg-white py-3">
            <h5 class="mb-0 fw-bold text-gray-800">Riwayat Aspirasi Anda</h5>
        </div>
    </div>
    <div class="table-container shadow-sm">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light text-muted small text-uppercase fw-bold">
                    <tr>
                        <th style="width: 20%;">Judul</th>
                        <th style="width: 20%;">Kategori</th>
                        <th style="width: 15%;">Tanggal</th>
                        <th style="width: 15%;">Status</th>
                        <th style="width: 10%;" class="text-end pe-4">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($riwayat as $a)
                        <tr>
                            <td>{{ Str::limit($a->judul, 20) }}</td>
                            <td>{{ Str::limit($a->kategori->nama_kategori, 20) }}</td>
                            <td>{{ $a->created_at->format('d M Y') }}</td>
                            <td>
                                @if ($a->status == 'menunggu')
                                    <span class="badge bg-warning text-dark">Pending</span>
                                @elseif ($a->status == 'proses')
                                    <span class="badge bg-primary">In Progress</span>
                                @elseif ($a->status == 'selesai')
                                    <span class="badge bg-success">Completed</span>
                                @endif
                            </td>
                            <td class="text-end pe-5">
                                <div class="d-flex justify-content-end gap-2">
                                    <a href="{{ route('input_aspirasi.show', $a->id) }}" class="">
                                        <span class="material-symbols-outlined">table_eye</span>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">
                                <div class="text-center py-5">
                                    <span class="material-symbols-outlined text-secondary"
                                        style="font-size: 3rem;">history</span>
                                    <p class="text-secondary mt-3 mb-0" style="font-size: 0.875rem;">Anda belum mengajukan aspirasi apapun.</p>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="d-flex flex-column flex-md-row justify-content-end align-items-center p-1 bg-light border-top">
            {{ $riwayat->links('pagination::bootstrap-5') }}
        </div>

    </div>
@endsection

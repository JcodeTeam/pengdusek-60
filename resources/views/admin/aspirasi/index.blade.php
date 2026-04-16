@extends('layouts.admin')

@section('content')
    <nav aria-label="breadcrumb" class="mb-3">
        <ol class="breadcrumb mb-0" style="font-size: 0.875rem; font-weight: 500;">
            <li class="breadcrumb-item"><a href="{{ route('aspirasi.index') }}"
                    class="text-decoration-none text-secondary">Aspirations</a></li>
        </ol>
    </nav>

    <div class="filter-section card p-4 shadow-sm mb-4">
        <h6 class="fw-bold mb-3">Filter Aspirations</h6>
        <form action="{{ route('aspirasi.index') }}" method="GET">
            <div class="row g-3">
                <div class="col-md-4">
                    <label class="form-label small fw-bold text-muted text-uppercase">Date Range</label>
                    <div class="d-flex gap-2">
                        <input type="date" name="start_date" class="form-control" value="{{ request('start_date') }}">
                        <input type="date" name="end_date" class="form-control" value="{{ request('end_date') }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <label class="form-label small fw-bold text-muted text-uppercase">Student Name</label>
                    <input class="form-control" placeholder="Filter by student..." type="text" name="student_name" />
                </div>
                <div class="col-md-4">
                    <label class="form-label small fw-bold text-muted text-uppercase">Category</label>
                    <select class="form-select" name="kategori_id">
                        <option value="">All Categories</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ old('kategori_id') == $category->id ? 'selected' : '' }}>
                                {{ $category->nama_kategori }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-2 ms-auto">
                    <button type="submit" class="btn btn-primary w-100">Filter</button>
                </div>
            </div>
        </form>
    </div>



    <div class="shadow-sm">
        <div class="">
            <table id="aspirasiTable" class="table table-hover align-middle mb-0">
                <thead class="table-light text-muted small text-uppercase fw-bold">
                    <tr>
                        <th style="width: 20%;">Student Name</th>
                        <th style="width: 20%;">Subjek</th>
                        <th style="width: 20%;">Category</th>
                        <th style="width: 15%;">Date</th>
                        <th style="width: 15%;">Status</th>
                        <th style="width: 10%;" class="text-end pe-4">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($aspirasi as $a)
                        <tr>
                            <td>{{ Str::limit($a->siswa->user->name, 20) }}</td>
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
                                    <a href="{{ route('aspirasi.show', $a->id) }}" class="">
                                        <span class="material-symbols-outlined">edit_note</span>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="d-flex flex-column flex-md-row justify-content-end align-items-center p-1 bg-light border-top">
            {{ $aspirasi->links('pagination::bootstrap-5') }}
        </div>

    </div>
@endsection

{{-- @push('scripts')
    <script>
        $(document).ready(function() {
            var table = $('#aspirasiTable').DataTable({
                "orderCellsTop": true,
                "paging": true,
                "pageLength": 5,
                "info": false,
                "responsive": true,
                "dom": "tp",
            });
        });
    </script>
@endpush --}}

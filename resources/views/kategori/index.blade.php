@extends('layouts.admin')

@section('title', 'Aspirations Management')

@section('content')

    <nav aria-label="breadcrumb" class="mb-3">
        <ol class="breadcrumb mb-0" style="font-size: 0.875rem; font-weight: 500;">
            <li class="breadcrumb-item"><a href="{{ route('kategori.index') }}"
                    class="text-decoration-none text-secondary">Categories</a></li>
        </ol>
    </nav>

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="mb-0 text-gray-800">Manajemen Kategori</h4>

        <button type="button" class="btn btn-primary shadow-sm" data-bs-toggle="modal"
            data-bs-target="#createCategoryModal">
            <span class="material-symbols-outlined align-middle me-1" style="font-size: 20px;">add</span>
            Tambah Kategori
        </button>
    </div>

    <div class="table-container shadow-sm">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light text-muted small text-uppercase fw-bold">
                    <tr>
                        <th style="width: 15%;">Category Name</th>
                        <th style="width: 15%;">Description</th>
                        <th style="width: 10%;" class="text-end pe-4">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $c)
                        <tr>
                            <td>{{ Str::limit($c->nama_kategori, 20) }}</td>
                            <td>{{ Str::limit($c->deskripsi, 20) }}</td>
                            <td class="text-end pe-4">
                                <div class="d-flex justify-content-end align-items-center gap-1">
                                    <a role="button" data-bs-toggle="modal"
                                        data-bs-target="#editCategoryModal-{{ $c->id }}"
                                        class="btn btn-sm btn-icon text-warning p-1">
                                        <span class="material-symbols-outlined">edit_note</span>
                                    </a>

                                    <form action="{{ route('kategori.destroy', $c->id) }}" method="POST" class="d-inline"
                                        onsubmit="return confirmDelete(event, this);">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="btn btn-sm btn-icon text-danger p-1 border-0 bg-transparent">
                                            <span class="material-symbols-outlined">delete</span>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @include('kategori.edit-modal')
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="d-flex flex-column flex-md-row justify-content-end align-items-center p-1 bg-light border-top">
            {{ $categories->links('pagination::bootstrap-5') }}
        </div>
    </div>

    @include('kategori.create-modal')

@endsection

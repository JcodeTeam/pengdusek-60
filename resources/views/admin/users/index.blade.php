@extends('layouts.admin')

@section('title', 'Users Management')

@section('content')

    <nav aria-label="breadcrumb" class="mb-3">
        <ol class="breadcrumb mb-0" style="font-size: 0.875rem; font-weight: 500;">
            <li class="breadcrumb-item"><a href="{{ route('user.index') }}"
                    class="text-decoration-none text-secondary">Users</a></li>
        </ol>
    </nav>

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="mb-0 text-gray-800">Manajemen User</h4>

        <button type="button" class="btn btn-primary shadow-sm" data-bs-toggle="modal" data-bs-target="#createUserModal">
            <span class="material-symbols-outlined align-middle me-1" style="font-size: 20px;">add</span>
            Tambah User
        </button>
    </div>

    <div class="table-container shadow-sm">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light text-muted small text-uppercase fw-bold">
                    <tr>
                        <th style="width: 15%;">Name</th>
                        <th style="width: 15%;">Email</th>
                        {{-- <th style="width: 10%;">Role</th> --}}
                        <th style="width: 10%;" class="text-end pe-4">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $u)
                        <tr>
                            <td>{{ Str::limit($u->name, 20) }}</td>
                            <td>{{ Str::limit($u->email, 20) }}</td>
                            {{-- <td>{{ $u->role }}</td> --}}
                            <td class="text-end pe-5">
                                <div class="d-flex justify-content-end align-items-center gap-1">
                                    <a type="button" data-bs-toggle="modal"
                                        data-bs-target="#editUserModal-{{ $u->id }}" class="text-decoration-none">
                                        <span class="material-symbols-outlined text-warning">edit_note</span>
                                    </a>

                                    <form action="{{ route('user.destroy', $u->id) }}" method="POST" class="d-inline"
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
                        @include('admin.users.edit-modal')
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="d-flex flex-column flex-md-row justify-content-end align-items-center p-1 bg-light border-top">
            {{ $users->links('pagination::bootstrap-5') }}
        </div>
    </div>

    @include('admin.users.create-modal')

@endsection

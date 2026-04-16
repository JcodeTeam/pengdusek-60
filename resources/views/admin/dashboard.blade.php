{{-- <!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Admin Aspirations Management Dashboard</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#137fec",
                        "background-light": "#f6f7f8",
                        "background-dark": "#101922",
                    },
                    fontFamily: {
                        "display": ["Lexend"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark font-display text-[#111418] dark:text-white">
    <div class="flex h-screen overflow-hidden">
        <aside class="w-64 flex flex-col bg-white dark:bg-[#1a2632] border-r border-[#dbe0e6] dark:border-[#2d3a4b]">
            <div class="p-6 flex flex-col gap-6">
                <div class="flex gap-3 items-center">
                    <div class="bg-primary rounded-lg size-10 flex items-center justify-center text-white">
                        <span class="material-symbols-outlined">school</span>
                    </div>
                    <div class="flex flex-col">
                        <h1 class="text-[#111418] dark:text-white text-base font-bold leading-tight">Admin Panel</h1>
                        <p class="text-[#617589] dark:text-[#a0aec0] text-xs font-normal">Aspirations Management</p>
                    </div>
                </div>
                <nav class="flex flex-col gap-1">
                    <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-[#617589] hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors"
                        href="#">
                        <span class="material-symbols-outlined text-[24px]">dashboard</span>
                        <span class="text-sm font-medium">Dashboard</span>
                    </a>
                    <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-primary/10 text-primary" href="#">
                        <span class="material-symbols-outlined text-[24px]"
                            style="font-variation-settings: 'FILL' 1">target</span>
                        <span class="text-sm font-semibold">Aspirations</span>
                    </a>
                    <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-[#617589] hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors"
                        href="#">
                        <span class="material-symbols-outlined text-[24px]">category</span>
                        <span class="text-sm font-medium">Categories</span>
                    </a>
                    <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-[#617589] hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors"
                        href="#">
                        <span class="material-symbols-outlined text-[24px]">group</span>
                        <span class="text-sm font-medium">Users</span>
                    </a>
                    <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-[#617589] hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors"
                        href="#">
                        <span class="material-symbols-outlined text-[24px]">settings</span>
                        <span class="text-sm font-medium">Settings</span>
                    </a>
                </nav>
            </div>
            <div class="mt-auto p-6 border-t border-[#dbe0e6] dark:border-[#2d3a4b]">
                <div class="flex items-center gap-3">
                    <div class="size-10 rounded-full bg-cover bg-center" data-alt="Avatar of the logged-in admin user"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCdiMCYsP_LMAIpP0QMFZ7tlKf0O_iA_ZnnSW1LKtvI8lAv7VERIDkKoyD8Q0Jc39aexNt8AZcNTZssUCzMzAWvSc4YAiZa8Nox7CTvg3eRqDvi3LTpPFTJRdtnat5JbgsNt_hZIMjCa4rFJixP2XxQwf2GMA3IqTCKhPk1yqVZdYh4hpcEioEY0mvyvmfprZq5YGSaxL9y-DxOsQ6PQ6iXl5-2nuPJ0Ec8M01GgdMtkDD5aBUdaUPnl_E4KK3Q6PRzxjrtWg0vlRY");'>
                    </div>
                    <div class="flex flex-col overflow-hidden">
                        <p class="text-sm font-bold truncate">John Doe</p>
                        <p class="text-xs text-[#617589] truncate">Super Admin</p>
                    </div>
                </div>
            </div>
        </aside>
        <main class="flex-1 flex flex-col overflow-y-auto">
            <header
                class="flex items-center justify-between px-8 py-4 bg-white dark:bg-[#1a2632] border-b border-[#dbe0e6] dark:border-[#2d3a4b] sticky top-0 z-10">
                <div class="flex items-center gap-4">
                    <h2 class="text-xl font-bold tracking-tight">Aspirations Dashboard</h2>
                    <div class="relative w-72">
                        <span
                            class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-[#617589] text-[20px]">search</span>
                        <input
                            class="w-full bg-background-light dark:bg-background-dark border-none rounded-lg pl-10 pr-4 py-2 text-sm focus:ring-2 focus:ring-primary/50"
                            placeholder="Search aspirations..." type="text" />
                    </div>
                </div>
                <div class="flex items-center gap-3">
                    <button
                        class="p-2 rounded-lg bg-background-light dark:bg-background-dark text-[#111418] dark:text-white hover:bg-gray-200 transition-colors">
                        <span class="material-symbols-outlined text-[22px]">notifications</span>
                    </button>
                    <button
                        class="p-2 rounded-lg bg-background-light dark:bg-background-dark text-[#111418] dark:text-white hover:bg-gray-200 transition-colors">
                        <span class="material-symbols-outlined text-[22px]">dark_mode</span>
                    </button>
                </div>
            </header>
            <div class="p-8 space-y-8">
                <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div
                        class="bg-white dark:bg-[#1a2632] p-6 rounded-xl border border-[#dbe0e6] dark:border-[#2d3a4b] shadow-sm">
                        <p class="text-[#617589] dark:text-[#a0aec0] text-sm font-medium">Total Aspirations</p>
                        <p class="text-3xl font-bold mt-1">1,248</p>
                    </div>
                    <div
                        class="bg-white dark:bg-[#1a2632] p-6 rounded-xl border border-[#dbe0e6] dark:border-[#2d3a4b] shadow-sm">
                        <p class="text-[#617589] dark:text-[#a0aec0] text-sm font-medium">Pending</p>
                        <p class="text-3xl font-bold mt-1 text-yellow-500">156</p>
                    </div>
                    <div
                        class="bg-white dark:bg-[#1a2632] p-6 rounded-xl border border-[#dbe0e6] dark:border-[#2d3a4b] shadow-sm">
                        <p class="text-[#617589] dark:text-[#a0aec0] text-sm font-medium">In Progress</p>
                        <p class="text-3xl font-bold mt-1 text-primary">432</p>
                    </div>
                    <div
                        class="bg-white dark:bg-[#1a2632] p-6 rounded-xl border border-[#dbe0e6] dark:border-[#2d3a4b] shadow-sm">
                        <p class="text-[#617589] dark:text-[#a0aec0] text-sm font-medium">Completed</p>
                        <p class="text-3xl font-bold mt-1 text-green-500">660</p>
                    </div>
                </section>
                <section
                    class="bg-white dark:bg-[#1a2632] p-6 rounded-xl border border-[#dbe0e6] dark:border-[#2d3a4b] shadow-sm">
                    <h3 class="text-lg font-bold mb-4">Filter Aspirations</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="flex flex-col gap-1.5">
                            <label class="text-xs font-semibold text-[#617589] uppercase tracking-wider">Date
                                Range</label>
                            <select
                                class="form-input rounded-lg border-[#dbe0e6] dark:border-[#2d3a4b] bg-white dark:bg-background-dark focus:border-primary focus:ring-primary text-sm">
                                <option>Today</option>
                                <option selected="">This Month</option>
                                <option>Last 3 Months</option>
                            </select>
                        </div>
                        <div class="flex flex-col gap-1.5">
                            <label class="text-xs font-semibold text-[#617589] uppercase tracking-wider">Student
                                Name</label>
                            <input
                                class="form-input rounded-lg border-[#dbe0e6] dark:border-[#2d3a4b] bg-white dark:bg-background-dark focus:border-primary focus:ring-primary text-sm"
                                placeholder="Filter by student..." type="text" />
                        </div>
                        <div class="flex flex-col gap-1.5">
                            <label
                                class="text-xs font-semibold text-[#617589] uppercase tracking-wider">Category</label>
                            <select
                                class="form-input rounded-lg border-[#dbe0e6] dark:border-[#2d3a4b] bg-white dark:bg-background-dark focus:border-primary focus:ring-primary text-sm">
                                <option value="">All Categories</option>
                                <option>Facilities</option>
                                <option>Academic</option>
                                <option>Organization</option>
                            </select>
                        </div>
                    </div>
                </section>
                <section
                    class="bg-white dark:bg-[#1a2632] rounded-xl border border-[#dbe0e6] dark:border-[#2d3a4b] shadow-sm overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead class="bg-gray-50 dark:bg-gray-800/50">
                                <tr>
                                    <th class="px-6 py-4 text-xs font-semibold text-[#617589] uppercase tracking-wider">
                                        ID</th>
                                    <th
                                        class="px-6 py-4 text-xs font-semibold text-[#617589] uppercase tracking-wider">
                                        Student Name</th>
                                    <th
                                        class="px-6 py-4 text-xs font-semibold text-[#617589] uppercase tracking-wider">
                                        Category</th>
                                    <th
                                        class="px-6 py-4 text-xs font-semibold text-[#617589] uppercase tracking-wider">
                                        Date</th>
                                    <th
                                        class="px-6 py-4 text-xs font-semibold text-[#617589] uppercase tracking-wider">
                                        Status</th>
                                    <th
                                        class="px-6 py-4 text-xs font-semibold text-[#617589] uppercase tracking-wider text-right">
                                        Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-[#dbe0e6] dark:divide-[#2d3a4b]">
                                <tr>
                                    <td class="px-6 py-4 text-sm">#ASP-8842</td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-2">
                                            <div
                                                class="size-8 rounded-full bg-primary/20 flex items-center justify-center text-primary font-bold text-xs">
                                                AA</div>
                                            <span class="text-sm font-medium">Aditya Atmadja</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-sm">Facilities</td>
                                    <td class="px-6 py-4 text-sm">Oct 24, 2023</td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="px-2.5 py-1 rounded-full text-xs font-semibold bg-yellow-100 text-yellow-700 dark:bg-yellow-900/30 dark:text-yellow-400">Menunggu</span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex justify-end gap-2">
                                            <button class="p-1.5 text-primary hover:bg-primary/10 rounded"
                                                title="View Details">
                                                <span class="material-symbols-outlined text-[18px]">visibility</span>
                                            </button>
                                            <button class="p-1.5 text-primary hover:bg-primary/10 rounded"
                                                title="Update Progress">
                                                <span class="material-symbols-outlined text-[18px]">edit_note</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 text-sm">#ASP-8839</td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-2">
                                            <div
                                                class="size-8 rounded-full bg-primary/20 flex items-center justify-center text-primary font-bold text-xs">
                                                BP</div>
                                            <span class="text-sm font-medium">Budi Pratama</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-sm">Academic</td>
                                    <td class="px-6 py-4 text-sm">Oct 23, 2023</td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="px-2.5 py-1 rounded-full text-xs font-semibold bg-blue-100 text-blue-700 dark:bg-blue-900/30 dark:text-blue-400">Proses</span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex justify-end gap-2">
                                            <button class="p-1.5 text-primary hover:bg-primary/10 rounded">
                                                <span class="material-symbols-outlined text-[18px]">visibility</span>
                                            </button>
                                            <button class="p-1.5 text-primary hover:bg-primary/10 rounded">
                                                <span class="material-symbols-outlined text-[18px]">edit_note</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 text-sm">#ASP-8835</td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-2">
                                            <div
                                                class="size-8 rounded-full bg-primary/20 flex items-center justify-center text-primary font-bold text-xs">
                                                CM</div>
                                            <span class="text-sm font-medium">Clara Merita</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-sm">Organization</td>
                                    <td class="px-6 py-4 text-sm">Oct 22, 2023</td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="px-2.5 py-1 rounded-full text-xs font-semibold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400">Selesai</span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex justify-end gap-2">
                                            <button class="p-1.5 text-primary hover:bg-primary/10 rounded">
                                                <span class="material-symbols-outlined text-[18px]">visibility</span>
                                            </button>
                                            <button class="p-1.5 text-primary hover:bg-primary/10 rounded">
                                                <span class="material-symbols-outlined text-[18px]">edit_note</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 text-sm">#ASP-8831</td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-2">
                                            <div
                                                class="size-8 rounded-full bg-primary/20 flex items-center justify-center text-primary font-bold text-xs">
                                                DK</div>
                                            <span class="text-sm font-medium">Deni Kurnia</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-sm">Facilities</td>
                                    <td class="px-6 py-4 text-sm">Oct 21, 2023</td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="px-2.5 py-1 rounded-full text-xs font-semibold bg-blue-100 text-blue-700 dark:bg-blue-900/30 dark:text-blue-400">Proses</span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex justify-end gap-2">
                                            <button class="p-1.5 text-primary hover:bg-primary/10 rounded">
                                                <span class="material-symbols-outlined text-[18px]">visibility</span>
                                            </button>
                                            <button class="p-1.5 text-primary hover:bg-primary/10 rounded">
                                                <span class="material-symbols-outlined text-[18px]">edit_note</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 text-sm">#ASP-8828</td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-2">
                                            <div
                                                class="size-8 rounded-full bg-primary/20 flex items-center justify-center text-primary font-bold text-xs">
                                                EL</div>
                                            <span class="text-sm font-medium">Eka Lestari</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-sm">Academic</td>
                                    <td class="px-6 py-4 text-sm">Oct 20, 2023</td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="px-2.5 py-1 rounded-full text-xs font-semibold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400">Selesai</span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex justify-end gap-2">
                                            <button class="p-1.5 text-primary hover:bg-primary/10 rounded">
                                                <span class="material-symbols-outlined text-[18px]">visibility</span>
                                            </button>
                                            <button class="p-1.5 text-primary hover:bg-primary/10 rounded">
                                                <span class="material-symbols-outlined text-[18px]">edit_note</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div
                        class="flex items-center justify-between px-6 py-4 bg-gray-50 dark:bg-gray-800/50 border-t border-[#dbe0e6] dark:border-[#2d3a4b]">
                        <p class="text-sm text-[#617589]">Showing 1 to 5 of 1,248 items</p>
                        <div class="flex items-center gap-2">
                            <button
                                class="p-1 rounded border border-[#dbe0e6] dark:border-[#2d3a4b] hover:bg-white dark:hover:bg-gray-700 disabled:opacity-50"
                                disabled="">
                                <span class="material-symbols-outlined text-[20px]">chevron_left</span>
                            </button>
                            <button class="px-3 py-1 rounded bg-primary text-white text-sm font-semibold">1</button>
                            <button
                                class="px-3 py-1 rounded hover:bg-gray-200 dark:hover:bg-gray-700 text-sm">2</button>
                            <button
                                class="px-3 py-1 rounded hover:bg-gray-200 dark:hover:bg-gray-700 text-sm">3</button>
                            <span class="text-[#617589]">...</span>
                            <button
                                class="px-3 py-1 rounded hover:bg-gray-200 dark:hover:bg-gray-700 text-sm">125</button>
                            <button
                                class="p-1 rounded border border-[#dbe0e6] dark:border-[#2d3a4b] hover:bg-white dark:hover:bg-gray-700">
                                <span class="material-symbols-outlined text-[20px]">chevron_right</span>
                            </button>
                        </div>
                    </div>
                </section>
            </div>
            <footer class="mt-auto px-8 py-6 text-center text-[#617589] text-xs">
                © 2023 Aspirations Management Dashboard. All rights reserved.
            </footer>
        </main>
    </div>
</body>

</html> --}}


@extends('layouts.admin')

@section('content')
    <nav aria-label="breadcrumb" class="mb-3">
        <ol class="breadcrumb mb-0" style="font-size: 0.875rem; font-weight: 500;">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}" class="text-decoration-none text-secondary">Dashboard</a></li>
        </ol>
    </nav>

    {{-- <main class="p-4 flex-grow-1"> --}}
        <div class="row g-4 mb-4">
            <div class="col-lg-3 col-md-6">
                <div class="card stat-card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted fw-medium">Total Aspirations</h6>
                        <h2 class="card-title mb-0 fw-bold">{{ $totalAspirasi }}</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card stat-card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted fw-medium">Pending</h6>
                        <h2 class="card-title mb-0 fw-bold text-warning">{{ $totalMenunggu }}</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card stat-card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted fw-medium">In Progress</h6>
                        <h2 class="card-title mb-0 fw-bold text-primary">{{ $totalProses }}</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card stat-card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted fw-medium">Completed</h6>
                        <h2 class="card-title mb-0 fw-bold text-success">{{ $totalSelesai }}</h2>
                    </div>
                </div>
            </div>
        </div>
    {{-- </main> --}}
@endsection

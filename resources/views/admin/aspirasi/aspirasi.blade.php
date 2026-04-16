{{-- <!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Aspiration Progress &amp; Feedback Form</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet" />
    <link

        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
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
        body {
            font-family: 'Lexend', sans-serif;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark text-[#111418] dark:text-white min-h-screen">
    <div class="layout-container flex flex-col min-h-screen">
        <!-- TopNavBar -->
        <header
            class="flex items-center justify-between whitespace-nowrap border-b border-solid border-[#f0f2f4] dark:border-gray-800 px-10 py-3 bg-white dark:bg-background-dark">
            <div class="flex items-center gap-8">
                <div class="flex items-center gap-4 text-primary">
                    <div class="size-6">
                        <span class="material-symbols-outlined text-3xl">school</span>
                    </div>
                    <h2 class="text-[#111418] dark:text-white text-lg font-bold leading-tight tracking-[-0.015em]">Admin
                        Dashboard</h2>
                </div>
                <label class="flex flex-col min-w-40 !h-10 max-w-64">
                    <div class="flex w-full flex-1 items-stretch rounded-lg h-full">
                        <div class="text-[#617589] flex border-none bg-[#f0f2f4] dark:bg-gray-800 items-center justify-center pl-4 rounded-l-lg"
                            data-icon="MagnifyingGlass">
                            <span class="material-symbols-outlined">search</span>
                        </div>
                        <input
                            class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#111418] dark:text-white focus:outline-0 focus:ring-0 border-none bg-[#f0f2f4] dark:bg-gray-800 focus:border-none h-full placeholder:text-[#617589] px-4 rounded-l-none border-l-0 pl-2 text-base font-normal"
                            placeholder="Search aspirations..." value="" />
                    </div>
                </label>
            </div>
            <div class="flex flex-1 justify-end gap-8">
                <div class="flex gap-2">
                    <button
                        class="flex max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 bg-[#f0f2f4] dark:bg-gray-800 text-[#111418] dark:text-white gap-2 text-sm font-bold min-w-0 px-2.5">
                        <span class="material-symbols-outlined">notifications</span>
                    </button>
                    <button
                        class="flex max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 bg-[#f0f2f4] dark:bg-gray-800 text-[#111418] dark:text-white gap-2 text-sm font-bold min-w-0 px-2.5">
                        <span class="material-symbols-outlined">settings</span>
                    </button>
                </div>
                <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10 border-2 border-primary"
                    data-alt="User avatar placeholder"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA1UZZM93Vj8jQ6teMY_D7_jVAEUfwNiSe2LHXsutt-ASS2BKle0Q_WHJxrhXfz0NsxRyezz3xwhQQZk8U4yrygFIq6xR6v32eKIIv96hUH9x3riLsQPmDnxK_WkLI6TV0eIVYwL-LhCWAiLl3_lvYwI2Ky6n1m42ph2Wd50PsOxVt12yVPoft8dwegg9Rji_hY50UekihTSRn4vUDy7HwoKgs0tm0gZU-ze4bf5C60zRPuBpJEMWVGveLHBSvtN1tMx_3GMVBvUSA");'>
                </div>
            </div>
        </header>
        <div class="flex flex-1">
            <!-- SideNavBar -->
            <aside
                class="w-64 border-r border-[#f0f2f4] dark:border-gray-800 bg-white dark:bg-background-dark p-4 hidden lg:flex flex-col gap-4">
                <div class="flex flex-col mb-4">
                    <h1 class="text-[#111418] dark:text-white text-base font-medium leading-normal">Aspiration Manager
                    </h1>
                    <p class="text-[#617589] text-sm font-normal leading-normal">Education Admin</p>
                </div>
                <nav class="flex flex-col gap-2">
                    <div
                        class="flex items-center gap-3 px-3 py-2 rounded-lg cursor-pointer hover:bg-background-light dark:hover:bg-gray-800">
                        <span class="material-symbols-outlined text-[#111418] dark:text-white">dashboard</span>
                        <p class="text-[#111418] dark:text-white text-sm font-medium">Overview</p>
                    </div>
                    <div class="flex items-center gap-3 px-3 py-2 rounded-lg bg-primary/10 text-primary">
                        <span class="material-symbols-outlined">assignment_turned_in</span>
                        <p class="text-sm font-medium">Student Aspirations</p>
                    </div>
                    <div
                        class="flex items-center gap-3 px-3 py-2 rounded-lg cursor-pointer hover:bg-background-light dark:hover:bg-gray-800">
                        <span class="material-symbols-outlined text-[#111418] dark:text-white">group</span>
                        <p class="text-[#111418] dark:text-white text-sm font-medium">Users</p>
                    </div>
                    <div
                        class="flex items-center gap-3 px-3 py-2 rounded-lg cursor-pointer hover:bg-background-light dark:hover:bg-gray-800">
                        <span class="material-symbols-outlined text-[#111418] dark:text-white">bar_chart</span>
                        <p class="text-[#111418] dark:text-white text-sm font-medium">Reports</p>
                    </div>
                </nav>
            </aside>
            <!-- Main Content Area -->
            <main class="flex-1 overflow-y-auto p-8">
                <!-- Breadcrumbs -->
                <nav class="flex flex-wrap gap-2 mb-4">
                    <a class="text-[#617589] text-sm font-medium hover:text-primary transition-colors"
                        href="#">Dashboard</a>
                    <span class="text-[#617589] text-sm font-medium">/</span>
                    <a class="text-[#617589] text-sm font-medium hover:text-primary transition-colors"
                        href="#">Aspirations</a>
                    <span class="text-[#617589] text-sm font-medium">/</span>
                    <span class="text-primary text-sm font-medium">Update Progress</span>
                </nav>
                <!-- PageHeading -->
                <div class="flex flex-wrap justify-between gap-3 mb-6">
                    <div class="flex min-w-72 flex-col gap-2">
                        <p class="text-[#111418] dark:text-white text-4xl font-black leading-tight tracking-[-0.033em]">
                            Update Aspiration Progress</p>
                        <p class="text-[#617589] text-base font-normal leading-normal">Manage and provide feedback for
                            student submissions.</p>
                    </div>
                </div>
                <!-- Content Grid: Form and Timeline -->
                <div class="grid grid-cols-1 xl:grid-cols-3 gap-8">
                    <!-- Left Column: Update Form -->
                    <div class="xl:col-span-2 space-y-6">
                        <!-- ProfileHeader Card -->
                        <div
                            class="bg-white dark:bg-gray-800 p-6 rounded-xl border border-[#f0f2f4] dark:border-gray-700 shadow-sm">
                            <div class="flex items-center gap-6">
                                <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-xl size-24 border border-gray-100 dark:border-gray-600"
                                    data-alt="Student profile picture"
                                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuADuFw3BVxK-Lpjio4dxPE_EW_EWI5dyQQyvUF0N3hPb5AigMAy08wchtwy5WgubkBy3blJcrB5aGy8yl5FYngjxVJFIXjeo0cqUP5JdFk-Tv_O_Cqva4Wymn3bvhgNUVtAOGrUpGVqihia3wipzW2UgBBLtRVSsUugTfEzM09IeO-pYUqjP8elby20hdne4sq9sAivALufosUUG2YbtCqtwViq5pRL7GHiAZEwU_h8DmvC8g_2u66MGVgQ4o1n_WK7HEBgtruEHVc");'>
                                </div>
                                <div class="flex flex-col justify-center">
                                    <p class="text-[#111418] dark:text-white text-2xl font-bold leading-tight">Budi
                                        Santoso</p>
                                    <div class="flex items-center gap-2 mt-1">
                                        <span
                                            class="material-symbols-outlined text-sm text-[#617589]">calendar_today</span>
                                        <p class="text-[#617589] text-sm font-normal">Submitted on 12 Oct 2023</p>
                                    </div>
                                    <div class="flex items-center gap-2 mt-1">
                                        <span class="material-symbols-outlined text-sm text-[#617589]">tag</span>
                                        <p class="text-[#617589] text-sm font-normal">ID: ASP-8821</p>
                                    </div>
                                </div>
                                <div class="ml-auto flex flex-col items-end">
                                    <span
                                        class="px-3 py-1 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-400 text-xs font-bold rounded-full uppercase tracking-wider">Currently:
                                        Proses</span>
                                </div>
                            </div>
                        </div>
                        <!-- Form Section -->
                        <div
                            class="bg-white dark:bg-gray-800 p-8 rounded-xl border border-[#f0f2f4] dark:border-gray-700 shadow-sm space-y-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label class="text-sm font-semibold text-[#111418] dark:text-white">Status
                                        Update</label>
                                    <select
                                        class="w-full h-11 px-4 rounded-lg bg-[#f0f2f4] dark:bg-gray-900 border-none focus:ring-2 focus:ring-primary text-sm">
                                        <option value="menunggu">Menunggu</option>
                                        <option selected="" value="proses">Proses</option>
                                        <option value="selesai">Selesai</option>
                                    </select>
                                </div>
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-semibold text-[#111418] dark:text-white">Feedback /
                                    Description</label>
                                <div class="rounded-lg border border-[#f0f2f4] dark:border-gray-700 overflow-hidden">
                                    <div
                                        class="bg-[#f0f2f4] dark:bg-gray-900 px-4 py-2 border-b border-[#f0f2f4] dark:border-gray-700 flex gap-4">
                                        <span
                                            class="material-symbols-outlined cursor-pointer text-gray-600 dark:text-gray-400 hover:text-primary">format_bold</span>
                                        <span
                                            class="material-symbols-outlined cursor-pointer text-gray-600 dark:text-gray-400 hover:text-primary">format_italic</span>
                                        <span
                                            class="material-symbols-outlined cursor-pointer text-gray-600 dark:text-gray-400 hover:text-primary">format_list_bulleted</span>
                                        <span
                                            class="material-symbols-outlined cursor-pointer text-gray-600 dark:text-gray-400 hover:text-primary">link</span>
                                    </div>
                                    <textarea class="w-full p-4 bg-white dark:bg-gray-800 border-none focus:ring-0 text-sm"
                                        placeholder="Provide a detailed update for the student..." rows="6"></textarea>
                                </div>
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-semibold text-[#111418] dark:text-white">Progress
                                    Photo</label>
                                <div
                                    class="border-2 border-dashed border-[#f0f2f4] dark:border-gray-700 rounded-xl p-8 flex flex-col items-center justify-center bg-[#f0f2f4]/30 dark:bg-gray-900/30 hover:bg-[#f0f2f4]/50 transition-colors cursor-pointer group">
                                    <span
                                        class="material-symbols-outlined text-4xl text-[#617589] group-hover:text-primary mb-3">cloud_upload</span>
                                    <p class="text-[#111418] dark:text-white font-medium">Drag &amp; drop image here
                                    </p>
                                    <p class="text-[#617589] text-sm">or click to browse from computer</p>
                                    <p class="text-xs text-[#617589] mt-2">Maximum file size: 5MB (JPG, PNG)</p>
                                </div>
                            </div>
                            <div class="flex justify-end gap-3 pt-4 border-t border-[#f0f2f4] dark:border-gray-700">
                                <button
                                    class="px-6 py-2.5 rounded-lg font-bold text-sm bg-[#f0f2f4] dark:bg-gray-700 text-[#111418] dark:text-white hover:bg-gray-200 dark:hover:bg-gray-600 transition-colors">Cancel</button>
                                <button
                                    class="px-8 py-2.5 rounded-lg font-bold text-sm bg-primary text-white shadow-lg shadow-primary/20 hover:bg-primary/90 transition-colors">Save
                                    Changes</button>
                            </div>
                        </div>
                    </div>
                    <!-- Right Column: Progress History -->
                    <div class="xl:col-span-1">
                        <div
                            class="bg-white dark:bg-gray-800 p-6 rounded-xl border border-[#f0f2f4] dark:border-gray-700 shadow-sm h-full">
                            <h3 class="text-lg font-bold mb-6 flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary">history</span>
                                Progress History
                            </h3>
                            <div
                                class="relative space-y-8 before:absolute before:inset-0 before:ml-4 before:-translate-x-px before:h-full before:w-0.5 before:bg-gradient-to-b before:from-primary before:via-gray-200 before:to-gray-200 dark:before:via-gray-700 dark:before:to-gray-700">
                                <!-- History Item 1 -->
                                <div class="relative pl-10">
                                    <div
                                        class="absolute left-0 top-1 size-8 rounded-full bg-primary flex items-center justify-center text-white ring-4 ring-white dark:ring-gray-800">
                                        <span class="material-symbols-outlined text-sm">check_circle</span>
                                    </div>
                                    <div class="flex flex-col gap-1">
                                        <div class="flex justify-between items-center">
                                            <p class="text-sm font-bold text-[#111418] dark:text-white">Status updated
                                                to 'Proses'</p>
                                            <span class="text-[10px] text-[#617589] font-medium uppercase">Today</span>
                                        </div>
                                        <p class="text-xs text-[#617589]">by Admin Sarah Miller</p>
                                        <div
                                            class="mt-2 p-3 bg-background-light dark:bg-gray-900 rounded-lg text-sm text-[#617589]">
                                            Initiated the technical review for the proposed library expansion program.
                                        </div>
                                    </div>
                                </div>
                                <!-- History Item 2 -->
                                <div class="relative pl-10">
                                    <div
                                        class="absolute left-0 top-1 size-8 rounded-full bg-[#617589] flex items-center justify-center text-white ring-4 ring-white dark:ring-gray-800">
                                        <span class="material-symbols-outlined text-sm">update</span>
                                    </div>
                                    <div class="flex flex-col gap-1">
                                        <div class="flex justify-between items-center">
                                            <p class="text-sm font-bold text-[#111418] dark:text-white">Initial Review
                                            </p>
                                            <span class="text-[10px] text-[#617589] font-medium uppercase">14
                                                Oct</span>
                                        </div>
                                        <p class="text-xs text-[#617589]">by System Automator</p>
                                        <div
                                            class="mt-2 p-3 bg-background-light dark:bg-gray-900 rounded-lg text-sm text-[#617589]">
                                            The application has been verified and queued for the education department
                                            review.
                                        </div>
                                    </div>
                                </div>
                                <!-- History Item 3 -->
                                <div class="relative pl-10">
                                    <div
                                        class="absolute left-0 top-1 size-8 rounded-full bg-[#f0f2f4] dark:bg-gray-700 flex items-center justify-center text-primary ring-4 ring-white dark:ring-gray-800">
                                        <span class="material-symbols-outlined text-sm">add_task</span>
                                    </div>
                                    <div class="flex flex-col gap-1">
                                        <div class="flex justify-between items-center">
                                            <p class="text-sm font-bold text-[#111418] dark:text-white">Aspiration
                                                Submitted</p>
                                            <span class="text-[10px] text-[#617589] font-medium uppercase">12
                                                Oct</span>
                                        </div>
                                        <p class="text-xs text-[#617589]">by Budi Santoso</p>
                                        <div
                                            class="mt-2 rounded-lg overflow-hidden border border-gray-100 dark:border-gray-700">
                                            <div class="h-32 bg-center bg-cover"
                                                data-alt="Initial submission document"
                                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCQR7olHPn-sMgLeCim1GF6y5oevdMC4gPz2-yJxL3UIXqKOlh0PbFug_j5wTz8LQabw05VQctO4fpAVLy_A1yUNVR8KgyPQqyZp9tkcTX2pAGt8uEe2J-WCw7pZQG5fcDzE5TNH8OHD4rg10CM5eqHD6UqWO2Kwg4j3hnZcg6Vy4n4pPF9YuWqZD3rE30Cc8SZ0gp6zm-NaEc2BJUSKB6YKaEEPdX3sEYYU0o1UvLWxiqPUbQq02nXH_Gb0tNNJ0iu4iSf_1wmoWs");'>
                                            </div>
                                            <div
                                                class="p-2 bg-white dark:bg-gray-800 flex items-center justify-between">
                                                <span class="text-xs text-[#617589] truncate">proposal_final.pdf</span>
                                                <span
                                                    class="material-symbols-outlined text-sm text-primary">download</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html> --}}


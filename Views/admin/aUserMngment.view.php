<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Admin Users Management</title>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&amp;family=Noto+Sans:wght@400;500;700&amp;display=swap" rel="stylesheet"/>
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<!-- Theme Configuration -->
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#b9857e",
                        "background-light": "#f7f7f6",
                        "background-dark": "#1c1716",
                        "text-main": "#585453",
                        "text-dark": "#161313",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"],
                        "body": ["Noto Sans", "sans-serif"],
                    },
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "2xl": "1rem", "full": "9999px"},
                },
            },
        }
    </script>
<style>
        /* Custom scrollbar for cleaner look */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }
        ::-webkit-scrollbar-track {
            background: transparent;
        }
        ::-webkit-scrollbar-thumb {
            background: #e5e7eb;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #d1d5db;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .icon-fill {
            font-variation-settings: 'FILL' 1, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-text-main font-display antialiased overflow-hidden">
<div class="flex h-screen w-full">
<!-- SideNavBar -->
<aside class="w-64 flex-shrink-0 flex flex-col border-r border-border-light dark:border-border-dark bg-surface-light dark:bg-surface-dark transition-colors duration-200">
<div class="h-full flex flex-col justify-between p-4">
<div class="flex flex-col gap-6">
<!-- Brand/Profile -->
<div class="flex items-center gap-3 px-2">
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10 ring-2 ring-primary/20" data-alt="Profile picture of the admin user" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBxqzunylhYYuSVy-NAxAvqfxzNZsSWe1n6rMBF0d9LNC888i0xL11j9ReWnQW026riES0ZBJNlAehVlVoBAm5aOa5id0lYM9SION5Ihh3hfK1geyWxho93upxo6kRIRbR0KPO1CMwi6sI4gqLBkQ9ULujMyeGBraxwApa9O7SMx-c1_rbphC8Fj3vUbelPOYkRcsaqi7dbkUR2GKT7_g-t8youdkQemLQ78sUMPTxiUi25SnLqYShOiiIU2q08FU4F3qC3gCFAskk");'>
</div>
<div class="flex flex-col">
<h1 class="text-text-main dark:text-white text-base font-bold leading-tight">Admin Portal</h1>
<p class="text-text-muted text-xs font-normal">Management Console</p>
</div>
</div>
<!-- Navigation Links -->
<nav class="flex flex-col gap-1">
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-background-light dark:hover:bg-background-dark/50 transition-colors group" href="/Views/admin/aHome.view.php">
<span class="material-symbols-outlined text-text-muted group-hover:text-primary transition-colors">grid_view</span>
<span class="text-text-main dark:text-gray-300 text-sm font-medium group-hover:text-primary transition-colors">Dashboard</span>
</a>
<!-- Active Link -->
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-primary/10 dark:bg-primary/20 text-primary" href="/Views/admin/aRentalManagement.view.php">
<span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">holiday_village</span>
<span class="text-sm font-bold">Rentals</span>
</a>
<!-- Active State -->
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-primary/10 text-primary dark:text-primary dark:bg-primary/20" href="/Views/admin/aResManagement.view.php">
<span class="material-symbols-outlined font-variation-settings-fill">calendar_month</span>
<p class="text-sm font-bold leading-normal">Reservations</p>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-background-light dark:hover:bg-background-dark/50 transition-colors group" href="/Views/admin/aUserMngment.view.php">
<span class="material-symbols-outlined text-text-muted group-hover:text-primary transition-colors">group</span>
<span class="text-text-main dark:text-gray-300 text-sm font-medium group-hover:text-primary transition-colors">Users</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-background-light dark:hover:bg-background-dark/50 transition-colors group" href="#">
<span class="material-symbols-outlined text-text-muted group-hover:text-primary transition-colors">settings</span>
<span class="text-text-main dark:text-gray-300 text-sm font-medium group-hover:text-primary transition-colors">Settings</span>
</a>
</nav>
</div>
<!-- Bottom Actions -->
<div class="flex flex-col gap-2 border-t border-border-light dark:border-border-dark pt-4">
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-red-50 dark:hover:bg-red-900/10 transition-colors group" href="#">
<span class="material-symbols-outlined text-text-muted group-hover:text-red-500 transition-colors">logout</span>
<span class="text-text-main dark:text-gray-300 text-sm font-medium group-hover:text-red-500 transition-colors">Log Out</span>
</a>
</div>
</div>
</aside>
<!-- Main Content -->
<main class="flex-1 flex flex-col h-full overflow-hidden relative">
<!-- Mobile Header -->
<header class="md:hidden flex items-center justify-between p-4 bg-white dark:bg-[#252020] border-b border-gray-100">
<div class="flex items-center gap-2">
<div class="bg-primary/20 rounded-full size-8 flex items-center justify-center text-primary font-bold">A</div>
<span class="font-bold text-text-dark">Admin</span>
</div>
<button class="text-text-main">
<span class="material-symbols-outlined">menu</span>
</button>
</header>
<div class="flex-1 overflow-y-auto p-4 md:p-8 lg:px-12">
<div class="max-w-[1200px] mx-auto flex flex-col gap-6">
<!-- Breadcrumbs -->
<div class="flex items-center gap-2 text-sm">
<a class="text-gray-400 hover:text-primary transition-colors" href="#">Admin</a>
<span class="text-gray-300">/</span>
<span class="text-text-dark dark:text-white font-medium">Users</span>
</div>
<!-- Page Heading & Action -->
<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
<div>
<h2 class="text-text-dark dark:text-white text-3xl font-black tracking-tight">User Management</h2>
<p class="text-text-main/80 text-sm mt-1">Manage access, roles, and user details.</p>
</div>
</div>
<!-- Stats Cards -->
<div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
<div class="bg-white dark:bg-[#252020] p-5 rounded-xl border border-gray-100 dark:border-[#333] shadow-sm flex flex-col gap-1">
<div class="flex justify-between items-start">
<p class="text-text-main/70 text-sm font-medium">Total Users</p>
<span class="material-symbols-outlined text-primary/40">group</span>
</div>
<div class="flex items-baseline gap-2">
<p class="text-text-dark dark:text-white text-2xl font-bold">1,248</p>
<span class="text-green-600 text-xs font-bold bg-green-50 px-1.5 py-0.5 rounded-full">+5%</span>
</div>
</div>
<div class="bg-white dark:bg-[#252020] p-5 rounded-xl border border-gray-100 dark:border-[#333] shadow-sm flex flex-col gap-1">
<div class="flex justify-between items-start">
<p class="text-text-main/70 text-sm font-medium">Active Hosts</p>
<span class="material-symbols-outlined text-primary/40">cottage</span>
</div>
<div class="flex items-baseline gap-2">
<p class="text-text-dark dark:text-white text-2xl font-bold">450</p>
<span class="text-green-600 text-xs font-bold bg-green-50 px-1.5 py-0.5 rounded-full">+12%</span>
</div>
</div>
<div class="bg-white dark:bg-[#252020] p-5 rounded-xl border border-gray-100 dark:border-[#333] shadow-sm flex flex-col gap-1">
<div class="flex justify-between items-start">
<p class="text-text-main/70 text-sm font-medium">New Signups</p>
<span class="material-symbols-outlined text-primary/40">person_add</span>
</div>
<div class="flex items-baseline gap-2">
<p class="text-text-dark dark:text-white text-2xl font-bold">12</p>
<span class="text-text-main/60 text-xs font-medium">Today</span>
</div>
</div>
</div>
<!-- Search & Filters Toolbar -->
<div class="flex flex-col md:flex-row gap-3">
<!-- Search -->
<div class="flex-1 relative">
<div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
<span class="material-symbols-outlined text-gray-400">search</span>
</div>
<input class="block w-full pl-10 pr-3 py-2.5 border-none rounded-lg bg-white dark:bg-[#252020] text-text-dark dark:text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-primary/50 shadow-sm text-sm" placeholder="Search by name or email" type="text"/>
</div>
<!-- Filters -->
<div class="flex gap-3">
<div class="relative group/dropdown">
<button class="flex items-center justify-between w-32 md:w-40 px-3 py-2.5 bg-white dark:bg-[#252020] rounded-lg text-sm font-medium text-text-main dark:text-gray-300 shadow-sm hover:bg-gray-50 dark:hover:bg-[#2a2525] transition-colors">
<span>All Roles</span>
<span class="material-symbols-outlined text-gray-400 text-lg">expand_more</span>
</button>
</div>
<div class="relative group/dropdown">
<button class="flex items-center justify-between w-32 md:w-40 px-3 py-2.5 bg-white dark:bg-[#252020] rounded-lg text-sm font-medium text-text-main dark:text-gray-300 shadow-sm hover:bg-gray-50 dark:hover:bg-[#2a2525] transition-colors">
<span>Any Status</span>
<span class="material-symbols-outlined text-gray-400 text-lg">expand_more</span>
</button>
</div>
</div>
</div>
<!-- Users Table -->
<div class="bg-white dark:bg-[#252020] rounded-xl shadow-sm border border-gray-100 dark:border-[#333] overflow-hidden flex flex-col">
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-gray-50/50 dark:bg-white/5 border-b border-gray-100 dark:border-[#333]">
<th class="p-4 w-10">
<input class="rounded border-gray-300 text-primary focus:ring-primary/50 bg-white" type="checkbox"/>
</th>
<th class="p-4 text-xs font-semibold text-text-main/70 uppercase tracking-wider">User</th>
<th class="p-4 text-xs font-semibold text-text-main/70 uppercase tracking-wider">Role</th>
<th class="p-4 text-xs font-semibold text-text-main/70 uppercase tracking-wider">Status</th>
<th class="p-4 text-xs font-semibold text-text-main/70 uppercase tracking-wider hidden md:table-cell">Last Login</th>
<th class="p-4 text-xs font-semibold text-text-main/70 uppercase tracking-wider text-right">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-gray-100 dark:divide-[#333]">
<!-- Row 1 -->
<tr class="group hover:bg-primary/5 transition-colors">
<td class="p-4">
<input class="rounded border-gray-300 text-primary focus:ring-primary/50 bg-white" type="checkbox"/>
</td>
<td class="p-4">
<div class="flex items-center gap-3">
<img class="size-10 rounded-full object-cover ring-2 ring-white dark:ring-[#252020]" data-alt="Portrait of Sarah Wilson" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDvsdgUu0s0fjRMSeWtt9kzXAtVNdj-a9A82IvefDxsIkCJrrZHbZbetz7x8T_eKZN3q8EDRAiwzbN5PB6_ihn8_Y9Mg2GEQ8cLTKkh42uDbfpR5FK_DSsMN8hfhpepwhbM6OJ7Ly-uD2W3Me0a609NMBeM_lhNROs4K3M7Q9l1t4rlgEn_LY5mhTxc-9XS16GavmyzP41i_WdG8AXGLaMDIEw4TkEGTqYU4eSNFu0-tIe7R9yw50gbKfFJITkzV0rfqgYEBFNr1pY"/>
<div class="flex flex-col">
<span class="text-sm font-semibold text-text-dark dark:text-white">Sarah Wilson</span>
<span class="text-xs text-text-main/70">sarah.w@example.com</span>
</div>
</div>
</td>
<td class="p-4">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-purple-100 text-purple-800 dark:bg-purple-900/30 dark:text-purple-300">
                                                Host
                                            </span>
</td>
<td class="p-4">
<span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-300">
<span class="size-1.5 rounded-full bg-green-600"></span> Active
                                            </span>
</td>
<td class="p-4 text-sm text-text-main dark:text-gray-400 hidden md:table-cell">
                                            2 hours ago
                                        </td>
<td class="p-4 text-right">
<button class="text-gray-400 hover:text-text-dark dark:hover:text-white p-1 rounded-md hover:bg-gray-100 dark:hover:bg-white/10 transition-colors">
<span class="material-symbols-outlined">more_horiz</span>
</button>
</td>
</tr>
<!-- Row 2 -->
<tr class="group hover:bg-primary/5 transition-colors">
<td class="p-4">
<input class="rounded border-gray-300 text-primary focus:ring-primary/50 bg-white" type="checkbox"/>
</td>
<td class="p-4">
<div class="flex items-center gap-3">
<img class="size-10 rounded-full object-cover ring-2 ring-white dark:ring-[#252020]" data-alt="Portrait of Michael Brown" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCS7XnP8Dmylq0-YJ9_mokZNg5FaA2c4PgMBYVlGE4-zp6woJZIcAWIHjpK4OZoBjW_t34XcsANxU2epFapEAavxyks4LcBds-Uj3yOI3ufs1cH32PktdGdLvmTN9HdYRanAycg0UKbWbgMI2lye7gdTHU5Y_rqA8FPmwHtMqobQoCOKDtO56XgYbiXQUzl0Mz0amuYMnMq_ZLfcoQWcGTRKD6ZjMZe6EHxcFyIMm-1wd4q-3i-Pponq6cmEzNyFINtMUiWoeyT6yE"/>
<div class="flex flex-col">
<span class="text-sm font-semibold text-text-dark dark:text-white">Michael Brown</span>
<span class="text-xs text-text-main/70">m.brown92@gmail.com</span>
</div>
</div>
</td>
<td class="p-4">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800 dark:bg-blue-900/30 dark:text-blue-300">
                                                Guest
                                            </span>
</td>
<td class="p-4">
<span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-300">
<span class="size-1.5 rounded-full bg-green-600"></span> Active
                                            </span>
</td>
<td class="p-4 text-sm text-text-main dark:text-gray-400 hidden md:table-cell">
                                            Yesterday
                                        </td>
<td class="p-4 text-right">
<button class="text-gray-400 hover:text-text-dark dark:hover:text-white p-1 rounded-md hover:bg-gray-100 dark:hover:bg-white/10 transition-colors">
<span class="material-symbols-outlined">more_horiz</span>
</button>
</td>
</tr>
<!-- Row 3 -->
<tr class="group hover:bg-primary/5 transition-colors">
<td class="p-4">
<input class="rounded border-gray-300 text-primary focus:ring-primary/50 bg-white" type="checkbox"/>
</td>
<td class="p-4">
<div class="flex items-center gap-3">
<div class="size-10 rounded-full bg-primary/20 flex items-center justify-center text-primary font-bold text-sm">
                                                    JD
                                                </div>
<div class="flex flex-col">
<span class="text-sm font-semibold text-text-dark dark:text-white">James Doe</span>
<span class="text-xs text-text-main/70">james.doe@corp.net</span>
</div>
</div>
</td>
<td class="p-4">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800 dark:bg-gray-800 dark:text-gray-300">
                                                Guest
                                            </span>
</td>
<td class="p-4">
<span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-600 dark:bg-gray-800 dark:text-gray-400">
<span class="size-1.5 rounded-full bg-gray-400"></span> Inactive
                                            </span>
</td>
<td class="p-4 text-sm text-text-main dark:text-gray-400 hidden md:table-cell">
                                            Oct 24, 2023
                                        </td>
<td class="p-4 text-right">
<button class="text-gray-400 hover:text-text-dark dark:hover:text-white p-1 rounded-md hover:bg-gray-100 dark:hover:bg-white/10 transition-colors">
<span class="material-symbols-outlined">more_horiz</span>
</button>
</td>
</tr>
<!-- Row 4 -->
<tr class="group hover:bg-primary/5 transition-colors">
<td class="p-4">
<input class="rounded border-gray-300 text-primary focus:ring-primary/50 bg-white" type="checkbox"/>
</td>
<td class="p-4">
<div class="flex items-center gap-3">
<img class="size-10 rounded-full object-cover ring-2 ring-white dark:ring-[#252020]" data-alt="Portrait of Emily Chen" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD01Ix_1IuDsNDiwF7NnBv4lyF5CoUgO2DJgD5pjoHQt9CTTyJEbMPqwYgVHqgNRV10RKhl3Q5ufLXhlXbjk3wahLK8cAyakfBv4e6PUSXzreivHjfVuErR7aMlp-nfwVpOf4W8z0-5UzxfTzmHJ5UdC8ryOtFya0vV6zKKrLu1j1Bel709e6ijIGIKQp7wz7J4R4lD986hr_HJTdCq8JvtX6yMm_kodgLM25KktALojn4SsvQfe72ua59uO46xiDuRXZnRVSjwaAI"/>
<div class="flex flex-col">
<span class="text-sm font-semibold text-text-dark dark:text-white">Emily Chen</span>
<span class="text-xs text-text-main/70">emily.c@admin.co</span>
</div>
</div>
</td>
<td class="p-4">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-primary/10 text-primary dark:bg-primary/20 dark:text-primary-300">
                                                Admin
                                            </span>
</td>
<td class="p-4">
<span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-300">
<span class="size-1.5 rounded-full bg-green-600"></span> Active
                                            </span>
</td>
<td class="p-4 text-sm text-text-main dark:text-gray-400 hidden md:table-cell">
                                            Just now
                                        </td>
<td class="p-4 text-right">
<button class="text-gray-400 hover:text-text-dark dark:hover:text-white p-1 rounded-md hover:bg-gray-100 dark:hover:bg-white/10 transition-colors">
<span class="material-symbols-outlined">more_horiz</span>
</button>
</td>
</tr>
<!-- Row 5 -->
<tr class="group hover:bg-primary/5 transition-colors">
<td class="p-4">
<input class="rounded border-gray-300 text-primary focus:ring-primary/50 bg-white" type="checkbox"/>
</td>
<td class="p-4">
<div class="flex items-center gap-3">
<img class="size-10 rounded-full object-cover ring-2 ring-white dark:ring-[#252020]" data-alt="Portrait of David Kim" src="https://lh3.googleusercontent.com/aida-public/AB6AXuARmprYHvvXCvyfQ9PTS2IIf_o95WFKtLQinsl5lU4khhfFg9gIxTCI8kq5lLSngCLKlQ-XrbyfGbTCZXYE8D0z3k_FP4n8o8xTTNpVj7otZpLDShmjcTczW1xEHMP_V7jex6DyNOVAGVh9YZQvUvN0U_rWU0emXGObzoHo0xgzn0fZQXUKWcEbf4JSt9PNH9OFZWltxhnGTEw2gTV1ErZnOACzzQVQfN2wjtK60yy97zH002EgI8PVdWn0Q8zJK9lVhvfD7Evpfp0"/>
<div class="flex flex-col">
<span class="text-sm font-semibold text-text-dark dark:text-white">David Kim</span>
<span class="text-xs text-text-main/70">d.kim@hostmail.com</span>
</div>
</div>
</td>
<td class="p-4">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-purple-100 text-purple-800 dark:bg-purple-900/30 dark:text-purple-300">
                                                Host
                                            </span>
</td>
<td class="p-4">
<span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800 dark:bg-red-900/30 dark:text-red-300">
<span class="size-1.5 rounded-full bg-red-600"></span> Suspended
                                            </span>
</td>
<td class="p-4 text-sm text-text-main dark:text-gray-400 hidden md:table-cell">
                                            3 days ago
                                        </td>
<td class="p-4 text-right">
<button class="text-gray-400 hover:text-text-dark dark:hover:text-white p-1 rounded-md hover:bg-gray-100 dark:hover:bg-white/10 transition-colors">
<span class="material-symbols-outlined">more_horiz</span>
</button>
</td>
</tr>
</tbody>
</table>
</div>
<!-- Pagination -->
<div class="flex items-center justify-between p-4 border-t border-gray-100 dark:border-[#333]">
<p class="text-sm text-text-main dark:text-gray-400">
                                Showing <span class="font-semibold text-text-dark dark:text-white">1</span> to <span class="font-semibold text-text-dark dark:text-white">5</span> of <span class="font-semibold text-text-dark dark:text-white">1248</span> results
                            </p>
<div class="flex items-center gap-2">
<button class="px-3 py-1.5 rounded-lg border border-gray-200 dark:border-[#444] text-sm font-medium text-text-main dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-white/5 disabled:opacity-50 disabled:cursor-not-allowed" disabled="">
                                    Previous
                                </button>
<button class="px-3 py-1.5 rounded-lg border border-gray-200 dark:border-[#444] text-sm font-medium text-text-main dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-white/5">
                                    Next
                                </button>
</div>
</div>
</div>
</div>
<footer class="mt-12 mb-6 text-center text-xs text-gray-400">
                    © 2024 Admin Panel. All rights reserved.
                </footer>
</div>
</main>
</div>
</body></html>
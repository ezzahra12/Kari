<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Admin Reservations Management</title>
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<!-- Tailwind Config -->
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#b9857e",
                        "background-light": "#f7f7f6",
                        "background-dark": "#1c1716",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
                },
            },
        }
    </script>
<style>
        body {
            font-family: 'Inter', sans-serif;
        }
        /* Custom scrollbar for better aesthetics */
        ::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }
        ::-webkit-scrollbar-track {
            background: transparent;
        }
        ::-webkit-scrollbar-thumb {
            background: #d1d5db;
            border-radius: 3px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #9ca3af;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-[#585453] dark:text-gray-200 font-display overflow-hidden">
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
<!-- Main Content Area -->
<main class="flex-1 flex flex-col h-full overflow-hidden bg-background-light dark:bg-background-dark relative">
<!-- Mobile Header -->
<div class="lg:hidden flex items-center justify-between p-4 bg-white dark:bg-[#1c1716] border-b dark:border-gray-800">
<span class="material-symbols-outlined">menu</span>
<span class="font-bold text-lg">RentalAdmin</span>
<div class="size-8 rounded-full bg-gray-200"></div>
</div>
<!-- Scrollable Content -->
<div class="flex-1 overflow-y-auto p-4 md:p-8">
<div class="max-w-[1200px] mx-auto flex flex-col gap-8">
<!-- Page Heading & Actions -->
<div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
<div class="flex flex-col gap-2">
<h1 class="text-[#161313] dark:text-white text-3xl md:text-4xl font-black leading-tight tracking-tight">Reservations Management</h1>
<p class="text-[#7c706e] dark:text-gray-400 text-base font-normal">Manage and oversee all current booking requests and active reservations.</p>
</div>
<button class="bg-primary hover:bg-primary/90 text-white px-5 py-2.5 rounded-lg text-sm font-medium shadow-sm transition-colors flex items-center gap-2 self-start md:self-auto">
<span class="material-symbols-outlined text-[20px]">download</span>
                            Export Data
                        </button>
</div>
<!-- Stats Cards -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-4">
<div class="flex flex-col gap-1 rounded-xl p-6 bg-white dark:bg-[#252020] border border-[#e2dfdf] dark:border-gray-700 shadow-sm">
<div class="flex justify-between items-start">
<p class="text-[#7c706e] dark:text-gray-400 text-sm font-medium uppercase tracking-wider">Total Bookings</p>
<span class="material-symbols-outlined text-primary bg-primary/10 p-1.5 rounded-md">book_online</span>
</div>
<div class="flex items-baseline gap-2 mt-2">
<p class="text-[#161313] dark:text-white text-3xl font-bold">1,245</p>
<p class="text-[#078809] text-sm font-medium flex items-center">
<span class="material-symbols-outlined text-[16px]">arrow_upward</span> 12%
                                </p>
</div>
</div>
<div class="flex flex-col gap-1 rounded-xl p-6 bg-white dark:bg-[#252020] border border-[#e2dfdf] dark:border-gray-700 shadow-sm">
<div class="flex justify-between items-start">
<p class="text-[#7c706e] dark:text-gray-400 text-sm font-medium uppercase tracking-wider">Pending Approval</p>
<span class="material-symbols-outlined text-orange-500 bg-orange-50 p-1.5 rounded-md">pending</span>
</div>
<div class="flex items-baseline gap-2 mt-2">
<p class="text-[#161313] dark:text-white text-3xl font-bold">42</p>
<p class="text-[#078809] text-sm font-medium flex items-center">
<span class="material-symbols-outlined text-[16px]">arrow_upward</span> 5%
                                </p>
</div>
</div>
<div class="flex flex-col gap-1 rounded-xl p-6 bg-white dark:bg-[#252020] border border-[#e2dfdf] dark:border-gray-700 shadow-sm">
<div class="flex justify-between items-start">
<p class="text-[#7c706e] dark:text-gray-400 text-sm font-medium uppercase tracking-wider">Total Revenue</p>
<span class="material-symbols-outlined text-green-600 bg-green-50 p-1.5 rounded-md">attach_money</span>
</div>
<div class="flex items-baseline gap-2 mt-2">
<p class="text-[#161313] dark:text-white text-3xl font-bold">$342.5k</p>
<p class="text-[#078809] text-sm font-medium flex items-center">
<span class="material-symbols-outlined text-[16px]">arrow_upward</span> 18%
                                </p>
</div>
</div>
</div>
<!-- Search and Filters Bar -->
<div class="flex flex-col lg:flex-row gap-4 bg-white dark:bg-[#252020] p-4 rounded-xl border border-[#e2dfdf] dark:border-gray-700 shadow-sm items-center">
<!-- Search -->
<div class="w-full lg:w-96">
<label class="flex w-full items-center rounded-lg bg-background-light dark:bg-[#1c1716] border border-transparent focus-within:border-primary/50 transition-colors px-3 h-10">
<span class="material-symbols-outlined text-[#7c706e]">search</span>
<input class="w-full bg-transparent border-none focus:ring-0 text-sm text-[#161313] dark:text-white placeholder:text-[#7c706e] ml-2" placeholder="Search by ID, Guest, or Property..."/>
</label>
</div>
<!-- Separator for Desktop -->
<div class="hidden lg:block w-px h-8 bg-gray-200 dark:bg-gray-700 mx-2"></div>
<!-- Filters -->
<div class="flex flex-wrap gap-2 w-full lg:w-auto">
<button class="flex h-9 items-center justify-center gap-x-2 rounded-lg border border-[#e2dfdf] dark:border-gray-700 bg-white dark:bg-[#252020] hover:bg-background-light dark:hover:bg-gray-800 px-3 transition-colors">
<span class="text-[#161313] dark:text-gray-200 text-sm font-medium">Date Range</span>
<span class="material-symbols-outlined text-[#7c706e] text-[20px]">calendar_today</span>
</button>
<button class="flex h-9 items-center justify-center gap-x-2 rounded-lg border border-[#e2dfdf] dark:border-gray-700 bg-white dark:bg-[#252020] hover:bg-background-light dark:hover:bg-gray-800 px-3 transition-colors">
<span class="text-[#161313] dark:text-gray-200 text-sm font-medium">Status: All</span>
<span class="material-symbols-outlined text-[#7c706e] text-[20px]">expand_more</span>
</button>
<button class="flex h-9 items-center justify-center gap-x-2 rounded-lg border border-[#e2dfdf] dark:border-gray-700 bg-white dark:bg-[#252020] hover:bg-background-light dark:hover:bg-gray-800 px-3 transition-colors">
<span class="text-[#161313] dark:text-gray-200 text-sm font-medium">Type</span>
<span class="material-symbols-outlined text-[#7c706e] text-[20px]">expand_more</span>
</button>
</div>
</div>
<!-- Main Table -->
<div class="bg-white dark:bg-[#252020] border border-[#e2dfdf] dark:border-gray-700 rounded-xl shadow-sm overflow-hidden flex flex-col">
<div class="overflow-x-auto">
<table class="w-full min-w-[800px] text-left border-collapse">
<thead class="bg-background-light dark:bg-[#1c1716] border-b border-[#e2dfdf] dark:border-gray-700">
<tr>
<th class="p-4 w-14 text-center">
<input class="rounded border-gray-300 text-primary focus:ring-primary/20 size-4" type="checkbox"/>
</th>
<th class="p-4 text-xs font-semibold text-[#7c706e] uppercase tracking-wider">Booking ID</th>
<th class="p-4 text-xs font-semibold text-[#7c706e] uppercase tracking-wider">Guest</th>
<th class="p-4 text-xs font-semibold text-[#7c706e] uppercase tracking-wider">Property</th>
<th class="p-4 text-xs font-semibold text-[#7c706e] uppercase tracking-wider">Dates</th>
<th class="p-4 text-xs font-semibold text-[#7c706e] uppercase tracking-wider">Status</th>
<th class="p-4 text-xs font-semibold text-[#7c706e] uppercase tracking-wider text-right">Total</th>
<th class="p-4 text-xs font-semibold text-[#7c706e] uppercase tracking-wider text-center">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-[#e2dfdf] dark:divide-gray-700">
<!-- Row 1 -->
<tr class="group hover:bg-background-light dark:hover:bg-gray-800/50 transition-colors">
<td class="p-4 text-center">
<input class="rounded border-gray-300 text-primary focus:ring-primary/20 size-4" type="checkbox"/>
</td>
<td class="p-4 text-sm font-medium text-[#161313] dark:text-gray-200">#RES-2931</td>
<td class="p-4">
<div class="flex items-center gap-3">
<div class="size-8 rounded-full bg-gray-200 bg-cover bg-center" data-alt="Portrait of Sarah Miller" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAu4h4EVtDQIlSBtI9YCsqUg74AG3OEvXMmyrSxBCpxKsY1OQOgy2wbVwxbjtJ1IUxfOmdidAeqh0QGVjvUqkVK-eWNJW2hmPVSdoZXS7r85XDb7qN8nRDbCNqHDLNfZ0MEFVCrP9aHZolTFi2E_LqP9gCF5rr5Ax6VRMGBFvFSn1KQnMkvMeymNgQBOo99WkyffWaDXJ8B9PNH5KOLavBqRAHgdfX-yN5M1ZthTuvwCGoYNRb9V7TCzt_avi-FkXkl5B0J7sMa0Uc')"></div>
<div class="flex flex-col">
<span class="text-sm font-medium text-[#161313] dark:text-gray-200">Sarah Miller</span>
<span class="text-xs text-[#7c706e]">New Guest</span>
</div>
</div>
</td>
<td class="p-4">
<div class="flex items-center gap-3">
<div class="size-10 rounded-lg bg-gray-200 bg-cover bg-center shrink-0" data-alt="Thumbnail of modern apartment interior" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBu1BlTexpWwH_jXqZd_iYc5BAM7iV8FqWSfpXkmJnyoNQPaupRb-LunTUh6St5vMxGrSS8qF7vEoXDsviJrHIDALAoDFG5RwyG-mzg0Rq21BSBkLHnp0QRQwnOkkfQ0rmuTjEYqicRuSl0dv6dWN01kdgv_q4CYeC2Nr0U9EChAF16CameVBO9OAmTousNbUKCNZ4la1Fy9LccM1PWeWCOvmULWUtSlpSrJD8aERmWs_ynqZi64zyUAKjdblica-5J5Bnhn2gkklk')"></div>
<span class="text-sm text-[#161313] dark:text-gray-200 font-medium truncate max-w-[150px]">Modern Loft Downtown</span>
</div>
</td>
<td class="p-4 text-sm text-[#585453] dark:text-gray-400">
                                            Oct 12 - 15, 2023
                                        </td>
<td class="p-4">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-400 border border-green-200 dark:border-green-800">
                                                Confirmed
                                            </span>
</td>
<td class="p-4 text-sm font-medium text-[#161313] dark:text-gray-200 text-right">$450.00</td>
<td class="p-4 text-center">
<button class="text-red-500 hover:text-red-700 hover:bg-red-50 dark:hover:bg-red-900/20 p-2 rounded-lg transition-colors" title="Cancel Reservation">
<span class="material-symbols-outlined text-[20px]">cancel</span>
</button>
</td>
</tr>
<!-- Row 2 -->
<tr class="group hover:bg-background-light dark:hover:bg-gray-800/50 transition-colors">
<td class="p-4 text-center">
<input class="rounded border-gray-300 text-primary focus:ring-primary/20 size-4" type="checkbox"/>
</td>
<td class="p-4 text-sm font-medium text-[#161313] dark:text-gray-200">#RES-2932</td>
<td class="p-4">
<div class="flex items-center gap-3">
<div class="size-8 rounded-full bg-gray-200 bg-cover bg-center" data-alt="Portrait of Michael Chen" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDJ28c2IWdQJ5-R-2tq-NyukRDhB-lVYI3EkVOX2qTL_Lp1HBHZIOTlxaVPDlWfIhw24q-clxuKtpbGynNNJ4irC64pKkvmmYsMI9JgL2dS7Pth9ccjudz7vLdIQSvaFjrWyCcDHlV09QlLx5LPHLPDXXzsRsEup6M5WzfzTgwYQ_-_Z8JSoPqcTMBQVcpPC3rf_v4EOA235yuLCfdkIKL5Zj-JNBaAlXXIVfznlPbUM71yKUq57wrKdLy9ai7kYLZ3CCjeg_SHPN0')"></div>
<div class="flex flex-col">
<span class="text-sm font-medium text-[#161313] dark:text-gray-200">Michael Chen</span>
<span class="text-xs text-[#7c706e]">Superhost</span>
</div>
</div>
</td>
<td class="p-4">
<div class="flex items-center gap-3">
<div class="size-10 rounded-lg bg-gray-200 bg-cover bg-center shrink-0" data-alt="Thumbnail of cozy apartment" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDbkO4TarZRdt0nQt8dNIgrrkS7CNkKOCzvZzBUJ5WGJd93FqNQPKK5wTN-g1DfmSDCgCOHKvOwTk03NIh5F66-cnqi-gCGXv4m1ObwE3egYJOLs7d6buZIrR0ZEBmwnWtKFA80-yqCXSpBP0e-gsVTz3jt2RbeclomxMXAUYVTQtIafYqEe6WD4kd6htwAK6e5En_lu3POW0gISjaVRP_lwgVhaidsyPpWJ1iL53IN-p6XZ04T3u9ts2tY8GAQC3HSyYJ8xrYV21A')"></div>
<span class="text-sm text-[#161313] dark:text-gray-200 font-medium truncate max-w-[150px]">Cozy Studio Apt</span>
</div>
</td>
<td class="p-4 text-sm text-[#585453] dark:text-gray-400">
                                            Oct 18 - 20, 2023
                                        </td>
<td class="p-4">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800 dark:bg-yellow-900/30 dark:text-yellow-400 border border-yellow-200 dark:border-yellow-800">
                                                Pending
                                            </span>
</td>
<td class="p-4 text-sm font-medium text-[#161313] dark:text-gray-200 text-right">$210.00</td>
<td class="p-4 text-center">
<div class="flex items-center justify-center gap-2">
<button class="text-green-600 hover:text-green-800 hover:bg-green-50 dark:hover:bg-green-900/20 p-2 rounded-lg transition-colors" title="Approve">
<span class="material-symbols-outlined text-[20px]">check_circle</span>
</button>
<button class="text-red-500 hover:text-red-700 hover:bg-red-50 dark:hover:bg-red-900/20 p-2 rounded-lg transition-colors" title="Decline">
<span class="material-symbols-outlined text-[20px]">cancel</span>
</button>
</div>
</td>
</tr>
<!-- Row 3 -->
<tr class="group hover:bg-background-light dark:hover:bg-gray-800/50 transition-colors">
<td class="p-4 text-center">
<input class="rounded border-gray-300 text-primary focus:ring-primary/20 size-4" type="checkbox"/>
</td>
<td class="p-4 text-sm font-medium text-[#161313] dark:text-gray-200">#RES-2930</td>
<td class="p-4">
<div class="flex items-center gap-3">
<div class="size-8 rounded-full bg-gray-200 bg-cover bg-center" data-alt="Portrait of James Smith" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDSfnNCn57Z6iJHegFt9jUufnZ2nStSgU72pD8rM3gfCTE5o2LNvudJka1GlCYJ34FUG9jqVumNzSwjYY0uIfnP8yg6fNJ7naLgRoVweNF46UiFrcBA26Q010L7k_4yIyhxhn2cyJES3jv5O0gALQtsjPj1Wt8y-wXAxfsAk-2kTaqY5LCAyVapsghzUVn9pMnoylx2vOfM9Qk3G-fN5LkHBZLalPN7FKRDv1m8oAbhy8edqm6BRFYfmaPXdwDbnTQFxCkbwf4fS40')"></div>
<div class="flex flex-col">
<span class="text-sm font-medium text-[#161313] dark:text-gray-200">James Smith</span>
<span class="text-xs text-[#7c706e]">Returning</span>
</div>
</div>
</td>
<td class="p-4">
<div class="flex items-center gap-3">
<div class="size-10 rounded-lg bg-gray-200 bg-cover bg-center shrink-0" data-alt="Thumbnail of luxury villa" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDhEphaPtejlNxDOQ1Fgib6jVj1_qIr5XRM3lL2TSwgBV9ToybLqDIacBQi_FKaX_OPjD6LQP5ra2IaTs7oE5Z-Y58NJTPtlMQYtXrbLyKpOU-W_Mc6RE85UKzmQe_yuCxxEyMl8gHjJvtsHekLEUSYGO5N9eVk9LiWGxD7WXbSWJvOoWnePg8ECd_Oj7Ehix7HO5hSJkFUDA_PsjMJaRHeP99_1MNTffjdfDDnIfpvyShf2I9lS4G-kjX0sasGNtzbMHHNNaqMWv0')"></div>
<span class="text-sm text-[#161313] dark:text-gray-200 font-medium truncate max-w-[150px]">Seaside Villa</span>
</div>
</td>
<td class="p-4 text-sm text-[#585453] dark:text-gray-400">
                                            Oct 05 - 10, 2023
                                        </td>
<td class="p-4">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800 dark:bg-red-900/30 dark:text-red-400 border border-red-200 dark:border-red-800">
                                                Cancelled
                                            </span>
</td>
<td class="p-4 text-sm font-medium text-[#161313] dark:text-gray-200 text-right">$1,250.00</td>
<td class="p-4 text-center">
<button class="text-gray-400 hover:text-gray-600 hover:bg-gray-100 dark:hover:bg-gray-800 p-2 rounded-lg transition-colors" title="View Details">
<span class="material-symbols-outlined text-[20px]">visibility</span>
</button>
</td>
</tr>
<!-- Row 4 -->
<tr class="group hover:bg-background-light dark:hover:bg-gray-800/50 transition-colors">
<td class="p-4 text-center">
<input class="rounded border-gray-300 text-primary focus:ring-primary/20 size-4" type="checkbox"/>
</td>
<td class="p-4 text-sm font-medium text-[#161313] dark:text-gray-200">#RES-2928</td>
<td class="p-4">
<div class="flex items-center gap-3">
<div class="size-8 rounded-full bg-gray-200 bg-cover bg-center" data-alt="Portrait of Emily Davis" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuD6FD4gnts-IBIjqKiAgj_QsHIzHzW16FHmSHauV9FVemZNA51H2d8WE8HBHT8-kA4JQQIKRJVKWEqqCDyQVMK4EH72vfsL_v-QThOi3sF230x3Rnbk2WISaJD2j90t3D54pzFpqknem1065J-I1PTw7XRP0xRTEhpm-sqbYBra0a--UGlbBAcTsP-ps_6ANox0WncsqGXt8Mf_G0GefoSinSU1k0PaRtWAA1DIUYUIEe9aEg91nQaP9LzfirpCe46GF8T-dW0ybng')"></div>
<div class="flex flex-col">
<span class="text-sm font-medium text-[#161313] dark:text-gray-200">Emily Davis</span>
<span class="text-xs text-[#7c706e]">New Guest</span>
</div>
</div>
</td>
<td class="p-4">
<div class="flex items-center gap-3">
<div class="size-10 rounded-lg bg-gray-200 bg-cover bg-center shrink-0" data-alt="Thumbnail of urban flat" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAkkdEuzV5mXL_9L97NuA3bhnlkxJ8wg_XuUF_rxcJmG_y52E33FR2sHGJkJn8kFKxzbBbfyyXB48R8TXixj01iV41NtXCCOPrNFSx7slAhPZj25hz-3Ews9I78ThENeA9OUnMUfCsQqx01tfL4G-aThO77U7hKOM3DhXv24QE4pTMXNYFPa45AitKg73kXLu88W0bHT6svZbuNlTKrqFRQQT4yqsBzOavc16G9r1eF6Y2O1w5gaMA8MOBrzusrOGqPJa0kWq79Qvs')"></div>
<span class="text-sm text-[#161313] dark:text-gray-200 font-medium truncate max-w-[150px]">Urban Flat 2B</span>
</div>
</td>
<td class="p-4 text-sm text-[#585453] dark:text-gray-400">
                                            Nov 01 - 03, 2023
                                        </td>
<td class="p-4">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-400 border border-green-200 dark:border-green-800">
                                                Confirmed
                                            </span>
</td>
<td class="p-4 text-sm font-medium text-[#161313] dark:text-gray-200 text-right">$320.00</td>
<td class="p-4 text-center">
<button class="text-red-500 hover:text-red-700 hover:bg-red-50 dark:hover:bg-red-900/20 p-2 rounded-lg transition-colors" title="Cancel Reservation">
<span class="material-symbols-outlined text-[20px]">cancel</span>
</button>
</td>
</tr>
<!-- Row 5 -->
<tr class="group hover:bg-background-light dark:hover:bg-gray-800/50 transition-colors">
<td class="p-4 text-center">
<input class="rounded border-gray-300 text-primary focus:ring-primary/20 size-4" type="checkbox"/>
</td>
<td class="p-4 text-sm font-medium text-[#161313] dark:text-gray-200">#RES-2925</td>
<td class="p-4">
<div class="flex items-center gap-3">
<div class="size-8 rounded-full bg-gray-200 bg-cover bg-center" data-alt="Portrait of Marcus Johnson" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuA9A0LkOVlokNHmAeFUcpl7LGxGin1_WYEm12wJAcyAcD-nRbiUHGRCu61zXmzCsUfdUXVz1j3wA7fBvpCyuhfIDaeB7WZtRTcdiUzAan2N-grEO5F83370KhmV7k24u2JN08o6Llj0Iu3_oj5dmlem2FD5uNksFNIhKd3kvI2uImm3rq_cyiRWe7e0Bq6jYofBmuxhyWM7AfPuZwAjXVkFdStyIy_YY50S0RmMcIU9BfVHAFwGMYkq6B6QraCkf2r7fNZ7OiVaGFU')"></div>
<div class="flex flex-col">
<span class="text-sm font-medium text-[#161313] dark:text-gray-200">Marcus Johnson</span>
<span class="text-xs text-[#7c706e]">Returning</span>
</div>
</div>
</td>
<td class="p-4">
<div class="flex items-center gap-3">
<div class="size-10 rounded-lg bg-gray-200 bg-cover bg-center shrink-0" data-alt="Thumbnail of penthouse suite" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCkIqlbRfZVAvzsp7oNzjPb50ugEazYflcptzsM_59Ty_QkHEGoz9owTIJNuJAyDr8ksomrUI0o-b1nZhqu_2monnyW03rfDiYtMCRmkfp7OHA7yUC49aNmDEoFsNzPwaT2UHYQopfv6li9AUFsxbJjbE9mvYCyc3XMaSzIyh3Y3BuHPHKTO0_mnzqmCVZNrR8iwe33Uq8GGIuRi8JRaLteVFlZ-FnNn8Xu0_s80SCQeh5iyatMtTDG-_17NDBH1xzKb7QRWkgWLXU')"></div>
<span class="text-sm text-[#161313] dark:text-gray-200 font-medium truncate max-w-[150px]">City View Penthouse</span>
</div>
</td>
<td class="p-4 text-sm text-[#585453] dark:text-gray-400">
                                            Dec 10 - 20, 2023
                                        </td>
<td class="p-4">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800 dark:bg-blue-900/30 dark:text-blue-400 border border-blue-200 dark:border-blue-800">
                                                In Progress
                                            </span>
</td>
<td class="p-4 text-sm font-medium text-[#161313] dark:text-gray-200 text-right">$2,100.00</td>
<td class="p-4 text-center">
<button class="text-gray-400 hover:text-gray-600 hover:bg-gray-100 dark:hover:bg-gray-800 p-2 rounded-lg transition-colors" title="View Details">
<span class="material-symbols-outlined text-[20px]">visibility</span>
</button>
</td>
</tr>
</tbody>
</table>
</div>
<!-- Pagination -->
<div class="p-4 border-t border-[#e2dfdf] dark:border-gray-700 flex items-center justify-between bg-background-light/50 dark:bg-[#1c1716]/50">
<p class="text-sm text-[#7c706e] dark:text-gray-400">Showing <span class="font-medium text-[#161313] dark:text-gray-200">1-5</span> of <span class="font-medium text-[#161313] dark:text-gray-200">124</span></p>
<div class="flex gap-2">
<button class="px-3 py-1.5 border border-[#e2dfdf] dark:border-gray-700 rounded-lg text-sm text-[#7c706e] dark:text-gray-400 hover:bg-white dark:hover:bg-gray-700 disabled:opacity-50 disabled:cursor-not-allowed" disabled="">
                                    Previous
                                </button>
<button class="px-3 py-1.5 border border-[#e2dfdf] dark:border-gray-700 rounded-lg text-sm text-[#161313] dark:text-gray-200 hover:bg-white dark:hover:bg-gray-700 bg-white dark:bg-gray-800 shadow-sm">
                                    Next
                                </button>
</div>
</div>
</div>
</div>
</div>
</main>
</div>
</body></html>
<?php
require_once __DIR__ . '/../../Models/database.php';
require_once __DIR__ . '/../../models/Host.php';
session_start();
?>
<!DOCTYPE html>


<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Admin Rentals Management</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#b9857e",
                        "background-light": "#f7f7f6",
                        "background-dark": "#1c1716",
                        "surface-light": "#ffffff",
                        "surface-dark": "#2a2423",
                        "text-main": "#585453",
                        "text-muted": "#9ca3af",
                        "border-light": "#e5e7eb",
                        "border-dark": "#403a39",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"],
                        "sans": ["Inter", "sans-serif"],
                    },
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "2xl": "1rem", "full": "9999px"},
                },
            },
        }
    </script>
<style>
        body {
            font-family: 'Inter', sans-serif;
        }
        /* Custom scrollbar for better look in table */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }
        ::-webkit-scrollbar-track {
            background: transparent; 
        }
        ::-webkit-scrollbar-thumb {
            background: #d1d5db; 
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #9ca3af; 
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-text-main dark:text-gray-200 transition-colors duration-200">
<div class="flex h-screen w-full overflow-hidden">
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
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-background-light dark:hover:bg-background-dark/50 transition-colors group" href="/Views/host/hDashboard.view.php">
<span class="material-symbols-outlined text-text-muted group-hover:text-primary transition-colors">grid_view</span>
<span class="text-text-main dark:text-gray-300 text-sm font-medium group-hover:text-primary transition-colors">Dashboard</span>
</a>
<!-- Active Link -->
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-primary/10 dark:bg-primary/20 text-primary" href="/Views/host/Rentals.view.php">
<span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">holiday_village</span>
<span class="text-sm font-bold">Rentals</span>
</a>
<a class="sidebar-item group flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-[#f3f2f1] dark:hover:bg-[#3a3433] text-text-main dark:text-gray-300 transition-colors" href="/Views/host/hResevation.view.php">
<span class="material-symbols-outlined">calendar_month</span>
<p class="text-sm font-medium">Reservations</p>
</a>
<a class="sidebar-item group flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-[#f3f2f1] dark:hover:bg-[#3a3433] text-text-main dark:text-gray-300 transition-colors" href="/Views/host/hReview.view.php">
<span class="material-symbols-outlined">reviews</span>
<p class="text-sm font-medium">Reviews</p>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-background-light dark:hover:bg-background-dark/50 transition-colors group" href="#">
<span class="material-symbols-outlined text-text-muted group-hover:text-primary transition-colors">settings</span>
<span class="text-text-main dark:text-gray-300 text-sm font-medium group-hover:text-primary transition-colors">Settings</span>
</a>
</nav>
</div>
<!-- Bottom Actions -->
<div class="flex flex-col gap-2 border-t border-border-light dark:border-border-dark pt-4">
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-red-50 dark:hover:bg-red-900/10 transition-colors group" href="">
<span class="material-symbols-outlined text-text-muted group-hover:text-red-500 transition-colors">logout</span>
<span class="text-text-main dark:text-gray-300 text-sm font-medium group-hover:text-red-500 transition-colors">Log Out</span>
</a>
</div>
</div>
</aside>
<!-- Main Content -->
<main class="flex-1 flex flex-col h-full overflow-hidden relative">
<!-- Scrollable Content Area -->
<div class="flex-1 overflow-y-auto p-8">
<div class="max-w-7xl mx-auto flex flex-col gap-8">
<!-- Page Heading -->
<div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
<div class="flex flex-col gap-1">
<h1 class="text-3xl font-black text-text-main dark:text-white tracking-tight">Rentals Management</h1>
<p class="text-text-muted text-sm font-medium">Manage property listings, verify hosts, and oversee approvals.</p>
</div>
<div class="flex items-center gap-3">
<button class="flex items-center justify-center gap-2 h-10 px-5 bg-white dark:bg-surface-dark border border-border-light dark:border-border-dark rounded-lg text-text-main dark:text-gray-200 text-sm font-semibold shadow-sm hover:bg-gray-50 dark:hover:bg-neutral-800 transition-all">
<span class="material-symbols-outlined text-[20px]">file_download</span>
<span>Export</span>
</button>
<a href="/Views/host/createRental.view.php" class="flex items-center justify-center gap-2 h-10 px-5 bg-primary text-white rounded-lg text-sm font-semibold shadow-md shadow-primary/20 hover:bg-primary/90 transition-all transform active:scale-95">
<span class="material-symbols-outlined text-[20px]">add</span>
<span>Add New Rental</span>
 </a>
</div>
</div>
<!-- Stats Cards -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-4">
<div class="bg-surface-light dark:bg-surface-dark rounded-xl p-6 border border-border-light dark:border-border-dark shadow-sm flex flex-col gap-3">
<div class="flex items-center justify-between">
<p class="text-text-muted text-sm font-medium uppercase tracking-wider">Total Properties</p>
<span class="material-symbols-outlined text-primary bg-primary/10 p-1.5 rounded-md">home_work</span>
</div>
<div class="flex items-end gap-3">
<h2 class="text-3xl font-bold text-text-main dark:text-white">1,240</h2>
<span class="flex items-center text-green-600 text-xs font-bold mb-1.5 bg-green-100 dark:bg-green-900/30 px-1.5 py-0.5 rounded">
<span class="material-symbols-outlined text-[14px] mr-0.5">trending_up</span>
                                    +5.2%
                                </span>
</div>
</div>
<div class="bg-surface-light dark:bg-surface-dark rounded-xl p-6 border border-border-light dark:border-border-dark shadow-sm flex flex-col gap-3">
<div class="flex items-center justify-between">
<p class="text-text-muted text-sm font-medium uppercase tracking-wider">Occupancy Rate</p>
<span class="material-symbols-outlined text-primary bg-primary/10 p-1.5 rounded-md">bed</span>
</div>
<div class="flex items-end gap-3">
<h2 class="text-3xl font-bold text-text-main dark:text-white">78%</h2>
<span class="flex items-center text-green-600 text-xs font-bold mb-1.5 bg-green-100 dark:bg-green-900/30 px-1.5 py-0.5 rounded">
<span class="material-symbols-outlined text-[14px] mr-0.5">trending_up</span>
                                    +2.1%
                                </span>
</div>
</div>
<div class="bg-surface-light dark:bg-surface-dark rounded-xl p-6 border border-border-light dark:border-border-dark shadow-sm flex flex-col gap-3">
<div class="flex items-center justify-between">
<p class="text-text-muted text-sm font-medium uppercase tracking-wider">Pending Approval</p>
<span class="material-symbols-outlined text-amber-500 bg-amber-500/10 p-1.5 rounded-md">pending_actions</span>
</div>
<div class="flex items-end gap-3">
<h2 class="text-3xl font-bold text-text-main dark:text-white">12</h2>
<span class="flex items-center text-red-500 text-xs font-bold mb-1.5 bg-red-100 dark:bg-red-900/30 px-1.5 py-0.5 rounded">
<span class="material-symbols-outlined text-[14px] mr-0.5">trending_down</span>
                                    -3.4%
                                </span>
</div>
</div>
</div>
<!-- Filters & Search -->
<div class="flex flex-col lg:flex-row gap-4 justify-between items-start lg:items-center bg-surface-light dark:bg-surface-dark p-4 rounded-xl border border-border-light dark:border-border-dark shadow-sm">
<!-- Search Bar -->
<div class="relative w-full lg:w-96 group">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-text-muted group-focus-within:text-primary transition-colors">search</span>
<input class="w-full h-10 pl-10 pr-4 bg-background-light dark:bg-background-dark border-none rounded-lg text-sm text-text-main dark:text-white placeholder-text-muted focus:ring-2 focus:ring-primary/50 transition-all" placeholder="Search by name, host, or city..." type="text"/>
</div>
<!-- Chips / Filters -->
<div class="flex gap-2 flex-wrap w-full lg:w-auto overflow-x-auto">
<button class="h-9 px-4 rounded-lg bg-primary text-white text-xs font-semibold flex items-center gap-2 shadow-sm transition-all hover:bg-primary/90">
<span>All Status</span>
</button>
<button class="h-9 px-4 rounded-lg bg-background-light dark:bg-background-dark text-text-main dark:text-gray-300 text-xs font-semibold flex items-center gap-2 hover:bg-gray-200 dark:hover:bg-neutral-800 transition-colors">
<span>Active</span>
<span class="w-1.5 h-1.5 rounded-full bg-green-500"></span>
</button>
<button class="h-9 px-4 rounded-lg bg-background-light dark:bg-background-dark text-text-main dark:text-gray-300 text-xs font-semibold flex items-center gap-2 hover:bg-gray-200 dark:hover:bg-neutral-800 transition-colors">
<span>Inactive</span>
<span class="w-1.5 h-1.5 rounded-full bg-gray-400"></span>
</button>
<button class="h-9 px-4 rounded-lg bg-background-light dark:bg-background-dark text-text-main dark:text-gray-300 text-xs font-semibold flex items-center gap-2 hover:bg-gray-200 dark:hover:bg-neutral-800 transition-colors">
<span>Pending</span>
<span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span>
</button>
<button class="h-9 px-3 rounded-lg border border-dashed border-border-light dark:border-border-dark text-text-muted text-xs font-semibold flex items-center gap-1 hover:border-primary hover:text-primary transition-colors">
<span class="material-symbols-outlined text-[16px]">filter_list</span>
<span>More Filters</span>
</button>
</div>
</div>
<!-- Main Table -->
<div class="bg-surface-light dark:bg-surface-dark border border-border-light dark:border-border-dark rounded-xl shadow-sm overflow-hidden flex flex-col">
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="border-b border-border-light dark:border-border-dark bg-background-light/50 dark:bg-background-dark/50">
<th class="py-4 px-6 text-xs font-semibold uppercase tracking-wider text-text-muted w-[350px]">Rental Details</th>
<th class="py-4 px-6 text-xs font-semibold uppercase tracking-wider text-text-muted">Host</th>
<th class="py-4 px-6 text-xs font-semibold uppercase tracking-wider text-text-muted">Location</th>
<th class="py-4 px-6 text-xs font-semibold uppercase tracking-wider text-text-muted">Price</th>
<th class="py-4 px-6 text-xs font-semibold uppercase tracking-wider text-text-muted">Status</th>
<th class="py-4 px-6 text-xs font-semibold uppercase tracking-wider text-text-muted text-right">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-border-light dark:divide-border-dark">
<?php 
$pdo = Database::getConnection();
$HOST = $_SESSION['user']->getId();

$stmt = $pdo->prepare("SELECT * FROM rentals WHERE id_host = ?");
$stmt->execute([$HOST]);

$rentals = $stmt->fetchAll(PDO::FETCH_ASSOC);
$host= $_SESSION['user'];
foreach ($rentals as $rental) {
    
    echo "
<tr class='group hover:bg-gray-50 dark:hover:bg-neutral-800/50 transition-colors'>
<td class='py-4 px-6'>
<div class='w-16 h-12 rounded-lg bg-cover bg-center shrink-0 border shadow-sm'
     style=\"background-image: url('/public/uploads/" . htmlspecialchars($rental['cover_image']) . "');\">
</div>


<div class='flex flex-col'>
<span class='font-bold text-sm'>Rental #{$rental['id']}</span>
<span class='text-xs text-gray-500'>{$rental['title']}</span>
</div>
</div>
</td>
<td class='py-4 px-6'>
<div class='flex items-center gap-2'>
<div class='w-6 h-6 rounded-full bg-cover bg-center shrink-0' data-alt='Profile picture of Mark Smith' style='background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDI7RAfUvonItboNddTqvaKI7Y8zrFcLE5LOfg1LFI1ypmMfj9v5MptkB5kqQBXueUSDAZLOSM2TvkOzYdecWqk2sUaJ1viYLCfXrh9fx28ThS9Y5afJ51qHTsa-02qDGOEtSFIgOmU1w_wI5X2Sidrox4B5k4co1OdlzmQu7Uoy5eWVLf47ACDYuTqSJzKFd5iYOAPk_tTBmydoAIZ19ojVzrOMZ-jjwfhTSShaC3Jvmp3k7E8jlb-P66cG_rR24dSsblBqvqhHxE');'></div>
<span class='text-sm font-medium text-text-main dark:text-gray-300'>$host->name</span>
</div>
</td>
<td class='py-4 px-6'>
<span class='text-sm text-text-main dark:text-gray-300'>{$rental['city']}</span>
</td>

<td class='py-4 px-6'>
<span class='text-sm font-bold'>{$rental['pricePerNight']} DH
<span class='text-xs text-gray-400'>/night</span>
</span>
</td>
</tr>";
}
?>
</tbody>
<!-- 
 Row 2 
<tr class="group hover:bg-gray-50 dark:hover:bg-neutral-800/50 transition-colors">
<td class="py-4 px-6">
<div class="flex items-center gap-4">
<div class="w-16 h-12 rounded-lg bg-cover bg-center shrink-0 border border-border-light dark:border-border-dark shadow-sm" data-alt="Modern beachfront villa exterior with pool" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCVJQwoh1hqpXsIk8jS_d0CZx1D8BNRUWg1-6FnPkKeFpr9IhnCcvR7OYyIvsd4nFUIM4Rn54DGjuvZLD6kGUoHJjCM4lZeGfYi85sCXLycDXbsdxryp5GKsVr_XkBYGQPImlo-4lmBJH1XVTX9lhZKTPbuEOTtaOcsiBU_85q2s6D3KUVUCfclx5evk_RJ5N4JnI1K2OYrqzMRPMk2-Lg0M69UjbTY4yCUfCRW2prUYQcAiLzTIp6QUJtNYSoDj1dG8forpDWx82k');"></div>
<div class="flex flex-col">
<span class="font-bold text-text-main dark:text-white text-sm line-clamp-1">Beachfront Villa</span>
<span class="text-xs text-text-muted">ID: #R-1025</span>
</div>
</div>
</td>
<td class="py-4 px-6">
<div class="flex items-center gap-2">
<div class="w-6 h-6 rounded-full bg-cover bg-center shrink-0" data-alt="Profile picture of Mark Smith" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDI7RAfUvonItboNddTqvaKI7Y8zrFcLE5LOfg1LFI1ypmMfj9v5MptkB5kqQBXueUSDAZLOSM2TvkOzYdecWqk2sUaJ1viYLCfXrh9fx28ThS9Y5afJ51qHTsa-02qDGOEtSFIgOmU1w_wI5X2Sidrox4B5k4co1OdlzmQu7Uoy5eWVLf47ACDYuTqSJzKFd5iYOAPk_tTBmydoAIZ19ojVzrOMZ-jjwfhTSShaC3Jvmp3k7E8jlb-P66cG_rR24dSsblBqvqhHxE');"></div>
<span class="text-sm font-medium text-text-main dark:text-gray-300">Mark Smith</span>
</div>
</td>
<td class="py-4 px-6">
<span class="text-sm text-text-main dark:text-gray-300">Miami, FL</span>
</td>
<td class="py-4 px-6">
<span class="text-sm font-bold text-text-main dark:text-gray-200">$450<span class="text-text-muted font-normal text-xs">/night</span></span>
</td>
<td class="py-4 px-6">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800 dark:bg-gray-700/50 dark:text-gray-300">
<span class="w-1.5 h-1.5 bg-gray-400 rounded-full mr-1.5"></span>
                                                Inactive
                                            </span>
</td>
<td class="py-4 px-6 text-right">
<div class="flex items-center justify-end gap-2">
 Switch Inactive -->
<button aria-checked="false" class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none bg-gray-200 dark:bg-gray-600" role="switch">
<span class="translate-x-0 pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"></span>
</button>
<button class="p-1 rounded-md hover:bg-gray-200 dark:hover:bg-neutral-700 text-text-muted hover:text-text-main transition-colors">
<span class="material-symbols-outlined text-[20px]">more_vert</span>
</button>
</div>
</td>
</tr>
<!-- Row 3 -->
<tr class="group hover:bg-gray-50 dark:hover:bg-neutral-800/50 transition-colors">
<td class="py-4 px-6">
<div class="flex items-center gap-4">
<div class="w-16 h-12 rounded-lg bg-cover bg-center shrink-0 border border-border-light dark:border-border-dark shadow-sm" data-alt="Rustic mountain cabin surrounded by forest" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuC3a5PdQP4GsRs_KND30quLTE1UVudvMC2haVMLvCiWADm72AVO8eo9RzfgJguv3GHm28puQH1ZCBayQ421-FuyKzgEBKSlt0V83pzsjGb9Ox_-uSpsx2dOa_VsdwWdk4ZCI8qFUpN04QCutt2W2Jro0znO63svVd2CKm6637GhCf8Aosf6NAyVbQora7qccFNkjnJ9xvObg5aaXRQuoSX88cuLz8ns1hlUtO94D2xj1RZLLc9GZynFDIaUGeTQxuNLRNFFoPNLqi4');"></div>
<div class="flex flex-col">
<span class="font-bold text-text-main dark:text-white text-sm line-clamp-1">Mountain Retreat Cabin</span>
<span class="text-xs text-text-muted">ID: #R-1033</span>
</div>
</div>
</td>
<td class="py-4 px-6">
<div class="flex items-center gap-2">
<div class="w-6 h-6 rounded-full bg-cover bg-center shrink-0" data-alt="Profile picture of Sarah Jenkins" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBiSgZxiIZTf-JMmbncPjVlkNSpkQ1csYZT0La0tXvov6KCO-ZAnjIlwNc5xwcRkLnZ3JmKF3QeoUalzWYMcSsVGk2y4mmJbThNY8QpX5vOzhHVG9MWPMaXVENKOqRrZ7FKC5MPzA6tXJ7Gc-PS796auQ__Z4fH_0n-9mHaUij-BrLEPMzHqjVbghAmQJqcltieo2kWJApx4690bW25JCQhcET-Em43EiU3YuewEiRTde4Eno5a0t4a5IA7U7pHQk7YQkBhDjflioM');"></div>
<span class="text-sm font-medium text-text-main dark:text-gray-300">Sarah Jenkins</span>
</div>
</td>
<td class="py-4 px-6">
<span class="text-sm text-text-main dark:text-gray-300">Denver, CO</span>
</td>
<td class="py-4 px-6">
<span class="text-sm font-bold text-text-main dark:text-gray-200">$220<span class="text-text-muted font-normal text-xs">/night</span></span>
</td>
<td class="py-4 px-6">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-amber-100 text-amber-800 dark:bg-amber-900/30 dark:text-amber-300">
<span class="w-1.5 h-1.5 bg-amber-500 rounded-full mr-1.5"></span>
                                                Pending
                                            </span>
</td>
<td class="py-4 px-6 text-right">
<div class="flex items-center justify-end gap-2">
<button class="flex items-center gap-1 px-2.5 py-1 rounded-md bg-primary/10 text-primary hover:bg-primary/20 transition-colors text-xs font-bold">
                                                    Review
                                                </button>
<button class="p-1 rounded-md hover:bg-gray-200 dark:hover:bg-neutral-700 text-text-muted hover:text-text-main transition-colors">
<span class="material-symbols-outlined text-[20px]">more_vert</span>
</button>
</div>
</td>
</tr>
<!-- Row 4 -->
<tr class="group hover:bg-gray-50 dark:hover:bg-neutral-800/50 transition-colors">
<td class="py-4 px-6">
<div class="flex items-center gap-4">
<div class="w-16 h-12 rounded-lg bg-cover bg-center shrink-0 border border-border-light dark:border-border-dark shadow-sm" data-alt="Modern apartment interior with city view" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBY3Ruxu5SGTvEKUHfOmiBVbltz6_XaYJVT9DZoUFIeED0wC70pzwbopiw1oZjImmvGhJrDeNSflhDG0zgDvxd17SVvX_u-iUf7xtONnpPw076Q0ubFEzqWwSLIP2-xpJfqNCLbM-uheMYuMVSrfpYayiJCGbEikYTRxzHOFTf6ym7QSfipU6ZFvV9KmDIq0jc5MS5FJvej_4SMREtw2vR2i3woRLFDAm9bqB4IVOqRS9NflRhpVBjhBOC_FrSxf4IVfipF0--H1ks');"></div>
<div class="flex flex-col">
<span class="font-bold text-text-main dark:text-white text-sm line-clamp-1">Sunny Mission District Flat</span>
<span class="text-xs text-text-muted">ID: #R-1042</span>
</div>
</div>
</td>
<td class="py-4 px-6">
<div class="flex items-center gap-2">
<div class="w-6 h-6 rounded-full bg-cover bg-center shrink-0" data-alt="Profile picture of David Chen" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCbAzG2K8O1A5DT4815dKP60d-P3MhfIf11vaq3MGyCcNxX7EKoXt2vJD5nEozULCA_f5IbuK0vRP18ik87KpGOXRSFUN5PjHgMz5vEKrQu4vaX8VbzDZUcP_kqGFrbhxE-ZvFcg5Ml2jCi8k-wO770yQbLm609cjhngFMSupxpSykpZspSgOpdJk-kJMpCpuhz42n-dOkSqVprM3E0ew71etZJQjrtuZ0sL4v9dwJhbXho9tQRjDxzEi1EooTh7MB-k19Y_xX3pHo');"></div>
<span class="text-sm font-medium text-text-main dark:text-gray-300">David Chen</span>
</div>
</td>
<td class="py-4 px-6">
<span class="text-sm text-text-main dark:text-gray-300">San Francisco, CA</span>
</td>
<td class="py-4 px-6">
<span class="text-sm font-bold text-text-main dark:text-gray-200">$310<span class="text-text-muted font-normal text-xs">/night</span></span>
</td>
<td class="py-4 px-6">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-300">
<span class="w-1.5 h-1.5 bg-green-500 rounded-full mr-1.5"></span>
                                                Active
                                            </span>
</td>
<td class="py-4 px-6 text-right">
<div class="flex items-center justify-end gap-2">
<button aria-checked="true" class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none bg-primary" role="switch">
<span class="translate-x-5 pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"></span>
</button>
<button class="p-1 rounded-md hover:bg-gray-200 dark:hover:bg-neutral-700 text-text-muted hover:text-text-main transition-colors">
<span class="material-symbols-outlined text-[20px]">more_vert</span>
</button>
</div>
</td>
</tr>
<!-- Row 5 -->
<tr class="group hover:bg-gray-50 dark:hover:bg-neutral-800/50 transition-colors">
<td class="py-4 px-6">
<div class="flex items-center gap-4">
<div class="w-16 h-12 rounded-lg bg-cover bg-center shrink-0 border border-border-light dark:border-border-dark shadow-sm" data-alt="Small minimalistic bedroom in Tokyo" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuC6_mbrwH0cJ4dem98mWHYpqFZx-5eWvnzGh6Ro6bLodXltI6v0oqdX7Qfo92xku_5loyS30sy2ZjFZan1tOmsy6zEE-vaXA-eyVyQFHsKT36QFaNpZPaHMSqtTLwBwP94ZQUlYky4vIwANwX2jxTJ-4vbNqoY8cNE_iKYnMjRFLX2MXnUOMNiTFfq0nYUeMgzw4feEmD29jsyIwSxaw8w07d5FBMsycnf7VFre5bBhTfOsUwE5SjUTOSjrWAvfn6z0fZhD_RN1EIw');"></div>
<div class="flex flex-col">
<span class="font-bold text-text-main dark:text-white text-sm line-clamp-1">Minimalist Studio Tokyo</span>
<span class="text-xs text-text-muted">ID: #R-1088</span>
</div>
</div>
</td>
<td class="py-4 px-6">
<div class="flex items-center gap-2">
<div class="w-6 h-6 rounded-full bg-cover bg-center shrink-0" data-alt="Profile picture of Yumi Tanaka" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDlzDYSwEC5buBebHtYHVFpPlMIp0pPcyO0tvCbRKDpcOMUc5vtbDeGSnmbhTYnjDoRVI70D4RMGBW25meaAHbP0Ao6erjJ-IdsHBRvHP4Tun5OzWNMiqoxPZ6WTBubFFkumiTIUNTHzOqFAKUk_fi1jKGoMzqN2NkM7MHVC-jMSl52WBg9mxgJ6h7u5SOUlUtOpj0wGwnUslUndePITMb8-6_WjfaXVXIyk5w3ncgo3ghX8rVNiNqw2-WuSM1Z-FhQmNDSQsmKbkU');"></div>
<span class="text-sm font-medium text-text-main dark:text-gray-300">Yumi Tanaka</span>
</div>
</td>
<td class="py-4 px-6">
<span class="text-sm text-text-main dark:text-gray-300">Tokyo, JP</span>
</td>
<td class="py-4 px-6">
<span class="text-sm font-bold text-text-main dark:text-gray-200">$120<span class="text-text-muted font-normal text-xs">/night</span></span>
</td>
<td class="py-4 px-6">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800 dark:bg-red-900/30 dark:text-red-300">
<span class="w-1.5 h-1.5 bg-red-500 rounded-full mr-1.5"></span>
                                                Suspended
                                            </span>
</td>
<td class="py-4 px-6 text-right">
<div class="flex items-center justify-end gap-2">
<button aria-checked="false" class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none bg-gray-200 dark:bg-gray-600 opacity-50 cursor-not-allowed" disabled="" role="switch">
<span class="translate-x-0 pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"></span>
</button>
<button class="p-1 rounded-md hover:bg-gray-200 dark:hover:bg-neutral-700 text-text-muted hover:text-text-main transition-colors">
<span class="material-symbols-outlined text-[20px]">more_vert</span>
</button>
</div>
</td>
</tr>
</tbody> 
</table>
</div>
<!-- Pagination -->
<div class="border-t border-border-light dark:border-border-dark p-4 flex items-center justify-between bg-surface-light dark:bg-surface-dark">
<span class="text-xs text-text-muted font-medium">Showing <span class="text-text-main dark:text-white font-bold">1-5</span> of <span class="text-text-main dark:text-white font-bold">128</span> rentals</span>
<div class="flex gap-2">
<button class="px-3 py-1.5 rounded-lg border border-border-light dark:border-border-dark text-text-main dark:text-gray-300 text-xs font-medium hover:bg-background-light dark:hover:bg-background-dark/50 disabled:opacity-50 transition-colors" disabled="">Previous</button>
<button class="px-3 py-1.5 rounded-lg border border-border-light dark:border-border-dark text-text-main dark:text-gray-300 text-xs font-medium hover:bg-background-light dark:hover:bg-background-dark/50 transition-colors">Next</button>
</div>
</div>
</div>
</div>
</div>
</main>
</div>
</body></html>
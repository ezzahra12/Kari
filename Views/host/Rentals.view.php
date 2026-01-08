<?php
require_once __DIR__ . '/../../Models/database.php';
require_once __DIR__ . '/../../models/Host.php';
session_start();
$HOST = $_SESSION['user']->getId();
$host= $_SESSION['user'];
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

<aside class="w-64 bg-background-card dark:bg-[#2a2423] border-r border-[#e6e2de] dark:border-[#3a3433] flex-shrink-0 flex flex-col h-screen fixed left-0 top-0 z-10 shadow-soft transition-all duration-300">
<div class="p-6 flex flex-col h-full justify-between">
<div class="flex flex-col gap-8">
<!-- Branding / Profile -->
<div class="flex items-center gap-3">
<div class="bg-center bg-no-repeat bg-cover rounded-full size-12 shadow-sm border-2 border-white dark:border-[#3a3433]" data-alt="Portrait of Sarah Jenkins smiling warmly" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuD9nkFOQKkZNmaYrHGTqjylCInk8b3xMuonBq_aCtGnpqR8oMMbVpseYMHS1goBu4-NUsroncZC6UPFKrpaWIEEKPugGKLrROWxlIggHkcTwO69yyCqOlzwI085FYQFSuxX0dORKTqhmp3xH7zt_0-lNLlTSSkNriIFE-rZi424-OuTcAOh8Po_rXG3WQ5pxRg5bPf1XPNOP-BvoD6oQqgbJKIKXTGlatDsntIURcALopdf8nwKS3bbTfcQQrNiwSxB3msx2Lp1Ico");'></div>
<div class="flex flex-col">
<h1 class="text-text-main dark:text-gray-100 text-base font-bold leading-tight">Sarah Jenkins</h1>
<p class="text-[#9CA3AF] text-xs font-medium uppercase tracking-wide">Superhost</p>
</div>
</div>
<!-- Navigation -->
<nav class="flex flex-col gap-2">
<a class="sidebar-item group flex items-center gap-3 px-4 py-3 rounded-xl bg-primary/10 text-primary dark:text-primary-dark transition-colors" href="#">
<span class="material-symbols-outlined">dashboard</span>
<p class="text-sm font-semibold">Dashboard</p>
</a>

<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-primary/10 dark:bg-primary/20 text-primary" href="/Views/host/Rentals.view.php">
<span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">real_estate_agent</span>
<span class="text-sm font-bold">My Rentals</span>
</a>
<a class="sidebar-item group flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-[#f3f2f1] dark:hover:bg-[#3a3433] text-text-main dark:text-gray-300 transition-colors" href="/Views/host/hResevation.view.php">
<span class="material-symbols-outlined">calendar_month</span>
<p class="text-sm font-medium">Reservations</p>
</a>
<a class="sidebar-item group flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-[#f3f2f1] dark:hover:bg-[#3a3433] text-text-main dark:text-gray-300 transition-colors" href="/Views/host/hReview.view.php">
<span class="material-symbols-outlined">reviews</span>
<p class="text-sm font-medium">Reviews</p>
</a>

<a class="sidebar-item group flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-[#f3f2f1] dark:hover:bg-[#3a3433] text-text-main dark:text-gray-300 transition-colors" href="#">
<span class="material-symbols-outlined">settings</span>
<p class="text-sm font-medium">Settings</p>
</a>
</nav>
</div>
<!-- Bottom Action -->
<div class="flex flex-col gap-4">
<div class="p-4 rounded-xl bg-gradient-to-br from-primary/10 to-primary/5 border border-primary/20">
<p class="text-xs font-medium text-text-main dark:text-gray-300 mb-2">Need help hosting?</p>
<button class="text-primary text-xs font-bold flex items-center gap-1 hover:underline">
                        Contact Support <span class="material-symbols-outlined text-[14px]">arrow_forward</span>
</button>
</div>
<a href="/views/host/createRental.view.php" class="flex w-full cursor-pointer items-center justify-center overflow-hidden rounded-xl h-11 px-4 bg-primary hover:bg-primary-dark text-white shadow-md shadow-primary/30 transition-all active:scale-[0.98]">
<span class="material-symbols-outlined mr-2 text-[20px]">add_business</span>
<span class="text-sm font-bold tracking-wide">Create Rental</span>
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
    <?php
    $pdo=Database::getConnection();
    $stmt = $pdo->prepare("SELECT COUNT(*) FROM rentals WHERE id_host = ?");
$stmt->execute([$HOST]);
$totalProperties = $stmt->fetchColumn();

$stmt = $pdo->prepare("
    SELECT 
        (SUM(isActive = 1) / COUNT(*)) * 100 AS occupancy
    FROM rentals
    WHERE id_host = ?
");
$stmt->execute([$HOST]);
$occupancyRate = round($stmt->fetchColumn());

$stmt = $pdo->prepare("
    SELECT COUNT(*) 
    FROM rentals 
    WHERE id_host = ? AND isActive = 0
");
$stmt->execute([$HOST]);
$pending = $stmt->fetchColumn();



?>
<p class="text-text-muted text-sm font-medium uppercase tracking-wider">Total Properties</p>
<span class="material-symbols-outlined text-primary bg-primary/10 p-1.5 rounded-md">home_work</span>
</div>
<div class="flex items-end gap-3">
<h2 class="text-3xl font-bold text-text-main dark:text-white"><?= $totalProperties  ?> </h2>
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
<h2 class="text-3xl font-bold text-text-main dark:text-white"><?= $occupancyRate ?>%
</h2>
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
<h2 class="text-3xl font-bold text-text-main dark:text-white"><?= $pending ?></h2>
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


$stmt = $pdo->prepare("SELECT * FROM rentals WHERE id_host = ?");
$stmt->execute([$HOST]);

$rentals = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($rentals as $rental) {
    $statusClass = $rental['isActive'] ? 
        'bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-300' : 
        'bg-gray-100 text-gray-800 dark:bg-gray-700/50 dark:text-gray-300';

    $statusDot = $rental['isActive'] ? 'bg-green-500' : 'bg-gray-400';
    $statusText = $rental['isActive'] ? 'Active' : 'Inactive';
    
    echo "
<tr class='group hover:bg-gray-50 dark:hover:bg-neutral-800/50 transition-colors'>
<td class='py-4 px-6'>
<div class='flex items-center gap-4'>
<div class='w-16 h-12 rounded-lg bg-cover bg-center shrink-0 border shadow-sm'
     style=\"background-image: url('/public/uploads/" . htmlspecialchars($rental['cover_image']) . "');\">
</div>
<div class='flex flex-col'>
<span class='font-bold text-sm'> {$rental['title']}</span>
<span class='text-xs text-gray-500'>ID: #{$rental['id']}</span>
</div>
</div>
</td>
<td class='py-4 px-6'>
<div class='flex items-center gap-2'>
<div class='bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10 ring-2 ring-primary/20' data-alt='Profile picture of the admin user' style='background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBxqzunylhYYuSVy-NAxAvqfxzNZsSWe1n6rMBF0d9LNC888i0xL11j9ReWnQW026riES0ZBJNlAehVlVoBAm5aOa5id0lYM9SION5Ihh3hfK1geyWxho93upxo6kRIRbR0KPO1CMwi6sI4gqLBkQ9ULujMyeGBraxwApa9O7SMx-c1_rbphC8Fj3vUbelPOYkRcsaqi7dbkUR2GKT7_g-t8youdkQemLQ78sUMPTxiUi25SnLqYShOiiIU2q08FU4F3qC3gCFAskk');'>
</div>
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
<td class='py-4 px-6'>
    <span class='inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {$statusClass}'>
        <span class='w-1.5 h-1.5 {$statusDot} rounded-full mr-1.5'></span>
        {$statusText}
    </span>
</td>
<td class='py-4 px-6 text-right'>
    <div class='flex items-center justify-end gap-2'>

        <!-- Modifier -->
      
<button
onclick='openEditModal(
    {$rental['id']},
    \"".addslashes($rental['title'])."\",
    \"".addslashes($rental['city'])."\",
    {$rental['pricePerNight']}
)'
class='flex items-center gap-1 px-3 py-1.5 rounded-md 
       bg-blue-100 text-blue-700 
       hover:bg-blue-200 
       dark:bg-blue-900/30 dark:text-blue-300 dark:hover:bg-blue-900/50
       transition-colors text-xs font-semibold'>
<span class='material-symbols-outlined text-[16px]'>edit</span>
Modifier
</button>;


        <!-- Supprimer -->
        <form action='/Controllers/RentalController.php' 
              method='POST'
              onsubmit='return confirm('Voulez-vous vraiment supprimer cette location ?');'>
              
            <input type='hidden' name='id' value='{$rental['id']}'>

            <button type='submit'
                class='flex items-center gap-1 px-3 py-1.5 rounded-md 
                       bg-red-100 text-red-700 
                       hover:bg-red-200 
                       dark:bg-red-900/30 dark:text-red-300 dark:hover:bg-red-900/50
                       transition-colors text-xs font-semibold' name='deleteRental'>
                <span class='material-symbols-outlined text-[16px]' >delete</span>
                Supprimer
            </button>
        </form>

    </div>
</td>

</tr>
 ";
}
?>

<!--  1 3 2 2 1
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

</tr>
</tbody> 
</table>

<!-- Edit Rental Modal -->
<div id="editModal"
     class="fixed inset-0 bg-black/40 hidden items-center justify-center z-50">

    <div class="w-full max-w-xl bg-white dark:bg-[#1c1716] 
                rounded-2xl shadow-xl border border-[#e2dfdf] dark:border-[#444]">

        <!-- Header -->
        <div class="flex items-center justify-between px-6 py-4 
                    border-b border-[#e2dfdf] dark:border-[#444]">
            <h3 class="text-lg font-bold text-[#161313] dark:text-white">
                Modifier la location
            </h3>
            <button onclick="closeEditModal()"
                    class="text-gray-400 hover:text-red-500 transition">
                <span class="material-symbols-outlined">close</span>
            </button>
        </div>

        <!-- Form -->
        <form action="/Controllers/RentalController.php" method="POST"
              class="p-6 flex flex-col gap-5">

            <input type="hidden" name="updateRental" value="1">
            <input type="hidden" name="id" id="edit-id">

            <!-- Title -->
            <div class="flex flex-col gap-1">
                <label class="text-sm font-semibold text-[#161313] dark:text-white">
                    Titre
                </label>
                <input type="text" name="title" id="edit-title"
                       class="w-full px-4 py-2 rounded-xl
                              bg-[#fafafa] dark:bg-[#2a2422]
                              border border-[#e2dfdf] dark:border-[#444]
                              text-sm text-[#161313] dark:text-white
                              focus:outline-none focus:ring-2 focus:ring-primary">
            </div>

            <!-- City -->
            <div class="flex flex-col gap-1">
                <label class="text-sm font-semibold text-[#161313] dark:text-white">
                    Ville
                </label>
                <input type="text" name="city" id="edit-city"
                       class="w-full px-4 py-2 rounded-xl
                              bg-[#fafafa] dark:bg-[#2a2422]
                              border border-[#e2dfdf] dark:border-[#444]
                              text-sm text-[#161313] dark:text-white
                              focus:outline-none focus:ring-2 focus:ring-primary">
            </div>

            <!-- Price -->
            <div class="flex flex-col gap-1">
                <label class="text-sm font-semibold text-[#161313] dark:text-white">
                    Prix / nuit (DH)
                </label>
                <input type="number" name="price" id="edit-price"
                       class="w-full px-4 py-2 rounded-xl
                              bg-[#fafafa] dark:bg-[#2a2422]
                              border border-[#e2dfdf] dark:border-[#444]
                              text-sm text-[#161313] dark:text-white
                              focus:outline-none focus:ring-2 focus:ring-primary">
            </div>

            <!-- Actions -->
            <div class="flex justify-end gap-3 pt-4">
                <button type="button" onclick="closeEditModal()"
                        class="px-5 py-2 rounded-xl
                               border border-[#e2dfdf] dark:border-[#444]
                               text-sm font-semibold
                               text-[#161313] dark:text-white
                               hover:bg-gray-50 dark:hover:bg-neutral-800/50">
                    Annuler
                </button>

                <button type="submit"
                        class="px-6 py-2 rounded-xl
                               bg-primary text-white
                               text-sm font-bold
                               hover:opacity-90 transition">
                    Enregistrer
                </button>
            </div>
        </form>
    </div>
</div>
<script>
function openEditModal(id, title, city, price) {
    document.getElementById('edit-id').value = id;
    document.getElementById('edit-title').value = title;
    document.getElementById('edit-city').value = city;
    document.getElementById('edit-price').value = price;

    document.getElementById('editModal').classList.remove('hidden');
    document.getElementById('editModal').classList.add('flex');
}

function closeEditModal() {
    document.getElementById('editModal').classList.add('hidden');
    document.getElementById('editModal').classList.remove('flex');
}
</script>

</div>
</div>
</div>
</main>
</div>
</body></html>
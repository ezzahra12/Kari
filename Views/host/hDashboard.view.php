<?php

require_once __DIR__ . '/../../models/Host.php';  
require_once __DIR__ . '/../../models/User.php';  
require_once __DIR__ . '/../../models/database.php';
session_start();
$host = $_SESSION['user']; 
$rentals = $host->getRentals(); 
$topRentals = array_slice($rentals, 3, 3); 
?>

<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Host Dashboard</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script>
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
              "primary": "#b9857e",
              "primary-dark": "#a06d67",
              "background-light": "#faeded", /* Updated to match user request */
              "background-card": "#fdfbf9",
              "background-dark": "#1c1716",
              "text-main": "#585453",
            },
            fontFamily: {
              "display": ["Inter", "sans-serif"]
            },
            borderRadius: {"DEFAULT": "0.375rem", "lg": "0.5rem", "xl": "0.75rem", "2xl": "1rem", "full": "9999px"},
            boxShadow: {
                'soft': '0 4px 20px -2px rgba(0, 0, 0, 0.05)',
            }
          },
        },
      }
    </script>
<style>
        body {
            font-family: 'Inter', sans-serif;
            color: #585453;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .sidebar-item.active .material-symbols-outlined {
            font-variation-settings: 'FILL' 1;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark min-h-screen flex overflow-hidden">
<!-- Sidebar -->
<aside class="w-64 bg-background-card dark:bg-[#2a2423] border-r border-[#e6e2de] dark:border-[#3a3433] flex-shrink-0 flex flex-col h-screen fixed left-0 top-0 z-10 shadow-soft transition-all duration-300">
<div class="p-6 flex flex-col h-full justify-between">
<div class="flex flex-col gap-8">
<!-- Branding / Profile -->
<div class="flex items-center gap-3 px-2">
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10 ring-2 ring-primary/20" data-alt="Profile picture of the admin user" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBxqzunylhYYuSVy-NAxAvqfxzNZsSWe1n6rMBF0d9LNC888i0xL11j9ReWnQW026riES0ZBJNlAehVlVoBAm5aOa5id0lYM9SION5Ihh3hfK1geyWxho93upxo6kRIRbR0KPO1CMwi6sI4gqLBkQ9ULujMyeGBraxwApa9O7SMx-c1_rbphC8Fj3vUbelPOYkRcsaqi7dbkUR2GKT7_g-t8youdkQemLQ78sUMPTxiUi25SnLqYShOiiIU2q08FU4F3qC3gCFAskk");'>
</div>
<div class="flex flex-col">
<h1 class="text-text-main dark:text-white text-base font-bold leading-tight"><?= htmlspecialchars($host->name) ?></h1>
<p class="text-text-muted text-xs font-normal">Management Console</p>
</div>
</div>
<!-- Navigation -->
<nav class="flex flex-col gap-2">
<a class="sidebar-item group flex items-center gap-3 px-4 py-3 rounded-xl bg-primary/10 text-primary dark:text-primary-dark transition-colors" href="#">
<span class="material-symbols-outlined">dashboard</span>
<p class="text-sm font-semibold">Dashboard</p>
</a>
<a class="sidebar-item group flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-[#f3f2f1] dark:hover:bg-[#3a3433] text-text-main dark:text-gray-300 transition-colors" href="/Views/host/Rentals.view.php">
<span class="material-symbols-outlined">real_estate_agent</span>
<p class="text-sm font-medium">My Rentals</p>
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
<!-- Main Content Area -->
<main class="flex-1 ml-64 p-8 overflow-y-auto h-screen w-full">
<div class="max-w-[1200px] mx-auto flex flex-col gap-8">
<!-- Header Section -->
<header class="flex flex-col md:flex-row md:items-center justify-between gap-6">
<div class="flex flex-col gap-1">
<h2 class="text-[#1c1716] dark:text-white text-3xl font-black tracking-tight">Welcome back, Sarah</h2>
<p class="text-[#7c706e] dark:text-gray-400 text-base font-normal">Here is what's happening with your listings today.</p>
</div>
<div class="flex items-center gap-4">
<div class="relative w-full md:w-80">
<div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-primary">
<span class="material-symbols-outlined text-[20px]">search</span>
</div>
<input class="block w-full p-3 pl-10 text-sm text-gray-900 border-none rounded-xl bg-white dark:bg-[#2a2423] dark:text-white shadow-soft focus:ring-2 focus:ring-primary focus:outline-none" placeholder="Search properties..." required="" type="text"/>
</div>
<button class="p-3 bg-white dark:bg-[#2a2423] rounded-xl text-text-main dark:text-gray-300 shadow-soft hover:text-primary transition-colors relative">
<span class="material-symbols-outlined">notifications</span>
<span class="absolute top-3 right-3 size-2 bg-red-500 rounded-full border-2 border-white dark:border-[#2a2423]"></span>
</button>
</div>
</header>
<!-- Stats Grid -->
<section class="grid grid-cols-1 md:grid-cols-3 gap-6">
<!-- Stat Card 1 -->
<div class="flex flex-col gap-3 rounded-2xl p-6 bg-white dark:bg-[#2a2423] shadow-soft border border-transparent hover:border-primary/20 transition-all">
<div class="flex items-center justify-between">
<div class="p-2 bg-[#e6f4e7] rounded-lg text-[#078809]">
<span class="material-symbols-outlined">payments</span>
</div>
<span class="inline-flex items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">
<span class="material-symbols-outlined text-[14px]">trending_up</span>
                            +12%
                        </span>
</div>
<div>
<p class="text-[#7c706e] dark:text-gray-400 text-sm font-medium">Total Earnings</p>
<p class="text-[#1c1716] dark:text-white text-3xl font-bold mt-1">$3,240</p>
</div>
</div>
<!-- Stat Card 2 -->
<div class="flex flex-col gap-3 rounded-2xl p-6 bg-white dark:bg-[#2a2423] shadow-soft border border-transparent hover:border-primary/20 transition-all">
<div class="flex items-center justify-between">
<div class="p-2 bg-[#fff4e5] rounded-lg text-orange-600">
<span class="material-symbols-outlined">door_front</span>
</div>
<span class="inline-flex items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">
<span class="material-symbols-outlined text-[14px]">trending_up</span>
                            +5%
                        </span>
</div>
<div>
<p class="text-[#7c706e] dark:text-gray-400 text-sm font-medium">Occupancy Rate</p>
<p class="text-[#1c1716] dark:text-white text-3xl font-bold mt-1">85%</p>
</div>
</div>
<!-- Stat Card 3 -->
<div class="flex flex-col gap-3 rounded-2xl p-6 bg-white dark:bg-[#2a2423] shadow-soft border border-transparent hover:border-primary/20 transition-all">
<div class="flex items-center justify-between">
<div class="p-2 bg-[#e8f1ff] rounded-lg text-blue-600">
<span class="material-symbols-outlined">event_upcoming</span>
</div>
<span class="inline-flex items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">
<span class="material-symbols-outlined text-[14px]">add</span>
                             1 new
                        </span>
</div>
<div>
<p class="text-[#7c706e] dark:text-gray-400 text-sm font-medium">Upcoming Stays</p>
<p class="text-[#1c1716] dark:text-white text-3xl font-bold mt-1">4</p>
</div>
</div>
</section>
<!-- Properties List & Recent Activity -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
<!-- My Rentals List (Takes up 2 cols) -->

<!-- Rental Card 1 -->
<div class="lg:col-span-2 flex flex-col gap-4">
    <div class="flex items-center justify-between">
        <h3 class="text-xl font-bold text-[#1c1716] dark:text-white">My Rentals</h3>
        <a class="text-primary text-sm font-semibold hover:underline" href="#">View All</a>
    </div>

    <?php if (!empty($topRentals)): ?>
        <?php foreach($topRentals as $rental): ?>
        <div class="group flex flex-col sm:flex-row bg-white dark:bg-[#2a2423] rounded-2xl shadow-soft overflow-hidden hover:shadow-md transition-shadow border border-transparent hover:border-primary/20">
           <div class="sm:w-48 h-48 sm:h-auto bg-cover bg-center relative" 
     style="background-image: url('/public/uploads/<?= htmlspecialchars($rental['cover_image'] ?? 'default.jpg') ?>');">

                <div class="absolute top-2 left-2 px-2 py-1 bg-white/90 backdrop-blur-sm rounded text-xs font-bold text-gray-800 shadow-sm">
                    <?= htmlspecialchars($rental['rating'] ?? 'N/A') ?> <span class="text-orange-400">★</span>
                </div>
            </div>
            <div class="p-5 flex flex-col justify-between flex-1">
                <div class="flex justify-between items-start">
                    <div>
                       <span class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20 mb-2">
    <?= htmlspecialchars($rental['isActive'] ? 'Active' : 'Inactive') ?>
</span>

                        <h4 class="text-lg font-bold text-[#1c1716] dark:text-white group-hover:text-primary transition-colors">
                            <?= htmlspecialchars($rental['title'] ?? 'No Title') ?>
                        </h4>
                        <p class="text-[#7c706e] dark:text-gray-400 text-sm mt-1">
                            <?= htmlspecialchars($rental['city'] ?? 'Unknown') ?>
                        </p>
                    </div>
                    <div class="text-right">
                        <p class="text-lg font-bold text-[#1c1716] dark:text-white">
                            $<?= htmlspecialchars($rental['pricePerNight'] ?? 0) ?>
                        </p>
                        <p class="text-[#7c706e] dark:text-gray-400 text-xs">/ night</p>
                    </div>
                </div>
                <div class="flex items-center justify-between mt-4 pt-4 border-t border-gray-100 dark:border-gray-800">
                    <div class="flex gap-4 text-sm text-[#585453] dark:text-gray-300">
                        <div class="flex items-center gap-1">
                            <span class="material-symbols-outlined text-[18px]">bed</span> 
                            <?= htmlspecialchars($rental['bedrooms'] ?? 0) ?> Beds
                        </div>
                        <div class="flex items-center gap-1">
                            <span class="material-symbols-outlined text-[18px]">group</span> 
                            <?= htmlspecialchars($rental['guests'] ?? 0) ?> Guests
                        </div>
                    </div>
                    <div class="flex gap-2">
                        <a href="/Views/host/editRental.view.php?id=<?= htmlspecialchars($rental['id']) ?>" 
                           class="p-2 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg text-gray-500 transition-colors" 
                           title="Edit">
                            <span class="material-symbols-outlined text-[20px]">edit</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p class="text-gray-500 dark:text-gray-400 mt-4">You have no rentals yet.</p>
    <?php endif; ?>
</div>

<!-- Right Sidebar: Recent Activity & Notifications -->
<div class="flex flex-col gap-6">
<!-- Recent Activity -->
<div class="bg-white dark:bg-[#2a2423] rounded-2xl shadow-soft p-6">
<div class="flex items-center justify-between mb-4">
<h3 class="text-lg font-bold text-[#1c1716] dark:text-white">Recent Activity</h3>
<button class="text-xs font-medium text-gray-400 hover:text-primary">Clear all</button>
</div>
<div class="flex flex-col gap-4">
<div class="flex gap-3">
<div class="mt-1 size-8 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 flex-shrink-0">
<span class="material-symbols-outlined text-[16px]">bookmark_added</span>
</div>
<div>
<p class="text-sm text-[#1c1716] dark:text-white font-medium">New reservation</p>
<p class="text-xs text-[#7c706e] dark:text-gray-400">Alice booked <span class="font-medium">Cozy Downtown Loft</span> for Nov 12-14.</p>
<p class="text-[10px] text-gray-400 mt-1">2 mins ago</p>
</div>
</div>
<div class="w-full h-px bg-gray-100 dark:bg-gray-800"></div>
<div class="flex gap-3">
<div class="mt-1 size-8 rounded-full bg-yellow-100 flex items-center justify-center text-yellow-600 flex-shrink-0">
<span class="material-symbols-outlined text-[16px]">star</span>
</div>
<div>
<p class="text-sm text-[#1c1716] dark:text-white font-medium">New review</p>
<p class="text-xs text-[#7c706e] dark:text-gray-400">Mark left a 5-star review for <span class="font-medium">Seaside Cottage</span>.</p>
<p class="text-[10px] text-gray-400 mt-1">1 hour ago</p>
</div>
</div>
<div class="w-full h-px bg-gray-100 dark:bg-gray-800"></div>
<div class="flex gap-3">
<div class="mt-1 size-8 rounded-full bg-purple-100 flex items-center justify-center text-purple-600 flex-shrink-0">
<span class="material-symbols-outlined text-[16px]">mail</span>
</div>
<div>
<p class="text-sm text-[#1c1716] dark:text-white font-medium">New message</p>
<p class="text-xs text-[#7c706e] dark:text-gray-400">Sarah asks: "Is early check-in available?"</p>
<p class="text-[10px] text-gray-400 mt-1">3 hours ago</p>
</div>
</div>
</div>
</div>
<!-- Upcoming Check-ins Mini List -->
<div class="bg-white dark:bg-[#2a2423] rounded-2xl shadow-soft p-6">
<h3 class="text-lg font-bold text-[#1c1716] dark:text-white mb-4">Upcoming Check-ins</h3>
<div class="flex flex-col gap-4">
<!-- Guest 1 -->
<div class="flex items-center gap-3">
<div class="size-10 rounded-full bg-gray-200 bg-cover bg-center" data-alt="Portrait of James Smith" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCLXiOdm8ka-okloSRnv40fkp_edf2NnOm4rOBOm6PbL4sDBVenwSBrjeIqQHanbnvzSOLJWPc7Ge97Odq0RwR_OKH0WZy9UJPLfB8kDhxF8syeBCzx-C1PKAwx1JwNOvlj_B07OlsDjvxKCVpNV0xMXwI8KZVlhLNuHKmmvI5orufJBPBV53E9_3OfiKOdFMw4z3PH9GFPeg2VDRB8TCEaV4_lX8XocNEujBBI8BctRF7Va6sBfnX_J7i1nVy7a8F_dn6OQRsq_uA");'></div>
<div class="flex-1">
<p class="text-sm font-bold text-[#1c1716] dark:text-white">James Smith</p>
<p class="text-xs text-[#7c706e] dark:text-gray-400">Tomorrow · Loft</p>
</div>
<button class="size-8 rounded-full hover:bg-gray-100 dark:hover:bg-gray-700 flex items-center justify-center text-gray-500 transition-colors">
<span class="material-symbols-outlined text-[20px]">chat_bubble</span>
</button>
</div>
<!-- Guest 2 -->
<div class="flex items-center gap-3">
<div class="size-10 rounded-full bg-gray-200 bg-cover bg-center" data-alt="Portrait of Emily Doe" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuB0UxbxCRyPjHnrbyHm0ha6aK4vyY0JDymAvKQZ0ZKpYAPrn6JctzlmOo9_LWDY903yqhcDcayB6OPUujbAx_rxozxpeBlB79N-YsBtHVRLq_2qoYVCS9vnAqKEnNMzVdTkMQpf7rG-4gxd28Ny1ZPn600QOJVKzXGCzWP-MvjFuUH-CQdsOAw-fB3cIoR-xPcNnTRBeKgSfn6wcU2ZI3QWbWxYR8V1vvPhGZcOyjf3HKKkY1L7r6SSHzQ9IvbfT7Sv7Y9ZyWTXr2M");'></div>
<div class="flex-1">
<p class="text-sm font-bold text-[#1c1716] dark:text-white">Emily Doe</p>
<p class="text-xs text-[#7c706e] dark:text-gray-400">Nov 15 · Cottage</p>
</div>
<button class="size-8 rounded-full hover:bg-gray-100 dark:hover:bg-gray-700 flex items-center justify-center text-gray-500 transition-colors">
<span class="material-symbols-outlined text-[20px]">chat_bubble</span>
</button>
</div>
</div>
<button class="w-full mt-5 py-2 rounded-lg border border-gray-200 dark:border-gray-700 text-sm font-medium text-text-main dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
                            View Calendar
                        </button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


</div>
</main>
</body></html>
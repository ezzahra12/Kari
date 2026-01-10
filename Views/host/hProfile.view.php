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
<title>Edit Profile - Traveler Dashboard</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#b9847d",
                        "background-light": "#f7f7f6",
                        "background-dark": "#1c1716",
                        "host-bg": "#faeded",
                        "card-bg": "#fdfbf9",
                        "text-main": "#585453",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"],
                        "sans": ["Inter", "sans-serif"],
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
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }
        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</head>
<body class="bg-host-bg text-text-main min-h-screen flex flex-col">
<header class="bg-white sticky top-0 z-50 shadow-sm border-b border-[#f3f2f1]">
<div class="px-6 md:px-10 py-3 flex items-center justify-between">
    <div></div>

<div class="flex items-center gap-4">
<button class="hidden lg:flex cursor-pointer items-center justify-center rounded-lg h-9 px-4 border border-primary text-primary hover:bg-primary/5 text-sm font-bold transition-colors">
<span class="truncate">Switch to Traveler</span>
</button>
<button class="flex size-9 cursor-pointer items-center justify-center rounded-full hover:bg-gray-100 text-text-main transition-colors relative">
<span class="material-symbols-outlined text-[24px]">notifications</span>
<span class="absolute top-2 right-2 size-2 bg-red-500 rounded-full border border-white"></span>
</button>
<div class="bg-center bg-no-repeat bg-cover rounded-full size-9 cursor-pointer ring-2 ring-transparent ring-offset-2 ring-primary transition-all" data-alt="User profile avatar showing a smiling person" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBjyJTODnE9jstbbwXERRP8w0sqX6vKOR_5GNFoXnHjvpXHVvj7H-d3CPl2kVD3WrY6jxGZQTT8X0HFitlG7lqk3aGGnLd8PmVB5ZnfmPh9TDAVTOsvCAB9kq_roTARtlvAZ2_-pL2ln2V6lS6624K0NybelZpb0a6O6-gSoQqfMceQZSQ_QjrDmusDY9iCNSM3o2jHVIjIPsYdEKD1QoHlmXEf887Y4cuu-Guf3fUwA7maVs_oIrZUZWHTfplyzGzTS-cYy08aVYU");'>
</div>
</div>
</div>
<!-- Sidebar -->
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
</header>
<main class="flex-1 w-full max-w-[1100px] mx-auto px-4 md:px-10 py-8">
<div class="flex flex-col gap-1 mb-8">
<h1 class="text-text-main text-3xl md:text-4xl font-black tracking-tight">Edit Profile</h1>
<p class="text-text-main/70 text-base">Manage your personal information and account settings.</p>
</div>
<div class="grid grid-cols-1 lg:grid-cols-12 gap-8">

</div>
<div class="lg:col-span-9">
<div class="bg-card-bg rounded-2xl shadow-[0_2px_8px_rgba(0,0,0,0.04)] border border-white/50 p-6 md:p-8">
<div class="flex flex-col sm:flex-row items-center gap-6 mb-10 pb-10 border-b border-gray-100">
<div class="relative group">
<div class="size-28 rounded-full bg-cover bg-center ring-4 ring-white shadow-md" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBjyJTODnE9jstbbwXERRP8w0sqX6vKOR_5GNFoXnHjvpXHVvj7H-d3CPl2kVD3WrY6jxGZQTT8X0HFitlG7lqk3aGGnLd8PmVB5ZnfmPh9TDAVTOsvCAB9kq_roTARtlvAZ2_-pL2ln2V6lS6624K0NybelZpb0a6O6-gSoQqfMceQZSQ_QjrDmusDY9iCNSM3o2jHVIjIPsYdEKD1QoHlmXEf887Y4cuu-Guf3fUwA7maVs_oIrZUZWHTfplyzGzTS-cYy08aVYU");'></div>
<button class="absolute bottom-0 right-0 p-2 bg-primary text-white rounded-full hover:bg-primary/90 shadow-lg transition-transform hover:scale-105" title="Change photo">
<span class="material-symbols-outlined text-[20px] block">photo_camera</span>
</button>
</div>
<div class="text-center sm:text-left flex-1">
<h3 class="text-lg font-bold text-text-main mb-1">Your Photo</h3>
<p class="text-sm text-text-main/60 mb-4 max-w-sm">This will be displayed on your profile and in reviews.</p>
<div class="flex items-center justify-center sm:justify-start gap-3">
<button class="px-4 py-2 bg-white border border-gray-200 rounded-lg text-sm font-semibold text-text-main hover:bg-gray-50 transition-colors shadow-sm">
                                Upload New
                            </button>
<button class="px-4 py-2 text-sm font-medium text-red-500 hover:bg-red-50 rounded-lg transition-colors">
                                Remove
                            </button>
</div>
</div>
</div>
<form class="space-y-6">
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="space-y-2">
<label class="block text-sm font-bold text-text-main/80" for="firstName">First Name</label>
<input class="w-full rounded-xl border-gray-200 bg-white py-2.5 px-4 text-text-main shadow-sm focus:border-primary focus:ring-primary focus:ring-opacity-50 transition-all placeholder:text-gray-300" id="firstName" name="firstName" type="text" value="Jessica"/>
</div>
<div class="space-y-2">
<label class="block text-sm font-bold text-text-main/80" for="lastName">Last Name</label>
<input class="w-full rounded-xl border-gray-200 bg-white py-2.5 px-4 text-text-main shadow-sm focus:border-primary focus:ring-primary focus:ring-opacity-50 transition-all placeholder:text-gray-300" id="lastName" name="lastName" type="text" value="Doe"/>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="space-y-2">
<label class="block text-sm font-bold text-text-main/80" for="email">Email Address</label>
<input class="w-full rounded-xl border-gray-200 bg-white py-2.5 px-4 text-text-main shadow-sm focus:border-primary focus:ring-primary focus:ring-opacity-50 transition-all placeholder:text-gray-300" id="email" name="email" type="email" value="jessica.doe@example.com"/>
</div>
<div class="space-y-2">
<label class="block text-sm font-bold text-text-main/80" for="phone">Phone Number</label>
<input class="w-full rounded-xl border-gray-200 bg-white py-2.5 px-4 text-text-main shadow-sm focus:border-primary focus:ring-primary focus:ring-opacity-50 transition-all placeholder:text-gray-300" id="phone" name="phone" type="tel" value="+1 (555) 123-4567"/>
</div>
</div>
<div class="space-y-2">
<label class="block text-sm font-bold text-text-main/80" for="location">Location</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-2.5 text-text-main/40">location_on</span>
<input class="w-full rounded-xl border-gray-200 bg-white py-2.5 pl-10 pr-4 text-text-main shadow-sm focus:border-primary focus:ring-primary focus:ring-opacity-50 transition-all placeholder:text-gray-300" id="location" name="location" type="text" value="San Francisco, California"/>
</div>
</div>
<div class="space-y-2">
<label class="block text-sm font-bold text-text-main/80" for="bio">About Me</label>
<p class="text-xs text-text-main/50 mb-2">Tell hosts and guests a little about yourself.</p>
<textarea class="w-full rounded-xl border-gray-200 bg-white py-3 px-4 text-text-main shadow-sm focus:border-primary focus:ring-primary focus:ring-opacity-50 transition-all placeholder:text-gray-300 resize-none" id="bio" rows="4">Avid traveler and coffee enthusiast. I love exploring new cities and finding hidden gems. Always respectful of the spaces I stay in.</textarea>
</div>
<div class="pt-6 mt-6 border-t border-gray-100 flex items-center justify-end gap-4">
<button class="px-6 py-2.5 rounded-xl text-sm font-bold text-text-main/70 hover:text-text-main hover:bg-gray-100 transition-colors" type="button">
                            Cancel
                        </button>
<button class="px-8 py-2.5 rounded-xl bg-primary text-white text-sm font-bold shadow-lg shadow-primary/20 hover:bg-primary/90 hover:shadow-primary/30 transform hover:-translate-y-0.5 transition-all" type="submit">
                            Save Changes
                        </button>
</div>
</form>
</div>
</div>
</div>
</main>

</body></html>
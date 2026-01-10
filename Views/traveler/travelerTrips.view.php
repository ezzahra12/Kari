<?php
require __DIR__ . '/../models/Traveler.php';
if (!isset($_SESSION['user']) || !($_SESSION['user'] instanceof Traveler)) {
    header("Location: /Views/auth/login.view.php");
    exit;
}

?>
<!DOCTYPE html>
<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>My Trips - Traveler Dashboard</title>
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
<div class="flex items-center gap-3 text-text-main">
<div class="size-8 bg-primary rounded-lg flex items-center justify-center text-white">
<span class="material-symbols-outlined">flight_takeoff</span>
</div>
<h2 class="text-text-main text-lg font-bold tracking-tight">TravelerPanel</h2>
</div>
<div class="hidden md:flex items-center gap-8">
<a class="text-text-main hover:text-primary text-sm font-medium transition-colors" href="/Views/index.view.php">Explore</a>
<a class="text-primary text-sm font-bold border-b-2 border-primary py-4" href="">Trips</a>
</div>
<div class="flex items-center gap-4">
<button class="hidden lg:flex cursor-pointer items-center justify-center rounded-lg h-9 px-4 border border-primary text-primary hover:bg-primary/5 text-sm font-bold transition-colors">
<span class="truncate">Switch to Host</span>
</button>
<button class="flex size-9 cursor-pointer items-center justify-center rounded-full hover:bg-gray-100 text-text-main transition-colors relative">
<span class="material-symbols-outlined text-[24px]">notifications</span>
<span class="absolute top-2 right-2 size-2 bg-red-500 rounded-full border border-white"></span>
</button>
<div class="bg-center bg-no-repeat bg-cover rounded-full size-9 cursor-pointer ring-2 ring-transparent hover:ring-primary/20 transition-all" data-alt="User profile avatar showing a smiling person" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBjyJTODnE9jstbbwXERRP8w0sqX6vKOR_5GNFoXnHjvpXHVvj7H-d3CPl2kVD3WrY6jxGZQTT8X0HFitlG7lqk3aGGnLd8PmVB5ZnfmPh9TDAVTOsvCAB9kq_roTARtlvAZ2_-pL2ln2V6lS6624K0NybelZpb0a6O6-gSoQqfMceQZSQ_QjrDmusDY9iCNSM3o2jHVIjIPsYdEKD1QoHlmXEf887Y4cuu-Guf3fUwA7maVs_oIrZUZWHTfplyzGzTS-cYy08aVYU");'>
</div>
</div>
</div>
<div class="md:hidden flex justify-around border-t border-gray-100 py-2">
<a class="text-text-main p-2" href="#"><span class="material-symbols-outlined">search</span></a>
<a class="text-primary p-2" href="#"><span class="material-symbols-outlined">airplane_ticket</span></a>
<a class="text-text-main p-2" href="#"><span class="material-symbols-outlined">favorite</span></a>
<a class="text-text-main p-2" href="#"><span class="material-symbols-outlined">chat</span></a>
</div>
</header>
<main class="flex-1 w-full max-w-[1280px] mx-auto px-4 md:px-10 py-8">
<div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-8">
<div class="flex flex-col gap-1">
<h1 class="text-text-main text-3xl md:text-4xl font-black tracking-tight">My Trips</h1>
<p class="text-text-main/70 text-base">View your upcoming adventures and past getaways.</p>
</div>
<button class="flex items-center justify-center gap-2 rounded-xl h-12 px-6 bg-white text-text-main shadow-sm border border-gray-200 hover:bg-gray-50 transform hover:-translate-y-0.5 transition-all text-sm font-bold">
<span class="material-symbols-outlined">receipt_long</span>
<span>Export History</span>
</button>
</div>
<div class="flex flex-col lg:flex-row gap-4 items-center justify-between mb-8 border-b border-black/5 pb-2">
<div class="flex gap-6 w-full lg:w-auto overflow-x-auto pb-2 lg:pb-0 scrollbar-hide">
<button class="flex items-center gap-2 pb-3 border-b-2 border-primary text-primary text-base font-bold whitespace-nowrap">
                Upcoming
                <span class="bg-primary text-white text-[10px] font-bold px-1.5 py-0.5 rounded-full ml-1">2</span>
</button>
<button class="flex items-center gap-2 pb-3 border-b-2 border-transparent text-text-main/60 hover:text-text-main font-medium whitespace-nowrap transition-colors">
                Past
            </button>
<button class="flex items-center gap-2 pb-3 border-b-2 border-transparent text-text-main/60 hover:text-text-main font-medium whitespace-nowrap transition-colors">
                Cancelled
            </button>
</div>
<div class="relative w-full lg:w-[300px]">
<div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
<span class="material-symbols-outlined text-text-main/40 text-[20px]">search</span>
</div>
<input class="block w-full pl-10 pr-3 py-2 border border-gray-200 rounded-full leading-5 bg-card-bg placeholder-text-main/40 focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary sm:text-sm text-text-main" placeholder="Search by destination..." type="text"/>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-6">
<div class="group bg-card-bg rounded-2xl overflow-hidden shadow-[0_2px_8px_rgba(0,0,0,0.04)] hover:shadow-[0_8px_24px_rgba(0,0,0,0.08)] border border-white/50 transition-all duration-300 flex flex-col">
<div class="relative h-48 overflow-hidden">
<div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-105" data-alt="Modern loft apartment interior with large windows" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCNqkc5CJJEWa6k4ViShaTJ_cr3x0irPqcmz5sNuMOxhJeYzQ_Q9tyDMufomIHGgZQdAzYtXQJ-vYlPBZjvljEkvZFWues-CEZ2HEidVOmHiMC45wHgoiPmntaRBeshgHOnhITZa_WeLKTIiDs9V3VntRONHPUlWc3PmnsEGHp0NPbumBVU9vYSHpzf5rrcoB5-PtGSgsr8So_FzTvYwodeYd-o_be9p4Mt9dTXLxGxW3-LMpMxH_AdEngX_AqKcZov0Aemf5plHDY");'>
</div>
<div class="absolute top-3 left-3">
<span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-md bg-white/95 backdrop-blur-sm text-xs font-bold text-primary shadow-sm">
<span class="material-symbols-outlined text-[14px]">event_upcoming</span>
                        In 3 days
                    </span>
</div>
</div>
<div class="p-5 flex flex-col flex-1 gap-3">
<div class="flex justify-between items-start">
<div>
<h3 class="text-lg font-bold text-text-main leading-tight group-hover:text-primary transition-colors">Cozy Downtown Loft</h3>
<p class="text-sm text-text-main/70">New York, NY</p>
</div>
<div class="bg-cover bg-center size-10 rounded-full border-2 border-white shadow-sm" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCFH-EFDhnIxKBXRpPmhiR2WT7Oxy6FY6OQ3O2kseOrI7CSfqTM8BVyqqpZymckPgikazPa7QdeZsY2KGipj8bWlRUgGz4vTs-LvYRPqvW_hhAs4Fl8ZhVMyAanT7VYnW0zROksvDekqNkyP3-ljDTyQCZprnJ6eWAlWUITqXPCSsZKj0G1tcht9g94ZoSc3RBAnAjut6nc0Yp_9FDfunHHKGu4SLz5Q9Vq81h_0IEbIXf2DPxiN68_JaEoOHVYgyOYLRz8gca3474");'></div> 
</div>
<div class="bg-host-bg/50 rounded-lg p-3 flex flex-col gap-2 mt-1">
<div class="flex justify-between text-sm">
<span class="text-text-main/60">Check-in</span>
<span class="font-semibold text-text-main">Oct 24, 2023</span>
</div>
<div class="w-full h-px bg-primary/10"></div>
<div class="flex justify-between text-sm">
<span class="text-text-main/60">Check-out</span>
<span class="font-semibold text-text-main">Oct 28, 2023</span>
</div>
</div>
<div class="mt-auto pt-3 flex items-center justify-between">
<span class="inline-flex items-center gap-1 text-green-600 bg-green-50 px-2 py-1 rounded text-xs font-bold uppercase tracking-wider">
<span class="material-symbols-outlined text-[14px]">check_circle</span>
                        Confirmed
                    </span>
<button class="text-sm font-semibold text-primary hover:text-primary/80 transition-colors">
                        View Details
                    </button>
</div>
</div>
</div>
<div class="group bg-card-bg rounded-2xl overflow-hidden shadow-[0_2px_8px_rgba(0,0,0,0.04)] hover:shadow-[0_8px_24px_rgba(0,0,0,0.08)] border border-primary/20 ring-2 ring-primary/10 transition-all duration-300 flex flex-col">
<div class="relative h-48 overflow-hidden">
<div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-105" data-alt="Exterior of a modern seaside villa with pool" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBFVmLzafcS4dKz8Qej6Zyvyp0tcDVWi618Da5aEE-J3oQm8QStpeHfOPp7gZYRziCoGqR5nZ9I20kh8-LdAaezfsgqUV0ZYyZtEFMg9cnkqOWZ7pC5k8874TOOHruFpAp-c7WfRNyyzwS4kJA8gXIwx5K86WULCHSFB3bb6mT3NvnZeFigq53zBOGfQ-9I3tU-na7_hiO2qGMqC6yLl_JoHme_QxgKrVw04zzh4AUKqA8ErtnT0RU-wboX3he86Krm64LxlyyGhSI");'>
</div>
<div class="absolute top-3 left-3">
<span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-md bg-primary text-white backdrop-blur-sm text-xs font-bold shadow-lg shadow-primary/30">
<span class="material-symbols-outlined text-[14px] animate-pulse">location_on</span>
                        Happening Now
                    </span>
</div>
</div>
<div class="p-5 flex flex-col flex-1 gap-3">
<div class="flex justify-between items-start">
<div>
<h3 class="text-lg font-bold text-text-main leading-tight group-hover:text-primary transition-colors">Seaside Villa Escape</h3>
<p class="text-sm text-text-main/70">Malibu, CA</p>
</div>
<div class="bg-cover bg-center size-10 rounded-full border-2 border-white shadow-sm" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDrPCuzzhK0Yx2baLDkisz3bduDzPyMEneoLvJ2gqOhqVdxN59NuKkW-3zZNE9Hmb0EKla46deqlFe60DXZSVkBV4lN2YeiCtuT32YluhVDjsbfY1Ush9aSyd6t6VQbxtPyzXChqAu5hOmOn0_0AwH7S1eXmPQuYCTMhyJU5N6c3ab1aOO0gIrLWNxlqIcjPTN5HT8GRTclZXQqJ_DDj5GbAIK4-csR-RFefS39CDTQ3rLyHOZEcH_TBO8U58Txm-5uUPPLZuYCmEg");'></div>
</div>
<div class="bg-host-bg/50 rounded-lg p-3 flex flex-col gap-2 mt-1">
<div class="flex justify-between text-sm">
<span class="text-text-main/60">Check-in</span>
<span class="font-semibold text-text-main">Oct 20, 2023</span>
</div>
<div class="w-full h-px bg-primary/10"></div>
<div class="flex justify-between text-sm">
<span class="text-text-main/60">Check-out</span>
<span class="font-semibold text-text-main">Oct 25, 2023</span>
</div>
</div>
<div class="mt-auto pt-3 grid grid-cols-2 gap-3">
<button class="flex items-center justify-center h-9 rounded-lg bg-primary text-white hover:bg-primary/90 font-semibold text-xs transition-all duration-200 shadow-md shadow-primary/20">
                        Get Directions
                    </button>
<button class="flex items-center justify-center h-9 rounded-lg border border-primary/20 text-primary hover:bg-primary/5 font-semibold text-xs transition-colors">
                        Message Host
                    </button>
</div>
</div>
</div>
<div class="group bg-card-bg rounded-2xl overflow-hidden shadow-[0_2px_8px_rgba(0,0,0,0.04)] hover:shadow-[0_8px_24px_rgba(0,0,0,0.08)] border border-white/50 transition-all duration-300 flex flex-col opacity-90">
<div class="relative h-48 overflow-hidden">
<div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-105" data-alt="Cozy wooden cabin in the snowy mountains" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCFH-EFDhnIxKBXRpPmhiR2WT7Oxy6FY6OQ3O2kseOrI7CSfqTM8BVyqqpZymckPgikazPa7QdeZsY2KGipj8bWlRUgGz4vTs-LvYRPqvW_hhAs4Fl8ZhVMyAanT7VYnW0zROksvDekqNkyP3-ljDTyQCZprnJ6eWAlWUITqXPCSsZKj0G1tcht9g94ZoSc3RBAnAjut6nc0Yp_9FDfunHHKGu4SLz5Q9Vq81h_0IEbIXf2DPxiN68_JaEoOHVYgyOYLRz8gca3474");'>
</div>
<div class="absolute top-3 left-3">
<span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-md bg-white/95 backdrop-blur-sm text-xs font-bold text-orange-500 shadow-sm border border-orange-100">
<span class="material-symbols-outlined text-[14px]">hourglass_empty</span>
                        Pending Approval
                    </span>
</div>
</div>
<div class="p-5 flex flex-col flex-1 gap-3">
<div class="flex justify-between items-start">
<div>
<h3 class="text-lg font-bold text-text-main leading-tight group-hover:text-primary transition-colors">Mountain Retreat Cabin</h3>
<p class="text-sm text-text-main/70">Aspen, CO</p>
</div>
<div class="bg-cover bg-center size-10 rounded-full border-2 border-white shadow-sm" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuD6-UMieUFQWqkdLrU0dnSVTtLEtFfBZ8WKA6FusbiSePVYOMxWxVsvoY-PmzJCpZ4wBXXAlfgrBpMrDFFjDd7r_KigltpYDDG-7yMJrLeboMJh60f5xNEFYNpqvhI2MgYrglHnwzQy-C2SLlZCsvYgSIRglPBexYEmpayjc9lJc3toTki3YbOKyc4BKqh3HQExBhTPEHdrb0MJBnBD-3wN5Lp3dFDuMQFmeJt6f4DflFUn12BJYJmLE359gmnjP_ALEKsZMrLc8BQ");'></div>
</div>
<div class="bg-host-bg/50 rounded-lg p-3 flex flex-col gap-2 mt-1">
<div class="flex justify-between text-sm">
<span class="text-text-main/60">Check-in</span>
<span class="font-semibold text-text-main">Dec 15, 2023</span>
</div>
<div class="w-full h-px bg-primary/10"></div>
<div class="flex justify-between text-sm">
<span class="text-text-main/60">Check-out</span>
<span class="font-semibold text-text-main">Dec 20, 2023</span>
</div>
</div>
<div class="mt-auto pt-3 flex items-center justify-between">
<span class="text-xs text-text-main/50 italic">Waiting for host response...</span>
<button class="text-sm font-semibold text-text-main/60 hover:text-text-main transition-colors">
                        Cancel Request
                    </button>
</div>
</div>
</div>
<div class="col-span-1 md:col-span-2 lg:col-span-3 pt-6 pb-2">
<h3 class="text-lg font-bold text-text-main flex items-center gap-2">
<span class="material-symbols-outlined text-primary">history</span>
                Recently Completed
            </h3>
</div>
<div class="group bg-card-bg rounded-2xl overflow-hidden shadow-[0_2px_8px_rgba(0,0,0,0.04)] hover:shadow-[0_8px_24px_rgba(0,0,0,0.08)] border border-white/50 transition-all duration-300 flex flex-col grayscale-[30%] hover:grayscale-0">
<div class="relative h-48 overflow-hidden">
<div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-105" data-alt="Modern geometric urban apartment building exterior" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuD6-UMieUFQWqkdLrU0dnSVTtLEtFfBZ8WKA6FusbiSePVYOMxWxVsvoY-PmzJCpZ4wBXXAlfgrBpMrDFFjDd7r_KigltpYDDG-7yMJrLeboMJh60f5xNEFYNpqvhI2MgYrglHnwzQy-C2SLlZCsvYgSIRglPBexYEmpayjc9lJc3toTki3YbOKyc4BKqh3HQExBhTPEHdrb0MJBnBD-3wN5Lp3dFDuMQFmeJt6f4DflFUn12BJYJmLE359gmnjP_ALEKsZMrLc8BQ");'>
</div>
<div class="absolute top-3 left-3">
<span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-md bg-gray-100/95 backdrop-blur-sm text-xs font-bold text-gray-600 shadow-sm border border-gray-200">
<span class="material-symbols-outlined text-[14px]">done_all</span>
                        Completed
                    </span>
</div>
</div>
<div class="p-5 flex flex-col flex-1 gap-3">
<div class="flex justify-between items-start">
<div>
<h3 class="text-lg font-bold text-text-main leading-tight group-hover:text-primary transition-colors">Urban Studio - The Heights</h3>
<p class="text-sm text-text-main/70">Austin, TX</p>
</div>
<div class="bg-cover bg-center size-10 rounded-full border-2 border-white shadow-sm" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCNqkc5CJJEWa6k4ViShaTJ_cr3x0irPqcmz5sNuMOxhJeYzQ_Q9tyDMufomIHGgZQdAzYtXQJ-vYlPBZjvljEkvZFWues-CEZ2HEidVOmHiMC45wHgoiPmntaRBeshgHOnhITZa_WeLKTIiDs9V3VntRONHPUlWc3PmnsEGHp0NPbumBVU9vYSHpzf5rrcoB5-PtGSgsr8So_FzTvYwodeYd-o_be9p4Mt9dTXLxGxW3-LMpMxH_AdEngX_AqKcZov0Aemf5plHDY");'></div>
</div>
<div class="bg-gray-50 rounded-lg p-3 flex flex-col gap-2 mt-1">
<div class="flex justify-between text-sm">
<span class="text-text-main/60">Dates</span>
<span class="font-semibold text-text-main/80">Sep 10 - Sep 14, 2023</span>
</div>
</div>
<div class="mt-auto pt-3 flex items-center justify-between border-t border-gray-100">
<div class="flex items-center gap-1 text-primary text-sm font-medium">
<span class="material-symbols-outlined text-[18px]">star</span>
<span>Rate your stay</span>
</div>
<button class="text-sm font-semibold text-text-main/60 hover:text-text-main transition-colors">
                        Receipt
                    </button>
</div>
</div>
</div>
<div class="group bg-card-bg rounded-2xl overflow-hidden shadow-[0_2px_8px_rgba(0,0,0,0.04)] hover:shadow-[0_8px_24px_rgba(0,0,0,0.08)] border border-white/50 transition-all duration-300 flex flex-col grayscale-[30%] hover:grayscale-0">
<div class="relative h-48 overflow-hidden">
<div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-105" data-alt="Interior of a rustic cottage kitchen" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDrPCuzzhK0Yx2baLDkisz3bduDzPyMEneoLvJ2gqOhqVdxN59NuKkW-3zZNE9Hmb0EKla46deqlFe60DXZSVkBV4lN2YeiCtuT32YluhVDjsbfY1Ush9aSyd6t6VQbxtPyzXChqAu5hOmOn0_0AwH7S1eXmPQuYCTMhyJU5N6c3ab1aOO0gIrLWNxlqIcjPTN5HT8GRTclZXQqJ_DDj5GbAIK4-csR-RFefS39CDTQ3rLyHOZEcH_TBO8U58Txm-5uUPPLZuYCmEg");'>
</div>
<div class="absolute top-3 left-3">
<span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-md bg-gray-100/95 backdrop-blur-sm text-xs font-bold text-gray-600 shadow-sm border border-gray-200">
<span class="material-symbols-outlined text-[14px]">done_all</span>
                        Completed
                    </span>
</div>
</div>
<div class="p-5 flex flex-col flex-1 gap-3">
<div class="flex justify-between items-start">
<div>
<h3 class="text-lg font-bold text-text-main leading-tight group-hover:text-primary transition-colors">Historic Cottage</h3>
<p class="text-sm text-text-main/70">Savannah, GA</p>
</div>
<div class="bg-cover bg-center size-10 rounded-full border-2 border-white shadow-sm" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBFVmLzafcS4dKz8Qej6Zyvyp0tcDVWi618Da5aEE-J3oQm8QStpeHfOPp7gZYRziCoGqR5nZ9I20kh8-LdAaezfsgqUV0ZYyZtEFMg9cnkqOWZ7pC5k8874TOOHruFpAp-c7WfRNyyzwS4kJA8gXIwx5K86WULCHSFB3bb6mT3NvnZeFigq53zBOGfQ-9I3tU-na7_hiO2qGMqC6yLl_JoHme_QxgKrVw04zzh4AUKqA8ErtnT0RU-wboX3he86Krm64LxlyyGhSI");'></div>
</div>
<div class="bg-gray-50 rounded-lg p-3 flex flex-col gap-2 mt-1">
<div class="flex justify-between text-sm">
<span class="text-text-main/60">Dates</span>
<span class="font-semibold text-text-main/80">Aug 01 - Aug 05, 2023</span>
</div>
</div>
<div class="mt-auto pt-3 flex items-center justify-between border-t border-gray-100">
<div class="flex items-center gap-1 text-text-main/60 text-sm font-medium">
<span class="material-symbols-outlined text-[18px] text-yellow-500 fill-current">star</span>
<span>4.0 - You rated</span>
</div>
<button class="text-sm font-semibold text-primary hover:text-primary/80 transition-colors">
                        Book Again
                    </button>
</div>
</div>
</div>
<a class="group relative flex flex-col items-center justify-center gap-4 bg-gradient-to-br from-primary/10 to-primary/5 rounded-2xl border border-primary/20 h-full min-h-[350px] hover:shadow-md transition-all duration-300" href="#">
<div class="size-16 rounded-full bg-white flex items-center justify-center shadow-sm group-hover:scale-110 transition-transform duration-300 text-primary">
<span class="material-symbols-outlined text-3xl">explore</span>
</div>
<div class="text-center px-6">
<p class="text-lg font-bold text-text-main group-hover:text-primary transition-colors">Where to next?</p>
<p class="text-sm text-text-main/60 mt-1">Discover homes for your next adventure</p>
<span class="inline-block mt-4 px-4 py-2 bg-primary text-white text-sm font-bold rounded-lg shadow-lg shadow-primary/20 hover:bg-primary/90 transition-colors">
                    Start Searching
                </span>
</div>
</a>
</div>
<div class="mt-12 flex justify-center">
<nav class="flex items-center gap-2">
<a class="size-10 flex items-center justify-center rounded-lg border border-transparent text-text-main/60 hover:bg-white hover:shadow-sm transition-all disabled:opacity-50" href="#">
<span class="material-symbols-outlined">chevron_left</span>
</a>
<a class="size-10 flex items-center justify-center rounded-lg bg-primary text-white font-bold shadow-md shadow-primary/20" href="#">1</a>
<a class="size-10 flex items-center justify-center rounded-lg border border-transparent text-text-main hover:bg-white hover:shadow-sm transition-all" href="#">2</a>
<span class="text-text-main/40 px-2">...</span>
<a class="size-10 flex items-center justify-center rounded-lg border border-transparent text-text-main/60 hover:bg-white hover:shadow-sm transition-all" href="#">
<span class="material-symbols-outlined">chevron_right</span>
</a>
</nav>
</div>
</main>

</body></html>
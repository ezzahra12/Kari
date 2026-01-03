<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Rental Details Page</title>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#b9857e",
                        "background-light": "#faeded", /* User requested specific background */
                        "background-dark": "#1c1716",
                        "card-light": "#fdfbf9",
                        "text-main": "#585453",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: {"DEFAULT": "0.5rem", "lg": "0.75rem", "xl": "1rem", "full": "9999px"},
                },
            },
        }
    </script>
<style>
        body { font-family: 'Inter', sans-serif; }
        /* Custom scrollbar for better aesthetics */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: transparent; }
        ::-webkit-scrollbar-thumb { background: #d1d5db; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #9ca3af; }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-text-main dark:text-gray-200">
<!-- Navbar -->
<header class="sticky top-0 z-50 w-full bg-card-light dark:bg-gray-900 border-b border-gray-200 dark:border-gray-800 shadow-sm">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="flex justify-between items-center h-20">

<!-- Logo -->
<div class="flex items-center gap-3 text-text-dark dark:text-white cursor-pointer">
<div class="size-8 text-primary">
<svg class="w-full h-full" fill="none" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
<path clip-rule="evenodd" d="M24 18.4228L42 11.475V34.3663C42 34.7796 41.7457 35.1504 41.3601 35.2992L24 42V18.4228Z" fill="currentColor" fill-rule="evenodd"></path>
<path clip-rule="evenodd" d="M24 8.18819L33.4123 11.574L24 15.2071L14.5877 11.574L24 8.18819ZM9 15.8487L21 20.4805V37.6263L9 32.9945V15.8487ZM27 37.6263V20.4805L39 15.8487V32.9945L27 37.6263ZM25.354 2.29885C24.4788 1.98402 23.5212 1.98402 22.646 2.29885L4.98454 8.65208C3.7939 9.08038 3 10.2097 3 11.475V34.3663C3 36.0196 4.01719 37.5026 5.55962 38.098L22.9197 44.7987C23.6149 45.0671 24.3851 45.0671 25.0803 44.7987L42.4404 38.098C43.9828 37.5026 45 36.0196 45 34.3663V11.475C45 10.2097 44.2061 9.08038 43.0155 8.65208L25.354 2.29885Z" fill="currentColor" fill-rule="evenodd"></path>
</svg>
</div>
<h2 class="text-xl font-bold tracking-tight">StayWithUs</h2>
</div>
<!-- Search Bar (Simplified for Details Page) -->
<div class="hidden md:flex items-center bg-white dark:bg-gray-800 rounded-full border border-gray-300 dark:border-gray-700 p-2 shadow-sm hover:shadow-md transition-shadow cursor-pointer">
<div class="px-4 text-sm font-medium border-r border-gray-300 dark:border-gray-700">Anywhere</div>
<div class="px-4 text-sm font-medium border-r border-gray-300 dark:border-gray-700">Any week</div>
<div class="px-4 text-sm text-gray-500 font-normal">Add guests</div>
<div class="bg-primary text-white p-2 rounded-full">
<span class="material-symbols-outlined !text-[16px] block">search</span>
</div>
</div>
<!-- User Menu -->
<div class="flex items-center gap-4">
<a class="text-sm font-medium hover:bg-gray-100 dark:hover:bg-gray-800 px-3 py-2 rounded-full transition-colors hidden sm:block" href="#">Become a host</a>
<button class="p-2 hover:bg-gray-100 dark:hover:bg-gray-800 rounded-full transition-colors">
<span class="material-symbols-outlined">language</span>
</button>
<div class="flex items-center gap-2 border border-gray-300 dark:border-gray-700 rounded-full p-1 pl-3 hover:shadow-md transition-shadow cursor-pointer bg-white dark:bg-gray-800">
<span class="material-symbols-outlined">menu</span>
<div class="w-8 h-8 bg-gray-300 rounded-full bg-cover bg-center" data-alt="User profile avatar" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuALlx4ZAl7kSZJThQ6VDn0OldMN9uR-J37lK3EYOzDAUEeqJJR9efWbt_eB4CWcgq14mXYa4RypWvKhwglkY_V6u4-4axqY99Vb_bKUdH2DFNiqVceQL02boD0UreK96SkvWmMIqGqAS_VpjcU6TwWMoCFAJLdoMvr0j5evv0zhBb1z98XYcdTN6_dUZRr-9FwAwRroBXeNsfkbO-S0t5meFTAbJDFHLJqpEFP_ni6CDzq0Axa94nspOEQd3UnLnsyC24aasoUjgmY');"></div>
</div>
</div>
</div>
</div>
</header>
<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
<!-- Breadcrumbs & Title Header -->
<div class="mb-6">
<div class="flex items-center gap-2 text-sm text-gray-500 dark:text-gray-400 mb-2">
<a class="hover:underline" href="#">United States</a>
<span class="text-xs">•</span>
<a class="hover:underline" href="#">North Carolina</a>
<span class="text-xs">•</span>
<span>Asheville</span>
</div>
<h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-2">Cozy A-Frame Cabin in the Woods</h1>
<div class="flex justify-between items-end flex-wrap gap-4">
<div class="flex items-center gap-4 text-sm font-medium">
<span class="flex items-center gap-1">
<span class="material-symbols-outlined fill text-primary !text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="text-gray-900 dark:text-white">4.95</span>
<span class="underline decoration-gray-400 cursor-pointer text-gray-900 dark:text-white">(128 reviews)</span>
</span>
<span class="text-gray-400">•</span>
<span class="flex items-center gap-1">
<span class="material-symbols-outlined text-primary !text-[18px]">verified</span>
<span class="text-gray-500 dark:text-gray-400">Superhost</span>
</span>
<span class="text-gray-400">•</span>
<span class="underline decoration-gray-400 cursor-pointer text-gray-900 dark:text-white font-semibold">Asheville, North Carolina, United States</span>
</div>
<div class="flex gap-4">
<button class="flex items-center gap-2 hover:bg-gray-100 dark:hover:bg-gray-800 px-3 py-2 rounded-lg transition-colors text-sm font-medium underline">
<span class="material-symbols-outlined !text-[18px]">ios_share</span>
                        Share
                    </button>
<button class="flex items-center gap-2 hover:bg-gray-100 dark:hover:bg-gray-800 px-3 py-2 rounded-lg transition-colors text-sm font-medium underline group">
<span class="material-symbols-outlined !text-[18px] group-hover:text-primary transition-colors">favorite</span>
                        Save
                    </button>
</div>
</div>
</div>
<!-- Image Gallery Grid -->
<div class="grid grid-cols-1 md:grid-cols-4 grid-rows-2 gap-2 h-[400px] md:h-[480px] rounded-xl overflow-hidden mb-12 relative group/gallery">
<!-- Main Image -->
<div class="col-span-1 md:col-span-2 row-span-2 bg-gray-200 cursor-pointer relative overflow-hidden group/item">
<div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover/item:scale-105" data-alt="Cozy cabin living room with fireplace" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuB7dVcoEZBOI17Li5m5lHQEMH8rxgwews0q8mAqa-J0tvxIFJGusdVNk33iWhQkYM5XM_NDP6mq5i0pUr6LU0cUz8r1Tu7XhZxtX_iBu63O3hYs_TsvytvogYa3IiMlBOcYyxo4yyy4ylf3O-1ibpDZZgckAxXavxCvdi1cdRYQlOMbIQqAVm3cWZ9NoHzQzNe3eH_aUyS5iYb9Mb2SReE0mcrdFyHgHturHHdyS2bG2G_Igl09P2kaDS6IZ9dfnYfy8hVXG5L_GoM');"></div>
<div class="absolute inset-0 bg-black/10 group-hover/item:bg-transparent transition-colors"></div>
</div>
<!-- Secondary Images -->
<div class="hidden md:block bg-gray-200 cursor-pointer relative overflow-hidden group/item">
<div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover/item:scale-105" data-alt="Modern rustic kitchen interior" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBnLZOORil0oj3hcGwpWdEtsnxd__yex6MDjbjDqcVNwEpM3YkumxuIdMg9u7WS-j1vOkVD1s38XCVpuEmtkQcA2IRcMlDDTWTbppRrFJRPGdoaJPCVdVL61my6Ig0eBCu6vwdlHbny5JxgYmv998MsbRLXjWZqsXkL2bvEvNT5MnfFrIJIzZvSou7OcSS6P1bjMJzd_SBBfDdfRauRWRMjR8Xab3hRGUDuigW-LfSPcb1nNNp4lmsmxaG5HaU047qWh_OW6jmuI1g');"></div>
<div class="absolute inset-0 bg-black/10 group-hover/item:bg-transparent transition-colors"></div>
</div>
<div class="hidden md:block bg-gray-200 cursor-pointer relative overflow-hidden group/item">
<div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover/item:scale-105" data-alt="Bedroom with large window and forest view" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDXbAIEUwEtaYyBt1rf1K-J7aO5H43K8vhQ4erijEElmCs0XR3zU9rUtuHjULbjsPMbaRW9T9_slS9HYEZrGH_43F3wMqkbDIFHyfLC7iMehVanSJ3UXv0iQSNUPLHyxFRzljhwMctQm70U1YapZ87OGKZZarjlFZHIZ8Jo5xhaCo4by8uuXRsrT6hAhO4aMJuuJH84Fgs3Ez1Ud5MNu1gxX7VqDj0DeOy7a5dPaQocOrB_j7iMIGkH6Hlc7AG3X9RVvncBvwTSgFM');"></div>
<div class="absolute inset-0 bg-black/10 group-hover/item:bg-transparent transition-colors"></div>
</div>
<div class="hidden md:block bg-gray-200 cursor-pointer relative overflow-hidden group/item">
<div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover/item:scale-105" data-alt="Bathroom with freestanding tub" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAs1kCV8f9XZUXlH7ZPEXbOqEnQMImj_NgtQnkIXI_kM3RKc98chisjEcvzjDMFiW-c4dJrD2NBOTSEH5Am5I421rPihfPwvF-RqB-zEVszzWY52pbsiLATr3_1pDUVaDQ5kMItw1NJD467meHUaEXz6AFtbG7Bgsp7JGlWyzCrbih3jLPIrhThseHp80GQjb21E2wa_GB-j_KUTtH4GMa14B-TV4HQrMRdU3bWSoNBuFBROrXXx-yMBdVqGkQC7GKpILtZ1EethBw');"></div>
<div class="absolute inset-0 bg-black/10 group-hover/item:bg-transparent transition-colors"></div>
</div>
<div class="hidden md:block bg-gray-200 cursor-pointer relative overflow-hidden group/item">
<div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover/item:scale-105" data-alt="Outdoor deck with seating area" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCxPkorLuhST0w0s9Qp3Y9wGAjuS65h8XFwfmkTl-dljbeCHJUPnHTSbEcEihAegRWIe7qWT6siPQvXryE5AEmVsBeD93CdQtEjY4yOLF36UTlpaApNFFGsZiBeeOq5XMj8XKP3p9LSsKhYnXqFf4wZTY7Vdi2s9QpxoKpAJ326Sn0aixiIVbV6QpDHojlKZOdNvxl0T40TaArTxyFMadPftbzstrHRvl-kY9llX_7pyVvBrOSXnnHWm_s019r9RNJcpd2CflwKbiA');"></div>
<div class="absolute inset-0 bg-black/10 group-hover/item:bg-transparent transition-colors"></div>
</div>
<button class="absolute bottom-4 right-4 bg-white/90 dark:bg-black/70 hover:bg-white dark:hover:bg-black text-gray-900 dark:text-white px-4 py-2 rounded-lg text-sm font-medium shadow-md border border-gray-900/10 dark:border-white/10 flex items-center gap-2 transition-all">
<span class="material-symbols-outlined !text-[18px]">grid_view</span>
                Show all photos
            </button>
</div>
<!-- Main Content Layout -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-12 relative">
<!-- Left Column: Details -->
<div class="lg:col-span-2 space-y-8">
<!-- Host Info Header -->
<div class="flex justify-between items-center pb-6 border-b border-gray-200 dark:border-gray-800">
<div>
<h2 class="text-2xl font-semibold text-gray-900 dark:text-white">Entire cabin hosted by Sarah</h2>
<p class="text-gray-500 dark:text-gray-400 mt-1">4 guests • 2 bedrooms • 2 beds • 1 bath</p>
</div>
<div class="relative">
<div class="w-14 h-14 rounded-full bg-cover bg-center border-2 border-white dark:border-gray-800 shadow-sm" data-alt="Host Sarah portrait" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBO-4ub6J_QHu7x0SBWoDTBj5FbZt38GGTrRYdLuwQ2SquaCw3AebQzhmCoZrbkDfvbpgUzdrS7-nY252g8fQ8ThCyDmA_RffDuH8GhanmWIT04tdNwcN-AQst_j9dDag3vgowg9tB1S9wd6CvXfQidwTp-X7AefFyk9OOPQY_xjOuTcMGZhy5OVUv7GA94P-KdA0sSqwxeDJJhG_xD1aiXTx6zW0mly5tf8XTiHHNMsbAiEcQSouxFzIEgvnqAmaDwblv72XP_smg');"></div>
<div class="absolute -bottom-1 -right-1 bg-white dark:bg-gray-800 p-1 rounded-full shadow-sm">
<span class="material-symbols-outlined text-primary !text-[16px] block">verified_user</span>
</div>
</div>
</div>
<!-- Highlights -->
<div class="space-y-6 pb-6 border-b border-gray-200 dark:border-gray-800">
<div class="flex gap-4">
<span class="material-symbols-outlined !text-[28px] text-gray-600 dark:text-gray-300">desk</span>
<div>
<h3 class="font-semibold text-gray-900 dark:text-white">Dedicated workspace</h3>
<p class="text-gray-500 dark:text-gray-400 text-sm">A common area with wifi that’s well-suited for working.</p>
</div>
</div>
<div class="flex gap-4">
<span class="material-symbols-outlined !text-[28px] text-gray-600 dark:text-gray-300">sensor_door</span>
<div>
<h3 class="font-semibold text-gray-900 dark:text-white">Self check-in</h3>
<p class="text-gray-500 dark:text-gray-400 text-sm">Check yourself in with the lockbox.</p>
</div>
</div>
<div class="flex gap-4">
<span class="material-symbols-outlined !text-[28px] text-gray-600 dark:text-gray-300">location_on</span>
<div>
<h3 class="font-semibold text-gray-900 dark:text-white">Great location</h3>
<p class="text-gray-500 dark:text-gray-400 text-sm">95% of recent guests gave the location a 5-star rating.</p>
</div>
</div>
</div>
<!-- Description -->
<div class="pb-6 border-b border-gray-200 dark:border-gray-800">
<p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                        Escape to this charming A-frame cabin nestled in the heart of the Blue Ridge Mountains. Just 15 minutes from downtown Asheville, our cozy retreat offers the perfect blend of rustic charm and modern amenities. 
                        <br/><br/>
                        Wake up to birdsong and enjoy your morning coffee on the spacious deck overlooking the forest. The open-concept living area features a wood-burning fireplace, perfect for chilly evenings...
                    </p>
<button class="mt-4 flex items-center gap-1 font-semibold underline text-gray-900 dark:text-white hover:text-primary transition-colors">
                        Show more
                        <span class="material-symbols-outlined !text-[18px]">chevron_right</span>
</button>
</div>
<!-- Amenities -->
<div class="pb-6 border-b border-gray-200 dark:border-gray-800">
<h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-6">What this place offers</h3>
<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
<div class="flex items-center gap-3 text-gray-600 dark:text-gray-300">
<span class="material-symbols-outlined">wifi</span>
<span>Fast Wifi - 300 Mbps</span>
</div>
<div class="flex items-center gap-3 text-gray-600 dark:text-gray-300">
<span class="material-symbols-outlined">local_parking</span>
<span>Free driveway parking</span>
</div>
<div class="flex items-center gap-3 text-gray-600 dark:text-gray-300">
<span class="material-symbols-outlined">hot_tub</span>
<span>Private hot tub</span>
</div>
<div class="flex items-center gap-3 text-gray-600 dark:text-gray-300">
<span class="material-symbols-outlined">kitchen</span>
<span>Kitchen</span>
</div>
<div class="flex items-center gap-3 text-gray-600 dark:text-gray-300">
<span class="material-symbols-outlined">ac_unit</span>
<span>Central air conditioning</span>
</div>
<div class="flex items-center gap-3 text-gray-600 dark:text-gray-300">
<span class="material-symbols-outlined">pets</span>
<span>Pets allowed</span>
</div>
</div>
<button class="mt-8 border border-gray-900 dark:border-gray-100 rounded-lg px-6 py-3 font-semibold text-gray-900 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors">
                        Show all 32 amenities
                    </button>
</div>
<!-- Calendar/Availability Placeholder -->
<div class="pb-6 border-b border-gray-200 dark:border-gray-800">
<h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">5 nights in Asheville</h3>
<p class="text-gray-500 text-sm mb-6">Nov 15, 2023 - Nov 20, 2023</p>
<div class="bg-card-light dark:bg-gray-800 p-6 rounded-xl border border-gray-200 dark:border-gray-700 flex items-center justify-center min-h-[300px]">
<!-- Abstract Calendar representation -->
<div class="text-center text-gray-400">
<span class="material-symbols-outlined !text-6xl mb-2">calendar_month</span>
<p>Interactive Calendar Component</p>
</div>
</div>
</div>
</div>
<!-- Right Column: Sticky Booking Card -->
<div class="lg:col-span-1 relative">
<div class="sticky top-28 w-full">
<div class="bg-card-light dark:bg-gray-900 rounded-xl border border-gray-200 dark:border-gray-800 shadow-xl p-6">
<div class="flex justify-between items-end mb-6">
<div>
<span class="text-2xl font-bold text-gray-900 dark:text-white">$150</span>
<span class="text-gray-500 dark:text-gray-400"> night</span>
</div>
<div class="flex items-center gap-1 text-sm">
<span class="material-symbols-outlined fill text-primary !text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="font-semibold text-gray-900 dark:text-white">4.95</span>
<span class="text-gray-400">·</span>
<span class="text-gray-500 underline cursor-pointer">128 reviews</span>
</div>
</div>
<!-- Date Picker Inputs -->
<div class="border border-gray-400 rounded-lg overflow-hidden mb-4">
<div class="flex border-b border-gray-400">
<div class="flex-1 p-3 border-r border-gray-400 relative hover:bg-gray-100 dark:hover:bg-gray-800 cursor-pointer transition-colors">
<label class="block text-[10px] uppercase font-bold text-gray-800 dark:text-gray-200">Check-in</label>
<input class="w-full bg-transparent border-none p-0 text-sm text-gray-600 focus:ring-0 placeholder:text-gray-400 cursor-pointer" placeholder="Add date" type="text"/>
</div>
<div class="flex-1 p-3 relative hover:bg-gray-100 dark:hover:bg-gray-800 cursor-pointer transition-colors">
<label class="block text-[10px] uppercase font-bold text-gray-800 dark:text-gray-200">Check-out</label>
<input class="w-full bg-transparent border-none p-0 text-sm text-gray-600 focus:ring-0 placeholder:text-gray-400 cursor-pointer" placeholder="Add date" type="text"/>
</div>
</div>
<div class="p-3 relative hover:bg-gray-100 dark:hover:bg-gray-800 cursor-pointer transition-colors flex justify-between items-center">
<div>
<label class="block text-[10px] uppercase font-bold text-gray-800 dark:text-gray-200">Guests</label>
<div class="text-sm text-gray-600">1 guest</div>
</div>
<span class="material-symbols-outlined !text-[20px] text-gray-500">expand_more</span>
</div>
</div>
<button class="w-full bg-primary hover:bg-[#a06d66] text-white font-semibold py-3.5 rounded-lg transition-colors text-lg mb-4 shadow-sm">
                            Reserve
                        </button>
<div class="text-center text-sm text-gray-500 mb-6">You won't be charged yet</div>
<div class="space-y-4 text-gray-600 dark:text-gray-300">
<div class="flex justify-between">
<span class="underline decoration-gray-300">
                                    $150 x 5 nights
                                </span>
<span>$750</span>
</div>
<div class="flex justify-between">
<span class="underline decoration-gray-300">Cleaning fee</span>
<span>$65</span>
</div>
<div class="flex justify-between">
<span class="underline decoration-gray-300">Service fee</span>
<span>$115</span>
</div>
</div>
<div class="mt-6 pt-6 border-t border-gray-200 dark:border-gray-800 flex justify-between font-bold text-lg text-gray-900 dark:text-white">
<span>Total before taxes</span>
<span>$930</span>
</div>
</div>
<div class="mt-4 flex justify-center gap-2 items-center text-gray-500 text-sm">
<span class="material-symbols-outlined !text-[16px]">flag</span>
<a class="underline hover:text-gray-800" href="#">Report this listing</a>
</div>
</div>
</div>
</div>
<!-- Reviews Section -->
<div class="py-12 border-t border-gray-200 dark:border-gray-800 mt-8">
<div class="flex items-center gap-2 mb-8">
<span class="material-symbols-outlined fill text-primary !text-[28px]" style="font-variation-settings: 'FILL' 1;">star</span>
<h2 class="text-2xl font-bold text-gray-900 dark:text-white">4.95 · 128 reviews</h2>
</div>
<!-- Review Ratings Grid (Simplified) -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-4 mb-8">
<div class="flex items-center justify-between">
<span class="text-gray-600 dark:text-gray-300">Cleanliness</span>
<div class="flex items-center gap-3 w-1/2">
<div class="h-1 bg-gray-200 dark:bg-gray-700 rounded-full flex-1 overflow-hidden">
<div class="h-full bg-primary w-[98%] rounded-full"></div>
</div>
<span class="text-sm font-semibold text-gray-900 dark:text-white">4.9</span>
</div>
</div>
<div class="flex items-center justify-between">
<span class="text-gray-600 dark:text-gray-300">Communication</span>
<div class="flex items-center gap-3 w-1/2">
<div class="h-1 bg-gray-200 dark:bg-gray-700 rounded-full flex-1 overflow-hidden">
<div class="h-full bg-primary w-[100%] rounded-full"></div>
</div>
<span class="text-sm font-semibold text-gray-900 dark:text-white">5.0</span>
</div>
</div>
<div class="flex items-center justify-between">
<span class="text-gray-600 dark:text-gray-300">Check-in</span>
<div class="flex items-center gap-3 w-1/2">
<div class="h-1 bg-gray-200 dark:bg-gray-700 rounded-full flex-1 overflow-hidden">
<div class="h-full bg-primary w-[99%] rounded-full"></div>
</div>
<span class="text-sm font-semibold text-gray-900 dark:text-white">5.0</span>
</div>
</div>
<div class="flex items-center justify-between">
<span class="text-gray-600 dark:text-gray-300">Accuracy</span>
<div class="flex items-center gap-3 w-1/2">
<div class="h-1 bg-gray-200 dark:bg-gray-700 rounded-full flex-1 overflow-hidden">
<div class="h-full bg-primary w-[96%] rounded-full"></div>
</div>
<span class="text-sm font-semibold text-gray-900 dark:text-white">4.8</span>
</div>
</div>
</div>
<!-- Reviews List -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-x-16 gap-y-10">
<!-- Review 1 -->
<div>
<div class="flex items-center gap-4 mb-4">
<div class="w-12 h-12 rounded-full bg-cover bg-center bg-gray-200" data-alt="Reviewer Avatar" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDHnZ-2-X3MZTm89brRWa3FMtzCnYdZto0fRigcqA3WPlCskQ2bZTvMPFa_Bw0cOv1eMkY661BxOHsAr_A5_v67cjXkDzQeY0-ZsTXN10ypJ7fy-tfkKFBLlVC-BAc8fd5ZSR0JUuILOsIdleq2WP9IxpI_dfrQb7z5Vp2V6NciV0HE6dZu_xPLuQeTkVIExYNJuYGkyJl3mG4_e2fSSnklMt1UrSwp0sNgfha_xOQzZF3lA5cggh_GPw1gfHb8rNo_6yoS9j9wi44');"></div>
<div>
<h4 class="font-semibold text-gray-900 dark:text-white">Alice</h4>
<span class="text-sm text-gray-500">October 2023</span>
</div>
</div>
<p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                        We had an absolutely wonderful time at Sarah's cabin! The location was perfect—secluded enough to feel like a getaway but close enough to Asheville for day trips. The hot tub was the highlight!
                    </p>
</div>
<!-- Review 2 -->
<div>
<div class="flex items-center gap-4 mb-4">
<div class="w-12 h-12 rounded-full bg-cover bg-center bg-gray-200" data-alt="Reviewer Avatar" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCiL2lFF2pVNBuYNcMmOR0uyNkD6IjOG3rnF8jzmKkH22jlnDnupSJ8XasDcNqW7tdaAyWQtMRcEyeMmNRIQeb2AuG728wnXhXUVi3tCyAjPXaaWiTVEoYwEC07cCqyQvXqH9GkaNoSeLsOpsn6MhDQ_Lh__N0dY44_xJtb1Co0jXItGMsvZSn-4MrBiBY1K-1JFXOrv5gQF7Ws5Rfo9NBmpTdcEHMnR0AarAc640eXsLQ3I4Fp4TCAguEGHbLMjj584WUUu545FC0');"></div>
<div>
<h4 class="font-semibold text-gray-900 dark:text-white">James</h4>
<span class="text-sm text-gray-500">September 2023</span>
</div>
</div>
<p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                        The A-frame is stunning. Exactly as pictured. The kitchen was well-stocked for cooking, and the fireplace made the evenings so cozy. Highly recommend!
                    </p>
</div>
<!-- Review 3 -->
<div>
<div class="flex items-center gap-4 mb-4">
<div class="w-12 h-12 rounded-full bg-cover bg-center bg-gray-200" data-alt="Reviewer Avatar" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBFDm7kJ-NYhldPUQ6uoLpQerKsM60p5AWItSW05oJ3stwdcxYEY0BTDWE8X7spo0iLLjJ8kRQw0oV0aqftbY558zVHLGsBpdyVjwyqtL4Ad2Rqjw3zjm8zSQu2HxAdxDuEmiFwS_gQ_WMmI30dzYccegskf-2NBMY0huySarWj38aq0HC7UIRbI1lbP7F_7KAPVhEQF61KI477EjBmdoW8Lq7T4JdMcF3D91SdeRFr47v_obNTxehxMzd9RSy5OCwNClSMLCjIWOU');"></div>
<div>
<h4 class="font-semibold text-gray-900 dark:text-white">Emily</h4>
<span class="text-sm text-gray-500">September 2023</span>
</div>
</div>
<p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                        Sarah was a fantastic host, very responsive and helpful. The cabin was spotless upon arrival. We loved waking up to the view of the trees.
                    </p>
</div>
<!-- Review 4 -->
<div>
<div class="flex items-center gap-4 mb-4">
<div class="w-12 h-12 rounded-full bg-cover bg-center bg-gray-200" data-alt="Reviewer Avatar" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuD2rN2zYLrnKetC3bLDeUPlK3gozdR_9NGNYE_dqWEy_KhCfj66cnqzHV_PGZlU3DtGN6pncv0tIEcfVFgqNZWV5q_P5NVB20dHfl2N6YGNGGexkwSsbTVNfIt_hNSLvO7r9OsBWlOEXCRiFxFiYS0HrK8ycREo4UoQ_E6MNKfa5STpcu6oGh9qIeRlmwB-pLKExyoEO1jyCmThFuxUnz9vY0uur5mg0m5nZ-wSen-jLKalwHLYThOQAd7p2Yrzo4-sLkYSWL1rfrg');"></div>
<div>
<h4 class="font-semibold text-gray-900 dark:text-white">Michael</h4>
<span class="text-sm text-gray-500">August 2023</span>
</div>
</div>
<p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                       Great place for a weekend reset. The wifi was surprisingly fast for being in the woods, which was great since I had to take a few calls.
                    </p>
</div>
</div>
<div class="mt-10">
<button class="border border-gray-900 dark:border-gray-100 rounded-lg px-6 py-3 font-semibold text-gray-900 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors">
                    Show all 128 reviews
                </button>
</div>
<!-- Write a review section -->
<div class="mt-12 p-6 bg-card-light dark:bg-gray-900 rounded-xl border border-gray-200 dark:border-gray-800">
<h3 class="text-lg font-semibold mb-4 text-gray-900 dark:text-white">Add a review</h3>
<textarea class="w-full p-4 rounded-lg bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700 focus:ring-primary focus:border-primary mb-4" placeholder="Share your experience..." rows="4"></textarea>
<div class="flex justify-end">
<button class="bg-primary hover:bg-[#a06d66] text-white font-semibold py-2 px-6 rounded-lg transition-colors shadow-sm">
                        Submit Review
                    </button>
</div>
</div>
</div>
<!-- Host Section -->
<div class="py-12 border-t border-gray-200 dark:border-gray-800">
<div class="flex flex-col md:flex-row gap-8">
<div class="md:w-1/3">
<div class="bg-card-light dark:bg-gray-900 rounded-2xl p-6 shadow-lg border border-gray-100 dark:border-gray-800 flex items-center gap-4">
<div class="w-16 h-16 rounded-full bg-cover bg-center" data-alt="Host profile picture large" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAUYHiGVfU48pp3yLONJ0r9fqqI0vgRibdeIldMD5aK7OspFrmArm9X80v0gFbQ7joSZYlvw5sYFZyE_uFIIwNhgBHDTFW6_98G1fa-fxAcHNQywZnSfHFcn4tNHgpqixUYr3S_RFUEfZrSCWgHdPI7i-EUxY3IEas0m-rA4grVAYaSSt7lXlId-xNJzj4msdtTHbByFDnreyrRyQ-bn3E1Tm7lbbi7DHsdmBTHwwWdfjMPIIL5wfO49RSrfKiufeqzH_Er5CgD7AQ');"></div>
<div>
<h3 class="text-xl font-bold text-gray-900 dark:text-white">Sarah</h3>
<p class="text-sm text-gray-500">Superhost</p>
</div>
</div>
<div class="mt-6 space-y-3">
<div class="flex items-center gap-3 text-gray-600 dark:text-gray-300">
<span class="material-symbols-outlined text-primary">reviews</span>
<span>156 Reviews</span>
</div>
<div class="flex items-center gap-3 text-gray-600 dark:text-gray-300">
<span class="material-symbols-outlined text-primary">verified</span>
<span>Identity verified</span>
</div>
</div>
</div>
<div class="md:w-2/3">
<h3 class="text-lg font-semibold mb-2 text-gray-900 dark:text-white">Sarah is a Superhost</h3>
<p class="text-gray-600 dark:text-gray-300 mb-6 max-w-xl">Superhosts are experienced, highly rated hosts who are committed to providing great stays for guests.</p>
<h3 class="text-lg font-semibold mb-2 text-gray-900 dark:text-white">Host details</h3>
<p class="text-gray-600 dark:text-gray-300 mb-6 text-sm">Response rate: 100%<br/>Response time: within an hour</p>
<button class="border border-gray-900 dark:border-gray-100 rounded-lg px-6 py-3 font-semibold text-gray-900 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors">
                        Contact Host
                    </button>
</div>
</div>
</div>
<!-- Location Map Placeholder -->
<div class="py-12 border-t border-gray-200 dark:border-gray-800">
<h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Where you'll be</h2>
<div class="w-full h-[480px] bg-gray-200 rounded-xl overflow-hidden relative group">
<div class="w-full h-full bg-cover bg-center" data-alt="Map of Asheville area showing general location" data-location="Asheville, North Carolina" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuC2kFeNq7qnh8bZqUk0_nmadnPY_vfqlf6G5SN03lvAILByg7U71dXF0nPS2a-yMRSi_MRmGJ8DABD8esPOFRc_Aw9LNDH_0F-m8GNzd2f4dAmvyE83K3hO3pKqJUVdxU2Fb_J279DzZkYu_CZgXAvbmTL84jhuRNzZSX8hLItmGav-QKTDjzEkLtE7mSflIiAJRbUNrDFGYVcaKzD4WcAllfGbSioJsHhPnvtoPnNZkfEYyPEZPyWStttFaTkkv-QKb0EAyppXwO0');"></div>
<div class="absolute inset-0 flex items-center justify-center pointer-events-none">
<div class="bg-primary text-white p-4 rounded-full shadow-lg transform -translate-y-4 group-hover:-translate-y-6 transition-transform">
<span class="material-symbols-outlined !text-[32px]">home</span>
</div>
</div>
</div>
<div class="mt-6">
<h3 class="font-semibold text-gray-900 dark:text-white mb-2">Asheville, North Carolina, United States</h3>
<p class="text-gray-600 dark:text-gray-300">The neighborhood is quiet and residential, with plenty of trees and wildlife. We are located on a private road, so there is very little traffic.</p>
</div>
</div>
</main>
<!-- Footer -->
<footer class="bg-card-light dark:bg-gray-900 border-t border-gray-200 dark:border-gray-800 py-12">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
<div>
<h4 class="font-bold text-gray-900 dark:text-white mb-4">Support</h4>
<ul class="space-y-3 text-sm text-gray-600 dark:text-gray-400">
<li><a class="hover:underline" href="#">Help Center</a></li>
<li><a class="hover:underline" href="#">AirCover</a></li>
<li><a class="hover:underline" href="#">Anti-discrimination</a></li>
<li><a class="hover:underline" href="#">Disability support</a></li>
<li><a class="hover:underline" href="#">Cancellation options</a></li>
</ul>
</div>
<div>
<h4 class="font-bold text-gray-900 dark:text-white mb-4">Hosting</h4>
<ul class="space-y-3 text-sm text-gray-600 dark:text-gray-400">
<li><a class="hover:underline" href="#">Airbnb your home</a></li>
<li><a class="hover:underline" href="#">AirCover for Hosts</a></li>
<li><a class="hover:underline" href="#">Hosting resources</a></li>
<li><a class="hover:underline" href="#">Community forum</a></li>
<li><a class="hover:underline" href="#">Hosting responsibly</a></li>
</ul>
</div>
<div>
<h4 class="font-bold text-gray-900 dark:text-white mb-4">Airbnb</h4>
<ul class="space-y-3 text-sm text-gray-600 dark:text-gray-400">
<li><a class="hover:underline" href="#">Newsroom</a></li>
<li><a class="hover:underline" href="#">New features</a></li>
<li><a class="hover:underline" href="#">Careers</a></li>
<li><a class="hover:underline" href="#">Investors</a></li>
<li><a class="hover:underline" href="#">Gift cards</a></li>
</ul>
</div>
<div>
<div class="flex items-center gap-2 mb-4 text-primary">
<span class="material-symbols-outlined !text-3xl">travel_explore</span>
<h1 class="text-lg font-bold tracking-tight">Staycation</h1>
</div>
<p class="text-sm text-gray-500 mb-4">Book unique homes and experiences all over the world.</p>
</div>
</div>
<div class="pt-8 border-t border-gray-200 dark:border-gray-800 flex flex-col md:flex-row justify-between items-center gap-4">
<div class="text-sm text-gray-500">
                    © 2023 Staycation, Inc. · <a class="hover:underline" href="#">Privacy</a> · <a class="hover:underline" href="#">Terms</a> · <a class="hover:underline" href="#">Sitemap</a>
</div>
<div class="flex gap-4 items-center">
<button class="flex items-center gap-1 text-sm font-semibold hover:underline">
<span class="material-symbols-outlined !text-[18px]">language</span>
                        English (US)
                    </button>
<button class="flex items-center gap-1 text-sm font-semibold hover:underline">
                        $ USD
                    </button>
<div class="flex gap-4 ml-4">
<a class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white transition-colors" href="#"><span class="material-symbols-outlined !text-[20px]">social_leaderboard</span></a>
<a class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white transition-colors" href="#"><span class="material-symbols-outlined !text-[20px]">photo_camera</span></a>
</div>
</div>
</div>
</div>
</footer>
</body></html>
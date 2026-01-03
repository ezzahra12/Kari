<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>StayHome - Find your perfect rental</title>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&amp;display=swap" rel="stylesheet"/>
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
                        "background-light": "#faeded", /* Modified to match user request */
                        "background-dark": "#1c1716",
                        "card-light": "#fdfbf9",
                        "text-main": "#585453",
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
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .icon-filled {
            font-variation-settings: 'FILL' 1, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-text-main font-display antialiased">
<div class="relative flex min-h-screen w-full flex-col overflow-x-hidden">
<!-- Header -->
<header class="sticky top-0 z-50 flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#e5e5e5] bg-white/90 backdrop-blur-md px-6 py-4 lg:px-20">
<div class="flex items-center gap-2 text-primary">
<span class="material-symbols-outlined text-4xl">cottage</span>
<h2 class="text-[#161313] text-xl font-black tracking-tight">StayHome</h2>
</div>
<div class="hidden md:flex items-center gap-10">
<a class="text-text-main hover:text-primary text-sm font-medium transition-colors" href="#">Home</a>
<a class="text-text-main hover:text-primary text-sm font-medium transition-colors" href="/Views/rentalsListing.view.php">Rentals</a>
</div>
<div class="flex items-center gap-3">
<button class="hidden lg:flex cursor-pointer items-center justify-center rounded-full h-10 px-6 text-text-main text-sm font-bold hover:bg-gray-100 transition-colors">
                    Become a Host
                </button>
<button class="flex cursor-pointer items-center justify-center overflow-hidden rounded-full h-10 px-6 bg-primary text-white text-sm font-bold shadow-sm hover:bg-primary/90 transition-colors">
<span class="truncate">Sign In</span>
</button>
</div>
</header>
<!-- Main Content -->
<main class="flex-1">
<!-- Hero Section -->
<section class="relative">
<div class="flex min-h-[560px] flex-col items-center justify-center p-4 text-center bg-cover bg-center" data-alt="Cozy living room with warm lighting and comfortable furniture" style='background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.5)), url("https://lh3.googleusercontent.com/aida-public/AB6AXuDpQ6zHB62vmZnSvz6MUpqkIXdoqM0BXWviyTt9hnV9_U1OAmqLwHTlRVTqZklXHgUa6rAUyh4VHt4qwXU2EWLKaZGUne7GLOtAj_LqDwnhLp4QIWrC-yl__ky2iWDDOl4MBUzJQYDuTTtyeLTIq5rvMME9-AxouzshqUmP35AjMYiunTBLJLopOtbXGF8o9JHTD9HwmJP14qNxtT1p7gHhLdn_NsXwJCzmVV6bPMJAS99xtfPBYCfvjfcsm2ZF8yGddRj5Qym5KtE");'>
<h1 class="text-white text-4xl md:text-6xl font-black leading-tight tracking-tight mb-4 drop-shadow-lg max-w-4xl">
                        Find your home away from home
                    </h1>
<h2 class="text-white/90 text-lg md:text-xl font-medium max-w-2xl mb-12 drop-shadow-md">
                        Discover unique stays, cabins, beach houses, and city apartments in over 190 countries.
                    </h2>
</div>
<!-- Floating Search Bar -->
<div class="relative -mt-24 px-4 pb-12 w-full flex justify-center z-10">
<div class="w-full max-w-5xl bg-white rounded-2xl shadow-xl border border-gray-100 p-6">
<form class="flex flex-col lg:flex-row gap-4 lg:items-end">
<!-- Location -->
<div class="flex-1">
<label class="block text-xs font-bold text-gray-500 uppercase tracking-wider mb-2">Location</label>
<div class="flex items-center bg-[#f7f7f6] rounded-lg h-12 px-4 border border-transparent focus-within:border-primary focus-within:ring-1 focus-within:ring-primary transition-all">
<span class="material-symbols-outlined text-gray-400 mr-2">search</span>
<input class="bg-transparent border-none w-full text-text-main placeholder-gray-400 focus:ring-0 text-sm font-medium" placeholder="Where are you going?" type="text"/>
</div>
</div>
<!-- Check-in/out -->
<div class="flex-1 min-w-[200px]">
<label class="block text-xs font-bold text-gray-500 uppercase tracking-wider mb-2">Dates</label>
<div class="flex items-center bg-[#f7f7f6] rounded-lg h-12 px-4 border border-transparent focus-within:border-primary focus-within:ring-1 focus-within:ring-primary transition-all">
<span class="material-symbols-outlined text-gray-400 mr-2">calendar_month</span>
<input class="bg-transparent border-none w-full text-text-main placeholder-gray-400 focus:ring-0 text-sm font-medium" placeholder="Add dates" type="text"/>
</div>
</div>
<!-- Guests -->
<div class="w-full lg:w-40">
<label class="block text-xs font-bold text-gray-500 uppercase tracking-wider mb-2">Guests</label>
<div class="flex items-center bg-[#f7f7f6] rounded-lg h-12 px-4 border border-transparent focus-within:border-primary focus-within:ring-1 focus-within:ring-primary transition-all">
<span class="material-symbols-outlined text-gray-400 mr-2">group</span>
<input class="bg-transparent border-none w-full text-text-main placeholder-gray-400 focus:ring-0 text-sm font-medium" placeholder="Add guests" type="number"/>
</div>
</div>
<!-- Search Button -->
<div class="w-full lg:w-auto">
<button class="flex items-center justify-center w-full lg:w-14 h-12 bg-primary hover:bg-primary/90 rounded-lg text-white shadow-md transition-all" type="button">
<span class="material-symbols-outlined">search</span>
</button>
</div>
</form>
<!-- Filters / Price Range -->
<div class="mt-6 pt-6 border-t border-gray-100">
<div class="flex flex-col md:flex-row items-center justify-between gap-4">
<div class="flex gap-4 overflow-x-auto pb-2 w-full md:w-auto no-scrollbar">
<button class="flex items-center gap-2 px-4 py-2 rounded-full bg-primary/10 text-primary text-sm font-bold whitespace-nowrap">
<span class="material-symbols-outlined text-[18px]">home</span> All
                                    </button>
<button class="flex items-center gap-2 px-4 py-2 rounded-full bg-[#f7f7f6] text-text-main hover:bg-gray-200 text-sm font-medium whitespace-nowrap transition-colors">
<span class="material-symbols-outlined text-[18px]">cabin</span> Cabins
                                    </button>
<button class="flex items-center gap-2 px-4 py-2 rounded-full bg-[#f7f7f6] text-text-main hover:bg-gray-200 text-sm font-medium whitespace-nowrap transition-colors">
<span class="material-symbols-outlined text-[18px]">beach_access</span> Beachfront
                                    </button>
<button class="flex items-center gap-2 px-4 py-2 rounded-full bg-[#f7f7f6] text-text-main hover:bg-gray-200 text-sm font-medium whitespace-nowrap transition-colors">
<span class="material-symbols-outlined text-[18px]">apartment</span> Urban
                                    </button>
</div>
<div class="w-full md:w-1/3 flex items-center gap-4">
<span class="text-xs font-bold text-gray-500 uppercase whitespace-nowrap">Price Range</span>
<div class="relative w-full h-1 bg-gray-200 rounded-full">
<div class="absolute left-[20%] right-[30%] h-full bg-primary rounded-full"></div>
<div class="absolute left-[20%] top-1/2 -translate-y-1/2 w-4 h-4 bg-white border-2 border-primary rounded-full shadow cursor-pointer"></div>
<div class="absolute right-[30%] top-1/2 -translate-y-1/2 w-4 h-4 bg-white border-2 border-primary rounded-full shadow cursor-pointer"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Featured Rentals -->
<section class="px-6 py-12 lg:px-20 max-w-[1400px] mx-auto">
<div class="flex items-center justify-between mb-8">
<div>
<h2 class="text-2xl font-bold text-[#161313]">Top Rated Rentals</h2>
<p class="text-text-main mt-1">Explore some of the best-reviewed stays this week.</p>
</div>
<a class="hidden sm:flex items-center gap-1 text-primary font-bold text-sm hover:underline" href="#">
                        View All <span class="material-symbols-outlined text-sm">arrow_forward</span>
</a>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
<!-- Card 1 -->
<div class="group cursor-pointer">
<div class="relative overflow-hidden rounded-xl aspect-[4/3] mb-3">
<img alt="Modern A-frame cabin in the woods" class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-500" data-alt="Modern wooden house exterior in forest" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB5V5lpf2hwAleDCBcA6h066FZSa4ysHeBMLIsqI7xVI0w71UKKKOsPTQ67Z8xVSr9ONaKlC38PdBzaciTzYCEQsl7IHZnjHRr5nhyJYw_bZiimyDHCWQ2Jn7qEwJUfxQH54rNA6_u0K-X2ZBlikyOpmrkMlsWf4Z2_Tt6YbvKmL28LsdZoKn-U8U6n7N_SuhIaN8h22H2aolFoFHyV-0FYHo13Cez6Anq4vCBKeSPIYCjEBrX4sBsAijndFYnC5aJi1NZ_AAb_OX0"/>
<button class="absolute top-3 right-3 p-2 rounded-full bg-white/70 hover:bg-white text-gray-700 hover:text-red-500 transition-colors backdrop-blur-sm">
<span class="material-symbols-outlined text-[20px]">favorite</span>
</button>
<div class="absolute bottom-3 left-3 px-3 py-1 rounded-md bg-white/90 text-xs font-bold backdrop-blur-sm shadow-sm">
                                Superhost
                            </div>
</div>
<div class="flex justify-between items-start">
<div>
<h3 class="font-bold text-[#161313] group-hover:text-primary transition-colors">Forest Retreat</h3>
<p class="text-sm text-gray-500">Aspen, Colorado</p>
</div>
<div class="flex items-center gap-1 text-sm font-bold">
<span class="material-symbols-outlined text-primary text-[18px] icon-filled">star</span>
                                4.95
                            </div>
</div>
<div class="mt-1 flex items-baseline gap-1">
<span class="font-bold text-lg text-[#161313]">$245</span>
<span class="text-gray-500 text-sm">/ night</span>
</div>
</div>
<!-- Card 2 -->
<div class="group cursor-pointer">
<div class="relative overflow-hidden rounded-xl aspect-[4/3] mb-3">
<img alt="Sunny beach house interior with ocean view" class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-500" data-alt="Bright living room overlooking the ocean" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAxplcMpV6xiROwpQFDntMmNaZkzM8OoRAaaj_I8_66Hj64_ReAQyNrb9_dMl6ghy0HfS3UghjtQjLcb6--7qGiuDvUI5hNmePOXgL79BRAwqlP_ANgft1fODNpjsp6oF970haW6_DmE-fO0G4PLxfRbXRTXj1uEmOyOE-ld31yJcT0DGBZofVbCPiQCrHu7fyPS99AB-s3DysFHp0YOZ-mzsCXv9WQl9X9WWB6xlhFyqUdPXn_BgeTpDvj_DyPEAYHUpRRnnBKvUQ"/>
<button class="absolute top-3 right-3 p-2 rounded-full bg-white/70 hover:bg-white text-gray-700 hover:text-red-500 transition-colors backdrop-blur-sm">
<span class="material-symbols-outlined text-[20px]">favorite</span>
</button>
</div>
<div class="flex justify-between items-start">
<div>
<h3 class="font-bold text-[#161313] group-hover:text-primary transition-colors">Ocean Villa</h3>
<p class="text-sm text-gray-500">Malibu, California</p>
</div>
<div class="flex items-center gap-1 text-sm font-bold">
<span class="material-symbols-outlined text-primary text-[18px] icon-filled">star</span>
                                4.82
                            </div>
</div>
<div class="mt-1 flex items-baseline gap-1">
<span class="font-bold text-lg text-[#161313]">$520</span>
<span class="text-gray-500 text-sm">/ night</span>
</div>
</div>
<!-- Card 3 -->
<div class="group cursor-pointer">
<div class="relative overflow-hidden rounded-xl aspect-[4/3] mb-3">
<img alt="Modern apartment interior with loft style" class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-500" data-alt="Loft apartment interior with large windows" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCmm0CHS-6tHVqpnvvFd-Q2soujkmF4hzTCgyboE5TJ5wNZPLV47LlenuZYOEYiCStPNUclwXX8a21D2jdjl3bVz6JcHBP4SWw-FFaEm26LQ1UFLK3KROPk7KWaWu2ZmGwOVymXUCpIhDpaV5_sLSleMOUTB4qERqqKutIoIma26Y825bxe0pl0Iqz7yU5MgmglixMcqfaUutGRnZOLL8J4kRVfCHYnO4Tr_dKkwpSsDnFz0UPaeuR5mlhe328QYS7NF6Nat55Aie8"/>
<button class="absolute top-3 right-3 p-2 rounded-full bg-white/70 hover:bg-white text-gray-700 hover:text-red-500 transition-colors backdrop-blur-sm">
<span class="material-symbols-outlined text-[20px]">favorite</span>
</button>
</div>
<div class="flex justify-between items-start">
<div>
<h3 class="font-bold text-[#161313] group-hover:text-primary transition-colors">Urban Loft</h3>
<p class="text-sm text-gray-500">New York, NY</p>
</div>
<div class="flex items-center gap-1 text-sm font-bold">
<span class="material-symbols-outlined text-primary text-[18px] icon-filled">star</span>
                                4.91
                            </div>
</div>
<div class="mt-1 flex items-baseline gap-1">
<span class="font-bold text-lg text-[#161313]">$185</span>
<span class="text-gray-500 text-sm">/ night</span>
</div>
</div>
<!-- Card 4 -->
<div class="group cursor-pointer">
<div class="relative overflow-hidden rounded-xl aspect-[4/3] mb-3">
<img alt="Cozy wooden cabin in winter snow" class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-500" data-alt="Snow covered cabin in winter forest" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBEAdxJqvdoOtjjunSZfPB1Hqs5pKPtQULunl2pYOFDR3X9CxT6FHAzeCuu9W-lc5J2P88mDKTeA7V0lyPXPjA4R4nWPZGBDHLyRlu4sMBPCBSb791s-S_lTAdPqbkdCwkgQlAcxb8-RAlhT4qg9by6EB8MeyA2xACShaFXc-yXbucV_xrDwI64nv5CGSUcp9QOK3mU1aX1FazjXuItC5UKZXGfht29L5N24Lv8nCClJ2Xr4FhygbpW8w0OWSwqJ_Ra3eQTtv7qA84"/>
<button class="absolute top-3 right-3 p-2 rounded-full bg-white/70 hover:bg-white text-gray-700 hover:text-red-500 transition-colors backdrop-blur-sm">
<span class="material-symbols-outlined text-[20px]">favorite</span>
</button>
<div class="absolute bottom-3 left-3 px-3 py-1 rounded-md bg-white/90 text-xs font-bold backdrop-blur-sm shadow-sm">
                                Rare Find
                            </div>
</div>
<div class="flex justify-between items-start">
<div>
<h3 class="font-bold text-[#161313] group-hover:text-primary transition-colors">Alpine Chalet</h3>
<p class="text-sm text-gray-500">Zermatt, Switzerland</p>
</div>
<div class="flex items-center gap-1 text-sm font-bold">
<span class="material-symbols-outlined text-primary text-[18px] icon-filled">star</span>
                                5.0
                            </div>
</div>
<div class="mt-1 flex items-baseline gap-1">
<span class="font-bold text-lg text-[#161313]">$380</span>
<span class="text-gray-500 text-sm">/ night</span>
</div>
</div>
</div>
<div class="mt-12 text-center sm:hidden">
<button class="px-6 py-3 border border-gray-300 rounded-lg text-text-main font-bold text-sm w-full">View All Rentals</button>
</div>
</section>
<!-- Become a Host CTA -->
<section class="px-6 py-16 lg:px-20 bg-card-light dark:bg-zinc-900">
<div class="max-w-[1400px] mx-auto bg-white dark:bg-zinc-800 rounded-3xl overflow-hidden shadow-sm border border-gray-100 dark:border-zinc-700 flex flex-col md:flex-row">
<div class="p-8 md:p-16 flex-1 flex flex-col justify-center items-start">
<span class="text-primary font-bold tracking-widest uppercase text-xs mb-3">Become a Host</span>
<h2 class="text-3xl md:text-4xl font-black text-[#161313] dark:text-white mb-4 leading-tight">Earn extra income with your property</h2>
<p class="text-text-main dark:text-gray-400 mb-8 max-w-md text-lg">Join thousands of hosts renting their space for unique experiences. It's simple, secure, and rewarding.</p>
<button class="flex items-center justify-center rounded-lg h-12 px-8 bg-[#161313] hover:bg-gray-800 text-white text-base font-bold transition-colors">
                            Get Started
                        </button>
</div>
<div class="flex-1 min-h-[300px] bg-cover bg-center" data-alt="Happy friends cooking together in a kitchen" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuD2WjXb-LlEI5nyCdNA0ZXuTvLitF-tWGrxxNdnHw-EXvFTDXp6rtdNjmMct5tO66JqkIZ0RZxykFomEy_yV5FNvKVFY1USMYiVc73AllvLE5cnuLHK7gfHRE9PzU20_kR9pzDiN4WGyqDCzKVlQ493KRQjACMlhz0rtIkqByFNHZy7fji3QRnJn2TVHwo3ZQKkvvlqXPao1dKDA9wN4JXPUFLIl1TnV1b9QxZirLIdx-8ceN1m0HFaehGtsRTlPrpjDgMRLGGjIHA");'>
</div>
</div>
</section>
</main>
<!-- Footer -->
<footer class="bg-white border-t border-gray-200 pt-16 pb-8 px-6 lg:px-20">
<div class="max-w-[1400px] mx-auto grid grid-cols-2 md:grid-cols-4 gap-8 mb-12">
<div class="flex flex-col gap-4">
<h4 class="font-bold text-[#161313]">Support</h4>
<a class="text-sm text-text-main hover:underline" href="#">Help Center</a>
<a class="text-sm text-text-main hover:underline" href="#">AirCover</a>
<a class="text-sm text-text-main hover:underline" href="#">Anti-discrimination</a>
<a class="text-sm text-text-main hover:underline" href="#">Disability support</a>
</div>
<div class="flex flex-col gap-4">
<h4 class="font-bold text-[#161313]">Hosting</h4>
<a class="text-sm text-text-main hover:underline" href="#">StayHome your home</a>
<a class="text-sm text-text-main hover:underline" href="#">AirCover for Hosts</a>
<a class="text-sm text-text-main hover:underline" href="#">Hosting resources</a>
<a class="text-sm text-text-main hover:underline" href="#">Community forum</a>
</div>
<div class="flex flex-col gap-4">
<h4 class="font-bold text-[#161313]">StayHome</h4>
<a class="text-sm text-text-main hover:underline" href="#">Newsroom</a>
<a class="text-sm text-text-main hover:underline" href="#">New features</a>
<a class="text-sm text-text-main hover:underline" href="#">Careers</a>
<a class="text-sm text-text-main hover:underline" href="#">Investors</a>
</div>
<div class="flex flex-col gap-4">
<div class="flex items-center gap-2 text-primary mb-2">
<span class="material-symbols-outlined text-3xl">cottage</span>
<h2 class="text-[#161313] text-lg font-black tracking-tight">StayHome</h2>
</div>
<p class="text-sm text-text-main">
                        Join our newsletter to get the latest updates and offers.
                    </p>
<div class="flex gap-2 mt-2">
<input class="bg-[#f7f7f6] border-none rounded-lg px-3 py-2 text-sm w-full" placeholder="Your email" type="email"/>
<button class="bg-primary text-white rounded-lg px-3 py-2">
<span class="material-symbols-outlined text-sm">arrow_forward</span>
</button>
</div>
</div>
</div>
<div class="max-w-[1400px] mx-auto border-t border-gray-200 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
<p class="text-sm text-text-main">© 2023 StayHome, Inc. All rights reserved.</p>
<div class="flex gap-6">
<a class="text-sm text-text-main hover:underline" href="#">Privacy</a>
<a class="text-sm text-text-main hover:underline" href="#">Terms</a>
<a class="text-sm text-text-main hover:underline" href="#">Sitemap</a>
</div>
</div>
</footer>
</div>
</body></html>
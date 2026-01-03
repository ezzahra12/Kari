<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Admin Dashboard</title>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&amp;display=swap" rel="stylesheet"/>
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
                        "card-light": "#ffffff",
                        "card-dark": "#2a2625",
                        "text-main": "#585453",
                        "text-light": "#8e8b8a",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.375rem", // rounded-md
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "2xl": "1rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
<style>
        body {
            font-family: 'Inter', sans-serif;
        }
        /* Custom scrollbar for webkit */
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
<body class="bg-background-light dark:bg-background-dark text-text-main dark:text-gray-200 antialiased overflow-hidden">
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
<main class="flex-1 flex flex-col h-full overflow-y-auto bg-background-light dark:bg-background-dark">
<!-- Page Header -->
<header class="px-8 py-8 w-full max-w-[1400px] mx-auto">
<div class="flex flex-wrap items-end justify-between gap-4">
<div class="flex flex-col gap-2">
<h1 class="text-text-main dark:text-white text-3xl font-black tracking-tight">Dashboard</h1>
<p class="text-text-light dark:text-gray-400 text-base font-normal">Welcome back, Administrator. Here is your daily overview.</p>
</div>
<div class="flex items-center gap-3">
<div class="hidden sm:flex items-center bg-white dark:bg-card-dark border border-gray-200 dark:border-gray-700 rounded-lg h-10 px-3 gap-2">
<span class="material-symbols-outlined text-text-light text-[20px]">calendar_today</span>
<span class="text-sm text-text-main dark:text-gray-300 font-medium">Last 30 Days</span>
<span class="material-symbols-outlined text-text-light text-[20px]">arrow_drop_down</span>
</div>
<button class="flex items-center gap-2 h-10 px-5 bg-primary hover:bg-primary/90 text-white rounded-lg transition-all shadow-sm shadow-primary/30">
<span class="material-symbols-outlined text-[20px]">download</span>
<span class="text-sm font-bold tracking-wide">Report</span>
</button>
</div>
</div>
</header>
<!-- Content Container -->
<div class="flex-1 w-full max-w-[1400px] mx-auto px-8 pb-12 flex flex-col gap-6">
<!-- KPI Stats Row -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
<!-- Total Users -->
<div class="bg-white dark:bg-card-dark p-5 rounded-xl border border-gray-100 dark:border-gray-800 shadow-sm flex flex-col gap-4 group hover:shadow-md transition-shadow">
<div class="flex justify-between items-start">
<div class="p-2 bg-blue-50 dark:bg-blue-900/20 rounded-lg text-blue-600 dark:text-blue-400">
<span class="material-symbols-outlined">group</span>
</div>
<span class="flex items-center text-xs font-bold text-green-600 bg-green-50 dark:bg-green-900/20 px-2 py-1 rounded-full">+12%</span>
</div>
<div>
<p class="text-text-light dark:text-gray-400 text-sm font-medium mb-1">Total Users</p>
<h3 class="text-text-main dark:text-white text-2xl font-bold">1,240</h3>
</div>
</div>
<!-- Total Rentals -->
<div class="bg-white dark:bg-card-dark p-5 rounded-xl border border-gray-100 dark:border-gray-800 shadow-sm flex flex-col gap-4 group hover:shadow-md transition-shadow">
<div class="flex justify-between items-start">
<div class="p-2 bg-orange-50 dark:bg-orange-900/20 rounded-lg text-orange-600 dark:text-orange-400">
<span class="material-symbols-outlined">other_houses</span>
</div>
<span class="flex items-center text-xs font-bold text-green-600 bg-green-50 dark:bg-green-900/20 px-2 py-1 rounded-full">+5%</span>
</div>
<div>
<p class="text-text-light dark:text-gray-400 text-sm font-medium mb-1">Total Rentals</p>
<h3 class="text-text-main dark:text-white text-2xl font-bold">345</h3>
</div>
</div>
<!-- Total Reservations -->
<div class="bg-white dark:bg-card-dark p-5 rounded-xl border border-gray-100 dark:border-gray-800 shadow-sm flex flex-col gap-4 group hover:shadow-md transition-shadow">
<div class="flex justify-between items-start">
<div class="p-2 bg-purple-50 dark:bg-purple-900/20 rounded-lg text-purple-600 dark:text-purple-400">
<span class="material-symbols-outlined">calendar_month</span>
</div>
<span class="flex items-center text-xs font-bold text-green-600 bg-green-50 dark:bg-green-900/20 px-2 py-1 rounded-full">+8%</span>
</div>
<div>
<p class="text-text-light dark:text-gray-400 text-sm font-medium mb-1">Total Reservations</p>
<h3 class="text-text-main dark:text-white text-2xl font-bold">890</h3>
</div>
</div>
<!-- Total Revenue -->
<div class="bg-white dark:bg-card-dark p-5 rounded-xl border border-gray-100 dark:border-gray-800 shadow-sm flex flex-col gap-4 group hover:shadow-md transition-shadow">
<div class="flex justify-between items-start">
<div class="p-2 bg-primary/10 rounded-lg text-primary">
<span class="material-symbols-outlined">attach_money</span>
</div>
<span class="flex items-center text-xs font-bold text-green-600 bg-green-50 dark:bg-green-900/20 px-2 py-1 rounded-full">+15%</span>
</div>
<div>
<p class="text-text-light dark:text-gray-400 text-sm font-medium mb-1">Total Revenue</p>
<h3 class="text-text-main dark:text-white text-2xl font-bold">$145,200</h3>
</div>
</div>
</div>
<!-- Chart Section -->
<div class="bg-white dark:bg-card-dark rounded-xl border border-gray-100 dark:border-gray-800 shadow-sm p-6">
<div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 gap-4">
<div>
<h2 class="text-text-main dark:text-white text-lg font-bold">Revenue Overview</h2>
<p class="text-text-light dark:text-gray-400 text-sm">Income generated over the last 30 days</p>
</div>
<div class="flex items-center gap-2">
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-primary/10 text-primary text-xs font-bold">
<span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                                Current Period
                             </span>
</div>
</div>
<div class="w-full h-64 relative">
<!-- Custom SVG Chart matching the theme -->
<svg class="w-full h-full overflow-visible" preserveaspectratio="none" viewbox="0 0 1000 300">
<defs>
<lineargradient id="gradientPrimary" x1="0%" x2="0%" y1="0%" y2="100%">
<stop offset="0%" style="stop-color:#b9857e;stop-opacity:0.25"></stop>
<stop offset="100%" style="stop-color:#b9857e;stop-opacity:0"></stop>
</lineargradient>
</defs>
<!-- Grid Lines -->
<line stroke="#f3f4f6" stroke-width="1" x1="0" x2="1000" y1="0" y2="0"></line>
<line stroke="#f3f4f6" stroke-dasharray="4 4" stroke-width="1" x1="0" x2="1000" y1="75" y2="75"></line>
<line stroke="#f3f4f6" stroke-dasharray="4 4" stroke-width="1" x1="0" x2="1000" y1="150" y2="150"></line>
<line stroke="#f3f4f6" stroke-dasharray="4 4" stroke-width="1" x1="0" x2="1000" y1="225" y2="225"></line>
<line stroke="#e5e7eb" stroke-width="1" x1="0" x2="1000" y1="300" y2="300"></line>
<!-- Chart Area -->
<path d="M0,250 Q100,200 200,220 T400,150 T600,100 T800,180 T1000,50 V300 H0 Z" fill="url(#gradientPrimary)"></path>
<!-- Chart Line -->
<path d="M0,250 Q100,200 200,220 T400,150 T600,100 T800,180 T1000,50" fill="none" stroke="#b9857e" stroke-linecap="round" stroke-width="3" vector-effect="non-scaling-stroke"></path>
<!-- Data Point Example -->
<circle cx="600" cy="100" fill="#b9857e" r="6" stroke="white" stroke-width="2"></circle>
<rect fill="#585453" height="30" rx="4" width="80" x="560" y="60"></rect>
<text fill="white" font-size="12" font-weight="bold" text-anchor="middle" x="600" y="80">$12.4k</text>
</svg>
</div>
<div class="flex justify-between text-xs text-text-light dark:text-gray-500 mt-4 px-1">
<span>Aug 1</span>
<span>Aug 5</span>
<span>Aug 10</span>
<span>Aug 15</span>
<span>Aug 20</span>
<span>Aug 25</span>
<span>Aug 30</span>
</div>
</div>
<!-- Bottom Section: Table + Activity -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
<!-- Top Properties Table -->
<div class="lg:col-span-2 bg-white dark:bg-card-dark rounded-xl border border-gray-100 dark:border-gray-800 shadow-sm flex flex-col">
<div class="p-6 border-b border-gray-100 dark:border-gray-800 flex justify-between items-center">
<h2 class="text-text-main dark:text-white text-lg font-bold">Top Performing Properties</h2>
<a class="text-sm text-primary font-bold hover:underline" href="#">View All</a>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="text-xs text-text-light dark:text-gray-400 border-b border-gray-100 dark:border-gray-800">
<th class="font-semibold py-4 px-6">Property</th>
<th class="font-semibold py-4 px-6">Host</th>
<th class="font-semibold py-4 px-6 text-center">Bookings</th>
<th class="font-semibold py-4 px-6 text-right">Revenue</th>
</tr>
</thead>
<tbody class="text-sm">
<tr class="group hover:bg-background-light dark:hover:bg-white/5 transition-colors">
<td class="py-4 px-6">
<div class="flex items-center gap-3">
<div class="w-12 h-12 rounded-lg bg-cover bg-center shrink-0" data-alt="Modern geometric beach house exterior" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBNwrHU4lVNeMMp1t1BgyGuKq4i5dwiYsZ6UTfNm-Yz9A72gz_jaf3UnRp6TS2YQu03IId3t5R5Na5rtBSzN8edmu1-nCmt3_uwHUZgq939jsMMtMYqdXd4UTKjNLlaV2RrHma-jEl40DDv41hHIrToDSZBGc1Koqg7btgIBvlRHcS-hB9UOahIaK4iRVi6ejkWvp96g-EkKzYLhPLIuKEx4GsEmlAov3pwY1Uq-ERuXuVMLZCNI3VTFa1Arubz2UKWCpNlMY3KfiY');">
</div>
<div class="flex flex-col">
<span class="font-bold text-text-main dark:text-white">Sunset Villa</span>
<span class="text-xs text-text-light dark:text-gray-500">Malibu, CA</span>
</div>
</div>
</td>
<td class="py-4 px-6">
<div class="flex items-center gap-2">
<div class="w-6 h-6 rounded-full bg-cover bg-center" data-alt="Portrait of host John Doe" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBvUQbmtcuYHLHxeBm7iXuzdMM80LgIauDjCnvggqfGVK1_MRBm47HrqLmzIzLxZO88T_3QzSQgza4Tt3XUHhVwl_CeYUDELQ64VZAvV4h_lMjPqkMXQgC6zZoLF9rgL2uX_pVQHiCLaRTVshypLhNBY-WsosUExLSR4Amd_oqUI0Oz98t3zUFKT-x8ApLugB_YwGZzTpTUVa1ho7o04xPpU1pHuEp3GZRV2xVGfsqDYLVg-Lcz2AABV1PqjEgREafxfoNB8HNbllA')"></div>
<span class="text-text-main dark:text-gray-300">John D.</span>
</div>
</td>
<td class="py-4 px-6 text-center">
<span class="inline-block px-2 py-1 rounded bg-gray-100 dark:bg-gray-800 text-xs font-bold text-gray-600 dark:text-gray-400">24</span>
</td>
<td class="py-4 px-6 text-right font-bold text-text-main dark:text-white">$12,500</td>
</tr>
<tr class="group hover:bg-background-light dark:hover:bg-white/5 transition-colors">
<td class="py-4 px-6">
<div class="flex items-center gap-3">
<div class="w-12 h-12 rounded-lg bg-cover bg-center shrink-0" data-alt="Cozy wooden cabin in the forest" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuC5T58BY0g1x0wHrpt_3kLUU_Rxd6ftxCK31lpbTp9wLAnF3iVqCwTm0uMQXVDLQMxkCpuo12CLI8pw6ck68Otn9d7elPfpXLaOuIxtYmsT6yqb1GfjyVuH33T8SB4CeES_mkviKIVjS510n8XejkucQbQ33erVmQN6eMJXp0FwYPxtUywTZX-nNyRAJqRb0VL0kNdYJoI-ySSFnfWy6SfceHS4c6T98KWcatVQAg2UWqXMZiM5b31NBvlinX9y3OZ905eHnmR3_ig');">
</div>
<div class="flex flex-col">
<span class="font-bold text-text-main dark:text-white">Alpine Cabin</span>
<span class="text-xs text-text-light dark:text-gray-500">Aspen, CO</span>
</div>
</div>
</td>
<td class="py-4 px-6">
<div class="flex items-center gap-2">
<div class="w-6 h-6 rounded-full bg-cover bg-center" data-alt="Portrait of host Sarah Smith" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuA1oKsXEVvlawR3yyunDQE4KRpresyRiZV8O9m19ZOcPMQLIFoJt6YbnuBGQVb603yj5XCQ4WHpO2kMCjoc3uLS6W57SuJS8ERKdQJGD7wkUkdOpZWqHbasyPGfDDCBCQf3Vpuo_Y_gvOSbo5bA_Rgr_TOz8qLQZJD2XAgrL4Zc2Xe0f5YZpfaY58_C6bgEkW1luqrx8CEWJwK-nvzQPNQDkOMKXU6i0qk-yXnQHNpHXSKuYZ6VSU9bTW4I9DFTBt32qNQx3uOCP9U')"></div>
<span class="text-text-main dark:text-gray-300">Sarah S.</span>
</div>
</td>
<td class="py-4 px-6 text-center">
<span class="inline-block px-2 py-1 rounded bg-gray-100 dark:bg-gray-800 text-xs font-bold text-gray-600 dark:text-gray-400">18</span>
</td>
<td class="py-4 px-6 text-right font-bold text-text-main dark:text-white">$9,240</td>
</tr>
<tr class="group hover:bg-background-light dark:hover:bg-white/5 transition-colors">
<td class="py-4 px-6">
<div class="flex items-center gap-3">
<div class="w-12 h-12 rounded-lg bg-cover bg-center shrink-0" data-alt="Modern city apartment interior" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBS8vdAUo9jrJsxFYoyoSWtcBB1L8F7UV9A24pDrBaIUWB-Kh9IDlZCSnw47VKm9dL_cepmp_7rxdrinYPn2CPOpJ5rk5aOwSBYqUd9125JAm2bFPFpSv0OwFpIWxlqZ93ki4WGKhoF5GRm276ZGXVouesMRlPr15jY4oGAsd-cfifNZofq_02kIF3vaoJr6ff50WO0UvWQbzTIWH7T3H8nycXUWUUpiDX8LblQlqOJIMoB1bazVhXuM3yewpksiwIZ9HsPuIetS30');">
</div>
<div class="flex flex-col">
<span class="font-bold text-text-main dark:text-white">Urban Loft</span>
<span class="text-xs text-text-light dark:text-gray-500">New York, NY</span>
</div>
</div>
</td>
<td class="py-4 px-6">
<div class="flex items-center gap-2">
<div class="w-6 h-6 rounded-full bg-cover bg-center" data-alt="Portrait of host Mike Chen" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuA-vP-lnJx5ebNsU-dfqQ45Fpukxb8g9Kl8MtFElSfyk1Vta32ZSqdZOo_oIJKu1ELguMEkHD4buhi6w1oZZ-lQCvcDnM_fv_p6tyME0X5wMLnjwL_5FyiIOX5If-YF71b2cvqKzW2Txb7IxgE_l1bsSdbhuZpbrBD3-JGA20l7Cp4q_v5cbv1N2c84gFD1AVbNTWfwV8OT2EKRXSp0smld1EYG19xjH36M2RwVsHjbNxkxFD1lhQdNSeTdlLFgkbsdPeAhBIDcXSk')"></div>
<span class="text-text-main dark:text-gray-300">Mike C.</span>
</div>
</td>
<td class="py-4 px-6 text-center">
<span class="inline-block px-2 py-1 rounded bg-gray-100 dark:bg-gray-800 text-xs font-bold text-gray-600 dark:text-gray-400">15</span>
</td>
<td class="py-4 px-6 text-right font-bold text-text-main dark:text-white">$7,800</td>
</tr>
<tr class="group hover:bg-background-light dark:hover:bg-white/5 transition-colors">
<td class="py-4 px-6">
<div class="flex items-center gap-3">
<div class="w-12 h-12 rounded-lg bg-cover bg-center shrink-0" data-alt="Tropical bungalow with palm trees" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAaz15PF-6AFtsqe47Mb6tVpMWY0WQHACrz6qPLcFheItOatIxwycFnn38UsjYCwN_G0kPEadobNKRIS0f9pNNDZDC0l2d_InzbBry8bY2DauEVf6eHkLsZz6tFnkgasMwgI3HBT_L4WMKixN_5gCcXM1noePcEunseCMphMlI-NYTIb4f6M1OmqNqdvnGOiD2VX5f14n8yU9NDe4nK0uRYaBQeN7xU1iw97HMgWSIigBdH0PB-DNX2B3fu6Cvx9_RR2FaDaIW65-c');">
</div>
<div class="flex flex-col">
<span class="font-bold text-text-main dark:text-white">Seaside Bungalow</span>
<span class="text-xs text-text-light dark:text-gray-500">Miami, FL</span>
</div>
</div>
</td>
<td class="py-4 px-6">
<div class="flex items-center gap-2">
<div class="w-6 h-6 rounded-full bg-cover bg-center" data-alt="Portrait of host Emily White" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuA8GTy1uoM8i0Mq1DMLzhrbhwtY9CJrDOZr1O5I-t8qyx-1fR8V3lV2F1tWvP3V3BULd2azWYd5fqWa_Zlr0dgMeFh4fr_xjeNko1XlnLl53PVkGbcfUyDfC375gQRHkMHm60ct6TLOF6r5IWGCFVIkOuWhP_5KKJSSmP-wGcHt6ioiahzhvw21-5vleywyQQvc4D8JZVRPEZJPcBlkYiizbyAIduuIP5pSMfOTtjbVonE_2Odqqr4l5RVOwpsSy_LX9Uru2kEeomk')"></div>
<span class="text-text-main dark:text-gray-300">Emily W.</span>
</div>
</td>
<td class="py-4 px-6 text-center">
<span class="inline-block px-2 py-1 rounded bg-gray-100 dark:bg-gray-800 text-xs font-bold text-gray-600 dark:text-gray-400">12</span>
</td>
<td class="py-4 px-6 text-right font-bold text-text-main dark:text-white">$6,150</td>
</tr>
</tbody>
</table>
</div>
</div>
<!-- Recent Activity Feed -->
<div class="lg:col-span-1 bg-white dark:bg-card-dark rounded-xl border border-gray-100 dark:border-gray-800 shadow-sm flex flex-col h-full">
<div class="p-6 border-b border-gray-100 dark:border-gray-800">
<h2 class="text-text-main dark:text-white text-lg font-bold">Recent Activity</h2>
</div>
<div class="flex-1 p-6 flex flex-col gap-6">
<!-- Activity Item -->
<div class="flex gap-4">
<div class="flex flex-col items-center">
<div class="w-8 h-8 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-600">
<span class="material-symbols-outlined text-sm font-bold">check</span>
</div>
<div class="w-0.5 h-full bg-gray-100 dark:bg-gray-800 my-2"></div>
</div>
<div class="flex flex-col gap-1 pb-4">
<p class="text-sm text-text-main dark:text-gray-200">
<span class="font-bold">New Booking</span> for <span class="font-medium">Sunset Villa</span>
</p>
<p class="text-xs text-text-light dark:text-gray-500">2 minutes ago</p>
</div>
</div>
<!-- Activity Item -->
<div class="flex gap-4">
<div class="flex flex-col items-center">
<div class="w-8 h-8 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-600">
<span class="material-symbols-outlined text-sm font-bold">person_add</span>
</div>
<div class="w-0.5 h-full bg-gray-100 dark:bg-gray-800 my-2"></div>
</div>
<div class="flex flex-col gap-1 pb-4">
<p class="text-sm text-text-main dark:text-gray-200">
<span class="font-bold">Alex M.</span> registered as a new host
                                    </p>
<p class="text-xs text-text-light dark:text-gray-500">1 hour ago</p>
</div>
</div>
<!-- Activity Item -->
<div class="flex gap-4">
<div class="flex flex-col items-center">
<div class="w-8 h-8 rounded-full bg-yellow-100 dark:bg-yellow-900/30 flex items-center justify-center text-yellow-600">
<span class="material-symbols-outlined text-sm font-bold">star</span>
</div>
<div class="w-0.5 h-full bg-gray-100 dark:bg-gray-800 my-2"></div>
</div>
<div class="flex flex-col gap-1 pb-4">
<p class="text-sm text-text-main dark:text-gray-200">
<span class="font-bold">Alpine Cabin</span> received a 5-star review
                                    </p>
<p class="text-xs text-text-light dark:text-gray-500">3 hours ago</p>
</div>
</div>
<!-- Activity Item -->
<div class="flex gap-4">
<div class="flex flex-col items-center">
<div class="w-8 h-8 rounded-full bg-primary/20 flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-sm font-bold">attach_money</span>
</div>
</div>
<div class="flex flex-col gap-1">
<p class="text-sm text-text-main dark:text-gray-200">
                                        Payout of <span class="font-bold">$4,200</span> processed
                                    </p>
<p class="text-xs text-text-light dark:text-gray-500">5 hours ago</p>
</div>
</div>
</div>
</div>
</div>
</div>
</main>
</div>
</body></html>
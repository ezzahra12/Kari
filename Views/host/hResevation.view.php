<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Host Reservations Page</title>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500;600;700;900&amp;display=swap" rel="stylesheet"/>
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
                        "background-light": "#faeded", /* Updated to user request */
                        "background-dark": "#1c1716",
                        "card-light": "#fdfbf9", /* Updated to user request */
                        "text-main": "#585453", /* Updated to user request */
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
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-text-main antialiased min-h-screen flex flex-col overflow-x-hidden">
<!-- Top Navigation -->
<header class="sticky top-0 z-50 bg-white/80 dark:bg-[#1c1716]/90 backdrop-blur-md border-b border-[#ebdcd9] dark:border-[#332a29] px-6 py-3">
<div class="max-w-7xl mx-auto flex items-center justify-between gap-4">
<!-- Logo Section -->
<div class="flex items-center gap-4">
<div class="text-primary">
<span class="material-symbols-outlined text-4xl">holiday_village</span>
</div>
<h1 class="text-text-main dark:text-white text-xl font-bold tracking-tight hidden sm:block">Host Dashboard</h1>
</div>
<!-- Search Bar -->
<div class="flex-1 max-w-md hidden md:block">
<div class="relative group">
<div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
<span class="material-symbols-outlined text-gray-400">search</span>
</div>
<input class="block w-full pl-10 pr-3 py-2 border-none rounded-xl bg-[#f3f2f1] dark:bg-[#2a2423] text-text-main dark:text-gray-200 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-primary/50 transition-all" placeholder="Search reservations, guests, or listings..." type="text"/>
</div>
</div>
<!-- Right Nav Actions -->
<div class="flex items-center gap-6">
<nav class="hidden lg:flex items-center gap-6">
<a class="text-text-main dark:text-gray-300 font-medium hover:text-primary transition-colors text-sm" href="/Views/host/hDashboard.view.php">Dashboard</a>
<a class="text-text-main dark:text-gray-300 font-medium hover:text-primary transition-colors text-sm relative" href="/Views/host/hResevation.view.php">
                        Bookings
                        <span class="absolute -top-1 -right-2 bg-primary text-white text-[10px] font-bold px-1.5 py-0.5 rounded-full">2</span>
</a>
<a class="text-text-main dark:text-gray-300 font-medium hover:text-primary transition-colors text-sm" href="/Views/host/Rentals.view.php">Rentals</a>
<a class="text-text-main dark:text-gray-300 font-medium hover:text-primary transition-colors text-sm" href="/Views/host/hReview.view.php">Reviews</a>
</nav>
<div class="flex items-center gap-3 pl-4 border-l border-gray-200 dark:border-gray-700">
<button class="relative rounded-full hover:bg-gray-100 dark:hover:bg-[#2a2423] p-1 transition-colors">
<span class="material-symbols-outlined text-text-main dark:text-gray-300">notifications</span>
<span class="absolute top-1 right-1 w-2 h-2 bg-red-500 rounded-full border-2 border-white dark:border-[#1c1716]"></span>
</button>
<div class="h-10 w-10 rounded-full bg-cover bg-center ring-2 ring-white dark:ring-[#2a2423] shadow-sm cursor-pointer" data-alt="Profile picture of a smiling man with a beard" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCsxF80JtXy_gGpylv8Za5MpGw-CtPl2NNsBsuq66wEEaT-_QX5u3vGdJaGSAuArqw3zBI0WaQQfOpvb-FoFfdUh758e5pBwsUaOzQ7nFIWSyXDtGW2bCCAqwHE1hQgwbv03TU81OL6OKRTSw-lWRBeOovyGfFkRcPfntFCk1xpjZxg39vpE54ek5VVINPyJ8xe_bA3JxcynR9Ue_gjXrJnFFp3e3oAN4wC5GX7DO-sVTSwyAzsHCVbSCigjNfzNsLcEaH7r85k3-U');">
</div>
</div>
</div>
</div>
</header>
<!-- Main Content -->
<main class="flex-grow w-full max-w-7xl mx-auto px-4 sm:px-6 py-8">
<!-- Page Header -->
<div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-8">
<div>
<h2 class="text-3xl md:text-4xl font-black text-text-main dark:text-white tracking-tight mb-2">Reservations</h2>
<p class="text-[#7c706e] dark:text-gray-400 text-base">Manage your incoming requests and upcoming stays</p>
</div>
<div class="flex gap-3">
<button class="flex items-center gap-2 px-4 py-2 rounded-lg bg-card-light dark:bg-[#2a2423] border border-[#e5e5e5] dark:border-[#332a29] text-text-main dark:text-white text-sm font-medium hover:bg-gray-50 dark:hover:bg-[#332a29] transition-colors shadow-sm">
<span class="material-symbols-outlined text-[20px]">file_download</span>
                    Export CSV
                </button>
</div>
</div>
<!-- KPI Stats -->
<div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-10">
<div class="flex flex-col gap-1 p-6 rounded-xl bg-card-light dark:bg-[#2a2423] shadow-sm hover:shadow-md transition-shadow border border-transparent hover:border-primary/20">
<div class="flex items-center justify-between">
<p class="text-[#7c706e] dark:text-gray-400 text-sm font-medium">Pending Requests</p>
<span class="material-symbols-outlined text-primary bg-primary/10 p-1.5 rounded-lg">pending_actions</span>
</div>
<p class="text-text-main dark:text-white text-3xl font-bold mt-2">2</p>
<p class="text-xs text-[#7c706e] dark:text-gray-500 mt-1">Requires action within 24h</p>
</div>
<div class="flex flex-col gap-1 p-6 rounded-xl bg-card-light dark:bg-[#2a2423] shadow-sm hover:shadow-md transition-shadow border border-transparent hover:border-primary/20">
<div class="flex items-center justify-between">
<p class="text-[#7c706e] dark:text-gray-400 text-sm font-medium">Check-ins Today</p>
<span class="material-symbols-outlined text-primary bg-primary/10 p-1.5 rounded-lg">key</span>
</div>
<p class="text-text-main dark:text-white text-3xl font-bold mt-2">4</p>
<p class="text-xs text-[#7c706e] dark:text-gray-500 mt-1">Next arrival at 3:00 PM</p>
</div>
<div class="flex flex-col gap-1 p-6 rounded-xl bg-card-light dark:bg-[#2a2423] shadow-sm hover:shadow-md transition-shadow border border-transparent hover:border-primary/20">
<div class="flex items-center justify-between">
<p class="text-[#7c706e] dark:text-gray-400 text-sm font-medium">Est. Earnings (Oct)</p>
<span class="material-symbols-outlined text-primary bg-primary/10 p-1.5 rounded-lg">payments</span>
</div>
<p class="text-text-main dark:text-white text-3xl font-bold mt-2">$3,240</p>
<p class="text-xs text-emerald-600 font-medium mt-1 flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">trending_up</span> 12% vs last month
                </p>
</div>
</div>
<!-- Tabs Navigation -->
<div class="border-b border-[#e2dfdf] dark:border-[#332a29] mb-6">
<div class="flex gap-8 overflow-x-auto no-scrollbar">
<a class="group flex flex-col items-center pb-3 border-b-[3px] border-transparent hover:border-gray-300 min-w-fit px-1" href="#">
<span class="text-[#7c706e] dark:text-gray-400 text-sm font-bold group-hover:text-text-main dark:group-hover:text-gray-200">All</span>
</a>
<a class="group flex flex-col items-center pb-3 border-b-[3px] border-primary min-w-fit px-1" href="#">
<span class="text-primary text-sm font-bold">Pending (2)</span>
</a>
<a class="group flex flex-col items-center pb-3 border-b-[3px] border-transparent hover:border-gray-300 min-w-fit px-1" href="#">
<span class="text-[#7c706e] dark:text-gray-400 text-sm font-bold group-hover:text-text-main dark:group-hover:text-gray-200">Upcoming</span>
</a>
<a class="group flex flex-col items-center pb-3 border-b-[3px] border-transparent hover:border-gray-300 min-w-fit px-1" href="#">
<span class="text-[#7c706e] dark:text-gray-400 text-sm font-bold group-hover:text-text-main dark:group-hover:text-gray-200">Checking In</span>
</a>
<a class="group flex flex-col items-center pb-3 border-b-[3px] border-transparent hover:border-gray-300 min-w-fit px-1" href="#">
<span class="text-[#7c706e] dark:text-gray-400 text-sm font-bold group-hover:text-text-main dark:group-hover:text-gray-200">Completed</span>
</a>
<a class="group flex flex-col items-center pb-3 border-b-[3px] border-transparent hover:border-gray-300 min-w-fit px-1" href="#">
<span class="text-[#7c706e] dark:text-gray-400 text-sm font-bold group-hover:text-text-main dark:group-hover:text-gray-200">Cancelled</span>
</a>
</div>
</div>
<!-- Filters Row -->
<div class="flex flex-wrap gap-3 mb-8 items-center">
<button class="flex h-9 items-center gap-2 rounded-full bg-white dark:bg-[#2a2423] border border-[#e5e5e5] dark:border-[#332a29] pl-4 pr-3 hover:bg-gray-50 dark:hover:bg-[#332a29] transition-colors shadow-sm text-text-main dark:text-gray-300 text-sm font-medium">
                Dates
                <span class="material-symbols-outlined text-[18px]">keyboard_arrow_down</span>
</button>
<button class="flex h-9 items-center gap-2 rounded-full bg-white dark:bg-[#2a2423] border border-[#e5e5e5] dark:border-[#332a29] pl-4 pr-3 hover:bg-gray-50 dark:hover:bg-[#332a29] transition-colors shadow-sm text-text-main dark:text-gray-300 text-sm font-medium">
                Property
                <span class="material-symbols-outlined text-[18px]">keyboard_arrow_down</span>
</button>
<button class="flex h-9 items-center gap-2 rounded-full bg-white dark:bg-[#2a2423] border border-[#e5e5e5] dark:border-[#332a29] pl-4 pr-3 hover:bg-gray-50 dark:hover:bg-[#332a29] transition-colors shadow-sm text-text-main dark:text-gray-300 text-sm font-medium">
                Status
                <span class="material-symbols-outlined text-[18px]">keyboard_arrow_down</span>
</button>
<button class="flex h-9 items-center gap-2 rounded-full bg-white dark:bg-[#2a2423] border border-[#e5e5e5] dark:border-[#332a29] pl-4 pr-3 hover:bg-gray-50 dark:hover:bg-[#332a29] transition-colors shadow-sm text-text-main dark:text-gray-300 text-sm font-medium ml-auto">
<span class="material-symbols-outlined text-[18px]">tune</span>
                More Filters
            </button>
</div>
<!-- Reservation Cards List -->
<div class="flex flex-col gap-4">
<!-- Card 1: Pending Action -->
<div class="group flex flex-col lg:flex-row bg-card-light dark:bg-[#2a2423] rounded-2xl p-5 shadow-sm hover:shadow-md transition-all border border-transparent hover:border-primary/30 relative overflow-hidden">
<!-- Status Strip -->
<div class="absolute left-0 top-0 bottom-0 w-1.5 bg-primary"></div>
<div class="flex-1 flex flex-col md:flex-row gap-6">
<!-- Guest & Property Info -->
<div class="flex gap-4 min-w-[300px]">
<div class="relative">
<div class="w-14 h-14 rounded-full bg-cover bg-center shadow-sm" data-alt="Profile picture of Alice M." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuA9uHY4x7bVEDUAfo_3tSZ8vPQNYeqv3EvLLjxYQYR0dMa8jnPekCWue05nsAlbx9FSqpAnJaCJzqwyF4XqntFm3AUTa4QJQgWN7I0gPahEjV6FcdbiYp1SoQMN0sQLmDuzi8cWAVQIbJWt4a0jWM4RB65Khzmo8JpCXfF96xJlptrrcMqz9yZ82JsUXxlkMy0nbpRdVtnEhkPhJxfvWOKIZLdkILAlh6U_09h_kw1vJImOW1N6hA66wI6ScgKq3mUhrSTNeqO8arw');"></div>
<div class="absolute -bottom-1 -right-1 bg-white dark:bg-[#2a2423] rounded-full p-0.5 shadow-sm">
<span class="material-symbols-outlined text-yellow-500 text-[18px] filled">star</span>
</div>
</div>
<div>
<div class="flex items-center gap-2">
<h3 class="text-lg font-bold text-text-main dark:text-white">Alice M.</h3>
<span class="px-2 py-0.5 rounded-full bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-500 text-xs font-bold">5.0</span>
</div>
<p class="text-sm text-[#7c706e] dark:text-gray-400 mt-1 line-clamp-1">Cozy Downtown Loft • 2 Guests</p>
<p class="text-xs text-[#7c706e] dark:text-gray-500 mt-1">Joined 2019 • 4 reviews</p>
</div>
</div>
<!-- Booking Details -->
<div class="flex flex-1 flex-wrap gap-y-4 gap-x-8 md:border-l border-gray-100 dark:border-[#332a29] md:pl-6">
<div class="flex flex-col gap-1 min-w-[120px]">
<p class="text-xs font-medium text-[#7c706e] uppercase tracking-wider">Check-in</p>
<p class="text-sm font-semibold text-text-main dark:text-white flex items-center gap-1">
<span class="material-symbols-outlined text-primary text-[18px]">calendar_today</span> Oct 12
                            </p>
</div>
<div class="flex flex-col gap-1 min-w-[120px]">
<p class="text-xs font-medium text-[#7c706e] uppercase tracking-wider">Check-out</p>
<p class="text-sm font-semibold text-text-main dark:text-white flex items-center gap-1">
<span class="material-symbols-outlined text-primary text-[18px]">event</span> Oct 15
                            </p>
</div>
<div class="flex flex-col gap-1 min-w-[100px]">
<p class="text-xs font-medium text-[#7c706e] uppercase tracking-wider">Total Payout</p>
<p class="text-lg font-bold text-text-main dark:text-white">$450</p>
</div>
<div class="flex flex-col gap-1">
<p class="text-xs font-medium text-[#7c706e] uppercase tracking-wider">Status</p>
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-primary/15 text-primary text-xs font-bold w-fit">
<span class="w-1.5 h-1.5 rounded-full bg-primary animate-pulse"></span>
                                Request expires in 14h
                            </span>
</div>
</div>
</div>
<!-- Actions -->
<div class="flex flex-col sm:flex-row lg:flex-col justify-center gap-2 mt-4 lg:mt-0 lg:pl-6 lg:border-l border-gray-100 dark:border-[#332a29] min-w-[160px]">
<button class="flex-1 bg-primary hover:bg-[#a6766f] text-white px-4 py-2 rounded-lg text-sm font-semibold shadow-sm transition-colors w-full">
                        Accept
                    </button>
<button class="flex-1 bg-white dark:bg-[#332a29] border border-gray-200 dark:border-[#443a39] text-text-main dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-[#443a39] px-4 py-2 rounded-lg text-sm font-medium transition-colors w-full">
                        Decline
                    </button>
</div>
</div>
<!-- Card 2: Pending Action -->
<div class="group flex flex-col lg:flex-row bg-card-light dark:bg-[#2a2423] rounded-2xl p-5 shadow-sm hover:shadow-md transition-all border border-transparent hover:border-primary/30 relative overflow-hidden">
<div class="absolute left-0 top-0 bottom-0 w-1.5 bg-primary"></div>
<div class="flex-1 flex flex-col md:flex-row gap-6">
<div class="flex gap-4 min-w-[300px]">
<div class="relative">
<div class="w-14 h-14 rounded-full bg-cover bg-center shadow-sm" data-alt="Profile picture of Marcus L." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBcxjnDafG3N0AARB0XwwZz209xIl1psv2b7UOszR0PlDoC6YZ0Q6AI4d1QSJAkirTnVGQmVjxTGqj8GDAWq-zNOuCkn9PNZztnvVpme976Y43O8RXHLz-5ObIdtFdQxMvmKFYzfNZCEJx0QBreNLSSn1tugwMdzSM0SE5S-nakucJ7sA3gu1TUn-lMBW8tIlcWg3MK06MEZ1Z2rFXF0WuPPeMNIa1K-lQS73QQmCrIurUZQX3J05HgeGyARwiNYq6VevS9wOyhO2o');"></div>
</div>
<div>
<div class="flex items-center gap-2">
<h3 class="text-lg font-bold text-text-main dark:text-white">Marcus L.</h3>
<span class="px-2 py-0.5 rounded-full bg-gray-100 dark:bg-gray-800 text-gray-600 dark:text-gray-400 text-xs font-bold">New</span>
</div>
<p class="text-sm text-[#7c706e] dark:text-gray-400 mt-1 line-clamp-1">Sunny Side Apt • 1 Guest</p>
<p class="text-xs text-[#7c706e] dark:text-gray-500 mt-1">Joined Oct 2023 • 0 reviews</p>
</div>
</div>
<div class="flex flex-1 flex-wrap gap-y-4 gap-x-8 md:border-l border-gray-100 dark:border-[#332a29] md:pl-6">
<div class="flex flex-col gap-1 min-w-[120px]">
<p class="text-xs font-medium text-[#7c706e] uppercase tracking-wider">Check-in</p>
<p class="text-sm font-semibold text-text-main dark:text-white flex items-center gap-1">
<span class="material-symbols-outlined text-primary text-[18px]">calendar_today</span> Oct 18
                            </p>
</div>
<div class="flex flex-col gap-1 min-w-[120px]">
<p class="text-xs font-medium text-[#7c706e] uppercase tracking-wider">Check-out</p>
<p class="text-sm font-semibold text-text-main dark:text-white flex items-center gap-1">
<span class="material-symbols-outlined text-primary text-[18px]">event</span> Oct 20
                            </p>
</div>
<div class="flex flex-col gap-1 min-w-[100px]">
<p class="text-xs font-medium text-[#7c706e] uppercase tracking-wider">Total Payout</p>
<p class="text-lg font-bold text-text-main dark:text-white">$280</p>
</div>
<div class="flex flex-col gap-1">
<p class="text-xs font-medium text-[#7c706e] uppercase tracking-wider">Status</p>
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-primary/15 text-primary text-xs font-bold w-fit">
<span class="w-1.5 h-1.5 rounded-full bg-primary animate-pulse"></span>
                                Request expires in 22h
                            </span>
</div>
</div>
</div>
<div class="flex flex-col sm:flex-row lg:flex-col justify-center gap-2 mt-4 lg:mt-0 lg:pl-6 lg:border-l border-gray-100 dark:border-[#332a29] min-w-[160px]">
<button class="flex-1 bg-primary hover:bg-[#a6766f] text-white px-4 py-2 rounded-lg text-sm font-semibold shadow-sm transition-colors w-full">
                        Accept
                    </button>
<button class="flex-1 bg-white dark:bg-[#332a29] border border-gray-200 dark:border-[#443a39] text-text-main dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-[#443a39] px-4 py-2 rounded-lg text-sm font-medium transition-colors w-full">
                        Decline
                    </button>
</div>
</div>
<!-- Card 3: Upcoming (Confirmed) -->
<div class="group flex flex-col lg:flex-row bg-card-light dark:bg-[#2a2423] rounded-2xl p-5 shadow-sm hover:shadow-md transition-all border border-transparent hover:border-gray-200 dark:hover:border-[#443a39] opacity-95">
<!-- Status Strip (Green for confirmed) -->
<div class="hidden lg:block absolute left-0 top-5 bottom-5 w-1 rounded-r-lg bg-emerald-500/50"></div>
<div class="flex-1 flex flex-col md:flex-row gap-6">
<div class="flex gap-4 min-w-[300px]">
<div class="relative">
<div class="w-14 h-14 rounded-full bg-cover bg-center shadow-sm grayscale-[20%]" data-alt="Profile picture of John D." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuB99BXpcr2IC_ZXL0xBKvTIiIvps_PfJuSxxx-ndja9_2eWph52gcIBuoY8B2qP6pSodA2KfZS3QfZ-Gb-awgS2bORFCkxXEIXGg778u99SJ4K4scGRdX7OBi6X6QN7naN_TlTjZSMInA-8J6222jOuG1BqTx40NUzzbmu4dxLdAVeA68to27PSJBqNXKPaTBFnkMVpT4F9VH5hlS6DAgImd401W04aueBlUYDHYeMyxgIc9j71o7vbdx_kRGb4uD7NDEYQ6Kk0mmA');"></div>
</div>
<div>
<div class="flex items-center gap-2">
<h3 class="text-lg font-bold text-text-main dark:text-white">John D.</h3>
<span class="px-2 py-0.5 rounded-full bg-emerald-100 dark:bg-emerald-900/30 text-emerald-700 dark:text-emerald-500 text-xs font-bold">4.8</span>
</div>
<p class="text-sm text-[#7c706e] dark:text-gray-400 mt-1 line-clamp-1">Beachside Villa • 4 Guests</p>
<p class="text-xs text-[#7c706e] dark:text-gray-500 mt-1">Joined 2021 • 12 reviews</p>
</div>
</div>
<div class="flex flex-1 flex-wrap gap-y-4 gap-x-8 md:border-l border-gray-100 dark:border-[#332a29] md:pl-6">
<div class="flex flex-col gap-1 min-w-[120px]">
<p class="text-xs font-medium text-[#7c706e] uppercase tracking-wider">Check-in</p>
<p class="text-sm font-semibold text-text-main dark:text-white flex items-center gap-1">
<span class="material-symbols-outlined text-gray-400 text-[18px]">calendar_today</span> Nov 01
                            </p>
</div>
<div class="flex flex-col gap-1 min-w-[120px]">
<p class="text-xs font-medium text-[#7c706e] uppercase tracking-wider">Check-out</p>
<p class="text-sm font-semibold text-text-main dark:text-white flex items-center gap-1">
<span class="material-symbols-outlined text-gray-400 text-[18px]">event</span> Nov 07
                            </p>
</div>
<div class="flex flex-col gap-1 min-w-[100px]">
<p class="text-xs font-medium text-[#7c706e] uppercase tracking-wider">Total Payout</p>
<p class="text-lg font-bold text-text-main dark:text-white">$1,250</p>
</div>
<div class="flex flex-col gap-1">
<p class="text-xs font-medium text-[#7c706e] uppercase tracking-wider">Status</p>
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-emerald-100 dark:bg-emerald-900/30 text-emerald-700 dark:text-emerald-400 text-xs font-bold w-fit">
                                Confirmed
                            </span>
</div>
</div>
</div>
<div class="flex flex-col sm:flex-row lg:flex-col justify-center gap-2 mt-4 lg:mt-0 lg:pl-6 lg:border-l border-gray-100 dark:border-[#332a29] min-w-[160px]">
<button class="flex-1 bg-white dark:bg-[#332a29] border border-gray-200 dark:border-[#443a39] text-text-main dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-[#443a39] px-4 py-2 rounded-lg text-sm font-medium transition-colors w-full flex items-center justify-center gap-2">
<span class="material-symbols-outlined text-[18px]">chat</span>
                        Message
                    </button>
<button class="flex-1 bg-transparent text-[#7c706e] dark:text-gray-400 hover:text-text-main dark:hover:text-white px-4 py-2 rounded-lg text-sm font-medium transition-colors w-full">
                        Details
                    </button>
</div>
</div>
<!-- Card 4: Past/Completed -->
<div class="group flex flex-col lg:flex-row bg-card-light dark:bg-[#2a2423] rounded-2xl p-5 shadow-sm hover:shadow-md transition-all border border-transparent hover:border-gray-200 dark:hover:border-[#443a39] opacity-80 hover:opacity-100">
<div class="flex-1 flex flex-col md:flex-row gap-6">
<div class="flex gap-4 min-w-[300px]">
<div class="relative">
<div class="w-14 h-14 rounded-full bg-cover bg-center shadow-sm grayscale" data-alt="Profile picture of Sarah W." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDtIAC6UCTTgc1oq8VHXkStzORuwbufS3lq6b0K6zHsrdyoWMugXBuHiHlUubKehs-sUAwmr6WSAwjc0Adwr3CenT5M-IpopzFIOjl8wIXfyz-j0kTSebSaJo7sjw0O2EgbltuDM3AjK4ZXJH2mLI3yfI5V5yd87gW2d7b4SDFnbPLLu018zjwjYfRNEDD9mTejtBiY5HMi6UmbxPntTRDyDJ5_HhO_DNE7U9wHTbY3jbf7C5staqLg-37WtsCMgthF6FSRO2dzABU');"></div>
</div>
<div>
<div class="flex items-center gap-2">
<h3 class="text-lg font-bold text-text-main dark:text-white">Sarah W.</h3>
<span class="px-2 py-0.5 rounded-full bg-gray-100 dark:bg-gray-800 text-gray-600 dark:text-gray-400 text-xs font-bold">4.9</span>
</div>
<p class="text-sm text-[#7c706e] dark:text-gray-400 mt-1 line-clamp-1">Forest Cabin • 2 Guests</p>
<p class="text-xs text-[#7c706e] dark:text-gray-500 mt-1">Sep 28 - Oct 01</p>
</div>
</div>
<div class="flex flex-1 flex-wrap gap-y-4 gap-x-8 md:border-l border-gray-100 dark:border-[#332a29] md:pl-6 items-center">
<div class="flex flex-col gap-1 flex-1">
<p class="text-xs font-medium text-[#7c706e] uppercase tracking-wider">Status</p>
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-gray-100 dark:bg-gray-800 text-gray-600 dark:text-gray-400 text-xs font-bold w-fit">
                                Completed
                            </span>
</div>
<div class="flex flex-col gap-1 flex-1">
<p class="text-xs font-medium text-[#7c706e] uppercase tracking-wider">Review</p>
<p class="text-sm text-text-main dark:text-white italic">"Beautiful place, very quiet..."</p>
</div>
</div>
</div>
<div class="flex flex-col sm:flex-row lg:flex-col justify-center gap-2 mt-4 lg:mt-0 lg:pl-6 lg:border-l border-gray-100 dark:border-[#332a29] min-w-[160px]">
<button class="flex-1 bg-white dark:bg-[#332a29] border border-gray-200 dark:border-[#443a39] text-text-main dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-[#443a39] px-4 py-2 rounded-lg text-sm font-medium transition-colors w-full flex items-center justify-center gap-2">
<span class="material-symbols-outlined text-[18px]">rate_review</span>
                        Reply
                    </button>
</div>
</div>
</div>
<!-- Pagination / Load More -->
<div class="mt-8 flex justify-center">
<button class="text-[#7c706e] dark:text-gray-400 hover:text-primary dark:hover:text-primary font-medium text-sm flex items-center gap-2 transition-colors">
                Load more reservations
                <span class="material-symbols-outlined">expand_more</span>
</button>
</div>
</main>
</body></html>
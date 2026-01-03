<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Host Reviews Dashboard</title>
<!-- Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;900&amp;family=Noto+Sans:wght@400;500;700&amp;display=swap" rel="stylesheet"/>
<!-- Material Icons -->
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
                        "primary": "#b9847d",
                        "primary-hover": "#a6736d",
                        "background-light": "#faeded",
                        "background-dark": "#1c1716",
                        "card": "#fdfbf9",
                        "text-main": "#585453",
                        "text-secondary": "#8a8684",
                    },
                    fontFamily: {
                        "display": ["Inter", "Noto Sans", "sans-serif"]
                    },
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "2xl": "1rem", "full": "9999px"},
                    boxShadow: {
                        "soft": "0 4px 20px -2px rgba(185, 132, 125, 0.08)",
                        "card": "0 2px 10px -2px rgba(0, 0, 0, 0.03)",
                    }
                },
            },
        }
    </script>
<style>
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
<body class="bg-background-light dark:bg-background-dark text-text-main font-display antialiased h-screen overflow-hidden flex selection:bg-primary/20 selection:text-primary">
<!-- Sidebar -->
<aside class="hidden lg:flex flex-col w-64 bg-card h-full border-r border-neutral-100 flex-shrink-0 z-20">
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
<button class="flex w-full cursor-pointer items-center justify-center overflow-hidden rounded-xl h-11 px-4 bg-primary hover:bg-primary-dark text-white shadow-md shadow-primary/30 transition-all active:scale-[0.98]">
<span class="material-symbols-outlined mr-2 text-[20px]">add_business</span>
<span class="text-sm font-bold tracking-wide">Create Rental</span>
</button>
</div>
</div>
</aside>
<!-- Main Content Area -->
<div class="flex-1 flex flex-col h-full relative overflow-hidden">
<!-- Top Nav -->
<header class="flex items-center justify-between px-6 py-4 bg-card/80 backdrop-blur-sm border-b border-neutral-100 z-10">
<div class="flex items-center gap-4 lg:hidden">
<button class="text-text-main hover:text-primary">
<span class="material-symbols-outlined">menu</span>
</button>
<div class="size-6 text-primary">
<span class="material-symbols-outlined text-2xl">cottage</span>
</div>
</div>
<div class="hidden lg:block">
<!-- Breadcrumb or Search could go here -->
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-text-secondary text-lg">search</span>
<input class="pl-10 pr-4 py-2 bg-background-light border-none rounded-lg text-sm text-text-main focus:ring-2 focus:ring-primary/20 placeholder:text-text-secondary/70 w-64 transition-all focus:w-80" placeholder="Search reviews..." type="text"/>
</div>
</div>
<div class="flex items-center gap-4">
<button class="relative p-2 text-text-secondary hover:bg-background-light hover:text-primary rounded-lg transition-colors">
<span class="material-symbols-outlined">notifications</span>
<span class="absolute top-2 right-2 size-2 bg-red-500 rounded-full border-2 border-card"></span>
</button>
<div class="h-8 w-px bg-neutral-200 mx-1"></div>
<div class="flex items-center gap-3">
<div class="text-right hidden md:block">
<p class="text-sm font-semibold text-text-main leading-tight">Sarah Jenkins</p>
<p class="text-xs text-text-secondary">Host</p>
</div>
<div class="size-10 rounded-full bg-cover bg-center border-2 border-white shadow-sm cursor-pointer" data-alt="Portrait of Sarah Jenkins, the host" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuD3DO5FupDCsFpucJmSOVQ7NI7ibdFK4xH0izMmgL2B9OMtM-mh_aBN0ATBKiWgDPqvu7I_a3IXNVCPkfkuJbuTOdZDA_dmim_i-eC2aD1gHDfTZffnVoDkpCWrsvS7BP9XqpwX5C3sFenqv8LYjRpVpOB5qG025P2wmWrOrHxPO6IKbE32hc4pGzOm9D4MNhWvdTE5YOn6PTbB8ZXcKAMf1271eE7DoApW28UD59EdiUt9aklEsNVJlNeq9megyTF1AIjKH_zUV5A');"></div>
</div>
</div>
</header>
<!-- Scrollable Content -->
<main class="flex-1 overflow-y-auto bg-background-light p-4 md:p-8">
<div class="max-w-6xl mx-auto flex flex-col gap-8">
<!-- Page Heading & Actions -->
<div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
<div>
<h2 class="text-3xl font-black text-text-main tracking-tight mb-1">Guest Reviews</h2>
<p class="text-text-secondary">Manage feedback from your 12 recent stays</p>
</div>
<div class="flex gap-3">
<button class="px-4 py-2.5 bg-card hover:bg-white text-text-main text-sm font-semibold rounded-lg shadow-sm border border-neutral-200/60 transition-all flex items-center gap-2">
<span class="material-symbols-outlined text-lg">download</span>
                            Download Report
                        </button>
</div>
</div>
<!-- Content Grid -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
<!-- Left Column: Review Feed -->
<div class="lg:col-span-8 flex flex-col gap-6">
<!-- Filter Bar -->
<div class="flex flex-wrap items-center gap-3 pb-2 border-b border-neutral-200/50">
<div class="relative group">
<button class="flex items-center gap-2 px-4 py-2 bg-card hover:bg-white rounded-full shadow-sm text-sm font-medium text-text-main border border-transparent hover:border-neutral-200 transition-all">
                                    All Listings
                                    <span class="material-symbols-outlined text-lg text-text-secondary">expand_more</span>
</button>
</div>
<div class="relative group">
<button class="flex items-center gap-2 px-4 py-2 bg-card hover:bg-white rounded-full shadow-sm text-sm font-medium text-text-main border border-transparent hover:border-neutral-200 transition-all">
                                    Newest First
                                    <span class="material-symbols-outlined text-lg text-text-secondary">expand_more</span>
</button>
</div>
<div class="relative group">
<button class="flex items-center gap-2 px-4 py-2 bg-card hover:bg-white rounded-full shadow-sm text-sm font-medium text-text-main border border-transparent hover:border-neutral-200 transition-all">
                                    Rating
                                    <span class="material-symbols-outlined text-lg text-text-secondary">expand_more</span>
</button>
</div>
<div class="ml-auto flex items-center gap-2 text-sm text-text-secondary">
<span>Showing 1-3 of 12</span>
</div>
</div>
<!-- Review Card 1 -->
<div class="bg-card rounded-2xl p-6 shadow-card hover:shadow-soft transition-all duration-300 border border-neutral-100">
<div class="flex justify-between items-start mb-4">
<div class="flex items-center gap-3">
<div class="size-12 rounded-full bg-cover bg-center" data-alt="Portrait of guest James" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDpBF8MrEdplEP-9XwXhPN5hl5xRFqeAZOvVANxoi2UwtTQ0V5bFdeJq9ev5SnqTTEduoOrvXpP8YDOlDdjmvZqn9mQiXXRuyMyfV8ByCT-DQeZTSuSJ9sYaFPusRVEStmVUJLN0RMt5Te4jWh9okYxaFzP5V7BychJeqwSgKSKDLIXit1NDtC6k0wzwlHhMvv7beHQ6zU3KAysSPEiPvRx-lRQSxL-UP0PYzkaW7kBkgVQJJEpgx_C6yTZ6jhPg2Y_Yjvm8PtLbR4');"></div>
<div>
<h3 class="font-bold text-text-main leading-tight">James Patterson</h3>
<div class="flex items-center gap-2 text-xs text-text-secondary mt-0.5">
<span>Oct 24, 2023</span>
<span class="size-1 bg-neutral-300 rounded-full"></span>
<span>Joined 2021</span>
</div>
</div>
</div>
<div class="flex gap-0.5 text-primary">
<span class="material-symbols-outlined text-[18px] icon-filled">star</span>
<span class="material-symbols-outlined text-[18px] icon-filled">star</span>
<span class="material-symbols-outlined text-[18px] icon-filled">star</span>
<span class="material-symbols-outlined text-[18px] icon-filled">star</span>
<span class="material-symbols-outlined text-[18px] icon-filled">star</span>
</div>
</div>
<p class="text-text-main text-sm leading-relaxed mb-5">
                                The place was absolutely stunning! The attention to detail in the decor was amazing, and the location couldn't be better. We were within walking distance of all the best cafes. Sarah was super responsive and helpful throughout our stay.
                            </p>
<div class="bg-background-light rounded-xl p-3 flex items-center justify-between mb-5">
<div class="flex items-center gap-3">
<div class="size-10 rounded-lg bg-cover bg-center" data-alt="Thumbnail of Modern Loft Apartment interior" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBwiiiuge0tL0gGGKpOL5FtuaHtXoH8kb7c4-uAsLSP4hXKmICle9Oaoq_N6mxVPBeAZGlMeWS04EXwqR5rHaDOY-wM4KRdMRHGHjG4lg55LzELPLJP05Jt4Y7yLRelWK5Fdii1BJPrejOBHrphS8MkTE_In61bHbzeNoEhKeQi6NgfaW-ksfLmWQIi6utiN7FtaCmYBDINID0fse0_Kgdkf88azpRl2iUvhhuJNCYDVUX2oe_aZEiyewhT_T7byOUTrJwWTl5DOBw');"></div>
<div class="flex flex-col">
<span class="text-xs font-bold text-text-main">Modern Loft in Downtown</span>
<span class="text-[10px] text-text-secondary uppercase tracking-wider">Oct 20 - Oct 23</span>
</div>
</div>
<button class="text-primary hover:text-primary-hover text-xs font-bold px-3 py-1.5 rounded-lg border border-primary/20 hover:bg-primary/5 transition-colors">
                                    View Booking
                                </button>
</div>
<div class="flex items-center justify-end gap-3 pt-4 border-t border-neutral-100">
<button class="text-text-secondary hover:text-text-main text-sm font-medium px-3 py-2 rounded-lg transition-colors flex items-center gap-2">
<span class="material-symbols-outlined text-lg">flag</span>
                                    Report
                                </button>
<button class="bg-primary hover:bg-primary-hover text-white text-sm font-semibold px-5 py-2 rounded-lg shadow-sm transition-colors flex items-center gap-2">
<span class="material-symbols-outlined text-lg">reply</span>
                                    Reply
                                </button>
</div>
</div>
<!-- Review Card 2 -->
<div class="bg-card rounded-2xl p-6 shadow-card hover:shadow-soft transition-all duration-300 border border-neutral-100">
<div class="flex justify-between items-start mb-4">
<div class="flex items-center gap-3">
<div class="size-12 rounded-full bg-cover bg-center" data-alt="Portrait of guest Elena" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuB5uNrrrPViZ1EMoQQ8hAQeKbh4we1J0uS6telsz05dDb1_UybLTOZDPzkAI3Q0YE_a3M6mi6VigNe-H4H1YA1BTzlMdZ3wrn5pq-Km81a9OjEnoEmxUt4n0GZasrCeGJgrqXr4Jz4e9gbAJdlPQuS8REOGWWSZmocQwNLqNK3MLSpE3nRmmRDn3DzButBwew-Z34gKxCI7RUswwQMg5q_1FXOh3FWZ32ZvBD_fsjSJvg1zuhkCfgsNcErSLKHMOWbJo-pWAipO6Y0');"></div>
<div>
<h3 class="font-bold text-text-main leading-tight">Elena Rodriguez</h3>
<div class="flex items-center gap-2 text-xs text-text-secondary mt-0.5">
<span>Sep 15, 2023</span>
<span class="size-1 bg-neutral-300 rounded-full"></span>
<span>Joined 2023</span>
</div>
</div>
</div>
<div class="flex gap-0.5 text-primary">
<span class="material-symbols-outlined text-[18px] icon-filled">star</span>
<span class="material-symbols-outlined text-[18px] icon-filled">star</span>
<span class="material-symbols-outlined text-[18px] icon-filled">star</span>
<span class="material-symbols-outlined text-[18px] icon-filled">star</span>
<span class="material-symbols-outlined text-neutral-300 text-[18px]">star</span>
</div>
</div>
<p class="text-text-main text-sm leading-relaxed mb-5">
                                Great stay overall! The apartment is very spacious and clean. The only minor issue was that the WiFi was a bit spotty in the bedroom, but it worked fine in the living room. Would definitely stay here again.
                            </p>
<!-- Replied State -->
<div class="pl-4 border-l-2 border-neutral-200 mb-5">
<p class="text-xs text-text-secondary mb-1">You replied on Sep 16, 2023</p>
<p class="text-sm text-text-main italic">"Thanks for the feedback Elena! We've actually upgraded the router this week to ensure better coverage throughout the apartment. Hope to see you again!"</p>
</div>
<div class="bg-background-light rounded-xl p-3 flex items-center justify-between mb-5">
<div class="flex items-center gap-3">
<div class="size-10 rounded-lg bg-cover bg-center" data-alt="Thumbnail of Sunny Studio apartment" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDyFwd5fivrQZ-9MuluodiZVPY-IeFbjAiFLv3Sdk4ev4E2JdSBBkBBOXTSqP-9zLtKorug4y3zWe_gTMDbfjOGLdEOKwf0ge6yD03qIS5WmCJoA0lsbtjKJkrXuAmGQPLccP4OnNpmGzRBIPhD8fy6l_XoB4akWlbJl2J9Bus0SQXa_nCiYYybpYj2bGbO_Q1NRGpDADmYhHRPm8swiXFHx0stC1CQWJWDySYkwNU5atpNirviBoKtainm7QGbU6SkoVBOlZ6h9_o');"></div>
<div class="flex flex-col">
<span class="text-xs font-bold text-text-main">Sunny Studio by the Park</span>
<span class="text-[10px] text-text-secondary uppercase tracking-wider">Sep 12 - Sep 15</span>
</div>
</div>
<button class="text-primary hover:text-primary-hover text-xs font-bold px-3 py-1.5 rounded-lg border border-primary/20 hover:bg-primary/5 transition-colors">
                                    View Booking
                                </button>
</div>
<div class="flex items-center justify-end gap-3 pt-4 border-t border-neutral-100">
<div class="flex items-center gap-2 text-primary font-medium text-sm px-3 py-2">
<span class="material-symbols-outlined text-lg">check_circle</span>
                                    Replied
                                </div>
</div>
</div>
<!-- Review Card 3 -->
<div class="bg-card rounded-2xl p-6 shadow-card hover:shadow-soft transition-all duration-300 border border-neutral-100 opacity-90">
<div class="flex justify-between items-start mb-4">
<div class="flex items-center gap-3">
<div class="size-12 rounded-full bg-cover bg-center" data-alt="Portrait of guest Marcus" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCqeONRz9mmuZBB03vjve_vTH_Lb3VKcKs1t87mz-IwLBKsaLhnEySpY33232fNf7fLMfKMmmEY5H9_hXLkxIng_3gHNf-dJXPCstdg9R-ImNahmBllEVwQCFpmWQiyP1c5aNggLcShp0KFqQ-9z1z1DRGXZNVAwZb_lMedfwcPLygAP6zNoK2AajsaNFGnudyikbfLUxcTDschOBoNmRUv5CcTmvymieTORtNObQ2q7BmPKeqkegRkA_SVGSf967N8-5YMEk2uejo');"></div>
<div>
<h3 class="font-bold text-text-main leading-tight">Marcus Chen</h3>
<div class="flex items-center gap-2 text-xs text-text-secondary mt-0.5">
<span>Aug 30, 2023</span>
<span class="size-1 bg-neutral-300 rounded-full"></span>
<span>Joined 2020</span>
</div>
</div>
</div>
<div class="flex gap-0.5 text-primary">
<span class="material-symbols-outlined text-[18px] icon-filled">star</span>
<span class="material-symbols-outlined text-[18px] icon-filled">star</span>
<span class="material-symbols-outlined text-[18px] icon-filled">star</span>
<span class="material-symbols-outlined text-[18px] icon-filled">star</span>
<span class="material-symbols-outlined text-[18px] icon-filled">star</span>
</div>
</div>
<p class="text-text-main text-sm leading-relaxed mb-5">
                                Perfect weekend getaway. The view from the balcony is exactly as pictured.
                            </p>
<div class="bg-background-light rounded-xl p-3 flex items-center justify-between mb-5">
<div class="flex items-center gap-3">
<div class="size-10 rounded-lg bg-cover bg-center" data-alt="Thumbnail of Modern Loft Apartment interior" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDs-D3Wp2fwQggfZY5uN6Nd1SNxlnneJcXAmCJ591rGRkbTWWOkdZPg6dErJejfyRObE2OBWvSGy4BunndIjNXMZekkXoQ5foCZk6Sai_fhxbKVwmblM7rdXZfUg6CRlIMqwS-F15Cv3Ukm48Lm03DycHVhbViexpRzW_fhLKzZiNC5Vra5NpvjVk5jyfKC5NbIx3WyLaVb4DbNVRkAFHs7NHJIvRQIM9jruofiVV3EQw7vTwxOAqwBka3DgsfBDatIbgFtdL6KIWI');"></div>
<div class="flex flex-col">
<span class="text-xs font-bold text-text-main">Modern Loft in Downtown</span>
<span class="text-[10px] text-text-secondary uppercase tracking-wider">Aug 28 - Aug 30</span>
</div>
</div>
<button class="text-primary hover:text-primary-hover text-xs font-bold px-3 py-1.5 rounded-lg border border-primary/20 hover:bg-primary/5 transition-colors">
                                    View Booking
                                </button>
</div>
<div class="flex items-center justify-end gap-3 pt-4 border-t border-neutral-100">
<button class="text-text-secondary hover:text-text-main text-sm font-medium px-3 py-2 rounded-lg transition-colors flex items-center gap-2">
<span class="material-symbols-outlined text-lg">flag</span>
                                    Report
                                </button>
<button class="bg-primary hover:bg-primary-hover text-white text-sm font-semibold px-5 py-2 rounded-lg shadow-sm transition-colors flex items-center gap-2">
<span class="material-symbols-outlined text-lg">reply</span>
                                    Reply
                                </button>
</div>
</div>
<!-- Pagination -->
<div class="flex items-center justify-center gap-2 mt-4">
<button class="size-10 flex items-center justify-center rounded-lg hover:bg-card text-text-secondary hover:text-text-main transition-colors">
<span class="material-symbols-outlined">chevron_left</span>
</button>
<button class="size-10 flex items-center justify-center rounded-lg bg-primary text-white font-bold shadow-sm">1</button>
<button class="size-10 flex items-center justify-center rounded-lg hover:bg-card text-text-main transition-colors font-medium">2</button>
<button class="size-10 flex items-center justify-center rounded-lg hover:bg-card text-text-main transition-colors font-medium">3</button>
<span class="text-text-secondary px-2">...</span>
<button class="size-10 flex items-center justify-center rounded-lg hover:bg-card text-text-secondary hover:text-text-main transition-colors">
<span class="material-symbols-outlined">chevron_right</span>
</button>
</div>
</div>
<!-- Right Column: Stats & Summary -->
<div class="lg:col-span-4 flex flex-col gap-6">
<!-- Rating Overview Card -->
<div class="bg-card rounded-2xl p-6 shadow-card sticky top-6 border border-neutral-100">
<div class="flex items-end justify-between mb-6">
<div>
<p class="text-text-main font-bold text-lg">Overall Rating</p>
<p class="text-text-secondary text-xs">Based on 12 reviews</p>
</div>
<div class="flex items-center gap-2 text-primary">
<span class="material-symbols-outlined text-2xl icon-filled">star</span>
<span class="text-4xl font-black text-text-main">4.8</span>
</div>
</div>
<!-- Rating Distribution -->
<div class="space-y-3 mb-8">
<div class="flex items-center gap-3 text-sm">
<span class="w-3 font-bold text-text-main">5</span>
<div class="flex-1 h-2 bg-background-light rounded-full overflow-hidden">
<div class="h-full bg-primary rounded-full" style="width: 78%"></div>
</div>
<span class="w-8 text-right text-text-secondary text-xs">78%</span>
</div>
<div class="flex items-center gap-3 text-sm">
<span class="w-3 font-bold text-text-main">4</span>
<div class="flex-1 h-2 bg-background-light rounded-full overflow-hidden">
<div class="h-full bg-primary rounded-full" style="width: 15%"></div>
</div>
<span class="w-8 text-right text-text-secondary text-xs">15%</span>
</div>
<div class="flex items-center gap-3 text-sm">
<span class="w-3 font-bold text-text-main">3</span>
<div class="flex-1 h-2 bg-background-light rounded-full overflow-hidden">
<div class="h-full bg-primary rounded-full" style="width: 5%"></div>
</div>
<span class="w-8 text-right text-text-secondary text-xs">5%</span>
</div>
<div class="flex items-center gap-3 text-sm">
<span class="w-3 font-bold text-text-main">2</span>
<div class="flex-1 h-2 bg-background-light rounded-full overflow-hidden">
<div class="h-full bg-primary rounded-full" style="width: 2%"></div>
</div>
<span class="w-8 text-right text-text-secondary text-xs">2%</span>
</div>
<div class="flex items-center gap-3 text-sm">
<span class="w-3 font-bold text-text-main">1</span>
<div class="flex-1 h-2 bg-background-light rounded-full overflow-hidden">
<div class="h-full bg-neutral-200 rounded-full" style="width: 0%"></div>
</div>
<span class="w-8 text-right text-text-secondary text-xs">0%</span>
</div>
</div>
<hr class="border-neutral-100 mb-6"/>
<!-- Category Breakdown -->
<div class="space-y-4">
<div>
<div class="flex justify-between mb-1">
<span class="text-sm font-medium text-text-main">Cleanliness</span>
<span class="text-sm font-bold text-text-main">4.9</span>
</div>
<div class="h-1.5 w-full bg-background-light rounded-full overflow-hidden">
<div class="h-full bg-text-main rounded-full" style="width: 98%"></div>
</div>
</div>
<div>
<div class="flex justify-between mb-1">
<span class="text-sm font-medium text-text-main">Communication</span>
<span class="text-sm font-bold text-text-main">5.0</span>
</div>
<div class="h-1.5 w-full bg-background-light rounded-full overflow-hidden">
<div class="h-full bg-text-main rounded-full" style="width: 100%"></div>
</div>
</div>
<div>
<div class="flex justify-between mb-1">
<span class="text-sm font-medium text-text-main">Check-in</span>
<span class="text-sm font-bold text-text-main">4.8</span>
</div>
<div class="h-1.5 w-full bg-background-light rounded-full overflow-hidden">
<div class="h-full bg-text-main rounded-full" style="width: 96%"></div>
</div>
</div>
<div>
<div class="flex justify-between mb-1">
<span class="text-sm font-medium text-text-main">Accuracy</span>
<span class="text-sm font-bold text-text-main">4.7</span>
</div>
<div class="h-1.5 w-full bg-background-light rounded-full overflow-hidden">
<div class="h-full bg-text-main rounded-full" style="width: 94%"></div>
</div>
</div>
<div>
<div class="flex justify-between mb-1">
<span class="text-sm font-medium text-text-main">Location</span>
<span class="text-sm font-bold text-text-main">4.9</span>
</div>
<div class="h-1.5 w-full bg-background-light rounded-full overflow-hidden">
<div class="h-full bg-text-main rounded-full" style="width: 98%"></div>
</div>
</div>
<div>
<div class="flex justify-between mb-1">
<span class="text-sm font-medium text-text-main">Value</span>
<span class="text-sm font-bold text-text-main">4.6</span>
</div>
<div class="h-1.5 w-full bg-background-light rounded-full overflow-hidden">
<div class="h-full bg-text-main rounded-full" style="width: 92%"></div>
</div>
</div>
</div>
</div>
<!-- Mini CTA Card -->
<div class="bg-gradient-to-br from-text-main to-neutral-800 rounded-2xl p-6 shadow-lg text-white relative overflow-hidden">
<div class="absolute right-0 top-0 w-32 h-32 bg-white/10 rounded-full blur-3xl -mr-10 -mt-10"></div>
<div class="relative z-10">
<div class="size-10 rounded-lg bg-white/20 flex items-center justify-center mb-4">
<span class="material-symbols-outlined text-white">tips_and_updates</span>
</div>
<h3 class="font-bold text-lg mb-2">Pro Tip</h3>
<p class="text-sm text-neutral-300 mb-4 leading-relaxed">Hosts who reply to reviews within 24 hours are 40% more likely to get repeat bookings.</p>
<button class="text-xs font-bold uppercase tracking-wider text-white border-b border-white/30 pb-0.5 hover:border-white transition-colors">Read Guide</button>
</div>
</div>
</div>
</div>
</div>
</main>
</div>
</body></html>
<!DOCTYPE html>
<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Saved Homes</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#b9847d",
                        "background-light": "#faeded",
                        "background-dark": "#1c1716",
                        "surface-light": "#fdfbf9",
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
        }.material-symbols-filled {
            font-variation-settings: 'FILL' 1, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
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
<aside class="w-64 flex-shrink-0 flex flex-col border-r border-white/50 dark:border-border-dark bg-surface-light dark:bg-surface-dark transition-colors duration-200 shadow-[2px_0_20px_rgba(0,0,0,0.02)] z-10">
<div class="h-full flex flex-col justify-between p-5">
<div class="flex flex-col gap-8">
<div class="flex items-center gap-3">
<div aria-label="User profile picture" class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-12 ring-2 ring-primary/20 shadow-sm" role="img" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAjrM3lLc56ahtY6UkMihECTkGruH_zexgiVq_7ya6X_A4ama7FcsIZYkfcHgtv_fx9sn8Rp1NPvHBcAB8T5XT_3rhkCOJ405oj-757-ioXp_vh6a-KOjCP7TQUVt5uqHrGaexuTE-8EyRcR8Zztz8Q24_xbDIFQEOaciz7Lp84ROznKjZmDHIImCJVA2tbvZXmXvsGVy2ZSv1do7_jbC_bQyhFvXrYnoe0GEklAlVg08w4To_yf46n_d34lTAzKuCGeQZ9GzFzhCU");'>
</div>
<div class="flex flex-col">
<h1 class="text-text-main dark:text-white text-base font-bold leading-tight">Jane Doe</h1>
<p class="text-text-muted text-xs font-medium">Traveler Account</p>
</div>
</div>
<nav class="flex flex-col gap-1.5">
<a class="flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-white hover:shadow-sm dark:hover:bg-background-dark/50 transition-all group text-text-main" href="#">
<span class="material-symbols-outlined text-text-muted group-hover:text-primary transition-colors">explore</span>
<span class="text-sm font-semibold group-hover:text-primary transition-colors">Explore</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-xl bg-white dark:bg-primary/20 text-primary shadow-sm ring-1 ring-black/5 dark:ring-white/10" href="#">
<span class="material-symbols-outlined text-primary material-symbols-filled">favorite</span>
<span class="text-sm font-bold">Saved Homes</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-white hover:shadow-sm dark:hover:bg-background-dark/50 transition-all group text-text-main" href="#">
<span class="material-symbols-outlined text-text-muted group-hover:text-primary transition-colors">flight_takeoff</span>
<span class="text-sm font-semibold group-hover:text-primary transition-colors">My Trips</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-white hover:shadow-sm dark:hover:bg-background-dark/50 transition-all group text-text-main" href="#">
<span class="material-symbols-outlined text-text-muted group-hover:text-primary transition-colors">chat_bubble</span>
<span class="text-sm font-semibold group-hover:text-primary transition-colors">Messages</span>
<span class="ml-auto bg-primary text-white text-[10px] font-bold px-1.5 py-0.5 rounded-full">2</span>
</a>
</nav>
</div>
<div class="flex flex-col gap-2 border-t border-border-light dark:border-border-dark pt-4">
<a class="flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-white hover:shadow-sm dark:hover:bg-background-dark/50 transition-all group text-text-main" href="#">
<span class="material-symbols-outlined text-text-muted group-hover:text-primary transition-colors">settings</span>
<span class="text-sm font-semibold group-hover:text-primary transition-colors">Settings</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-red-50 dark:hover:bg-red-900/10 transition-colors group" href="#">
<span class="material-symbols-outlined text-text-muted group-hover:text-red-500 transition-colors">logout</span>
<span class="text-text-main dark:text-gray-300 text-sm font-semibold group-hover:text-red-500 transition-colors">Log Out</span>
</a>
</div>
</div>
</aside>
<main class="flex-1 flex flex-col h-full overflow-hidden relative">
<div class="flex-1 overflow-y-auto p-6 lg:p-10">
<div class="max-w-7xl mx-auto flex flex-col gap-8">
<div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
<div class="flex flex-col gap-1">
<h1 class="text-3xl font-black text-text-main dark:text-white tracking-tight">Saved Homes</h1>
<p class="text-text-muted text-sm font-medium">Your collection of favorite places to stay for your next adventure.</p>
</div>
<div class="flex items-center gap-3">
<div class="relative group">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-text-muted group-focus-within:text-primary transition-colors">search</span>
<input class="h-10 pl-10 pr-4 bg-surface-light dark:bg-surface-dark border border-white/60 dark:border-border-dark rounded-xl text-sm text-text-main dark:text-white placeholder-text-muted focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all shadow-sm w-64" placeholder="Search saved list..." type="text"/>
</div>
<button class="flex items-center justify-center gap-2 h-10 px-4 bg-surface-light dark:bg-surface-dark border border-white/60 dark:border-border-dark rounded-xl text-text-main dark:text-gray-200 text-sm font-semibold shadow-sm hover:bg-white dark:hover:bg-neutral-800 transition-all">
<span class="material-symbols-outlined text-[20px]">sort</span>
<span>Sort</span>
</button>
</div>
</div>
<div class="flex gap-3 overflow-x-auto pb-2 scrollbar-hide">
<button class="whitespace-nowrap h-9 px-4 rounded-full bg-primary text-white text-xs font-bold shadow-md shadow-primary/20 transition-transform active:scale-95">
                        All Homes (5)
                    </button>
<button class="whitespace-nowrap h-9 px-4 rounded-full bg-surface-light dark:bg-surface-dark border border-transparent hover:border-primary/30 text-text-main dark:text-gray-300 text-xs font-semibold shadow-sm hover:shadow-md transition-all">
                        Beachfront
                    </button>
<button class="whitespace-nowrap h-9 px-4 rounded-full bg-surface-light dark:bg-surface-dark border border-transparent hover:border-primary/30 text-text-main dark:text-gray-300 text-xs font-semibold shadow-sm hover:shadow-md transition-all">
                        City Apartments
                    </button>
<button class="whitespace-nowrap h-9 px-4 rounded-full bg-surface-light dark:bg-surface-dark border border-transparent hover:border-primary/30 text-text-main dark:text-gray-300 text-xs font-semibold shadow-sm hover:shadow-md transition-all">
                        Cabins
                    </button>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
<div class="group flex flex-col bg-surface-light dark:bg-surface-dark rounded-2xl shadow-sm border border-white/60 dark:border-border-dark overflow-hidden hover:shadow-[0_8px_30px_rgba(0,0,0,0.04)] hover:-translate-y-1 transition-all duration-300">
<div class="relative aspect-[4/3] bg-gray-200 overflow-hidden">
<div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuA7TgeKhMOMsrqZ1I8Sdib7wk0K5ZcUkWEtr9GpWlhsEQVy_mwB8poZZagRvn7Ywedv14MfEy-eUs0g87lI1diwHRNXrT3qtcnoyqV5sY6Iep_rfveaYw1z2Mr-ToYJOtsNjY5AZM-81NEN4zWKNJpeMt15XGQ7JVSvmELLCP8hC488L39GeR9oDZ0DHRQMVeovFeG9vtzabv36Iu_imuwpn9kBFl0t0idc9f0w5V84bYkIT-UzS-y8Fz5-3iDt4yZdx_6v8j317TM');"></div>
<div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent opacity-60 group-hover:opacity-80 transition-opacity"></div>
<button class="absolute top-3 right-3 p-2 rounded-full bg-white/90 backdrop-blur-sm text-primary shadow-sm hover:bg-white hover:scale-105 transition-all z-10" title="Remove from saved">
<span class="material-symbols-outlined text-[20px] material-symbols-filled">favorite</span>
</button>
<div class="absolute bottom-3 left-3 right-3 flex justify-between items-end">
<span class="bg-white/90 backdrop-blur-md px-2 py-1 rounded-md text-[10px] font-bold text-text-main uppercase tracking-wider shadow-sm">Superhost</span>
</div>
</div>
<div class="p-5 flex flex-col gap-2 flex-1">
<div class="flex justify-between items-start gap-2">
<h3 class="font-bold text-text-main dark:text-white text-lg leading-snug group-hover:text-primary transition-colors">Cozy Loft in Downtown</h3>
<div class="flex items-center gap-1 text-xs font-bold text-text-main dark:text-gray-200">
<span class="material-symbols-outlined text-[16px] text-primary material-symbols-filled">star</span>
                                    4.92
                                </div>
</div>
<p class="text-text-muted text-sm font-medium flex items-center gap-1">
<span class="material-symbols-outlined text-[16px]">location_on</span>
                                New York, NY
                            </p>
<div class="mt-auto pt-4 flex items-center justify-between border-t border-border-light dark:border-border-dark/50">
<div class="flex items-baseline gap-1">
<span class="font-bold text-lg text-primary">$185</span>
<span class="text-xs text-text-muted font-medium">/ night</span>
</div>
</div>
</div>
</div>
<div class="group flex flex-col bg-surface-light dark:bg-surface-dark rounded-2xl shadow-sm border border-white/60 dark:border-border-dark overflow-hidden hover:shadow-[0_8px_30px_rgba(0,0,0,0.04)] hover:-translate-y-1 transition-all duration-300">
<div class="relative aspect-[4/3] bg-gray-200 overflow-hidden">
<div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCVJQwoh1hqpXsIk8jS_d0CZx1D8BNRUWg1-6FnPkKeFpr9IhnCcvR7OYyIvsd4nFUIM4Rn54DGjuvZLD6kGUoHJjCM4lZeGfYi85sCXLycDXbsdxryp5GKsVr_XkBYGQPImlo-4lmBJH1XVTX9lhZKTPbuEOTtaOcsiBU_85q2s6D3KUVUCfclx5evk_RJ5N4JnI1K2OYrqzMRPMk2-Lg0M69UjbTY4yCUfCRW2prUYQcAiLzTIp6QUJtNYSoDj1dG8forpDWx82k');"></div>
<div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent opacity-60 group-hover:opacity-80 transition-opacity"></div>
<button class="absolute top-3 right-3 p-2 rounded-full bg-white/90 backdrop-blur-sm text-primary shadow-sm hover:bg-white hover:scale-105 transition-all z-10" title="Remove from saved">
<span class="material-symbols-outlined text-[20px] material-symbols-filled">favorite</span>
</button>
</div>
<div class="p-5 flex flex-col gap-2 flex-1">
<div class="flex justify-between items-start gap-2">
<h3 class="font-bold text-text-main dark:text-white text-lg leading-snug group-hover:text-primary transition-colors">Beachfront Villa</h3>
<div class="flex items-center gap-1 text-xs font-bold text-text-main dark:text-gray-200">
<span class="material-symbols-outlined text-[16px] text-primary material-symbols-filled">star</span>
                                    5.0
                                </div>
</div>
<p class="text-text-muted text-sm font-medium flex items-center gap-1">
<span class="material-symbols-outlined text-[16px]">location_on</span>
                                Miami, FL
                            </p>
<div class="mt-auto pt-4 flex items-center justify-between border-t border-border-light dark:border-border-dark/50">
<div class="flex items-baseline gap-1">
<span class="font-bold text-lg text-primary">$450</span>
<span class="text-xs text-text-muted font-medium">/ night</span>
</div>
</div>
</div>
</div>
<div class="group flex flex-col bg-surface-light dark:bg-surface-dark rounded-2xl shadow-sm border border-white/60 dark:border-border-dark overflow-hidden hover:shadow-[0_8px_30px_rgba(0,0,0,0.04)] hover:-translate-y-1 transition-all duration-300">
<div class="relative aspect-[4/3] bg-gray-200 overflow-hidden">
<div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuC3a5PdQP4GsRs_KND30quLTE1UVudvMC2haVMLvCiWADm72AVO8eo9RzfgJguv3GHm28puQH1ZCBayQ421-FuyKzgEBKSlt0V83pzsjGb9Ox_-uSpsx2dOa_VsdwWdk4ZCI8qFUpN04QCutt2W2Jro0znO63svVd2CKm6637GhCf8Aosf6NAyVbQora7qccFNkjnJ9xvObg5aaXRQuoSX88cuLz8ns1hlUtO94D2xj1RZLLc9GZynFDIaUGeTQxuNLRNFFoPNLqi4');"></div>
<div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent opacity-60 group-hover:opacity-80 transition-opacity"></div>
<button class="absolute top-3 right-3 p-2 rounded-full bg-white/90 backdrop-blur-sm text-primary shadow-sm hover:bg-white hover:scale-105 transition-all z-10" title="Remove from saved">
<span class="material-symbols-outlined text-[20px] material-symbols-filled">favorite</span>
</button>
<div class="absolute bottom-3 left-3 right-3 flex justify-between items-end">
<span class="bg-white/90 backdrop-blur-md px-2 py-1 rounded-md text-[10px] font-bold text-text-main uppercase tracking-wider shadow-sm">Rare Find</span>
</div>
</div>
<div class="p-5 flex flex-col gap-2 flex-1">
<div class="flex justify-between items-start gap-2">
<h3 class="font-bold text-text-main dark:text-white text-lg leading-snug group-hover:text-primary transition-colors">Mountain Retreat Cabin</h3>
<div class="flex items-center gap-1 text-xs font-bold text-text-main dark:text-gray-200">
<span class="material-symbols-outlined text-[16px] text-primary material-symbols-filled">star</span>
                                    4.75
                                </div>
</div>
<p class="text-text-muted text-sm font-medium flex items-center gap-1">
<span class="material-symbols-outlined text-[16px]">location_on</span>
                                Denver, CO
                            </p>
<div class="mt-auto pt-4 flex items-center justify-between border-t border-border-light dark:border-border-dark/50">
<div class="flex items-baseline gap-1">
<span class="font-bold text-lg text-primary">$220</span>
<span class="text-xs text-text-muted font-medium">/ night</span>
</div>
</div>
</div>
</div>
<div class="group flex flex-col bg-surface-light dark:bg-surface-dark rounded-2xl shadow-sm border border-white/60 dark:border-border-dark overflow-hidden hover:shadow-[0_8px_30px_rgba(0,0,0,0.04)] hover:-translate-y-1 transition-all duration-300">
<div class="relative aspect-[4/3] bg-gray-200 overflow-hidden">
<div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBY3Ruxu5SGTvEKUHfOmiBVbltz6_XaYJVT9DZoUFIeED0wC70pzwbopiw1oZjImmvGhJrDeNSflhDG0zgDvxd17SVvX_u-iUf7xtONnpPw076Q0ubFEzqWwSLIP2-xpJfqNCLbM-uheMYuMVSrfpYayiJCGbEikYTRxzHOFTf6ym7QSfipU6ZFvV9KmDIq0jc5MS5FJvej_4SMREtw2vR2i3woRLFDAm9bqB4IVOqRS9NflRhpVBjhBOC_FrSxf4IVfipF0--H1ks');"></div>
<div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent opacity-60 group-hover:opacity-80 transition-opacity"></div>
<button class="absolute top-3 right-3 p-2 rounded-full bg-white/90 backdrop-blur-sm text-primary shadow-sm hover:bg-white hover:scale-105 transition-all z-10" title="Remove from saved">
<span class="material-symbols-outlined text-[20px] material-symbols-filled">favorite</span>
</button>
</div>
<div class="p-5 flex flex-col gap-2 flex-1">
<div class="flex justify-between items-start gap-2">
<h3 class="font-bold text-text-main dark:text-white text-lg leading-snug group-hover:text-primary transition-colors">Sunny Mission Flat</h3>
<div class="flex items-center gap-1 text-xs font-bold text-text-main dark:text-gray-200">
<span class="material-symbols-outlined text-[16px] text-primary material-symbols-filled">star</span>
                                    4.88
                                </div>
</div>
<p class="text-text-muted text-sm font-medium flex items-center gap-1">
<span class="material-symbols-outlined text-[16px]">location_on</span>
                                San Francisco, CA
                            </p>
<div class="mt-auto pt-4 flex items-center justify-between border-t border-border-light dark:border-border-dark/50">
<div class="flex items-baseline gap-1">
<span class="font-bold text-lg text-primary">$310</span>
<span class="text-xs text-text-muted font-medium">/ night</span>
</div>
</div>
</div>
</div>
<div class="group flex flex-col bg-surface-light dark:bg-surface-dark rounded-2xl shadow-sm border border-white/60 dark:border-border-dark overflow-hidden hover:shadow-[0_8px_30px_rgba(0,0,0,0.04)] hover:-translate-y-1 transition-all duration-300">
<div class="relative aspect-[4/3] bg-gray-200 overflow-hidden">
<div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuC6_mbrwH0cJ4dem98mWHYpqFZx-5eWvnzGh6Ro6bLodXltI6v0oqdX7Qfo92xku_5loyS30sy2ZjFZan1tOmsy6zEE-vaXA-eyVyQFHsKT36QFaNpZPaHMSqtTLwBwP94ZQUlYky4vIwANwX2jxTJ-4vbNqoY8cNE_iKYnMjRFLX2MXnUOMNiTFfq0nYUeMgzw4feEmD29jsyIwSxaw8w07d5FBMsycnf7VFre5bBhTfOsUwE5SjUTOSjrWAvfn6z0fZhD_RN1EIw');"></div>
<div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent opacity-60 group-hover:opacity-80 transition-opacity"></div>
<button class="absolute top-3 right-3 p-2 rounded-full bg-white/90 backdrop-blur-sm text-primary shadow-sm hover:bg-white hover:scale-105 transition-all z-10" title="Remove from saved">
<span class="material-symbols-outlined text-[20px] material-symbols-filled">favorite</span>
</button>
</div>
<div class="p-5 flex flex-col gap-2 flex-1">
<div class="flex justify-between items-start gap-2">
<h3 class="font-bold text-text-main dark:text-white text-lg leading-snug group-hover:text-primary transition-colors">Minimalist Studio</h3>
<div class="flex items-center gap-1 text-xs font-bold text-text-main dark:text-gray-200">
<span class="material-symbols-outlined text-[16px] text-primary material-symbols-filled">star</span>
                                    4.65
                                </div>
</div>
<p class="text-text-muted text-sm font-medium flex items-center gap-1">
<span class="material-symbols-outlined text-[16px]">location_on</span>
                                Tokyo, JP
                            </p>
<div class="mt-auto pt-4 flex items-center justify-between border-t border-border-light dark:border-border-dark/50">
<div class="flex items-baseline gap-1">
<span class="font-bold text-lg text-primary">$120</span>
<span class="text-xs text-text-muted font-medium">/ night</span>
</div>
</div>
</div>
</div>
</div>
<div class="flex flex-col items-center justify-center p-8 text-center mt-8 border-t border-dashed border-border-light dark:border-border-dark">
<p class="text-text-muted text-sm">Don't see what you're looking for?</p>
<a class="text-primary text-sm font-bold hover:underline mt-1" href="#">Explore more homes</a>
</div>
</div>
</div>
</main>
</div>

</body></html>
<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Rentals Listing Page</title>
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Noto+Sans:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<!-- Tailwind Theme Config -->
<script id="tailwind-config">
        tailwind.config = {
          darkMode: "class",
          theme: {
            extend: {
              colors: {
                "primary": "#b9857e",
                "background-light": "#f7f7f6",
                "background-dark": "#1c1716",
                "text-main": "#585453",
                "text-dark": "#161313",
              },
              fontFamily: {
                "display": ["Inter", "sans-serif"]
              },
              borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
              boxShadow: {
                  'soft': '0 2px 10px rgba(0, 0, 0, 0.03)',
                  'card': '0 4px 20px rgba(0, 0, 0, 0.05)',
              }
            },
          },
        }
    </script>
<style>
        /* Custom scrollbar for horizontal scrolling if needed */
        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-text-main antialiased min-h-screen flex flex-col">
<!-- Top Navigation Bar -->
<header class="sticky top-0 z-50 bg-white border-b border-[#f3f2f1] dark:bg-background-dark dark:border-gray-800">
<div class="max-w-[1440px] mx-auto px-6 md:px-10 h-20 flex items-center justify-between">
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
<!-- Nav Links -->
<div class="hidden md:flex items-center gap-8">
  <a class="text-text-main hover:text-primary text-sm font-medium transition-colors" href="/Views/index.view.php">Home</a>
<a class="text-text-main hover:text-primary text-sm font-medium transition-colors" href="/Views/rentalsListing.view.php">Rentals</a>
</div>
<!-- Profile & Host -->
<div class="flex items-center gap-4">
<button class="hidden lg:flex cursor-pointer items-center justify-center rounded-full h-10 px-4 hover:bg-[#f3f2f1] dark:hover:bg-gray-800 text-text-dark dark:text-white text-sm font-semibold transition-colors">
                    Become a Host
                </button>
<div class="flex items-center gap-2 border border-[#e2dfdf] dark:border-gray-700 rounded-full p-1 pl-3 hover:shadow-soft transition-shadow cursor-pointer bg-white dark:bg-gray-800">
<span class="material-symbols-outlined text-text-main text-[20px]">menu</span>
<div class="bg-center bg-no-repeat bg-cover rounded-full size-8" data-alt="User profile avatar" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDrB6XAHuHWqSxlG3-Kc7beS8fBe5JQ6Q5voMxs6tsN8RLXHB-xxwZ4-qkXlHBEXGQvlmbunPpfqZg_2_K4uFV5sltsAgduqL9kE0RQ5JbDX85bFK8__3P7_4cc0k6c5wQyRxB0863kY27BUQDseNQ1UTMZfZv5YhNogtmG1fnXhkQIUZGAVncZrTSC2FvRbyQB6SZnxr4wvnJe8UIk-ZsOQ3ooFRsMwAzcO6ApeIgVsIe3cVW6rMSjWV2LIR5zOxBKf_ipAY_ys7I");'></div>
</div>
</div>
</div>
</header>
<!-- Filter Bar -->
<section class="bg-white dark:bg-background-dark border-b border-[#f3f2f1] dark:border-gray-800 py-4 shadow-soft sticky top-20 z-40">
<div class="max-w-[1440px] mx-auto px-6 md:px-10">
<div class="flex flex-col lg:flex-row lg:items-center gap-4 lg:gap-6">
<!-- Location -->
<div class="flex-1 min-w-[200px]">
<div class="flex w-full items-center rounded-full border border-[#e2dfdf] dark:border-gray-700 bg-white dark:bg-gray-800 h-12 px-4 shadow-sm focus-within:ring-2 focus-within:ring-primary focus-within:border-transparent transition-all">
<span class="material-symbols-outlined text-text-main dark:text-gray-400 mr-3">search</span>
<input class="w-full bg-transparent border-none p-0 text-text-dark dark:text-white text-sm font-medium placeholder:text-[#7c706e] focus:ring-0" placeholder="Where are you going?" value="New York, NY"/>
</div>
</div>
<!-- Dates -->
<div class="flex flex-1 items-center gap-2 min-w-[280px]">
<div class="flex-1 flex items-center rounded-full border border-[#e2dfdf] dark:border-gray-700 bg-white dark:bg-gray-800 h-12 px-4 shadow-sm hover:border-primary/50 cursor-pointer">
<span class="material-symbols-outlined text-text-main dark:text-gray-400 mr-2 text-[20px]">calendar_today</span>
<div class="flex flex-col justify-center">
<span class="text-[10px] uppercase font-bold text-text-main leading-none mb-0.5">Check-in</span>
<span class="text-text-dark dark:text-white text-xs font-medium leading-none">Sept 15</span>
</div>
</div>
<div class="flex-1 flex items-center rounded-full border border-[#e2dfdf] dark:border-gray-700 bg-white dark:bg-gray-800 h-12 px-4 shadow-sm hover:border-primary/50 cursor-pointer">
<span class="material-symbols-outlined text-text-main dark:text-gray-400 mr-2 text-[20px]">calendar_today</span>
<div class="flex flex-col justify-center">
<span class="text-[10px] uppercase font-bold text-text-main leading-none mb-0.5">Check-out</span>
<span class="text-text-dark dark:text-white text-xs font-medium leading-none">Sept 20</span>
</div>
</div>
</div>
<!-- Guests -->
<div class="flex-0 min-w-[140px]">
<div class="relative flex items-center">
<select class="appearance-none w-full rounded-full border border-[#e2dfdf] dark:border-gray-700 bg-white dark:bg-gray-800 h-12 pl-4 pr-10 text-text-dark dark:text-white text-sm font-medium shadow-sm focus:ring-2 focus:ring-primary focus:border-transparent cursor-pointer">
<option value="1">1 Guest</option>
<option selected="" value="2">2 Guests</option>
<option value="3">3 Guests</option>
<option value="4+">4+ Guests</option>
</select>
<span class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 text-text-main pointer-events-none">expand_more</span>
</div>
</div>
<!-- Price Slider Container -->
<div class="hidden xl:flex flex-col justify-center min-w-[240px] px-2">
<div class="flex justify-between items-center mb-1.5">
<span class="text-xs font-medium text-text-main">Price range</span>
<span class="text-xs font-bold text-text-dark dark:text-white">$50 - $500</span>
</div>
<!-- Slider Component Adapted -->
<div class="relative h-1.5 w-full rounded-full bg-[#e2dfdf] dark:bg-gray-700">
<div class="absolute left-[10%] right-[30%] h-full rounded-full bg-primary"></div>
<div class="absolute left-[10%] top-1/2 -translate-y-1/2 size-4 bg-white border-2 border-primary rounded-full shadow cursor-pointer hover:scale-110 transition-transform"></div>
<div class="absolute right-[30%] top-1/2 -translate-y-1/2 size-4 bg-white border-2 border-primary rounded-full shadow cursor-pointer hover:scale-110 transition-transform"></div>
</div>
</div>
<!-- Mobile/Tablet Filter Button (Visual only) -->
<button class="xl:hidden flex items-center justify-center size-12 rounded-full border border-[#e2dfdf] bg-white text-text-dark shadow-sm hover:bg-gray-50">
<span class="material-symbols-outlined">tune</span>
</button>
<!-- Search Button -->
<button class="bg-primary hover:bg-primary/90 text-white h-12 px-8 rounded-full font-bold text-sm shadow-md flex items-center gap-2 transition-transform active:scale-95 ml-auto lg:ml-0">
<span class="material-symbols-outlined text-[20px]">search</span>
<span>Search</span>
</button>
</div>
</div>
</section>
<!-- Main Content Grid -->
<main class="flex-grow w-full max-w-[1440px] mx-auto px-6 md:px-10 py-8">
<!-- Section Header -->
<div class="flex items-baseline justify-between mb-6">
<h1 class="text-2xl font-bold text-text-dark dark:text-white">Stays in New York</h1>
<span class="text-sm text-text-main">142 rentals found</span>
</div>
<!-- Grid -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-x-6 gap-y-10">
<!-- Card 1 -->
<div class="group cursor-pointer flex flex-col gap-3">
<div class="relative aspect-[1/1.05] w-full overflow-hidden rounded-xl bg-gray-200">
<div class="absolute top-3 right-3 z-10">
<button class="flex items-center justify-center size-8 rounded-full bg-white/70 hover:bg-white backdrop-blur-sm transition-all text-text-dark hover:scale-105">
<span class="material-symbols-outlined text-[20px] font-light">favorite</span>
</button>
</div>
<div class="size-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105" data-alt="Modern bright living room with large windows" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAWI_nnp2FSNEttcSyR8JkiKUFJBu_2DU-qvLwa-8D8KT-cXzAKnHvP3qur8WuAgQtc2Zw7Cs2SDYD7Q12KnOK_tgue88iPK03qUyZqNRj1SRM61Ifk92n4QCiDev0dEG66rXpfMoDj-5BE0aEW7RR4Yig3eJZV4Z25WTB5IeJ-_yVgvdisCOXkXd0zMJJVPhhrdI7yP33GjRBROjkpyw82mUHM7wJh2T7XeZPm5Eo76GORGmFw1RJZmwuEWEUu7ir9hGMm0oNyPUA");'></div>
</div>
<div class="flex flex-col gap-1">
<div class="flex justify-between items-start">
<h3 class="font-bold text-text-dark dark:text-white text-base leading-tight group-hover:underline decoration-1 underline-offset-2">Cozy Loft in Manhattan</h3>
<div class="flex items-center gap-1 text-sm">
<span class="material-symbols-outlined text-primary text-[16px] fill-current">star</span>
<span class="text-text-dark dark:text-white font-medium">4.92</span>
</div>
</div>
<p class="text-text-main text-sm">New York, NY</p>
<div class="mt-1 flex items-baseline gap-1">
<span class="text-text-dark dark:text-white font-bold text-base">$145</span>
<span class="text-text-main text-sm">night</span>
</div>
</div>
</div>
<!-- Card 2 -->
<div class="group cursor-pointer flex flex-col gap-3">
<div class="relative aspect-[1/1.05] w-full overflow-hidden rounded-xl bg-gray-200">
<div class="absolute top-3 right-3 z-10">
<button class="flex items-center justify-center size-8 rounded-full bg-white/70 hover:bg-white backdrop-blur-sm transition-all text-primary hover:scale-105">
<span class="material-symbols-outlined text-[20px] font-fill filled">favorite</span>
</button>
</div>
<div class="size-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105" data-alt="Modern apartment interior with stylish furniture" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuC5eAGCVgnjBVERz7uSqnJDOFsLUd-6dL6a8Ww0BUMVxkFitTkmKM067gPl83fjUYCszeZYYDM7hEHRGnS2ZbXHYDa4A1tRlm947z2DmPwAL0dc7i8XWx1_GxkYOoMtISi6570XKSHjHhWN1KDBKmu1JWu-_wJSRc5YYineuNF7EZXpnpfaaG1uXfZI3ngbgI91fhdpQ6_TL7j3XlC8BQPK9lSpsR1nLdnOATXXOQUcnJSWYcRp1nrmBiaOpQ2SvXlbZLib26SVgcc");'></div>
</div>
<div class="flex flex-col gap-1">
<div class="flex justify-between items-start">
<h3 class="font-bold text-text-dark dark:text-white text-base leading-tight group-hover:underline decoration-1 underline-offset-2">Luxury Studio Midtown</h3>
<div class="flex items-center gap-1 text-sm">
<span class="material-symbols-outlined text-primary text-[16px] fill-current">star</span>
<span class="text-text-dark dark:text-white font-medium">4.85</span>
</div>
</div>
<p class="text-text-main text-sm">New York, NY</p>
<div class="mt-1 flex items-baseline gap-1">
<span class="text-text-dark dark:text-white font-bold text-base">$220</span>
<span class="text-text-main text-sm">night</span>
</div>
</div>
</div>
<!-- Card 3 -->
<div class="group cursor-pointer flex flex-col gap-3">
<div class="relative aspect-[1/1.05] w-full overflow-hidden rounded-xl bg-gray-200">
<div class="absolute top-3 right-3 z-10">
<button class="flex items-center justify-center size-8 rounded-full bg-white/70 hover:bg-white backdrop-blur-sm transition-all text-text-dark hover:scale-105">
<span class="material-symbols-outlined text-[20px] font-light">favorite</span>
</button>
</div>
<div class="size-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105" data-alt="Spacious bedroom with minimal decor" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDTXKB5xo3kcLgckiw_ypeDsh0MuPNfSYc8QPfaVCoX8U72YVnGqozpsETHzX1QVEoCOwnuZcFiiyJ78JMJE91o4cL23d3ts8N6fPTrxtSNhiIJFCbH1RLHemSDOzvjBAguPqNQsVwxCJlw8vRbL4S45Ztnbun7a1xAYudJdXiwYme49rtbCCvy8VydhKx68kMtH0DavX6L8t0nhaYl0VQHUw7bChxHooJhgEnya2HH6GgLq2uocIGJA-56Mv0JYF0zD_kffI0rjXE");'></div>
</div>
<div class="flex flex-col gap-1">
<div class="flex justify-between items-start">
<h3 class="font-bold text-text-dark dark:text-white text-base leading-tight group-hover:underline decoration-1 underline-offset-2">Quiet Retreat in Brooklyn</h3>
<div class="flex items-center gap-1 text-sm">
<span class="material-symbols-outlined text-primary text-[16px] fill-current">star</span>
<span class="text-text-dark dark:text-white font-medium">5.0</span>
</div>
</div>
<p class="text-text-main text-sm">Brooklyn, NY</p>
<div class="mt-1 flex items-baseline gap-1">
<span class="text-text-dark dark:text-white font-bold text-base">$95</span>
<span class="text-text-main text-sm">night</span>
</div>
</div>
</div>
<!-- Card 4 -->
<div class="group cursor-pointer flex flex-col gap-3">
<div class="relative aspect-[1/1.05] w-full overflow-hidden rounded-xl bg-gray-200">
<div class="absolute top-3 right-3 z-10">
<button class="flex items-center justify-center size-8 rounded-full bg-white/70 hover:bg-white backdrop-blur-sm transition-all text-text-dark hover:scale-105">
<span class="material-symbols-outlined text-[20px] font-light">favorite</span>
</button>
</div>
<div class="size-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105" data-alt="Bright airy kitchen and dining area" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuB3c_XBlxxXm-j1rzaD0W2O7_KlU0UsvlRaRbPXZr13UfOLfcXUeHucbDUsIl6mAVglAXuxLKQF1KNtNvovg0AkQeCX8BSyLWRSkJ_9LgSdeGKhvL0OUN-oDvMotxHFqAC1ODiT39Ym05H5nsISVr2Jh93dnGYS73G_oCk_g2Ahw-MgXmmzk5ikebEZ72XRHU2uUqTeEJxoVX3kRxjYwpTzrlZt7CMquEC-7fGg2-MIo-b4kq1woMRtg2e61zlIzdJGQ0N31i23szE");'></div>
</div>
<div class="flex flex-col gap-1">
<div class="flex justify-between items-start">
<h3 class="font-bold text-text-dark dark:text-white text-base leading-tight group-hover:underline decoration-1 underline-offset-2">Sunny SoHo Apartment</h3>
<div class="flex items-center gap-1 text-sm">
<span class="material-symbols-outlined text-primary text-[16px] fill-current">star</span>
<span class="text-text-dark dark:text-white font-medium">4.76</span>
</div>
</div>
<p class="text-text-main text-sm">New York, NY</p>
<div class="mt-1 flex items-baseline gap-1">
<span class="text-text-dark dark:text-white font-bold text-base">$350</span>
<span class="text-text-main text-sm">night</span>
</div>
</div>
</div>
<!-- Card 5 -->
<div class="group cursor-pointer flex flex-col gap-3">
<div class="relative aspect-[1/1.05] w-full overflow-hidden rounded-xl bg-gray-200">
<div class="absolute top-3 right-3 z-10">
<button class="flex items-center justify-center size-8 rounded-full bg-white/70 hover:bg-white backdrop-blur-sm transition-all text-text-dark hover:scale-105">
<span class="material-symbols-outlined text-[20px] font-light">favorite</span>
</button>
</div>
<div class="size-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105" data-alt="Minimalist bedroom with wooden bed frame" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDGsgCrFrBIKy0BDbSK_Lkk361RdAG223ukHFk00ePqLXTnu15i-8360MNTaWH6geFxoB1UeWCITt6tvW8fv-gsb1TmhllwUegUPd8xBGdWCD0JES-A0BFPb46PzW0K0FKyM3_ZOUk6nrbbh_VrqOXf6wv5k2ijuT4PLKdM7dqHo9CrNi63gv6Yn8_JiuvKlbyLzriewk20trAUvum77F_EyOof4_oGuApYdDUdB2YusaB0E-nUDaJ8dYCxr9c8xEh30-XW3HvsN9w");'></div>
</div>
<div class="flex flex-col gap-1">
<div class="flex justify-between items-start">
<h3 class="font-bold text-text-dark dark:text-white text-base leading-tight group-hover:underline decoration-1 underline-offset-2">Minimalist Queens Room</h3>
<div class="flex items-center gap-1 text-sm">
<span class="material-symbols-outlined text-primary text-[16px] fill-current">star</span>
<span class="text-text-dark dark:text-white font-medium">4.60</span>
</div>
</div>
<p class="text-text-main text-sm">Queens, NY</p>
<div class="mt-1 flex items-baseline gap-1">
<span class="text-text-dark dark:text-white font-bold text-base">$75</span>
<span class="text-text-main text-sm">night</span>
</div>
</div>
</div>
<!-- Card 6 -->
<div class="group cursor-pointer flex flex-col gap-3">
<div class="relative aspect-[1/1.05] w-full overflow-hidden rounded-xl bg-gray-200">
<div class="absolute top-3 right-3 z-10">
<button class="flex items-center justify-center size-8 rounded-full bg-white/70 hover:bg-white backdrop-blur-sm transition-all text-text-dark hover:scale-105">
<span class="material-symbols-outlined text-[20px] font-light">favorite</span>
</button>
</div>
<div class="size-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105" data-alt="High end kitchen with marble island" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCWmluzxR6iu89jdD_wJgQcIJ8eLJTp_x2uz7tt1WXc6WAOpvg-5mFWJEvj7BPT0goSIHxuU9ZiTFygC_LduQTi-mDLcf4QCrJ3LsSLneHerOPyhUPRTAi6gSWzlIHY3TSHnthAVfJ2Dorf0uJr3m6YGFh22jnQ-YbmXCiZsUsFJROrtgZ6k6uNzIEAvZwgOHjLQ4uYGBisPW2GoYC4lqacdVwPKq_ZzSQbOf-QEjehXOapezXaTaiQbxz1W5xYGkz40xBoyXWu-TI");'></div>
</div>
<div class="flex flex-col gap-1">
<div class="flex justify-between items-start">
<h3 class="font-bold text-text-dark dark:text-white text-base leading-tight group-hover:underline decoration-1 underline-offset-2">Penthouse with View</h3>
<div class="flex items-center gap-1 text-sm">
<span class="material-symbols-outlined text-primary text-[16px] fill-current">star</span>
<span class="text-text-dark dark:text-white font-medium">4.98</span>
</div>
</div>
<p class="text-text-main text-sm">New York, NY</p>
<div class="mt-1 flex items-baseline gap-1">
<span class="text-text-dark dark:text-white font-bold text-base">$800</span>
<span class="text-text-main text-sm">night</span>
</div>
</div>
</div>
<!-- Card 7 -->
<div class="group cursor-pointer flex flex-col gap-3">
<div class="relative aspect-[1/1.05] w-full overflow-hidden rounded-xl bg-gray-200">
<div class="absolute top-3 right-3 z-10">
<button class="flex items-center justify-center size-8 rounded-full bg-white/70 hover:bg-white backdrop-blur-sm transition-all text-text-dark hover:scale-105">
<span class="material-symbols-outlined text-[20px] font-light">favorite</span>
</button>
</div>
<div class="size-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105" data-alt="Eclectic living room with plants and art" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuClAErv-AfE89hgUO5yudMzvX3Bp7xWEAUCdqQla41kt0oVzJVONDW_3mXHGfBbwe7uljuoDuHGyVtBbV6-2ots8y9bQNq-wRmU5HKj1tZK-r1Hzj-UqhoPI4M00B7QnkO6oKghOlPnhQnB0BNqfX1qEGrYR1tNjG65xsLCCrssXpltVZ1VCwXOKmKV0-2ubDluIaK_XkPXmztjv9ixh5m1L9PXN8elNTxmSVGtyyeJuDel5x6wCjVvPKfl6beMnU1yyFkdZLBq63A");'></div>
</div>
<div class="flex flex-col gap-1">
<div class="flex justify-between items-start">
<h3 class="font-bold text-text-dark dark:text-white text-base leading-tight group-hover:underline decoration-1 underline-offset-2">Artistic Haven in Harlem</h3>
<div class="flex items-center gap-1 text-sm">
<span class="material-symbols-outlined text-primary text-[16px] fill-current">star</span>
<span class="text-text-dark dark:text-white font-medium">4.72</span>
</div>
</div>
<p class="text-text-main text-sm">Harlem, NY</p>
<div class="mt-1 flex items-baseline gap-1">
<span class="text-text-dark dark:text-white font-bold text-base">$110</span>
<span class="text-text-main text-sm">night</span>
</div>
</div>
</div>
<!-- Card 8 -->
<div class="group cursor-pointer flex flex-col gap-3">
<div class="relative aspect-[1/1.05] w-full overflow-hidden rounded-xl bg-gray-200">
<div class="absolute top-3 right-3 z-10">
<button class="flex items-center justify-center size-8 rounded-full bg-white/70 hover:bg-white backdrop-blur-sm transition-all text-text-dark hover:scale-105">
<span class="material-symbols-outlined text-[20px] font-light">favorite</span>
</button>
</div>
<div class="size-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105" data-alt="Classic brownstone bedroom interior" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCRi9TrDlEMczlFiW8unu0F4CDTORQxrQ-o3sJP2VExGWqpAydih9jnVkss2BAjbkMlM5tJVTOJItMooxqa3EXYLifSY8EReIiK7oo_BeJWOyIBfmwJHXavkWZpBgq3c7mTTmrvKxr4rQuA44zAuqOueNK_MZhnNbKxJV_wuLlbWVjo-llWLBAwwQxbV1r1ADUq0QEREXwHaBL7k8LyKCS8yE4cpRSUNVy8iUmOqkDz6tExtIpCcetHncQOt5-CiFf8OWSG5gFq3Qw");'></div>
</div>
<div class="flex flex-col gap-1">
<div class="flex justify-between items-start">
<h3 class="font-bold text-text-dark dark:text-white text-base leading-tight group-hover:underline decoration-1 underline-offset-2">Classic Brownstone</h3>
<div class="flex items-center gap-1 text-sm">
<span class="material-symbols-outlined text-primary text-[16px] fill-current">star</span>
<span class="text-text-dark dark:text-white font-medium">4.90</span>
</div>
</div>
<p class="text-text-main text-sm">Brooklyn, NY</p>
<div class="mt-1 flex items-baseline gap-1">
<span class="text-text-dark dark:text-white font-bold text-base">$165</span>
<span class="text-text-main text-sm">night</span>
</div>
</div>
</div>
</div>
<!-- Pagination -->
<div class="mt-16 flex items-center justify-center gap-2">
<button class="flex items-center justify-center size-10 rounded-full hover:bg-gray-100 disabled:opacity-50 disabled:hover:bg-transparent text-text-dark dark:text-white transition-colors" disabled="">
<span class="material-symbols-outlined">chevron_left</span>
</button>
<button class="flex items-center justify-center size-10 rounded-full bg-primary text-white font-semibold shadow-sm">1</button>
<button class="flex items-center justify-center size-10 rounded-full hover:bg-gray-100 text-text-main dark:text-gray-300 transition-colors">2</button>
<button class="flex items-center justify-center size-10 rounded-full hover:bg-gray-100 text-text-main dark:text-gray-300 transition-colors">3</button>
<span class="flex items-center justify-center size-10 text-text-main">...</span>
<button class="flex items-center justify-center size-10 rounded-full hover:bg-gray-100 text-text-main dark:text-gray-300 transition-colors">15</button>
<button class="flex items-center justify-center size-10 rounded-full hover:bg-gray-100 text-text-dark dark:text-white transition-colors">
<span class="material-symbols-outlined">chevron_right</span>
</button>
</div>
</main>
<!-- Footer -->
<footer class="bg-[#f3f2f1] dark:bg-gray-900 border-t border-[#e2dfdf] dark:border-gray-800 py-10 mt-10">
<div class="max-w-[1440px] mx-auto px-6 md:px-10">
<div class="grid grid-cols-2 md:grid-cols-4 gap-8">
<div class="flex flex-col gap-4">
<h4 class="font-bold text-text-dark dark:text-white text-sm">Support</h4>
<a class="text-sm text-text-main hover:underline" href="#">Help Center</a>
<a class="text-sm text-text-main hover:underline" href="#">AirCover</a>
<a class="text-sm text-text-main hover:underline" href="#">Anti-discrimination</a>
<a class="text-sm text-text-main hover:underline" href="#">Disability support</a>
</div>
<div class="flex flex-col gap-4">
<h4 class="font-bold text-text-dark dark:text-white text-sm">Hosting</h4>
<a class="text-sm text-text-main hover:underline" href="#">StayWithUs your home</a>
<a class="text-sm text-text-main hover:underline" href="#">AirCover for Hosts</a>
<a class="text-sm text-text-main hover:underline" href="#">Hosting resources</a>
<a class="text-sm text-text-main hover:underline" href="#">Community forum</a>
</div>
<div class="flex flex-col gap-4">
<h4 class="font-bold text-text-dark dark:text-white text-sm">StayWithUs</h4>
<a class="text-sm text-text-main hover:underline" href="#">Newsroom</a>
<a class="text-sm text-text-main hover:underline" href="#">New features</a>
<a class="text-sm text-text-main hover:underline" href="#">Careers</a>
<a class="text-sm text-text-main hover:underline" href="#">Investors</a>
</div>
<div class="flex flex-col gap-4">
<h4 class="font-bold text-text-dark dark:text-white text-sm">Social</h4>
<div class="flex gap-4 text-text-main">
<div class="size-6 bg-gray-300 rounded" data-alt="Social Icon Placeholder"></div>
<div class="size-6 bg-gray-300 rounded" data-alt="Social Icon Placeholder"></div>
<div class="size-6 bg-gray-300 rounded" data-alt="Social Icon Placeholder"></div>
</div>
</div>
</div>
<div class="border-t border-[#e2dfdf] dark:border-gray-800 mt-10 pt-6 flex flex-col md:flex-row justify-between items-center gap-4">
<p class="text-sm text-text-main">© 2023 StayWithUs, Inc.</p>
<div class="flex gap-6">
<a class="text-sm text-text-main hover:underline" href="#">Privacy</a>
<a class="text-sm text-text-main hover:underline" href="#">Terms</a>
<a class="text-sm text-text-main hover:underline" href="#">Sitemap</a>
</div>
</div>
</div>
</footer>
</body></html>
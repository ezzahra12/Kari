<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Reservation - StayCation</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
          darkMode: "class",
          theme: {
            extend: {
              colors: {
                "primary": "#b9857e",
                "background-light": "#f7f7f6",
                "background-dark": "#1c1716",
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
        body {
            font-family: 'Inter', sans-serif;
        }
        /* Custom scrollbar for cleaner look */
        ::-webkit-scrollbar {
            width: 8px;
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
<body class="bg-background-light dark:bg-background-dark text-[#161313] font-display antialiased">
<div class="relative flex min-h-screen w-full flex-col overflow-x-hidden">
<!-- Header -->
<header class="sticky top-0 z-50 flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#e6e6e6] bg-white px-6 py-3 lg:px-10 dark:bg-background-dark dark:border-[#333]">
<div class="flex items-center gap-4 text-[#161313] dark:text-white">
<div class="size-8 flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-3xl">cottage</span>
</div>
<h2 class="text-[#161313] text-lg font-bold leading-tight tracking-[-0.015em] dark:text-white">StayCation</h2>
</div>
<div class="flex flex-1 justify-end gap-8">
<div class="hidden md:flex items-center gap-9">
<a class="text-[#161313] text-sm font-medium leading-normal hover:text-primary transition-colors dark:text-gray-300" href="/Views/index.view.php">Home</a>
<a class="text-[#161313] text-sm font-medium leading-normal hover:text-primary transition-colors dark:text-gray-300" href="/Views/rentalsListing.view.php">Trips</a>
</div>
<button class="flex items-center gap-2 overflow-hidden rounded-full border border-[#e6e6e6] bg-white p-1 pr-3 hover:shadow-md transition-shadow dark:bg-[#2a2a2a] dark:border-[#444]">
<span class="material-symbols-outlined text-gray-500 pl-2">menu</span>
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-8" data-alt="User profile avatar showing a smiling person" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCyt9INRL7dZ8wVRaDfrfF5NPqKxwk97N5sMkLxNvUeX_wmLmJzuBcNYTN6sUzg0m42lmfHLIlrD9ErQOl-BrfcJXJLKK-q67uJInRwZppkgrMQMaCkaiI0pGcJKJ8JgtUzQSjgyuM8XHkHyx5GFpjaYfEk2gAKSuXodinpAGbyByUq_5cLHMcu3gI-JGV6iQTWeymFmgjqJ7Qb_VBA8HlONIWSkhA69Bw9fgq9isasx6ZPDKxpOoaRmUMCoCHTWK8ReZ37gdfs6V8");'></div>
</button>
</div>
</header>
<!-- Main Content -->
<main class="flex-1 flex justify-center py-8 px-4 md:px-8 lg:px-20">
<div class="max-w-[1120px] w-full flex flex-col gap-8">
<!-- Breadcrumbs -->
<nav class="flex flex-wrap gap-2 text-sm text-[#7c706e] dark:text-gray-400">
<a class="hover:underline hover:text-primary transition-colors" href="#">Home</a>
<span>/</span>
<a class="hover:underline hover:text-primary transition-colors" href="#">Cozy A-Frame Cabin</a>
<span>/</span>
<span class="text-[#161313] font-medium dark:text-white">Review your trip</span>
</nav>
<!-- Heading -->
<div class="flex flex-col gap-2">
<div class="flex items-center gap-3 text-primary">
<span class="material-symbols-outlined -ml-1">arrow_back_ios</span>
<h1 class="text-[#161313] text-3xl md:text-4xl font-black leading-tight tracking-[-0.033em] dark:text-white">Request to book</h1>
</div>
<p class="text-[#7c706e] text-lg font-normal dark:text-gray-400 pl-8">You're just one step away from your getaway.</p>
</div>
<!-- Two Column Layout -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-12 items-start">
<!-- Left Column: Trip Details -->
<div class="lg:col-span-2 flex flex-col gap-8">
<!-- Property Snippet -->
<section class="rounded-xl border border-[#e6e6e6] bg-white p-4 shadow-sm dark:bg-[#2a2a2a] dark:border-[#444]">
<div class="flex flex-col sm:flex-row gap-4">
<div class="w-full sm:w-32 h-24 bg-center bg-no-repeat bg-cover rounded-lg shrink-0" data-alt="Exterior view of a cozy A-frame cabin in the woods" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAHpq6LadD3u6910Pi5Y1_awo8cVC825Os5HSQd8G_EJhiR7SzzByPkYLPx3kYDX25d58iPFKQvq-s1WXdqELURYoqq_TRCATlhYop0HW_R_4HXeyjon6ICNyBRv8b2WX5LzoJgwQ4baKvAUS3pF26Fabxq82RkHf7CY73FvsIvi8BXSb1QjOBOIqbnWT2OV_M1QHauVUYBbWpIFYeqh-wCT76jOx9A0R87Nf9xxOTVF3VICgE0Rk4Bs3ClJ1INSNSEeNGMJ5eHDVo");'></div>
<div class="flex flex-col justify-center gap-1">
<div class="flex items-center gap-1 text-xs font-medium text-[#7c706e] dark:text-gray-400">
<span class="material-symbols-outlined text-sm text-primary">star</span>
<span>4.97 (128 reviews)</span>
<span>•</span>
<span>Superhost</span>
</div>
<h3 class="text-[#161313] text-lg font-bold leading-tight dark:text-white">Cozy A-Frame Cabin in the Woods</h3>
<p class="text-[#7c706e] text-sm dark:text-gray-400">Entire cabin in Portland, Oregon</p>
</div>
</div>
</section>
<!-- Trip Details List -->
<section class="flex flex-col gap-6">
<h2 class="text-xl font-bold text-[#161313] dark:text-white">Your trip</h2>
<div class="flex justify-between items-start py-1">
<div>
<p class="text-[#161313] font-medium text-base dark:text-gray-200">Dates</p>
<p class="text-[#7c706e] text-sm mt-1 dark:text-gray-400">Oct 12 – Oct 17</p>
</div>
<button class="text-primary text-sm font-semibold hover:underline">Edit</button>
</div>
<div class="flex justify-between items-start py-1">
<div>
<p class="text-[#161313] font-medium text-base dark:text-gray-200">Guests</p>
<p class="text-[#7c706e] text-sm mt-1 dark:text-gray-400">2 guests, 1 pet</p>
</div>
<button class="text-primary text-sm font-semibold hover:underline">Edit</button>
</div>
<hr class="border-[#e6e6e6] dark:border-[#333]"/>

<!-- Cancellation Policy -->
<div class="flex flex-col gap-2">
<h2 class="text-xl font-bold text-[#161313] dark:text-white">Cancellation policy</h2>
<p class="text-[#161313] font-medium mt-1 dark:text-gray-200">Free cancellation for 48 hours.</p>
<p class="text-[#7c706e] text-sm leading-relaxed dark:text-gray-400">
                                    Cancel before Oct 12 for a partial refund. After that, the reservation is non-refundable. 
                                    <a class="text-primary font-medium underline" href="#">Learn more</a>
</p>
</div>
<hr class="border-[#e6e6e6] dark:border-[#333]"/>
<!-- Rules -->
<div class="flex flex-col gap-2">
<h2 class="text-xl font-bold text-[#161313] dark:text-white">Ground rules</h2>
<p class="text-[#7c706e] text-sm leading-relaxed dark:text-gray-400">
                                    We ask guests to remember that you're staying in someone's home. Please respect the house rules, check-in time, and neighbors.
                                </p>
</div>
</section>
</div>
<!-- Right Column: Price Summary (Sticky) -->
<div class="lg:col-span-1">
<div class="sticky top-24 flex flex-col gap-6">
<!-- Price Card -->
<div class="rounded-xl border border-[#e6e6e6] bg-white shadow-[0_4px_24px_rgba(0,0,0,0.06)] overflow-hidden dark:bg-[#2a2a2a] dark:border-[#444]">
<div class="p-6 flex flex-col gap-4">
<h2 class="text-xl font-bold text-[#161313] dark:text-white">Price details</h2>
<div class="flex flex-col gap-3 text-[#585453] dark:text-gray-300">
<div class="flex justify-between text-sm">
<span class="underline decoration-dotted cursor-help">$145 x 5 nights</span>
<span>$725.00</span>
</div>
<div class="flex justify-between text-sm">
<span class="underline decoration-dotted cursor-help">Cleaning fee</span>
<span>$60.00</span>
</div>
<div class="flex justify-between text-sm">
<span class="underline decoration-dotted cursor-help">Service fee</span>
<span>$110.00</span>
</div>
<div class="flex justify-between text-sm">
<span class="underline decoration-dotted cursor-help">Taxes</span>
<span>$45.00</span>
</div>
</div>
<div class="h-px bg-[#e6e6e6] my-2 dark:bg-[#444]"></div>
<div class="flex justify-between items-center">
<span class="text-base font-bold text-[#161313] dark:text-white">Total (USD)</span>
<span class="text-lg font-black text-[#161313] dark:text-white">$940.00</span>
</div>
</div>
</div>
<!-- Actions -->
<div class="flex flex-col gap-3">
<button class="flex w-full cursor-pointer items-center justify-center rounded-lg h-12 px-6 bg-primary hover:bg-[#a6746d] text-white text-base font-bold leading-normal tracking-[0.015em] transition-colors shadow-sm">
                                    Confirm and pay
                                </button>
<p class="text-center text-xs text-[#7c706e] px-4 dark:text-gray-500">
                                    By selecting the button above, you agree to the <a class="underline" href="#">Host's House Rules</a>, <a class="underline" href="#">Ground rules for guests</a>, and that Airbnb can charge your payment method if you’re responsible for damage.
                                </p>
<div class="flex items-center justify-between gap-2 mt-2">
<button class="flex-1 flex items-center justify-center gap-2 h-10 px-4 rounded-lg border border-[#e6e6e6] bg-transparent text-[#585453] text-sm font-medium hover:bg-gray-50 transition-colors dark:border-[#444] dark:text-gray-300 dark:hover:bg-[#333]">
<span class="material-symbols-outlined text-lg">download</span>
                                        PDF Receipt
                                    </button>
<button class="flex items-center justify-center h-10 px-4 rounded-lg text-red-600 text-sm font-medium hover:bg-red-50 transition-colors dark:hover:bg-red-900/20">
                                        Cancel
                                    </button>
</div>
</div>
<!-- Security Badge -->
<div class="flex items-center justify-center gap-2 text-[#7c706e] dark:text-gray-500">
<span class="material-symbols-outlined text-lg">lock</span>
<span class="text-xs font-medium">Payments are secure and encrypted</span>
</div>
</div>
</div>
</div>
</div>
</main>
<!-- Footer Simple -->
<footer class="mt-12 border-t border-[#e6e6e6] bg-white py-8 px-6 lg:px-40 dark:bg-background-dark dark:border-[#333]">
<div class="flex flex-col md:flex-row justify-between items-center gap-4 text-sm text-[#7c706e] dark:text-gray-500">
<p>© 2023 StayCation, Inc.</p>
<div class="flex gap-6">
<a class="hover:underline" href="#">Privacy</a>
<a class="hover:underline" href="#">Terms</a>
<a class="hover:underline" href="#">Sitemap</a>
</div>
<div class="flex gap-2">
<span class="material-symbols-outlined">language</span>
<span class="font-medium">English (US)</span>
<span class="font-medium">$ USD</span>
</div>
</div>
</footer>
</div>
</body></html>
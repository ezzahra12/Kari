<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Create Rental Listing</title>
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<!-- Theme Config -->
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
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<style>
        body {
            font-family: 'Inter', sans-serif;
        }
        /* Custom scrollbar for textareas */
        textarea::-webkit-scrollbar {
            width: 8px;
        }
        textarea::-webkit-scrollbar-track {
            background: transparent;
        }
        textarea::-webkit-scrollbar-thumb {
            background-color: #e2dfdf;
            border-radius: 4px;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-[#161313] dark:text-white">
<div class="relative flex h-auto min-h-screen w-full flex-col overflow-x-hidden">
<!-- Header -->
<header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-[#e5e7eb] dark:border-[#333] bg-white dark:bg-[#1c1716] px-6 lg:px-10 py-4 sticky top-0 z-50">
<div class="flex items-center gap-4">
<div class="size-8 text-primary">
<span class="material-symbols-outlined text-4xl">holiday_village</span>
</div>
<h2 class="text-[#161313] dark:text-white text-xl font-bold leading-tight tracking-[-0.015em]">HostSpace</h2>
</div>
<div class="flex flex-1 justify-end gap-8 items-center">
<div class="hidden md:flex items-center gap-6">
<a class="text-[#585453] dark:text-[#a1a1aa] hover:text-primary transition-colors text-sm font-medium" href="/Views/host/hDashboard.php">Dashboard</a>
<a class="text-[#161313] dark:text-white text-sm font-medium" href="/Views/host/Rentals.view.php">Listings</a>
<a class="text-[#585453] dark:text-[#a1a1aa] hover:text-primary transition-colors text-sm font-medium" href="/Views/host/hReview.view.php">Inbox</a>
<a class="text-[#585453] dark:text-[#a1a1aa] hover:text-primary transition-colors text-sm font-medium" href="/Views/host/hResevation.view.php">Bookings</a>
</div>
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10 ring-2 ring-primary/20" data-alt="User profile picture placeholder" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAMKgGdDJhENX4vVhwpm7zWqCIoAOVXmg602P-M5VIYCyHT8QKqQva1g85pVi05kI8l-mLA2gCWqm0Ns0HpdHi2VH92PRNIFWERFIV2nZUgYnqckHIlcWmTIpXlD2BRGLBf-s_ChitPlkBsj0YFXHjJiYUh-6oGc_xgcta_bn2JFKM6ZbFyuutzaJxJLvO2axo5sJbIdarrWOombxrjTlB3-nkhh1atK3DoVGRGPxEzglIFoVLiY9U9HmyxCWgxGp2FS084SwuMLW8");'></div>
</div>
</header>
<main class="flex-1 flex justify-center py-8 px-4 md:px-8 lg:px-12">
<div class="w-full max-w-7xl grid grid-cols-1 lg:grid-cols-12 gap-8">
<!-- Left Column: Form -->
<div class="lg:col-span-8 flex flex-col gap-6">
<!-- Page Heading -->
<div class="flex flex-col gap-2 mb-2">
<div class="flex items-center gap-2 text-primary mb-2">
<span class="material-symbols-outlined text-sm">arrow_back</span>
<span class="text-sm font-medium cursor-pointer hover:underline">Back to listings</span>
</div>
<h1 class="text-3xl md:text-4xl font-black leading-tight tracking-[-0.033em] text-[#161313] dark:text-white">Create new listing</h1>
<p class="text-[#7c706e] dark:text-[#a1a1aa] text-base">Fill in the details below to publish your property.</p>
</div>
<!-- Main Form Card -->
<div class="bg-white dark:bg-[#252020] rounded-xl shadow-sm border border-[#f3f2f1] dark:border-[#333] p-6 md:p-8 flex flex-col gap-8">
<!-- Section: Basic Info -->
<div class="flex flex-col gap-6">
<h3 class="text-lg font-bold text-[#161313] dark:text-white flex items-center gap-2">
<span class="material-symbols-outlined text-primary">feed</span>
                                The Basics
                            </h3>
<!-- Title -->
<label class="flex flex-col gap-2">
<span class="text-sm font-medium text-[#161313] dark:text-[#e5e5e5]">Listing Title</span>
<input class="form-input flex w-full rounded-lg border border-[#e2dfdf] dark:border-[#444] bg-white dark:bg-[#1c1716] h-12 px-4 text-base placeholder:text-[#9ca3af] focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all" placeholder="e.g. Cozy Cottage in the Woods" value="Modern Loft in Downtown"/>
</label>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<!-- City -->
<label class="flex flex-col gap-2">
<span class="text-sm font-medium text-[#161313] dark:text-[#e5e5e5]">City</span>
<div class="relative">
<span class="absolute left-3 top-1/2 -translate-y-1/2 text-[#9ca3af] material-symbols-outlined text-[20px]">location_on</span>
<input class="form-input flex w-full rounded-lg border border-[#e2dfdf] dark:border-[#444] bg-white dark:bg-[#1c1716] h-12 pl-10 pr-4 text-base placeholder:text-[#9ca3af] focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all" placeholder="e.g. Portland, OR" value="Seattle, WA"/>
</div>
</label>
<!-- Price -->
<label class="flex flex-col gap-2">
<span class="text-sm font-medium text-[#161313] dark:text-[#e5e5e5]">Price per night</span>
<div class="relative">
<span class="absolute left-3 top-1/2 -translate-y-1/2 text-[#9ca3af] font-medium">$</span>
<input class="form-input flex w-full rounded-lg border border-[#e2dfdf] dark:border-[#444] bg-white dark:bg-[#1c1716] h-12 pl-8 pr-4 text-base placeholder:text-[#9ca3af] focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all" placeholder="0.00" type="number" value="185"/>
</div>
</label>
</div>
<!-- Description -->
<label class="flex flex-col gap-2">
<span class="text-sm font-medium text-[#161313] dark:text-[#e5e5e5]">Description</span>
<textarea class="form-textarea flex w-full rounded-lg border border-[#e2dfdf] dark:border-[#444] bg-white dark:bg-[#1c1716] min-h-[140px] p-4 text-base placeholder:text-[#9ca3af] focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all resize-y" placeholder="Tell guests what makes your place special..."></textarea>
</label>
</div>
<hr class="border-[#f3f2f1] dark:border-[#333]"/>
<!-- Section: Property Details -->
<div class="flex flex-col gap-6">
<h3 class="text-lg font-bold text-[#161313] dark:text-white flex items-center gap-2">
<span class="material-symbols-outlined text-primary">chair</span>
                                Property Details
                            </h3>
<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
<!-- Guests -->
<div class="flex items-center justify-between p-4 rounded-lg border border-[#e2dfdf] dark:border-[#444] bg-white dark:bg-[#1c1716]">
<div class="flex flex-col">
<span class="text-base font-medium text-[#161313] dark:text-white">Guests</span>
<span class="text-xs text-[#7c706e]">Max occupancy</span>
</div>
<div class="flex items-center gap-3">
<button class="size-8 rounded-full border border-[#e2dfdf] flex items-center justify-center hover:bg-background-light dark:hover:bg-[#333] transition-colors text-xl leading-none pb-1 text-[#585453] dark:text-white">-</button>
<span class="w-4 text-center font-medium">4</span>
<button class="size-8 rounded-full border border-[#e2dfdf] flex items-center justify-center hover:bg-background-light dark:hover:bg-[#333] transition-colors text-xl leading-none pb-1 text-[#585453] dark:text-white">+</button>
</div>
</div>
<!-- Bedrooms -->
<div class="flex items-center justify-between p-4 rounded-lg border border-[#e2dfdf] dark:border-[#444] bg-white dark:bg-[#1c1716]">
<div class="flex flex-col">
<span class="text-base font-medium text-[#161313] dark:text-white">Bedrooms</span>
<span class="text-xs text-[#7c706e]">Total rooms</span>
</div>
<div class="flex items-center gap-3">
<button class="size-8 rounded-full border border-[#e2dfdf] flex items-center justify-center hover:bg-background-light dark:hover:bg-[#333] transition-colors text-xl leading-none pb-1 text-[#585453] dark:text-white">-</button>
<span class="w-4 text-center font-medium">2</span>
<button class="size-8 rounded-full border border-[#e2dfdf] flex items-center justify-center hover:bg-background-light dark:hover:bg-[#333] transition-colors text-xl leading-none pb-1 text-[#585453] dark:text-white">+</button>
</div>
</div>
</div>
</div>
<hr class="border-[#f3f2f1] dark:border-[#333]"/>
<!-- Section: Photos -->
<div class="flex flex-col gap-6">
<div class="flex justify-between items-end">
<h3 class="text-lg font-bold text-[#161313] dark:text-white flex items-center gap-2">
<span class="material-symbols-outlined text-primary">photo_camera</span>
                                    Photos
                                </h3>
<button class="text-primary text-sm font-medium hover:underline">Add from library</button>
</div>
<div class="w-full border-2 border-dashed border-primary/40 bg-primary/5 rounded-xl flex flex-col items-center justify-center py-12 px-4 text-center hover:bg-primary/10 transition-colors cursor-pointer group">
<div class="size-16 rounded-full bg-white flex items-center justify-center shadow-sm mb-4 group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-3xl text-primary">cloud_upload</span>
</div>
<p class="text-[#161313] dark:text-white font-medium">Drag &amp; drop photos here</p>
<p class="text-[#7c706e] text-sm mt-1">or click to browse your files (JPEG, PNG)</p>
</div>
<div class="grid grid-cols-2 md:grid-cols-4 gap-4">
<div class="aspect-[4/3] rounded-lg bg-cover bg-center relative group overflow-hidden" data-alt="Modern living room interior" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBfKUGihlsvrHK61u182HAOV6T8X7TusYs1dQ4h2W79FDuYa8O3brPt7_fXmLVv3ZYL4MLB4wvs8t0SnuIULHi8QXsEg0Ptu4eaPwkjM3PmkVhMtJw-GE4F7GGj_DWK0hor7keTEUcjOC1eT5Y2jn88TvpKWbvlYdi8_Dghv1rbPT6igZ9-1ajwbn-vwggA8kANlWPnyTvGCjRurndB3nvJDWtG8pWxc5O7Jjy3jSPPMNgPC_eV0htEeDPlaxq2jl3J0cL2JVK7ZTs');">
<button class="absolute top-2 right-2 size-6 bg-black/50 hover:bg-red-500 rounded-full text-white flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
<span class="material-symbols-outlined text-sm">close</span>
</button>
</div>
<div class="aspect-[4/3] rounded-lg bg-cover bg-center relative group overflow-hidden" data-alt="Kitchen detail shot" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuANT_qwVe8v2orMS98FQoXILBHJ8R2FOmfEZ-mYJOVFz08xJ_HK2vHNJNt9ZqxbP3vZ1LkA75RQ3WMDy4lprCGPI6MNVG-R5szq2_5lUoZ-OfcWFvvjdzgAL5D2TYgronFV_0H6ngvt-F625Em0d08nFUwjGECQ_ZdIR4PR-6FbQ3z3Ij-KMZHAN3ja5K-Za29rTw5c1wMldO07MyA_HYU6nM1_TShmmLXwU7011MW2rrIaua-POj8tvR_8xHOh8R2_mYADJBuNO10');">
<button class="absolute top-2 right-2 size-6 bg-black/50 hover:bg-red-500 rounded-full text-white flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
<span class="material-symbols-outlined text-sm">close</span>
</button>
</div>
<div class="aspect-[4/3] rounded-lg bg-[#f3f2f1] flex items-center justify-center text-[#9ca3af]">
<span class="material-symbols-outlined">image</span>
</div>
</div>
</div>
<hr class="border-[#f3f2f1] dark:border-[#333]"/>
<!-- Section: Availability -->
<div class="flex flex-col gap-6">
<h3 class="text-lg font-bold text-[#161313] dark:text-white flex items-center gap-2">
<span class="material-symbols-outlined text-primary">calendar_month</span>
                                Availability
                            </h3>
<div class="border border-[#e2dfdf] dark:border-[#444] rounded-xl p-4 md:p-6 bg-white dark:bg-[#1c1716]">
<div class="flex items-center justify-between mb-6">
<h4 class="font-bold text-[#161313] dark:text-white">October 2023</h4>
<div class="flex gap-2">
<button class="p-1 hover:bg-gray-100 dark:hover:bg-[#333] rounded"><span class="material-symbols-outlined">chevron_left</span></button>
<button class="p-1 hover:bg-gray-100 dark:hover:bg-[#333] rounded"><span class="material-symbols-outlined">chevron_right</span></button>
</div>
</div>
<div class="grid grid-cols-7 gap-1 text-center mb-2">
<div class="text-xs font-medium text-[#7c706e] py-2">Su</div>
<div class="text-xs font-medium text-[#7c706e] py-2">Mo</div>
<div class="text-xs font-medium text-[#7c706e] py-2">Tu</div>
<div class="text-xs font-medium text-[#7c706e] py-2">We</div>
<div class="text-xs font-medium text-[#7c706e] py-2">Th</div>
<div class="text-xs font-medium text-[#7c706e] py-2">Fr</div>
<div class="text-xs font-medium text-[#7c706e] py-2">Sa</div>
</div>
<div class="grid grid-cols-7 gap-1">
<!-- Empty days -->
<div class="aspect-square p-2"></div><div class="aspect-square p-2"></div>
<!-- Days -->
<button class="aspect-square rounded-full hover:bg-background-light dark:hover:bg-[#333] text-sm text-[#7c706e]">1</button>
<button class="aspect-square rounded-full hover:bg-background-light dark:hover:bg-[#333] text-sm text-[#7c706e]">2</button>
<button class="aspect-square rounded-full hover:bg-background-light dark:hover:bg-[#333] text-sm text-[#7c706e]">3</button>
<button class="aspect-square rounded-full bg-primary text-white text-sm font-medium">4</button>
<button class="aspect-square rounded-full bg-primary/20 text-primary text-sm font-medium">5</button>
<button class="aspect-square rounded-full bg-primary/20 text-primary text-sm font-medium">6</button>
<button class="aspect-square rounded-full bg-primary/20 text-primary text-sm font-medium">7</button>
<button class="aspect-square rounded-full bg-primary/20 text-primary text-sm font-medium">8</button>
<button class="aspect-square rounded-full bg-primary text-white text-sm font-medium">9</button>
<button class="aspect-square rounded-full hover:bg-background-light dark:hover:bg-[#333] text-sm text-[#161313] dark:text-white">10</button>
<button class="aspect-square rounded-full hover:bg-background-light dark:hover:bg-[#333] text-sm text-[#161313] dark:text-white">11</button>
<button class="aspect-square rounded-full hover:bg-background-light dark:hover:bg-[#333] text-sm text-[#161313] dark:text-white">12</button>
<button class="aspect-square rounded-full hover:bg-background-light dark:hover:bg-[#333] text-sm text-[#161313] dark:text-white">13</button>
<button class="aspect-square rounded-full hover:bg-background-light dark:hover:bg-[#333] text-sm text-[#161313] dark:text-white">14</button>
<button class="aspect-square rounded-full hover:bg-background-light dark:hover:bg-[#333] text-sm text-[#161313] dark:text-white">15</button>
<!-- ... rest of month implied -->
</div>
</div>
</div>
</div>
<!-- Action Bar -->
<div class="flex items-center justify-end gap-4 py-4">
<button class="px-6 py-3 text-base font-medium text-[#585453] dark:text-white hover:bg-white dark:hover:bg-[#333] rounded-lg transition-colors">Cancel</button>
<button class="px-8 py-3 text-base font-bold text-white bg-primary hover:bg-[#a6746d] rounded-lg shadow-sm hover:shadow-md transition-all flex items-center gap-2">
<span>Save &amp; Update</span>
<span class="material-symbols-outlined text-lg">check</span>
</button>
</div>
</div>
<!-- Right Column: Preview -->
<div class="lg:col-span-4 hidden lg:block">
<div class="sticky top-28 flex flex-col gap-4">
<div class="flex items-center gap-2 mb-2">
<span class="material-symbols-outlined text-[#7c706e] text-sm">visibility</span>
<span class="text-xs font-bold uppercase tracking-wider text-[#7c706e]">Live Preview</span>
</div>
<div class="bg-white dark:bg-[#252020] rounded-xl overflow-hidden shadow-lg border border-[#f3f2f1] dark:border-[#333] group cursor-pointer hover:shadow-xl transition-shadow duration-300">
<!-- Image -->
<div class="relative aspect-[4/3] bg-gray-200 overflow-hidden" data-alt="Preview of rental property interior design">
<div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-105" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBOfIANms0GrrcCmiN6TZPnk2EZ7w3qgEte_5YE3qUKVdIqMLxxMBNq8DFqm-sztHUJc6kiEqToHpMzzS3BZKFZZmUXXMTVyV8XGxsegu_-Mn8qDt2SKiAK-V2W-0bFxSvvG_735b3syTawzn26_pZMICon524PPH3AYnMIuMxYxMpBJmaHeZRBYCUaqxZLMQ5wckeikyF32hEi8MLzTYzZv6d-84z7RCpPvn_6PYtMgFcbPvbh8TINpEL_ljr-E_hwN5cWhs99s4M');"></div>
<button class="absolute top-3 right-3 p-2 rounded-full bg-white/90 text-red-500 hover:scale-110 transition-transform shadow-sm">
<span class="material-symbols-outlined text-xl block">favorite</span>
</button>
<div class="absolute top-3 left-3 px-2 py-1 bg-white/90 rounded-md text-xs font-bold shadow-sm text-[#161313]">
                                    Superhost
                                </div>
</div>
<!-- Content -->
<div class="p-5 flex flex-col gap-1">
<div class="flex justify-between items-start">
<h3 class="font-bold text-[#161313] dark:text-white text-lg leading-tight group-hover:text-primary transition-colors">Modern Loft in Downtown</h3>
<div class="flex items-center gap-1 text-[#161313] dark:text-white">
<span class="material-symbols-outlined text-sm filled text-black dark:text-white">star</span>
<span class="text-sm font-medium">New</span>
</div>
</div>
<p class="text-[#7c706e] text-sm">Entire home in Seattle, WA</p>
<div class="mt-2 flex items-baseline gap-1">
<span class="font-bold text-lg text-[#161313] dark:text-white">$185</span>
<span class="text-[#7c706e] text-sm"> night</span>
</div>
</div>
</div>
<!-- Mini Help Card -->
<div class="bg-primary/10 rounded-xl p-5 border border-primary/20">
<div class="flex items-start gap-3">
<span class="material-symbols-outlined text-primary">lightbulb</span>
<div>
<h5 class="font-bold text-[#161313] dark:text-white text-sm">Host Tip</h5>
<p class="text-xs text-[#585453] dark:text-[#a1a1aa] mt-1 leading-relaxed">
                                        Listings with 10+ high-quality photos get 20% more bookings on average. Try to show every room!
                                    </p>
</div>
</div>
</div>
</div>
</div>
</div>
</main>
</div>
</body></html>
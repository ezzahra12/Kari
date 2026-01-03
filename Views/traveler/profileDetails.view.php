<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>User Profile - RentalApp</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#b9857e",
                        "primary-dark": "#a06d67",
                        "background-light": "#faeded", 
                        "background-dark": "#1c1716",
                        "card-light": "#fdfbf9",
                        "text-main": "#585453",
                        "text-sub": "#8a8583",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "2xl": "1rem", "full": "9999px"},
                },
            },
        }
    </script>
</head>
<body class="font-display bg-background-light dark:bg-background-dark text-text-main flex flex-col min-h-screen transition-colors duration-200">
<!-- Navbar -->
<header class="sticky top-0 z-50 flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#e5dcdb] bg-card-light/95 backdrop-blur-sm px-6 lg:px-10 py-3 shadow-sm dark:bg-[#2a2423] dark:border-b-[#3a3433]">
<div class="flex items-center gap-8">
<div class="flex items-center gap-3 text-primary">
<div class="size-8 flex items-center justify-center bg-primary rounded-lg text-white">
<span class="material-symbols-outlined !text-[20px]">holiday_village</span>
</div>
<h2 class="text-text-main dark:text-white text-xl font-bold leading-tight tracking-tight">RentalApp</h2>
</div>
</div>
<div class="hidden md:flex items-center gap-6">
<!-- Search Bar (Simplified) -->
<div class="relative group">
<span class="absolute left-3 top-1/2 -translate-y-1/2 text-text-sub material-symbols-outlined !text-[20px]">search</span>
<input class="bg-background-light dark:bg-[#3a3433] dark:text-white text-sm py-2.5 pl-10 pr-4 rounded-full w-64 border-transparent focus:border-primary focus:ring-0 transition-all placeholder:text-text-sub/70" placeholder="Start your search" type="text"/>
</div>
</div>
<div class="flex items-center gap-6">
<nav class="hidden md:flex gap-6">
<a class="text-text-main dark:text-white text-sm font-medium hover:text-primary transition-colors" href="#">Homes</a>
<a class="text-text-main dark:text-white text-sm font-medium hover:text-primary transition-colors" href="#">Experiences</a>
</nav>
<div class="flex items-center gap-3">
<button class="hidden sm:flex text-sm font-medium text-text-main dark:text-white hover:bg-background-light dark:hover:bg-[#3a3433] px-4 py-2 rounded-full transition-colors">
                    Switch to Hosting
                </button>
<button class="relative">
<div class="bg-center bg-no-repeat bg-cover rounded-full size-10 ring-2 ring-white dark:ring-[#2a2423] shadow-md" data-alt="User profile picture showing a smiling woman" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAX21mXI8YKiVMxxo67yQD0QQ5Rkh3ZtJX5xg4FPKMqpVldI_Wtp1w-yGLGlbq29rxOYUzzjTUUdgVa8U2LsMlGULBTZf_DYvCnbiWGiaageVr4a6LwCBwH6TqgwOKCamDTuGCA7VIwBPZ8BDjGgc5cN23zWkklqFVZ6TYGXeKKLn-0ZpBNe-4yzBQCNIstP6Oxa2TVMqF7ZWpN4XibyQhrNquc8xrPpaf5Ut12Rh1w3g3H3tXLpRV6p0AJqeVCWeLyj_8h7bkEEY4");'></div>
<span class="absolute bottom-0 right-0 size-3 bg-green-500 border-2 border-white dark:border-[#2a2423] rounded-full"></span>
</button>
</div>
</div>
</header>
<main class="flex-grow w-full max-w-7xl mx-auto px-4 md:px-8 py-8 lg:py-12">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
<!-- Sidebar / User Card -->
<div class="lg:col-span-3 lg:col-start-1">
<div class="bg-card-light dark:bg-[#2a2423] rounded-2xl p-6 shadow-sm border border-[#ede5e4] dark:border-[#3a3433] sticky top-24">
<div class="flex flex-col items-center text-center pb-6 border-b border-[#ede5e4] dark:border-[#3a3433]">
<div class="relative mb-4 group cursor-pointer">
<div class="bg-center bg-no-repeat bg-cover rounded-full size-28 shadow-md" data-alt="High resolution profile photo of Alex Johnson" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCEWIboj5j-fdKMMw2IEXkaLFGvf0ZQIXh0hBTIM27FX7r5Q8dAN2kKiqQ8dI73wC4p1xKRG_YBNoVTorDUGFYTnPl7283Njnf-gtXBBz9d0TdBHQet-yPm8Q0GRZgGwnVLrkPjMdSO7tHCPBz_MFrfXVQZewBanEvx3QSzUyZqJX39zo52ttdF54lhOv7zZbVZP3TFucQQ2Jlio6Kno-DRZ9y8IUfqXAl_XdBFr5vhvZuZS9temF3TYnO-kLj92AjNBr-3_Cd6_YY");'></div>
<div class="absolute inset-0 bg-black/40 rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
<span class="material-symbols-outlined text-white">edit</span>
</div>
</div>
<h2 class="text-xl font-bold text-text-main dark:text-white mb-1">Alex Johnson</h2>
<div class="flex items-center gap-1 text-text-sub text-sm mb-4">
<span class="material-symbols-outlined !text-[16px] text-primary">verified</span>
<span>Identity verified</span>
</div>
<p class="text-text-sub text-sm">Superguest · Joined in 2021</p>
</div>
<div class="py-4 space-y-1">
<a class="flex items-center gap-3 px-4 py-3 rounded-lg bg-primary/10 text-primary font-medium transition-colors" href="#">
<span class="material-symbols-outlined !text-[20px]">person</span>
                            Personal Info
                        </a>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-text-main dark:text-gray-300 hover:bg-background-light dark:hover:bg-[#3a3433] font-medium transition-colors" href="/Views/traveler/travelerTrips.view.php">
<span class="material-symbols-outlined !text-[20px]">luggage</span>
                            My Trips
                        </a>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-text-main dark:text-gray-300 hover:bg-background-light dark:hover:bg-[#3a3433] font-medium transition-colors" href="/Views/traveler/savedHomes.view.Php">
<span class="material-symbols-outlined !text-[20px]">favorite</span>
                            Saved Homes
                        </a>

</div>
<div class="pt-4 mt-2 border-t border-[#ede5e4] dark:border-[#3a3433]">
<button class="w-full flex items-center justify-center gap-2 px-4 py-3 text-text-sub hover:text-red-500 hover:bg-red-50 dark:hover:bg-red-900/10 rounded-lg transition-colors font-medium">
<span class="material-symbols-outlined !text-[20px]">logout</span>
                            Sign Out
                        </button>
</div>
</div>
</div>
<!-- Main Content Area -->
<div class="lg:col-span-9 space-y-8">
<!-- Profile Edit Section -->
<section class="bg-card-light dark:bg-[#2a2423] rounded-2xl p-6 md:p-8 shadow-sm border border-[#ede5e4] dark:border-[#3a3433]">
<div class="flex items-center justify-between mb-8">
<div>
<h3 class="text-2xl font-bold text-text-main dark:text-white">Personal Information</h3>
<p class="text-text-sub mt-1">Manage your personal details and preferences.</p>
</div>
<button class="hidden sm:inline-flex text-sm font-medium text-primary hover:text-primary-dark underline underline-offset-4">
                            Need help?
                        </button>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<label class="flex flex-col gap-2">
<span class="text-sm font-medium text-text-main dark:text-gray-300">First Name</span>
<input class="form-input rounded-xl border-[#e2dfdf] dark:border-[#4a4443] bg-white dark:bg-[#3a3433] dark:text-white focus:border-primary focus:ring-primary/20 h-12 px-4" type="text" value="Alex"/>
</label>
<label class="flex flex-col gap-2">
<span class="text-sm font-medium text-text-main dark:text-gray-300">Last Name</span>
<input class="form-input rounded-xl border-[#e2dfdf] dark:border-[#4a4443] bg-white dark:bg-[#3a3433] dark:text-white focus:border-primary focus:ring-primary/20 h-12 px-4" type="text" value="Johnson"/>
</label>
<label class="flex flex-col gap-2 md:col-span-2">
<span class="text-sm font-medium text-text-main dark:text-gray-300">Email Address</span>
<div class="relative">
<span class="absolute left-4 top-1/2 -translate-y-1/2 text-text-sub material-symbols-outlined !text-[20px]">mail</span>
<input class="form-input w-full rounded-xl border-[#e2dfdf] dark:border-[#4a4443] bg-white dark:bg-[#3a3433] dark:text-white focus:border-primary focus:ring-primary/20 h-12 pl-12 pr-4" type="email" value="alex.johnson@example.com"/>
</div>
</label>
<label class="flex flex-col gap-2 md:col-span-2">
<span class="text-sm font-medium text-text-main dark:text-gray-300">Bio</span>
<textarea class="form-textarea w-full rounded-xl border-[#e2dfdf] dark:border-[#4a4443] bg-white dark:bg-[#3a3433] dark:text-white focus:border-primary focus:ring-primary/20 p-4 resize-none" rows="4">Passionate traveler and food enthusiast. I love exploring new cities and finding hidden gems.</textarea>
<span class="text-xs text-text-sub text-right">0/500</span>
</label>
</div>
<div class="flex justify-end gap-4 mt-8 pt-6 border-t border-[#ede5e4] dark:border-[#3a3433]">
<button class="px-6 py-2.5 rounded-lg text-text-main dark:text-white font-medium hover:bg-background-light dark:hover:bg-[#3a3433] transition-colors">Cancel</button>
<button class="px-6 py-2.5 rounded-lg bg-primary hover:bg-primary-dark text-white font-medium shadow-sm transition-colors shadow-primary/30">Save Changes</button>
</div>
</section>
<!-- Upcoming Reservations Preview -->
<section>
<div class="flex items-center justify-between mb-6 px-1">
<h3 class="text-xl font-bold text-text-main dark:text-white">Upcoming Trips</h3>
<a class="text-sm font-medium text-primary hover:text-primary-dark flex items-center gap-1" href="/Views/traveler/travelerTrips.view.php"">
                            View all <span class="material-symbols-outlined !text-[16px]">arrow_forward</span>
</a>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<!-- Card 1 -->
<div class="group bg-card-light dark:bg-[#2a2423] rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all border border-[#ede5e4] dark:border-[#3a3433] flex flex-col sm:flex-row h-full">
<div class="sm:w-2/5 h-48 sm:h-auto relative overflow-hidden">
<div class="bg-center bg-no-repeat bg-cover h-full w-full transform group-hover:scale-105 transition-transform duration-500" data-alt="Modern cabin in the woods with warm lighting at dusk" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCfYGovvy3PDvekMt-niyyT46QNn1nFjNQrOMJglIsn35uM_aHuYlJpbCjfSkMbnHAzp2ySQBddw1XNQhfpC3qebr2eJ7t_7zivbTRsOsPbE1f7resh49ZtVaZy7CbtmQsmE4HXEBXZ_fx2Qw6BJ7iCIGLvuqlX7NHMCbS37GExvzpKvVhl-HXuWlIm0acUGVtL1k5H2ySZHhBmv4I2kxUFptsigHKOHvlBUVI1NovPJuH-iu2UQ4wxrANvSh2Gl0FbgAxdE73wttM");'></div>
<div class="absolute top-3 left-3 bg-white/90 dark:bg-black/70 backdrop-blur-sm px-2 py-1 rounded text-xs font-bold text-text-main dark:text-white shadow-sm">
                                    Oct 12 - 15
                                </div>
</div>
<div class="p-5 flex flex-col justify-between sm:w-3/5">
<div>
<div class="flex justify-between items-start mb-2">
<span class="bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-400 text-[10px] font-bold uppercase tracking-wider px-2 py-1 rounded">Confirmed</span>
<span class="text-text-sub text-xs">3 nights</span>
</div>
<h4 class="font-bold text-lg text-text-main dark:text-white leading-tight mb-1">Cozy Cabin in Woods</h4>
<p class="text-text-sub text-sm flex items-center gap-1 mb-4">
<span class="material-symbols-outlined !text-[14px]">location_on</span>
                                        Aspen, Colorado
                                    </p>
</div>
<div class="flex items-center justify-between pt-4 border-t border-[#ede5e4] dark:border-[#3a3433]">
<div class="flex -space-x-2">
<div class="bg-center bg-no-repeat bg-cover size-8 rounded-full border-2 border-white dark:border-[#2a2423]" data-alt="Host profile picture" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuABVM57H8tvwNXfZRqkQUStMk41zQub93QyraB8hb2oxxktioOKRwioaD4Ex-Q0YYtLX5WvIBuVeURSUof1RShkPTdF3rheIa5kyla-sGqSBKXQq8y-sTwB9NAn3R5zfmWExS2k7V-T-3hYpCP54Yv3i32nMrL2X1XZ7J7UTBBN2xDmTrnmh5NSujfFEaliay4kcrnMansseKVHDbkR5AuamsnHVJX_RwdnYH-X-1v52X18_gBq9p7VVrciu5aHU76YqKVdZzH52zo");'></div>
</div>
<button class="text-sm font-medium text-text-main dark:text-gray-300 hover:text-primary transition-colors">Details</button>
</div>
</div>
</div>
<!-- Card 2 -->
<div class="group bg-card-light dark:bg-[#2a2423] rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all border border-[#ede5e4] dark:border-[#3a3433] flex flex-col sm:flex-row h-full opacity-70 hover:opacity-100">
<div class="sm:w-2/5 h-48 sm:h-auto relative overflow-hidden">
<div class="bg-center bg-no-repeat bg-cover h-full w-full grayscale group-hover:grayscale-0 transition-all duration-500" data-alt="Interior of a modern loft apartment with large windows" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuC15Y2BP8pjqstR9Xvuc0a-0JqD22Xmztcul4Y08h3q852LOwM4QINfNWRPMKRpw7PmphI_6qLIGXpyGr06ThsDrlVdPlXDwJKdPkyohfdhMm7pmhj6PUXvDoHQyg-whqPYrn95or9vRjR_7YTSDJmTyf5n5dGkG_-A0ZFGxobSJU-JWgY7qa-v4Dnzx2kKsF_hdOhGhrPDxwFnHUEz2fftIO7TF6ddZMNaS-luZBn4aXuLe1MbgRT_5AqNjYcY81mCpCVRUUc3JHg");'></div>
<div class="absolute top-3 left-3 bg-gray-100 dark:bg-gray-800 px-2 py-1 rounded text-xs font-bold text-gray-500 shadow-sm">
                                    Sep 01 - 03
                                </div>
</div>
<div class="p-5 flex flex-col justify-between sm:w-3/5">
<div>
<div class="flex justify-between items-start mb-2">
<span class="bg-gray-100 dark:bg-gray-700 text-gray-500 dark:text-gray-300 text-[10px] font-bold uppercase tracking-wider px-2 py-1 rounded">Completed</span>
<span class="text-text-sub text-xs">2 nights</span>
</div>
<h4 class="font-bold text-lg text-text-main dark:text-white leading-tight mb-1">Downtown Loft</h4>
<p class="text-text-sub text-sm flex items-center gap-1 mb-4">
<span class="material-symbols-outlined !text-[14px]">location_on</span>
                                        New York, NY
                                    </p>
</div>
<div class="flex items-center justify-between pt-4 border-t border-[#ede5e4] dark:border-[#3a3433]">
<div class="flex gap-1 text-yellow-400">
<span class="material-symbols-outlined !text-[16px] filled" style="font-variation-settings: 'FILL' 1">star</span>
<span class="material-symbols-outlined !text-[16px] filled" style="font-variation-settings: 'FILL' 1">star</span>
<span class="material-symbols-outlined !text-[16px] filled" style="font-variation-settings: 'FILL' 1">star</span>
<span class="material-symbols-outlined !text-[16px] filled" style="font-variation-settings: 'FILL' 1">star</span>
<span class="material-symbols-outlined !text-[16px] filled" style="font-variation-settings: 'FILL' 1">star</span>
</div>
<button class="text-sm font-medium text-text-main dark:text-gray-300 hover:text-primary transition-colors">Receipt</button>
</div>
</div>
</div>
</div>
</section>
<!-- Favorites Section -->
<section>
<div class="flex items-center justify-between mb-6 px-1">
<h3 class="text-xl font-bold text-text-main dark:text-white">Saved Homes</h3>
<a class="text-sm font-medium text-primary hover:text-primary-dark flex items-center gap-1" href="/Views/traveler/savedHomes.view.Php">
                            View all <span class="material-symbols-outlined !text-[16px]">arrow_forward</span>
</a>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
<!-- Fav Card 1 -->
<div class="group cursor-pointer">
<div class="relative aspect-[4/3] rounded-xl overflow-hidden mb-3">
<div class="bg-center bg-no-repeat bg-cover w-full h-full transform group-hover:scale-105 transition-transform duration-500" data-alt="Luxury villa with pool overlooking the ocean" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA1tdR1E1w7yZSdF-xVHaeL4-fWiMzR7vNQ0vd6gR2SVh61aA2rMdlXNS--uTlONany2r8pMmmP5S7-XtNEDMI6X8j3WXbs4mNb7mEdWE36k-inrniGPJAJNVL2QBQckb4taN2BxVgFPgAwPqMP8v6cTeQ3CJWPnIOr1hydFU5Q5Lf-JWvNOJPPyMEnPvm6eQme8-w9IHHT51GknAw3q0eTpx6x_lS9M5o7sqXgoOEfxCxGiQ22T2AIUw2sopORkrmAjN4wGYoS2nE");'></div>
<button class="absolute top-3 right-3 p-2 bg-white/70 hover:bg-white dark:bg-black/50 dark:hover:bg-black/70 backdrop-blur-sm rounded-full transition-colors group/btn">
<span class="material-symbols-outlined text-primary !text-[20px] block" style="font-variation-settings: 'FILL' 1">favorite</span>
</button>
<div class="absolute bottom-3 left-3 bg-white dark:bg-[#2a2423] px-2 py-1 rounded text-xs font-bold shadow-sm">
                                    $450 <span class="font-normal text-text-sub">/ night</span>
</div>
</div>
<h4 class="font-bold text-text-main dark:text-white">Oceanview Villa</h4>
<p class="text-sm text-text-sub">Malibu, California</p>
<div class="flex items-center gap-1 mt-1">
<span class="material-symbols-outlined !text-[14px] text-primary" style="font-variation-settings: 'FILL' 1">star</span>
<span class="text-sm font-medium dark:text-gray-200">4.95</span>
<span class="text-sm text-text-sub">(128)</span>
</div>
</div>
<!-- Fav Card 2 -->
<div class="group cursor-pointer">
<div class="relative aspect-[4/3] rounded-xl overflow-hidden mb-3">
<div class="bg-center bg-no-repeat bg-cover w-full h-full transform group-hover:scale-105 transition-transform duration-500" data-alt="Modern A-frame cabin in snowy mountains" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDLIDeuliGiKoIGel-l4Xg2Qqt-rCK0r0xo7BWNDCi2OfahukWYt4JrgLTwj1iwj47AAyLkdJbxFmNYr2-LLFSyfTeceZcyyqmMgpNJG0eeYqDCLSSfXJ32Rr-YXHHzM5L_h65hZ8sklOcta7_0_cXkWBDoVA5XZxL82b1vzwBbewJqxPUfC1yNGMHoR6Qho8d4rvrEHUv2mS4YBZbAknl9jyQWU1hyz5MIfPLwR31hbbsi5VgDksL1TmC3WyCjxn3h3TbMje89sAQ");'></div>
<button class="absolute top-3 right-3 p-2 bg-white/70 hover:bg-white dark:bg-black/50 dark:hover:bg-black/70 backdrop-blur-sm rounded-full transition-colors group/btn">
<span class="material-symbols-outlined text-primary !text-[20px] block" style="font-variation-settings: 'FILL' 1">favorite</span>
</button>
<div class="absolute bottom-3 left-3 bg-white dark:bg-[#2a2423] px-2 py-1 rounded text-xs font-bold shadow-sm">
                                    $210 <span class="font-normal text-text-sub">/ night</span>
</div>
</div>
<h4 class="font-bold text-text-main dark:text-white">Alpine Retreat</h4>
<p class="text-sm text-text-sub">Zermatt, Switzerland</p>
<div class="flex items-center gap-1 mt-1">
<span class="material-symbols-outlined !text-[14px] text-primary" style="font-variation-settings: 'FILL' 1">star</span>
<span class="text-sm font-medium dark:text-gray-200">4.88</span>
<span class="text-sm text-text-sub">(86)</span>
</div>
</div>
<!-- Fav Card 3 -->
<div class="group cursor-pointer">
<div class="relative aspect-[4/3] rounded-xl overflow-hidden mb-3">
<div class="bg-center bg-no-repeat bg-cover w-full h-full transform group-hover:scale-105 transition-transform duration-500" data-alt="Traditional Japanese house with garden" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuD932s3C0iw2hAX2Ou589zIUezi5gj65Y8jsVVGVvzgY9kCYWH09M7ahghEKLA9a6nlVIkoKLoVZz0b5EFIIClH_AhA5STgfKSZvpXA66UW-UBGtJrhhIOpv_SDWjMzHoeW5jbAMVDHq2Hq2YeUG44qe0q0UEUYCI5gVclyWY2zQmJR_gon9I8gPGYMY1H_ERWOFykrwT_RIQTM0ZaMb7akYmGEtKLNb0uvkFGnLqGHQTAHN2m1nixO7xiy6GdX4CuTrs4IliMgmWk");'></div>
<button class="absolute top-3 right-3 p-2 bg-white/70 hover:bg-white dark:bg-black/50 dark:hover:bg-black/70 backdrop-blur-sm rounded-full transition-colors group/btn">
<span class="material-symbols-outlined text-primary !text-[20px] block" style="font-variation-settings: 'FILL' 1">favorite</span>
</button>
<div class="absolute bottom-3 left-3 bg-white dark:bg-[#2a2423] px-2 py-1 rounded text-xs font-bold shadow-sm">
                                    $180 <span class="font-normal text-text-sub">/ night</span>
</div>
</div>
<h4 class="font-bold text-text-main dark:text-white">Kyoto Garden Home</h4>
<p class="text-sm text-text-sub">Kyoto, Japan</p>
<div class="flex items-center gap-1 mt-1">
<span class="material-symbols-outlined !text-[14px] text-primary" style="font-variation-settings: 'FILL' 1">star</span>
<span class="text-sm font-medium dark:text-gray-200">5.0</span>
<span class="text-sm text-text-sub">(42)</span>
</div>
</div>
</div>
</section>
</div>
</div>
</main>
<!-- Footer Simple -->
<footer class="bg-card-light dark:bg-[#2a2423] border-t border-[#ede5e4] dark:border-[#3a3433] py-8 mt-12">
<div class="max-w-7xl mx-auto px-4 md:px-8 flex flex-col md:flex-row justify-between items-center gap-4">
<p class="text-sm text-text-sub">© 2023 RentalApp, Inc. All rights reserved.</p>
<div class="flex gap-6">
<a class="text-sm text-text-sub hover:text-text-main dark:hover:text-white transition-colors" href="#">Privacy</a>
<a class="text-sm text-text-sub hover:text-text-main dark:hover:text-white transition-colors" href="#">Terms</a>
<a class="text-sm text-text-sub hover:text-text-main dark:hover:text-white transition-colors" href="#">Sitemap</a>
</div>
</div>
</footer>
</body></html>
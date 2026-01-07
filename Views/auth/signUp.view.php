<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>StayCation - Sign Up</title>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;family=Noto+Sans:wght@400;500;700&amp;display=swap" rel="stylesheet"/>
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
                        "primary": "#b9857e", // Matches user request for primary/brand color
                        "background-light": "#f7f7f6",
                        "background-dark": "#1c1716",
                        "custom-bg": "#faeded", // User requested background
                        "custom-card": "#fdfbf9", // User requested card color
                        "custom-text": "#585453", // User requested text color
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"],
                        "body": ["Inter", "sans-serif"],
                    },
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "2xl": "1rem", "full": "9999px"},
                },
            },
        }
    </script>
</head>
<body class="bg-custom-bg font-display text-custom-text antialiased min-h-screen flex flex-col">
<!-- Main Container -->
<div class="flex-1 flex items-center justify-center p-4 md:p-8">
<!-- Centered Card Wrapper -->
<div class="bg-custom-card w-full max-w-[1100px] h-auto min-h-[600px] rounded-3xl shadow-[0_20px_40px_-15px_rgba(0,0,0,0.1)] overflow-hidden flex flex-col lg:flex-row relative">
<!-- Close Button (Absolute) -->
<a class="absolute top-4 right-4 z-10 p-2 rounded-full hover:bg-gray-100 transition-colors lg:hidden text-custom-text/60" href="#">
<span class="material-symbols-outlined">close</span>
</a>
<!-- Left Side: Image (Hidden on mobile, visible on lg) -->
<div class="hidden lg:block lg:w-5/12 relative h-full min-h-[700px]">
<div class="absolute inset-0 bg-black/10 z-10"></div>
<img alt="Cozy modern cabin interior with warm sunlight and comfortable furniture" class="absolute inset-0 h-full w-full object-cover" data-alt="Cozy modern cabin interior with warm sunlight and comfortable furniture" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDc6QQ4KdWJWchVOx3pAat6ZAdS_GqNv_Iz5bhhChps81NwryogvvcnLZO2sQxPG9svYDEtHtIEMwu_iNzcMXeyKsuFNcERCGrXWtKGb1Vc15kCm1kKg-hNcGZIjIsZgDBfYixk4UXq2rqd_BiFF_CJh1NSDvV2bbQ41Lfktegp53L5GrcJ-0rRZfTRd19OuxZdTc1cOE3XA9l2Td6_431CpvUuT3ydm41jMF6SBRPZH_VyPa5WK5-fNS19tBxMjU9KD6H-axkfUEs"/>
<div class="absolute bottom-0 left-0 z-20 p-10 text-white">
<div class="flex items-center gap-2 mb-4">
<div class="size-8 bg-white/20 backdrop-blur-md rounded-lg flex items-center justify-center">
<span class="material-symbols-outlined text-white text-lg">travel_explore</span>
</div>
<h2 class="text-xl font-bold tracking-tight">Stay</h2>
</div>
<p class="text-lg font-medium leading-relaxed opacity-90">"The best way to find yourself is to lose yourself in the service of others... and in a cozy cabin."</p>
<div class="mt-4 flex items-center gap-2">
<div class="flex -space-x-2">
<img alt="User avatar" class="w-8 h-8 rounded-full border-2 border-white object-cover" data-alt="User avatar" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDyZ3DIe-yBbukr3Oqa8CpFVjemp8XoeaX3H4B_R8e3m_-t2zePUO_osFUjyHw_jsQ_DSBdLqqBvPJfxEShdQNzrXUHgmYJpuFCyVtG2AenewWP7eT955Jta1ye6iDxtOfJIZP7QzHgnlIH3ZeUtQhzuTLt5ClDDamlqcSW0WvdWwFzF-cGSB6DE4fLyYygRGv4I8YLKAaSVwGmJsGSdfHlGNX-EeOWrpb8nP1ujZGr78WvGYrnr_g_K2IF_CxAFIE7oOUTwIr42k8"/>
<img alt="User avatar" class="w-8 h-8 rounded-full border-2 border-white object-cover" data-alt="User avatar" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAiqBpcYq7FLsnhDXk9xZeI7DNTWiuzIPRpGU9W4pwohY_ehAIViVqmpniLq-SeeAqe6KhdxFNvn-I-Fwwjc5dlitBhYF4jl459MagSKC3r3XLRuEsTNSJopccam0am1Jry14XWd9hFYpP6fSEtQHvT5-sNrCF2cN32i_M5zkPoZCFcyor94jdtIYHbC1xwSSZeJAtI6favrv5rk328-p--5rZiKj747Q8GVaRQw_dVdzJ9p3sUlUK4TrzaPEeKSpmKRi7cxJaVo_k"/>
<img alt="User avatar" class="w-8 h-8 rounded-full border-2 border-white object-cover" data-alt="User avatar" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAqTcIaYfllP8I56qxhe7lxl-bNRSzsLdcsNO1DmoGVT_PWXWYpjShHKbdF0wtCG-zajmmvethr8EoqBhr7sswtvFnPLTN-m82sW9_7QipPqmNtxfrkmc8qH0lgiQnDLWzqNGKUJejIhCcNDcp-JNrxhJtvGz6K0taATEbAq6mcdwGxDifMxGpTqy0-oy_jsH9NTTBH1YftlFUf4nWhYO0oi3GnQwJBCzOdIfrfNq8olUGXkDEMepQIvNegFFoYj2E1S-5S8ih833U"/>
</div>
<span class="text-sm font-medium text-white/90">+40k hosts</span>
</div>
</div>
</div>
<!-- Right Side: Form -->
<div class="w-full lg:w-7/12 p-8 md:p-12 lg:p-16 flex flex-col justify-center bg-custom-card">
<!-- Mobile Header -->
<div class="lg:hidden flex items-center gap-2 mb-8 text-primary">
<span class="material-symbols-outlined text-3xl">travel_explore</span>
<h2 class="text-2xl font-bold tracking-tight text-custom-text">StayCation</h2>
</div>
<div class="max-w-md w-full mx-auto">
<div class="mb-8">
<h1 class="text-3xl font-bold text-[#161313] tracking-tight mb-2">Create an account</h1>
<p class="text-custom-text/70 text-sm">Join our community of travelers and hosts today.</p>
</div>

<form action="/Controllers/AuthController.php" class="space-y-5" method="POST">
    <!-- Role Selector (Segmented Buttons) -->
<div class="mb-8">
<div class="flex p-1 bg-[#f3f2f1] rounded-xl relative">
<label class="flex-1 relative cursor-pointer group">
<input checked="" class="peer sr-only" name="role" type="radio" value="traveler"/>
<div class="w-full py-2.5 px-4 text-center text-sm font-medium text-custom-text/60 rounded-lg transition-all duration-200 peer-checked:bg-white peer-checked:text-[#161313] peer-checked:shadow-sm hover:text-custom-text">
                                    I want to travel
                                </div>
</label>
<label class="flex-1 relative cursor-pointer group">
<input class="peer sr-only" name="role" type="radio" value="host"/>
<div class="w-full py-2.5 px-4 text-center text-sm font-medium text-custom-text/60 rounded-lg transition-all duration-200 peer-checked:bg-white peer-checked:text-[#161313] peer-checked:shadow-sm hover:text-custom-text">
                                    I want to host
                                </div>
</label>
</div>
</div>
<!-- Name Fields -->
<div class="flex gap-4">
<div class="flex-1">
<label class="block text-sm font-medium text-custom-text mb-1.5" for="first-name">First Name</label>
<input class="w-full h-12 px-4 bg-white border border-[#e2dfdf] rounded-lg text-custom-text placeholder:text-custom-text/40 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all shadow-sm" id="first-name" name="firstName" placeholder="Jane" type="text"/>
</div>
<div class="flex-1">
<label class="block text-sm font-medium text-custom-text mb-1.5" for="last-name">Last Name</label>
<input class="w-full h-12 px-4 bg-white border border-[#e2dfdf] rounded-lg text-custom-text placeholder:text-custom-text/40 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all shadow-sm" id="last-name" name="lastName" placeholder="Doe" type="text"/>
</div>
</div>
<!-- Email Field -->
<div>
<label class="block text-sm font-medium text-custom-text mb-1.5" for="email">Email address</label>
<div class="relative">
<input class="w-full h-12 pl-10 pr-4 bg-white border border-[#e2dfdf] rounded-lg text-custom-text placeholder:text-custom-text/40 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all shadow-sm" id="email" name="email" placeholder="jane@example.com" type="email"/>
<span class="material-symbols-outlined absolute left-3 top-3 text-custom-text/40 text-[20px]">mail</span>
</div>
</div>
<!-- Password Field -->
<div>
<label class="block text-sm font-medium text-custom-text mb-1.5" for="password">Password</label>
<div class="relative">
<input class="w-full h-12 pl-10 pr-10 bg-white border border-[#e2dfdf] rounded-lg text-custom-text placeholder:text-custom-text/40 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all shadow-sm" id="password" name="password" placeholder="••••••••" type="password"/>
<span class="material-symbols-outlined absolute left-3 top-3 text-custom-text/40 text-[20px]">lock</span>
<button class="absolute right-3 top-3 text-custom-text/40 hover:text-custom-text transition-colors" type="button">
<span class="material-symbols-outlined text-[20px]">visibility_off</span>
</button>
</div>
<p class="mt-1.5 text-xs text-custom-text/60">Must be at least 8 characters.</p>
</div>

<!-- Submit Button -->
<button class="w-full h-12 bg-primary hover:bg-[#a6756e] text-white font-bold rounded-lg shadow-[0_4px_10px_rgba(185,133,126,0.3)] transition-all transform active:scale-[0.99] flex items-center justify-center gap-2 mt-4" name="register" type="submit">
                            Create Account
                        </button>
</form>


<!-- Login Link -->
<div class="mt-8 text-center">
<p class="text-sm text-custom-text">
                            Already have an account? 
                            <a class="font-bold text-primary hover:text-[#a6756e] hover:underline transition-all" href="/Views/auth//login.view.php">Log in</a>
</p>
</div>
</div>
</div>
</div>
</div>
</body></html>
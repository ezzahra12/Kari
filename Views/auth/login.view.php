<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Login - Stay</title>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            "primary": "#b9857e",
            "background-light": "#faeded", 
            "background-dark": "#1c1716",
            "card-light": "#fdfbf9",
            "text-primary": "#585453",
            "text-dark": "#161313",
          },
          fontFamily: {
            "display": ["Inter", "sans-serif"]
          },
          borderRadius: {"DEFAULT": "0.375rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
        },
      },
    }
  </script>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-text-primary antialiased">
<div class="flex min-h-screen w-full flex-col lg:flex-row overflow-hidden">
<!-- Left Section: Image (Hidden on mobile, visible on lg screens) -->
<div class="hidden lg:flex lg:w-1/2 relative bg-gray-100">
<div class="absolute inset-0 bg-cover bg-center" data-alt="Cozy modern apartment living room interior with warm lighting" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCHDVASj-exPeJK-XGp0pA-JYJ2x9YD7bP-_F9J1_OCOgaKf08FhFofeKCXB1XadxIYwfxDjnACqdiwhe_pNOnT-n2uo0A7RTi4vMyWDWcsjgGwlJC-6bdarYR2AMEwQgCt1vRAR11zd3byUF4fbw8jaeq10ZxpiJfNj7UAXg2VOz1bZldhBqBVHy8dpRaNW1V7wcodGJ8Y5KLJnDUO80z-JnZ-LwD269weyAvBp7LtQe8DRobs_oRMncGJoL2hCukc2F0RaEp7tGk');"></div>
<div class="absolute inset-0 bg-black/20"></div>
<!-- Brand Logo on Image -->
<div class="absolute top-8 left-8 flex items-center gap-3 text-white z-10">
<div class="size-8 rounded bg-white/20 backdrop-blur-md flex items-center justify-center">
<span class="material-symbols-outlined text-white text-[20px]">holiday_village</span>
</div>
<h2 class="text-white text-xl font-bold tracking-tight">Stay</h2>
</div>
<!-- Testimonial or Tagline Overlay -->
<div class="absolute bottom-12 left-12 right-12 z-10 text-white">
<blockquote class="text-2xl font-medium leading-normal mb-4">
          "The most seamless booking experience I've ever had. Found my dream vacation home in minutes."
        </blockquote>
<div class="flex items-center gap-3">
<div class="size-10 rounded-full bg-gray-300 overflow-hidden" data-alt="Portrait of a happy customer" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAujUKUktvDDYySJDOsak9MNtVhIdZQMPa0Rl8UCxXdm4t4tb0lJofSMmyVs1uIG-ByAWXKJktfKGS2hP35fRyAY3QUeCM-hT4g3F1kq0fOxL0Omuwk-OCk_5Lhx_wwV65GPgsmXkP96LcXy7R7Tvpf3lzjtLWRRcHw_nviSz7ppFVUT-7F_q_gey2xOgLbDHf5-jrqlIhisK9cRrKpD7mPaj5n3sMO9-URWurm8AMBX9DK9ePjXfUjnXInwKVefaYRPkQXQf7f9JM'); background-size: cover;"></div>
<div>
<p class="font-semibold text-sm">Sarah Jenkins</p>
<p class="text-white/80 text-xs">Verified Guest</p>
</div>
</div>
</div>
</div>
<!-- Right Section: Login Form -->
<div class="flex w-full lg:w-1/2 flex-col justify-center items-center px-6 py-12 lg:px-20 bg-background-light dark:bg-background-dark">
<!-- Mobile Logo -->
<div class="lg:hidden flex items-center gap-2 mb-8 self-start text-primary">
<div class="size-8 rounded bg-primary/10 flex items-center justify-center">
<span class="material-symbols-outlined text-primary">holiday_village</span>
</div>
<h2 class="text-text-dark dark:text-white text-xl font-bold tracking-tight">Stay</h2>
</div>
<div class="w-full max-w-[440px] bg-card-light dark:bg-stone-900 shadow-xl rounded-2xl p-8 sm:p-10 border border-stone-200/60 dark:border-stone-800">
<!-- Header -->
<div class="mb-8 text-center sm:text-left">
<h1 class="text-text-dark dark:text-white text-3xl font-bold tracking-tight mb-2">Welcome back</h1>
<p class="text-text-primary dark:text-stone-400 text-base">Please enter your details to sign in.</p>
</div>
<!-- Form -->
<form action="/Controllers/AuthController.php" method="POST" class="space-y-5">
<!-- Email Field -->
<div class="space-y-2">
<label class="block text-sm font-semibold text-text-dark dark:text-stone-200" for="email">Email address</label>
<div class="relative">
<input class="block w-full rounded-lg border-stone-300 bg-white dark:bg-stone-800 dark:border-stone-700 dark:text-white py-3 pl-4 pr-10 text-base focus:border-primary focus:ring-primary shadow-sm placeholder:text-stone-400" id="email" name="email" placeholder="user@example.com" type="email"/>
<div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
<span class="material-symbols-outlined text-stone-400 text-[20px]">mail</span>
</div>
</div>
</div>
<!-- Password Field -->
<div class="space-y-2">
<div class="flex items-center justify-between">
<label class="block text-sm font-semibold text-text-dark dark:text-stone-200" for="password">Password</label>
</div>
<div class="relative">
<input class="block w-full rounded-lg border-stone-300 bg-white dark:bg-stone-800 dark:border-stone-700 dark:text-white py-3 pl-4 pr-10 text-base focus:border-primary focus:ring-primary shadow-sm placeholder:text-stone-400" id="password" name="password" placeholder="••••••••" type="password"/>
<button class="absolute inset-y-0 right-0 flex items-center pr-3 hover:text-primary transition-colors" type="submit">
<span class="material-symbols-outlined text-stone-400 hover:text-primary text-[20px]">visibility_off</span>
</button>
</div>
</div>

<!-- Submit Button -->
<button class="flex w-full items-center justify-center rounded-lg bg-primary py-3 text-sm font-bold text-white shadow-md hover:bg-[#a6746d] focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 transition-all duration-200" name="login" type="submit">
            Sign in
          </button>
</form>


<!-- Footer -->
<p class="mt-8 text-center text-sm text-stone-500 dark:text-stone-400">
          Don't have an account? 
          <a class="font-bold text-primary hover:text-primary/80 transition-colors" href="/Views/auth/signUp.view.php">Sign up</a>
</p>
</div>
</div>
</div>
</body></html>
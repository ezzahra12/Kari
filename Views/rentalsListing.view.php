<?php
require __DIR__ . '/../models/database.php';
require __DIR__ . '/../models/User.php';
require __DIR__ . '/../models/Host.php';
require __DIR__ . '/../models/Rental.php';
session_start();

// echo '<pre>';
// print_r($_SESSION);
// echo '</pre>';
// die("x");

if (!isset($_SESSION['user']) || !($_SESSION['user'] instanceof Host)) {
    header("Location: /Views/auth/login.view.php");
    exit;
}

$host = $_SESSION['user'];
$rentals = $host->getRentals(); 
?>
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
</header><!-- Basic Filter Bar -->
<section class="bg-white dark:bg-background-dark border-b border-[#e2dfdf] py-4 sticky top-20 z-40">
  <div class="max-w-[1440px] mx-auto px-6 md:px-10">
    
    <form class="flex flex-col lg:flex-row items-center gap-4">

      <!-- Location -->
      <div class="w-full lg:w-1/3">
        <input
          type="text"
          placeholder="City"
          class="w-full h-11 rounded-full border border-[#e2dfdf] px-4 text-sm focus:ring-2 focus:ring-primary focus:outline-none"
        />
      </div>

      <!-- Check-in -->
      <div class="w-full lg:w-1/5">
        <input
          type="date"
          class="w-full h-11 rounded-full border border-[#e2dfdf] px-4 text-sm focus:ring-2 focus:ring-primary focus:outline-none"
        />
      </div>

      <!-- Check-out -->
      <div class="w-full lg:w-1/5">
        <input
          type="date"
          class="w-full h-11 rounded-full border border-[#e2dfdf] px-4 text-sm focus:ring-2 focus:ring-primary focus:outline-none"
        />
      </div>

      <!-- Guests -->
      <div class="w-full lg:w-1/6">
        <select
          class="w-full h-11 rounded-full border border-[#e2dfdf] px-4 text-sm focus:ring-2 focus:ring-primary focus:outline-none"
        >
          <option value="1">1 Guest</option>
          <option value="2">2 Guests</option>
          <option value="3">3 Guests</option>
          <option value="4">4+ Guests</option>
        </select>
      </div>

      <!-- Search Button -->
      <button
        type="submit"
        class="h-11 px-8 rounded-full bg-primary text-white text-sm font-semibold hover:bg-primary/90 transition"
      >
        Search
      </button>

    </form>

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

<?php foreach ($rentals as $rental): ?>

  <?php $image = $rental['cover_image'] ?? 'default.jpg'; ?>
    <?php if ($rental['isActive'] && $rental['isAvailable']): ?>

   <a href="/Views/rentalDetails.view.php?id=<?= $rental['id'] ?>" class="cursor-pointer">

        <!-- Image -->
        <div class="relative aspect-[1/1.05] w-full overflow-hidden rounded-xl bg-gray-200">
            <div class="absolute top-3 right-3 z-10">
                <button class="flex items-center justify-center size-8 rounded-full bg-white/70 hover:bg-white backdrop-blur-sm transition-all">
                    <span class="material-symbols-outlined text-[20px]">favorite</span>
                </button>
            </div>

            <div class="size-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
                 style="background-image: url('/public/uploads/<?= htmlspecialchars($image) ?>');">

            </div>
        </div>

        <!-- Infos -->
        <div class='flex flex-col gap-1'>

            <div class='flex justify-between items-start'>
                <h3 class='font-bold text-text-dark text-base leading-tight group-hover:underline'>
                    <?= htmlspecialchars($rental['title']) ?>
                </h3>
            </div>

            <p class='text-text-main text-sm'>
                <?= htmlspecialchars($rental['city']) ?>
            </p>

            <div class='mt-1 flex items-baseline gap-1'>
                <span class='font-bold text-text-dark text-base'>
                    $<?= htmlspecialchars($rental['pricePerNight']) ?>
                </span>
                <span class='text-text-main text-sm'>/ night</span>
            </div>

        </div>
   </a>

    <?php endif; ?>
<?php endforeach; ?>




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
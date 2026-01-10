<?php
require_once __DIR__ . '/../Controllers/RentalController.php';
$controller = new RentalController();
$rental = $controller->show();

?>

<!DOCTYPE html>
<html lang="en" class="light">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rental Details - RentalApp</title>

  <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined&display=swap" rel="stylesheet">

  <script>
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            primary: "#b9857e",
            "background-light": "#faeded",
            "background-dark": "#1c1716",
            "card-light": "#fdfbf9",
            "text-main": "#585453",
            "text-sub": "#8a8583",
          },
          fontFamily: {
            display: ["Inter", "sans-serif"],
          },
          borderRadius: {
            xl: "0.75rem",
            "2xl": "1rem",
            full: "9999px",
          },
        },
      },
    };
  </script>
</head>

<body class="font-display bg-background-light dark:bg-background-dark text-text-main">

<!-- Navbar (same style, simplified) -->
<header class="sticky top-0 z-40 bg-card-light dark:bg-[#2a2423] border-b border-[#ede5e4] dark:border-[#3a3433] px-6 py-4 flex justify-between items-center">
  <h2 class="text-xl font-bold text-primary flex items-center gap-2">
    <span class="material-symbols-outlined">holiday_village</span>
    RentalApp
  </h2>
  <a href="/views/rentalsListing.view.php" class="text-sm font-medium hover:text-primary">Back to homes</a>
</header>

<main class="max-w-7xl mx-auto px-4 md:px-8 py-10 grid grid-cols-1 lg:grid-cols-12 gap-10">

  <!-- LEFT: Images -->
  <section class="lg:col-span-7">
    <div class="rounded-2xl overflow-hidden shadow-sm">
      <div class="aspect-[4/3] bg-cover bg-center"
        style="background-image:url('/public/uploads/<?= htmlspecialchars($rental["cover_image"]) ?>')">
      </div>
    </div>
  </section>

  <!-- RIGHT: Details -->
  <aside class="lg:col-span-5 space-y-6">

    <!-- Title & location -->
    <div>
      <h1 class="text-3xl font-bold text-text-main dark:text-white mb-2">
        <?= htmlspecialchars($rental['title']) ?>
      </h1>
      <p class="text-text-sub flex items-center gap-1">
        <span class="material-symbols-outlined !text-[18px]">location_on</span>
        <?= htmlspecialchars($rental['city']) ?>
      </p>
    </div>

    <!-- Rating -->
    <div class="flex items-center gap-2">
      <span class="text-text-sub">(128 reviews)</span>
    </div>

    <!-- Description -->
    <p class="text-text-sub leading-relaxed">
      <?= htmlspecialchars($rental['description']) ?>
    </p>

    <!-- Info -->
    <div class="grid grid-cols-2 gap-4 text-sm">
      <div class="flex items-center gap-2">
        <span class="material-symbols-outlined">bed</span>
        <?= htmlspecialchars($rental['bedrooms']) ?> Bedrooms
      </div>
    
      <div class="flex items-center gap-2">
        <span class="material-symbols-outlined">group</span>
        <?= htmlspecialchars($rental['guests']) ?> 
      </div>
      <div class="flex items-center gap-2">
        <span class="material-symbols-outlined">home</span>
        Entire place
      </div>
    </div>

    <!-- Booking Card -->
    
    <form 
    method="POST"
    action="/Controllers/BookingController.php"
    class="bg-card-light dark:bg-[#2a2423] border border-[#ede5e4] dark:border-[#3a3433] rounded-2xl p-6 shadow-sm space-y-5"
    >

    <!-- Price -->
    <div class="flex justify-between items-center">
        <span class="text-2xl font-bold">$<?= htmlspecialchars($rental['pricePerNight']) ?></span>
        <span class="text-text-sub">/ night</span>
    </div>

    <!-- Dates -->
    <div class="grid grid-cols-2 gap-3">
        <div>
        <label class="text-xs text-text-sub">Check-in</label>
        <input
            type="date"
            name="check_in"
            required
            class="w-full mt-1 rounded-xl border border-gray-300 dark:border-gray-600 bg-white dark:bg-[#1f1a19] px-3 py-2 text-sm focus:ring-primary focus:border-primary"
        >
        </div>

        <div>
        <label class="text-xs text-text-sub">Check-out</label>
        <input
            type="date"
            name="check_out"
            required
            class="w-full mt-1 rounded-xl border border-gray-300 dark:border-gray-600 bg-white dark:bg-[#1f1a19] px-3 py-2 text-sm focus:ring-primary focus:border-primary"
        >
        </div>
    </div>

    <!-- Guests -->
    <div>
        <label class="text-xs text-text-sub">Guests</label>
        <select
        name="guests"
        required
        class="w-full mt-1 rounded-xl border border-gray-300 dark:border-gray-600 bg-white dark:bg-[#1f1a19] px-3 py-2 text-sm"
        >
        <option value="">Select guests</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5+</option>
        </select>
    </div>

    <!-- Hidden rental id -->
    <input type="hidden" name="rental_id" value="<?= $_GET['id'] ?? '' ?>">

    <!-- Button -->
    <button
        type="submit"
        class="w-full bg-primary hover:bg-primary/90 text-white font-semibold py-3 rounded-xl transition" name="Reserve"
    >
        Reserve
    </button>

    <p class="text-xs text-text-sub text-center">
        You won’t be charged yet
    </p>

    </form>

  </aside>
</main>

<footer class="border-t border-[#ede5e4] dark:border-[#3a3433] py-6 text-center text-sm text-text-sub">
  © 2023 RentalApp
</footer>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>NewsExpress</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

  <!-- 🔺 Navbar -->
  <nav class="bg-white shadow sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
      <div class="flex items-center space-x-3">
        <img src="https://picsum.photos/40" alt="Logo" class="rounded-full h-10 w-10">
        <span class="text-xl font-bold text-red-600">NewsExpress</span>
      </div>
      <div class="hidden md:flex space-x-6 text-sm text-gray-700 font-medium">
        <a href="#" class="hover:text-red-600">India</a>
        <a href="#" class="hover:text-red-600">World</a>
        <a href="#" class="hover:text-red-600">Politics</a>
        <a href="#" class="hover:text-red-600">Sports</a>
        <a href="#" class="hover:text-red-600">Tech</a>
        
      </div>
      <a href="/login" class="bg-red-600 text-white px-4 py-1 rounded-full text-sm font-semibold hover:bg-red-700 transition">
    Login
  </a>
    </div>
  </nav>

  <!-- 🔔 Breaking News Strip -->
  <div class="bg-red-600 text-white text-sm py-2">
    <marquee class="max-w-7xl mx-auto">🔥 PM addresses nation | India wins series against Australia | Market hits record high | Breaking: Major reforms announced!</marquee>
  </div>

  <!-- 📰 Big News -->
  <section class="max-w-7xl mx-auto mt-6 px-4 grid grid-cols-1 md:grid-cols-2 gap-6 bg-white p-6 rounded-lg shadow">
    <img src="https://picsum.photos/600/350" class="rounded-lg w-full" alt="Big News">
    <div class="flex flex-col justify-center">
      <h1 class="text-3xl font-bold text-gray-800 mb-2">India's Growth Hits Historic 8.5%</h1>
      <p class="text-sm text-gray-500 mb-2">Written by <strong class="text-gray-700">Rahul Sharma</strong> | April 30, 2025</p>
      <p class="text-gray-600 text-base leading-relaxed">
        The Indian economy has surged ahead in the last quarter with an impressive 8.5% GDP growth. Experts attribute this to progressive reforms and policy implementation. Stock markets reacted positively as investors showed renewed confidence...
      </p>
    </div>
  </section>

  <!-- 📄 Main Section (3/4 News Cards + 1/4 Categories) -->
  <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-4 gap-6 mt-8 px-4">

    <!-- 🔷 Left 3/4 News Cards -->
    <div class="lg:col-span-3 space-y-4">
      <!-- Card 1 -->
      <div class="bg-white p-4 rounded-lg flex shadow hover:shadow-md transition">
        <img src="https://picsum.photos/150/100" alt="News" class="rounded-md w-40 h-28 object-cover">
        <div class="ml-4 flex flex-col justify-between">
          <div>
            <h2 class="text-lg font-semibold text-gray-800">Major Cabinet Reshuffle Expected Soon</h2>
            <p class="text-sm text-gray-600 mt-1">A political stir is in the making as sources suggest a major cabinet reshuffle...</p>
          </div>
          <p class="text-xs text-gray-500 mt-2">By <strong>Priya Sinha</strong> | Today</p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="bg-white p-4 rounded-lg flex shadow hover:shadow-md transition">
        <img src="https://picsum.photos/151/100" alt="News" class="rounded-md w-40 h-28 object-cover">
        <div class="ml-4 flex flex-col justify-between">
          <div>
            <h2 class="text-lg font-semibold text-gray-800">AI in Healthcare: New Innovation Unveiled</h2>
            <p class="text-sm text-gray-600 mt-1">Researchers in India launch a new AI model to detect diseases in seconds...</p>
          </div>
          <p class="text-xs text-gray-500 mt-2">By <strong>Amit Joshi</strong> | 2 hrs ago</p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="bg-white p-4 rounded-lg flex shadow hover:shadow-md transition">
        <img src="https://picsum.photos/152/100" alt="News" class="rounded-md w-40 h-28 object-cover">
        <div class="ml-4 flex flex-col justify-between">
          <div>
            <h2 class="text-lg font-semibold text-gray-800">India Clinches Series Win Over Australia</h2>
            <p class="text-sm text-gray-600 mt-1">With an explosive performance, India secured the series 3-1 at home...</p>
          </div>
          <p class="text-xs text-gray-500 mt-2">By <strong>Neha Kapoor</strong> | Yesterday</p>
        </div>
      </div>
    </div>

    <!-- 📚 Right 1/4 Category List -->
    <div class="bg-white p-4 rounded-lg shadow h-fit w-full">
  <h3 class="text-lg font-bold text-gray-800 mb-4 border-b pb-2">Categories</h3>
  <div class="grid gap-2">
    <a href="#" class="flex items-center gap-2 px-4 py-2 rounded-md bg-gray-50 hover:bg-red-50 hover:text-red-600 hover:shadow transition">
      📺 <span>Entertainment</span>
    </a>
    <a href="#" class="flex items-center gap-2 px-4 py-2 rounded-md bg-gray-50 hover:bg-red-50 hover:text-red-600 hover:shadow transition">
      📰 <span>Today</span>
    </a>
    <a href="#" class="flex items-center gap-2 px-4 py-2 rounded-md bg-gray-50 hover:bg-red-50 hover:text-red-600 hover:shadow transition">
      🇮🇳 <span>National</span>
    </a>
    <a href="#" class="flex items-center gap-2 px-4 py-2 rounded-md bg-gray-50 hover:bg-red-50 hover:text-red-600 hover:shadow transition">
      🌐 <span>International</span>
    </a>
    <a href="#" class="flex items-center gap-2 px-4 py-2 rounded-md bg-gray-50 hover:bg-red-50 hover:text-red-600 hover:shadow transition">
      🏏 <span>Sports</span>
    </a>
    <a href="#" class="flex items-center gap-2 px-4 py-2 rounded-md bg-gray-50 hover:bg-red-50 hover:text-red-600 hover:shadow transition">
      💼 <span>Business</span>
    </a>
    <a href="#" class="flex items-center gap-2 px-4 py-2 rounded-md bg-gray-50 hover:bg-red-50 hover:text-red-600 hover:shadow transition">
      🔬 <span>Science</span>
    </a>
    <a href="#" class="flex items-center gap-2 px-4 py-2 rounded-md bg-gray-50 hover:bg-red-50 hover:text-red-600 hover:shadow transition">
      🛡️ <span>Defence</span>
    </a>
  </div>
</div>


  </div>

  <!-- 🔻 Footer -->
  <footer class="bg-gray-800 text-white mt-10">
    <div class="max-w-7xl mx-auto px-4 py-6 flex flex-col md:flex-row justify-between items-center">
      <p class="text-sm">&copy; 2025 NewsExpress. All rights reserved.</p>
      <div class="flex space-x-4 mt-2 md:mt-0">
        <a href="#" class="text-sm hover:underline">About Us</a>
        <a href="#" class="text-sm hover:underline">Contact</a>
        <a href="#" class="text-sm hover:underline">Privacy Policy</a>
      </div>
    </div>
  </footer>

</body>
</html>

<!-- 🔺 Navbar -->
<nav class="bg-white shadow sticky top-0 z-50">
  <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
    <div class="flex items-center space-x-3">
      <!-- <img src="https://picsum.photos/40" alt="Logo" class="rounded-full h-10 w-10"> -->
      <a href="{{ route('index.page') }}"><span class="text-xl font-bold text-red-600">NewsExpress</span></a>
    </div>
    <div class="hidden md:flex space-x-6 text-sm text-gray-700 font-medium">
      <a href="#" class="hover:text-red-600">India</a>
      <a href="#" class="hover:text-red-600">World</a>
      <a href="#" class="hover:text-red-600">Politics</a>
      <a href="#" class="hover:text-red-600">Sports</a>
      <a href="#" class="hover:text-red-600">Tech</a>

    </div>
    @guest
    <a href="/login"
      class="bg-red-600 text-white px-4 py-1 rounded-full text-sm font-semibold hover:bg-red-700 transition">
      Login
    </a>
  @endguest

    @auth
    <div>
      Hello, {{ Auth::user()->name ?? 'Student' }}
    <a href="{{ route('securelogout.page') }}"
      class="bg-red-600 text-white px-4 py-1 rounded-full text-sm font-semibold hover:bg-red-700 transition">
      Logout
    </a>
    </div>
  @endauth

  </div>
</nav>
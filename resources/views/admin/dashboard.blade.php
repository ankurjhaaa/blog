<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard - News Website</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <div class="flex min-h-screen">

    <!-- Sidebar -->
    @include("admin.includes.sidebar")

    <!-- Main Content -->
    <main class="flex-1 p-6">

      <!-- Top Bar -->
      <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-semibold text-gray-800">Dashboard</h1>
        <div class="flex items-center space-x-4">
          <span class="text-sm text-gray-600">👋 Admin</span>
          <button class="bg-red-600 text-white px-4 py-1 rounded hover:bg-red-700 text-sm">Logout</button>
        </div>
      </div>

      <!-- Stat Cards -->
      <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">
        <div class="bg-white p-5 rounded-lg shadow text-center">
          <h2 class="text-2xl font-bold text-gray-800">128</h2>
          <p class="text-sm text-gray-500">Total News</p>
        </div>
        <div class="bg-white p-5 rounded-lg shadow text-center">
          <h2 class="text-2xl font-bold text-gray-800">42</h2>
          <p class="text-sm text-gray-500">Active Users</p>
        </div>
        <div class="bg-white p-5 rounded-lg shadow text-center">
          <h2 class="text-2xl font-bold text-gray-800">12</h2>
          <p class="text-sm text-gray-500">Categories</p>
        </div>
        <div class="bg-white p-5 rounded-lg shadow text-center">
          <h2 class="text-2xl font-bold text-gray-800">230</h2>
          <p class="text-sm text-gray-500">Comments</p>
        </div>
      </div>

      <!-- Recent News Table -->
      <div class="bg-white p-6 rounded-lg shadow">
        <h2 class="text-lg font-semibold mb-4 text-gray-700">🗞️ Recent News Posts</h2>
        <table class="w-full text-left text-sm">
          <thead>
            <tr class="text-gray-600 border-b">
              <th class="py-2">#</th>
              <th class="py-2">Title</th>
              <th class="py-2">Category</th>
              <th class="py-2">Author</th>
              <th class="py-2">Date</th>
              <th class="py-2">Status</th>
            </tr>
          </thead>
          <tbody class="text-gray-700">
            <tr class="border-b hover:bg-gray-50">
              <td class="py-2">1</td>
              <td class="py-2">PM inaugurates new AI center</td>
              <td class="py-2">National</td>
              <td class="py-2">Admin</td>
              <td class="py-2">2025-04-29</td>
              <td class="py-2"><span class="px-2 py-1 bg-green-100 text-green-700 rounded text-xs">Published</span></td>
            </tr>
            <tr class="border-b hover:bg-gray-50">
              <td class="py-2">2</td>
              <td class="py-2">IPL: RCB wins by 7 wickets</td>
              <td class="py-2">Sports</td>
              <td class="py-2">Editor</td>
              <td class="py-2">2025-04-28</td>
              <td class="py-2"><span class="px-2 py-1 bg-yellow-100 text-yellow-700 rounded text-xs">Draft</span></td>
            </tr>
            <!-- Add more rows as needed -->
          </tbody>
        </table>
      </div>

    </main>

  </div>

</body>
</html>

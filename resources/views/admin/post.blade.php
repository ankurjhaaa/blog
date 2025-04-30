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
        <h1 class="text-2xl font-semibold text-gray-800">Category</h1>
        <div class="flex items-center space-x-4">
          <span class="text-sm text-gray-600">👋 Admin</span>
          <button class="bg-red-600 text-white px-4 py-1 rounded hover:bg-red-700 text-sm">Logout</button>
        </div>
      </div>
      <div class="max-w-7xl mx-auto bg-white p-6 rounded-lg shadow-md">
    <h2 class="text-2xl font-bold text-red-600 mb-6">📰 Manage News Posts</h2>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
      
      <!-- Left: News Posts Table -->
      <div class="md:col-span-3 overflow-x-auto">
        <table class="min-w-full text-sm border text-left">
          <thead class="bg-gray-200 text-gray-700">
            <tr>
              <th class="py-2 px-4 border">#</th>
              <th class="py-2 px-4 border">Title</th>
              <th class="py-2 px-4 border">Author</th>
              <th class="py-2 px-4 border">Category</th>
              <th class="py-2 px-4 border">Image</th>
              <th class="py-2 px-4 border">Status</th>
              <th class="py-2 px-4 border text-center">Action</th>
            </tr>
          </thead>
          <tbody>
            <!-- Example Row -->
            <tr class="border hover:bg-gray-50">
              <td class="py-2 px-4 border">1</td>
              <td class="py-2 px-4 border">New AI Launch</td>
              <td class="py-2 px-4 border">Admin</td>
              <td class="py-2 px-4 border">Technology</td>
              <td class="py-2 px-4 border">
                <img src="https://picsum.photos/40" alt="thumb" class="w-10 h-10 rounded object-cover">
              </td>
              <td class="py-2 px-4 border"><span class="px-2 py-1 bg-green-200 text-green-800 rounded text-xs">Published</span></td>
              <td class="py-2 px-4 border text-center space-x-2">
                <button class="text-blue-600 hover:underline">Edit</button>
                <button class="text-red-600 hover:underline">Delete</button>
              </td>
            </tr>
            <!-- More Rows as Needed -->
          </tbody>
        </table>
      </div>

      <!-- Right: Add News Post Form -->
      <div class="bg-gray-50 p-4 rounded-lg shadow-sm">
        <h3 class="text-lg font-semibold mb-4 text-gray-700 border-b pb-2">➕ Add News Post</h3>
        <form>
          <div class="mb-3">
            <label class="block text-sm mb-1 text-gray-600">Title</label>
            <input type="text" placeholder="Enter news title" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-red-400">
          </div>
          <div class="mb-3">
            <label class="block text-sm mb-1 text-gray-600">Author</label>
            <input type="text" placeholder="e.g., Editor Name" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-red-400">
          </div>
          <div class="mb-3">
            <label class="block text-sm mb-1 text-gray-600">Category ID</label>
            <input type="text" placeholder="e.g., 1" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-red-400">
          </div>
          <div class="mb-3">
            <label class="block text-sm mb-1 text-gray-600">Image</label>
            <input type="file" class="w-full px-3 py-2 border rounded bg-white focus:outline-none focus:ring-2 focus:ring-red-400">
          </div>
          <div class="mb-3">
            <label class="block text-sm mb-1 text-gray-600">Content</label>
            <textarea rows="4" placeholder="Enter news content..." class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-red-400"></textarea>
          </div>
          <div class="mb-4">
            <label class="block text-sm mb-1 text-gray-600">Status</label>
            <select class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-red-400">
              <option value="published">Published</option>
              <option value="draft">Draft</option>
            </select>
          </div>
          <button type="submit" class="w-full bg-red-600 text-white py-2 rounded hover:bg-red-700">Add Post</button>
        </form>
      </div>

    </div>
  </div>

      
    </main>

  </div>

</body>
</html>

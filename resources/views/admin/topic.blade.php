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
        <h1 class="text-2xl font-semibold text-gray-800">Topic</h1>
        <div class="flex items-center space-x-4">
          <span class="text-sm text-gray-600">👋 Admin</span>
          <button class="bg-red-600 text-white px-4 py-1 rounded hover:bg-red-700 text-sm">Logout</button>
        </div>
      </div>
      <div class="max-w-6xl mx-auto bg-white p-6 rounded-lg shadow-md">
    <h2 class="text-2xl font-bold text-red-600 mb-6">🗂️ Manage Categories</h2>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
      <!-- Left: Category Table -->
      <div class="md:col-span-3 overflow-x-auto">
        <table class="min-w-full border text-sm text-left">
          <thead>
            <tr class="bg-gray-200 text-gray-700">
              <th class="py-2 px-4 border">#</th>
              <th class="py-2 px-4 border">Topic Name</th>
              <th class="py-2 px-4 border">Description</th>
              <th class="py-2 px-4 border text-center">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($allAdminTopics as $allAdminTopicsView)
            <tr class="hover:bg-gray-50 border">
              <td class="py-2 px-4 border">{{ $allAdminTopicsView->id }}</td>
              <td class="py-2 px-4 border">{{ $allAdminTopicsView->topicName }}</td>
              <td class="py-2 px-4 border">{{ $allAdminTopicsView->description }}</td>
              <td class="py-2 px-4 border text-center space-x-2">
                <button class="text-blue-600 hover:underline">Edit</button>
                <button class="text-red-600 hover:underline">Delete</button>
              </td>
            </tr>
            
            @endforeach
            
          </tbody>
        </table>
      </div>

      <!-- Right: Add Category Form -->
      <div class="bg-gray-50 p-4 rounded-lg shadow-sm">
        <h3 class="text-lg font-semibold mb-4 text-gray-700 border-b pb-2">➕ Add New Topic</h3>
        <form method="post" Action="{{ route("insertTopic.page") }}">
          @csrf
          <div class="mb-4">
            <label class="block text-sm mb-1 text-gray-600">Topic Name</label>
            <input type="text" name="topic" placeholder="e.g., Sports" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-red-400" />
          </div>
          <div class="mb-4">
            <label class="block text-sm mb-1 text-gray-600">Description</label>
            <textarea name="description" placeholder="Enter category description..." rows="3" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-red-400"></textarea>
          </div>
          <button type="submit" class="w-full bg-red-600 text-white py-2 rounded hover:bg-red-700">Add Category</button>
        </form>
      </div>
    </div>
  </div>

      
    </main>

  </div>

</body>
</html>

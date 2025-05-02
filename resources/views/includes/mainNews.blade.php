<!-- 📄 Main Section (3/4 News Cards + 1/4 Categories) -->
<div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-4 gap-6 mt-8 px-4">

  <!-- 🔷 Left 3/4 News Cards -->
  <div class="lg:col-span-3 space-y-4">
    @foreach ($allPosts as $allPostsView)
    <!-- Card 1 -->
    <div class="bg-white p-4 rounded-lg flex shadow hover:shadow-md transition">
      <img src="images/{{ $allPostsView->img }}" alt="News" class="rounded-md w-40 h-28 object-cover">
      <div class="ml-4 flex flex-col justify-between">
        <div>
          <h2 class="text-lg font-semibold text-gray-800">{{ $allPostsView->title }}</h2>
          <p class="text-sm text-gray-600 mt-1">{{ $allPostsView->content }} <a href="{{ route('news.page', $allPostsView->id) }}" class="text-blue-500">read more</a> </p>
          

        </div>
        <p class="text-xs text-gray-500 mt-2">By <strong>{{ $allPostsView->author }}</strong> | {{ $allPostsView->created_at }}</p>
      </div>
    </div>
    @endforeach
  </div>

  <!-- 📚 Right 1/4 Category List -->
  <div class="bg-white p-4 rounded-lg shadow h-fit w-full">
    <h3 class="text-lg font-bold text-gray-800 mb-4 border-b pb-2">Topic</h3>
    <div class="grid gap-2">
      @foreach ($allTopics as $allTopicsView)
        <a href="{{ route('filter.page', $allTopicsView->id) }}"
          class="flex items-center gap-2 px-4 py-2 rounded-md bg-gray-50 hover:bg-red-50 hover:text-red-600 hover:shadow transition">
          📺 <span>{{ $allTopicsView->topicName }}</span>
        </a>
      @endforeach
    </div>
  </div>

</div>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
    @include('includes.navbar')

    <!-- 📄 Main Section (3/4 News Cards + 1/4 Categories) -->
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-4 gap-6 mt-8 px-4">

        <!-- 🔷 Left 3/4 News Cards -->
        <div class="lg:col-span-3 space-y-4">
            @foreach ($posts as $postsFilter)
                <!-- Card 1 -->
                <div class="bg-white p-4 rounded-lg flex shadow hover:shadow-md transition">
                    <img src="/images/{{ $postsFilter->img }}" alt="News" class="rounded-md w-40 h-28 object-cover">
                    <div class="ml-4 flex flex-col justify-between">
                        <div>
                            <h2 class="text-lg font-semibold text-gray-800">{{ $postsFilter->title }}</h2>
                            <p class="text-sm text-gray-600 mt-1">{{ $postsFilter->content }} <a
                                    href="{{ route('news.page', $postsFilter->id) }}" class="text-blue-500">read more</a>
                            </p>


                        </div>
                        <p class="text-xs text-gray-500 mt-2">By <strong>{{ $postsFilter->author }}</strong> |
                            {{ $postsFilter->created_at }}
                        </p>
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



    @include('includes.footer')
</body>

</html>
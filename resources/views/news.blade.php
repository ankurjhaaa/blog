<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Personal News Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-800">

    <!-- Header -->
    @include('includes.navbar')

    <!-- Main Content -->
    <main class="max-w-6xl mx-auto p-4 grid grid-cols-1 md:grid-cols-3 gap-6 mt-4">

        <!-- Article Section -->
        <article class="md:col-span-2 bg-white rounded-sm shadow p-6">
            <p class="text-sm text-gray-500 mb-4">Published on: {{ $post->created_at }} |
                <strong>{{ $post->author }}</strong></p>
            <h2 class="text-3xl font-bold mb-2">{{ $post->title }}</h2>
            <img src="/images/{{ $post->img }}" alt="Rain News" class="rounded-lg mb-4">

            <div class="space-y-4 text-lg">
                <p>{{ $post->content }}</p>

            </div>
        </article>

        <!-- Sidebar - Related News -->
        <aside class="bg-white rounded-lg shadow p-4 space-y-4">
            <h3 class="text-xl font-semibold border-b pb-2 mb-2">Related News</h3>
            @foreach ($related as $relatedNews)
                
                <a href="{{ route('news.page' , $relatedNews->id ) }}" class="block hover:text-blue-600">{{ $relatedNews->title }}</a>
            @endforeach
            <div>

            </div>
        </aside>
    </main>

    @include('includes.footer')

</body>

</html>
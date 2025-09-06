<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>NewsExpress</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans">

  @include("includes.navbar")

  <!-- 🔔 Breaking News Strip -->
  <div class="bg-red-600 text-white text-sm py-2">
    <marquee class="max-w-7xl mx-auto">🔥 PM addresses nation | India wins series against Australia | Market hits record
      high | Breaking: Major reforms announced!</marquee>
  </div>
  @include("includes.headNews")

  @include("includes.mainNews")
  @include("includes.footer")







</body>

</html>
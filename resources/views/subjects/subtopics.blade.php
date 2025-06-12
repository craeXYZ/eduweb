<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Subtopics</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-lime-100 font-sans min-h-screen flex flex-col">
  <div class="p-4">
    <h1 class="text-2xl font-bold text-gray-800 mb-4">Subtopics</h1>

    @forelse ($subSubjects as $item)
      <div class="rounded-xl p-4 mb-4 shadow bg-white">
        <h2 class="text-xl font-semibold">{{ $item['title'] }}</h2>
        <p class="text-gray-600 text-sm mt-1">{{ $item['description'] ?? 'No description provided.' }}</p>
      </div>
    @empty
      <p class="text-gray-500">No subtopics found for this subject.</p>
    @endforelse
  </div>

  <a href="/subjects" class="text-blue-600 underline text-sm p-4">← Back to Subjects</a>
</body>
</html>

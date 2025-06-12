<!-- resources/views/pages/subject.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mathematics - Topics</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-lime-300 font-sans min-h-screen flex flex-col">
  <!-- Top Nav -->
  <div class="flex justify-between items-center p-4">
    <div class="text-white text-2xl font-bold">≡</div>
    <div class="flex items-center gap-4">
      <div class="text-white text-xl">🔔</div>
      <div class="w-8 h-8 bg-white rounded-full border"></div>
    </div>
  </div>

  <!-- Subject Cards -->
  <div class="flex-1 px-4 space-y-4">
    <a href="/course" class="block rounded-2xl p-6 text-white text-xl font-semibold shadow-lg" style="background: linear-gradient(to right, #667eea, #764ba2);">
      Calculus
    </a>
    <a href="/course" class="block rounded-2xl p-6 text-white text-xl font-semibold shadow-lg" style="background: linear-gradient(to right, #ff6a00, #ee0979);">
      Algebra
    </a>
    <a href="/course" class="block rounded-2xl p-6 text-white text-xl font-semibold shadow-lg" style="background: linear-gradient(to right, #f6d365, #fda085);">
      Geometry
    </a>
  </div>

  <!-- Bottom Navigation -->
  <div class="bg-white shadow-md rounded-full m-4 p-3 flex justify-around items-center">
    <a href="/" class="text-gray-500 text-sm flex flex-col items-center">
      <span>🏠</span>
      <span>Home</span>
    </a>
    <a href="/subjects/mathematics" class="text-blue-600 font-bold text-sm flex flex-col items-center">
      <span>📖</span>
      <span>Subjects</span>
    </a>
    <a href="#" class="text-gray-500 text-sm flex flex-col items-center">
      <span>🧠</span>
      <span>FAQ's</span>
    </a>
  </div>
</body>
</html>

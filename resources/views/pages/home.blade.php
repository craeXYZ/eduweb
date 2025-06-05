<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduReach - Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-green-100 font-sans">
    <!-- Top Navigation -->
    <div class="flex justify-between items-center px-4 py-2 bg-white shadow">
        <div class="text-xl font-bold text-green-700">EduReach</div>
        <div class="space-x-2">
            <a href="/signup" class="text-sm text-green-700 font-semibold">Sign Up</a>
            <a href="/login" class="text-sm text-white bg-green-600 px-3 py-1 rounded-full">Login</a>
        </div>
    </div>

    <!-- Search Bar -->
    <div class="p-4">
        <input type="text" placeholder="Search..." class="w-full px-4 py-2 rounded-full shadow-md focus:outline-none">
    </div>

    <!-- Hero Section -->
    <div class="p-4">
        <div class="flex items-center space-x-4">
            <div class="bg-green-300 w-16 h-16 rounded-full"></div>
            <div>
                <h1 class="text-2xl font-bold">Subjects</h1>
                <p class="text-gray-600 text-sm">Recommendations for you</p>
            </div>
        </div>

        <!-- Subject Cards -->
        <div class="grid grid-cols-2 gap-4 mt-4">
            <a href="/subject" class="bg-orange-300 p-4 rounded-xl shadow text-white font-semibold">Mathematics</a>
            <a href="/subject" class="bg-blue-400 p-4 rounded-xl shadow text-white font-semibold">Geography</a>
            <a href="/subject" class="bg-yellow-400 p-4 rounded-xl shadow text-white font-semibold">History</a>
            <a href="/subject" class="bg-purple-400 p-4 rounded-xl shadow text-white font-semibold">Physics</a>
        </div>
    </div>

    <!-- Schedule Section -->
    <div class="p-4 mt-6">
        <h2 class="text-xl font-bold">Your Schedule</h2>
        <p class="text-sm text-gray-500 mb-2">Next lessons</p>

        <!-- Lesson Card -->
        <div class="bg-green-400 text-white p-4 rounded-xl shadow">
            <h3 class="font-bold text-lg">Biology</h3>
            <p class="text-sm">Chapter 3: Animal Kingdom</p>
            <p class="text-xs mt-2">Tomorrow at 11:00</p>
        </div>
    </div>

    <!-- Bottom Navigation (APK section removed) -->
</body>
</html>

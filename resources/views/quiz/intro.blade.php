<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quiz - Mathematics</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-lime-300 text-gray-800 min-h-screen flex flex-col justify-between items-center p-4">

    <!-- Top Bar -->
    <div class="w-full flex justify-between items-center">
        <!-- Menu icon -->
        <button>
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2"
                 viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        <!-- Icons -->
        <div class="flex gap-4 text-orange-600 text-xl">
            <i class="fas fa-bell"></i>
            <i class="fas fa-user"></i>
        </div>
    </div>

    <!-- Main Circle Card -->
    <div class="bg-white rounded-full w-80 h-80 flex flex-col items-center justify-center shadow-xl mt-10">
        <h1 class="text-2xl font-semibold mb-4">Mathematics</h1>
        <div class="w-28 h-28 rounded-full border-2 border-gray-600 flex items-center justify-center text-lg font-bold">
            0/3
        </div>
        <button class="mt-6 px-6 py-3 bg-green-500 text-white rounded-md shadow hover:bg-green-600">
            Start
        </button>
    </div>

    <!-- Bottom Navigation -->
    <div class="mb-6">
        <div class="bg-white rounded-full px-8 py-2 flex gap-10 items-center shadow">
            <div class="text-center">
                <i class="fas fa-home text-gray-600"></i>
                <p class="text-sm">Home</p>
            </div>
            <div class="text-center">
                <i class="fas fa-question text-gray-600"></i>
                <p class="text-sm">FAQ's</p>
            </div>
        </div>
        <p class="text-blue-600 text-sm text-center mt-2">Skip</p>
    </div>

</body>
</html>

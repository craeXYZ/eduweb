<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Course - Derivatives</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-white text-gray-800">

    <div class="max-w-4xl mx-auto p-6">
        <!-- Header: Back + Icons -->
        <div class="flex justify-between items-center mb-6">
            <a href="{{ url()->previous() }}" class="text-orange-500 font-semibold text-lg">
                <i class="fas fa-chevron-left mr-2"></i> Back
            </a>
            <div class="flex gap-6 text-orange-500 text-2xl">
                <i class="fas fa-bell cursor-pointer hover:text-orange-600"></i>
                <i class="fas fa-user cursor-pointer hover:text-orange-600"></i>
            </div>
        </div>

        <!-- Content Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-start">
            <!-- Course Image -->
            <div class="rounded-xl overflow-hidden shadow-md">
                <img src="{{ asset('images/course-code.jpg') }}" alt="Course image" class="w-full h-auto">
            </div>

            <!-- Course Info -->
            <div>
                <!-- Title and Info -->
                <div class="mb-4 flex flex-col md:flex-row md:items-center md:justify-between">
                    <h1 class="text-2xl font-bold">Derivatives</h1>
                    <span class="text-md text-gray-600 mt-2 md:mt-0">2.5 Hours | 38 Modules</span>
                </div>

                <!-- Description -->
                <p class="text-base text-gray-700 leading-relaxed mb-6">
                    Are you intrigued by the world of coding but don't know where to start? Our "Learn to Code" course is the perfect introduction to the fascinating and empowering world of programming. Designed for absolute beginners, this course will demystify coding and provide you with a solid foundation to kickstart your coding journey.
                </p>

                <!-- Take Quiz Button -->
                <a href="/quiz"
                   class="block text-center w-full bg-green-500 text-white font-semibold py-3 rounded-full hover:bg-green-600 transition duration-200">
                    Take Quiz
                </a>
            </div>
        </div>
    </div>

</body>
</html>

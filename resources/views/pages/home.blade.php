<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduReach - Learning Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .subject-card {
            transition: all 0.3s ease;
        }
        .subject-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }
        .schedule-card {
            transition: all 0.3s ease;
        }
        .schedule-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
<div class="min-h-screen bg-gray-50">
    <!-- Hero Section with Navigation -->
    <div class="bg-gradient-to-br from-green-400 to-green-500 relative overflow-hidden">
        <div class="container mx-auto px-6 py-4">
            <!-- Top Navigation -->
            <div class="flex justify-between items-center mb-12">
                <!-- Logo -->
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-white rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-green-500" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 3L1 9l4 2.18v6L12 21l7-3.82v-6l2-1.09V17h2V9L12 3zm6.82 6L12 12.72 5.18 9 12 5.28 18.82 9zM17 15.99l-5 2.73-5-2.73v-3.72L12 15l5-2.73v3.72z"/>
                        </svg>
                    </div>
                    <h1 class="text-2xl font-bold text-white">EduReach</h1>
                </div>

                <!-- Auth Buttons -->
                <div class="flex items-center space-x-4">
                <a href="/login" class="px-6 py-2 text-white border border-white border-opacity-50 rounded-full hover:bg-white hover:bg-opacity-20 transition-all duration-200">
                    Sign In
                </a>
                <a href="/register" class="px-6 py-2 bg-white text-green-500 rounded-full font-medium hover:bg-opacity-90 transition-all duration-200">
                    Sign Up
                </a>
                </div>
            </div>

            <!-- Illustration -->
            <div class="absolute right-8 top-8 opacity-80">
                <div class="relative">
                    <!-- Globe -->
                    <div class="w-32 h-32 rounded-full bg-green-600 relative overflow-hidden">
                        <div class="absolute inset-2 rounded-full bg-green-200">
                            <div class="absolute top-4 left-6 w-8 h-12 bg-green-600 rounded-full transform rotate-12"></div>
                            <div class="absolute top-8 right-4 w-6 h-8 bg-green-600 rounded-full"></div>
                            <div class="absolute bottom-6 left-8 w-10 h-6 bg-green-600 rounded-full transform -rotate-12"></div>
                        </div>
                        <!-- Globe stand -->
                        <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-2 h-8 bg-green-700"></div>
                        <div class="absolute -bottom-6 left-1/2 transform -translate-x-1/2 w-16 h-4 bg-green-700 rounded-full"></div>
                    </div>

                    <!-- Books -->
                    <div class="absolute -right-8 top-12">
                        <div class="relative">
                            <div class="w-20 h-3 bg-orange-400 rounded-r-sm"></div>
                            <div class="w-18 h-3 bg-orange-500 rounded-r-sm mt-1 ml-1"></div>
                            <div class="w-16 h-3 bg-blue-400 rounded-r-sm mt-1 ml-2"></div>
                            <div class="w-14 h-3 bg-purple-400 rounded-r-sm mt-1 ml-3"></div>
                        </div>
                    </div>

                    <!-- Decorative plants -->
                    <div class="absolute -left-16 top-4">
                        <div class="w-8 h-16 bg-green-300 rounded-full opacity-60"></div>
                        <div class="absolute top-0 left-2 w-12 h-8 bg-green-400 rounded-full opacity-40"></div>
                    </div>

                    <div class="absolute -right-12 -top-4">
                        <div class="w-6 h-12 bg-blue-300 rounded-full opacity-50"></div>
                        <div class="absolute top-2 -left-2 w-10 h-6 bg-blue-400 rounded-full opacity-30"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-6 -mt-8 relative z-10">
        <!-- Subjects Section -->
        <div class="bg-white rounded-3xl shadow-lg p-8 mb-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-2">Subjects</h2>
            <p class="text-gray-500 mb-8">Recommendations for you</p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-4">
                <!-- Math Card -->
                <a href="/subject" class="subject-card bg-gradient-to-br from-orange-400 to-orange-500 rounded-2xl p-6 text-white relative overflow-hidden cursor-pointer">
                    <div class="relative z-10">
                        <div class="w-8 h-8 mb-4">
                            <svg fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z"/>
                            </svg>
                        </div>
                        <h3 class="font-semibold text-lg">Math</h3>
                        <p class="text-sm opacity-90 mt-2">3 Courses Available</p>
                    </div>
                    <div class="absolute top-4 right-4">
                        <button class="text-white opacity-75 hover:opacity-100 transition-opacity">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/>
                            </svg>
                        </button>
                    </div>
                    <div class="absolute -right-4 -bottom-4 w-16 h-16 bg-white bg-opacity-20 rounded-full"></div>
                </a>

                <!-- Science Card -->
                <div class="subject-card bg-gradient-to-br from-blue-400 to-blue-600 rounded-2xl p-6 text-white relative overflow-hidden cursor-pointer">
                    <div class="relative z-10">
                        <div class="w-8 h-8 mb-4">
                            <svg fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.45,16C12.17,16 11.97,15.8 11.97,15.5C11.97,15.22 12.17,15 12.45,15C12.73,15 12.95,15.22 12.95,15.5C12.95,15.8 12.73,16 12.45,16M22,9A1,1 0 0,1 21,10A1,1 0 0,1 20,9V7A1,1 0 0,1 21,6A1,1 0 0,1 22,7V9M20.5,11A0.5,0.5 0 0,1 20,11.5A0.5,0.5 0 0,1 19.5,11A0.5,0.5 0 0,1 20,10.5A0.5,0.5 0 0,1 20.5,11M21,13A1,1 0 0,1 20,14A1,1 0 0,1 19,13A1,1 0 0,1 20,12A1,1 0 0,1 21,13M9,12A5,5 0 0,1 14,17A5,5 0 0,1 9,22A5,5 0 0,1 4,17A5,5 0 0,1 9,12M9,16A1,1 0 0,0 8,17A1,1 0 0,0 9,18A1,1 0 0,0 10,17A1,1 0 0,0 9,16Z"/>
                            </svg>
                        </div>
                        <h3 class="font-semibold text-lg">Science</h3>
                        <p class="text-sm opacity-90 mt-2">Not Available</p>
                    </div>
                    <div class="absolute top-4 right-4">
                        <button class="text-white opacity-75 hover:opacity-100 transition-opacity">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/>
                            </svg>
                        </button>
                    </div>
                    <div class="absolute -right-4 -bottom-4 w-16 h-16 bg-white bg-opacity-20 rounded-full"></div>
                </div>

                <!-- Social Card -->
                <div class="subject-card bg-gradient-to-br from-purple-400 to-purple-600 rounded-2xl p-6 text-white relative overflow-hidden cursor-pointer">
                    <div class="relative z-10">
                        <div class="w-8 h-8 mb-4">
                            <svg fill="currentColor" viewBox="0 0 24 24">
                                <path d="M16,4C18.11,4 19.8,5.69 19.8,7.8C19.8,9.91 18.11,11.6 16,11.6C13.89,11.6 12.2,9.91 12.2,7.8C12.2,5.69 13.89,4 16,4M16,13.4C18.78,13.4 22,14.8 22,16.2V18H10V16.2C10,14.8 13.22,13.4 16,13.4M8,4C10.11,4 11.8,5.69 11.8,7.8C11.8,9.91 10.11,11.6 8,11.6C5.89,11.6 4.2,9.91 4.2,7.8C4.2,5.69 5.89,4 8,4M8,13.4C10.78,13.4 14,14.8 14,16.2V18H2V16.2C2,14.8 5.22,13.4 8,13.4Z"/>
                            </svg>
                        </div>
                        <h3 class="font-semibold text-lg">Social</h3>
                        <p class="text-sm opacity-90 mt-2">Not Available</p>
                    </div>
                    <div class="absolute top-4 right-4">
                        <button class="text-white opacity-75 hover:opacity-100 transition-opacity">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/>
                            </svg>
                        </button>
                    </div>
                    <div class="absolute -right-4 -bottom-4 w-16 h-16 bg-white bg-opacity-20 rounded-full"></div>
                </div>

                <!-- Indonesian Card -->
                <div class="subject-card bg-gradient-to-br from-red-400 to-red-600 rounded-2xl p-6 text-white relative overflow-hidden cursor-pointer">
                    <div class="relative z-10">
                        <div class="w-8 h-8 mb-4">
                            <svg fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.87,15.07L10.33,12.56L10.36,12.53C12.1,10.59 13.34,8.36 14.07,6H17V4H10V2H8V4H1V6H12.17C11.5,7.92 10.44,9.75 9,11.35C8.07,10.32 7.3,9.19 6.69,8H4.69C5.42,9.63 6.42,11.17 7.67,12.56L2.58,17.58L4,19L9,14L12.11,17.11L12.87,15.07Z"/>
                            </svg>
                        </div>
                        <h3 class="font-semibold text-lg">Indonesian</h3>
                        <p class="text-sm opacity-90 mt-2">Not Available</p>
                    </div>
                    <div class="absolute top-4 right-4">
                        <button class="text-white opacity-75 hover:opacity-100 transition-opacity">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/>
                            </svg>
                        </button>
                    </div>
                    <div class="absolute -right-4 -bottom-4 w-16 h-16 bg-white bg-opacity-20 rounded-full"></div>
                </div>

                <!-- English Card -->
                <div class="subject-card bg-gradient-to-br from-indigo-400 to-indigo-600 rounded-2xl p-6 text-white relative overflow-hidden cursor-pointer">
                    <div class="relative z-10">
                        <div class="w-8 h-8 mb-4">
                            <svg fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.87,15.07L10.33,12.56L10.36,12.53C12.1,10.59 13.34,8.36 14.07,6H17V4H10V2H8V4H1V6H12.17C11.5,7.92 10.44,9.75 9,11.35C8.07,10.32 7.3,9.19 6.69,8H4.69C5.42,9.63 6.42,11.17 7.67,12.56L2.58,17.58L4,19L9,14L12.11,17.11L12.87,15.07Z"/>
                            </svg>
                        </div>
                        <h3 class="font-semibold text-lg">English</h3>
                        <p class="text-sm opacity-90 mt-2">Not Available</p>
                    </div>
                    <div class="absolute top-4 right-4">
                        <button class="text-white opacity-75 hover:opacity-100 transition-opacity">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/>
                            </svg>
                        </button>
                    </div>
                    <div class="absolute -right-4 -bottom-4 w-16 h-16 bg-white bg-opacity-20 rounded-full"></div>
                </div>
            </div>
        </div>

        <!-- Profile Section -->
        <div class="bg-white rounded-3xl shadow-lg p-8 mb-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-2">Your Preference</h2>
            <p class="text-gray-500 mb-8">Account information</p>

            <div class="schedule-card bg-gradient-to-r from-gray-400 to-gray-500 rounded-2xl p-8 text-white relative overflow-hidden cursor-pointer">
                <div class="flex justify-between items-center">
                    <div class="flex-1 text-center">
                        <div class="w-16 h-16 bg-white bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold mb-2">Sign In First</h3>
                        <p class="text-gray-100 mb-6">Please sign in to view your profile information</p>

                        <button class="bg-white text-gray-600 px-8 py-3 rounded-full font-medium hover:bg-opacity-90 transition-all duration-200">
                            Sign In Now
                        </button>
                    </div>
                </div>

                <!-- Decorative wave -->
                <div class="absolute right-0 top-0 w-32 h-full opacity-20">
                    <svg viewBox="0 0 100 100" class="w-full h-full">
                        <path d="M0,0 Q50,50 100,0 L100,100 L0,100 Z" fill="currentColor"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

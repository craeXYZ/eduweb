<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EduReach - Sign Up</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white min-h-screen flex items-center justify-center font-sans">
  <div class="w-full max-w-sm p-6">
    <a href="/login" class="text-orange-500 text-sm mb-4 inline-block">&larr; Back</a>

    <div class="flex flex-col items-center mb-8">
      <!-- Logo -->
      <div class="w-16 h-16 mb-2">
        <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-full h-full text-green-500">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6l4 2" />
        </svg>
      </div>
      <h1 class="text-3xl font-bold text-green-500">EduReach</h1>
    </div>

    <h2 class="text-xl font-semibold text-blue-900 mb-6">Sign Up</h2>

    <form action="/placement" method="POST">
      <!-- Name -->
      <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
      <input type="text" name="name" id="name" required
             class="mt-1 mb-4 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">

      <!-- Phone -->
      <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
      <input type="tel" name="phone" id="phone" required
             class="mt-1 mb-4 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">

      <!-- Password -->
      <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
      <input type="password" name="password" id="password" required
             class="mt-1 mb-2 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">
      <button type="button" class="text-sm text-blue-500 mb-4" onclick="togglePasswordVisibility('password')">Show Password</button>

      <!-- Confirm Password -->
      <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
      <input type="password" name="password_confirmation" id="password_confirmation" required
             class="mt-1 mb-2 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">
      <button type="button" class="text-sm text-blue-500 mb-4" onclick="togglePasswordVisibility('password_confirmation')">Show Password</button>

      <!-- Residence -->
      <label for="residence" class="block text-sm font-medium text-gray-700 mt-4">Residence</label>
      <input type="text" name="residence" id="residence" required
             class="mt-1 mb-6 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">

      <!-- Submit -->
      <button type="submit"
              class="w-full bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded-md shadow">
        Sign Up
      </button>
    </form>
  </div>

  <script>
    function togglePasswordVisibility(id) {
      const field = document.getElementById(id);
      field.type = field.type === "password" ? "text" : "password";
    }
  </script>
</body>
</html>

<!-- resources/views/auth/register.blade.php -->
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
    <a href="{{ route('login') }}" class="text-orange-500 text-sm mb-4 inline-block">&larr; Back</a>

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

    <form method="POST" action="{{ url('/register') }}" class="space-y-4">
      @csrf

      <div>
        <label class="block text-sm text-blue-900">Full Name</label>
        <input name="name" type="text" placeholder="Full Name" required class="w-full px-4 py-2 border border-blue-900 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>

      <div>
        <label class="block text-sm text-blue-900">Email</label>
        <input name="email" type="email" placeholder="Email" required class="w-full px-4 py-2 border border-blue-900 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>

      <div>
        <label class="block text-sm text-blue-900">Password</label>
        <input name="password" type="password" placeholder="Password" required class="w-full px-4 py-2 border border-blue-900 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>

      <div>
        <label class="block text-sm text-blue-900">Confirm Password</label>
        <input name="password_confirmation" type="password" placeholder="Confirm Password" required class="w-full px-4 py-2 border border-blue-900 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>

      <button type="submit" class="w-full bg-green-500 text-white py-2 rounded-full font-semibold hover:bg-green-600">Sign Up</button>
    </form>

    <div class="mt-6 text-center text-sm text-blue-900">
      Already have an account? <a href="{{ route('login') }}" class="font-bold">Sign In</a>
    </div>
  </div>
</body>
</html>


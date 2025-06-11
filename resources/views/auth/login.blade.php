<!-- resources/views/auth/login.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EduReach - Sign In</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white min-h-screen flex items-center justify-center font-sans">
  <div class="w-full max-w-sm p-6">
    <div class="flex flex-col items-center mb-8">
      <!-- Logo -->
      <div class="w-16 h-16 mb-2">
        <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-full h-full text-green-500">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6l4 2" />
        </svg>
      </div>
      <h1 class="text-3xl font-bold text-green-500">EduReach</h1>
    </div>

    <h2 class="text-xl font-semibold text-blue-900 mb-6">Sign in</h2>

    @if ($errors->any())
    <div class="mb-4 text-red-600 text-sm">
        @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
        @endforeach
    </div>
@endif


    <form method="POST" action="{{ url('/login') }}" class="space-y-4">
      @csrf
      <div>
        <label class="block text-sm text-blue-900">Email</label>
        <input name="email" type="email" placeholder="Email" required class="w-full px-4 py-2 border border-blue-900 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>

      <div>
        <label class="block text-sm text-blue-900">Password</label>
        <input name="password" type="password" placeholder="Password" required class="w-full px-4 py-2 border border-blue-900 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>

      <div class="text-right">
        <a href="#" class="text-blue-900 text-sm font-semibold">Forget Password?</a>
      </div>

      <button type="submit" class="w-full bg-green-500 text-white py-2 rounded-full font-semibold hover:bg-green-600">Sign in</button>
    </form>

    <div class="mt-6 text-center text-sm text-blue-900">
      Don’t have account? <a href="{{ route('register') }}" class="font-bold">Sign Up</a>
    </div>
  </div>
</body>
</html>


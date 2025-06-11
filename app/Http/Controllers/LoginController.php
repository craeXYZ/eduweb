
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

public function login(Request $request)
{
    // Validate input
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // Send request to Go API
    $response = Http::post('http://localhost:8080/login', [
        'email' => $request->email,
        'password' => $request->password,
    ]);

    // Check if login succeeded
    if ($response->successful()) {
        $data = $response->json();

        // Store token or user info in session
        session([
            'api_token' => $data['token'] ?? null,
            'user' => $data['user'] ?? null, // depends on what the API returns
        ]);

        return redirect('/dashboard');
    }

    // Handle failed login
    return back()->withErrors([
        'email' => $response->json()['message'] ?? 'Login failed.',
    ])->withInput();
}


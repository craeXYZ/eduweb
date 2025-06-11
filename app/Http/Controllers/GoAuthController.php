<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class GoAuthController extends Controller
{
    protected $apiUrl;

    public function __construct()
    {
        $this->apiUrl = env('GO_API_URL', 'http://localhost:8080');
    }

    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $response = Http::post("{$this->apiUrl}/login", $request->only('email', 'password'));

        if ($response->successful()) {
            Session::put('go_api_token', $response['token']);
            return redirect('/dashboard'); // or wherever
        }

        return back()->withErrors('Login failed')->withInput();
    }

    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $response = Http::post("{$this->apiUrl}/student", $request->only('name', 'email', 'password'));

        if ($response->successful()) {
            return redirect()->route('login')->with('success', 'Registered successfully. Please login.');
        }

        return back()->withErrors('Sign up failed')->withInput();
    }

    public function logout()
    {
        Session::forget('go_api_token');
        return redirect()->route('login');
    }
}


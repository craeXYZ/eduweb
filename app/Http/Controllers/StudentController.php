<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\GoApiService;

class StudentController extends Controller
{
    protected $api;

    public function __construct(GoApiService $api)
    {
        $this->api = $api;
    }

    public function index(Request $request)
    {
        $token = session('go_api_token');

        if (!$token) {
            return redirect()->route('login')->withErrors('You must log in first.');
        }

        $response = $this->api->getStudents($token);

        if ($response->successful()) {
            $students = $response->json();
            return view('students.index', compact('students'));
        }

        return response()->json(['error' => 'Failed to load students.'], 500);
    }
}


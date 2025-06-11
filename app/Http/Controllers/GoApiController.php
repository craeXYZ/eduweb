<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class GoApiController extends Controller
{
    public function getStudents()
    {
        $response = Http::get('http://localhost:8080/student');

        if ($response->successful()) {
            return $response->json(); // Or pass to a view
        }

        return response()->json(['error' => 'API call failed'], 500);
    }
}

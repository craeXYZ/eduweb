<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SubjectController extends Controller
{
    public function showSubjects()
{
    $response = Http::get('http://localhost:8080/subject'); // adjust port if needed
    $subjects = $response->json();

    return view('pages.subject', compact('subjects'));
}

    public function showSubSubjects($id)
{
    $response = Http::get("http://localhost:8080/learning-material/by-subject/{$id}"); // Adjust host if needed
    $subSubjects = $response->json();

    return view('pages.subtopics', compact('subSubjects'));
}

    public function showSubDetail($id)
    {
        $response = Http::get("https://your-api-url.com/api/sub-subjects/$id");

        if ($response->successful()) {
            $sub = $response->json();
            return view('subjects.detail', compact('sub'));
        } else {
            return abort(500, 'API Error');
        }
    }
}

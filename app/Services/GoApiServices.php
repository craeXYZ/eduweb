<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class GoApiService
{
    protected $baseUrl;

    public function __construct()
    {
        $this->baseUrl = env('GO_API_URL', 'http://localhost:8080');
    }

    public function login($credentials)
    {
        return Http::post("{$this->baseUrl}/login", $credentials);
    }

    public function getStudents($token)
    {
        return Http::withToken($token)
                   ->get("{$this->baseUrl}/student");
    }

    // Add to GoApiService.php

public function createStudent($data, $token)
{
    return Http::withToken($token)
               ->post("{$this->baseUrl}/student", $data);
}

public function getStudentById($id, $token)
{
    return Http::withToken($token)
               ->get("{$this->baseUrl}/student/{$id}");
}

public function updateStudent($id, $data, $token)
{
    return Http::withToken($token)
               ->put("{$this->baseUrl}/student/{$id}", $data);
}

public function deleteStudent($id, $token)
{
    return Http::withToken($token)
               ->delete("{$this->baseUrl}/student/{$id}");
}

// Similarly, you can create:
public function getInterests($token) { /* ... */ }
public function getSubjects($token) { /* ... */ }
public function getQuizzes($token) { /* ... */ }
// And more from your route list

}

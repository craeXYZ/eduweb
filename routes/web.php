<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\GoApiController;
use App\Http\Controllers\GoAuthController;
use App\Http\Controllers\SubjectController;

Route::get('/login', [GoAuthController::class, 'showLogin'])->name('login');
Route::post('/login', [GoAuthController::class, 'login']);

Route::get('/register', [GoAuthController::class, 'showRegister'])->name('register');
Route::post('/register', [GoAuthController::class, 'register']);

Route::post('/logout', [GoAuthController::class, 'logout'])->name('logout');

Route::get('/api-test', function () {
    $response = Http::get('http://localhost:8080/');

    if ($response->successful()) {
        return 'Connected to Go API!';
    }

    return 'Failed to connect to Go API.';
});

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/lessons', function () {
    return view('pages.lessons');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/subject', function () {
    return view('pages.subject');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/course', function () {
    return view('subjects.course');
});

Route::get('/quiz', function () {
    return view('quiz.intro');
});

Route::get('/quiz/start', function () {
    return view('quiz.quiz');
});

Route::get('/quiz/result', function () {
    return view('quiz.outro');
});

Route::get('/placement', function () {
    return view('placements.placement');
});

Route::get('/placement/result', function () {
    return view('placements.result');
});

Route::get('/quiz/start/{course}', [QuizController::class, 'start'])->name('quiz.start');

Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::get('/students', [GoApiController::class, 'getStudents']);

Route::get('/subject/{id}/topics', [SubjectController::class, 'showSubSubjects']);

Route::get('/sub-subject/{id}', [SubjectController::class, 'showSubDetail']);

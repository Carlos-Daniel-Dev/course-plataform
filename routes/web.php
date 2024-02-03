<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CoursesController;

use App\Models\User;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register/store', [RegisterController::class, 'store'])->name('register.store');
Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::redirect('/courses', '/');
Route::get('/courses/create', [CoursesController::class, 'create'])->name('courses.create');
Route::post('/courses/store', [CoursesController::class, 'store'])->name('courses.store');
Route::get('/courses/painel', [CoursesController::class, 'painel'])->name('courses.painel');

Route::get('/all', function () {
    $accounts = User::all();
    return response()->json(['accounts' => $accounts]);
});

Route::get('/all', function () {
    $accounts = User::all();
    return response()->json(['accounts' => $accounts]);
});
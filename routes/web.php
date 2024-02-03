<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

use App\Models\User;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register/store', [RegisterController::class, 'store'])->name('register.store');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'auth'])->name('login.auth');

Route::get('/all', function () {
    $accounts = User::all();
    return response()->json(['accounts' => $accounts]);
});

Route::get('/all', function () {
    $accounts = User::all();
    return response()->json(['accounts' => $accounts]);
});
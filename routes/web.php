<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

// Route::get('/', function () {
//     return view('admin/main');
// });

Route::get('/', function () {
    return view('auth/login');
});



Route::middleware('guest')->group(function () {
    Route::post('/login', [LoginController::class, 'store'])->name('login');
});

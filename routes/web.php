<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Administration\User\UserController;
use App\Http\Controllers\Administration\Company\CompanyController;


Route::get('/', function () {
    return view('auth/login');
})->name('home');



Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login.form'); 
    Route::post('/login', [LoginController::class, 'store'])->name('login');
});


Route::get('/dashboard', function () {
    return view('admin.pages.dashboard');
})->middleware(['auth', 'verified', 'prevent-back-history'])->name('dashboard');

Route::middleware(['auth', 'prevent-back-history'])->group(function () {

    Route::get('/logout', [LogoutController::class, 'Logout'])->name('page.logout');

   Route::prefix('administration')->group(function () {

        Route::prefix('user')->controller(UserController::class)->group(function () {
            Route::get('/', 'index')->name('administration.user');
            Route::get('/ajaxuser', 'ajaxuser')->name('administration.ajaxuser');
        });

        Route::prefix('company')->controller(CompanyController::class)->group(function () {
            Route::get('/', 'index')->name('administration.company');
        });

    });

});
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;


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

    // Route::prefix('product')->controller(ProductController::class)->group(function() {
    //     Route::get('/', 'index')->name('product');
    //     Route::post('store', 'store')->name('product.store');
    //     Route::get('single-data/{id}',  'show')->name('product.show');
    //     Route::put('update/{id}',  'update')->name('product.update');
    //     Route::delete('delete/{id}',  'destroy')->name('product.delete');
    // });
});
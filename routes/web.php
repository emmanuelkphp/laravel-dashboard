<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\CardsController;



Route::any('/', function () {
    return auth()->user() ? redirect()->to('/admin') : redirect()->route('login');
});

Route::any('/home', function () {
    return auth()->user() ? redirect()->to('/admin') : redirect()->route('login');
});

Route::prefix('admin')->middleware(['auth'])->group(function () {
    /*dashboard*/
    Route::resource('/', DashboardController::class);
    /*profile*/
    Route::resource('profile', ProfileController::class);
    /*cards*/
    Route::resource('cards', CardsController::class);
});


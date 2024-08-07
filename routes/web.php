<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ITAssetController;
use App\Http\Controllers\DashboardController;

// Resource route for IT Assets
Route::resource('assets', ITAssetController::class);

// Route for Dashboard
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Home Route (Optional)
Route::get('/', function () {
    return view('welcome'); // or another view if you have a custom home page
});

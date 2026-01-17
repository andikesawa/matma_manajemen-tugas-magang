<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get("dashboard", [DashboardController::class, "index"])->name('dashboard');

Route::get("login", [AuthController::class,"login"])->name("login");
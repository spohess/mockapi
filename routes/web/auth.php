<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\IndexController;
use App\Http\Controllers\Auth\LoginController;

Route::get('login', IndexController::class)->name('login');
Route::post('login', LoginController::class)->name('auth.login');

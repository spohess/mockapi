<?php

use Illuminate\Support\Facades\Route;

Route::middleware('guest')->get('/', function () {
    return redirect(route('login'));
})->name('index');

Route::middleware('guest')
    ->prefix('auth')
    ->group(__DIR__ . '/web/auth.php');

Route::middleware('auth')
    ->prefix('panel')
    ->group(__DIR__ . '/web/panel.php');

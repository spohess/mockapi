<?php

use App\Livewire\Panel\Home;
use Illuminate\Support\Facades\Route;

Route::get('/home', Home::class)->name('home');

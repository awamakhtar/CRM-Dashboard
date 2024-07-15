<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;







Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

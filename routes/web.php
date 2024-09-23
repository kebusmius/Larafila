<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [WelcomeController::class, 'index']);
Route::get('/brands/{id}', [WelcomeController::class, 'show'])->name('brands.show');

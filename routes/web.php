<?php

use App\Http\Controllers\LangController;
use App\Http\Controllers\MainNavController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainNavController::class, 'index']);

Route::get('/locale/{id}',[LangController::class, 'locale']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

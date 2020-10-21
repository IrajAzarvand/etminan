<?php

use App\Http\Controllers\LangController;
use App\Http\Controllers\MainNavController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SliderController;

Route::get('/', [MainNavController::class, 'index']);

Route::get('/locale/{id}',[LangController::class, 'locale'])->name('locale');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('Slider', SliderController::class);

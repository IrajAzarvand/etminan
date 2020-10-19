<?php

use App\Http\Controllers\LangController;
use App\Http\Controllers\MainNavController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [MainNavController::class, 'index']);

//Route::get('/fa', [LangController::class, 'fa'])->name('fa');
//Route::get('/en', [LangController::class, 'en'])->name('en');

Route::get('/locale/{id}',[LangController::class, 'locale']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

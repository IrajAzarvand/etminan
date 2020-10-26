<?php

use App\Http\Controllers\LangController;
use App\Http\Controllers\MainNavController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SliderController;

Route::get('/locale/{lang}',[LangController::class, 'locale'])->name('locale');

Route::get('/', [MainNavController::class, 'HomePage'])->name('HomePage');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('Slider', SliderController::class);

Route::get('Product/NewProductsSetting', [ProductController::class,'NewProductsSetting'])->name('Product.NewProductsSetting');
Route::resource('Product', ProductController::class);


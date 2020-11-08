<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CeoMessageController;
use App\Http\Controllers\CertificatesAndHonorsController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\MainNavController;
use App\Http\Controllers\OrganizationalChartController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TagController;

Route::get('/locale/{lang}', [LangController::class, 'locale'])->name('locale');

Route::get('/', [MainNavController::class, 'HomePage'])->name('HomePage');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('Slider', SliderController::class);

Route::get('Product/NewProductsSetting', [ProductController::class, 'NewProductsSetting'])->name('Product.NewProductsSetting');
Route::resource('Product', ProductController::class);

Route::resource('History', HistoryController::class);

Route::resource('CeoMessage', CeoMessageController::class);

Route::resource('CH', CertificatesAndHonorsController::class);

Route::resource('OC', OrganizationalChartController::class);

Route::resource('Tags', TagController::class);

Route::resource('Category', CategoryController::class);
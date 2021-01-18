<?php

use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProductCatalogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CeoMessageController;
use App\Http\Controllers\CertificatesAndHonorsController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\LatestNewsController;
use App\Http\Controllers\MainNavController;
use App\Http\Controllers\OrganizationalChartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PTypeController;
use App\Http\Controllers\SalesOfficeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TagController;

Route::get('/locale/{lang}', [LangController::class, 'locale'])->name('locale');

Route::get('/', [MainNavController::class, 'HomePage'])->name('HomePage');
Route::get('/AllProducts', [MainNavController::class, 'AllProducts'])->name('AllProducts');
Route::get('/ViewProduct/{p_id}', [MainNavController::class, 'ViewProduct'])->name('ViewProduct');
Route::get('/AllCH', [MainNavController::class, 'AllCH'])->name('AllCH');
Route::get('/ViewCH/{ch_id}', [MainNavController::class, 'ViewCH'])->name('ViewCH');
Route::get('/AllGalleries', [MainNavController::class, 'AllGalleries'])->name('AllGalleries');
Route::get('/ViewGallery/{g_id}', [MainNavController::class, 'ViewGallery'])->name('ViewGallery');
Route::get('/SalesOffices', [MainNavController::class, 'SalesOffice'])->name('SalesOffice');



//Dashboard Routes
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::resource('Slider', SliderController::class);

Route::get('/Product/{ProductId}/{productImage}/delete',[ProductController::class,'ProductImgRemove'])->name('ProductImageRemove');
Route::resource('Product', ProductController::class);

Route::resource('History', HistoryController::class);

Route::resource('CeoMessage', CeoMessageController::class);

Route::resource('CH', CertificatesAndHonorsController::class);

Route::resource('OC', OrganizationalChartController::class);

Route::resource('Tags', TagController::class);

Route::resource('Category', CategoryController::class);

Route::resource('LatestNews', LatestNewsController::class);

Route::resource('Footer', FooterController::class);

Route::resource('PType', PTypeController::class);

Route::get('/Catalog/{ProductId}/{catalogImage}/delete',[ProductCatalogController::class,'ProductCatalogRemove'])->name('ProductCatalogRemove');
Route::resource('Catalog', ProductCatalogController::class);

Route::resource('Gallery', GalleryController::class);

Route::resource('SO', SalesOfficeController::class);

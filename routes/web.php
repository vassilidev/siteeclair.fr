<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\PreorderController;
use Illuminate\Support\Facades\Route;

Route::get('/', LandingController::class)->name('landing');

Route::get('/preorder/{offer}', [PreorderController::class, 'view'])->name('preorder');
Route::post('/preorder/{offer}', [PreorderController::class, 'store'])->name('preorder.store');
Route::get('/order/success/{order}', [PreorderController::class, 'success'])->name('order.success');

Route::view('/contact', 'pages.contact')->name('contact');

Route::get('/sitemap.xml', function () {
    return \Spatie\Sitemap\SitemapGenerator::create(config('app.url'))->getSitemap();
})->name('sitemap');
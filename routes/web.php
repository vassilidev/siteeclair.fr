<?php

use App\Enums\Offer;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PreorderController;
use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\Sitemap;

Route::get('/', LandingController::class)->name('landing');

Route::get('/preorder/{offer}', [PreorderController::class, 'view'])->name('preorder');
Route::post('/preorder/{offer}', [PreorderController::class, 'store'])->name('preorder.store');
Route::get('/order/success/{order}', [PreorderController::class, 'success'])->name('order.success');

Route::get('/cgs', [LandingController::class, 'cgs'])->name('cgs');

Route::get('/contact', [LandingController::class, 'contact'])->name('contact');

Route::get('/sitemap.xml', function () {
    $sitemap = Sitemap::create()
        ->add(route('landing'));

    foreach (Offer::cases() as $offer) {
        if ($offer->isCustom()) {
            continue;
        }

        $sitemap->add(route('preorder', $offer));
    }

    $sitemap->add(route('contact'));
    $sitemap->add(route('cgs'));

    return $sitemap;
})->name('sitemap');
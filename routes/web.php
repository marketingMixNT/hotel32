<?php

use Livewire\Livewire;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\TravelsController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\PrivacyPolicyController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {

    Livewire::setUpdateRoute(function ($handle) {
        return Route::post('/custom/livewire/update', $handle);
    });

    Route::get('/', HomeController::class,)->name('home');
    Route::get(LaravelLocalization::transRoute('routes.about'), [AboutController::class,'index'])->name('about');
    Route::get(LaravelLocalization::transRoute('routes.rooms'), [RoomController::class,'index'])->name('room.index');
    Route::get(LaravelLocalization::transRoute('routes.room'), [RoomController::class,'show'])->name('room.show');
    Route::get(LaravelLocalization::transRoute('routes.restaurant'), [RestaurantController::class,'index'])->name('restaurant');
    Route::get(LaravelLocalization::transRoute('routes.transfers'), [TravelsController::class,'index'])->name('travels');
    Route::get(LaravelLocalization::transRoute('routes.gallery'), [GalleryController::class,'index'])->name('gallery');
    Route::get(LaravelLocalization::transRoute('routes.localization'), [LocalizationController::class,'index'])->name('localization');
    Route::get(LaravelLocalization::transRoute('routes.contact'), [ContactController::class,'index'])->name('contact');

    Route::get(LaravelLocalization::transRoute('routes.privacy-policy'), [PrivacyPolicyController::class,'index'])->name('privacy-policy');

    
});

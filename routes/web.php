<?php

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

    Route::get('/', HomeController::class,)->name('home');
    Route::get('/o-nas', [AboutController::class,'index'])->name('about');
    Route::get('/pokoje', [RoomController::class,'index'])->name('room.index');
    Route::get('/pokoj/{slug}', [RoomController::class,'show'])->name('room.show');
    Route::get('/restauracja', [RestaurantController::class,'index'])->name('restaurant');
    Route::get('/transfery-i-wycieczki', [TravelsController::class,'index'])->name('travels');
    Route::get('/galeria', [GalleryController::class,'index'])->name('gallery');
    Route::get('/lokalizacja', [LocalizationController::class,'index'])->name('localization');
    Route::get('/kontakt', [ContactController::class,'index'])->name('contact');

    Route::get('/polityka-prywatnosci', [PrivacyPolicyController::class,'index'])->name('privacy-policy');

    
});

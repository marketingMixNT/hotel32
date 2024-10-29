<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\RestaurantController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {

    Route::get('/', HomeController::class,)->name('home');
    Route::get('/o-nas', [AboutController::class,'index'])->name('about');
    Route::get('/pokoje', [RoomController::class,'index'])->name('room.index');
    Route::get('/pokoj/{slug}', [RoomController::class,'show'])->name('room.show');
    Route::get('/restauracja', [RestaurantController::class,'index'])->name('restaurant');

    
});

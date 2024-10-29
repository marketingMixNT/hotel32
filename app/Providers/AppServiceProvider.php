<?php

namespace App\Providers;

use App\Models\Cta;
use App\Models\Home;
use App\Models\Room;
use App\Models\Feature;
use App\Observers\CtaObserver;
use App\Observers\HomeObserver;
use App\Observers\RoomObserver;
use App\Observers\FeatureObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Cta::observe(CtaObserver::class);
        Feature::observe(FeatureObserver::class);
        Home::observe(HomeObserver::class);
        Room::observe(RoomObserver::class);
    }
}

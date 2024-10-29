<?php

namespace App\Providers;

use App\Models\Cta;
use App\Models\Home;
use App\Models\Room;
use App\Models\Feature;
use App\Models\PageAbout;
use App\Models\PageRooms;
use App\Models\PageTravels;
use App\Models\PageAboutBlock;
use App\Models\PageRestaurant;
use App\Observers\CtaObserver;
use App\Observers\HomeObserver;
use App\Observers\RoomObserver;
use App\Models\PageTravelsBlock;
use App\Observers\FeatureObserver;
use App\Models\PageRestaurantBlock;
use App\Observers\PageAboutObserver;
use App\Observers\PageRoomsObserver;
use App\Observers\PageTravelsObserver;
use Illuminate\Support\ServiceProvider;
use App\Observers\PageAboutBlockObserver;
use App\Observers\PageRestaurantObserver;
use App\Observers\PageTravelsBlockObserver;
use App\Observers\PageRestaurantBlockObserver;

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

        PageAboutBlock::observe(PageAboutBlockObserver::class);
        PageAbout::observe(PageAboutObserver::class);

        PageRestaurantBlock::observe(PageRestaurantBlockObserver::class);
        PageRestaurant::observe(PageRestaurantObserver::class);

        PageTravelsBlock::observe(PageTravelsBlockObserver::class);
        PageTravels::observe(PageTravelsObserver::class);

        PageRooms::observe(PageRoomsObserver::class);

        Room::observe(RoomObserver::class);
    }
}

<?php

namespace App\Providers;

use App\Models\Cta;
use App\Models\Home;
use App\Models\Room;
use App\Models\Feature;
use App\Models\PageAbout;
use App\Models\PageRooms;
use App\Models\PageAboutBlock;
use App\Models\PageRestaurant;
use App\Observers\CtaObserver;
use App\Observers\HomeObserver;
use App\Observers\RoomObserver;
use App\Observers\FeatureObserver;
use App\Models\PageRestaurantBlock;
use App\Observers\PageAboutObserver;
use App\Observers\PageRoomsObserver;
use Illuminate\Support\ServiceProvider;
use App\Observers\PageAboutBlockObserver;
use App\Observers\PageRestaurantObserver;
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

        PageRooms::observe(PageRoomsObserver::class);

        Room::observe(RoomObserver::class);
    }
}

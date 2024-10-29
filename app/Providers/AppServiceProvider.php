<?php

namespace App\Providers;

use App\Models\Cta;
use App\Models\Home;
use App\Models\Room;
use App\Models\Feature;
use App\Models\Gallery;
use App\Models\PageAbout;
use App\Models\PageRooms;
use App\Models\PageGallery;
use App\Models\PageTravels;
use App\Models\PageAboutBlock;
use App\Models\PageRestaurant;
use App\Observers\CtaObserver;
use App\Observers\HomeObserver;
use App\Observers\RoomObserver;
use App\Models\PageTravelsBlock;
use App\Observers\FeatureObserver;
use App\Observers\GalleryObserver;
use App\Models\PageRestaurantBlock;
use App\Observers\PageAboutObserver;
use App\Observers\PageRoomsObserver;
use App\Observers\PageGalleryObserver;
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
        Home::observe(HomeObserver::class);
        Feature::observe(FeatureObserver::class);
        Cta::observe(CtaObserver::class);

        PageAbout::observe(PageAboutObserver::class);
        PageAboutBlock::observe(PageAboutBlockObserver::class);

        PageRooms::observe(PageRoomsObserver::class);
        Room::observe(RoomObserver::class);

        PageRestaurant::observe(PageRestaurantObserver::class);
        PageRestaurantBlock::observe(PageRestaurantBlockObserver::class);

        PageTravels::observe(PageTravelsObserver::class);
        PageTravelsBlock::observe(PageTravelsBlockObserver::class);

        PageGallery::observe(PageGalleryObserver::class);
        Gallery::observe(GalleryObserver::class);
    }
}

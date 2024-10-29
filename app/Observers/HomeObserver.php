<?php

namespace App\Observers;

use App\Models\Home;
use Illuminate\Support\Facades\Storage;

class HomeObserver
{
    /**
     * Handle the Home "created" event.
     */
    public function created(Home $home): void
    {
        //
    }

    /**
     * Handle the Home "updated" event.
     */
    public function updated(Home $home): void
    {
        // SINGLE
        // logo
        if ($home->isDirty('logo')) {
            Storage::disk('public')->delete($home->getOriginal('logo'));
        }
        // about1
        if ($home->isDirty('about_image_first')) {
            Storage::disk('public')->delete($home->getOriginal('about_image_first'));
        }
        // about2
        if ($home->isDirty('about_image_second')) {
            Storage::disk('public')->delete($home->getOriginal('about_image_second'));
        }
        // restaurant1
        if ($home->isDirty('restaurant_image_first')) {
            Storage::disk('public')->delete($home->getOriginal('restaurant_image_first'));
        }
        // restaurant2
        if ($home->isDirty('restaurant_image_second')) {
            Storage::disk('public')->delete($home->getOriginal('restaurant_image_second'));
        }

        // ARRAY
        // slider_images
        if ($home->isDirty('slider_images')) {
            $original = $home->getOriginal('slider_images');
            $current = $home->slider_images;
            $deletedImages = array_diff($original, $current);

            foreach ($deletedImages as $image) {
                Storage::disk('public')->delete($image);
            }
        }
        // travel_images
        if ($home->isDirty('travel_images')) {
            $original = $home->getOriginal('travel_images');
            $current = $home->travel_images;
            $deletedImages = array_diff($original, $current);

            foreach ($deletedImages as $image) {
                Storage::disk('public')->delete($image);
            }
        }
    }

    /**
     * Handle the Home "deleted" event.
     */
    public function deleted(Home $home): void
    {
        // logo
        if (!is_null($home->logo)) {
            Storage::disk('public')->delete($home->getOriginal('logo'));
        }
        // sliderImages
        if (!is_null($home->slider_images)) {
            Storage::disk('public')->delete($home->getOriginal('slider_images'));
        }
        // about1
        if (!is_null($home->about_image_first)) {
            Storage::disk('public')->delete($home->getOriginal('about_image_first'));
        }
        // about2
        if (!is_null($home->about_image_second)) {
            Storage::disk('public')->delete($home->getOriginal('about_image_second'));
        }
        // restaurant1
        if (!is_null($home->restaurant_image_first)) {
            Storage::disk('public')->delete($home->getOriginal('restaurant_image_first'));
        }
        // restaurant2
        if (!is_null($home->restaurant_image_second)) {
            Storage::disk('public')->delete($home->getOriginal('restaurant_image_second'));
        }
        // travelImages
        if (!is_null($home->travel_images)) {
            Storage::disk('public')->delete($home->getOriginal('travel_images'));
        }
    }

    /**
     * Handle the Home "restored" event.
     */
    public function restored(Home $home): void
    {
        //
    }

    /**
     * Handle the Home "force deleted" event.
     */
    public function forceDeleted(Home $home): void
    {
        //
    }
}

<?php

namespace App\Observers;

use App\Models\PageRestaurant;
use Illuminate\Support\Facades\Storage;

class PageRestaurantObserver
{
    /**
     * Handle the PageRestaurant "created" event.
     */
    public function created(PageRestaurant $pageRestaurant): void
    {
        //
    }

    /**
     * Handle the PageRestaurant "updated" event.
     */
    public function updated(PageRestaurant $pageRestaurant): void
    {
        if ($pageRestaurant->isDirty('banner')) {
            Storage::disk('public')->delete($pageRestaurant->getOriginal('banner'));
        }
    }

    /**
     * Handle the PageRestaurant "deleted" event.
     */
    public function deleted(PageRestaurant $pageRestaurant): void
    {
        if (!is_null($pageRestaurant->banner)) {
            Storage::disk('public')->delete($pageRestaurant->getOriginal('banner'));
        }
    }

    /**
     * Handle the PageRestaurant "restored" event.
     */
    public function restored(PageRestaurant $pageRestaurant): void
    {
        //
    }

    /**
     * Handle the PageRestaurant "force deleted" event.
     */
    public function forceDeleted(PageRestaurant $pageRestaurant): void
    {
        //
    }
}

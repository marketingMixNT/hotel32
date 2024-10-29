<?php

namespace App\Observers;

use App\Models\PageRestaurantBlock;
use Illuminate\Support\Facades\Storage;

class PageRestaurantBlockObserver
{
    /**
     * Handle the PageRestaurantBlock "created" event.
     */
    public function created(PageRestaurantBlock $pageRestaurantBlock): void
    {
        //
    }

    /**
     * Handle the PageRestaurantBlock "updated" event.
     */
    public function updated(PageRestaurantBlock $pageRestaurantBlock): void
    {
        if ($pageRestaurantBlock->isDirty('image')) {
            Storage::disk('public')->delete($pageRestaurantBlock->getOriginal('image'));
        }
    }

    /**
     * Handle the PageRestaurantBlock "deleted" event.
     */
    public function deleted(PageRestaurantBlock $pageRestaurantBlock): void
    {
        if (!is_null($pageRestaurantBlock->image)) {
            Storage::disk('public')->delete($pageRestaurantBlock->getOriginal('image'));
        }
    }

    /**
     * Handle the PageRestaurantBlock "restored" event.
     */
    public function restored(PageRestaurantBlock $pageRestaurantBlock): void
    {
        //
    }

    /**
     * Handle the PageRestaurantBlock "force deleted" event.
     */
    public function forceDeleted(PageRestaurantBlock $pageRestaurantBlock): void
    {
        //
    }
}

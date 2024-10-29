<?php

namespace App\Observers;

use App\Models\PageTravelsBlock;
use Illuminate\Support\Facades\Storage;

class PageTravelsBlockObserver
{
    /**
     * Handle the PageTravelsBlock "created" event.
     */
    public function created(PageTravelsBlock $pageTravelsBlock): void
    {
        //
    }

    /**
     * Handle the PageTravelsBlock "updated" event.
     */
    public function updated(PageTravelsBlock $pageTravelsBlock): void
    {
        if ($pageTravelsBlock->isDirty('image')) {
            Storage::disk('public')->delete($pageTravelsBlock->getOriginal('image'));
        }
    }

    /**
     * Handle the PageTravelsBlock "deleted" event.
     */
    public function deleted(PageTravelsBlock $pageTravelsBlock): void
    {
        if (!is_null($pageTravelsBlock->image)) {
            Storage::disk('public')->delete($pageTravelsBlock->getOriginal('image'));
        }
    }

    /**
     * Handle the PageTravelsBlock "restored" event.
     */
    public function restored(PageTravelsBlock $pageTravelsBlock): void
    {
        //
    }

    /**
     * Handle the PageTravelsBlock "force deleted" event.
     */
    public function forceDeleted(PageTravelsBlock $pageTravelsBlock): void
    {
        //
    }
}

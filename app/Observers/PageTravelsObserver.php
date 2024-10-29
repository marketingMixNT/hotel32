<?php

namespace App\Observers;

use App\Models\PageTravels;
use Illuminate\Support\Facades\Storage;

class PageTravelsObserver
{
    /**
     * Handle the PageTravels "created" event.
     */
    public function created(PageTravels $pageTravels): void
    {
        //
    }

    /**
     * Handle the PageTravels "updated" event.
     */
    public function updated(PageTravels $pageTravels): void
    {
        if ($pageTravels->isDirty('banner')) {
            Storage::disk('public')->delete($pageTravels->getOriginal('banner'));
        }
    }

    /**
     * Handle the PageTravels "deleted" event.
     */
    public function deleted(PageTravels $pageTravels): void
    {
        if (!is_null($pageTravels->banner)) {
            Storage::disk('public')->delete($pageTravels->getOriginal('banner'));
        }
    }

    /**
     * Handle the PageTravels "restored" event.
     */
    public function restored(PageTravels $pageTravels): void
    {
        //
    }

    /**
     * Handle the PageTravels "force deleted" event.
     */
    public function forceDeleted(PageTravels $pageTravels): void
    {
        //
    }
}

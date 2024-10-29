<?php

namespace App\Observers;

use App\Models\PageAbout;
use Illuminate\Support\Facades\Storage;

class PageAboutObserver
{
    /**
     * Handle the PageAbout "created" event.
     */
    public function created(PageAbout $pageAbout): void
    {
        //
    }

    /**
     * Handle the PageAbout "updated" event.
     */
    public function updated(PageAbout $pageAbout): void
    {
        if ($pageAbout->isDirty('banner')) {
            Storage::disk('public')->delete($pageAbout->getOriginal('banner'));
        }
    }

    /**
     * Handle the PageAbout "deleted" event.
     */
    public function deleted(PageAbout $pageAbout): void
    {
        if (!is_null($pageAbout->banner)) {
            Storage::disk('public')->delete($pageAbout->getOriginal('banner'));
        }
    }

    /**
     * Handle the PageAbout "restored" event.
     */
    public function restored(PageAbout $pageAbout): void
    {
        //
    }

    /**
     * Handle the PageAbout "force deleted" event.
     */
    public function forceDeleted(PageAbout $pageAbout): void
    {
        //
    }
}

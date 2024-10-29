<?php

namespace App\Observers;

use App\Models\PageLocalization;
use Illuminate\Support\Facades\Storage;

class PageLocalizationObserver
{
    /**
     * Handle the PageLocalization "created" event.
     */
    public function created(PageLocalization $pageLocalization): void
    {
        //
    }

    /**
     * Handle the PageLocalization "updated" event.
     */
    public function updated(PageLocalization $pageLocalization): void
    {
        if ($pageLocalization->isDirty('banner')) {
            Storage::disk('public')->delete($pageLocalization->getOriginal('banner'));
        }
    }

    /**
     * Handle the PageLocalization "deleted" event.
     */
    public function deleted(PageLocalization $pageLocalization): void
    {
        if (!is_null($pageLocalization->banner)) {
            Storage::disk('public')->delete($pageLocalization->getOriginal('banner'));
        }
    }

    /**
     * Handle the PageLocalization "restored" event.
     */
    public function restored(PageLocalization $pageLocalization): void
    {
        //
    }

    /**
     * Handle the PageLocalization "force deleted" event.
     */
    public function forceDeleted(PageLocalization $pageLocalization): void
    {
        //
    }
}

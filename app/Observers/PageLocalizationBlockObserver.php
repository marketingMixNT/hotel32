<?php

namespace App\Observers;

use App\Models\PageLocalizationBlock;
use Illuminate\Support\Facades\Storage;

class PageLocalizationBlockObserver
{
    /**
     * Handle the PageLocalizationBlock "created" event.
     */
    public function created(PageLocalizationBlock $pageLocalizationBlock): void
    {
        //
    }

    /**
     * Handle the PageLocalizationBlock "updated" event.
     */
    public function updated(PageLocalizationBlock $pageLocalizationBlock): void
    {
        if ($pageLocalizationBlock->isDirty('image')) {
            Storage::disk('public')->delete($pageLocalizationBlock->getOriginal('image'));
        }
    }

    /**
     * Handle the PageLocalizationBlock "deleted" event.
     */
    public function deleted(PageLocalizationBlock $pageLocalizationBlock): void
    {
        if (!is_null($pageLocalizationBlock->image)) {
            Storage::disk('public')->delete($pageLocalizationBlock->getOriginal('image'));
        }
    }

    /**
     * Handle the PageLocalizationBlock "restored" event.
     */
    public function restored(PageLocalizationBlock $pageLocalizationBlock): void
    {
        //
    }

    /**
     * Handle the PageLocalizationBlock "force deleted" event.
     */
    public function forceDeleted(PageLocalizationBlock $pageLocalizationBlock): void
    {
        //
    }
}

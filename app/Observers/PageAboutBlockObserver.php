<?php

namespace App\Observers;

use App\Models\PageAboutBlock;
use Illuminate\Support\Facades\Storage;

class PageAboutBlockObserver
{
    /**
     * Handle the PageAboutBlock "created" event.
     */
    public function created(PageAboutBlock $pageAboutBlock): void
    {
        //
    }

    /**
     * Handle the PageAboutBlock "updated" event.
     */
    public function updated(PageAboutBlock $pageAboutBlock): void
    {
        if ($pageAboutBlock->isDirty('image')) {
            Storage::disk('public')->delete($pageAboutBlock->getOriginal('image'));
        }
    }

    /**
     * Handle the PageAboutBlock "deleted" event.
     */
    public function deleted(PageAboutBlock $pageAboutBlock): void
    {
        if (!is_null($pageAboutBlock->image)) {
            Storage::disk('public')->delete($pageAboutBlock->getOriginal('image'));
        }
    }

    /**
     * Handle the PageAboutBlock "restored" event.
     */
    public function restored(PageAboutBlock $pageAboutBlock): void
    {
        //
    }

    /**
     * Handle the PageAboutBlock "force deleted" event.
     */
    public function forceDeleted(PageAboutBlock $pageAboutBlock): void
    {
        //
    }
}

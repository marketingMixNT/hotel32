<?php

namespace App\Observers;

use App\Models\PageContact;
use Illuminate\Support\Facades\Storage;

class PageContactObserver
{
    /**
     * Handle the PageContact "created" event.
     */
    public function created(PageContact $pageContact): void
    {
        //
    }

    /**
     * Handle the PageContact "updated" event.
     */
    public function updated(PageContact $pageContact): void
    {
        if ($pageContact->isDirty('banner')) {
            Storage::disk('public')->delete($pageContact->getOriginal('banner'));
        }
    }

    /**
     * Handle the PageContact "deleted" event.
     */
    public function deleted(PageContact $pageContact): void
    {
        if (!is_null($pageContact->banner)) {
            Storage::disk('public')->delete($pageContact->getOriginal('banner'));
        }
    }

    /**
     * Handle the PageContact "restored" event.
     */
    public function restored(PageContact $pageContact): void
    {
        //
    }

    /**
     * Handle the PageContact "force deleted" event.
     */
    public function forceDeleted(PageContact $pageContact): void
    {
        //
    }
}

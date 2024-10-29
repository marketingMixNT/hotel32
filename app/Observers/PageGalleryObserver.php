<?php

namespace App\Observers;

use App\Models\PageGallery;
use Illuminate\Support\Facades\Storage;

class PageGalleryObserver
{
    /**
     * Handle the PageGallery "created" event.
     */
    public function created(PageGallery $pageGallery): void
    {
        //
    }

    /**
     * Handle the PageGallery "updated" event.
     */
    public function updated(PageGallery $pageGallery): void
    {
        if ($pageGallery->isDirty('banner')) {
            Storage::disk('public')->delete($pageGallery->getOriginal('banner'));
        }
    }

    /**
     * Handle the PageGallery "deleted" event.
     */
    public function deleted(PageGallery $pageGallery): void
    {
        if (!is_null($pageGallery->banner)) {
            Storage::disk('public')->delete($pageGallery->getOriginal('banner'));
        }
    }

    /**
     * Handle the PageGallery "restored" event.
     */
    public function restored(PageGallery $pageGallery): void
    {
        //
    }

    /**
     * Handle the PageGallery "force deleted" event.
     */
    public function forceDeleted(PageGallery $pageGallery): void
    {
        //
    }
}

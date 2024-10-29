<?php

namespace App\Observers;

use App\Models\PageRooms;
use Illuminate\Support\Facades\Storage;

class PageRoomsObserver
{
    /**
     * Handle the PageRooms "created" event.
     */
    public function created(PageRooms $pageRooms): void
    {
        //
    }

    /**
     * Handle the PageRooms "updated" event.
     */
    public function updated(PageRooms $pageRooms): void
    {
        if ($pageRooms->isDirty('banner')) {
            Storage::disk('public')->delete($pageRooms->getOriginal('banner'));
        }
    }

    /**
     * Handle the PageRooms "deleted" event.
     */
    public function deleted(PageRooms $pageRooms): void
    {
        if (!is_null($pageRooms->banner)) {
            Storage::disk('public')->delete($pageRooms->getOriginal('banner'));
        }
    }

    /**
     * Handle the PageRooms "restored" event.
     */
    public function restored(PageRooms $pageRooms): void
    {
        //
    }

    /**
     * Handle the PageRooms "force deleted" event.
     */
    public function forceDeleted(PageRooms $pageRooms): void
    {
        //
    }
}

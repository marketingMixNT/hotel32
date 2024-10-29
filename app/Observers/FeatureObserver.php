<?php

namespace App\Observers;

use App\Models\Feature;
use Illuminate\Support\Facades\Storage;

class FeatureObserver
{
    /**
     * Handle the Feature "created" event.
     */
    public function created(Feature $feature): void
    {
        //
    }

    /**
     * Handle the Feature "updated" event.
     */
    public function updated(Feature $feature): void
    {
        if ($feature->isDirty('icon')) {
            Storage::disk('public')->delete($feature->getOriginal('icon'));
        }
    }

    /**
     * Handle the Feature "deleted" event.
     */
    public function deleted(Feature $feature): void
    {
        if (!is_null($feature->icon)) {
            Storage::disk('public')->delete($feature->getOriginal('icon'));
        }
    }

    /**
     * Handle the Feature "restored" event.
     */
    public function restored(Feature $feature): void
    {
        //
    }

    /**
     * Handle the Feature "force deleted" event.
     */
    public function forceDeleted(Feature $feature): void
    {
        //
    }
}

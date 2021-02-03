<?php

namespace App\Listeners;

use App\Events\PropertyCreated;
use App\Models\Property;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class PropertyCreatedLog
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  PropertyCreated  $event
     * @return void
     */
    public function handle(PropertyCreated $event)
    {
        dd($event);
        Log::debug('bien créé');
    }
}

<?php

namespace App\Listeners;

use App\Events\ProductsUpdated;
use Illuminate\Contracts\Queue\ShouldQueue;
// use Illuminate\Queue\InteractsWithQueue;

class SendProductUpdateNotification implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(ProductsUpdated $event): void
    {
        //
    }
}

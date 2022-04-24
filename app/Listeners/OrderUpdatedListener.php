<?php

namespace App\Listeners;

use App\Events\OrderUpdatedEvent;
use App\Notifications\OrderUpdated;
use Illuminate\Support\Facades\Notification;

class OrderUpdatedListener
{

    /**
     * Handle the event.
     *
     * @param  OrderUpdatedEvent  $event
     * @return void
     */
    public function handle(OrderUpdatedEvent $event)
    {
        Notification::send($event->notifyUser, new OrderUpdated($event->order));
    }

}

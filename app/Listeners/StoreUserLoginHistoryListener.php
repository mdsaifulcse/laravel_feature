<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\LoginHistoryEvent;
use App\Models\LoginHistory;

class StoreUserLoginHistoryListener
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
     * @param  object  $event
     * @return void
     */
    public function handle( $event)
    {
        LoginHistory::create(
            [
                'name'=>$event->user->name,
                'email'=>$event->user->email,
                'user_id'=>$event->user->id,
            ]
        );
    }
}

<?php

namespace App\Listeners;

use App\Events\CauseEdited;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class AppendCauseName implements ShouldQueue
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
     * @param  CauseEdited  $event
     * @return void
     */
    public function handle(CauseEdited $event)
    {
        $cause = $event->cause;
        
        $cause->cause .= ' event';
        $cause->save();
    }
}

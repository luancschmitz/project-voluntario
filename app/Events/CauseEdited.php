<?php

namespace App\Events;

use App\Cause;
use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class CauseEdited extends Event implements ShouldBroadcast
{
    use SerializesModels;
    
    public $cause;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Cause $cause)
    {
        $this->cause = $cause;
    }
    
    /**
     * Get the broadcast event name.
     *
     * @return string
     */
    public function broadcastAs()
    {
        return 'app.cause-edited';
    }
    

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return ['test_channel'];
    }
}

<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SupportEmailJob extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;
    
    protected $to;
    protected $from;
    protected $message;
    protected $attach;
     
    public function __construct($to, $from, $message, $attach)
    {
        $this->to = $to;
        $this->from = $from;
        $this->message = $message;
        $this->attach = $attach;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
    }
}

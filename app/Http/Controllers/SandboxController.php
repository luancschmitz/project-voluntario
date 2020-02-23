<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Jobs\toQueue;
use App\Jobs\FailJob;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SandboxController extends Controller
{
    
    public function getQueue()
    {
        \Debugbar::measure('queue', function() {
            $this->dispatch(new toQueue);
        });
    }
    
    public function getFailingQueue()
    {
        $this->dispatch(new FailJob);
    }
    
}

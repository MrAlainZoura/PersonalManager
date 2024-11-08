<?php

namespace App\Jobs;

use App\Models\Presence;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class PresenceJob implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(private object $presence)
    {
        //remplacer presence par agent
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // dd($this->presence);
        foreach($this->presence as $key => $val){
            // echo $val->id; on va creer les agents dans la bdd local
            // dd($val);
        }
    }
}

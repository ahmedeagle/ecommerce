<?php

namespace App\Jobs;

use App\Models\Winner;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SaveUSers implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */

    public $request;
    public function __construct($request)
    {
        $this -> request = $request;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $data=[];
        foreach ($this -> request['ids'] as $id){
            $data[]=[
                'user_id'  =>  $id,
                'offer_title'  =>  $this -> request['offer_title']
            ];
        }

        Winner::insert($data);
    }
}

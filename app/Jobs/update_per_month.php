<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\BookingBilling;
use Carbon\Carbon;

class update_per_month implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
    
                $get_active = BookingBilling::whereDate('due_date','=',Carbon::now())->get();

                foreach($get_active as $active){

                    if($active->room()->first()->status == 'active'){

                                $new = new BookingBilling;
                                $new->booking_id = $active->booking_id;
                                $new->month = Carbon::now();
                                $new->due_date = Carbon::now()->addMonth();
                                $new->status = 'unpaid';
                                $new->price = $active->price;
                                $new->save();

                    }


                }

        
    }
}

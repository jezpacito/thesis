<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\BookingBilling;
use Carbon\Carbon;


class test extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:job';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
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
                        //add one month current date
                        //it only counts 1 month due date base on timestamps

                        $new->status = 'unpaid';
                        $new->price = $active->price;
                        $new->save();

            }


        }


    }
}

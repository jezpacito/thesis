<?php

namespace App\Http\Controllers;

use App\Booking;
use App\BookingBilling;
use Illuminate\Http\Request;
use Carbon\Carbon;
class ReportsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    } // authentication

    //

    public function index(){
            
        return view('reports.index');
    }

    public function date(Request $request){
        // dd('hello');
        $date = Carbon::parse($request->date)->month;
        $count = BookingBilling::with('room.user')->whereMonth('created_at',$date)->count();
        $result = BookingBilling::with('room.user')->whereMonth('created_at',$date)->get();


        $total_paid_q = BookingBilling::with('room.user')
                            ->whereMonth('created_at',$date)->where('status','=','paid')->get();
                            
        $total_unpaid_q =  BookingBilling::with('room.user')
        ->whereMonth('created_at',$date)->where('status','=','unpaid')->get();

        // dd($result);
        $total_paid =$total_paid_q->sum('price');
        $total_unpaid = $total_unpaid_q->sum('price');
        // dd($total);
        $total = 0;
    
            return view('reports.result')->with(compact('result','date','count', 'total_paid','total_unpaid','total'));
    }






    //upaid and upaid status form

    public function fee_form(){

        return view('reports.fee_status');
    }

    public function submit(Request $request){


        // dd($request->all());
        $booking = BookingBilling::whereMonth('month','=',Carbon::parse($request->date))->where('status','=',$request->status)
        ->get();
        // dd($booking);
        $month = $request->date;

        return view('reports.submit')->with(compact('booking','month'));
    }


    public function print(Request $request){

        $date = Carbon::parse($request->date)->month;
        $count = BookingBilling::with('room.user')->whereMonth('created_at',$date)->count();
        $result = BookingBilling::with('room.user')->whereMonth('created_at',$date)->get();


        $total_paid_q = BookingBilling::with('room.user')
                            ->whereMonth('created_at',$date)->where('status','=','paid')->get();
                            
        $total_unpaid_q =  BookingBilling::with('room.user')
        ->whereMonth('created_at',$date)->where('status','=','unpaid')->get();

        // dd($result);
        $total_paid =$total_paid_q->sum('price');
        $total_unpaid = $total_unpaid_q->sum('price');
        // dd($total);
        $total = 0;
    
            return view('reports.print_reports')->with(compact('result','date','count', 'total_paid','total_unpaid','total'));



        return view('reports.print_reports');
    }
 

}

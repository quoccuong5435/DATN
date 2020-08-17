<?php

namespace App\Http\Controllers;
use App\Hotel;
use App\Hotel_info;
use App\Hotel_info_detail;
use App\Hotel_image;
use App\Room;
use App\Place;
use App\User;
use DB;
use Auth;
use Carbon;
use App\Booking;
use App\Booking_status;
use App\Booking_room;
use Illuminate\Http\Request;

class Booking_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  
     public function index($id , Request $request)
    {
        $list_hotels=Hotel::find($id);
        $check_in= $request->checkin;
        $check_out =$request->checkout;
        $room_id = $request->room_id;
        $list_room=DB::table('room')
        ->where('id','=',$room_id)
        ->get();
        $book_status=Booking_status::all();
 
        
        return view('dashboard.hotel-booking-details',compact('list_hotels','list_room','check_in','check_out','book_status'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $booking = new Booking();
        $booking->hotel_id = $request->hotel_id;
        $booking->user_id = $request->user_id;
        $booking->num_of_rooms = $request->sl;
        $booking->date_from =  $request->date_from;
        $booking->date_to =$request->date_to;
        $booking->booking_status_id = 1;
        $booking->rate = 1;
        $booking->status = 1;
        $booking->total_price = ($request->sl)*($request->price_room);
        $booking->room_id = $request->room_id;
        $booking->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

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
        $check_in = $request->check_in;
        $check_out = $request->check_out;
        $room_id = $request->room_id;
        $list_room=DB::table('room')
        ->where('id','=',$room_id)
        ->get();
        $book_status=Booking_status::all();
 
        
        return view('dashboard.hotel-booking-details',compact('list_hotels','list_room','book_status','check_in','check_out'));
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
        $datefrom=$request->date_from;
         $dateto=$request->date_to;
        $date_from =date('Y-m-d',strtotime($datefrom));
        $booking->date_from =  $date_from;
        $date_to =date('Y-m-d',strtotime($dateto));
        $booking->date_to =$date_to;
        $booking->booking_status_id = 1;
        $booking->rate = 1;
        $booking->status = 1;
        $price=(strtotime($datefrom) -strtotime($dateto))/86400;
        $total=($request->sl)*($request->price_room)*$price ;
        $booking->total_price = ($request->sl)*($request->price_room);
        $booking->room_id = $request->room_id;
        $booking->save();
        $room = DB::table('room')
              ->where('id',  $request->room_id)
              ->get();
              foreach ($room as $rooms) {
                  
             
        $empty_room=$rooms->empty_room - $request->sl;
        $room_booked=$rooms->room_booked + $request->sl;
         }
        $room_book = DB::table('room')
              ->where('id',  $request->room_id)
              ->update(['empty_room' => $empty_room,'room_booked'=> $room_booked]);
               $details =array(
                'hotel_name' => $request->name_hotel,
                'user_name'  => $request->name_user,
                'room' => $request->sl,
                'name_room'=>$request->name_room,
                'date_to' =>$request->date_to,
                'date_from' => $request->date_from,
                'price' => $total
               );
            \Mail::to('hirayoshi5435@gmail.com')->send(new \App\Mail\SendEmail($details));
        return redirect()->back()->with('thongbao',"Đặt phòng thành công");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rate_booking= DB::table('booking')
        ->where('id','=',$id)
        ->get();
        return view('dashboard.rate',compact('rate_booking'));
        

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
         $rate_booking= DB::table('booking')
         ->where('id','=',$id)
         ->update(['rate'=>$request->rate,'cmt'=>$request->cmt]);
         return redirect()->back()->with('thongbao',"Đánh giá thành công ");
    }
 public function cancel_room($id,Request $request)
    {
        $room=DB::table('room')
        ->where('id','=',$request->room_id)
        ->get();
        foreach ($room as $rooms) {
            $room_empty = ($rooms->empty_room) + ($request->num_of_rooms);
        $room_booked = ($rooms->room_booked) - ($request->num_of_rooms);
        }
        
         $rate_booking= DB::table('booking')
         ->where('booking.id','=',$id)
         ->where('room.id','=',$request->room_id)
         ->join('room','room_id' ,'=','room.id')
         ->update(['booking.status'=>0,'booking.booking_status_id'=>3,'room.empty_room'=>$room_empty,'room.room_booked'=>$room_booked]);

         return redirect()->back()->with('thongbao',"Hủy thành công ");
    }
     public function admin_booking()
    {
        $list_booking= DB::table('booking')
        ->join('hotel','hotel_id' ,'=','hotel.id')
        ->join('user','booking.user_id' ,'=','user.id')
        ->select('booking.*', 'hotel.name_hotel','fullname_user','phone_user','email_user','address_user')
        ->paginate(10);
        return view('admin.hotel-booking.hotel-booking-list',compact('list_booking'));
    }
     public function partner_booking()
    {
        $list_booking= DB::table('booking')
        ->join('hotel','hotel_id' ,'=','hotel.id')
        ->join('user','booking.user_id' ,'=','user.id')
        ->where('hotel.user_id','=',Auth::User()->id)
        ->where('booking_status_id','=',2)
        ->select('booking.*', 'hotel.name_hotel','fullname_user','phone_user','email_user','address_user','hotel.user_id')
        ->paginate(10);
        return view('admin.hotel-booking.hotel-partner-booking',compact('list_booking'));
    }
     public function partner_booking_ok()
    {
        $list_booking= DB::table('booking')
        ->join('hotel','hotel_id' ,'=','hotel.id')
        ->join('user','booking.user_id' ,'=','user.id')
        ->where('hotel.user_id','=',Auth::User()->id)
        ->where('booking_status_id','=',1)
        ->select('booking.*', 'hotel.name_hotel','fullname_user','phone_user','email_user','address_user','hotel.user_id')
        ->paginate(10);
        return view('admin.hotel-booking.hotel-partner-ok',compact('list_booking'));
    }
     public function accept_room($id,Request $request)
    {
         $rate_booking= DB::table('booking')
         ->where('id','=',$id)
         ->update(['status'=>0,'booking_status_id'=>2]);
         return redirect()->back()->with('thongbao',"Thanh toán thành công ");
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

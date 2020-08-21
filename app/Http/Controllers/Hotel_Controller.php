<?php

namespace App\Http\Controllers;
use App\Hotel;
use App\Hotel_info;
use App\Hotel_info_detail;
use App\Hotel_image;
use App\Room;
use App\Place;
use App\User;
use Auth;
use Carbon\Carbon;
use App\Booking;
use App\Service_room;
use Illuminate\Http\Request;
use DB;
class Hotel_Controller extends Controller
{


    // Userpage
    public function home()
    {
        $list_hotel=Hotel::all();
        $place=Place::all();
        $places=Place::paginate(3);
        return view('user-pages.home',compact('list_hotel','place','places'));
    }
    public function index()
    {
        $list_hotel=Hotel::all();
        $list_hotel_info=Hotel_info::all();
        $list_hotel_detail=Hotel_info_detail::all();
        return view('user-pages.hotels-list',compact('list_hotel','list_hotel_detail','list_hotel_info'));
    }

     public function show($id)
    {

        $list_hotels=Hotel::find($id);
        $place=Place::all();
        $list_hotel_detail=Hotel_info_detail::find($id);
        $service_room=Service_room::find($id);
        $list_room=DB::table('room')->where('hotel_id','=',$id)->get();
        $list_img=DB::table('hotel_image')->where('hotel_id','=',$id)->get();
        $service_room=DB::table('service_room')->where('hotel_id','=',$id)->get();
 
        return view('user-pages.details',compact('list_hotels','list_room','place','list_img','list_hotel_detail','service_room'));
    
    }
    public function search_with_hotel(Request $request, $id)
    {

        $list_hotels=Hotel::find($id);
        $place=Place::all();
        $check_in = $request->check_in;
        $check_out = $request->check_out;
        // $people =$request->people;
        // $room =$request->room;
        $list_hotel_detail=Hotel_info_detail::find($id);
        $service_room=Service_room::find($id);
         $list_room=DB::table('room')->where('hotel_id','=',$id)
        ->get();
        foreach ($list_room as $Room) {
            $Id = $Room->id;
            $RoomsBooked = Booking::where('room_id', '=', $Id)
                ->where('date_to', '>=', $check_in)
                ->where('date_from', '<=', $check_out)

                ->orWhere(function ($query) use ($check_in, $Id) {
                    $query->where('room_id', '=', $Id)
                        ->where('date_to', '<=', $check_in)

                        ->where('date_from', '>=', $check_in);
                })

                ->orWhere(function ($query2) use ($check_in, $check_out, $Id) {
                    $query2->where('room_id', '=', $Id)
                        ->where('date_from', '>=', $check_in)

                        ->where('date_from', '<=', $check_out);
                })->sum('num_of_rooms');

            $Roomsavailable = $Room->empty_room;
            $Roomsleft = $Roomsavailable - $RoomsBooked;
            
            }
       
        $list_img=DB::table('hotel_image')->where('hotel_id','=',$id)->get();
        $service_room=DB::table('service_room')->where('hotel_id','=',$id)->get();
 
        return view('user-pages.details_hotel',compact('list_hotels','list_room','place','check_out','check_in','list_img','list_hotel_detail','service_room'));
    
    }

    public function list_hotel_place($id)
    {
        
        $place=Place::find($id);
        
                $search = $place->name_place;
        
        
        $room=1;
        $people=1;
        $now =Carbon::now('Asia/Ho_Chi_Minh');
        $tomorrow = Carbon::tomorrow('Asia/Ho_Chi_Minh');
        $check_in = $now->toDateString();
        $check_out = $tomorrow->toDateString();
        $list_hotel = DB::table('hotel')
                    ->join('room', 'hotel.id', '=', 'room.hotel_id')
                    ->select('hotel.*')
                    ->where('hotel.place_id', '=',$id)
                    ->where('room.empty_room', '>=', $room)
                    ->where('room.num_of_people', '>=', $people)
                    ->groupBy('hotel.id')
        ->paginate(5);
        return view('user-pages.hotel_list_search',compact('list_hotel','search','check_in','check_out','people','room','id'));
    
    }
     public function list_hotel_rate($id,Request $request)
    {
        
        $place=Place::find($id);
        
                $search = $place->name_place;
        
        
        $room=1;
        $people=1;
        $now =Carbon::now('Asia/Ho_Chi_Minh');
        $tomorrow = Carbon::tomorrow('Asia/Ho_Chi_Minh');
        $check_in = $now->toDateString();
        $check_out = $tomorrow->toDateString();
        $list_hotel = DB::table('hotel')
                    ->join('room', 'hotel.id', '=', 'room.hotel_id')
                    ->select('hotel.*')
                    ->where('hotel.place_id', '=',$id)
                    ->where('room.empty_room', '>=', $room)
                    ->where('rate_hotel', '=', $request->rate_hotel)
                    ->where('room.num_of_people', '>=', $people)
                    ->groupBy('hotel.id')
        ->paginate(5);
        return view('user-pages.hotel_list_search',compact('list_hotel','search','check_in','check_out','people','room','id'));
    
    }
     public function list_hotel_score($id,Request $request)
    {
        
        $place=Place::find($id);
        
                $search = $place->name_place;
        
        
        $room=1;
        $people=1;
        $now =Carbon::now('Asia/Ho_Chi_Minh');
        $tomorrow = Carbon::tomorrow('Asia/Ho_Chi_Minh');
        $check_in = $now->toDateString();
        $check_out = $tomorrow->toDateString();
        $list_hotel = DB::table('hotel')
                    ->join('room', 'hotel.id', '=', 'room.hotel_id')
                    ->select('hotel.*')
                    ->where('hotel.place_id', '=',$id)
                    ->where('room.empty_room', '>=', $room)
                    ->where('score_hotel', '>=', $request->min)
                    ->where('score_hotel', '<=', $request->max)
                    ->where('room.num_of_people', '>=', $people)
                    ->groupBy('hotel.id')
        ->paginate(5);
        return view('user-pages.hotel_list_search',compact('list_hotel','search','check_in','check_out','people','room','id'));
    
    }
    public function search_place(Request $request)
    {
        $search = $request->search;
        $checkin= $request->checkin;
        $s=strtotime($checkin);
        $check_in=date('d-m-Y',strtotime($checkin));
        $checkout= $request->checkout;
        $check_out =date('d-m-Y',strtotime($checkout));
        $people =$request->people;
        $room =$request->room;
        $request->session()->put('checkin', $check_in);
        $request->session()->put('checkout', $check_out);
       
        $list_hotel = DB::table('hotel')
                    ->join('room', 'hotel.id', '=', 'room.hotel_id')
                    ->select('hotel.*')
                    ->where('hotel.address_hotel', 'like', '%'.$search.'%')
                    ->where('room.empty_room', '>=', $room)
                    ->where('room.num_of_people', '>=', $people)
                    ->groupBy('hotel.id')
        ->paginate(5);
                    
                  
                    return view('user-pages.hotels-list',compact('list_hotel','search','check_in','check_out','people','room'));

    }
     public function search_rate(Request $request)
    {
        $search = $request->search;
        $checkin= $request->checkin;
        $s=strtotime($checkin);
        $check_in=date('d-m-Y',strtotime($checkin));
        $checkout= $request->checkout;

        $check_out =date('d-m-Y',strtotime($checkout));
        $people =$request->people;
        $room =$request->room;
        $request->session()->put('checkin', $check_in);
        $request->session()->put('checkout', $check_out);
       
        $list_hotel = DB::table('hotel')
                    ->join('room', 'hotel.id', '=', 'room.hotel_id')
                    ->select('hotel.*')
                    ->where('hotel.address_hotel', 'like', '%'.$search.'%')
                    ->where('room.empty_room', '>=', $room)
                    ->where('rate_hotel', '=', $request->rate_hotel)
                    ->where('room.num_of_people', '>=', $people)
                    ->groupBy('hotel.id')
        ->paginate(5);
                    
                  
                    return view('user-pages.hotels-list',compact('list_hotel','search','check_in','check_out','people','room'));


    }

 public function search_score(Request $request)
    {
        $search = $request->search;
        $checkin= $request->checkin;
        $s=strtotime($checkin);
        $check_in=date('d-m-Y',strtotime($checkin));
        $checkout= $request->checkout;
        $check_out =date('d-m-Y',strtotime($checkout));
        $people =$request->people;
        $room =$request->room;
        $request->session()->put('checkin', $check_in);
        $request->session()->put('checkout', $check_out);
       
        $list_hotel = DB::table('hotel')
                    ->join('room', 'hotel.id', '=', 'room.hotel_id')
                    ->select('hotel.*')
                    ->where('hotel.address_hotel', 'like', '%'.$search.'%')
                    ->where('room.empty_room', '>=', $room)
                    ->where('score_hotel', '>=', $request->min)
                    ->where('score_hotel', '<=', $request->max)
                    ->where('room.num_of_people', '>=', $people)
                    ->groupBy('hotel.id')
        ->paginate(5);
                    
                  
                    return view('user-pages.hotels-list',compact('list_hotel','search','check_in','check_out','people','room'));
}
    // Admin
    
    public function admin_hotel()
    {   
        $stt=1;
        if (Auth::User()->role_user==2) {
            $list_hotel= DB::table('hotel')
            ->where('status',1)
            ->where('user_id',Auth::User()->id)
            ->paginate(10); 
        }else {
            $list_hotel= DB::table('hotel')
        ->where('status',1)
        
        ->paginate(10); 
        }
        return view('admin.hotels.hotel-list',compact('list_hotel','stt'));
    }
     public function act_hotel()
    {   
        $stt=1;
        $list_hotel= DB::table('hotel')
        ->where('status',0)
        ->paginate(15);
        // ->get();
        $place=Place::all();
        return view('admin.hotels.hotel_action',compact('list_hotel','stt'));
    }

    
    public function admin_hotel_add()
    {
        $list_hotel= Hotel::all();
        $place=Place::all();
        return view('admin.hotels.hotel-add',compact('list_hotel','place'));
    }
   public function search(Request $request)
   {
        $stt=1;
        $search = $request->get('search');
        $list_hotel = DB::table('hotel')
                    ->where('phone_hotel', 'like', '%'.$search.'%')
                    ->where('status', '=', 1)
                    ->orWhere('name_hotel', 'like', '%'.$search.'%')
                    ->orWhere('email_hotel', 'like', '%'.$search.'%')
                    ->orWhere('address_hotel', 'like', '%'.$search.'%')
                    ->get();

        return view('admin.hotels.hotel-search',compact('list_hotel','search','stt'));
   }
   
  
    public function add_hotel(Request $request)
    {

        $hotel= new Hotel;
        $getImages = '';
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $hotel->name_hotel =$request->name_hotel;
        $hotel->phone_hotel= $request->phone_hotel;
        $hotel->email_hotel= $request->email_hotel;
        $hotel->rate_hotel = $request->rate_hotel;
        $hotel->score_hotel = $request->score_hotel;
        $hotel->user_id = $request->user_id;
        $hotel->place_id = $request->place_id;
        if($request->hasFile('avatar_hotel')){
            $this->validate($request, 
                [
                    'avatar_hotel' => 'mimes:jpg,jpeg,png,gif|max:2048',
                ],          
                [
                    'avatar_hotel.mimes' => 'Chỉ chấp nhận ảnh đại diện với đuôi ( jpg, jpeg, png, gif )',
                    'avatar_hotel.max' => 'Ảnh đại diện không được vượt quá 4MB'
                ]
            );
            $avatar_hotel = $request->file('avatar_hotel');
            $getImages = date('H-i-s_d-m-Y', time()).'_'.$avatar_hotel->getClientOriginalName();
            $destinationPath = public_path('images/avatar_hotel');
            $avatar_hotel->move($destinationPath, $getImages);
        }
        $hotel->avatar_hotel = $getImages;
        $hotel->address_hotel =$request->address_hotel;
        $hotel->status = 0;
        $hotel->save();
        return redirect()->route('hotel')->with('thongbao',"Thêm phòng thành công chờ xét duyệt");
    }

   
   
   
    public function edit($id)
    {
        $list_hotel=Hotel::find($id);
        return view('admin.hotels.hotel-edit',compact('list_hotel'));
    }
     public function info($id)
    {
        $list_hotel=Hotel::find($id);
        $list_room=DB::table('room')
        ->where('hotel_id','=',$id)
        ->where('status',1)
        ->get();
        
        $list_img=DB::table('hotel_image')->where('hotel_id' ,'=', $id)->get();
        
        return view('admin.hotels.hotel-info',compact('list_hotel','list_img','list_room'));
    }

    
    public function update(Request $request, $id)
    {
        $hotel= Hotel::find($id);
        $getImages = '';
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $hotel->name_hotel =$request->name_hotel;
        $hotel->phone_hotel= $request->phone_hotel;
        $hotel->email_hotel= $request->email_hotel;
        $hotel->rate_hotel = $request->rate_hotel;
        $hotel->score_hotel = $request->score_hotel;
        $hotel->user_id = $request->user_id;
       if($request->hasFile('avatar_hotel')){
            $this->validate($request, 
                [
                    'avatar_hotel' => 'mimes:jpg,jpeg,png,gif|max:2048',
                ],          
                [
                    'avatar_hotel.mimes' => 'Chỉ chấp nhận ảnh đại diện với đuôi ( jpg, jpeg, png, gif )',
                    'avatar_hotel.max' => 'Ảnh đại diện không được vượt quá 4MB'
                ]
            );
            $avatar_hotel = $request->file('avatar_hotel');
            $getImages = date('H-i-s_d-m-Y', time()).'_'.$avatar_hotel->getClientOriginalName();
            $destinationPath = public_path('images/avatar_hotel');
            $avatar_hotel->move($destinationPath, $getImages);
        }
        $hotel->avatar_hotel = $getImages;
        $hotel->address_hotel =$request->address_hotel;
        $hotel->status = 1;
        $hotel->save();
        return redirect()->route('hotel')->with('thongbao',"Cập nhật thành công");
    }
    public function dashboard_booking()
    {
        $list_booking= DB::table('booking')
        ->join('hotel','hotel_id' ,'=','hotel.id')
        ->select('booking.*', 'hotel.name_hotel')
        ->where('booking.user_id','=',Auth::User()->id)
        ->where('booking.status','=',1)
        ->orderBy('date_from','desc')
        ->paginate(10);
        return view('dashboard.hotel-booking',compact('list_booking'));
    }
   
    public function duyet_room($id,Request $request)
    {
         $rate_booking= DB::table('hotel')
         ->where('id','=',$id)
         ->update(['status'=>1]);
         return redirect()->back()->with('thongbao',"Duyệt thành công thành công ");
    }
    public function ban_list($id, Request $request)
    {
        $list=DB::table('hotel')
        ->join('room','room.hotel_id','=','hotel.id')
        ->where('hotel.id','=','$id')
        ->update(['hotel.status'=>0,'room.status'=>0]);
        return redirect()->back()->with('thongbao',"Khóa thành công");
    }
}

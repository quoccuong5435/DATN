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
        $place=Place::paginate(3);
        return view('user-pages.home',compact('list_hotel','place'));
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
        $FirstDate = $request->session()->get('checkin');
        $SecDate = $request->session()->get('checkout');
        // $people =$request->people;
        // $room =$request->room;
        $list_hotel_detail=Hotel_info_detail::find($id);
        $service_room=Service_room::find($id);
         $list_room=DB::table('room')->where('hotel_id','=',$id)
        ->get();
        foreach ($list_room as $Room) {
            $Id = $Room->id;
            $RoomsBooked = Booking::where('room_id', '=', $Id)
                ->where('date_to', '>=', $FirstDate)
                ->where('date_from', '<=', $SecDate)

                ->orWhere(function ($query) use ($FirstDate, $Id) {
                    $query->where('room_id', '=', $Id)
                        ->where('date_to', '<=', $FirstDate)

                        ->where('date_from', '>=', $FirstDate);
                })

                ->orWhere(function ($query2) use ($FirstDate, $SecDate, $Id) {
                    $query2->where('room_id', '=', $Id)
                        ->where('date_from', '>=', $FirstDate)

                        ->where('date_from', '<=', $SecDate);
                })->sum('num_of_rooms');

            $Roomsavailable = $Room->empty_room;
            $Roomsleft = $Roomsavailable - $RoomsBooked;
            
            }
       
        $list_img=DB::table('hotel_image')->where('hotel_id','=',$id)->get();
        $service_room=DB::table('service_room')->where('hotel_id','=',$id)->get();
 
        return view('user-pages.details_hotel',compact('list_hotels','list_room','place','list_img','list_hotel_detail','service_room','RoomsBooked'));
    
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
                    ->where('hotel.place_id', '=',$id)
                    ->where('room.empty_room', '>=', $room)
                    ->where('room.num_of_people', '>=', $people)
                    ->groupBy('hotel.id')
        ->paginate(6);
        return view('user-pages.hotel_list_search',compact('list_hotel','search','check_in','check_out','people','room'));
    
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
                    ->where('hotel.address_hotel', 'like', '%'.$search.'%')
                    ->where('room.empty_room', '>=', $room)
                    ->where('room.num_of_people', '>=', $people)
                    ->groupBy('hotel.id')
        ->paginate(6);
                    
                     
                    return view('user-pages.hotel_list_search',compact('list_hotel','search','check_in','check_out','people','room'));

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
                    ->orWhere('name_hotel', 'like', '%'.$search.'%')
                    ->orWhere('email_hotel', 'like', '%'.$search.'%')
                    ->orWhere('address_hotel', 'like', '%'.$search.'%')
                    ->get();

        return view('admin.hotels.hotel_search',compact('list_hotel','search','stt'));
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
        return redirect()->route('hotel');
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
        return redirect()->route('hotel');
    }

   
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;
use App\Hotel;
use App\Hotel_info;
use App\Hotel_info_detail;
use App\Hotel_image;
use App\Room;
use App\Place;
use Illuminate\Http\Request;
use DB;
class Hotel_Controller extends Controller
{


    // Userpage
    public function home()
    {
        $list_hotel=Hotel::all();
        $place=Place::paginate(6);
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
        $list_room=DB::table('room')->where('hotel_id','=',$id)->get();
        $list_img=DB::table('hotel_image')->where('hotel_id','=',$id)->get();
        return view('user-pages.details',compact('list_hotels','list_room','place','list_img'));
    
    }

    public function list_hotel_place($id)
    {
        
        $place=Place::find($id);
        $list_hotel=DB::table('hotel')->where('place_id','=',$id)->get();
        return view('user-pages.hotels-list',compact('list_hotel','place'));
    
    }
    public function search_place(Request $request)
    {
        $search = $request->get('search');
        $check_in= $request->get('checkin');
        $check_out =$request->get('checkout');
        $list_hotel = DB::table('hotel')
                    ->where('address_hotel', 'like', '%'.$search.'%')
                    
                    ->get();
                    return view('user-pages.hotels-list',compact('list_hotel','search','checkin','checkout'));

    }

    // Admin
    
    public function admin_hotel()
    {
        $list_hotel= Hotel::paginate(10);
        $place=Place::all();
        return view('admin.hotels.hotel-list',compact('list_hotel'));
    }
    
    public function admin_hotel_add()
    {
        $list_hotel= Hotel::all();
        $place=Place::all();
        return view('admin.hotels.hotel-add',compact('list_hotel','place'));
    }
   public function search(Request $request)
   {
        $search = $request->get('search');
        $list_hotel = DB::table('hotel')
                    ->where('phone_hotel', 'like', '%'.$search.'%')
                    ->orWhere('name_hotel', 'like', '%'.$search.'%')
                    ->orWhere('email_hotel', 'like', '%'.$search.'%')
                    ->orWhere('address_hotel', 'like', '%'.$search.'%')
                    ->get();

        return view('admin.hotels.hotel-search',compact('list_hotel','search'));
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
        $hotel->status = 1;
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
        $list_room=DB::table('room')->where('hotel_id','=',$id)->get();
        
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

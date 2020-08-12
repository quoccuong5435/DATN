<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\Room_image;
use App\Room_status;
use App\Room_type;
use App\Hotel;

class Room_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_hotel= Hotel::all();
        $list_room_type= Room_type::all();
        return view('admin.room-types.room-add',compact('list_room_type','list_hotel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.room-types.room-type-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add_room_type(Request $request)
    {
        $room_type= new Room_type;
        $room_type->room_type = $request->room_type;
        $room_type->room_type_description = $request->room_type_description;
        $room_type->status = 1;
        $room_type->save();
        return redirect()->route('roomtypes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function list_room_type()
    {
        $list_room_type = Room_type::all();
        return view('admin.room-types.room-type-list',compact('list_room_type'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function add_room(Request $request)
    {
        $room= new Room;
        $getImages = '';
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $room->room_name = $request->room_name;
        $room->hotel_id = $request->hotel_id;
        $room->room_type_id = $request->room_type_id;
        $room->room_status_id =1;
        $room->num_of_rooms = $request->num_of_rooms;
        $room->num_of_people = $request->num_of_people;
        $room->description_room = $request->description_room;
        $room->type_bed = $request->type_bed;
        $room->price_room = $request->price_room;
        $room->room_name = $request->room_name;
        if($request->hasFile('avatar_room')){
            $this->validate($request, 
                [
                    'avatar_room' => 'mimes:jpg,jpeg,png,gif|max:2048',
                ],          
                [
                    'avatar_room.mimes' => 'Chỉ chấp nhận ảnh đại diện với đuôi ( jpg, jpeg, png, gif )',
                    'avatar_room.max' => 'Ảnh đại diện không được vượt quá 4MB'
                ]
            );
            $avatar_room = $request->file('avatar_room');
            $getImages = date('H-i-s_d-m-Y', time()).'_'.$avatar_room->getClientOriginalName();
            $destinationPath = public_path('images/avatar_room');
            $avatar_room->move($destinationPath, $getImages);
        }
        $room->avatar_room = $getImages;
        $room->status=1;
        $room->save();
        return  redirect()->back('list_room');

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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\Room_image;
use App\Room_status;
use App\Room_type;

class Room_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_room_type= Room_type::all();
        return view('admin.room-types.room-add',compact('list_room_type'));
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

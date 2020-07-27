<?php

namespace App\Http\Controllers;
use App\Hotel;
use App\Hotel_info;
use App\Hotel_info_detail;
use App\Room;
use Illuminate\Http\Request;

class Hotel_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_hotel=Hotel::all();
        $list_hotel_info=Hotel_info::all();
        $list_hotel_detail=Hotel_info_detail::all();
        return view('user-pages.hotels-list',compact('list_hotel','list_hotel_detail','list_hotel_info'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin_hotel()
    {
        $list_hotel= Hotel::all();
        return view('admin.hotels.hotel-list',compact('list_hotel'));
    }
    public function admin_hotel_add()
    {
        $list_hotel= Hotel::all();
        return view('admin.hotels.hotel-add',compact('list_hotel'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add_hotel(Request $request)
    {
        $hotel= new Hotel;
        $hotel->name_hotel =$request->name_hotel;
        $hotel->phone_hotel= $request->phone_hotel;
        $hotel->email_hotel= $request->email_hotel;
        $hotel->rate_hotel = $request->rate_hotel;
        $hotel->score_hotel = $request->score_hotel;
        $hotel->avatar_hotel= $request->avatar_hotel;
        $hotel->address_hotel =$request->address_hotel;
        $hotel->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $list_hotels=Hotel::find($id);
        $list_room=Room::all();
        return view('user-pages.details',compact('list_hotels','list_room'));
    
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

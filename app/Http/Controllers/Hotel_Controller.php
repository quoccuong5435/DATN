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
        //
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

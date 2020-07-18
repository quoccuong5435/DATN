<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
    	return view('user-pages.home');
    }

    public function getList(){
    	return view('user-pages.hotels-list'); 
    }

    public function getChitiet(){
    	return view('user-pages.details');
    }

    public function getRList(){
    	return view('user-pages.rooms-list');
    }

    public function getDangky(){
    	return view('user-pages.signup');
    }

	public function getDangnhap(){
    	return view('user-pages.signin');
    }
     
}

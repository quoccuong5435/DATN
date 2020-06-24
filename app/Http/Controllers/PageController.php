<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
    	return view('user pages.home');
    }

    public function getSp(){
    	return view('user pages.products'); 
    }

    public function getChitiet(){
    	return view('user pages.details');
    }

    public function getLienhe(){
    	return view('user pages.contact');
    }

    public function getDangky(){
    	return view('user pages.signup');
    }

	public function getDangnhap(){
    	return view('user pages.signin');
    }    
}

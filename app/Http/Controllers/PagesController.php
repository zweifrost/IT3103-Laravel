<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "Homepage"; //variable passing to view
    	//return view('home', compact('title'));
        return view('home')->with('title', $title);
    }

    public function profile(){
        $title = "Profile";
    	return view('profile')->with('title', $title);
    }

    public function dashboard(){
        // Passing multiple data
        $data = array(
            'title' => 'Dashboard',
            'dash' => ['Homepage' , 'Profile', 'Register']
        );
    	return view('dashboard')->with($data);
    }

    public function header(){
    	return view('layouts.header')->with('title', $title);
    }

    public function register(){
        $title = "Register";
    	return view('register')->with('title', $title);
    }
}

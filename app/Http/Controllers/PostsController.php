<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function store(Request $request)
    {
    	$this->validate($request, [
    		'fname' => 'required',
    		'lname' => 'required',
    		'address' => 'required',
    		'email' => 'required',
    		'username' => 'required',
    		'password' => 'required'
    	]);

    	return 123;
    }
}

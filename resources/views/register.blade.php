@extends('layouts.header')

@section('content')
	<h1>{{$title}}</h1>
	<div>
		<form action="PostsController@store" ,  method="POST">
			<p>First Name: <input type="text" name="fname" placeholder="First Name"></p>
			<p>Last Name: <input type="text" name="lname" placeholder="Last Name"></p>
			<p>Address: <input type="text" name="address" placeholder="Address"></p>
			<p>Email: <input type="text" name="email" placeholder="Email"></p>
			<p>Username: <input type="text" name="username" placeholder="Username"></p>
			<p>Password: <input type="text" name="password" placeholder="Password"></p>
			<button class="btn btn-submit">Submit</button>
		</form>
	</div>
@endsection
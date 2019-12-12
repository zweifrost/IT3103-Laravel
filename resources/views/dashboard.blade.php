@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <?php $total = 0; ?>
                    @if(count($data) != 0)
                    	@foreach($data as $val)
                    		<?php $total = $total + 1; ?>
                			<table>
                				<tr>
                					<th>ID</th>
                					<th>First Name</th>
                					<th>Last Name</th>
                					<th>Address</th>
                					<th>Email</th>
                					<th>Username</th>
                				</tr>
                				<tr>
                					<td>{{$val->id}}</td>
                					<td>{{$val->fname}}</td>
                					<td>{{$val->lname}}</td>
                					<td>{{$val->address}}</td>
                					<td>{{$val->email}}</td>
                					<td>{{$val->username}}</td>
                				</tr>
                			</table>
                    	@endforeach
                    @else
                    	<p>No users found!</p>
                    @endif
                    <h3>Total count: <?php echo $total; ?> </h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

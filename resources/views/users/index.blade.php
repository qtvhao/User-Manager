@extends('layouts.master')
@section('title','All Users')
@section('main')
<h1>All Users</h1>
@if(Session::has('message'))
	<div class="alert">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>Message!</strong> {{Session::get('message')}}
	</div>
@endif
@if($users->count())
<table class="table table-hover">
	<thead>
		<tr>
			<th>Username</th>
			<th>Password</th>
			<th>Email</th>
			<th>Phone</th>
			<th>Name</th>
			<th colspan=2>Actions</th>
		</tr>
	</thead>
	<tbody>
		@foreach($users as $user)
		<tr>
			<td>{{$user->username}}</td>
			<td>{{$user->password}}</td>
			<td>{{$user->email}}</td>
			<td>{{$user->phone}}</td>
			<td>{{$user->name}}</td>
			<td><a class="btn btn-info" href="{{route('users.edit',$user->id)}}" role="button">Edit</a></td>
			<td>
				<form method='post' action="{{route('users.destroy',$user->id)}}">
					{{method_field('DELETE')}}
					{{csrf_field()}}
					<button type="submit" class="btn btn-danger">Delete</button>
				</form>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
@else
	There are no users
@endif
{{$users->links()}}
@stop
@extends('layouts.master')
@section('main')
	<form action="{{ route('users.update',$user->id) }}" method="POST" class="form-horizontal" role="form">
			<div class="form-group">
				<legend>Edit User</legend>
			</div>
{{method_field('PUT')}}
@include('users._fields')
			<div class="form-group">
				<div class="col-sm-10 col-sm-offset-2">
					<button type="submit" class="btn btn-primary">Update</button>
					<input type="reset" value="Reset" class="btn btn-default">
				</div>
			</div>
	</form>
@stop
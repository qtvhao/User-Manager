@extends('layouts.master')
@section('main')
	<form action="{{ route('users.store') }}" method="POST" class="form-horizontal" role="form">
			<div class="form-group">
				<legend>Create User</legend>
			</div>
@include('users._fields')
			<div class="form-group">
				<div class="col-sm-10 col-sm-offset-2">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</div>
	</form>
@stop
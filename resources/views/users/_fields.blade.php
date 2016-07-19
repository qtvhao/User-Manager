<div class="form-group">
	<label for="inputName" class="col-sm-2 control-label">Name:</label>
	<div class="col-sm-10">
		<input type="text" name="name" id="inputName" class="form-control" value="{{$user->name or old('name')}}" required="required">
	</div>
</div>

<div class="form-group">
	<label for="inputUsername" class="col-sm-2 control-label">Username:</label>
	<div class="col-sm-10">
		<input type="text" name="username" id="inputUsername" class="form-control"  value="{{$user->username or old('username')}}" required="required">
	</div>
</div>

<div class="form-group">
	<label for="inputPassword" class="col-sm-2 control-label">Password:</label>
	<div class="col-sm-10">
		<input type="password" name="password" id="inputPassword" class="form-control" value="{{$user->password or ''}}" required="required">
	</div>
</div>

<div class="form-group">
	<label for="inputPassword_confirmation" class="col-sm-2 control-label">Confirm Password:</label>
	<div class="col-sm-10">
		<input type="password" name="password_confirmation" id="inputPassword_confirmation" class="form-control"  value="{{$user->password or ''}}" required="required">
	</div>
</div>

<div class="form-group">
	<label for="inputEmail" class="col-sm-2 control-label">Email:</label>
	<div class="col-sm-10">
		<input type="email" name="email" id="inputEmail" class="form-control"  value="{{$user->email or old('email')}}" required="required">
	</div>
</div>

<div class="form-group">
	<label for="inputPhone" class="col-sm-2 control-label">Phone:</label>
	<div class="col-sm-10">
		<input type="text" name="phone" id="inputPhone" class="form-control"  value="{{$user->phone or old('phone')}}" required="required">
	</div>
</div>
{{csrf_field()}}
@forelse ($errors->all() as $error)
	<div class="alert alert-danger">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>Error!</strong> {{$error}}
	</div>
@empty
	{{-- empty expr --}}
@endforelse
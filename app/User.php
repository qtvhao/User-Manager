<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name', 'email', 'password', 'username', 'phone',
	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password', 'remember_token',
	];
	public static $rules = [
		'name' => 'required',
		'username' => 'bail|required|alpha_num',
		'password' => 'required',
		'password_confirmation' => 'bail|required|same:password',
		'email' => 'bail|email|required',
		'phone' => 'required',
	];
}

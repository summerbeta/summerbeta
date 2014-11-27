<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	/**
	 * Defining Fillable Attributes On A Model.
	 * http://laravel.com/docs/4.2/eloquent#mass-assignment
	 *
	 * @var array
	 */
	
	protected $fillable = array('user_name', 'email');
	
	public function setPasswordAttribute($value)
	{
		$this->attributes['password'] = Hash::make($value);
	}
	
	public function profile()
	{
		return $this->hasOne('Profile');
	}
	
	public function userRole()
	{
		return $this->belongsTo('UserRole');
	}
	
	

}

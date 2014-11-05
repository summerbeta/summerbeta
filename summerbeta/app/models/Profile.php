<?php

class Profile extends \Eloquent {
	protected $fillable = ['first_name', 'last_name', 'description', 'date', 'gender', 'address', 'user_id'];

	public function user()
	{
		return $this->hasOne('User');
	}

	public function lastesPicProfile()
	{
		return $this->hasMany('Picture');
	}
}
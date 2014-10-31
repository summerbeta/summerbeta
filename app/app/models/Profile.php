<?php

class Profile extends \Eloquent {
	protected $fillable = [];

	public function user()
	{
		return $this->hasOne('User');
	}

	public function lastesPicProfile()
	{
		return $this->hasMany('Picture');
	}
}
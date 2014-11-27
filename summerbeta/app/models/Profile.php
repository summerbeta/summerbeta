<?php

class Profile extends \Eloquent {
	protected $fillable = ['first_name', 'last_name', 'description', 'date', 'gender', 'address', 'profile_id'];
	
	public function user()
	{
		return $this->hasOne('User');
	}

	public function lastesPicProfile()
	{
		return $this->hasMany('Picture');
	}
	
	public function brandsLike()
	{
		// return $this->hasMany('BrandsLike');
		return $this->hasMany('BrandsLike');
	}
	
	public function getPicture()
	{
		return $this->hasOne('Picture');
	}
}
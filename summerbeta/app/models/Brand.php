<?php

class Brand extends \Eloquent {
	protected $fillable = [];

	public function items()
	{
		return $this->hasMany('Item');
	}
	
	public function photo()
	{
		return $this->hasOne('Photo');
	}
	
	public function get_brands_array()
	{
		// return $this->hasOne('Photo');
		return $this;
	}
	
	public function gender($gender)
	{
		return $this->where('gender', '=', $gender);
	}
}
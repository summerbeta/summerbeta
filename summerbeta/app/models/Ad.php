<?php

class Ad extends \Eloquent {
	protected $fillable = ['title', 'description', 'gender', 'style', 'brand_id'];
	
	
	public function brand()
	{
		return $this->belongsTo('Brand' );
	}
	
	public function images()
	{
		return $this->hasMany('Photo');
	}
	
	public function photoFull()
	{
		return $this->where('user_id', '=', $id)->first();
	}
	
	public function brands()
	{
		return $this->hasManyThrough('Profile', 'Brand');
	}
	
}
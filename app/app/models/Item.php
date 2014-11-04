<?php

class Item extends \Eloquent {
	protected $fillable = [];

	public function brand()
	{
		return $this->belongsTo('Brand');
	}

	public function photo()
	{
		return $this->hasOne('Photo');
	}

	public function photos()
	{
		return $this->hasMany('Photo');
	}

}
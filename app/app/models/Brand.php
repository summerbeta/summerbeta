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
}
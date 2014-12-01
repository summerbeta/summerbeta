<?php

class Ad extends \Eloquent {
	protected $fillable = ['title', 'description', 'gender', 'style', 'brand_id'];
	
	
	public function brand()
	{
		return $this->belongsTo('Brand' );
	}
	public function images()
	{
		// return $this->hasOne('Photo');
		return $this->belongsTo('Photo' );
		
	}
}
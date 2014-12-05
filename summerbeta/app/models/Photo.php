<?php

class Photo extends \Eloquent {
	protected $fillable = [];
	
	public function add()
	{
		return $this->hasOne('Ad', 'id', 'ad_id');
	}
	
}
<?php

class BrandsLike extends \Eloquent {
	protected $fillable = ['profile_id', 'brand_id'];
	
	/*public function brands()
	{
		return $this->hasMany('Brand');
	}*/
}
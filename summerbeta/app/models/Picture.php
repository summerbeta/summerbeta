<?php

class Picture extends \Eloquent {
	protected $fillable = ['profile_id', 'style', 'filename'];
	protected $perPage = 3;
}
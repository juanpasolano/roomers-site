<?php

class Address extends Eloquent {

	protected $hidden = array('user_id', 'created_at', 'updated_at');
	
	protected $guarded = array();

	public static $rules = array();


	public function user()
	{
		return $this->belongsTo('User');
	}
}

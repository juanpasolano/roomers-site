<?php

class Address extends Eloquent {
	protected $guarded = array();

	public static $rules = array();


	public function customer()
	{
		return $this->belongsTo('Customer');
	}
}

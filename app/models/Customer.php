<?php

class Customer extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public function addresses(){
		return $this->hasMany('Address');
	}

	public function orders(){
		return $this->hasMany('Order');
	}
}
<?php

class Tax extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public function products()
	{
		return $this->hasMany('Product');
	}
}

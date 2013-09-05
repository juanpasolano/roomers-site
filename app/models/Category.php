<?php

class Category extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public function product()
    {
        return $this->belongsToMany('Product');
    }
}

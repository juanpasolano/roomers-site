<?php

class Product extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public function category()
	{
		return $this->belongsToMany('Category');
		// return $this->belongsToMany('Category', 'product_category', 'product_id', 'category_id');
		// return $this->hasMany('Category', 'product_category');
	}
}

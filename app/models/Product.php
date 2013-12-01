<?php

class Product extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public function categories()
	{
		return $this->belongsToMany('Category');
	}

	public function collection()
	{
		return $this->belongsTo('Collection');
	}

	public function tax()
	{
		return $this->belongsTo('Tax');
	}

	public function gallery()
	{
		return $this->hasMany('ProductImage' , 'product_id');
	}
}

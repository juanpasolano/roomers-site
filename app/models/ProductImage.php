<?php

class ProductImage extends Eloquent {
	protected $guarded = array();

	protected $table = 'product_images';
	public static $rules = array(
		
		'url' => 'required'
	);

	public function getUrlAttribute($value)
	{
		return asset('uploads/product-images/'.$value);
	}
}

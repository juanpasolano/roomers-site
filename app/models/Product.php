<?php

class Product extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public function categories()
	{
		return $this->belongsToMany('Category');
	}
	public function dimensions()
	{
		return $this->belongsToMany('Dimension')->withPivot('value');
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
	public function getNameAttribute($value)
	{
		switch (Session::get('lang', 'en')) {
			case 'en':
				return $this['attributes']['name'];
				break;
			case 'de':
				return $this['attributes']['name_de'];
				break;
		}
	}
	public function getDescriptionAttribute($value)
	{
		switch (Session::get('lang', 'en')) {
			case 'en':
				return $this['attributes']['description'];
				break;
			case 'de':
				return $this['attributes']['description_de'];
				break;
		}
	}

}

<?php

class Dimension extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public function products()
  {
      return $this->belongsToMany('Product');
  }
}

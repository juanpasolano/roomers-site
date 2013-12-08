<?php

class OrderItem extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public function order()
	{
		return $this->belongsTo('Order', 'order_id');
	}
}

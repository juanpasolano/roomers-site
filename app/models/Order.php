<?php

class Order extends Eloquent {

	protected $guarded = array();

	public static $rules = array();

	public function user()
	{
		return $this->belongsTo('User');
	}


	public static $SHIPPING_OPTIONS = array(
			1 		=> 'FLAT',
			2 		=> 'OUTSIDE'
	);

	public static $PAYMENT_OPTIONS = array(
			1 		=> 'CASH',
			2 		=> 'PREPAY',
			3 		=> 'PAYPAL'
	);
}

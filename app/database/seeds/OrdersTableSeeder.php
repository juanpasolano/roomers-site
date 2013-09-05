<?php

class OrdersTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('orders')->delete();
		\DB::table('orders')->insert(array (
			0 => 
			array (
				'id' => 1,
				'customer_id' => 1,
				'cart_total' => 123,
				'taxes_total' => 432,
				'bruto_total' => 123,
				'grand_total' => 423,
				'payment' => '',
				'status' => '',
				'paypal' => '',
				'firstname' => '',
				'lastname' => '',
				'phone' => '',
				'shipping_value' => 0,
				'shipping_type' => '',
				'street' => '',
				'suburb' => '',
				'postcode' => '',
				'city' => '',
				'state' => '',
				'country' => '',
				'zone' => '',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
		));
	}

}

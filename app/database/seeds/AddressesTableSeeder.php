<?php

class AddressesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('addresses')->delete();
		\DB::table('addresses')->insert(array (
			0 => 
			array (
				'id' => 2,
				'user_id' => 1,
				'street' => 'Gastfeldstrasse 32',
				'suburb' => 'Neustad',
				'postcode' => '22880',
				'city_id' => 1,
				'state_id' => 'asdad',
				'country_id' => 1,
				'zone_id' => 1,
				'created_at' => '2013-09-01 04:00:13',
				'updated_at' => '2013-09-01 04:00:13',
			),
			1 => 
			array (
				'id' => 3,
				'user_id' => 1,
				'street' => 'Normand 25',
				'suburb' => 'Neustad',
				'postcode' => '5620',
				'city_id' => 1,
				'state_id' => 'Baden-Baden',
				'country_id' => 1,
				'zone_id' => 1,
				'created_at' => '2013-09-01 04:03:32',
				'updated_at' => '2013-09-01 04:03:32',
			),
		));
	}

}

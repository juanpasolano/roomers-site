<?php

class TaxesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('taxes')->delete();
		\DB::table('taxes')->insert(array (
			0 =>
			array (
				'id' => 1,
				'name' => 'VTA',
				'percentage' => 19,
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			),
			1 =>
			array (
				'id' => 2,
				'name' => 'FDI',
				'percentage' => 12,
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			),
		));
	}

}

<?php

class DimensionsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('dimensions')->truncate();

		$dimensions = array(
			0 =>
			array (
				'id' => 1,
				'name' => 'Height',
				'name_de' => 'Höhe',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			),
			1 =>
			array (
				'id' => 2,
				'name' => 'Width',
				'name_de' => 'Breite',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			),
			2 =>
			array (
				'id' => 3,
				'name' => 'Depth',
				'name_de' => 'Tiefe',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			)
		);

		// Uncomment the below to run the seeder
		DB::table('dimensions')->insert($dimensions);
	}

}
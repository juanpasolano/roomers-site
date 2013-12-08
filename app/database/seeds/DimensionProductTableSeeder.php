<?php

class DimensionProductTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('dimension_product')->truncate();

		$dimension_product = array(

			0 =>
			array (
				'id' => 1,
				'dimension_id' => 1,
				'product_id' => 1,
				'value'=> '32"'
			),
			1 =>
			array (
				'id' => 2,
				'dimension_id' => 2,
				'product_id' => 1,
				'value'=> '40"'
			)
		);

		// Uncomment the below to run the seeder
		 DB::table('dimension_product')->insert($dimension_product);
	}

}

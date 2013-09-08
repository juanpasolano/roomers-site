<?php

class CategoryProductTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('category_product')->delete();
		\DB::table('category_product')->insert(array (
			0 =>
			array (
				'id' => 1,
				'product_id' => 1,
				'category_id' => 1
			),
			1 =>
			array (
				'id' => 2,
				'product_id' => 1,
				'category_id' => 2
			),
			2 =>
			array (
				'id' => 3,
				'product_id' => 2,
				'category_id' => 1
			),
		));
	}

}

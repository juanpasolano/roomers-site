<?php

class ProductsTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('products')->delete();
		\DB::table('products')->insert(array (
			0 =>
			array (
				'id' => 1,
				'name' => 'Blank Chair',
				'description' => 'Dynamically matrix ubiquitous customer service whereas magnetic leadership. Enthusiastically maximize global networks after synergistic results. Conveniently reinvent standardized infomediaries before collaborative deliverables. Holisticly leverage other\'s interdependent "outside the.',
				'image' => '',
				'price' => '123',
				'discount' => '20',
				// 'category' => 1,
				'collection' => 1,
				'tax' => 1,
				'premium' => 1,
				'published' => 1,
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
		));
	}

}

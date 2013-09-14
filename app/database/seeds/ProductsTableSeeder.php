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
				'image' => 'Jellyfish.jpg',
				'price' => '123',
				'discount' => '20',
				// 'category' => 1,
				'collection_id' => 1,
				'tax_id' => 1,
				'premium' => 1,
				'published' => 1,
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			),
		));
	}

}

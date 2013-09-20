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
				'image' => '2b.jpg',
				'price' => '123',
				'discount' => '20',
				'collection_id' => 1,
				'tax_id' => 1,
				'premium' => 1,
				'published' => 1,
				'created_at' => '2013-09-20 02:26:50',
				'updated_at' => '2013-09-20 02:26:50',
			),
			1 =>
			array (
				'id' => 2,
				'name' => 'Blob Object',
				'description' => 'Assertively promote efficient innovation rather than effective e-services. Quickly productivate flexible e-tailers after impactful networks. Synergistically myocardinate client-centered expertise without vertical synergy. Completely maintain emerging catalysts for change without distinctive opportunities.',
				'image' => '2.jpg',
				'price' => '234',
				'discount' => '10',
				'collection_id' => 1,
				'tax_id' => 1,
				'premium' => 1,
				'published' => 1,
				'created_at' => '2013-09-20 02:39:24',
				'updated_at' => '2013-09-20 02:39:24',
			),
			2 =>
			array (
				'id' => 3,
				'name' => 'Space Elloquent',
				'description' => 'Collaboratively integrate magnetic intellectual capital and next-generation sources. Phosfluorescently deliver frictionless outsourcing without focused networks. Holisticly maximize innovative e-tailers via functionalized interfaces. Collaboratively.',
				'image' => '1a.jpg',
				'price' => '600',
				'discount' => '10',
				'collection_id' => 1,
				'tax_id' => 1,
				'premium' => 1,
				'published' => 1,
				'created_at' => '2013-09-20 02:40:24',
				'updated_at' => '2013-09-20 02:40:24',
			),
			3 =>
			array (
				'id' => 4,
				'name' => 'Space Elloquent',
				'description' => 'Collaboratively integrate magnetic intellectual capital and next-generation sources. Phosfluorescently deliver frictionless outsourcing without focused networks. Holisticly maximize innovative e-tailers via functionalized interfaces. Collaboratively.',
				'image' => '1a.jpg',
				'price' => '600',
				'discount' => '15',
				'collection_id' => 1,
				'tax_id' => 1,
				'premium' => 1,
				'published' => 1,
				'created_at' => '2013-09-20 02:40:33',
				'updated_at' => '2013-09-20 02:40:33',
			),
		));
	}

}

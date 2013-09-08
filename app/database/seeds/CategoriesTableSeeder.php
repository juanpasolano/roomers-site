<?php

class CategoriesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('categories')->delete();
		\DB::table('categories')->insert(array (
			0 =>
			array (
				'id' => 1,
				'name' => 'Lighting',
				'description' => 'Interactively embrace standardized portals with granular methodologies. Intrinsicly aggregate orthogonal vortals after highly efficient outsourcing. Completely engage business partnerships with front-end internal or "organic".',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			),
			1 =>
			array (
				'id' => 2,
				'name' => 'Furniture',
				'description' => 'Uniquely recaptiualize out-of-the-box mindshare with sustainable innovation. Continually actualize strategic data through performance based outsourcing. Collaboratively initiate transparent e-markets after innovative services. Objectively revolutionize fu',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			),
		));
	}

}

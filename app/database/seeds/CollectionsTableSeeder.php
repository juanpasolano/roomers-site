<?php

class CollectionsTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('collections')->delete();
		\DB::table('collections')->insert(array (
			0 =>
			array (
				'id' => 1,
				'name' => 'Summer Collection',
				'description' => 'Collaboratively harness client-based supply chains rather than high-quality alignments. Interactively productivate parallel catalysts for change through state of the art niche markets. Holisticly repurpose.',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			),
			1 =>
			array (
				'id' => 2,
				'name' => 'Winter Collection',
				'description' => 'Completely drive intuitive data vis-a-vis intuitive schemas. Distinctively envisioneer high-payoff "outside the box" thinking before client-based ideas. Completely visualize ubiquitous mindshare before highly efficient users. Energistically.',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			),
		));
	}

}

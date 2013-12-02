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
				'name_de' => 'Sommer Kollektion',
				'description_de' => 'Gemeinsam nutzen Client-basierten Supply Chains statt hochwertigen Ausrichtungen. Interaktiv durch modernste Nischenmärkte productivate parallel Katalysatoren für den Wandel. Ganzheitlich umfunktionieren.',
				'image' => '1.jpg',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			),
			1 =>
			array (
				'id' => 2,
				'name' => 'Winter Collection',
				'description' => 'Completely drive intuitive data vis-a-vis intuitive schemas. Distinctively envisioneer high-payoff "outside the box" thinking before client-based ideas. Completely visualize ubiquitous mindshare before highly efficient users. Energistically.',
				'name_de' => 'Winter-Kollektion',
				'description_de' => 'Komplett fahren intuitive Daten vis-a-vis intuitive Schemata. Unverwechselbar Envisioneer High-Auszahlung "outside the box" denken, bevor Client-basierte Ideen. Allgegenwärtige Mindshare vor hocheffiziente Benutzer komplett zu visualisieren. Energistically.',
				'image' => '2.jpg',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			),
		));
	}

}

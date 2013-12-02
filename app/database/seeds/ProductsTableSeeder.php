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
				'name_de' => 'DEBlank Chair',
				'description' => 'Dynamically matrix ubiquitous customer service whereas magnetic leadership. Enthusiastically maximize global networks after synergistic results. Conveniently reinvent standardized infomediaries before collaborative deliverables. Holisticly leverage other\'s interdependent "outside the.',
				'description_de' => 'Dynamisch Matrix allgegenwärtigen Kundendienst wohin magnetische Führung. Begeistert globalen Netzwerken zu maximieren nach synergistische Ergebnisse. Günstig neu erfinden standardisierte Infomediaries vor kollaborative Leistungen. Ganzheitlich Hebel anderen voneinander abhängig "außerhalb der',
				'image' => '2b.jpg',
				'price' => '123',
				'discount' => '20',
				'collection_id' => 1,
				'tax_id' => 1,
				'premium' => 1,
				'published' => 1,
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			),
			1 =>
			array (
				'id' => 2,
				'name' => 'Blob Object',
				'name_de' => 'DEBlob Object',
				'description' => 'Assertively promote efficient innovation rather than effective e-services. Quickly productivate flexible e-tailers after impactful networks. Synergistically myocardinate client-centered expertise without vertical synergy. Completely maintain emerging catalysts for change without distinctive opportunities.',
				'description_de' => 'Offensiv zu fördern effizientes Innovations nicht mehr für effektive E-Services. Productivate schnell flexible E-Tailer nach wirkungsvolle Netzwerke. Synergistisch myocardinate klientenzentrierte Know-how ohne vertikale Synergie. Schwellen Katalysatoren für den Wandel komplett aufrechterhalten, ohne markante Chancen.',
				'image' => '2.jpg',
				'price' => '234',
				'discount' => '10',
				'collection_id' => 1,
				'tax_id' => 1,
				'premium' => 1,
				'published' => 1,
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			),
			2 =>
			array (
				'id' => 3,
				'name' => 'Space Elloquent',
				'name_de' => 'Space Elloquent',
				'description' => 'Collaboratively integrate magnetic intellectual capital and next-generation sources. Phosfluorescently deliver frictionless outsourcing without focused networks. Holisticly maximize innovative e-tailers via functionalized interfaces. Collaboratively.',
				'description_de' => 'Gemeinsam integrieren Magnet intellektuellen Kapitals und Next-Generation-Quellen. Phosfluorescently reibungs Outsourcing liefern, ohne konzentriert Netzwerken. Innovative E-Tailer ganzheitlich zu maximieren über funktionalisierte Schnittstellen. Gemeinsam.',
				'image' => '1a.jpg',
				'price' => '600',
				'discount' => '10',
				'collection_id' => 1,
				'tax_id' => 1,
				'premium' => 1,
				'published' => 1,
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			),
			3 =>
			array (
				'id' => 4,
				'name' => 'Space Elloquent',
				'name_de' => 'DESpace Elloquent',
				'description' => 'Collaboratively integrate magnetic intellectual capital and next-generation sources. Phosfluorescently deliver frictionless outsourcing without focused networks. Holisticly maximize innovative e-tailers via functionalized interfaces. Collaboratively.',
				'description_de' => 'DECollaboratively integrate magnetic intellectual capital and next-generation sources. Phosfluorescently deliver frictionless outsourcing without focused networks. Holisticly maximize innovative e-tailers via functionalized interfaces. Collaboratively.',
				'image' => '1a.jpg',
				'price' => '600',
				'discount' => '15',
				'collection_id' => 1,
				'tax_id' => 1,
				'premium' => 1,
				'published' => 1,
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			),
			4 =>
			array (
				'id' => 6,
				'name' => 'Lodomono',
				'name_de' => 'Lodomono',
				'description' => 'Assertively conceptualize end-to-end channels via innovative portals. Dramatically whiteboard orthogonal e-markets vis-a-vis world-class "outside the box" thinking. ',
				'description_de' => 'Assertively conceptualize end-to-end channels via innovative portals. Dramatically whiteboard orthogonal e-markets vis-a-vis world-class "outside the box" thinking. ',
				'image' => '2b.jpg',
				'price' => '550',
				'discount' => '12',
				'collection_id' => 1,
				'tax_id' => 1,
				'premium' => 0,
				'published' => 1,
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			),
			5 =>
			array (
				'id' => 7,
				'name' => 'Remo D230',
				'name_de' => 'Remo D230',
				'description' => 'Collaboratively foster low-risk high-yield intellectual capital rather than user friendly process improvements. Dynamically mesh.',
				'description_de' => 'Collaboratively foster low-risk high-yield intellectual capital rather than user friendly process improvements. Dynamically mesh.',
				'image' => '2.jpg',
				'price' => '5200',
				'discount' => '15',
				'collection_id' => 1,
				'tax_id' => 1,
				'premium' => 0,
				'published' => 1,
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			),
			6 =>
			array (
				'id' => 8,
				'name' => 'First in the line',
				'name_de' => 'First in the line',
				'description' => 'Progressively target long-term high-impact potentialities after bricks-and-clicks web-readiness. Progressively customize sustainable "outside the box" thinking with clicks-and-mortar total linkage.',
				'description_de' => 'Progressively target long-term high-impact potentialities after bricks-and-clicks web-readiness. Progressively customize sustainable "outside the box" thinking with clicks-and-mortar total linkage.',
				'image' => '2.jpg',
				'price' => '250',
				'discount' => '2',
				'collection_id' => 2,
				'tax_id' => 1,
				'premium' => 0,
				'published' => 1,
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			),
		));
	}

}

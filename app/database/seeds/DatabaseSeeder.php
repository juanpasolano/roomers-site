<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UsersTableSeeder');
		$this->call('CustomersTableSeeder');
		$this->call('AddressesTableSeeder');
		$this->call('OrdersTableSeeder');
		$this->call('ProductsTableSeeder');
		$this->call('CategoriesTableSeeder');
		$this->call('CategoryProductTableSeeder');
		$this->call('CollectionsTableSeeder');
		$this->call('TaxesTableSeeder');
		$this->call('ProductimagesTableSeeder');
		$this->call('DimensionsTableSeeder');
		$this->call('DimensionProductTableSeeder');
	}

}
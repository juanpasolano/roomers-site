<?php

class CustomersTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('customers')->truncate();

		$customers = array(
			[
			'email'=> 'john@clam.com',
			'password' => Hash::make('123123'),
			'gender' => 'm',
			'firstname'=>'Jhon',
			'lastname'=>'Dow',
			'phone'=>'8912357981'],
			[
			'email'=> 'john@clam.com',
			'password' => Hash::make('123123'),
			'gender' => 'm',
			'firstname'=>'Jhon',
			'lastname'=>'Dow',
			'phone'=>'8912357981']
		);

		// Uncomment the below to run the seeder
		DB::table('customers')->insert($customers);
	}

}

<?php

class CustomersTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('users')->truncate();

		$customers = array(
			[
			'email'=> 'johny@clam.com',
			'password' => Hash::make('123123'),
			'gender' => 'm',
			'name'=>'Jhon',
			'phone'=>'8912357981'],
			[
			'email'=> 'john@clam.com',
			'password' => Hash::make('123123'),
			'gender' => 'm',
			'name'=>'Jhon',
			'phone'=>'8912357981']
		);

		// Uncomment the below to run the seeder
		DB::table('users')->insert($customers);
	}

}

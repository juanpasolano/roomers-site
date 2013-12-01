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
			'firstname'=>'Jhon',
			'lastname'=>'Clam',
			'phone'=>'8912357981',
			'admin' => 1,
			'active'=> 1],
			[
			'email'=> 'leila@clam.com',
			'password' => Hash::make('123123'),
			'gender' => 'f',
			'firstname'=>'Jhon',
			'lastname'=>'Clam',
			'phone'=>'8912357981',
			'admin' => 0,
			'active'=> 1]
		);

		// Uncomment the below to run the seeder
		DB::table('users')->insert($customers);
	}

}

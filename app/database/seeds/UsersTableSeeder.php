<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('users')->truncate();

		$users = array(
			[
			'email'=> 'john@clam.com',
			'password' => Hash::make('123123'),
			'admin' => 1,
			'active' => 1
			],

			[
			'email'=> 'leila@clam.com',
			'password' =>Hash::make('123123'),
			'admin' => 0,
			'active'=> 1
			]
		);

		// Uncomment the below to run the seeder
		DB::table('users')->insert($users);
	}

}

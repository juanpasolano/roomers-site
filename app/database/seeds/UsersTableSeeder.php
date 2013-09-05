<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('users')->truncate();

		$users = array(
			[
			'email'=> 'john@clam.com',
			'password' => Hash::make('123123')/*,
			'name'=>'Jhon',
			'address'=>'Gastfeldstrasse 121',
			'phone'=>'8912357981'*/],

			[
			'email'=> 'leila@clam.com',
			'password' =>Hash::make('123123')/*,
			'name'=>'Leila',
			'address'=>'Gastfeldstrasse 121',
			'phone'=>'8912357981'*/]
		);

		// Uncomment the below to run the seeder
		DB::table('users')->insert($users);
	}

}

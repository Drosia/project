<?php

class UserTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('users')->delete();
		User::create(array(

			'email'    => 'joe@gmail.com',
			'password' => Hash::make('1234'),
		));

				User::create(array(

			'email'    => 'john@gmail.com',
			'password' => Hash::make('1234'),
		));
	}

}
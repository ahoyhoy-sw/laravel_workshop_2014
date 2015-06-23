<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		
		// clear all data
		DB::table('users')->truncate();

		foreach(range(1, 10) as $index)
		{
			User::create([
				'username'	=> 'dummy_user_' . $index,
				'password'	=> Hash::make("dummy_user_$index"),
				'created_at'	=> date('Y-m-d H:i:s'),
				'updated_at'	=> date('Y-m-d H:i:s'),
			]);
		}
	}

}

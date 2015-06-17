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

		// Clear all data 
		DB::table('posts')->truncate();
		DB::table('comments')->truncate();
		DB::table('categories')->truncate();

		// $this->call('UserTableSeeder');
		$this->call('PostTableSeeder');
		$this->call('CommentTableSeeder');
		$this->call('CategoryTableSeeder');
	}

}

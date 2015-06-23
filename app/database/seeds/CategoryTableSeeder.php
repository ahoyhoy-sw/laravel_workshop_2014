<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CategoryTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		// Clear all data 
		DB::table('categories')->truncate();

		foreach(range(1, 4) as $index)
		{
			Category::create([
				'id'	=> $index,
				'name'	=> 'Category_' . $index,

			]);
		}
	}

}

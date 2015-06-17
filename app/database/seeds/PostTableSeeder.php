<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PostTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Post::create([
				'title'		=> 'Dummy Post # ' . $index,
				'content'	=> 'Something dummy',
				'category_id'	=> rand(1, 4),
				'created_at'	=> date('Y-m-d H:i:s'),
				'updated_at'	=> date('Y-m-d H:i:s'),

			]);
		}
	}

}

<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CommentTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 20) as $index)
		{
			Comment::create([
				'id'		=> $index,
				'name'		=> 'DummyUser' . $index,
				'email'		=> 'DummyUser' . $index . '@Dummy.com',
				'content'	=> 'DummyContentDummyContent' . $index,
				'post_id'	=> rand(1, 10),
				'created_at'	=> date('Y-m-d H:i:s'),
				'updated_at'	=> date('Y-m-d H:i:s'),

			]);
		}
	}

}

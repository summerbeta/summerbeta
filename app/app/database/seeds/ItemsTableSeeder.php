<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ItemsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		$brands =['Armani', 'Guess', 'lacoste', 'LEVIS', 'nike', 'oakley']; 
		foreach($brands as $brand)
		{
			Brad::create([
				'name' 		=> $brand,
				'description' 	=> $faker->paragraph($nbSentences = 12),
			]);
		}
		
		foreach(range(1, 10) as $index)
		{
			Item::create([

			]);
		}
	}

}
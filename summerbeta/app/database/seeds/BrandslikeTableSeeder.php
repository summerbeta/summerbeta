<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class BrandslikeTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		
		$profiles = Profile::all();

		foreach($profiles as $profile)
		{
			$profile_name = $profile->name;
			$brands_nums = $faker->numberBetween($min = 3, $max = 6);
			
			echo "[ $profile_name ] ";
			
			foreach(range(1, $brands_nums) as $brand_num)
			{
				
				$brand_like = Brandslike::create([
					'profile_id' 	=> $profile->id,
					'brand_id'	=> $faker->numberBetween($min = 1, $max = 12)
				]);
				
				$brand_id = $brand_like->brand_id;
				echo "$brand_id, ";
			}
		}
	}

}
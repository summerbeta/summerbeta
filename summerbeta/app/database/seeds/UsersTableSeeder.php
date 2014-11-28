<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create('es_ES');

		foreach(range(1, 10) as $index)
		{
			$gender = $faker->randomElement(['male','female']);
			$firstname = $faker->firstname($gender);
			$hashmd5 = md5($firstname);

			$user = User::create([
				'user_name' 	=> $faker->userName,
				'email' 		=> $faker->safeEmail,
				'password' 	=> '123456',
				'valuecode'		=> $hashmd5,
			]);
			
			$pic_category = $faker->randomElement(['city','transport','food','nightlife']);
			$img = file_get_contents($faker->imageUrl('351', '591', $pic_category ));
			$fileName = 'profile_'.$user->id.'_'.$hashmd5.'_'.$firstname.'_'.str_random(5).'.jpg';
			
			if ($gender == 'male') {
				$genderProfile = 'boy';
			} else {
				$genderProfile = 'girl';
			}
			Profile::create([
				'user_id' 	=> $user->id,
				'picture' 	=> $fileName,
				'first_name' 	=> $firstname,
				'last_name' 	=> $faker->lastName,
				'description' 	=> $faker->paragraph($nbSentences = 3),
				'date' 		=> $faker->dateTime($max = 'now'),
				'gender' 	=> $gender,
				'address' 	=> $faker->address,
			]);

			file_put_contents("public/uploads/profile/$fileName", $img);
			
			echo ".";
		}
	}

}
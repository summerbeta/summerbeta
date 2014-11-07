<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PicturesTableSeeder extends Seeder {

	public function run()
	{
		// $profiles = Profile::all();
		$faker = Faker::create();

		// foreach($profiles as $profile)
		foreach(range(1, 10) as $profile)
		{
			$hashmd5 = md5($profile);

			// numero de fotos aleatorio
			$noPictures = $faker->numberBetween($min = 6, $max = 12);

			// contar los numeros de foto
			for ($i=0; $i < $noPictures; $i++) {

				// Elegir el tamaño de la imagen
				$style = $faker->randomElement(['full','medium']);
				$pic_category = $faker->randomElement(['city','transport','food','nightlife']);
				if ($style == 'full') {
					$img = file_get_contents($faker->imageUrl('354', '596', $pic_category ));
				} else {
					$img = file_get_contents($faker->imageUrl('354', '409', $pic_category ));
				}
				$fileName = 'profile_' . $profile . '_' . $hashmd5 . '_' . $faker->numerify($string = '#####') . '.jpg';

				// Guardar en la tabla
				Picture::create([
					'profile_id' 	=> $profile,
					'filename' 	=> $fileName,
					'style' 		=> $style,
					'title' 		=> $faker->sentence($nbWords = 3),
					'description' 	=> $faker->paragraph($nbSentences = 3)
				]);

				//  Guardar la imagen
				file_put_contents("public/uploads/profile/$fileName", $img);
			}
				
		}
	}

}
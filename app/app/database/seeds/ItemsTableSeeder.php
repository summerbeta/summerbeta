<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ItemsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		// Crear las marcas con sus imagenes
		$brands =[
			'mf' => ['Armani', 'Guess', 'lacoste', 'LEVIS', 'nike', 'oakley', 'New Balance',  'adidas'],
			'female' => ['ONLY', 'DKNY'],
			'male' => ['only & sons', 'Vans'],
		]; 
		foreach($brands as $gender => $gender_val)
		{
			foreach($gender_val as $brand_name)
			{
				// Creamos la marca
				$brand = Brand::create([
					'name' 		=> HTML::entities($brand_name),
					'description' 	=> $faker->paragraph($nbSentences = 12),
					'gender'	=> $gender
				]);

				// Ponemos la imagen de la marca
				$filename = 'logo-' . $brand->id . '.jpg';

				echo " [ $brand->name ] ";

				Photo::create([
					'brand_id'	=> $brand->id,
					'filename'	=> $filename ,
					'title' 		=> $faker->sentence($nbWords = 3),
					'description' 	=> $faker->paragraph($nbSentences = 12),
					'geoposition' 	=> $faker->latitude . "," . $faker->longitude,
				]);

				// Creamos el producto

				// Generamos un numero aleatorio de productos
				$items_num = $faker->numberBetween($min = 6, $max = 12);

				foreach(range(1, $items_num) as $item_num)
				{

					// Creamos el articulo
					$item = Item::create([
						'name' 		=> $faker->realText($maxNbChars = 36, $indexSize = 2),// $faker->sentence($nbWords = 3),
						'brand_id' 	=> $brand->id,
						'description' 	=> $faker->paragraph($nbSentences = 12),
						'geoposition' 	=> $faker->latitude . "," . $faker->longitude,
					]);

					echo " [ $item->name ] ";

					// Creamos un numero aleatorio de imagenes o dejarlo predeterminado de 3?
					foreach(range(1, 3) as $photo_num)
					{


						//  Crear la imagen del producto
						$hash_item = md5($item->id);
						$hash_brand = md5($brand->id);
						$hash_photho = md5($photo_num);
						$img = file_get_contents($faker->imageUrl('369', '369' ));
						$fileName = 'item_' . $hash_brand . '_' . $hash_item . '_' . $hash_photho . '.jpg';
						
						$photo = Photo::create([
							'item_id'	=> $item->id,
							'filename'	=> $fileName ,
							'title' 		=> $faker->sentence($nbWords = 3),
							'description' 	=> $faker->paragraph($nbSentences = 12),
							'geoposition' 	=> $faker->latitude . "," . $faker->longitude,
						]);

						// Subir la foto en la carpeta
						file_put_contents("public/uploads/items/$fileName", $img);

						echo "$photo->id . ";

					}
				}
			}
				
		}
		
				

	}

}
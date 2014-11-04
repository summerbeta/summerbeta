<?php 


		$brands =[
			'MF' => ['Armani', 'Guess', 'lacoste', 'LEVIS', 'nike', 'oakley', 'New Balance',  'adidas'],
			'Female' => ['ONLY', 'DKNY'],
			'Male' => ['only & sons', 'Vans'],
		]; 
		
		// printf($brands);
		echo "<h1>Arreglo de las marcas</h1>";
		print_r($brands);

		echo "<hr>";
		
		echo "<h1>Ciclo de las marcas</h1>";
		echo "<ul>";
		foreach($brands as $gender => $gender_val)
		{
			// print_r();
			echo "<li>$gender</li>";
			echo "<ul>";

			foreach($gender_val as $brand)
			{
				// print_r($brand);
				echo "<li>$brand</li>";

				// Creamos la marca
				$a = array( // $brandN = Brand::create([
					/*'name' 		=> $brand,
					'description' 	=> $faker->paragraph($nbSentences = 12),
					'gender'	=> $gender*/
				); // ]);

				// Ponemos la imagen de la marca
				$b = array( // Photo::create([
					/*'brand_id'	=> $brandN->id,
					'filename'	=> 'logo-' . $brand->id . '.jpg',
					'title' 		=> $faker->sentence($nbWords = 3),
					'description' 	=> $faker->paragraph($nbSentences = 12),
					'geoposition' 	=> $faker->latitude . "," . $faker->longitude,*/
				); // ]);
			}
			echo "</ul>";
				
		}
		echo "</ul>";
 ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Registro - SUMMER</title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=PT+Sans'>
	<!-- <link rel="stylesheet" type="text/css" href='fonts/icomoon.css' /> -->

	<link rel="stylesheet" type="text/css" href='css/estilo.css' />
</head>
<body class="registro">
	<header>
		<div class="row">
			<div class="two columns">
				<div class="logo">
					<img src="img/logo.svg" alt="" class="">
				</div>
			</div>
			<div class="four columns">
				<div class="pasos">
					<img src="img/usuario.png" alt="" class="icono">
					<div class="instruccion">
						<p>DIME, ¿QUE MARCAS TE INTERESAN?</p>
					</div>
					
					
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</header>
	<section>
		<div class="row">
			<button class="registrame">Siguiente</button>
			<div class="clear"></div>
		</div>
		<?php 
		/*session_start();
		if ($_SESSION['userSession'] === null) {
			header('Location: public.php');
		}

		$con = mysqli_connect("localhost", "summerco", "Summer15.*", "summerco_db");
		// Check connection
		if (mysqli_connect_errno()) {
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		$result = mysqli_query($con, "SELECT * FROM marcas");
		*/

		$result = [
			['idMarca' => '1', 'nombre' => 'Nike', 'imagen' => 'http://localhost:8888/uploads/logos/logo-nike.jpg'],
			['idMarca' => '2', 'nombre' => 'Lacoste', 'imagen' => 'http://localhost:8888/uploads/logos/logo-nike.jpg'],
			['idMarca' => '3', 'nombre' => 'CK', 'imagen' => 'http://localhost:8888/uploads/logos/logo-nike.jpg'],
			['idMarca' => '4', 'nombre' => 'Armani', 'imagen' => 'http://localhost:8888/uploads/logos/logo-nike.jpg'],
			['idMarca' => '5', 'nombre' => 'Zara', 'imagen' => 'http://localhost:8888/uploads/logos/logo-nike.jpg'],
			['idMarca' => '6', 'nombre' => 'Nike', 'imagen' => 'http://localhost:8888/uploads/logos/logo-nike.jpg'],
			['idMarca' => '7', 'nombre' => 'Lacoste', 'imagen' => 'http://localhost:8888/uploads/logos/logo-nike.jpg'],
			['idMarca' => '8', 'nombre' => 'CK', 'imagen' => 'http://localhost:8888/uploads/logos/logo-nike.jpg'],
			['idMarca' => '9', 'nombre' => 'Armani', 'imagen' => 'http://localhost:8888/uploads/logos/logo-nike.jpg'],
			['idMarca' => '10', 'nombre' => 'Zara', 'imagen' => 'http://localhost:8888/uploads/logos/logo-nike.jpg'],
			['idMarca' => '11', 'nombre' => 'Nike', 'imagen' => 'http://localhost:8888/uploads/logos/logo-nike.jpg'],
			['idMarca' => '12', 'nombre' => 'Lacoste', 'imagen' => 'http://localhost:8888/uploads/logos/logo-nike.jpg'],
			['idMarca' => '13', 'nombre' => 'CK', 'imagen' => 'http://localhost:8888/uploads/logos/logo-nike.jpg'],
			['idMarca' => '14', 'nombre' => 'Zara', 'imagen' => 'http://localhost:8888/uploads/logos/logo-nike.jpg']
		];
		?>
		<div class="row registro">
			<div class="row">
				<?php
				$a = 0;
				// while ($row = mysqli_fetch_array($result)) {
				foreach ($result as $row) {
				?>
				<div class="one columns marcas">
					<div class="marcas_imagen">
						<img id="imagenMarca" src="<?php echo $row['imagen']; ?>" >
					</div>
					<!-- <?php echo $row['nombre']; ?> -->
					<div class="roundedOne">
						<input type="checkbox" name="<?php echo $row['idMarca']; ?>" id="<?php echo $row['nombre'].$row['idMarca']; ?>" value="<?php echo $row['idMarca']; ?>" class="marcas_select">
						<label for="<?php echo $row['nombre'].$row['idMarca']; ?>"></label>
					</div>
				</div>
					<?php
					$a++;
					if ($a == 4) {
						$a = 0;
					?>
			</div>
			<div class="row">
					<?php
					} //end if // end while
				}  //end foreach
				?>
			</div>
			<div class="clear"></div>
		</div>
		<div class="row registro">
			<button class="registrame">Siguiente</button>
		</div>
	</section>
	
</body>
</html>
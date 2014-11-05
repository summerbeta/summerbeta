<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Social') - SUMMER</title>
	
	<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans' type='text/css'>
	<link rel="stylesheet" href='{{ asset('css/normalize.css') }}'>
	<link rel="stylesheet" href='{{ asset('fonts/icomoon.css') }}' type="text/css" />

	<link rel="stylesheet" href='{{ asset('css/estilo.css') }}' type="text/css" />
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
					<!-- <img src="img/usuario.png" alt="" class="icono"> -->
					<div class="instruccion">
						@yield('steep')
					</div>
					
					
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</header>
	<section>
		<div class="row registro">
			@yield('content')
		</div>
	</section>
	
</body>
</html>
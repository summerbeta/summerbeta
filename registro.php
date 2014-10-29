<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Registro - SUMMER</title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=PT+Sans'>
	<link rel="stylesheet" type="text/css" href='fonts/icomoon.css' />

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
						<p>USUARIO NUEVO</p>
					</div>
					
					
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</header>
	<section>
		<div class="row registro">
			<div class="three columns">
				<div class="add">
					<img src="uploads/publicidad4cols-ck.jpg" width="759" height="348" alt="">
				</div>
			</div>
			<div class="three columns">
				<div class="forms">
					<form action="">
						<label for="username">Tu Nombre</label>
						<input type="text" name="username" class="txtinput wide-xx" required>
						<div class="alert">El nombre es requerido</div>
						<label for="usermail">Tu Email</label>
						<input type="email" name="usermail" class="txtinput wide-xx">
						<label for="usermail_confirmation">Confirma Tu Email</label>
						<input type="email" name="usermail_confirmation" class="txtinput wide-xx">
						<label for="userbirthday">Tu fecha de nacimiento</label>
						<input type="date" name="userbirthday" class="txtinput wide-xx"> 
						<label for="usersex">Tu Sexo</label>
						<div class="heart">
							<input type="radio" name="usersex" value="male" class="sexo"><label><i class="icon-heart boy"></i>Hombre</label>
							<input type="radio" name="usersex" value="female" class="sexo"><label><i class="icon-heart girl"></i>Mujer</label>
						</div>
						<p>Al registrarme confirmo que he leído y estoy conforme con la <a href="#">politica de privacidad</a> y <a href="#">terminos de uso</a> de SUMMER</p>
						<button>Registrarme</button>
					</form>
				</div>
			</div>
		</div>
	</section>
	
</body>
</html>
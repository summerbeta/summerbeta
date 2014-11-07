
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
					<!-- <img src="img/usuario.png" alt="" class="icono"> -->
					<div class="instruccion">
						<p>Un ultimo paso. Crea tu perfil de usuario</p>
						<p>*Elije un formato</p>
					</div>
					
					
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</header>
	<section>
		<div class="row foto_perfil">
			<div class="two columns">
				<div class="foto_perfil_caja medium">
					<div class="foto_perfil_image medium">
						<!-- <img class="perfil_foto" src="uploads/perfil-foto-girl.jpg"> -->
					</div>
					<div class="foto_perfil_nombre">
						Jessy
					</div>
					<div class="foto_perfil_boton"><i id="camara_med" class="icon-camera"></i></div>
					<div class="foto_perfil_cargar_foto hidden">
						<h3>Agregar foto de perfil</h3>
						<ul>
							<li><a href="#">Subir una foto</a></li>
							<li><a href="#" class="foto_perfil_boton_tomar">Tomar una foto</a></li>
							<li><a href="#">Eliminar una foto</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="two columns">
				<div class="foto_perfil_caja full">
					<div class="foto_perfil_image full">
						<!-- <img class="perfil_foto" src="uploads/perfil-foto-girl.jpg"> -->
					</div>
					<div class="foto_perfil_nombre">
						Jessy
					</div>
					<div class="foto_perfil_boton"><i id="camara_full" class="icon-camera"></i></div>
					<div class="foto_perfil_cargar_foto hidden">
						<h3>Agregar foto de perfil</h3>
						<ul>
							<li><a href="#">Subir una foto</a></li>
							<li><a href="#" class="foto_perfil_boton_tomar">Tomar una foto</a></li>
							<li><a href="#">Eliminar una foto</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="row registro">
			<button class="registrame">Iniciar</button>
		</div>
	</section>

		
	<div class="popup_overlay">
		<div class="popup_box">
			<h3>Tomar una foto</h3>
			<div class="camara"></div>
			<div class="botones">
				<button id="popup_use">Utilizar</button>
				<button id="popup_close">Cancelar</button>
			</div>
		</div>
	</div>


	<script type="text/javascript" src="js/jquery.js"></script>

	<script>
		$(document).ready( function(){
			$("#camara_med").click( function(){
			// $(".foto_perfil_boton").click( function(){
				$(".foto_perfil_caja.medium > .foto_perfil_cargar_foto").removeClass( "hidden" );
			});
			$("#camara_full").click( function(){
			// $(".foto_perfil_boton").click( function(){
				$(".foto_perfil_caja.full > .foto_perfil_cargar_foto").removeClass( "hidden" );
			});

			$(".foto_perfil_caja.medium > .foto_perfil_cargar_foto").mouseleave( function(){
				$(".foto_perfil_caja.medium > .foto_perfil_cargar_foto").addClass( "hidden" );
			});
			$(".foto_perfil_caja.full > .foto_perfil_cargar_foto").mouseleave( function(){
				$(".foto_perfil_caja.full > .foto_perfil_cargar_foto").addClass( "hidden" );
			});

			$(".foto_perfil_boton_tomar").click( function(){
				console.log("abrio el popup")
				$(".popup_overlay").removeClass("hidden")
			});
			$("#popup_close").click( function(){
				$(".popup_overlay").addClass("hidden");
			});
		});
	</script>
	
</body>
</html>
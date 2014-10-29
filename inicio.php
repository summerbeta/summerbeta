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
<style>
	.buttonFace{
		text-align: center;
	}
	.enlaces{
		margin-bottom: 5em;
	}
	.logo4col{
		margin:  45px auto 0;
		max-width: 65.95745%;
	}
	.logo4col img{
		width: 100%
	}
	.skip{
		text-align: center;
		font-size: 1.3em;
	}
	.registroFace{
		margin-left: 14.89362%;
		margin-top: 1em;
		padding: 1em;
	}
	.registoSummer{
		border-left: 1px solid #b0b0b0;
		display: block;
		margin-top: 1em;
		padding: 1em;
	}
	.registoSummer .icono_usuario{
		display: inline-block;
	}
	.registoSummer .icono_usuario img{
		max-width: 4em;
	}
	.registoSummer .buttonSummer{
		display: inline-block;
		vertical-align: top;
		line-height: 4em;
		margin-left: 1em;
	}
	.uiButton{
		margin-left: 7px;
		font-size: 13px;
		line-height: 16px;
		height: 19px;
		background: #5b74a8;
		padding: 2px 6px;
		cursor: pointer;
		display: inline-block;
		text-align: center;
		text-decoration: none;
		vertical-align: top;
		white-space: nowrap;
		font-family: 'lucida grande',tahoma,verdana,arial,sans-serif;
		border: 1px solid #999;
		border-bottom-color: #888;
		-webkit-box-shadow: 0 1px 0 rgba(0, 0, 0, .1);
	}
	.uiButtonText{
		color: #fff;
		background: none;
		border: 0;
		cursor: pointer;
		display: inline-block;
		font-family: 'lucida grande',tahoma,verdana,arial,sans-serif;
		font-weight: bold;
		line-height: 13px;
		margin: 0;
		padding: 1px 0 2px;
		white-space: nowrap;
	}
	.video{
		background: #fafafa;
		height: 480px;
		margin: 1em auto 1em;
		width: 65.95745%;
	}
</style>
<body class="registro">
	<section>
		<div class="row">
			<div class="six columns">
				<div class="logo4col">
					<img src="img/logo.svg" alt="" class="">
				</div>
				<div class="video"></div>

			</div>
			<div class="clear"></div>
		</div>
		<div class="row enlaces">
			<div class="skip">
				<a href="#" id="skip_intro">Saltar Intro</a>
			</div>
			<div class="two columns registroFace">
				<div class="buttonFace">
					<a class="uiButton uiButtonConfirm uiButtonLarge" href="/login.php?" role="button" name="login">
						<span class="uiButtonText">Iniciar sesión con facebook</span>
					</a>
				</div>
			</div>
			<div class="two columns registoSummer">
				<div class="icono_usuario">
					<img src="img/usuario.png" alt="" class="icono">
				</div>
				<div class="buttonSummer">
					Crear una cuenta
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</section>


	<div class="popup_overlay">
		<div class="popup_box">
			<h3>Ingresar</h3>
			<form action="" id="login">
				<div class="row">
					<div class="three columns">
							<label for="email">Correo</label>
							<input type="email" id="email">
					</div>
					<div class="three columns">
							<label for="password">Contraseña</label>
							<input type="password" id="password">
					</div>
					<div class="clear"></div>
				</div>
				<div class="botones">
					<button>Entrar</button>
					<button id="popup_close">Cerrar</button>
				</div>
				
			</form>
			
					<p class="forgot_pass"><a href="#">Olvide mi contraseña</a></p>
			
			
		</div>
	</div>


	<script type="text/javascript" src="js/jquery.js"></script>

	<script>
		$(document).ready( function(){

			$("#skip_intro").click( function(){
				$(".popup_overlay").removeClass("hidden");
				$(".popup_overlay").fadeIn();
			});
			$("#popup_close").click( function(){
				console.log("entro");
				$(".popup_overlay").addClass("hidden");
			});
		});
	</script>
	
</body>
</html>
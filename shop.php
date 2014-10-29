<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Tienda - SUMMER</title>
	
	<link rel="stylesheet" href="css/normalize.css">
	<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=PT+Sans'>
	<link rel="stylesheet" type="text/css" href='fonts/icomoon.css' />
	<!-- <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css"> -->

	<link rel="stylesheet" type="text/css" href='css/estilo.css' />

</head>
<body class="girl shop">

	<header>
		<div id = "topmenu" class="row">
			<div class="social">
				<!-- <i class="icon-facebook"></i>
				<i class="icon-googleplus"></i>
				<i class="icon-pinterest"></i>
				<i class="icon-tumblr"></i>
				<i class="icon-instagram"></i> -->
				<a href="">Login/Logout</a>
				<a href="">Registro</a>

				<i class="icon-settings"></i>
				<i class="icon-info"></i>
				<i class="icon-truck"></i>
				<form action="/" class="search_form">
					<input type="text" value="" id="search">
					<button class="icon-search"></button>
				</form>
				

			</div>
			<div style="clear:both;"></div>
		</div>
		<div id="logomenu" class="row">
			<div class="two columns">
				<div class="logo">
					<img src="img/logo.svg" alt="" class="">
				</div>
			</div>
			<div class="four columns">
				<nav id="nav" class="navprimary">
					<ul class="navul">
						<li><a href="#" class="actual">Jessica Ruiz</a></li>
						<li><a href="#">Mujer</a></li>
						<li><a href="#">Hombre</a></li>
						<li><a href="#">Social Summer</a></li>
						<li><a href="#">Marcas</a></li>
						<li><a href="#">Noticias</a></li>
					</ul>
				</nav>
			</div>
			
		</div>

		<!-- <div id="wowslider-container6">
		
			<div class="ws_images">
				<ul>
					<li><img src="elementos/armario/images/amarillo.jpg" alt="full screen slider" title="amarillo" id="wows6_0"/></a>SUMMER</li>
				</ul>
			</div>
			<div class="ws_shadow"></div>
		</div> -->
		<div class="clear"></div>
	</header>
	<section>
		<div class="row">
			<div class="four columns">
				<div class="row">
					<div class="three columns">
						<div class="producto cajaconborde">
							<img src="uploads/productos/productos-c7041b04m.jpg" alt="">
							<div class="descripcion">
								<div class="nombre_marca">
									Forro polar F.lli <span class="uppercase">CMP</span> <br>
									Tallas / S M X
								</div>
								<div class="precio">
									$590
									<div class="detalles">
										Detalles
									</div>
								</div>
							</div>
						</div>	
					</div>
					<div class="three columns">
						<div class="producto cajaconborde">
							<img src="uploads/productos/productos-ne215a032.jpg" alt="">
							<div class="descripcion">
								<div class="nombre_marca">
									Tenis M 574 <span class="uppercase">New Balance</span> <br>
								</div>
								<div class="precio">
									$899
									<div class="detalles">
										Detalles
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="row">
					<div class="three columns">
						<div class="producto cajaconborde">
							<img src="uploads/productos/productos-tf121c05y.jpg" alt="">
							<div class="descripcion">
								<div class="nombre_marca">
									Carla Mono <span class="uppercase">tfnc</span> <br>
									Tallas / 36 38 40 42
								</div>
								<div class="precio">
									$595
									<div class="detalles">
										Detalles
									</div>
								</div>
							</div>
						</div>	
					</div>
					<div class="three columns">
						<div class="producto cajaconborde">
							<img src="uploads/productos/productos-rk021g001.jpg" alt="">
							<div class="descripcion">
								<div class="nombre_marca">
									Chaqueta de cuero Nessy <span class="uppercase">Sparkz</span> <br>
									Tallas / 36 38 40 42
								</div>
								<div class="precio">
									$1,782
									<div class="detalles">
										Detalles
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="row">
					<div class="three columns">
						<div class="producto cajaconborde">
							<img src="uploads/productos/productos-le221a03v.jpg" alt="">
							<div class="descripcion">
								<div class="nombre_marca">
									Short vaquero icons 501 <span class="uppercase">Levi's</span> <br>
									Tallas / 24 25 26 27 28 29 30 31
								</div>
								<div class="precio">
									$881
									<div class="detalles">
										Detalles
									</div>
								</div>
							</div>
						</div>	
					</div>
					<div class="three columns">
						<div class="producto cajaconborde">
							<img src="uploads/productos/productos-le251d017.jpg" alt="">
							<div class="descripcion">
								<div class="nombre_marca">
									Cinturón Anelle <span class="uppercase">Levi's</span> <br>
									Tallas / 70 75 80 90 100
								</div>
								<div class="precio">
									$809
									<div class="detalles">
										Detalles
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="row">
					<ul class="paginate">
						<li><a href="">&laquo;</a></li>
						<li><a href="">1</a></li>
						<li><a href="">2</a></li>
						<li><a href="">3</a></li>
						<li><a href="">4</a></li>
						<li><a href="">&raquo;</a></li>
					</ul>
				</div>
				<div class="clear"></div>
			</div>
			<div class="two columns sidebar">
				<div class="opcionesMarca">
					<h3>Filtrar por</h3>
					<div class="opciones fondo_color">
						<div class="row">
							<div class="three columns">
								<li>
									<h4>Marca</h4>
									<?php 
									$a = [
										'BOSS', 
										'Calvin Klein',
										'DKNY',
										'Ralph Lauren',
										'Versace Jeans',
										'Burberry'
									];
									?>
									<ul class="filtros">
										<?php 
										foreach ($a as $b) {
										?>
										<li>
											<div class="roundedOne">
												<input type="checkbox" id="<?= $b ?>" value="<?= $b ?>">
												<label for="<?= $b ?>"><?= $b ?></label>
												<!-- <div class="filtro_label">-<?= $b ?></div> -->
											</div>
												
										</li>
										<?php 
										} 
										?>
									</ul>
								</li>
							</div>
							<div class="three columns">
								<li>
									<h4>Talla</h4>
									<?php 
									$a = [
										'26',
										'28',
										'30',
										'32'
									];
									?>
									<ul class="filtros">
										<?php 
										foreach ($a as $b) {
										?>
										<li>
											<div class="roundedOne">
												<input type="checkbox" id="<?= $b ?>" value="<?= $b ?>">
												<label for="<?= $b ?>"><?= $b ?></label>
												<!-- <div class="filtro_label">-<?= $b ?></div> -->
											</div>
												
										</li>
										<?php 
										} 
										?>
								</li>
							</div>
							<div class="clear"></div>
						</div>
						<div class="row">
							<h4>Producto</h4>
									<?php 
									$a = [
										'Vestidos',
										'Abrigos',
										'Zapatos',
										'Bolsos',
										'Relojes',
										
									];
									?>
									<ul class="filtros">
										<?php 
										foreach ($a as $b) {
										?>
										<li>
											<div class="roundedOne">
												<input type="checkbox" id="<?= $b ?>" value="<?= $b ?>">
												<label for="<?= $b ?>"><?= $b ?></label>
												<!-- <div class="filtro_label">-<?= $b ?></div> -->
											</div>
												
										</li>
										<?php 
										} 
										?>
						</div>
					</div>
				</div>

				<div class="adds">
					<div class="add2cols top">
						<img src="uploads/publicidad/add2cols-lv.jpg" width="375" height="158" alt="lv">
					</div>
					<div class="add2cols">
						<img src="uploads/publicidad/add2cols-oakley.jpg" width="375" height="158" alt="lv">
					</div>
				</div>


				<!-- <div class="video">
					<iframe width="560" height="315" src="http://www.youtube.com/embed/mSFnrSZINMI?list=UUmQCN_i7L28vku4dUb7_Qtg" frameborder="0" allowfullscreen class="video4cols"></iframe>
					<div class="video">
						<h4 class="video_titulo">
							PASARELA OTONO INVIERNO LEVIS
						</h4>
						<p>
							Este fin de semana se llevo acabo la presentacion de la coleccion otoño invierno de levis donde hubo invitado...
						</p>
					</div>
				</div> -->

				<div class="trend" style="margin-top: 1em;">
				<div class="perfil">
					<figure class="foto">
						<img src="uploads/perfil/Gabriela/profile-girl-full-01.jpg" alt="Perfil de Jessica">
					</figure>
					<div class="descripcion">
						<div class="nombre">
							Gabriela
						</div>
						<div class="summer_love">
							<div class="smm_lv_m">
								<div class="love">382</div>
								<div class="heart">
									<i class="icon-heart"></i>
								</div>
							</div>
								
						</div>
					</div>
				</div>
				</div>
						
			</div>
		</div>

		<div class="clear"></div>
	</section>
	<footer>
		<div class="row">
			<div class="two columns">
				<h4>Información de la Empresa</h4>
				<p>
					Quienes Somos<br>
					Información legal <br>
					Política de cookies
				</p>
			</div>
			<div class="two columns">
				<h4>Compras</h4>
				<p>
					Cambios y devoluciones <br>
					Política de cookies
				</p>
			</div>
			<div class="two columns">
				<p>Quienes Somos</p>
				<p>Información legal</p>
				<p>Política de cookies</p>
			</div>
			
		</div>
		<div class="clear"></div>
	</footer>

	<!-- 
	<script type="text/javascript" src="elementos/js/jquery.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script  type="text/javascript" src="paginas/bjqs.min.js"></script>
	<script type="text/javascript" src="elementos/js/wowslider.js"></script>
	<script type="text/javascript" src="elementos/js/script.js"></script>

	
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$('#slider').bjqs({
				width: 164,
				height: 215,
				animtype: 'fade',
				animduration: 500,
				animspeed: 10899,
				automatic: true,
				showcontrols: false,
				centercontrols: false,
				showmarkers: false,
				keyboardnav: false,
				hoverpause: false,
				responsive: true
			});
		});
	</script>
	 -->

</body>
</html>
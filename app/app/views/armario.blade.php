<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>{{ $name }} - Mi armario - SUMMER</title>
	
	<link rel="stylesheet" href="/css/normalize.css">
	<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=PT+Sans'>
	<link rel="stylesheet" type="text/css" href='/fonts/icomoon.css' />
	<!-- <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css"> -->

	<link rel="stylesheet" type="text/css" href='/css/estilo.css' />

</head>
<body class="girl">

	<header>
		<div id = "topmenu" class="row">
			<div class="social">
				<i class="icon-facebook"></i>
				<i class="icon-googleplus"></i>
				<i class="icon-pinterest"></i>
				<i class="icon-tumblr"></i>
				<i class="icon-instagram"></i>

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
					<img src="/img/logo.svg" alt="" class="">
				</div>
			</div>
			<div class="four columns">
				<nav id="nav" class="navprimary">
					<ul class="navul">
						<li><a href="#" class="actual">{{ $name }}</a></li>
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
		<div class="row trend">
		@for ($i = 0; $i < 10; $i++)
			<div class="two columns">
				<div class="perfil">
					<figure class="foto">
						<img src="/uploads/perfil-foto-girl.jpg" alt="Perfil de Jessica">
					</figure>
					<div class="descripcion">
						<div class="nombre">
							Jessy <?= $i ?>
						</div>
						<div class="summer_love">
							<div class="smm_lv_m">
								<div class="love">32</div>
								<div class="heart">
									<i class="icon-heart"></i>
									<!-- <i class="icon-heart girl"></i>	 -->
								</div>
							</div>
								
						</div>
					</div>
				</div>
			</div>
		@endfor
			<div class="clear"></div>
		</div>
		
		<div class="loader row">
			<div class="two columns cajaconborde">
				<div class="preloader"></div>
			</div>
			<div class="two columns cajaconborde">
				<div class="preloader"></div>
			</div>
			<div class="two columns cajaconborde">
				<div class="preloader"></div>
			</div>
		</div>
		<div class="clear"></div>
	</section>

	<script type="text/javascript" src="elementos/js/jquery.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script  type="text/javascript" src="paginas/bjqs.min.js"></script>
	<script type="text/javascript" src="elementos/js/wowslider.js"></script>
	<script type="text/javascript" src="elementos/js/script.js"></script>

	
	<script type="text/javascript">
	</script>

</body>
</html>
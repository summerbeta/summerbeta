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
<body class="girl @yield('bodyclass', '')">

	<header>
		<div id = "topmenu" class="row">
			<div class="social">

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
					<img src="{{ asset('img/logo.svg') }}" alt="" class="">
				</div>
			</div>
			<div class="four columns">
				<nav id="nav" class="navprimary">
					<ul class="navul">
						<li><a href="#" class="actual">Jessica Ruiz</a></li>
						<li><a href="#">Mujer</a></li>
						<li><a href="#">Hombre</a></li>
						<li><a href="{{ route('socialsummer') }}">Social Summer</a></li>
						<li><a href="#">Marcas</a></li>
						<li><a href="#">Noticias</a></li>
					</ul>
				</nav>
			</div>
			
		</div>
		<div class="clear"></div>
	</header>
	<section>
		
		@yield('content')
		
		<div class="clear"></div>
	</section>

	<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>

</body>
</html>
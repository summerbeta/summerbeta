<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'SUMMER BETA')</title>
	
	<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans' type='text/css'>
	<link rel="stylesheet" href='{{ asset('css/normalize.css') }}'>
	<link rel="stylesheet" href='{{ asset('fonts/icomoon.css') }}' type="text/css" />

	<link rel="stylesheet" href='{{ asset('css/estilo.css') }}' type="text/css" />

</head>
<body class="{{ @$body_class }}">

	<header>
		<div id = "topmenu" class="row">
			<div class="social">
				
				@if (Auth::check())
				<a href="{{ route('logout') }}">logout</a>
				@endif
				
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
						<li><a href="#" class="actual">{{ Auth::user()->user_name }}</a></li>
						<li><a href="{{ route('shop') }}">Mujer</a></li>
						<li><a href="{{ route('shop') }}">Hombre</a></li>
						<li><a href="{{ route('socialsummer') }}">Social Summer</a></li>
						<li><a href="{{ route('brands') }}">Marcas</a></li>
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
	
	
	{{-- Si no esta registrado --}}
	@if ( ! Auth::check() )
	<div class="popup_overlay">
		<div class="popup_box">
			<h3>Ingresar</h3>
			<!-- <form action="" id="login"> -->
			{{ Form::open( ['route' => 'login', 'method' => 'POST'] ) }}
				<div class="row">
					<div class="three columns">
							{{ Form::label('user_name', 'Usuario') }}
							{{ Form::text('user_name') }}
							{{ $errors->first('user_name', '<p>:message</p>') }}
					</div>
					<div class="three columns">
							{{ Form::label('password', 'Contraseña') }}
							{{ Form::password('password') }}
							{{ $errors->first('password', '<p>:message</p>') }}
					</div>
					<div class="clear"></div>
				</div>
				@if ($errors->first())
				<div class="row">
					<p>Usuario o contraseña incorrectos.</p>
				</div>
				@endif
				<div class="botones">
					<button>Entrar</button>
					{{-- Form::submit('Entrar') --}}
					<button id="popup_close">Cerrar</button>
				</div>
			{{ Form::close() }}
			<!-- </form> -->
			
					<!-- <p class="forgot_pass"><a href="#">Olvide mi contraseña</a></p> -->
			
			
		</div>
	</div>
	@endif
	{{-- Si no esta registrado --}}

	<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery-ui.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/summer.js') }}"></script>

	
	<script>
		$(document).ready( function(){

			$("#skip_intro").click( function(){
				$(".popup_overlay").removeClass("hidden");
				$(".popup_overlay").fadeIn();
			});
			$("#popup_close").click( function(event){
				event.preventDefault()
				$(".popup_overlay").addClass("hidden");
			});
			
			@yield('script')
			
		});
	</script>
</body>
</html>
@extends ('layout')

@section ('title') Inicio - SUMMER BETA @stop

@section('bodyclass')closet {{ $gender }} @stop

@section ('content')

		<div class="row space10">
			<div class="six columns">
				@include('user/summerhome/adfull')
				<!-- <img src="/summerbeta/public/uploads/publicidad/banner-hombre-levis.jpg" alt="summer banner hombre levi's" style="width: 100%;"> -->
			</div>
			<div class="clear"></div>
		</div>
		
		<div class="row borde1 add">
			<div class="four columns">
				<div class="add4cols">
					@include('user/summerhome/adMeduim')
					<!-- <img src="summerbeta/public/uploads/publicidad/publicidad4cols-ck.jpg" width="759" height="348" alt=""> -->
				</div>
			</div>
			<div class="two columns add2cols">
				<div class="top">
					@include('user/summerhome/adSmall')
					<!-- <img src="summerbeta/public/uploads/publicidad/add2cols-lv.jpg" width="375" height="158" alt="lv"> -->
				</div>
				<div class="bottom">
					@include('user/summerhome/adSmall')
					<!-- <img src="summerbeta/public/uploads/publicidad/add2cols-lv.jpg" width="375" height="158" alt="lv"> -->
				</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="row borde1">
			<div class="four columns">
				<div class="video">
					<iframe width="560" height="315" src="http://www.youtube.com/embed/mSFnrSZINMI?list=UUmQCN_i7L28vku4dUb7_Qtg" frameborder="0" allowfullscreen class="video4cols"></iframe>
					<div class="video">
						<h3 class="video_titulo">
							PASARELA OTONO INVIERNO LEVIS
						</h3>
						<p>
							Este fin de semana se llevo acabo la presentacion de la coleccion otoño invierno de levis donde hubo invitado...
						</p>
					</div>
				</div>	
			</div>
			<div class="two columns">
				@include('user/summerhome/item')
				<!-- 
				<figure class="producto cajaconborde">
					<img src="summerbeta/public/uploads/productos/productos-dnky-dk151h00.jpg" alt="">
					<div class="descripcion">
						<div class="nombre_marca">
							Bolso de mano <span class="upercase">DKNY</span> <br>
							Color / Marrón
						</div>
						<div class="precio">
							$1,595
							<div class="detalles">
								Detalles
							</div>
						</div>
					</div>
				</figure> -->
			</div>
			<div class="clear"></div>
		</div>
		<div class="row">
			
			<h2 class="tituloTrendi">Tendencia en <span>Social SUMMER</span></h2>
			
			<div class="row trend">
				@include('user/summerhome/trendProfile')
			</div>	
			<div class="clear"></div>
		</div>
		<div class="row borde1">
			<div class="six columns">
				<div class=" video video6cols">
					<iframe width="1150" height="630" src="http://www.youtube.com/embed/mSFnrSZINMI?list=UUmQCN_i7L28vku4dUb7_Qtg" frameborder="0" allowfullscreen class="video6cols"></iframe>
					<div class="video">
						<h3 class="video_titulo">
							PASARELA OTONO INVIERNO LEVIS
						</h3>
						<p>
							Este fin de semana se llevo acabo la presentacion de la coleccion otoño invierno de levis donde hubo invitado...
						</p>
					</div>
				</div>	
			</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="row borde1">
			<h2 class="tituloTrendi">Tendencia en <span>Social SUMMER</span></h2>
			<div class="row trend">
				@include('user/summerhome/trendProfile')
			</div>
			<div class="clear"></div>
		</div>
		<div class="row borde1">
			<div class="two columns">
				@include('user/summerhome/item')
			</div>
			<div class="four columns">
				<div class="blog_element cajaconborde">
					<img src="{{ asset('uploads/blog-10bdm.jpg') }}" alt="10 blogs de moda">
					<div class="inf">
						<div class="meta">
							<a href="#">Jessica Ruiz</a> compartió un <a href="#">enlace</a>.  Hace 27min
						</div>
						<h3>10 blogs de moda que te crearán adicción</h3>
						<p>Si buscas inspiración y las últimas tendencias desde la perspectiva de chicas como tú, entonces no pierdas de vista estos musts de la blogosfera.</p>
						<div class="url">www.glamour.mx</div>
						<div class="clear"></div>
					</div>
				</div>
			</div>
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

@stop
@extends ('layout')

@section ('title') Administrador de SUMMER BETA @stop

@section ('content')

		<div class="row space10">
			<h1>Administrador</h1>
		</div>
		<div class="row space10">
			<div class="columns three">
				<div class="cajaconborde pdd1">
					<h2>Ajustes generales</h2>
					
					<li>
						Correo General <br>
						<input type="text">
					</li>
					<li>
						Perfil predeterminado para nuevo usuarios <br>
						<input type="text">
					</li>
					<li>
						Opción <br>
						<input type="text">
					</li>
					<li>
						Opción <br>
						<input type="text">
					</li>
					<li>
						Opción <br>
						<input type="text">
					</li>
					
					
				</div>
				<div class="clear"></div>
			</div>
			<div class="columns three">
				<div class="cajaconborde pdd1">
					
					<h2>Publicidad</h2>
					<p><a href="{{ route('ads_new') }}">Agregar una nueva publicidad</a></p>
					<p>Ver las publicidades</p>
				</div>
				<div class="cajaconborde pdd1">
					
					<h2>Notificaciones</h2>
				</div>
				<div class="cajaconborde pdd1">
					<h2>Administradores</h2>
					<li>Ver lista</li>
					<li>Crear un nuevo administrador</li>
				</div>
				<!-- <div class="clear"></div> -->
			</div>
		</div>
			
@stop

@section('script') 

@stop


@extends ('layout')

@section ('title') Publicidad de SUMMER BETA @stop

@section ('content')

		<div class="row">
			<h1>Publicidad</h1>
			
			<div class="cajaconborde pdd1 space10">
					
				
				<h2>Crear una nuevo Anuncio</h2>
				
				{{ Form::open(array('route' => 'ads', 'method' => 'POST')) }}
					<p>
						{{ Form::label('title', 'Nombre de anuncio') }}
						{{ Form::text('title', null, ['class' => 'txtinput wide-xx']) }}
					</p>
					<p>
						{{ Form::label('description', 'Descripción') }}
						{{ Form::textarea('description', null, ['class' => 'txtinput wide-xx']) }}
					</p>
					<div class="row">
						<div class="columns three">
					<p>
						{{ Form::label('brand_id', 'Elige una marca') }}
						{{ Form::select('brand_id', $brands->lists('name', 'id')) }}
					</p>
							
						</div>
					</div>
					<div class="row">
						<div class="columns three">
					<p>
						{{ Form::label('gender', 'Sexo') }}
						{{ Form::select('gender', ['both' => 'Ambos', 'boy' => 'Hombre', 'girl' => 'Mujer']) }}
					</p>
							
						</div>
					</div>
					<button>Crear</button>
					
				{{ Form::close() }}
				
			</div>
			
			<div class="cajaconborde pdd1 space10">
			
				<h2>Crear una marca</h2>
			</div>
			
			Lista de las ultimas publicidades
			<table>
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Marca</th>
						<th>Genero</th>
						<th>Visto</th>
						<th>Click</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>AAA</td>
						<td>AAA</td>
						<td>AAA</td>
						<td>AAA</td>
						<td>AAA</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="row space10">
			<div class="cajaconborde  pdd1">
				<h2>Opciones</h2>
				<p>Tamaños de imagenes</p>
				<li>6 cols = full = 1150 x 457</li>
				<li>4 cols = 759 x 348</li>
				<li>2 cols = 367 x 155</li>
			</div>
				
			
		</div>
@stop

@section('script') 

@stop


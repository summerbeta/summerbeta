@extends ('layout')

@section ('title') Publicidad de SUMMER BETA @stop

@section ('content')

		<div class="row">
			<h1>Noticias</h1>
			
			<div class="cajaconborde pdd1 space10">
					
				
				<h2>Crear una nueva Noticia</h2>
				
				{{ Form::open(array('route' => 'admin_posts_new', 'method' => 'POST')) }}
					<p>
						{{ Form::label('title', 'Titulo') }}
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
			
				<h2>Lista de noticias</h2>
				
				<table>
					<thead>
						<tr>
							<th>Titulo</th>
							<th>Marca</th>
							<th>Genero</th>
							<th>Mostrado</th>
							<th>Click</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($posts as $post) 
						<tr>
							<td><a href="{{ route('admin_posts_edit', $post->id) }}">{{ $post->title }}</a></td>
							<td>{{ $post->brand->name }}</td>
							<td>{{ $post->gender }}</td>
							<td>999</td>
							<td>99</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
		<div class="row space10">
			<div class="cajaconborde  pdd1">
				<h2>Opciones</h2>
			</div>
		</div>
@stop

@section('script') 

@stop


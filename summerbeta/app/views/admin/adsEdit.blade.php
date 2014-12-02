@extends ('layout')

@section ('title') Publicidad de SUMMER BETA @stop

@section ('content')

		<div class="row">
			<h1>Publicidad</h1>
			
			<p><a href="{{ route('ads') }}">Ver todas las publicidades</a></p>
			
			<div class="cajaconborde pdd1 space10">
				
				<h2>Editar Anuncio</h2>
				
				{{ Form::model($ad, array('route' => 'ads_edit', 'method' => 'POST')) }}
					<input type="hidden" name="id" value="{{ $ad->id }}">
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
						{{ Form::select('brand_id', $brands->lists('name', 'id'), $ad->brand_id) }}
					</p>
							
						</div>
					</div>
					<div class="row">
						<div class="columns three">
					<p>
						{{ Form::label('gender', 'Sexo') }}
						{{ Form::select('gender', ['both' => 'Ambos', 'boy' => 'Hombre', 'girl' => 'Mujer'], $ad->gender) }}
					</p>
							
						</div>
					</div>
					<button>Guardar</button>
					
				{{ Form::close() }}
				
			</div>
			
			<div class="cajaconborde pdd1 space10">
				<h2>Imágenes</h2>
					
				<div class="space10">
				{{ Form::open(array('route' => 'ads_picture_save', 'method' => 'POST', 'name' => 'adsUpPhoto', 'id' => 'adsUpPhoto')) }}
					<input type="hidden" name="ad_id" value="{{ $ad->id }}">
					{{ Form::file('image') }}
					
					{{ Form::label('style', 'Estilo de la imagen') }}
					{{ Form::select('style', ['2col' => 'Pequeño 367x155', '4col' => 'Mediano 759x348', '6col' => 'Grande 1150x452']) }}
					
					<button>Subir</button>
				{{ Form::close() }}
				</div>
					
				<div id="adsPhotos" class="cajaconborde pdd1 space10">
					
					@foreach ($ad->images as $image) 
					<p id="adPhotoBox_{{ $image->id }}">
						
					<!-- {{ $image }} -->
					<img src="{{ asset('uploads/adds/'.$image->filename) }}" alt="">
					Estilo: <strong>{{ $image->style }}</strong> <a id="adPhoto_{{ $image->id }}" href="{{ route('ads_picture_delete', $image->id) }}" class="ad_photo_delete"><span class='icon-trash'></span></a>
					</p>
					@endforeach
				</div>
			</div>
			
		</div>
@stop
<script>
@section('script') 
			
			$('.ad_photo_delete').click( function(event){
				
				// Desactiva la accion del click
				// event.preventDefault();
				
				// Extraemos el id de la foto
				elementClick = event.currentTarget
				id = elementClick.id;
				photo_id = id.substring(id.indexOf('_')+1, id.length);
				url_ajax = "{{ route('ads_picture_delete', '') }}/" + photo_id
				
				console.log(url_ajax)
				// 
				/*$.ajax({
					url: url_ajax,
					type: "GET",
					error: function(e){
						// console.log(e.responseText.error);
						console.log(e.responseText);
					},
					beforeSend: function() {
						// Poner una imagen que indiqe que esta cargando
						// $("#mensaje").html('Cargando');
						console.log('Esta subiendo');
					},
					success: function(e) {
						
						// Encontral el elemento a quitar
						photo_box = "adPhotoBox_" + photo_id;
						
						console.log( $(photo_box) );
						$(photo_box).remove();
						// $(photo_box).detach()
						
					}
				});*/
				
				
				
			});
			
			$('#adsUpPhoto').submit( function(event){
				event.preventDefault();
				sendPhoto(event.currentTarget);
			});
			
			function sendPhoto(form){
				var Data = new FormData(form);
				$.ajax({
					url: "{{ route('ads_picture_save') }}",
					type: "POST",
					contentType: false,
					processData: false,
					data: Data,
					error: function(e){
						// console.log(e.responseText.error);
						console.log(e.responseText);
					},
					beforeSend: function() {
						// Poner una imagen que indiqe que esta cargando
						// $("#mensaje").html('Cargando');
						console.log('Esta subiendo');
					},
					success: function(e) {
						
						// Poner la imagen en la etiqueta img
						console.log(e);
						
						html = ''
						html += '<p id="adPhotoBox_' + e.id + '">'
						html += '<img src=\'{{ asset("uploads/adds") }}/' + e.filename + '\' alt="">'
						html += 'Estilo: <strong>{{ $image->style }}</strong> '
						html += '<a id="adPhoto_' + e.id + ' " href="{{ route("ads_picture_delete", "") }}/' + e.id + '" class="ad_photo_delete"><span class=\'icon-trash\'></span></a>'
						html += '</p>'
						
						$('#adsPhotos').append(html);
						
					}
				});
				
			}
@stop
</script>

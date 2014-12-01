@extends ('signup/layout_singup')

@section ('title') Sube una Foto - Summer Beta @stop

@section('bodyclass')registro {{Auth::user()->profile->gender}} @stop

@section('steep')  

						<p>Un ultimo paso. Crea tu perfil de usuario <br>
						*Elije un formato</p>
@stop

@section ('content')
		<div class="row foto_perfil">
			<div class="two columns"><div id="mensaje"></div>
				<div class="foto_perfil_caja medium">
					<div class="foto_perfil_image medium">
						<img src="" class="perfil_foto">
					</div>
					<div class="foto_perfil_nombre">
						{{ $profile->first_name }}
					</div>
					<div class="foto_perfil_boton"><i id="camara_medium" class="icon-camera"></i></div>
					<div class="foto_perfil_cargar_foto hidden medium"></div>
				</div>
			</div>
			<div class="two columns">
				<div class="foto_perfil_caja full">
					<div class="foto_perfil_image full">
						<img src="" class="perfil_foto">
					</div>
					<div class="foto_perfil_nombre">
						{{ $profile->first_name }}
					</div>
					<div class="foto_perfil_boton"><i id="camara_full" class="icon-camera"></i></div>
					<div class="foto_perfil_cargar_foto hidden full"></div>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="row registro">
			<!-- <button class="registrame">Iniciar</> -->
			<a href="{{ route('summerbeta') }}" class="button registrame">Iniciar</a>
		</div>
		
		
	<div class="popup_overlay hidden">
		<div class="popup_box">
			<h3>Tomar una foto</h3>
			<div id="camara" class="camara"></div>
			<div class="botones">
				<button id="popup_use">Utilizar</button>
				<button id="popup_close">Cancelar</button>
			</div>
		</div>
	</div>
@stop

@section('script') 
	<script type="text/javascript">
	
	if( $( "#tab" ).length != 0 ){
		// alert("jQuery esta funcionando !!");
		$( "#tab" ).tabs();
	}
	
	
	$(".icon-camera").click( function(e){
	// $(".foto_perfil_boton").click( function(){
		var 	elementClick,
			id,
			size;
			
		elementClick = e.currentTarget
		id = elementClick.id;
		
		size = id.substring(id.indexOf('_')+1, id.length);
		
		capa = ".foto_perfil_caja." + size + " > .foto_perfil_cargar_foto";
		
		html = '';
		html += "<h3>Agregar foto de perfil</h3>";
		html += "<ul>";
		html += '<li><a href="#">Subir una foto</a>';
		html += '<form id="form_' + size + '" class="formulario" action="" method="post">';
		html += '<input type="hidden" class="profile_id_input" name="profile_id" value="' + {{ $profile->id }} + '">';
		html += '<input type="hidden" id="style_input" name="style" value="' + size + '">';
		html += '<input type="file" name="picture">';
		// html += '<input type="submit" id="send" value="Submit">';
		html += '</form>';
		html += '</li>';
		html += '<li><a href="#" class="foto_perfil_boton_tomar">Tomar una foto</a></li>';
		html += '<li><a href="#">Eliminar una foto</a></li>';
		html += '</ul>';
		
		$(capa).html(html);
		
		$( ".foto_perfil_caja." + size + " > .foto_perfil_cargar_foto" ).removeClass( "hidden" );
		
		// $( ".foto_perfil_cargar_foto" ).blur( function() {
		$( ".foto_perfil_cargar_foto" ).mouseleave( function() {
			$( ".foto_perfil_caja." + size + " > .foto_perfil_cargar_foto" ).addClass( "hidden" );
		});
		
		// Esperamos que cambie el estado del boton
		$( "input[name='picture']" ).change( function(e) {
			
			// Construir el formulario
			var Data = new FormData();
			
			// Obtener los valores y asignoarlo al formulario
				//  profile_id
			Data.append("profile_id", 	$("input[name='profile_id']").val());
				// style
			Data.append("style", 		$("input[name='style']").val());
				// Imagen
			Data.append("picture", 	$( "input[name=picture]" )[0].files[0]);
			// console.log(Data); //.files[0]
			
			// Mandar el formulario			
			singupSendPicture(Data, size)
		});
		
		
	});
	
	function singupSendPicture(Data, size) {
		$.ajax({
			url: "{{ route('signup_picture_up') }}",
			type: "POST",
			contentType: false,
			processData: false,
			data: Data,
			error: function(e){
				
				if (e.status == 500) {
					$("#mensaje").html('Ocurrio un error en el servidor');
				} else if(e.status == 400){
					$("#mensaje").html('No se encontro el servidor');
				} else {
					$("#mensaje").html(e.statusText);
				};
				// console.log(e.responseText.error);
				console.log(e.responseText);
				
				// Poner un mensaje "Fallo, intenta mas tarde. Gracias"
			},
			beforeSend: function() {
				$("#mensaje").html('Cargando');
				// Poner una imagen que indiqe que esta cargando
			},
			success: function(e) {
				$("#mensaje").html('Subio el archivo');
				
				// Poner la imagen en la etiqueta img
				img_selector = $(".foto_perfil_image." + size + " > .perfil_foto");
				img_selector.attr("src", "{{ asset('uploads/profile') }}/" + e.filename);
			},
		});
	}
	
	
	</script>
@stop


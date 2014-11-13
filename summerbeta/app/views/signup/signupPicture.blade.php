@extends ('signup/layout_singup')

@section ('title') Registro - Foto @stop
@section('bodyclass')  @stop

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
						Jessy
					</div>
					<div class="foto_perfil_boton"><i id="camara_medium" class="icon-camera"></i></div>
					<div class="foto_perfil_cargar_foto hidden medium">
						<h3>Agregar foto de perfil</h3>
						<ul>
							<li><a href="#">Subir una foto</a>
								{{ Form::open(['route' => 'signup-picture-up', 'id' => 'form_medium',  'files' => true]) }} {{-- , 'onsubmit' => 'singupSendPicture(form); return false;' --}}
									@if ($profile = Profile::find($id)) @endif
									<input type="hidden" class="profile_id_input" name="profile_id" value="{{ $profile->id }}">
									<input type="hidden" id="style_input" name="style" value="medium">
									{{ Form::input('file', 'picture') }}
									<!-- <button class="send">subir</button> -->
								{{ Form::close() }}
							</li>
							<li><a href="#" class="foto_perfil_boton_tomar">Tomar una foto</a></li>
							<li><a href="#">Eliminar una foto</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="two columns">
				<div class="foto_perfil_caja full">
					<div class="foto_perfil_image full">
						<img src="" class="perfil_foto">
					</div>
					<div class="foto_perfil_nombre">
						Jessy
					</div>
					<div class="foto_perfil_boton"><i id="camara_full" class="icon-camera"></i></div>
					<div class="foto_perfil_cargar_foto hidden full">
						<h3>Agregar foto de perfil</h3>
						<ul>
							<li><a href="#">Subir una foto</a></li>
								{{ Form::open(['route' => 'signup-picture-up', 'id' => 'form_full',  'files' => true]) }} {{-- , 'onsubmit' => 'singupSendPicture(form); return false;' --}}
									@if ($profile = Profile::find($id)) @endif
									<input type="hidden" class="profile_id_input" name="profile_id" value="{{ $profile->id }}">
									<input type="hidden" id="style_input" name="style" value="medium">
									{{-- Form::input('file', 'picture') --}}
									{{ Form::file('file','',array('id'=>'medium')) }}
									<!-- <button class="send">subir</button> -->
								{{ Form::close() }}
							<li><a href="#" class="foto_perfil_boton_tomar">Tomar una foto</a></li>
							<li><a href="#">Eliminar una foto</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="row registro">
			<button class="registrame">Iniciar</button>
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
			size
			
		elementClick = e.currentTarget
		id = elementClick.id;
		
		size = id.substring(id.indexOf('_')+1, id.length);
		
		capa = ".foto_perfil_caja." + size + " > .foto_perfil_cargar_foto";
		console.log( capa );
		
		$( ".foto_perfil_caja." + size + " > .foto_perfil_cargar_foto" ).removeClass( "hidden" );
		
	});
	
	function singupSendPicture(form) {
		var Data = new FormData();
		
		// Data += $( ".profile_id_input" ) ;
		// Data += $( "#style_input" ) ;
		
		console.log('Mandamos:');
		console.log(form);
		// console.log(Data);
		
		$("#mensaje").html('Subir');
		
		$.ajax({
			url: "{{ route('signup-picture-up') }}",
			type: "POST",
			contentType: false,
			processData: false,
			data: Data,
			/*success : function(res) {
				$("#mensaje").html('Subio el archivo');
				console.log("subio todo bien. ");
				console.log(res);
				console.log(this);
			},*/
			error: function(e){
				
				if (e.status == 500) {
					$("#mensaje").html('Ocurrio un error en el servidor');
				} else if(e.status == 400){
					$("#mensaje").html('No se encontro el servidor');
				} else {
					$("#mensaje").html(e.statusText);
				};
				
				console.log("entro al error: ");
				console.log(e.responseText);
			},
			beforeSend: function() {
				$("#mensaje").html('Cargando');
				// $(".send").attr('disabled','disabled');
			},
			success: function(e) {
				console.log("subio todo bien. ");
				console.log(e);
				// Poner la imagen en la
			},
			complete: function(e) {
				$(".send").removeAttr('disabled');
				
				console.log("Termino la carga. ");
				console.log(e.responseText);
				
				// Poner la imagen en la
			}
		});
	}
	
	$( "input[name=picture]" ).change( function(e) {
		
		// console.log('Cambio el boton');
		
		console.log(e);
		 // ePadre = e.currentTarget;.parent()
		 // ePadre = $( "input[name=picture]" ).parent().serialize();
		 ePadre = $( "input[name=picture]" ).parent()
		console.log( ePadre );
		
		// singupSendPicture(ePadre)
	});
	
	
	</script>
@stop


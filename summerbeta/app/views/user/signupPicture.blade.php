@extends ('user/layout_singup')

@section ('title') Registro - Foto @stop
@section('bodyclass')  @stop

@section('steep')  

						<p>Un ultimo paso. Crea tu perfil de usuario <br>
						*Elije un formato</p>
@stop

@section ('content')
		<div class="row foto_perfil">
			<div class="two columns">
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
								{{ Form::open([null, null, 'onsubmit' => 'singupSendPicture(form); return false;']) }}
								{{-- array('route' => 'signup-user', 'method' => 'POST') --}}
									{{ Form::input('file', 'picture') }}
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
							<li><a href="#" class="foto_perfil_boton_tomar">Tomar una foto</a></li>
							<li><a href="#">Eliminar una foto</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div id="mensaje"></div>
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
		console.log("entro a subir imagen");
		var Data = new FormData(form);
		
		$.ajax({
			url: "{{ route('signup-picture-up') }}",
			type: "POST",
			data: Data,
		}).done( function() {
			$("#mensaje").html(this);
			console.log(this);
		});
	}
	</script>
@stop


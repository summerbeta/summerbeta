@extends ('layout')

@section ('title') Publicidad de SUMMER BETA @stop

@section ('content')

		<div class="row cajaconborde space10">
			<h2>Crear administradores</h2>
			{{ Form::label('user_search', 'Buscar por nombre: ') }}
			{{ Form::text('user_search', null, ['class' => 'txtinput wide-xx']) }}
			
			<table>
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Opciones</th>
					</tr>
				</thead>
				<tbody  id="name_result">
				</tbody>
			</table>
			<p>Asignar un rol:</p>
		</div>
		<div class="row cajaconborde space10">
			<h2>Mostrar Administradores</h2>
			
			
			<table>
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Permisos</th>
						<th>Opciones</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Eddy Ramos</td>
						<td>Administrador</td>
						<td>
							<a><span class='icon-pen'></span></a> 
							<a><span class='icon-trash'></span></a>
						</td>
					</tr>
					<tr>
						<td>Eddy Ramos</td>
						<td>Editor</td>
						<td>
							<a><span class='icon-pen'></span></a> 
							<a><span class='icon-trash'></span></a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		
@stop

<script>
@section('script') 
			var	nombre = $( "input[name='user_search']" ),
				result = $("#name_result"),
				addEditor = $('.addEditor')
				
			
			
			nombre.keyup( function(e) { 
				console.log('Mandrar: ');
				// console.log(e.currentTarget);
				console.log(nombre.val());
				searchProfile(nombre.val())
			});
			
			function searchProfile(data) {
				$.ajax({
					url: "{{ route('admin_search_profile') }}",
					type: "GET",
					data: 'nombre=' +data,
					error: function(e){
						console.log(e.responseText.error);
					},
					success: function(e) {
						viewProfile(e)
					},
				});
			}
			
			function viewProfile(jsonData) {
				html = "";
				
					// window.alert('Peticion ' + jsonData);
				console.log('Peticion: ');
				
				$.each(jsonData, function(i, profile){
					// console.log('Ajax: ');
					// console.log(profile);
					html += "<tr>"
					html += "<td>"
					html += profile.first_name
					html += "</td>"
					html += "<td>"
					html += profile.last_name
					html += "</td>"
					html += "<td>"
					html += "<a href='#add_" + profile.first_name + "' id='" + profile.id + "' class='addEditor'><span class='icon-plus-circle'></span></a>"
					html += "</td>"
					
					html += "</tr>"
				})
				
				result.html( html );
				
				$('.addEditor').click( function(e) {
					
					e.preventDefault();
					profile_id = e.currentTarget.id;
					console.log(profile_id);
				});
			}
			
		
@stop
</script>


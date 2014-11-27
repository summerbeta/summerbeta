@extends ('signup/layout_singup')

@section ('title') Registro @stop
@section('bodyclass')  @stop

@section('steep')  

						<p>USUARIO NUEVO</p>
@stop

@section ('content')

			<div class="three columns">
				<div class="add">
					<img src="{{ asset('uploads/publicidad/publicidad4cols-ck.jpg') }}" width="759" height="348" alt="">
				</div>
			</div>
			<div class="three columns">
				<div class="forms">
					{{ Form::open(array('route' => 'signup-user', 'method' => 'POST')) }}
					
						{{ Form::label('user_name', 'Nombre de Usuario') }}
						{{ Form::text('user_name', null, ['class' => 'txtinput wide-xx']) }}
						{{ $errors->first('user_name', '<div class="alert">:message</div>') }}
						
						{{ Form::label('email', 'Tu Email') }}
						{{ Form::email('email', null, ['class' => 'txtinput wide-xx']) }}
						{{ $errors->first('email', '<div class="alert">:message</div>') }}
						
						{{ Form::label('email_confirmation', 'Confirma Tu Email') }}
						{{ Form::email('email_confirmation', null, ['class' => 'txtinput wide-xx']) }}
						{{ $errors->first('email_confirmation', '<div class="alert">:message</div>') }}
						
						{{ Form::label('password', 'Tu Contraseña') }}
						{{ Form::password('password', null, ['class' => 'txtinput wide-xx']) }}
						{{ $errors->first('password', '<div class="alert">:message</div>') }}
						
						{{ Form::label('date', 'Tu fecha de nacimiento') }}
						{{ Form::input('date', 'date') }}
						{{ $errors->first('date', '<div class="alert">:message</div>') }}
						
						{{ Form::label('gender', 'Tu Sexo'); }}
						<div class="heart">
							{{ Form::radio('gender', 'male') }}{{ Form::label('gender', 'Hombre') }}
							{{ Form::radio('gender', 'female') }}{{ Form::label('gender', 'Mujer') }}
						</div>
						{{ $errors->first('gender', '<div class="alert">:message</div>') }}
						
						<p>Al registrarme confirmo que he leído y estoy conforme con la <a href="#">politica de privacidad</a> y <a href="#">terminos de uso</a> de SUMMER</p>
						
						<!-- <button>Registrarme</button> -->
						{{ Form::submit('Registrarme') }}
					{{ Form::close() }}
				</div>
			</div>
@stop

@section('script') 

@stop


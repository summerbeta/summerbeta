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
						<!-- <label for="username">Tu Nombre</label>
						<input type="text" name="username" class="txtinput wide-xx" required>
						<div class="alert">El nombre es requerido</div> -->
						{{ Form::label('user_name', 'Tu Nombre') }}
						{{ Form::text('user_name', null, ['class' => 'txtinput wide-xx']) }}
						{{ $errors->first('user_name', '<div class="alert">:message</div>') }}
						
						<!-- <label for="usermail">Tu Email</label>
						<input type="email" name="usermail" class="txtinput wide-xx"> -->
						{{ Form::label('email', 'Tu Email') }}
						{{ Form::email('email', null, ['class' => 'txtinput wide-xx']) }}
						{{ $errors->first('email', '<div class="alert">:message</div>') }}
						
						<!-- <label for="usermail_confirmation">Confirma Tu Email</label>
						<input type="email" name="usermail_confirmation" class="txtinput wide-xx"> -->
						{{ Form::label('email_confirmation', 'Confirma Tu Email') }}
						{{ Form::email('email_confirmation', null, ['class' => 'txtinput wide-xx']) }}
						{{ $errors->first('email_confirmation', '<div class="alert">:message</div>') }}
						
						<!-- <label for="userbirthday">Tu fecha de nacimiento</label>
						<input type="date" name="userbirthday" class="txtinput wide-xx"> -->
						{{ Form::label('date', 'Tu fecha de nacimiento') }}
						{{ Form::input('date', 'date') }}
						{{ $errors->first('date', '<div class="alert">:message</div>') }}
						
						<!-- <label for="usersex">Tu Sexo</label>
						<div class="heart">
							<input type="radio" name="usersex" value="male" class="sexo"><label><i class="icon-heart boy"></i>Hombre</label>
							<input type="radio" name="usersex" value="female" class="sexo"><label><i class="icon-heart girl"></i>Mujer</label>
						</div> -->
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


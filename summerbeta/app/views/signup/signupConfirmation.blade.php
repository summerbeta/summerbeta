@extends ('signup/layout_singup')

@section ('title') Registro @stop
@section('bodyclass')  @stop

@section('steep')  

						<p>Tu usuario se confirmo correctamente</p>
@stop

@section ('content')

			<div class="three columns">
				<h2>Ingresa para continuar</h2>
				<div class="forms">
					
				{{ Form::open( ['route' => 'login', 'method' => 'POST'] ) }}
					<div class="row">
						<div class="three columns">
								{{ Form::label('user_name', 'Usuario') }}
								{{ Form::text('user_name') }}
								{{ $errors->first('user_name', '<p>:message</p>') }}
						</div>
						<div class="three columns">
								{{ Form::label('password', 'Contraseña') }}
								{{ Form::password('password') }}
								{{ $errors->first('password', '<p>:message</p>') }}
						</div>
						<div class="clear"></div>
					</div>
					@if ($errors->first())
					<div class="row">
						<p>Usuario o contraseña incorrectos.</p>
					</div>
					@endif
					<div class="botones">
						<button>Entrar</button>
						<!-- {{ Form::submit('Entrar') }} -->
					</div>
				{{ Form::close() }}
				</div>
			</div>
			<div class="three columns">
				<div class="add">
					<img src="{{ asset('uploads/publicidad/publicidad4cols-ck.jpg') }}" width="759" height="348" alt="">
				</div>
			</div>
@stop

@section('script') 

@stop


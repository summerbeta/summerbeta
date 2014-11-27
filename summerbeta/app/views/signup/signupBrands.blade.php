@extends ('signup/layout_singup')

@section ('title')Registro de Marcas - Summer Beta @stop

@section('bodyclass')registro {{Auth::user()->profile->gender}} @stop

@section('steep')  

						<p class="uppercase">Hola {{ $user->profile->first_name }} DIME, ¿QUE MARCAS TE INTERESAN?</p>
@stop

@section ('content')
		<div class="registro">
			{{ Form::open(array('route' => 'signup-brands-make', 'method' => 'POST')) }}
			<input type="hidden" name="user_id" value="{{ $user->profile->id }}">
			<div class="row">
				{{ $user->profile }} <br>
				{{ $user->profile->id }} <br>
				{{ $gender }}
				<button class="registrame">Siguiente</button>
				<div class="clear"></div>
			</div>
			<div class="row registro">
				<div class="row marcas">
					@foreach ($brands as $brand)
					<div class="one columns marca">
						<div class="marcas_imagen">
							<img id="imagenMarca" src="{{ asset('uploads/brands/'.$brand->photo->filename ) }}" >
						</div>
						<div class="roundedOne">
							<input type="checkbox" name="brand_{{ $brand->name }}" id="{{ $brand->id }}" value="{{ $brand->id }}" class="marcas_select">
							<label for="{{ $brand->id }}"></label>
						</div>
					</div>
					@endforeach
				</div>
				<div class="clear"></div>
			</div>
			<div class="row registro">
				<button class="registrame">Siguiente</button>
			</div>
			{{ Form::close() }}
		</div>
@stop

@section('script') 

@stop


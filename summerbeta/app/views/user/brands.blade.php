@extends ('layout')

@section ('title') Marcas - SUMMER BETA @stop

@section ('content')
	<div class="closet">
			
		<div class="row marcas">
			@foreach ($brands as $brand)
			<div class="one columns marca">
				<div class="marcas_imagen">
					<a href="{{ route('shop-brand', [$brand->id]) }}">
						<img id="imagenMarca" src="{{ asset('uploads/brands/'.$brand->photo->filename ) }}"  alt="{{ $brand->name }}">
					</a>
				</div>
			</div>
			@endforeach
		</div>
		<div class="clear"></div>
	</div>
@stop
@extends ('layout')

@section ('title') Social @stop

@section('bodyclass') closet @stop

@section ('content')
		
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
		<!-- 
			<div class="clear"></div>
		</div>
		-->
		<!-- <div class="loader row">
			<div class="two columns cajaconborde">
				<div class="preloader"></div>
			</div>
			<div class="two columns cajaconborde">
				<div class="preloader"></div>
			</div>
			<div class="two columns cajaconborde">
				<div class="preloader"></div>
			</div>
		</div> -->
		<div class="clear"></div>
@stop
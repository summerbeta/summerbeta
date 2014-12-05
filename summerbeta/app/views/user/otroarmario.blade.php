@extends ('layout')

@section ('title') Social - SUMMER BETA @stop

@section ('content')
		<div class="row closet">
			<div class="two columns perfil">
				<img class="perfil_foto" src="{{ asset('uploads/profile/'.$profile->picture) }}" width="356" height="596">
				<div class="perfil_informacion">
					<h2>{{ $profile->first_name }}</h2>
					<p>{{{ $profile->description }}}</p>
					<p>Chiapas - Mexico</p>
				</div>
			</div>
			<div class="four columns">
				<div class="popular">
					<div class="popular_caja seguidores">
						<p class="popular_titulo">Seguidores</p>
						<p class="popular_cantidad">486</p>
					</div>
					<div class="popular_caja siguiendo">
						<p class="popular_titulo">Siguiendo</p>
						<p class="popular_cantidad">302</p>
					</div>
					<div class="popular_caja notificaciones">
						<p class="popular_titulo">Seguir</p>
						<p class="popular_cantidad"><span class="icon-plus-circle"></span></p>
					</div>
						
				</div>

				<div class="publicaciones">
					<div style="height:577px; width:759px; background: #e0e0e0; text-align: center; margin-bottom: 1em;">
						Proximamente
					</div>
					{{--<div class="row">
						<div class="four columns">
							<div class="row">
								<div class="a">
									<img src="{{ asset('uploads/publicar/gabriela/publicar-a.jpg') }}" alt="">
								</div>
							</div>
							<div>
								<div class="two columns">
									<div class="b">
										<img src="{{ asset('uploads/publicar/gabriela/publicar-b.jpg') }}" alt="">
									</div>
								</div>
								<div class="four columns">
									<div class="c top">
										<img src="{{ asset('uploads/publicar/gabriela/publicar-c-lentes.jpg') }}" alt="">
									</div>
									<div class="c bottom">
										<img src="{{ asset('uploads/publicar/gabriela/publicar-c-gorra.jpg') }}" alt="">
									</div>
								</div>
								
							</div>
							<div class="row">
							</div>
						</div>
						<div class="two columns">
							<div class="d">
								<img src="{{ asset('uploads/publicar/gabriela/publicar-d.jpg') }}" alt="">
							</div>
							<div class="e">
								<img src="{{ asset('uploads/publicar/gabriela/publicar-e.jpg') }}" alt="">
							</div>
						</div>
					</div>--}}
								
					
				</div>
			</div>
			<div class="clear"></div>
		</div>

		<div class="row">
			<div class="row trend">
			<?php $count = 1; ?>
			@foreach ($profile->lastesPicProfile as $picture)
				<div class="two columns">
					<div class="perfil">
						<figure class="foto">
							<img src="{{ asset('uploads/profile/' . $picture->filename) }}" alt="Perfil de Gabriela">
						</figure>
						<div class="descripcion">
							<div class="nombre">
								{{ $profile->first_name }}
							</div>
							<div class="summer_love">
								<div class="smm_lv_m">
									<div class="love">32</div>
									<div class="heart">
										<i class="icon-heart"></i>
										<!-- <i class="icon-heart girl"></i>	 -->
									</div>
								</div>
									
							</div>
						</div>
					</div>
				</div>
				<?php
				$count++;
				if ($count > 3) {
					$count = 1;
					?>
				<div class="clear"></div>
			</div>
			<div class="row trend">

					<?php
				}
				?>  
			@endforeach
			</div>
			<div class="clear"></div>
		</div>
		<div class="row borde1">
			@foreach (range(1, 3) as $count)
			<div class="two columns">
				<figure class="producto cajaconborde">
					<img src="{{ asset('uploads/productos/productos-'.$count.'.jpg') }}" alt="">
					<div class="descripcion">
						<div class="nombre_marca">
							Bolso de mano <span class="upercase">DKNY</span> <br>
							Color / Marrón
						</div>
						<div class="precio">
							$1,595
							<div class="detalles">
								Detalles
							</div>
						</div>
					</div>
				</figure>
			</div>
			@endforeach
			<div class="clear"></div>
		</div>
		<div class="row">
			@foreach ($profile->brandsLike as $brandlike)
			@if ($brand = Brand::find($brandlike->brand_id)) @endif
			{{-- $brand->photo->filename --}}
			<div class="one columns marcas">
				<div class="marcas_imagen">
					<a href="{{ route('shop-brand', [$brand->id]) }}">
						<img id="imagenMarca" src="{{ @asset('uploads/brands/'.$brand->photo->filename) }}" >
					</a>

				</div>
			</div>
			@endforeach
		</div>
		<div class="clear borde1"></div>
@stop
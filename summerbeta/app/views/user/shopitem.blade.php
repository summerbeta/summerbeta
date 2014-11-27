@extends ('user/layout')

@section ('title') {{ $item->name }} - SUMMER BETA @stop

@section ('content')
		
	<div class="shop">
		<div class="row shop-item">
			<!-- <div class="row">
				<h1>{{ $item->name }}</h1>
			</div> -->
			<div class="row">
				@foreach ($item->photos as $photo)
				<!-- @{{ $photo }} -->
				<div class="two columns">
					<div class="producto full cajaconborde">
						<img src="{{ asset('uploads/items/'.$photo->filename) }}" alt="{{ $photo->title }}">
					</div>
				</div>
				@endforeach
				<div class="clear"></div>
			</div>
		</div>
		<div class="row shop">
			<div class="cajaconborde">
				<div class="six columns ">
					<div id="tab" class="marca_info">
						<ul>
							<li><a href="#description">Descripción</a></li>
							<li><a href="#comprar">¿Qué pasa despues de comprar?</a></li>
							<li><a href="#cambios">Cambios y devoluciones</a></li>
						</ul>
						<div id="description">
							<div class="row">
								<div class="two columns">
									<a href="{{ route('shop-brand', [$item->brand->id]) }}"><img src="{{ asset('uploads/brands/'.$item->brand->photo->filename ) }}" alt="{{ $item->name }}" width="100%"></a>
								</div>
								<div class="four columns">
									<div class="row">
										<h3><a href="">{{ $item->name }}</a></h3>
										<p>
											{{ $item->description }}
										</p>
										<div class="clear"></div>
									</div>
									<div class="row">
										<div class="three columns">
											Colores
											<style>
												.select_colors div
												{
													background: #ccc;
													border-radius: 50%;
													display: inline-block;
													height: 2em;
													margin-top: 1em;
													margin-right: 0.5em;
													width: 2em;
												}
												.select_size div
												{
													border: 1px solid #ccc;
													display: inline-block;
													margin: 1em 0.5em 0 0;
													padding: 0.5em 1em;
												}
											</style>
											<div class="select_colors">
												<div class="eb0657" style="background: #000"></div>
												<div class="a28356" style="background: #a28356"></div>
												<div class="eb0657" style="background: #000"></div>
												<div class="a28356" style="background: #a28356"></div>
											</div>
										</div>
										<div class="three columns">
											<div class="row">
												Tallas
												<div class="select_size">
													<div class="select_size_num">36</div>
													<div class="select_size_num">38</div>
													<div class="select_size_num">40</div>
													<div class="select_size_num">42</div>
												</div>
											</div>
										</div>
										<div class="clear"></div>
									</div>
									<div class="row">
										<div class="three columns">&nbsp;</div>
										<div class="three columns">
											<a href="" class="button full center"><span class="icon-shopping-cart"></span> Comprar</a>
											<p><a href=""><span class="icon-star"></span></a> 38 personas marcaron como favorito</p>
										</div>
											
									</div>
								</div>
									
										
							<div class="clear"></div>
							</div>
						</div>
						<div id="comprar">
							<div class="row">
								<h3>ENVÍO NORMAL (AÑADIR MAPA DE COLORES Y EXPLICAR)</h3>
								<p>Este tipo de envío se realiza de 4 a 5 días hábiles. (PRECIO)</p>
								<h3>ENVÍO EXPRESS</h3>
								<p>Se realiza de 1 a 2 días hábiles. (PRECIO)</p>
							</div>
							<div class="clear"></div>
						</div>
						<div id="cambios">
							<div class="row">
								datos
							</div>
							<div class="clear"></div>
						</div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="row">
			<h2 class="tituloTrendi">{{ $item->brand->name }} en <span>Social SUMMER</span></h2>
			<div class="row trend">
				<div class="two columns">
					<div class="perfil">
						<figure class="foto">
							<img src="{{ asset('uploads/perfil/profile-girl-alejandra.jpg') }}" alt="Perfil de Jessica">
						</figure>
						<div class="descripcion">
							<div class="nombre">
								Alejandra
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
				<div class="two columns ">
					<div class="perfil">
						<figure class="foto">
							<img src="{{ asset('uploads/perfil/Gabriela/profile-girl-full-01.jpg') }}" alt="Perfil de Jessica">
						</figure>
						<div class="descripcion">
							<div class="nombre">
								Gabriela
							</div>
							<div class="summer_love">
								<div class="smm_lv_m">
									<div class="love">382</div>
									<div class="heart">
										<i class="icon-heart"></i>
									</div>
								</div>
									
							</div>
						</div>
					</div>
				</div>
				<div class="two columns ">
					<div class="perfil">
						<figure class="foto">
							<img src="{{ asset('uploads/perfil/profile-girl-daniela.jpg') }}" alt="Perfil de Jessica">
						</figure>
						<div class="descripcion">
							<div class="nombre">
								Daniela
							</div>
							<div class="summer_love">
								<div class="smm_lv_m">
									<div class="love">32</div>
									<div class="heart">
										<i class="icon-heart"></i>
										<i class="icon-heart girl"></i>	
									</div>
								</div>
									
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop


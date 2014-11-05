@extends ('user/layout')

@section ('title') Tienda @stop
@section('bodyclass')  @stop

@section ('content')

		<div class="row shop">
			<div class="four columns">
				<div class="row productos">
					@foreach ($items as $item)
					<div class="three columns">
						<div class="producto cajaconborde">
							<div class="producto_image">
								<a href="{{ route('item', [$item->id]) }}">
									<img src="{{ asset('uploads/items/'.$item->photo->filename) }}" alt="{{ $item->name }}">
								</a>
							</div>
							<div class="descripcion">
								<div class="nombre_marca">
									{{ $item->name }} <span class="uppercase">{{ $item->brand->name }}</span> <br>
									<!-- Tallas / S M X -->
								</div>
								<div class="precio">
									$590
									<div class="detalles">
										Detalles
									</div>
								</div>
							</div>
						</div>	
					</div>
					@endforeach
					<div class="clear"></div>
				</div>
				<div class="row">
					{{ $items->links(); }}
				</div>
				<div class="clear"></div>
			</div>
			<div class="two columns sidebar">
				<div class="opcionesMarca">
					<h3>Filtrar por</h3>
					<div class="opciones fondo_color">
						<div class="row">
							<div class="three columns">
								<li>
									<h4>Marca</h4>
									<?php 
									$a = [
										'BOSS', 
										'Calvin Klein',
										'DKNY',
										'Ralph Lauren',
										'Versace Jeans',
										'Burberry'
									];
									?>
									<ul class="filtros">
										<?php 
										foreach ($a as $b) {
										?>
										<li>
											<div class="roundedOne">
												<input type="checkbox" id="<?= $b ?>" value="<?= $b ?>">
												<label for="<?= $b ?>"><?= $b ?></label>
												<!-- <div class="filtro_label">-<?= $b ?></div> -->
											</div>
												
										</li>
										<?php 
										} 
										?>
									</ul>
								</li>
							</div>
							<div class="three columns">
								<li>
									<h4>Talla</h4>
									<?php 
									$a = [
										'26',
										'28',
										'30',
										'32'
									];
									?>
									<ul class="filtros">
										<?php 
										foreach ($a as $b) {
										?>
										<li>
											<div class="roundedOne">
												<input type="checkbox" id="<?= $b ?>" value="<?= $b ?>">
												<label for="<?= $b ?>"><?= $b ?></label>
												<!-- <div class="filtro_label">-<?= $b ?></div> -->
											</div>
												
										</li>
										<?php 
										} 
										?>
								</li>
							</div>
							<div class="clear"></div>
						</div>
						<div class="row">
							<h4>Producto</h4>
									<?php 
									$a = [
										'Vestidos',
										'Abrigos',
										'Zapatos',
										'Bolsos',
										'Relojes',
										
									];
									?>
									<ul class="filtros">
										<?php 
										foreach ($a as $b) {
										?>
										<li>
											<div class="roundedOne">
												<input type="checkbox" id="<?= $b ?>" value="<?= $b ?>">
												<label for="<?= $b ?>"><?= $b ?></label>
												<!-- <div class="filtro_label">-<?= $b ?></div> -->
											</div>
												
										</li>
										<?php 
										} 
										?>
						</div>
					</div>
				</div>

				<div class="adds">
					<div class="add2cols top">
						<img src="uploads/publicidad/add2cols-lv.jpg" width="375" height="158" alt="lv">
					</div>
					<div class="add2cols">
						<img src="uploads/publicidad/add2cols-oakley.jpg" width="375" height="158" alt="lv">
					</div>
				</div>


				<!-- <div class="video">
					<iframe width="560" height="315" src="http://www.youtube.com/embed/mSFnrSZINMI?list=UUmQCN_i7L28vku4dUb7_Qtg" frameborder="0" allowfullscreen class="video4cols"></iframe>
					<div class="video">
						<h4 class="video_titulo">
							PASARELA OTONO INVIERNO LEVIS
						</h4>
						<p>
							Este fin de semana se llevo acabo la presentacion de la coleccion otoño invierno de levis donde hubo invitado...
						</p>
					</div>
				</div> -->

				<div class="trend" style="margin-top: 1em;">
				<div class="perfil">
					<figure class="foto">
						<img src="uploads/perfil/Gabriela/profile-girl-full-01.jpg" alt="Perfil de Jessica">
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
						
			</div>
		</div>
@stop

@section('script') 

@stop


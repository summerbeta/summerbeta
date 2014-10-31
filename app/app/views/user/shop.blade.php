@extends ('user/layout')

@section ('title') Tienda @stop
@section('bodyclass')  @stop

@section ('content')

		<div class="row shop">
			<div class="four columns">
				<div class="row">
					<div class="three columns">
						<div class="producto cajaconborde">
							<img src="uploads/productos/productos-c7041b04m.jpg" alt="">
							<div class="descripcion">
								<div class="nombre_marca">
									Forro polar F.lli <span class="uppercase">CMP</span> <br>
									Tallas / S M X
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
					<div class="three columns">
						<div class="producto cajaconborde">
							<img src="uploads/productos/productos-ne215a032.jpg" alt="">
							<div class="descripcion">
								<div class="nombre_marca">
									Tenis M 574 <span class="uppercase">New Balance</span> <br>
								</div>
								<div class="precio">
									$899
									<div class="detalles">
										Detalles
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="row">
					<div class="three columns">
						<div class="producto cajaconborde">
							<img src="uploads/productos/productos-tf121c05y.jpg" alt="">
							<div class="descripcion">
								<div class="nombre_marca">
									Carla Mono <span class="uppercase">tfnc</span> <br>
									Tallas / 36 38 40 42
								</div>
								<div class="precio">
									$595
									<div class="detalles">
										Detalles
									</div>
								</div>
							</div>
						</div>	
					</div>
					<div class="three columns">
						<div class="producto cajaconborde">
							<img src="uploads/productos/productos-rk021g001.jpg" alt="">
							<div class="descripcion">
								<div class="nombre_marca">
									Chaqueta de cuero Nessy <span class="uppercase">Sparkz</span> <br>
									Tallas / 36 38 40 42
								</div>
								<div class="precio">
									$1,782
									<div class="detalles">
										Detalles
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="row">
					<div class="three columns">
						<div class="producto cajaconborde">
							<img src="uploads/productos/productos-le221a03v.jpg" alt="">
							<div class="descripcion">
								<div class="nombre_marca">
									Short vaquero icons 501 <span class="uppercase">Levi's</span> <br>
									Tallas / 24 25 26 27 28 29 30 31
								</div>
								<div class="precio">
									$881
									<div class="detalles">
										Detalles
									</div>
								</div>
							</div>
						</div>	
					</div>
					<div class="three columns">
						<div class="producto cajaconborde">
							<img src="uploads/productos/productos-le251d017.jpg" alt="">
							<div class="descripcion">
								<div class="nombre_marca">
									Cinturón Anelle <span class="uppercase">Levi's</span> <br>
									Tallas / 70 75 80 90 100
								</div>
								<div class="precio">
									$809
									<div class="detalles">
										Detalles
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="row">
					<ul class="paginate">
						<li><a href="">&laquo;</a></li>
						<li><a href="">1</a></li>
						<li><a href="">2</a></li>
						<li><a href="">3</a></li>
						<li><a href="">4</a></li>
						<li><a href="">&raquo;</a></li>
					</ul>
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
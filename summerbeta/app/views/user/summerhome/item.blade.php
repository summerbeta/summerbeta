
<?php
$item = Item::whereIn('brand_id', $profile_brands)->orderBy(DB::raw('RAND()'))->take(1)->get(); // 
?>

				<figure class="producto cajaconborde">
					<a href="{{ route('item', [$item->first()->id]) }}">
					<img src="{{ asset('uploads/items/'.$item->first()->photo->filename) }}" alt="{{ $item->first()->name }}">
					<div class="descripcion">
						<div class="nombre_marca">
							{{ $item->first()->name }} <span class="uppercase">{{ $item->first()->brand->name }}</span> <br>
							Color / Marrón
						</div>
						<div class="precio">
							$1,595
							<div class="detalles">
								Detalles
							</div>
						</div>
					</div>
					</a>
				</figure>
				

<!-- {{ json_encode($item->first()) }}
{{ json_encode($item->first()->photo) }}
{{ json_encode($item->first()->brand) }}
{{ json_encode($profile_brands) }}
 -->
				{{-- <div class="three columns">
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
				</div>--}}
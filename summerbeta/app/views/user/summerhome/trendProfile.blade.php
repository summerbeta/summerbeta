
<?php
$profiles = Profile::orderBy(DB::raw('RAND()'))->take(3)->get(); // 
?>

		@foreach ($profiles as $profile)
			<div class="two columns">
				<div class="perfil">
					<figure class="perfil_foto">
						<a href="{{ route('closet_other', [$profile->id]) }}">
							
							@if ($profile->picture)
							
							<img src="{{ asset('uploads/profile/'.$profile->picture) }}" alt="Perfil de {{ $profile->first_name }}">
							
							@elseif ( ! is_null($profile->getPicture) )
							
							<img src="uploads/profile/{{ $profile->getPicture->reverse()->first()->filename }}" class="{{ $profile->getPicture->reverse()->first()->style }}" alt="{{ $profile->first_name }} - {{ $profile->getPicture->reverse()->first()->title }}">
							
							@endif
						</a>
					</figure>
					<div class="descripcion">
						<div class="nombre">
							{{-- $profile->user->user_name --}}
							<a href="{{ route('closet', [$profile->id]) }}">{{ $profile->first_name }}</a>
							
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
		@endforeach
				
				<!-- <div class="two columns">
	
					<div class="perfil">
						<figure class="foto">
							<img src="summerbeta/public/uploads/perfil/profile-girl-alejandra.jpg" alt="Perfil de Jessica">
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
										<!- - <i class="icon-heart girl"></i>	 - ->
									</div>
								</div>
									
							</div>
						</div>
					</div>
				</div> -->
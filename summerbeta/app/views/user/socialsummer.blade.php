@extends ('user/layout')

@section ('title') Social @stop

@section ('content')
		<div class="row trend">
		@foreach ($profiles as $profile)
			<div class="two columns">
				<div class="perfil">
					<figure class="perfil_foto">
						<!-- <a href="@{{ route('armario', [$profile->first_name, $profile->id]) }}"> -->
						<a href="{{ route('closet', ['profile'.$profile->slug, $profile->id]) }}">
							@if ($profile->picture)
							<img src="uploads/profile/{{ $profile->picture }}" alt="Perfil de {{ $profile->first_name }}">
							@else
							<img src="" alt="Perfil de {{ $profile->first_name }}">
							@endif
						</a>
					</figure>
					<div class="descripcion">
						<div class="nombre">
							{{-- $profile->user->user_name --}}
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
		@endforeach
		</div>

@stop
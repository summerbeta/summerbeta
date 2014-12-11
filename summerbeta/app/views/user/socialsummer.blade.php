@extends ('layout')

@section ('title') Social - SUMMER BETA @stop

@section('bodyclass')trend {{ $gender }} {{ $user->id }} @stop

@section ('content')

		<!-- {{ $count = 1 }} -->
		
		<div class="row">
		
		@foreach ($profiles as $profile)
			<div class="two columns">	
				
				<div class="perfil">
					<figure class="perfil_foto">
							
						<a href="{{ route('closet_other', [$profile->id]) }}">
							
							@if ($the_picture = $profile->getPicture->reverse()->first())
							<img src="uploads/profile/{{ $the_picture->filename }}" class="{{ $profile->getPicture->reverse()->first()->style }} {{ $profile->gender }}" alt="{{ $profile->first_name }} - {{ $profile->getPicture->reverse()->first()->title }}">
							@endif
							{{--
							@if ($profile->picture)
							
							<img src="{{ asset('uploads/profile/'.$profile->picture) }}" alt="Perfil de {{ $profile->first_name }}">
							
							@elseif ( ! is_null($profile->getPicture) )
							
							<img src="uploads/profile/{{ $profile->getPicture->reverse()->first()->filename }}" class="{{ $profile->getPicture->reverse()->first()->style }}" alt="{{ $profile->first_name }} - {{ $profile->getPicture->reverse()->first()->title }}">
							
							@endif
							--}}
						</a>
					</figure>
					<div class="descripcion">
						<div class="nombre">
							{{-- $profile->user->user_name --}}
							<a href="{{ route('closet', [$profile->id]) }}">{{ $profile->first_name }}</a>
							
						</div>
						<div class="summer_love">
							<div class="smm_lv_m">
								<div class="love">
									{{ the_love($user, $the_picture->id) }}
								</div>
								<div id="heart_{{ $the_picture->id }}" class="heart" data-love='{{ json_encode(array( 
									"profile_id" => $user->id,  
									"profile_love" => $profile->id, 
									"picture_id" => $the_picture->id,
									"meta_value" => $the_picture->meta_value,
								)) }}'>
									<i id="love_{{ $profile->id }}" class="icon-heart"></i>
									<!-- <i class="icon-heart love"></i> -->
								</div>
							</div>
								
						</div>
								<small>
								
								</small>
						
					</div>
				<!-- {{ $count++ }} -->
				</div>
			</div>
			@if ( $count > 3 ) 
		</div>
		<div class="row">
				<!-- {{ $count = 1 }} -->
			 @endif	
		@endforeach
		
		</div>
@stop

<script>

@section('script') 
			$('.heart').click( function(e){
				
				// Obtenemos los datos
				elementClick = e.currentTarget
				id = elementClick.id;
				love_id = id.substring(id.indexOf('_')+1, id.length);
				// element_class = elementClick.attr('class');
				heart_class = $("#heart_" + love_id).attr('data-love');
				console.log(heart_class);
				
				$.ajax({
					url: "{{ route('ajax_love') }}",
					type: "POST",
					data: { user: {{ $user->id }}, love: love_id, history: heart_class },
					beforeSend: function() {
						console.log('Se manda el ajax');
					},
					error: function(e) {
						console.log(e.responseText);
					},
					success: function(e) {
						console.log(e);
					},
				});
				
				// console.log({{ $user->id }} + ', ' + love_id);
			});
@stop

</script>


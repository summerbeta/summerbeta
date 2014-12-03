

<!-- {{ $view = 0 }} -->

@foreach ($ads as $ad)

	{{-- var_dump($ad) --}}
	{{-- $ad->images->random() --}}
	
	@foreach ($ad->images as $image)
	
		{{-- <li>{{ $image }}</li> --}}
		
		@if ($image->style == '4col' and $view == 0) 
		
		<img src="{{ asset('uploads/adds/'.$image->filename) }}" alt="">
		{{ $ad->title }}, {{ $image->filename }}
		<!-- {{ $view =  1 }} -->
		
		@endif
		
	@endforeach
	
@endforeach
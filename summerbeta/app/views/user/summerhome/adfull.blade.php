
<?php
$ad_photo = Photo::where('style', '=', '6col')->orderBy(DB::raw('RAND()'))->take(1)->get(); // ->random(1)
?>
<img src="{{ asset('uploads/adds/'.$ad_photo->first()->filename) }}" alt="">
<!--
Imagen de publicidad media 2 columnas
{{ json_encode($ad_photo->first()) }}
{{ json_encode($ad_photo->first()->add) }}
-->
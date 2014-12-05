
<?php
$ad_photo = Photo::where('style', '=', '2col')->orderBy(DB::raw('RAND()'))->take(1)->get(); // ->random(1)
?>
<img src="{{ asset('uploads/adds/'.$ad_photo->first()->filename) }}" alt="">
<!--
{{ json_encode($ad_photo->first()) }}
{{ json_encode($ad_photo->first()->add) }}
-->
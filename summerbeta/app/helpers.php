<?php

function adsMedium()
{
	global $view;
	echo "Cuantos? ".$view;
	$adsMy = Ad::all()->random(1);
	foreach ($adsMy->images as $image) {
		var_dump($image->style);
		if ($image->style == '4col' and $view > 2)  {
			echo $image->filename;
		} else {
			adsMedium();
			$view++;
		}
	}
}
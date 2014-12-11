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
			// adsMedium();
			$view++;
		}
	}
}

function the_love($user, $the_picture_id)
{
	$love = Love::where('picture_id', '=', $the_picture_id); // ->get() ->first() ->firstOrFail()
	
	$love_array = json_decode(json_encode($love->get()), true); 
	if ( $love->first() ){
		return count($love_array);
	} else {
		
		return 0;
	}
	
	
	
	// {"id":"10","profile_id":"1","filename":"profile_1_c4ca4238a0b923820dcc509a6f75849b_42168.jpg","style":"full","title":"Fuga saepe dolores enim.","description":"Blanditiis ut est sint accusantium iste eligendi. Dolor harum minus aspernatur vitae sunt et.","created_at":"2014-11-28 20:02:48","updated_at":"2014-11-28 20:02:48"}
	/*
	*/
}

<h1>Correo de confirmación</h1>

<p>¡Tu cuenta de Summer Beta ya está casi lista!</p>
{{ $user_name }}


<p>Tu nombre de usuario es {{ $user_name }}.</p>
<p>Haz clic en el siguiente enlace para confirmar el registro:</p>
<div style="background-repeat:repeat-x;border-radius:3px;background-color:#45a32f;border:1px solid #3e7a52;color:#ffffff;font-weight:normal;white-space:nowrap;height:44px; widht:auto;">
<a href="{{ route('signup_confirmation', [$user_name, $value] ) }}" style="color:#ffffff;font-size:16px;text-align:center;text-decoration:none;vertical-align:baseline;font-weight:normal"><span style="padding:16px 40px;color:#fff">Confirmar el registro</span></a>
</div>

<p></p>
{{-- 
	{{ $user_name }} <br>
	{{ $email }} <br>
	{{ $valuecode }} <br>
	Los datos que pasamos en la variable $user se conviete cada uno en una variable
	$id
	$user_name
	$email
	$valuecode
	{"id":"16","user_name":"Eddy","email":"all.eddyramos@gmail.com","valuecode":"{\"status\":\"confirmation\",\"value\":\"54760ba721ebb\"} 
--}}
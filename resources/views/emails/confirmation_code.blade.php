<!DOCTYPE html>
<html lang="es">
<head>

</head>
<body>
	<div>
		<div >
			<h1>{{config('app.name')}}</h1>
		</div>
		    <h2 style="color: #7082FF ">Hola {{ $name }}, gracias por registrarte en <strong>Socialite</strong> !</h2>
		    <p>Por favor confirma tu correo electrónico.</p>
		    <p>Para ello simplemente debes hacer click en el siguiente enlace:</p>
	    <div>
	    	<a href="{{ url('/register/verify/' . $confirmation_code) }}">Confirmar Correo</a>
	    </div>
	 </div>
</body>
</html>


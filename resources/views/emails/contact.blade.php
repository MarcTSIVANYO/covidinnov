<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body> 
		  You received a message from : {{ env('APP_NAME') }}
			<p>
			Name: {{ $name }}
			</p>
			<p>
			Email: {{ $email }}
			</p>
			<p>
			Objet: {{ $objet }}
			</p>
			<p>
			Message: {{ $user_message }}

	</body>
</html>
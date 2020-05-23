<!DOCTYPE html>
<html>
	<head>
		<title>Validation de la commande</title>
	</head>
	<body> 
		<b>
			AGENCE HOST<br/>
			HÉBERGEMENT WEB FLEXIBLE ET PERFORMANT			
		</b>
		<p>Bonjour,</p>
		<p>Un client vient d'ouvrir un ticket.</p>
 
		<p>
			Infos ticket :<br/> 
			<b>- Email client :</b> {{$user_email}} <br/>  
			<b>- Numéro du ticket :</b> {{$ticket}}<br/> 
			<b>- Service :</b> {{$request->service}}<br/> 
			<b>- Objet :</b> {{$request->objet}}<br/> 
			<b>- Message :</b> {{$request->messages}}<br/> 
		</p>  
		<p>
			<br/> 
			Reponse rapide sur  : <a href="https://agencehost.com/clientarea/tickets/view/{{$ticket}}" target="_blank">ticket</a> 
		</p> 	
 		@include("emails.footer")
	</body>
</html>
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
		<p> Merci d'avoir ouvrir un ticket sur www.agencehost.com</p>
 
		<p>
			Infos ticket :<br/> 
			<b>- Votre email :</b> {{$user_email}} <br/>  
			<b>- Numéro du ticket :</b> {{$ticket}}<br/> 
			<b>- Service :</b> {{$request->service}}<br/> 
			<b>- Objet :</b> {{$request->objet}}<br/> 
			<b>- Message :</b> {{$request->messages}}<br/> 
		</p>  
		<p>
			<br/> 
			Lien d'accès du ticket : <a href="https://agencehost.com/clientarea/tickets/view/{{$ticket}}" target="_blank">cliquer ici.</a> 
		</p> 	
 		@include("emails.footer")
	</body>
</html>
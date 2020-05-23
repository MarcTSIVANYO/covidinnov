
<!DOCTYPE html>
<html>
	<head>
		<title>Commande validee / Order validated</title>
	</head>
	<body> 
		<b>
			AGENCE HOST<br/>
			HÉBERGEMENT WEB FLEXIBLE ET PERFORMANT			
		</b>
		<p>Bonjour Madame, Monsieur,</p>
		<p>
			Votre commande : <?php echo Session::get('listLibs') ?>, d'un montant total de <b>{{$montant}} €</b> est activé avec succès. Elle prend fin le {{$finDate}};
		</p> 
		<p>Nous vous en remercions pour la confiance</p> 
		<p>
			<b>Votre espace client <b/><br/>
			-----------------------<br/>
			Les paramètres d'accès à votre espace client vous ont été envoyés par mail séparé. 
			<br/>
			Lien d'accès au cpanel : <a href="https://agencehost.com/login" target="_blank">https://agencehost.com/login</a> 
		</p> 	
	 
	 @include("emails.footer") 
	</body>
</html>
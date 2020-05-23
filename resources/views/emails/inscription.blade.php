<!DOCTYPE html>
<html>
	<head>
		<title>AgenceHost : Inscription</title>
	</head>
	<body> 
		<b>
			AGENCE HOST<br/>
			HÉBERGEMENT WEB FLEXIBLE ET PERFORMANT			
		</b>
		<p>Bonjour {{$name}}</p>
		<p>Vous venez de vous inscrire sur <a href="https://agencehost.com/" target="_blank">https://agencehost.com/</a>  et nous vous en remercions. Votre espace d'hébergement est actif.</p>
		 
		<p>
			<b>Votre espace client <b/><br/>
			-----------------------<br/>
			- Login : {{$user_email}} <br/>
			
			- Mot de passe : Même chose que vous aviez saisie<br/>

			- Nom d'utilisateur  :  {{$user_login}}
			<br/>

			- Lien d'affiliation : <a href="https://www.agencehost.com?parrain={{$user_login}}" style="color: black;" target="_blank"> 
                www.agencehost.com?parrain={{$user_login}}
            </a> 
			<br/>
			- Lien d'accès au cpanel : <a href="https://agencehost.com/login" target="_blank">Se connecter</a> 
		</p> 	

		<br/><i>Merci de bien vouloir finaliser votre commande dans votre espace client <a href="https://agencehost.com/login" target="_blank">ici</a> </i>

		<br/><br/><br/>
	<p>
	<b>Nous vous remercions pour la confiance.</b><br/>
	---------------------------------------------------------------------<br/>
		<b>L'équipe de AgenceHost</b><br/>
		<b>www.agencehost.com</b><br/>
		<b>support@agencehost.com</b><br/>  
	</p> 
	@include("emails.footer")

	</body>
</html>
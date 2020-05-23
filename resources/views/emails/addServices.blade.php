<?php //dd(Session::get('listLibs')) ?>
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
		<p>Bonjour Madame, Monsieur,</p>
		<p>Vous venez de passer une commande d'achat de domaine ou hébergement 
			<?php echo Session::get('listLibs') ?>, d'un montant total de <b>{{$montant}} €</b> et nous vous en remercions. Votre espace d'hébergement sera actif dès le paiement.</p>
		<p>
			<b>Info sur le paiement</b><br/>
			Nous acceptons les virements bancaires, les moyens de transfert(wester union, wari,...), carte visa, chèques bancaires. Merci d'écrire au {{env('MAIL_PAY')}} pour valider sous peu votre commande.
		</p> 
		<p>
			<b>Votre espace client <b/><br/>
			-----------------------<br/>
			Les paramètres d'accès à votre espace client vous ont été envoyés par mail séparé. 
			<br/>
			Lien d'accès au cpanel : <a href="https://agencehost.com/login" target="_blank">Se connecter</a> 
		</p> 	
 		@include("emails.footer")
	</body>
</html>
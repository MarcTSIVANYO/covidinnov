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
		<p>Un client vient de passer une commande.</p>
 
		<p>
			Info de commandes :<br/>
			<b>- Email du client : {{$user_email}} </b><br/>
			<b>- Hebergement/Domaine : <?php echo Session::get('listLibs') ?></b><br/>
			<b>- Montant : {{$montant}} €</b><br/> 
		</p> 
		<p>Merci de vite prendre attache avec le client au {{$user_email}} pour valider le paiement et la commande.</p>
		<p>
			<br/> 
			Lien d'activation : <a href="https://agencehost.com/admin/topay" target="_blank">Activer</a> 
		</p> 	
 		@include("emails.footer")
	</body>
</html>
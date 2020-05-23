<!DOCTYPE html>
<html>
	<head> 
	</head>
	<body> 
		<b>
			AGENCE HOST<br/>
			HÉBERGEMENT WEB FLEXIBLE ET PERFORMANT			
		</b>
		<p>Chère cliente, Cher client,</p>
		<p><?php echo htmlspecialchars($bodyMessage) ?></p>
 
		<p>
			Pour effectuer le renouvellement, cliquez sur le lien ci-dessous. <a href="https://agencehost.com/login" target="_blank">https://agencehost.com/login</a> 
  		</p> 

		<p>
			Il est nécessaire d'effectuer le paiement du renouvellement dès à présent, afin d'éviter toute suspension de service et les frais supplémentaires de restauration.<br/><br/>

			Si vous renouvelez dés à présent aucun mois n'est perdu, cela ajoutera une ou plusieurs années à votre abonnement à sa date anniversaire. 
		</p> 
 		@include("emails.footer")
	</body>
</html>
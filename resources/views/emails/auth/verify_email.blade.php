@include("emails.header")

<!-- / Divider -->
<table class="container" border="0" cellpadding="0" cellspacing="0" width="100%" style="padding-top: 25px;" align="center">
	<tr>
		<td align="center">
			<table class="container" border="0" cellpadding="0" cellspacing="0" width="620" align="center" style="border-bottom: solid 1px #eeeeee; width: 620px;">
				<tr>
					<td class="cta-block__title" style="padding: 35px 0 0 0; font-size: 26px; text-align: center;">Confirmation d'adresse email</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
<!-- /// Divider -->

<!-- / CTA Block -->
<table class="container cta-block" border="0" cellpadding="0" cellspacing="0" width="100%">
	<tr>
		<td align="center" valign="top">
			<table class="container" border="0" cellpadding="0" cellspacing="0" width="620" style="width: 620px;">
				
				<tr>
					<td class="hero-subheader__title" style="font-size: 26px; font-weight: bold; padding: 80px 0 15px 0;" align="left">Cher {{$user_name}}</td>
				</tr>

				<tr>
					<td class="cta-block__content" style="padding: 20px 0 27px 0; font-size: 23px; line-height: 27px; color: #969696; text-align: center;">
						Vous vous êtes inscrit avec succès à notre système. <br/>Veuillez activer votre compte.<br/>
					</td>
				</tr>

				<tr>
					<td align="center">
						<table class="container" border="0" cellpadding="0" cellspacing="0">
							<tr>
								<td class="cta-block__button" width="230" align="center" style="width: 50%;">
									<a href="{{route('activate.user', $token)}}" style="border: 3px solid #eeeeee; color: #969696; text-decoration: none; padding: 15px 45px; text-transform: uppercase; display: block; text-align: center; font-size: 16px;">Confirmer l’adresse e-mail</a>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
<!-- /// CTA Block -->

<!-- / Divider -->
<table class="container" border="0" cellpadding="0" cellspacing="0" width="100%" style="padding-top: 25px;" align="center">
	<tr>
		<td align="center">
			<table class="container" border="0" cellpadding="0" cellspacing="0" width="620" align="center" style="border-bottom: solid 1px #eeeeee; width: 620px;">
				<tr>
					<td align="center">&nbsp;</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
<!-- /// Divider -->

@include("emails.footer")
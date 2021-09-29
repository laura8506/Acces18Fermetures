<?php
include __DIR__ . '/../header.php';
?>

<main class="main">
	<div>
		<h1>Besoin d'informations ou un devis ?</h1>
		<h2>Contactez nous ci dessous</h2>
	</div>
	<div class="colonnes">
		<div class="colonne1">
			<div class="encadre">
				<div class="titre_encadre"><img class="icones" src="../img/icone_coche.png" style="width:24px;"> Contact en ligne</div>
				<hr>
				<form action=" " method="post">
					<div class="champ_formulaire">
						<span class="icone_formulaire"><img class="iconesf" src="../img/icone_personne.png" style="width:20px;"></span>
						<input type="text" class="formulaire" id="nom" name="nom" placeholder="Nom *" style="width: 60%;">
					</div>
					<div class="champ_formulaire">
						<span class="icone_formulaire"><img class="iconesf" src="../img/icone_personne.png" style="width:20px;"></span>
						<input type="text" class="formulaire" id="prenom" name="prenom" placeholder="Prénom" style="width: 60%;">
					</div>
					<div class="champ_formulaire">
						<span class="icone_formulaire"><img class="iconesf" src="../img/icone_message.png" style="width:20px;"></span>
						<input type="email" class="formulaire" id="mail" name="mail" placeholder="Adresse E-Mail *" style="width: 60%;">
					</div>
					<div class="champ_formulaire">
						<span class="icone_formulaire"><img class="iconesf" src="../img/icone_tel.png" style="width:20px;"></span>
						<input type="tel" class="formulaire" id="tel" name="tel" placeholder="Tél : 0123456789" style="width: 40%;">
					</div>
					<div class="champ_formulaire">
						<span class="icone_formulaire"><img class="iconesf" src="../img/icone_maison.png" style="width:20px;"></span>
						<input type="text" class="formulaire adresse" id="adresse" name="adresse" placeholder="Adresse postale" style="width: 90%;">
					</div>
					<div class="champ_formulaire">
						<span class="icone_formulaire"><img class="iconesf" src="../img/icone_maison.png" style="width:20px;"></span>
						<input type="text" class="formulaire" id="codepostal" name="code postal" placeholder="Code postal">
					</div>
					<div class="champ_formulaire">
						<span class="icone_formulaire"><img class="iconesf" src="../img/icone_maison.png" style="width:20px;"></span>
						<input type="text" class="formulaire" id="ville" name="ville" placeholder="Ville" style="width: 70%;">
					</div>
					<div class="champ_formulaire">
						<span class="icone_formulaire"><img class="iconesf" src="../img/icone_crayon.png" style="width:20px;"></span>
						<textarea id="msg" class="formulaire" name="message" placeholder="Votre message *" rows="5" cols="33"></textarea>
					</div>
					<div class="champ_formuaire">
						<span class="icone_formulaire"><img class="iconesf" src="../img/icone_actualiser.png" style="width:20px;"></span>
						<input type="texte" class="formulaire" id="code" name="code" placeholder="Recopier le texte ci-dessus *"  autocomplete="off" style="width: 85%;">
					</div>
					<div>
						<br>
						<center><button class="button_demande_contact" onclick="window.location.href='../contact/contact.php';" type="submit">Envoyer le message <img class="icones" src="../img/icone_avion.png" style="width:16px;"></button></center>
					</div>
				</form>
			</div>
		</div>
		<div class="colonne2">
			<div class="encadre">
				<div class="titre_encadre"><img class="icones" src="../img/icone_message.png" style="width:24px;"> Adresse Mail</div>
				<hr>
				<p>
					<a href="#">acces18.fermetures@orange.fr</a>
				</p>
			</div>
			<div class="encadre">
				<div class="titre_encadre"><img class="icones" src="../img/icone_crayon.png"> Adresse et téléphone</div>
				<hr>
				<p>
					- <strong>Accès 18 Fermetures</strong><br>
					rue de la Garenne<br>
					18230 SAINT DOULCHARD<br>
					02 48 65 27 41
				</p>
			</div>
		</div>
	</div>
	<div class="encadre">
		<div class="titre_encadre"><img class="icones" src="../img/icone_maison.png"> Nous trouver ?</div>
		<hr>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2714.8066520611333!2d2.365904851039297!3d47.12246052918706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47fa95fa72dc22f1%3A0xd69b8001a61f8f91!2sAcc%C3%A8s%2018%20Fermetures!5e0!3m2!1sfr!2sfr!4v1614009272837!5m2!1sfr!2sfr" width="1070" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	</div>
</main>

<?php
include  __DIR__ . '/../footer.php';
?>
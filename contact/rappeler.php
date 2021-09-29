<?php
include __DIR__ . '/../header.php';
?>

<main class="main">
	<div>
		<h1>Vous souhaitez être rappelé ?</h1>
		<h2>Complétez le formulaire ci-dessous</h2>
	</div>
	<div class="contenu_rappel">
		<div class="colonne1">
			<div class="encadre">
				<form action=" " method="post">
					<div class="champ_formulaire">
						<span class="icone_formulaire"><img class="iconesf" src="../img/icone_tel.png" style="width:20px;"></span>
						<input type="tel" class="formulairer telrappel" id="telrappel" name="telrappel" placeholder="Numéro de téléphone *">
					</div>
					<div class="champ_formulaire">
						<span class="icone_formulaire"><img class="iconesf" src="../img/icone_globe.png" style="width:20px;"></span>
						<select id="choixhoraire" class="formulairer menuder" name="choixhoraire" style="font-size:18px;">
							<option value="dispo">Dès que possible, je suis disponible</option>
							<option value="9_18">De 9h à 18h</option>
							<option value="9_12_et_14_18">De 9h à 12h / 14h à 18h</option>
							<option value="9_12">De 9h à 12h</option>
							<option value="14_18">De 14h à 18h</option>
							<option value="12_14">Entre 12h et 14h</option>
						</select>
					</div>
					<div>
						<center><button class="button_demande_rappel" type="submit"><img class="icones" src="../img/icone_coche.png" style="width:20px;"> Envoyer votre demande</button></center>
					</div>
				</form>
			</div>
			<div>
				<center><button class="button_demande_rappel" onclick="window.location.href='../contact/contact.php';" type="submit"><img class="icones" src="../img/icone_message.png" style="width:20px;"> Ou accéder à la page contact</button></center>
			</div>
		</div>
		<div class="colonne2">
			<center><img src="../img/femme_tel.jpg"></center>
		</div>
	</div>
</main>




<?php
include  __DIR__ . '/../footer.php';
?>
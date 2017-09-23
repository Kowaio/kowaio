<?php
session_start();
if($_SESSION['acces']=="oui") 
{
	if (isset($_POST['nomGal']) AND isset($_POST['desc'])) // Si les variables existent
	{
	    if ($_POST['nomGal'] != NULL AND $_POST['desc'] != NULL) // Si on a quelque chose à enregistrer
	    {
	        // On utilise les fonctions PHP mysql_real_escape_string et htmlspecialchars pour la sécurité
	        $nomGal = (htmlspecialchars($_POST['nomGal']));
	        $desc = (htmlspecialchars($_POST['desc']));
	        // Ensuite on enregistre le message
	        Connexion::requete("INSERT INTO GALERIE VALUES('', '$nomGal', '$desc')");
			
			//On récupère le numero de cette galerie
			$numeroGal = Connexion::requete(" SELECT NUMGAL
									FROM `GALERIE`
									WHERE `NOMGAL` LIKE '$nomGal' AND `DESC` LIKE '$desc'");								
			while ($gal = mysql_fetch_array($numeroGal) )
			{
				$numGal = $gal['NUMGAL'];
			}
			//creation du dossier portant le nom de la galerie et le numero
			if ( !file_exists("images/$numGal-$nomGal"))
				mkdir ("images/$numGal-$nomGal", 0700);
			else
				//Normalement on y passe jamais car dossier contient un id unique !
				echo "Le dossier existe déja";
	    }
	}
}
else
{
?>
	<div id="auth">
	<form method="post" action="<?= $_SERVER['PHP_SELF'] ?>">
		<fieldset>
			<legend>Accès réservé aux personnes autorisées</legend>
			Login : <input type="text" name="login" />
			Pass : <input type="password" name="pass" />
			<input type="submit" name="envoi" value="Connexion"/>
		</fieldset>
	</form>
	</div>
<?php
}
?>
<br/>
<div id="zone-menu-bas">
	<a href="index.php?nom=accueil" id="accueil2">Accueil</a> :: <a href="../index.php?nom=private.inc" id="private">Private</a>
</div>
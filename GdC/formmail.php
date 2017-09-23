<?php
session_start();
require_once("connexion.inc.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
      <!-- Entête du document  -->
      <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	  <!-- Entête du document  <meta http-equiv="refresh" content="2; URL=admin.php">-->
      <link href="" rel="stylesheet" type="text/css">
      <title>Test Message envoyé</title>
    </head>
   <body>
		<center> 
<!-- ENREGISTREMENT BD -->
<?php
if (isset($_POST['nom']) AND 
	isset($_POST['prenom']) AND
	isset($_POST['log']) AND
	isset($_POST['mdp']) AND
	isset($_POST['dtnais']) AND
	isset($_POST['adr']) AND
	isset($_POST['cdpst']) AND
	isset($_POST['ville']) AND
	isset($_POST['courriel'])) { // Si les variables existent

	if ($_POST['nom'] != NULL AND 
		$_POST['prenom'] != NULL AND 
		$_POST['log'] != NULL AND 
		$_POST['mdp'] != NULL AND 
		$_POST['dtnais'] != NULL AND 
		$_POST['adr'] != NULL AND 
		$_POST['cdpst'] != NULL AND 
		$_POST['ville'] != NULL AND 
		$_POST['courriel'] != NULL ) { // Si on a quelque chose à enregistrer

		// On utilise les fonctions PHP mysql_real_escape_string et htmlspecialchars pour la sécurité
		$nom = (htmlspecialchars($_POST['nom']));
		$prenom = (htmlspecialchars($_POST['prenom']));
		$log = (htmlspecialchars($_POST['log']));
		$mdp = (htmlspecialchars($_POST['mdp']));
		$dtnais = (htmlspecialchars($_POST['dtnais']));
		$adr = (htmlspecialchars($_POST['adr']));
		$cdpst = (htmlspecialchars($_POST['cdpst']));
		$ville = (htmlspecialchars($_POST['ville']));
		$courriel = (htmlspecialchars($_POST['courriel']));

		$User = Connexion::requete("SELECT * FROM UTILISATEUR;");
		
		$login_used = "no";
		
		while ($req = mysql_fetch_array($User))
		{
			if($log == $req['loginUser'])
			{
				$login_used = "yes";
				echo "*******************";
				echo "Login deja utilisé";
				echo "*******************";
				echo "<meta http-equiv='refresh' content='2; URL=admin.php'>";
			}
		}
		if ($login_used == "no")
		{
			Connexion::requete("INSERT INTO Utilisateur VALUES('','$log','$mdp','$nom','$prenom','$courriel','$dtnais');");
		}
		
	}
}
?>
<!-- FORM_MAIL  -->
<?php
require_once("mail.php");

/* PARAMETRAGE DU SCRIPT */
/* ENTREZ VOTRE ADRESSE EMAIL ENTRE LES GUILLEMETS*/

$dest=$courriel;

$reponse=StripSlashes("Votre candidature a bien été envoyée");

/* FIN DU PARAMETRAGE */


//--------------------------------
// on teste, si les valeurs sont vides, c'est qu'il y a eu un pb lors de la vérification du formulaire, on envoie donc pas les données
if ($_POST["nom"]=="" && $_POST["prenom"]=="" && $_POST["dtnais"]=="" && $_POST["adr"]=="" && $_POST["cdpst"]=="" && $_POST["ville"]=="" && $_POST["courriel"]=="" && $_POST["log"]=="" && $_POST["mdp"]=="") 
	exit(0);
//-------------------------------------

$subject="toto";

$msg="Message provenant du formulaire de candidature de votre site http://kowaio.free.fr :

Nom : $_POST[nom]

Prenom : $_POST[prenom]

Date de Naissance : $_POST[dtnais]

Adresse : $_POST[adr]

Code Postal : $_POST[cdpst]

Ville : $_POST[ville]

Courriel : $_POST[courriel]

Login : $_POST[log]

Mot de passe : $_POST[mdp]"; 

$email = "GdC@free.fr";
$email1 = "";
$priority="2";
$m = new Mail; // create the mail
        $m->From( "$email" );
        $m->To( "$dest");     
        $m->Subject( "$subject" );
        $m->Body( $msg);        // set the body
		
if ($email1!="") 
{
    $m->Cc( "$email1");
}
$m->Priority($priority) ;
$m->Send(); 

?>

		</center>
	</body>
</html>
 <?php
session_start();
require_once("connexion.inc.php");

	if (isset($_POST['login']) AND isset($_POST['pass'])) // Si les variables existent
	{
	    if ($_POST['login'] != NULL AND $_POST['pass'] != NULL) // Si on a quelque chose à enregistrer
	    {
	        // On utilise les fonctions PHP mysql_real_escape_string et htmlspecialchars pour la sécurité
	        $login = (htmlspecialchars($_POST['login']));
	        $pass = (htmlspecialchars($_POST['pass']));

	        $User = Connexion::requete("SELECT * FROM UTILISATEUR;");
			
			while ($req = mysql_fetch_array($User))
			{
				if($login == $req['loginUser'] && $pass == $req['passUser'])
				{
					$_SESSION['user_connect']="oui";
					echo "connecté";
					$_SESSION['user_login']=$login;
				}
			}
	    }
	}
?>
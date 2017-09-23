<?php
require("config.php");

if ( isset($_GET["logout"]) && $_GET["logout"] == "ok") 
{
$_SESSION["password"] = "";
$password = "";
}

if ($password != $mdp && isset($_POST["iduser"]) && $_POST["iduser"] == $mdp)
{
$_SESSION["password"] = $_POST["iduser"];
$password = $_SESSION["password"];
}

// SI ERREUR MOT DE PASSE
if( isset($_GET["error"]) && $_GET["error"]="password" )
{
	echo '<h1 class="error"> :. Authentification Error</h1>';
	echo '<meta http-equiv="refresh" content="2; url=index.php?nom=accueil" />';
}


if( (isset($_POST["iduser"]) && $_POST["iduser"] != $mdp ) ||  $password != $mdp ) 
{
		// SI MAUVAIS MDP ON RECHARGE LA PAGE ENTIERE
		if ( isset($_POST["iduser"]) && $_POST["iduser"] != "" && $_POST["iduser"] != $mdp) 
		{ 
			header("location:index.php?nom=private&error=password");
		} 

		if ( isset($_GET["logout"]) && $_GET["logout"] == "ok") 
		{ 
			echo '<meta http-equiv="refresh" content="2; url=index.php?nom=accueil" />';
		} 

		if ( isset($_GET["logout"]) && $_GET["logout"] == "ok") 
		{ 
			echo '<h1 class="error"> :. You have been disconnected</h1>';
		} 

}
elseif(isset($_POST["iduser"]) && $_POST["iduser"] == $mdp || $password == $mdp) 
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title><?php echo $titre_site; ?> - Private Zone</title>
		<link rel="icon" href="images/img/gs.ico" type="image/x-icon" />

		<frameset cols="200, *" frameborder="no" border="0" framespacing="0" frameborder="0" marginwidth="0" marginheight="0" scrolling="yes" resize="NO" frameborder=0 border="no" bordercolor="#354785">
			<frame name="gauche" src="menu-mynewz.php" frameborder="no" border="0" framespacing="0" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" resize="NO" frameborder=0 border="no">
			<frame name="droite" src="mynewz.php" frameborder="no" border="0" framespacing="0" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" resize="NO" frameborder=0 border="no">
		</frameset>
	</head>
	<body>
	</body>
</html>
<?php
}

?>



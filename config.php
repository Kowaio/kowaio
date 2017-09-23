<?php // VARIABLES.

//session_start();

// POUR BART, LE GESTIONNAIRE DE FICHIERS
$titre_site = "Site de Guillaume Siorak"; // Titre du site.
$rbase = "D:/WebSite/"; // Repertoire reel sur le disque dur (avec slash de fin !!!).
$vbase = "http://localhost"; // URL de base virtuelle (sans slash de fin).
// FIN DE BART

//$ext[1][0] = "Gestionnaire de fichiers";
//$ext[1][1] = "bart.php";

$ext[0][0] = "MyNewz 1.1";
$ext[0][1] = "mynewz.php";

sort($ext);

$mdp = "kowaaa"; // Mot de passe

//$password = $HTTP_COOKIE_VARS["NitroAdminCook182"]; // Contenu du cookie

if( isset( $_SESSION["password"] ) )
	$password = $_SESSION["password"];
else
	$password = "";

/*
if (substr($dir, -2) == "//") {
	$dir = substr($dir, 0, -1);}
elseif (substr($dir, -1) == "/") {
	$dir = $dir;}
else {
	$dir = $dir."/";}
$dir = stripslashes($dir);
$avant = dirname($dir);
$avant = stripslashes($avant); 
*/

$dossiers = array(); // Tableau des dossiers.
$fichiers = array(); // Tableau des fichiers.
$d = 0;
$f = 0;

?>
<?php

require("config.php");

if ($password != $mdp) {
header("Location: index.php");}

header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");

?>

<?php // EXECUTION DES ACTIONS.

// Supprime les fichiers et les dossiers.
function deldir($location) { 
	if(is_dir($location)) {
		$all=@opendir($location);
		while ($file = readdir($all)) { 
			if (is_dir($location."/".$file) && $file <> ".." && $file <> ".") { 
				deldir($location."/".$file); 
			if(file_exists($location."/".$file)){rmdir($location."/".$file); }
				unset($file);}
			elseif (!is_dir($location."/".$file)) {
				unlink($location."/".$file);
				unset($file);}} 
		rmdir($location);}
	else {
		unlink($location);
}}

// Supprime les fichiers avec le formulaire.
if (!empty($suppr)) {
	for ($i = 0; $i < count($suppr); $i++) {
		$retirer = $rbase.$suppr[$i];
		$retirer = stripslashes($retirer);
		deldir($retirer);
}}

// Renomme un fichier.
if ($action == "renommer") {
	@rename($rbase.$dir.$vi, $rbase.$dir.$nouv);}

// Cree un nouveau dossier.
if ($action == "ndos") {
	@mkdir($rbase.$dir.$tdos, 0700);}

// Transferer un fichier.
if (!empty($local)) {
$tele = @copy($local, $rbase.$dans);
if ($tele == false) {$resultat = "<hr size=\"1\" color=\"#FDFC65\">\n<p><b>Le transfert a &eacute;chou&eacute; ...</b></p>";}
else {$resultat = "<hr size=\"1\" color=\"#FDFC65\">\n<p>Le fichier <b>$local_name</b> a bien &eacute;t&eacute; transf&eacute;r&eacute;.</p>";}
}

// Editer un fichier.
if ($action == "editer") {
$fichier = fopen($rbase.$dir.$fich, "w+");
$src = stripslashes($src);
fputs($fichier, $src);
fclose($fichier);
}

// Determine le type de fichier.
function type_fichier($fichier) {
	$pos = strpos($fichier, ".");
	$ext = substr($fichier, $pos+1);

	switch($ext) {
	case "php" :
		return "Script PHP";
		break;
	case "htm" :
		return "Document HTML";
		break;
	case "html" :
		return "Document HTML";
		break;
	case "css" :
		return "Feuille de style";
		break;
	case "js" :
		return "JavaScript";
		break;
	case "swf" :
		return "Animation Flash";
		break;
	case "gif" :
		return "Image GIF";
		break;
	case "jpg" :
		return "Image JPEG";
		break;
	case "jpeg" :
		return "Image JPEG";
		break;
	case "jpe" :
		return "Image JPEG";
		break;
	default :
		return "Fichier";
		break;
	
}}

// Determine la taille du fichier.
function taille_fichier($fichier) {
$t = filesize($fichier);
if ($t < 1024) {
	return $t." octets";}
else {
	$prep = round($t/1024*100)/100;
	return $prep." Ko";
}}


?>

<?php // TABLEAUX ET DOSSIERS

$ajouter = @opendir($rbase.$dir);
while ($scan = @readdir($ajouter)) {

// Si c'est un fichier ...
if (@is_file($rbase.$dir.$scan)) {
$fichiers[$f] = $scan;
$f++;}

// Si c'est un dossier ...
elseif (@is_dir($rbase.$dir.$scan) && $scan != "." && $scan != "..") {
$dossiers[$d] = $scan;
$d++;}

}

sort($dossiers);
sort($fichiers);

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
<title>BART v1.1 // <?php echo $titre_site; ?></title>
<link href="private.css" type="text/css" rel="stylesheet">
<script language="JavaScript">

function spr() {
	var popup = window.confirm("Voulez-vous supprimer ces fichiers ?");
	if (popup == true) {
		document.supprimer.submit();}}

</script>
</head>

<body topmargin="5" leftmargin="5" marginheight="5" marginwidth="5">

<h1>BART v1.1</h1>

<?php
if (empty($afficher)) {
?>

<hr size="1" color="#FDFC65">
<p>Dossier courant : <b><?php echo $dir; ?></b></p>
<p><a href="<?php echo "bart.php?dir=$avant"; ?>">Dossier pr&eacute;c&eacute;dent</a> || <a href="javascript:spr()">Supprimer les fichiers s&eacute;lectionn&eacute;s</a> || <a href="<?php echo "bart.php?dans=$dir&afficher=transferer"; ?>">Importer des fichiers</a></p>
<hr size="1" color="#FDFC65">

<form name="supprimer" action="bart.php" method="POST">
<input type="hidden" name="dir" value="<?php echo $dir; ?>">

<?phpphp // Nom des dossiers et fichiers.

echo "<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" width=\"100%\">\n";
echo "<tr><td><p>&nbsp;</p></td><td><p>&nbsp;</p></td><td><p>&nbsp;</p></td><td width=\"100%\"</td><td><p align=\"center\"><b>Type</b></p></td><td><p align=\"center\"><b>Taille</b></p></td><td nowrap><p align=\"center\"><b>Modifi&eacute; le</b></p></td></tr>\n";
echo "<tr>\n<td colspan=\"7\"><p><span class=\"titre\">Dossiers : </span> ".count($dossiers)." dossier(s)</p></td></tr>\n";
echo "<tr><td colspan=\"7\"><hr size=\"1\" color=\"#FDFC65\"></td></tr>";

for ($i = 0; $i < count($dossiers); $i++) {
	$mod = filemtime($rbase.$dir.$fichiers[$i]);
	$mod = date("d/m/Y", $mod);
	if (($i%2) == 0) {$sel = "normal1";}
	else {$sel = "normal2";}
	echo "<tr class=\"$sel\" onMouseOver=\"this.className = 'hover';\" onMouseOut=\"this.className = '$sel';\">\n";
	echo "<td><input type=\"checkbox\" name=\"suppr[]\" value=\"".$dir.$dossiers[$i]."\"></td><td><a href=\"bart.php?dir=$dir&renommer=".$dossiers[$i]."&afficher=renommer\"><img src=\"images/img/renommer.gif\" border=\"0\" alt=\"Renommer le dossier\"></a></td><td><p>&nbsp;</p></td><td width=\"100%\"><p><a href=\"bart.php?dir=".$dir.$dossiers[$i]."\">".$dossiers[$i]."</a></p></td><td align=\"center\" nowrap><p>Dossier</p></td><td align=\"center\" nowrap><p>-</p></td><td align=\"center\" nowrap><p>$mod</p></td>\n";
	echo "</tr>\n";}

echo "<tr>\n<td colspan=\"7\"><p style=\"margin: 5px;\"><span class=\"titre\">Fichiers : </span> ".count($fichiers)." fichier(s)</p></td></tr>\n";

for ($i = 0; $i < count($fichiers); $i++) {
	$mod = filemtime($rbase.$dir.$fichiers[$i]);
	$mod = date("d/m/Y", $mod);
	if (($i%2) == 0) {$sel = "normal1";}
	else {$sel = "normal2";}
	echo "<tr class=\"$sel\" onMouseOver=\"this.className = 'hover';\" onMouseOut=\"this.className = '$sel';\">\n";
	echo "<td><input type=\"checkbox\" name=\"suppr[]\" value=\"".$dir.$fichiers[$i]."\"></td><td><a href=\"bart.php?dir=$dir&renommer=".$fichiers[$i]."&afficher=renommer\"><img src=\"images/img/renommer.gif\" border=\"0\" alt=\"Renommer le fichier\"></a></td><td><a href=\"bart.php?dir=".$dir."&fich=".$fichiers[$i]."&afficher=source\"><img src=\"images/img/editer.gif\" border=\"0\" alt=\"Editer le fichier\"></a></td></td><td width=\"100%\"><p><a href=\"".$vbase.$dir.$fichiers[$i]."\" target=\"_blank\">".$fichiers[$i]."</a></p></td><td align=\"center\" nowrap><p>".type_fichier($fichiers[$i])."</p></td><td align=\"center\" nowrap><p>".taille_fichier($rbase.$dir.$fichiers[$i])."</p></td><td align=\"center\" nowrap><p>$mod</p></td>\n";
	echo "</tr>\n";}

echo "</table>";

?>

</form>

<hr size="1" color="#FDFC65">
<p><a href="<?php echo "bart.php?dir=$avant"; ?>">Dossier pr&eacute;c&eacute;dent</a> || <a href="javascript:spr()">Supprimer les fichiers s&eacute;lectionn&eacute;s</a> || <a href="<?php echo "bart.php?dans=$dir&afficher=transferer"; ?>">Importer des fichiers</a></p>
<hr size="1" color="#FDFC65">

<form action="bart.php" method="POST">
<input type="hidden" name="action" value="ndos">
<input type="hidden" name="dir" value="<?php echo $dir; ?>">
<table cellpadding="0" cellspacing="0" border="0" width="100%">
<tr>

<td nowrap><p><b>Cr&eacute;er un dossier : </b></p></td>
<td><input type="text" name="tdos" size="25"></td>
<td><p>&nbsp;</p></td>
<td><input type="submit" value="Créer" class="bouton"></td>
<td width="100%"><p>&nbsp;</p></td>

</tr>
</table>
</form>

<?php
}
elseif ($afficher == "renommer") {
?>

<hr size="1" color="#FDFC65">
<p><a href="bart.php?dir=<?php echo $dir; ?>">Retour sur le site</a></p>
<hr size="1" color="#FDFC65">

<form action="bart.php" method="POST">
<input type="hidden" name="action" value="renommer">
<input type="hidden" name="dir" value="<?php echo $dir; ?>">
<input type="hidden" name="vi" value="<?php echo $renommer; ?>">
<table cellpadding="0" cellspacing="0" border="0" align="center">
<tr><td><p align="center">Renommer <b><?php echo $renommer; ?></b> en :</p></td></tr>
<tr><td><p align="center"><input type="text" name="nouv" value="<?php echo $renommer; ?>" size="20"> <input type="submit" value="Renommer" class="bouton"></td></tr>
</table>
</form>

<?php
}
elseif ($afficher == "source") {

$fi = fopen($rbase.$dir.$fich, "r");
$contenu = fread($fi, filesize($rbase.$dir.$fich));
fclose($fi);

?>

<hr size="1" color="#FDFC65">
<p><a href="bart.php?dir=<?php echo $dir; ?>">Retour sur le site</a></p>
<hr size="1" color="#FDFC65">

<form action="bart.php" method="POST">
<input type="hidden" name="action" value="editer">
<input type="hidden" name="afficher" value="source">
<input type="hidden" name="dir" value="<?php echo $dir; ?>">
<input type="hidden" name="fich" value="<?php echo $fich; ?>">
<table cellpadding="0" cellspacing="0" border="0" align="center">
<tr><td colspan="2"><p align="center">Editer <b><?php echo $fich; ?></b> :</p></td></tr>
<tr><td align="center" colspan="2"><p align="center"><textarea cols="60" rows="15" name="src"><?php echo $contenu; ?></textarea></p></td></tr>
<tr>
<td align="center"><p align="center"><input type="submit" value="Enregistrer les modifications" class="bouton"></p></td>
<td align="center"><p align="center"><input type="reset" value="Annuler" class="bouton"></p></td>
</tr>
</table>
</form>

<?php
}
elseif ($afficher == "transferer") {
?>

<hr size="1" color="#FDFC65">

<p><a href="bart.php?dir=<?php echo $dans; ?>">Retour sur le site</a></p>

<?php echo $resultat; ?>
<p><b>Attention :</b> si le nombre de fichier &agrave; transferer est &eacute;lev&eacute; ou la taiile des fichiers est grande, la page qui arrivera sera plongue &agrave; charger.</p>

<hr size="1" color="#FDFC65">

<form action="bart.php" method="POST" enctype="multipart/form-data">
<input type="hidden" name="afficher" value="transferer">
<input type="hidden" name="MAX_FILE_SIZE" value="5000000">
<input type="hidden" name="dans" value="<?php echo $dans; ?>">
<table cellpadding="0" cellspacing="0" border="0" align="center">
<tr><td><p align="center">Transf&eacute;rer des fichiers dans <b><?php echo $dans; ?></b> :</p></td></tr>

<tr><td align="center"><input type="file" name="local" size="35"></td></tr>
<tr><td align="center"><p>&nbsp;</p></td></tr>
<tr><td align="center"><input type="submit" value="Envoyer les fichiers" class="bouton"></td></tr>

</table>
</form>

<?php
}
?>

<hr size="1" color="#FDFC65">
<p align="right"><a href="http://www.nskate.fr.st" target="_blank"><img src="images/img/projetn.gif" width="80" height="30" alt="Projet N / part of the NSkate" border="0"></a>

</body>

</html>

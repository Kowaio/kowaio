<?php
require("config.php");

$source = "news/";

if ( isset($_POST["action"]) && $_POST["action"] == "supprimer") {

$rec = file($source."enregistrer.txt");
$enlever = fopen($source."enregistrer.txt", "w");
for ($i = 0; $i < count($rec); $i++) {
$rec[$i] = trim($rec[$i]);

if ($_POST["suppr"] == $i) {
unlink($source.$rec[$i]);
continue;}
fputs($enlever, $rec[$i]."\n");
}
fclose($enlever);

}

elseif ( isset($_POST["action"]) && $_POST["action"] == "newz") {

$messages = file($source."enregistrer.txt");

// Parametrer les variables
$date = date("d/m/Y");
$heure = date("H:i");

$_POST["txt"] = nl2br($_POST["txt"]);
$_POST["txt"] = eregi_replace("<(mailto:)([^ >\n\t]+)>", "<a href=\"\\1\\2\">\\2</a>", $_POST["txt"]);
$_POST["txt"] = eregi_replace("<([http|news|ftp]+://)([^ >\n\t]+)>", "<a href=\"\\1\\2\" target=\"_blank\">\\2</a>", $_POST["txt"]);

// Creation du message, transformation des smileys.
function souriez($chaine) {

$cont1 = str_replace(":>", "<img src=\\\"images/icones/s1.gif\\\" alt=\\\":>\\\" />", $chaine);
$cont1 = str_replace(":d", "<img src=\\\"images/icones/s2.gif\\\" alt=\\\":d\\\" />", $cont1);
$cont1 = str_replace(";)", "<img src=\\\"images/icones/s3.gif\\\" alt=\\\";)\\\" />", $cont1);
$cont1 = str_replace(":@", "<img src=\\\"images/icones/s4.gif\\\" alt=\\\":@\\\" />", $cont1);
$cont1 = str_replace(":o", "<img src=\\\"images/icones/s5.gif\\\" alt=\\\":o\\\" />", $cont1);
$cont1 = str_replace(":)", "<img src=\\\"images/icones/s6.gif\\\" alt=\\\":)\\\" />", $cont1);
$cont1 = str_replace(":p", "<img src=\\\"images/icones/s7.gif\\\" alt=\\\":p\\\" />", $cont1);
return $cont1;
}

$_POST["txt"] = souriez($_POST["txt"]);
$_POST["ti"] = souriez($_POST["ti"]);

//\$ndate = \"$date @ $heure\";
$src = "<?php


\$ntitre = \"$_POST[ti]\";
\$ndate = \"$date\";
\$nheure = \"$heure\";
\$nauteur = \"Kowaio\";
\$nemail = \"Kowaio@gmail.com\";
\$ntexte = \"$_POST[txt]\";

?>

";

// Nombre de messages.
$num = fopen($source."num.txt", "r");
$nbmes = fread($num, filesize($source."num.txt"));
fclose($num);

// ID du message, nom de fichier.
$index = ($nbmes + 1);
$nomf = "mes$index.txt";

// Augmenter le nombre d'index.
$num = fopen($source."num.txt", "w+");
fputs($num, $index);
fclose($num);

// Creer le fichier.
$nfichier = fopen($source."$nomf", "w");
fclose($nfichier);

// Enregistrer la newz.
$nfichier = fopen($source."$nomf", "w+");
fputs($nfichier, "$src");
fclose($nfichier);

// Enregistrer l'ID.
$ajid = fopen($source."enregistrer.txt", "w+");
fputs($ajid, "$nomf\n");
fputs($ajid, implode("", $messages));
fclose($ajid);

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
      <!-- Entête du document  -->
      <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
      <link href="private.css" rel="stylesheet" type="text/css" />
      <title>Site de Guillaume Siorak - Private Zone</title>
	  <script type="text/javascript">
		function spr() 
		{
			var popup = window.confirm("Voulez-vous supprimer la news ?");
			if (popup == true) {
				document.supprimer.submit();
			}
		}
	  </script>
	</head>

	<body>

	<h1>News</h1>
	<hr class='trait' />
	
	<p>
		<a href="mynewz.php">Supprimer un message</a> || <a href="mynewz.php?afficher=ajouter">Ajouter un message</a>
	</p>
	
	<hr class='trait' />

	<?php
		if (empty($_GET["afficher"])) 
		{
	?>

	<form action="mynewz.php" method="post" onSubmit="spr(); return false;" name="supprimer">
	
	<p>
		<input type="hidden" name="action" value="supprimer" />
	</p>
	
	<table width="100%">

	<?php // AFFICHAGE DU FORMULAIRE DE SUPPRESSION.

		$rec = file($source."enregistrer.txt");
		
		for ($i = 0; $i < count($rec); $i++) 
		{
			$rec[$i] = trim($rec[$i]);
	?>
	
	<tr>
		<td class='liste_suppr'>
			<input type="radio" name="suppr" value="<?php echo $i; ?>" />&nbsp;&nbsp;
		</td>

		<td class='td_contenu_news'>
			<?php
				include($source.$rec[$i]);

				if ($ntitre=="")
					$ntitre = "News";

				echo "<p>".stripslashes($ntitre)." - <i> le ".stripslashes($ndate)." à ".stripslashes($nheure)."</i></p>";
			?>
		</td>
	</tr>

	<?php
		}
	?>
	
	<tr>
		<td colspan="2" class="centrer">
			<p class="contenu_centre">
				<input type="submit" value="Supprimer" class="bouton" />
			</p>
		</td>
	</tr>
	</table>
	</form>

	<?php
		}
		elseif ($_GET["afficher"] == "ajouter") 
		{
	?>

	<form action="mynewz.php" method="post">
	<input type="hidden" name="action" value="newz" />
	<table class='centrer_tab'>

	<tr>
		<td class="centrer">
			<p class="contenu_centre">Objet :<br />
				<input type="texte" size="60" name="ti" class="boite" />
			</p>
		</td>
	</tr>
	<tr>
		<td class="centrer">
			<p class="contenu_centre">Contenu :<br>
				<textarea name="txt" cols="60" rows="15"></textarea>
			</p>
		</td>
	</tr>
	<tr>
		<td class="centrer">
			<input type="submit" value="Envoyer" class="bouton" />
		</td>
	</tr>

	</table>
	</form>

	<?php
		}
	?>

	</body>

</html>

<?php
$anim_flash = "titre";
$maxnews = 10; // Nombre max de news sur cette page
?>
<div id='contenu_accueil'>	
	
	<h1 id='titre_accueil'>&nbsp;</h1>

	<?php // AFFICHAGE DES NEWZ

		$base = "news/"; // Repertoire des news
		if (isset($_GET["nom"]) && $_GET["news"] == 'all')
			$maxnews = 100; // Nombre de news max dans la page
		else
			$maxnews = 5; // Nombre de news max dans la page
			
		$rec = file($base."enregistrer.txt");

		if (count($rec) < $maxnews) 
		{
			$maxnews = count($rec);
		}

		for ($i = 0; $i < $maxnews; $i++) 
		{
			$rec[$i] = trim($rec[$i]);
		
			include($base.$rec[$i]);
		
			$a=stripSlashes($ndate);
			
			if ($ntitre=="")
				$ntitre = "News";
			
			echo '<div class="contenu_news"><h1 class="titre_news">';
				
			if ( $a == date("d/m/Y"))
			{
				// affichage du logo new devant le titre
				echo '<img class="new" src="images/icones/new.gif" alt="NEW !" />&nbsp;';
			}
			
			echo stripSlashes($ntitre).'<i class="details_news"> par <a class="content" href="mailto:'.stripSlashes($nemail).'?subject=[News - '.strip_tags(stripSlashes($ntitre)).'] "><b class="author">'.stripSlashes($nauteur).'</b></a> le '.stripSlashes($ndate).' à '.stripSlashes($nheure).'</i></h1></div><h1 class="news"> » '.stripSlashes($ntexte).'</h1>';
		};
	?>
</div>

<div class='archives'>
<h1 class='archives_text'>
	<img class='go' alt='go' src="images/img/go.gif" />
	<?php
		if (isset($_GET["nom"]) && $_GET["nom"] == 'accueil')
		{
			echo '<a class="a_archives" href="index.php?nom=archives&amp;news=all">Archives</a>';
		}
		elseif (isset($_GET["nom"]) && $_GET["nom"] == 'archives')
		{
			echo '<a class="a_archives" href="index.php?nom=accueil">Retour</a>';		
		}
		else
		{
			echo '<a class="a_archives" href="index.php?nom=archives&amp;news=all">Archives</a>';
		}
	?>
</h1>
</div>

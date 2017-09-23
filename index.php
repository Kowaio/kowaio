<?php
	//session_start();
	if (!isset($_GET["nom"]))
		$nom='accueil';
	else
		$nom=$_GET["nom"]; 	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
      <!-- Entête du document  -->
      <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
      <link href="style.css" rel="stylesheet" type="text/css" />
	  <link rel="icon" href="images/img/gs.ico" type="image/x-icon" />
	  <link type="image/x-icon" href="images/gs.ico" rel="shortcut icon" />
	  <meta content="Site personnel de Guillaume SIORAK. Vous trouverez des mes informations personnelles telles que mon cursus, curriculum vitae... Vous trouverez également mes créations ou travaux les plus récents." name="Description" />
	  <meta content="guillaume siorak, guillaume-siorak, guillaumesiorak, reims, Reims, Université, TVPaint, Animation, TVP, Development, stage, CV, kowaio, skaar, kowaio skaar, star wars, guillaume, siorak, php, java, javascript, c++, opengl, html, xhtml, cv, curriculum, vitae, cursus, logiciels, gabien, realisations, gratuits, libre, open, source, jerome, beaudoux, dimitri, lenoble, DUT, fac, pc, yahtzee, sudoku, data, glove, rv, realite, virtuelle, synthese, image, traitement, imagerie, numérique, c, programmation, developpememnt, logiciel, windev, systeme, embarques " name="Keywords" />
	  <meta content="Guillaume Siorak" name="Author" />
	  <meta content="Guillaume Siorak" name="Publisher" />
	  <meta content="Guillaume Siorak" name="Copyright" />
	  <meta content="fr" name="Content-language" />
	  <meta content="kowaio.free.fr" name="TITLE" />
	  <meta content="kowaio@gmail.com" name="OWNER" />
	  <meta content="Site personnel de Guillaume Siorak" name="SUBJECT" />
	  <meta content="General" name="RATING" />
	  <meta content="Site personnel de Guillaume Siorak" name="ABSTRACT" />
	  <meta content="7 DAYS" name="REVISIT-AFTER" />
	  <meta content="All" name="ROBOTS" />
	  <meta name="google-site-verification" content="XdQ_pFm1M3POIJA7DYBVBbF6trl3HZL97xbY-3ebJ-Y" />
	  <script type="text/javascript" src="formulaire.js"></script>
      <title>Site de Guillaume Siorak - <?php echo "$nom"; ?></title>
    </head>
 
	<body>
	
 	<table>
	
	    <tr>
			<td class='vide_width' rowspan='9'></td>
			<td class='vide_height'></td>
			<td class='vide_width' rowspan='9'></td>
		</tr>	
		
		<tr>
			<td id='bann'></td>
		</tr>
		
		<tr>
			<td id='ssbann'>
						<p id='menu-hori'>
							<a href="index.php?nom=accueil">Accueil</a>
							<a href="index.php?nom=presentation">Présentation</a>
							<a href="index.php?nom=projets">Projets</a>
						</p>
			</td>
		</tr>		
		
		<tr>
			<td class='vide_height'></td>
		</tr>	
		
		<tr>
			<?php 
				if ($nom=='') 
					$nom='accueil';
			
				echo "<td id='$nom'>";
								
				if ( file_exists($nom.'.php') )
					include($nom.'.php');
				else if ( $nom == 'archives')
					include('accueil.php');
				else 
					include('page_404.php');
			
				echo "</td>"			
			?>
		</tr>
			
		
		<tr>
			<td class='vide_height'></td>
		</tr>		
		
		<tr>
			<td id='credits'>

				<div class='contact_left'>
					<a href="http://www.facebook.com/guillaumesiorak">
					<img class="contact_credits" alt='facebook' src="images/img/facebook.png" />
					</a>
					<a href="http://twitter.com/kowaio">
					<img class="contact_credits" alt='twitter' src="images/img/twitter.png" />
					</a>
					<!--
					<a href="mailto:Kowaio@gmail.com?subject=[Contact]">
					<img class="contact_credits" alt='email' src="images/img/email.png" />
					</a>
					-->
				</div>
				<div class='menu_credits'>
					<a href="index.php?nom=liens">Liens</a>
					<b class="tiret">-</b>    
					<a href="index.php?nom=contact">Contact</a>
					<b class="tiret">-</b>
					<a href="index.php?nom=admin">Administration</a>

				</div>
				<div class='contact_right'>
					<!--
					<a href="http://twitter.com/kowaio">
					<img class="contact_credits" alt='twitter' src="images/img/twitter.png" />
					</a>
					<a href="http://www.lastfm.fr/user/Kowaio">
					<img class="contact_credits" alt='lastfm' src="images/img/lastfm.png" />
					</a>
					<a href="http://kowaio.blogspot.com">
					<img class="contact_credits" alt='blogger' src="images/img/blogger.gif" />
					</a>
					<a href="http://picasaweb.google.com/kowaio">
					<img class="contact_credits" alt='picasa' src="images/img/picasa.png" />
					</a>
					-->
				</div>	

				<div class='copyright'>
				Copyright © 2011 - Site Web réalisé par <a class='copyright' href="mailto:guillaume.siorak[AT]gmail.com?subject=[Contact from guillaume-siorak.fr]">Guillaume SIORAK</a>
				</div>
				

			</td>
		</tr>

		<tr>
			<td class='vide_height'></td>
		</tr>
		
	</table>
	
	<div id="w3c">
			<a href="http://validator.w3.org/check?uri=referer">
				<img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" />
			</a>
			&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="http://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fkowaio.free.fr">
				<img width="88" height="31" alt="Valid CSS Level 2" src="http://www.w3.org/Icons/valid-css2-blue"/>
			</a>
	</div>
	
   </body>
   
</html>
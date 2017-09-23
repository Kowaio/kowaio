<?php
session_start();

?>			
				<div id="photo-video">
					<div id="haut-lesphotos">Mes Photos</div>
					<div id="lesphotos">
						<br/>
						<div id="affichage-photo">
							<?php
								require_once ('Script_PHP/connexion.inc.php');
								// Renvoi les galeries
								$Galerie = Connexion::requete("SELECT * FROM GALERIE");
								
								while ($gal = mysql_fetch_array($Galerie) )
								{
									$numGalerie = $gal['NUMGAL'];
									$nomGalerie = $gal['NOMGAL'];
									$desc		= $gal['DESC'];
									
									// Renvoi les photos
									$Photo = Connexion::requete("SELECT * FROM PHOTOS WHERE GALPHO=".$numGalerie);
									$i = 0;
									while ($pho = mysql_fetch_array($Photo) )
									{
										$numPho = $pho['NUMPHO'];
										$nomPho = $pho['NOMPHO'];
										$titre	= $pho['TITRE'];
										$galPho = $pho['GALPHO'];
										
										if ($i == 0)
											{
												if($_SESSION['acces']=="oui")
												{
													echo "<a href='images/$numGalerie-$nomGalerie/private/$numGalerie-$nomGalerie.zip'><img src='images/download.png'>&nbsp;&nbsp;&nbsp;</a>";
												}
												echo "<a href='images/$numGalerie-$nomGalerie/$nomPho' rel='lightbox[".$nomGalerie."]' title='".$titre."'>".$desc."</a>";
												echo "<br/>";
											}
										else
											echo "<a href='images/$numGalerie-$nomGalerie/$nomPho' rel='lightbox[".$nomGalerie."]' title='".$titre."'></a>";
										$i++;
									}
								}
							?>
							<br/>
						</div>
							<?php
							if($_SESSION['acces']=="oui")
							{
								?>
								<div id="haut-newGalerie">Insertion d'une galerie</div><br/>
								<div id="newGalerie">
									<form action="index.php?nom=newGalerie" method="post">
										Nom <input type="text" name="nomGal"/>
										&nbsp;&nbsp;&nbsp;Description <input type="text" name="desc"/>
										&nbsp;&nbsp;&nbsp;<input type="submit" value="Ajouter" />
									</form>
								</div>
								<br/>
								<div id="haut-delGalerie">Suppression d'une galerie</div><br/>
								<div id="delGalerie">
									<form action="index.php?nom=delGalerie" method="post">
										<select name='numGal'>
											<?php
											$nameGalerie = Connexion::requete("SELECT `NOMGAL`,`NUMGAL` FROM `GALERIE`");
											while ($gal = mysql_fetch_array($nameGalerie) )
											{
												echo "<option value=".$gal['NUMGAL'].">".$gal['NUMGAL']."-".$gal['NOMGAL']."</option>";
											}
											?>
										</select>
										&nbsp;&nbsp;&nbsp;<input type="submit" name="delete" value="Supprimer"><br/>
									</form>
								</div>
								<br/>
								
								<div id="haut-newPhotos">Insertion d'une photo</div><br/>
								<div id="newPhotos">
									<form method="post" enctype="multipart/form-data" action="index.php?nom=newPhoto">
										Nom <input type="text" name="nomPho"/>
										&nbsp;&nbsp;&nbsp;Titre <input type="text" name="titrePho"/>
										&nbsp;&nbsp;&nbsp;<input type="submit" name="upload" value="Uploader"><br/>
										<br/>
										<select name='numGal'>
											<?php
											$nameGalerie = Connexion::requete("SELECT `NOMGAL`,`NUMGAL` FROM `GALERIE`");
											while ($gal = mysql_fetch_array($nameGalerie) )
											{
												echo "<option value=".$gal['NUMGAL'].">".$gal['NUMGAL']."-".$gal['NOMGAL']."</option>";
											}
											?>
										</select>
										&nbsp;&nbsp;&nbsp;Chemin <input type="file" name="fichier"/>
										
									</form>
								</div>
								<div id="haut-delPhotos">Suppression d'une photo</div><br/>
								<div id="delPhotos">
									<form method="post" action="index.php?nom=delPhoto">
										<select name='numPho' size="10">
											<?php
											$nameGalerie = Connexion::requete("SELECT `NOMGAL`,`NUMGAL` FROM `GALERIE`");
											while ($gal = mysql_fetch_array($nameGalerie) )
											{
												echo "<optgroup label=".$gal['NUMGAL']."-".$gal['NOMGAL'].">";
												$nomPhoto = Connexion::requete("SELECT `NOMPHO`,`NUMPHO` FROM `PHOTOS` WHERE `GALPHO`=".$gal['NUMGAL']);
												while ($pho = mysql_fetch_array($nomPhoto) )
												{
													echo "<option value=".$pho['NUMPHO']." label=".$pho['NOMPHO'].">".$pho['NOMPHO']."</option>";
												}
												echo "</optgroup>";
											}
										echo "</select>";
										?><br/><br/>
										<input type="radio" name="keep" value="Oui" id="OuiPhoto"><label for="OuiPhoto">Conserver la photo</label></input>
										<input type="radio" name="keep" value="Non" id="NonPhoto" checked="checked"><label for="NonPhoto">Supprimer la photo</label></input><br/>
										<br/>
										<input type="submit" name="delete" value="Supprimer"><br/>
									</form>
								</div>
								<?php
							}
							?>
							<br/>
					</div>
					<div id="haut-video">Mes Vidéos</div>
					<div id="video">
						<?php
							require_once("Script_PHP/creationXML.php");
						?>
						<br/>
						 <div id="playerFLV">Vous devez <a href="http://www.macromedia.com/go/getflashplayer">télécharger</a> FlashPlayer pour visionner les vidéos(gratuit).</div>
						<script type="text/javascript">
						<!--
							var s1 = new SWFObject("flv/mediaplayer.swf","mediaplayer","670","350","1");
							s1.addParam("allowfullscreen","true");
							s1.addVariable("width","670");
							s1.addVariable("height","350");
							s1.addVariable("file","flv/playlist.xml")
							s1.addVariable('linkfromdisplay','true');
							s1.addVariable('displaywidth','450');
							s1.addVariable('autoscroll','true');
							s1.addVariable('lightcolor','0x00aacc');
							s1.write("playerFLV");
						-->
						</script>
						<?php
						if($_SESSION['acces']=="oui")
						{?>
							<br/>
							<div id="haut-newVideo">Insertion d'une vidéo</div><br/>
								<div id="newVideo">
									<form enctype="multipart/form-data" action="index.php?nom=newVideo" method="post">
										Titre <input type="text" name="nomVid"/>&nbsp;&nbsp;
										Créateur <input type="text" name="creaVid"/><br/><br/>
										Vidéo (.flv)&nbsp; <input type="file" name="pathVid"/><br/><br/>
										Image (.jpg) <input type="file" name="pathPho"/><br/><br/>
										<input type="submit" value="Ajouter" />
									</form>
								</div>
							<div id="haut-delVideo">Suppression d'une vidéo</div><br/>
								<div id="delVideo">
									<form action="index.php?nom=delVideo" method="post">
									<select size="5" name="delThisFlv">
											<?php
											$flv = Connexion::requete("SELECT `idFLV`,`title` FROM `FLV`");
											while ($ligne = mysql_fetch_array($flv) )
											{
												echo "<option value=".$ligne['idFLV'].">".$ligne['title']."</option>";
											}
											echo "</select>";
										?><br/><br/>
										<input type="radio" name="keep" value="Oui" id="OuiVideo"><label for="OuiVideo">Conserver la video</label></input>
										<input type="radio" name="keep" value="Non" id="NonVideo" checked="checked"><label for="NonVideo">Supprimer la video</label></input><br/>
										<br/>
										<input type="submit" name="delete" value="Supprimer"><br/>
									</form>
								</div>
						<?php
						}
						?>
						<br/>
					</div>
				</div>
				<div id="zone-menu-bas">
					<a href="index.php?nom=accueil" id="accueil2">Accueil</a> :: <a href="index.php?nom=private.inc" id="private">Private</a>
				</div>
<?php

	$requete = Connexion::requete("SELECT * FROM FLV");
	$chxml="<playlist version=\"1\" xmlns=\"http://xspf.org/ns/0/\">\n<trackList>";
	while ($ligne=mysql_fetch_array($requete))
	{
		$chxml .= "<track>\n";
		$chxml .= "<title>".$ligne['title']."</title>\n";
		$chxml .= "<creator>".$ligne['creator']."</creator>\n";
		$chxml .= "<location>".$ligne['location']."</location>\n";
		$chxml .= "<image>flv/".$ligne['image']."</image>\n";
		$chxml .= "</track>\n";
	}
	$chxml .= "</trackList></playlist>";
	file_put_contents("flv/playlist.xml",$chxml);
?>
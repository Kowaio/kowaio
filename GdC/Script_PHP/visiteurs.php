<?php
// -------
// ETAPE 1 : on vérifie si l'IP se trouve déjà dans la table
// Pour faire ça, on n'a qu'à compter le nombre d'entrées dont le champ "ip" est l'adresse ip du visiteur
$reponse = Connexion::requete('SELECT COUNT(*) AS nbre_entrees FROM connectes WHERE ip=\'' . $_SERVER['REMOTE_ADDR'] . '\'');
$donnees = mysql_fetch_array($reponse);

if ($donnees['nbre_entrees'] == 0) // L'ip ne se trouve pas dans la table, on va l'ajouter
{
    Connexion::requete('INSERT INTO connectes VALUES(\'' . $_SERVER['REMOTE_ADDR'] . '\', ' . time() . ')');
}
else // L'ip se trouve déjà dans la table, on met juste à jour le timestamp
{
    Connexion::requete('UPDATE connectes SET timestamp=' . time() . ' WHERE ip=\'' . $_SERVER['REMOTE_ADDR'] . '\'');
}
?>
<?php
//demarrage de la sessions
session_start();
//Si déconnexion demande
if($_POST['envoi']=="Deconnexion")
{
	//Deconnexion et affichage du formulaire de connexion
	session_destroy();
	?>
	<div id="auth">
		<form method="post" action="index.php?nom=private.inc">
			<fieldset>
				<legend>Accès réservé aux personnes autorisées</legend>
				Login :	<input type="text" name="login" />
				Pass :	<input type="password" name="pass" />
						<input type="submit" name="envoi" value="Connexion"/>
			</fieldset>
		</form>
	</div><br />
<?php
}
//sinon c'est une connexion
else
{
	//Vérification de l'existance de login et pass
	if(isset($_POST['login']) && isset($_POST['pass']))
	{
		//on vérifie
		if($_POST['login']=="dimmm" && $_POST['pass']=="californication")
		{
			$_SESSION['acces']="oui";
			$_SESSION['user']=$_POST['login'];
		}
		//Si non correct
		else
		{
			echo "<p id='errorAuth'>Erreur d'authentification !</p>";
		}
	}
	//Si authentification réussit, affichage des liens - sinon affichage de la page d'authentification
	if($_SESSION['acces']!="oui")
	{
		?>
		<div id="auth">
			<form method="post" action="index.php?nom=private.inc">
				<fieldset>
					<legend>Accès réservé aux personnes autorisées</legend>
					Login :	<input type="text" name="login" />
					Pass :	<input type="password" name="pass" />
							<input type="submit" name="envoi" value="Connexion"/>
				</fieldset>
			</form>
		</div><br/>
		<?php
	}
	//Si authentification réussit, affichage des liens
	else
	{
		echo "<h4>Bonjour ". $_SESSION['user']."</h4>"; 
		?>
		<form method="post" action="index.php?nom=private.inc">
			<input type="submit" name="envoi" value="Deconnexion"/><br/><br/>
		</form>
		<div id="insert">
			<a href="index.php?nom=insertion" id="insertion">Insertion d'une news</a> <br/><br/>
		</div>
		<?php
	}
}
?>
<div id="zone-menu-bas">
	<a href="index.php?nom=accueil" id="accueil2">Accueil</a> :: <a href="index.php?nom=private.inc" id="private">Private</a>
</div>

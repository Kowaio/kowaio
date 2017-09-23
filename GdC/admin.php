<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
      <!-- Entête du document  -->
      <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
      <link href="style.css" rel="stylesheet" type="text/css" />
	  <link rel="icon" href="images/kowaio.ico" type="image/x-icon" />
	  <link type="image/x-icon" href="images/kowaio.ico" rel="shortcut icon" />
	  <script type="text/javascript" src="formulaire.js"></script>
      <title>Kowaio's Website - <?php echo "$nom"; ?></title>
    </head>
 
	<body>

<div id='contenu_admin'>
	<h1 id='titre_admin'>@dmin - identification</h1>
		
	<br />
	<hr class="trait"/>
	<br />
	<br />
	
	<form class='form_admin' action="auth.php" method="post">
		<table class='tab_admin'>
			<tr>
				<td class='admin' colspan="3">
					<p>
						<b>Login :</b>
					</p>
				</td>
			</tr>
			<tr>
				<td class='admin'><input id="login_user" type="text" name="login" size="15" /></td>
			</tr>
			<tr>
				<td class='admin' colspan="3">
					<p>
						<b>Password :</b>
					</p>
				</td>
			</tr>			
				<td class='admin'><input id="password_user" type="password" name="pass" size="15" /></td>
				<td class='admin'><p>&nbsp;</p></td>
				<td class='admin'><input id="cadenas_admin" type="image" src="images/img/cadenas.gif" alt="OK" /></td>
			</tr>
		</table>
	</form>
	
	<br />
	<br />
	<hr class="trait" />
	
	<form onSubmit="return verification(this)" onReset="return confirmation()" action="formmail.php" method="post" enctype="multipart/form-data">
	<table class='form'>
		<tr>
			<td id='formu_top_left'>&nbsp;&nbsp;Nom :</td>
			<td id='formu_top_right'>&nbsp;<input type="text" name="nom" size="30" /></td>
		</tr>
		<tr>
			<td class='formu_left'>&nbsp;&nbsp;Prenom :</td>
			<td class='formu_right'>&nbsp;<input type="text" name="prenom" size="30" /></td>
		</tr>
		<tr>
			<td class='formu_left'>&nbsp;&nbsp;Login :</td>
			<td class='formu_right'>&nbsp;<input type="text" name="log" size="30" /></td>
		</tr>		
		<tr>
			<td class='formu_left'>&nbsp;&nbsp;Mot de passe :</td>
			<td class='formu_right'>&nbsp;<input type="text" name="mdp" size="30" /></td>
		</tr>		
		<tr>
			<td class='formu_left'>&nbsp;&nbsp;Date de naissance :</td>
			<td class='formu_right'>&nbsp;<input type="text" name="dtnais" size="10" /></td>
		</tr>
		<tr>
			<td class='formu_left'>&nbsp;&nbsp;Adresse :</td>
			<td class='formu_right'>&nbsp;<input type="text" name="adr" size="30" /></td>
		</tr>
		<tr>
		<td class='formu_left'>&nbsp;&nbsp;Code postal :</td>
		<td class='formu_right'>&nbsp;<input type="text" name="cdpst" size="5" /></td>
		</tr>
		<tr>
			<td class='formu_left'>&nbsp;&nbsp;Ville :</td>
			<td class='formu_right'>&nbsp;<input type="text" name="ville" size="30" /></td>
		</tr>
		<tr>
			<td class='formu_left'>&nbsp;&nbsp;Courriel :</td>
			<td class='formu_right'>&nbsp;<input type="text" name="courriel" size="30" /></td>
		</tr>
		<tr>
			<td class='formu_envoyer_effacer'><input type="submit" value="Envoyer" /></td>
			<td class='formu_envoyer_effacer'><input type="reset" value="Effacer" /></td>
		</tr>
	</table>
</form>
</div>




</body>
</head>
</html>
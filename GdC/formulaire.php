<form onSubmit="return verification(this)" onReset="return confirmation()" 
   action="formmail.php" method="post" enctype="multipart/form-data">
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
			<td class='formu_left'>&nbsp;&nbsp;Téléphone :</td>
			<td class='formu_right'>&nbsp;<input type="text" name="tel" size="10" /></td>
		</tr>
		<tr>
			<td class='formu_left'>&nbsp;&nbsp;Courriel :</td>
			<td class='formu_right'>&nbsp;<input type="text" name="courriel" size="30" /></td>
		</tr>
		<tr>
			<td class='formu_left'>&nbsp;&nbsp;Niveau d'étude :</td>
			<td class='formu_right'>&nbsp;<input type="text" name="niveau" size="30" /></td>
		</tr>
		<tr>
			<td class='formu_left' rowspan='2'>&nbsp;&nbsp;Recherche de Stage :</td>
			<td class='formu_right'>&nbsp;<input type='radio' name='stage' value='1' id='oui' />
									   <label for='oui'>Oui</label></td>
		</tr>
        <tr>
			<td class='formu_right'>&nbsp;<input type='radio' name='stage' value='2' id='non' />
									   <label for='non'>Non</label></td>
		</tr>	
		<tr>
			<td id='formu_bottom_left'>&nbsp;&nbsp;Domaine du Stage :</td>
			<td id='formu_bottom_right'>&nbsp;<input type="text" name="dstage" size="30" /></td>
		</tr>
		<tr>
			<td class='formu_envoyer_effacer'><input type="submit" value="Envoyer" /></td>
			<td class='formu_envoyer_effacer'><input type="reset" value="Effacer" /></td>
		</tr>
	</table>
</form>
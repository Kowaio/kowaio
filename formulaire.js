<!--
		function verification(formu)
		{
			// Controle nom
			if (formu.nom.value == '')
			{
              alert('Le nom doit �tre renseign�') ;
              formu.nom.focus() ;
              return false ;
	        }
			
			// Controle prenom
			if (formu.prenom.value == '')
	        {
              alert('Le pr�nom doit �tre renseign�') ;
              formu.prenom.focus() ;
              return false ;
            }
			
			// Controle date de naissance
			if (formu.dtnais.value == '')
	        {
              alert('La date de naissance doit �tre renseign�e') ;
              formu.dtnais.focus() ;
              return false ;
            } 
			
			//---------- verifDatedeNaissance()-----------
			saisie = formu.dtnais.value;
			saisie = (saisie).split("/");
			if ((saisie.length != 3) || isNaN(parseInt(saisie[0])) || isNaN(parseInt(saisie[1])) || 
			     isNaN(parseInt(saisie[2])))
			{	
				alert('Entrez une date de naissance valide (jj/mm/aaaa) !!');
				formu.dtnais.focus();
				return false;
			}
			var laDate = new Date(eval(saisie[2]),eval(saisie[1])-1,eval(saisie[0]));
			var annee = laDate.getYear();
			if ((Math.abs(annee)+"").length < 4) annee = annee + 1900;
			if (!((laDate.getDate() == eval(saisie[0])) && (laDate.getMonth() == eval(saisie[1])-1) && 
			      (annee == eval(saisie[2]))))
			{
				alert('Entrez une date de naissance valide (jj/mm/aaaa) !!');
				formu.dtnais.focus();
				return false;
			}
			
			// Controle adresse
			if (formu.adr.value == '')
	        {
              alert("L' adresse doit �tre renseign�e") ;
              formu.adr.focus() ;
              return false ;
            }
			
			// Controle cdpst
			if (formu.cdpst.value == '')
	        {
              alert('Le code postal doit �tre renseign�') ;
              formu.cdpst.focus() ;
              return false ;
            }
			
			//----- verifCdpst
			codep=formu.cdpst.value;
			if ( ( codep.length != 5 ) || ( isNaN(parseInt(codep)) ) )
			{
				alert('Entrez un code postal valide !!');
				formu.cdpst.focus();
				return false;
			}
			
			// Controle ville
			if (formu.ville.value == '')
	        {
              alert('La ville doit �tre renseign�e') ;
              formu.ville.focus() ;
              return false ;
            }
			
			// Controle telephone
			if (formu.tel.value == '')
	        {
              alert('Le num�ro de t�l�phone doit �tre renseign�') ;
              formu.tel.focus() ;
              return false ;
            }
			
			//----- verifTel
			telep=formu.tel.value;
			if ( ( telep.length != 10 ) || ( isNaN(parseInt(telep)) ) )
			{
				alert('Entrez un num�ro de t�l�phone valide !!');
				formu.tel.focus();
				return false;
			}
			
			// Controle courriel
			if (formu.courriel.value == '')
	        {
              alert('Le courriel doit �tre renseign�') ;
              formu.courriel.focus() ;
              return false ;
            }
			
			//----- verifCourriel
			adresse = formu.courriel.value;
			var place = adresse.indexOf("@",1);
			var point = adresse.indexOf(".",place+1);
			if (!((place > -1)&&(adresse.length >2)&&(point > 1)))
			{
				alert('Entrez une adresse e-mail valide !!');
				formu.courriel.focus();
				return false;
			}	
			
			// Controle niveau
			if (formu.niveau.value == '')
	        {
              alert('Le niveau doit �tre renseign�') ;
              formu.niveau.focus() ;
              return false ;
            } 
			
			// Controle stage oui ou non (radio)
			if (! (formu.stage[0].checked || formu.stage[1].checked))
			{
              alert('La recherche de stage doit �tre renseign�e') ;
              formu.stage[0].focus() ;
              return false ;
			}
			
			// Controle domaine du stage si stage = oui et domaine non renseign�
			if ( formu.stage[0].checked && formu.dstage.value == '')
	        {
              alert('Le domaine du stage doit �tre renseign�') ;
              formu.dstage.focus() ;
              return false ;
            } 
				
			/*si on est l�, tout est OK, */
			return confirm("Confirmez vous l'envoi de ces donn�es ?");
		}
		
		function confirmation()
		{
          return confirm('Vous allez effacer le contenu de votre formulaire\nEtes-vous s�r ?') ;
		}
-->
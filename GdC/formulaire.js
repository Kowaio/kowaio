<!--
		function verification(formu)
		{
			// Controle nom
			if (formu.nom.value == '')
			{
              alert('Le nom doit être renseigné') ;
              formu.nom.focus() ;
              return false ;
	        }
			
			// Controle prenom
			if (formu.prenom.value == '')
	        {
              alert('Le prénom doit être renseigné') ;
              formu.prenom.focus() ;
              return false ;
            }
			
			// Controle login
			if (formu.log.value == '')
	        {
              alert('Le login doit être renseigné') ;
              formu.log.focus() ;
              return false ;
            }
			
			// Controle mdp
			if (formu.mdp.value == '')
	        {
              alert('Le mot de passe doit être renseigné') ;
              formu.mdp.focus() ;
              return false ;
            }
			
			// Controle date de naissance
			if (formu.dtnais.value == '')
	        {
              alert('La date de naissance doit être renseignée') ;
              formu.dtnais.focus() ;
              return false ;
            } 
			
			//---------- verifDatedeNaissance()-----------
			saisie = formu.dtnais.value;
			saisie = (saisie).split("/");
			if ((saisie.length != 3) || isNaN(parseInt(saisie[0])) || isNaN(parseInt(saisie[1])) || 
			     isNaN(parseInt(saisie[2])))
			{	
				alert('Entrez une date de naissance valide sous la forme "jj/mm/aaaa" !');
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
              alert("L' adresse doit être renseignée") ;
              formu.adr.focus() ;
              return false ;
            }
			
			// Controle cdpst
			if (formu.cdpst.value == '')
	        {
              alert('Le code postal doit être renseigné') ;
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
              alert('La ville doit être renseignée') ;
              formu.ville.focus() ;
              return false ;
            }
		
			// Controle courriel
			if (formu.courriel.value == '')
	        {
              alert('Le courriel doit être renseigné') ;
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
			
			/*si on est là, tout est OK, */
			return confirm("Confirmez vous l'envoi de ces données ?");
		}
		
		function confirmation()
		{
          return confirm('Vous allez effacer le contenu de votre formulaire\nEtes-vous sûr ?') ;
		}
-->
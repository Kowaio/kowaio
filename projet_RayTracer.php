<h1 class='titre_presentation'>RayTracer</h1>

<div class='sommaire'>

	<h1 class='titre_projet'>DUT Info</h1>

	<a class="a_projet" href="index.php?nom=projet_PAF">
		Mod�lisation de tissu
	</a>
	<br />
	<a class="a_projet" href="index.php?nom=projet_PGA">
		Visualisation de maillage (OpenGL)
	</a>
	<br />	
	<a class="a_projet" href="index.php?nom=projet_RV">
		Visualisation d'anaglyphes
	</a>
	<br />	
	<a class="a_projet" href="index.php?nom=projet_MR">
		Visualisation 4D d'images m�dicales
	</a>
	<br />	
	<a class="a_projet" href="index.php?nom=projet_DataGlove">
		Applications Dataglove (Stage)
	</a>

	
	<h1 class='titre_projet'>Master Info</h1>

	<a class="a_projet" href="index.php?nom=projet_Viewply">
		Visualisation de maillage (DirectX 9)
	</a>
	<br />	
	<a class="a_projet" href="index.php?nom=projet_SpaceAttack">
		SpaceAttack
	</a>
	<br />	
	<b class='projet_current'>
		RayTracer
	</b>
	<br />	
	<a class="a_projet" href="index.php?nom=projet_TVPaint">
		Applications pour TVPaint (Stage)
	</a>
	<br />
	<!--
	<a class="a_projet" href="index.php?nom=projet_Animalite">
		Animalit� (IA)
	</a>
	<br />
	-->
	<a class="a_projet" href="index.php?nom=projet_Blender">
		Mod�lisation d'une sc�ne (Blender)
	</a>

	
</div>

<div class='contenu_projet'>

	<a class='img_projet' href="/images/projets/RayTracer/fond.png">
	<img class='projet_bann' alt='fond' src="images/projets/RayTracer/fond.png" />
	</a>

	<p class='projet_entete'>
	<b class='u_projet'>D�veloppement</b> : Mars 2009 en partenariat avec Dimitri Lenoble
	</p>
	<p class='projet_entete'>
	<b class='u_projet'>Langage / Biblioth�que</b> : C++ / Qt sous Microsoft Visual Studio
	</p>
	<p class='projet_entete'>
	<b class='u_projet'>Plateforme</b> : Windows
	</p>
	
	<p class='projet_text'>
Un autre projet en Synth�se d'Images pendant notre Master I �tait la r�alisation d'un lancer de rayon.
	</p>
	<p class='presentation_text'>
Le lancer de rayon (ray tracing en anglais) est une technique de rendu en synth�se d'image simulant le parcours inverse de la lumi�re de la sc�ne vers l'oeil. Cette technique simple reproduit les ph�nom�nes physiques que sont la r�flexion (reflet) et la r�fraction (transparence). Contrairement � d'autres algorithmes de synth�se d'image, celui-ci  permet de d�finir math�matiquement les objets � repr�senter tels que les sph�res, les plans etc. Et non pas seulement par une multitude de facettes.
	</p>
	<p class='presentation_text'>
Ainsi, le lancer de rayon consiste, pour chaque pixel de l'image g�n�r�e, � lancer un rayon depuis le point de vue (la cam�ra) dans la sc�ne 3D. Le premier point d'impact du rayon sur un objet d�finit l'objet concern� par le pixel correspondant. Des rayons sont ensuite lanc�s depuis le point d'impact en direction de chaque source de lumi�re pour d�terminer sa luminosit� (est-il �clair� ou � l'ombre d'autres objets ?). Cette luminosit� combin�e avec la couleur de l'objet ainsi que d'autres informations �ventuelles (angles entre la normale � l'objet et les sources de lumi�res, r�flexions, transparence, etc.) d�terminent la couleur finale du pixel.
	</p>
	<p class='presentation_text'>
Cette technique fonctionne exactement � l'inverse de la nature, qui, elle, lance des rayons de lumi�re depuis les sources lumineuses vers l'oeil ou la cam�ra en passant par les objets, alors que le lancer de rayons proc�de de la cam�ra vers les sources de lumi�res. 
	</p>
	<p class='presentation_text'>
Nous avons donc, � l'aide de notre cours de Synth�se d'Images, effectu� tous les calculs - que ce soit pour la g�om�trie, pour le calcul de la lumi�re et donc la gestion des ombres, etc... - afin de r�aliser un lancer de rayon � proprement parler en C++.
	</p>		
	<p class='presentation_text'>
Vous pouvez voir des captures d'�cran de ce programme sur les figures ci-apr�s.
	</p>		

	<a class='img_projet' href="images/projets/RayTracer/RC.png">
	<img class='projet_content' alt='RC' src="images/projets/RayTracer/RC.png" />
	</a>
	<a class='img_projet' href="images/projets/RayTracer/spot.png">	
	<img class='projet_content' alt='spot' src="images/projets/RayTracer/spot.png" />
	</a>
	<a class='img_projet' href="images/projets/RayTracer/RT2.png">	
	<img class='projet_content' alt='RT2' src="images/projets/RayTracer/RT2.png" />
	</a>	
	<a class='img_projet' href="images/projets/RayTracer/RT3.png">	
	<img class='projet_content' alt='RT3' src="images/projets/RayTracer/RT3.png" />
	</a>	
	<a class='img_projet' href="images/projets/RayTracer/RTfog.png">	
	<img class='projet_content' alt='RTfog' src="images/projets/RayTracer/RTfog.png" />
	</a>	
	<a class='img_projet' href="images/projets/RayTracer/RTfog2.png">	
	<img class='projet_content' alt='RTfog2' src="images/projets/RayTracer/RTfog2.png" />
	</a>	
	<a class='img_projet' href="images/projets/RayTracer/ombre.png">	
	<img class='projet_content' alt='ombre' src="images/projets/RayTracer/ombre.png" />
	</a>	
	<a class='img_projet' href="images/projets/RayTracer/RT1.png">	
	<img class='projet_content' alt='RT1' src="images/projets/RayTracer/RT1.png" />		
	</a>	
	<a class='img_projet' href="images/projets/RayTracer/RTQt.png">	
	<img class='projet_content' alt='RTQt' src="images/projets/RayTracer/RTQt.png" />			
	
</div>

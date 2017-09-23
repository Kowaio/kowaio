<h1 class='titre_presentation'>RayTracer</h1>

<div class='sommaire'>

	<h1 class='titre_projet'>DUT Info</h1>

	<a class="a_projet" href="index.php?nom=projet_PAF">
		Modélisation de tissu
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
		Visualisation 4D d'images médicales
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
		Animalité (IA)
	</a>
	<br />
	-->
	<a class="a_projet" href="index.php?nom=projet_Blender">
		Modélisation d'une scène (Blender)
	</a>

	
</div>

<div class='contenu_projet'>

	<a class='img_projet' href="/images/projets/RayTracer/fond.png">
	<img class='projet_bann' alt='fond' src="images/projets/RayTracer/fond.png" />
	</a>

	<p class='projet_entete'>
	<b class='u_projet'>Développement</b> : Mars 2009 en partenariat avec Dimitri Lenoble
	</p>
	<p class='projet_entete'>
	<b class='u_projet'>Langage / Bibliothèque</b> : C++ / Qt sous Microsoft Visual Studio
	</p>
	<p class='projet_entete'>
	<b class='u_projet'>Plateforme</b> : Windows
	</p>
	
	<p class='projet_text'>
Un autre projet en Synthèse d'Images pendant notre Master I était la réalisation d'un lancer de rayon.
	</p>
	<p class='presentation_text'>
Le lancer de rayon (ray tracing en anglais) est une technique de rendu en synthèse d'image simulant le parcours inverse de la lumière de la scène vers l'oeil. Cette technique simple reproduit les phénomènes physiques que sont la réflexion (reflet) et la réfraction (transparence). Contrairement à d'autres algorithmes de synthèse d'image, celui-ci  permet de définir mathématiquement les objets à représenter tels que les sphères, les plans etc. Et non pas seulement par une multitude de facettes.
	</p>
	<p class='presentation_text'>
Ainsi, le lancer de rayon consiste, pour chaque pixel de l'image générée, à lancer un rayon depuis le point de vue (la caméra) dans la scène 3D. Le premier point d'impact du rayon sur un objet définit l'objet concerné par le pixel correspondant. Des rayons sont ensuite lancés depuis le point d'impact en direction de chaque source de lumière pour déterminer sa luminosité (est-il éclairé ou à l'ombre d'autres objets ?). Cette luminosité combinée avec la couleur de l'objet ainsi que d'autres informations éventuelles (angles entre la normale à l'objet et les sources de lumières, réflexions, transparence, etc.) déterminent la couleur finale du pixel.
	</p>
	<p class='presentation_text'>
Cette technique fonctionne exactement à l'inverse de la nature, qui, elle, lance des rayons de lumière depuis les sources lumineuses vers l'oeil ou la caméra en passant par les objets, alors que le lancer de rayons procède de la caméra vers les sources de lumières. 
	</p>
	<p class='presentation_text'>
Nous avons donc, à l'aide de notre cours de Synthèse d'Images, effectué tous les calculs - que ce soit pour la géométrie, pour le calcul de la lumière et donc la gestion des ombres, etc... - afin de réaliser un lancer de rayon à proprement parler en C++.
	</p>		
	<p class='presentation_text'>
Vous pouvez voir des captures d'écran de ce programme sur les figures ci-après.
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

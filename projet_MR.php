<h1 class='titre_presentation'>Visualisation 4D d'images m�dicales</h1>

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
	<b class='projet_current'>
		Visualisation 4D d'images m�dicales
	</b>
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
	<a class="a_projet" href="index.php?nom=projet_RayTracer">
		RayTracer
	</a>
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

	<a class='img_projet' href="images/projets/MR/raycast4D-1.PNG">		
	<img class='projet_bann' alt='raycast4D-1' src="images/projets/MR/raycast4D-1.PNG" />
	</a>

	<p class='projet_entete'>
	<b class='u_projet'>D�veloppement</b> : Avril 2007 en partenariat avec Dimitri Lenoble, J�r�me Baudoux, C�dric Demiere, Quentin Jacquet, Cyril Ledref et Maxime Vetter
	</p>
	<p class='projet_entete'>
	<b class='u_projet'>Langage / Biblioth�que</b> : C++ / OpenGL / ITK / VTK sous Microsoft Visual Studio
	</p>
	<p class='projet_entete'>
	<b class='u_projet'>Plateforme</b> : Windows
	</p>
	
	<p class='projet_text'>
Ce projet a donc �t� effectu� � la fin de notre 2�me semestre de 2�me ann�e � l'IUT de Reims. Il s'agissait � l'origine d'un projet qui avait �t� commenc� en 2005 par 2 �tudiants de Licence Profesionnelle : Fran�ois Couturier et Jonathan Gagnon. 
	</p>
	<p class='presentation_text'>
Le but de ce programme est de pr�senter des outils de visualisation d'images m�dicales afin d'aider les m�decins � effectuer de meilleurs diagnostics. Il s'agit donc d'un programme pouvant �tre utilis� dans un service de radiologie, notamment. 
	</p>	
	<p class='presentation_text'>
Ce projet utilisait donc plusieurs biblioth�ques graphiques afin de permettre le rendu des images m�dicales <b>DICOM</b>. <b>VTK</b> pour <b>V</b>isualization <b>T</b>ool<b>K</b>it et <b>ITK</b> pour <b>I</b>nsight segmentation and registration <b>T</b>ool<b>Kit</b>. Ces 2 biblioth�ques open source en C++ �taient utilis�es afin de rendre et traiter les images <b>DICOM</b>.
	</p>		
	<p class='presentation_text'>
Des textures <b>VTK</b> et <b>OpenGL</b> ainsi qu'un lancer de rayon avaient d�j� �t� impl�ment�s par les 2 �tudiants pr�c�dents. Notre but �tait d'optimiser la qualit� et la vitesse de traitement du volume. De plus, nous devions ajouter un outil <b>LUT</b>, pour <b>L</b>ook-<b>U</b>p <b>Table</b>, pour d�cerner divers d�tails afin d'aider le m�decin � effectuer son diagnostic.
	</p>		
	<p class='presentation_text'>
Vous pouvez voir des captures d'�cran de cette application sur les figures ci-apr�s.
	</p>		

	<a class='img_projet' href="images/projets/MR/rayCast-Volume-1.PNG">		
	<img class='projet_content' alt='rayCast-Volume-1' src="images/projets/MR/rayCast-Volume-1.PNG" />
	</a>
	<a class='img_projet' href="images/projets/MR/LUT.png">			
	<img class='projet_content' alt='LUT' src="images/projets/MR/LUT.png" />
	</a>
	<a class='img_projet' href="images/projets/MR/Volume4D-2.PNG">			
	<img class='projet_content' alt='Volume4D-2' src="images/projets/MR/Volume4D-2.PNG" />
	</a>
	
</div>

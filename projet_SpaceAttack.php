<h1 class='titre_presentation'>SpaceAttack</h1>

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
	<b class='projet_current'>
		SpaceAttack
	</b>
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

	<a class='img_projet' href="images/projets/SpaceAttack/fond.PNG">
	<img class='projet_bann' alt='fond' src="images/projets/SpaceAttack/fond.PNG" />
	</a>	

	<p class='projet_entete'>
	<b class='u_projet'>D�veloppement</b> : Mars 2009 
	</p>
	<p class='projet_entete'>
	<b class='u_projet'>Langage / Biblioth�que</b> : C++ / DirectX 9 sous Microsoft Visual Studio
	</p>
	<p class='projet_entete'>
	<b class='u_projet'>Plateforme</b> : Windows
	</p>
	
	<p class='projet_text'>
Un de nos projets de Master I �tait la r�alisation d'une application avec <b>DirectX 9</b>. Ayant toujours eu envi de cr�er des jeux vid�o, je me suis alors lanc� dans la cr�ation d'un jeu de strat�gie se d�roulant dans l'espace : <i>SpaceAttack</i>.
	</p>
	<p class='presentation_text'>
Ce jeu, est � l'origine un jeu 2D qui a vu le jour sur les syst�mes UNIX. Il s�agissait d�un jeu o�, � tour de r�le, les joueurs devaient envahir les plan�tes d�un syst�me solaire, afin de vaincre son adversaire.
Le m�me principe a �t� repris ici pour Space Attack. Au d�but du jeu, un nombre de plan�tes est g�n�r� al�atoirement. Ceci forme le syst�me. Une plan�te est attribu�e � un joueur. Une autre est attribu�e � un ennemi. Les autres plan�tes sont des plan�tes neutres du syst�me. L�ennemi est repr�sent� par une Intelligence Artificielle.
	</p>
	<p class='presentation_text'>
Le but du jeu, pour le joueur, comme l�ennemi, est de conqu�rir un maximum de plan�tes neutres du syst�me afin de devenir plus fort. En effet, chaque plan�te qu�elle soit neutre ou non, poss�de un nombre d�unit�s. Ce nombre repr�sente le nombre de d�fense de chaque plan�te. Quand un joueur ou un ennemi veut conqu�rir une plan�te neutre, il doit d�abord an�antir toutes les d�fenses de cette plan�te. Lorsque celle-ci ne poss�de plus de d�fenses, la plan�te appartient alors � la faction qui l�a conquise. Le joueur ou l�ennemi peut �galement attaquer son adversaire.
Le joueur peut, en guise de d�fense, faire transiter des vaisseaux d�une plan�te alli�e � une autre, afin de grossir les d�fenses de cette plan�te face aux attaques de l�adversaire. Le jeu s�arr�te quand il ne reste plus qu�une faction sur la carte.
	</p>	
	<p class='presentation_text'>
Concernant la conception de ce projet, celle-ci est constitu� de plusieurs �l�ments. Une gestion des �v�nements clavier et souris a �t� effectu� afin d'y int�grer le <i>Picking</i> pour permettre au joueur de s�lectionner les plan�tes. Une Intelligence Articificielle a �galement �t� mise en place afin de donner un aspect de comp�tition au jeu. Concernant le rendu, celui-ci comporte tous les outils standards de <b>DirectX 9</b>, � savoir la gestion de lampes et de modes de rendu. Des maillages ont �galement �t� charg�s ainsi que des <i>sprites</i> pour les explosions et des textures pour g�n�rer une <i>SkyBox</i> r�pr�sentant l'environnement dans lequel se d�roule le jeu.
	</p>		
	<p class='presentation_text'>
Vous pouvez voir des captures d'�cran de ce jeu sur les figures ci-apr�s.
	</p>		

	<a class='img_projet' href="images/projets/SpaceAttack/screen1.png">
	<img class='projet_content' alt='screen1' src="images/projets/SpaceAttack/screen1.png" />
	</a>
	<a class='img_projet' href="images/projets/SpaceAttack/eclipse.png">	
	<img class='projet_content' alt='eclipse' src="images/projets/SpaceAttack/eclipse.png" />
	</a>
	<a class='img_projet' href="images/projets/SpaceAttack/fog1.jpg">	
	<img class='projet_content' alt='fog1' src="images/projets/SpaceAttack/fog1.jpg" />
	</a>
	<a class='img_projet' href="images/projets/SpaceAttack/SA_Final.png">	
	<img class='projet_content' alt='SA_Final' src="images/projets/SpaceAttack/SA_Final.png" />
	</a>
	
</div>

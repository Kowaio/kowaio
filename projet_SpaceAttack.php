<h1 class='titre_presentation'>SpaceAttack</h1>

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
		Animalité (IA)
	</a>
	<br />
	-->
	<a class="a_projet" href="index.php?nom=projet_Blender">
		Modélisation d'une scène (Blender)
	</a>

	
</div>

<div class='contenu_projet'>

	<a class='img_projet' href="images/projets/SpaceAttack/fond.PNG">
	<img class='projet_bann' alt='fond' src="images/projets/SpaceAttack/fond.PNG" />
	</a>	

	<p class='projet_entete'>
	<b class='u_projet'>Développement</b> : Mars 2009 
	</p>
	<p class='projet_entete'>
	<b class='u_projet'>Langage / Bibliothèque</b> : C++ / DirectX 9 sous Microsoft Visual Studio
	</p>
	<p class='projet_entete'>
	<b class='u_projet'>Plateforme</b> : Windows
	</p>
	
	<p class='projet_text'>
Un de nos projets de Master I était la réalisation d'une application avec <b>DirectX 9</b>. Ayant toujours eu envi de créer des jeux vidéo, je me suis alors lancé dans la création d'un jeu de stratégie se déroulant dans l'espace : <i>SpaceAttack</i>.
	</p>
	<p class='presentation_text'>
Ce jeu, est à l'origine un jeu 2D qui a vu le jour sur les systèmes UNIX. Il s’agissait d’un jeu où, à tour de rôle, les joueurs devaient envahir les planètes d’un système solaire, afin de vaincre son adversaire.
Le même principe a été repris ici pour Space Attack. Au début du jeu, un nombre de planètes est généré aléatoirement. Ceci forme le système. Une planète est attribuée à un joueur. Une autre est attribuée à un ennemi. Les autres planètes sont des planètes neutres du système. L’ennemi est représenté par une Intelligence Artificielle.
	</p>
	<p class='presentation_text'>
Le but du jeu, pour le joueur, comme l’ennemi, est de conquérir un maximum de planètes neutres du système afin de devenir plus fort. En effet, chaque planète qu’elle soit neutre ou non, possède un nombre d’unités. Ce nombre représente le nombre de défense de chaque planète. Quand un joueur ou un ennemi veut conquérir une planète neutre, il doit d’abord anéantir toutes les défenses de cette planète. Lorsque celle-ci ne possède plus de défenses, la planète appartient alors à la faction qui l’a conquise. Le joueur ou l’ennemi peut également attaquer son adversaire.
Le joueur peut, en guise de défense, faire transiter des vaisseaux d’une planète alliée à une autre, afin de grossir les défenses de cette planète face aux attaques de l’adversaire. Le jeu s’arrête quand il ne reste plus qu’une faction sur la carte.
	</p>	
	<p class='presentation_text'>
Concernant la conception de ce projet, celle-ci est constitué de plusieurs éléments. Une gestion des événements clavier et souris a été effectué afin d'y intégrer le <i>Picking</i> pour permettre au joueur de sélectionner les planètes. Une Intelligence Articificielle a également été mise en place afin de donner un aspect de compétition au jeu. Concernant le rendu, celui-ci comporte tous les outils standards de <b>DirectX 9</b>, à savoir la gestion de lampes et de modes de rendu. Des maillages ont également été chargés ainsi que des <i>sprites</i> pour les explosions et des textures pour générer une <i>SkyBox</i> réprésentant l'environnement dans lequel se déroule le jeu.
	</p>		
	<p class='presentation_text'>
Vous pouvez voir des captures d'écran de ce jeu sur les figures ci-après.
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

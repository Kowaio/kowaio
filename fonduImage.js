			var currentPhoto = 0;
			var secondPhoto = 1;
			var currentOpacity = new Array();
			var imageArray = new Array("images/new_bann.png","images/bann.png","images/bann_ancien.png");
									 //  "./images/thezone6.jpg","./images/thezone7.jpg","./images/thezone8.jpg","./images/thezone9 .jpg","./images/thezone10.jpg");
			var FADE_STEP = 2;
			var FADE_INTERVAL = 10;
			var pause = false;

			//stocke si oui(1)  ou non(0) l'indice du tableau déja sélectionné.
			var ArrayIn = new Array();
			for(i=0;i<imageArray.length;i++) ArrayIn[i]="0";

			init();

			//Retourne un nombre aléatoire non déja choisi
			function randomNumber()
			{
				var result = ((Math.round(((Math.random())*imageArray.length)))%imageArray.length);

				while (ArrayIn[result] == 1) 
					result = ((Math.round(((Math.random())*imageArray.length)))%imageArray.length);

				ArrayIn[result] = 1;
				return result;
			}

			function init() 
			{
				currentOpacity[0]=99;

				for(i=1;i<imageArray.length;i++)
					currentOpacity[i]=0;

				mHTML="";

				for(i=0;i<imageArray.length;i++)
					mHTML+="<div id=\"photo\" name=\"photo\" class=\"mPhoto\"><img src =\"" + imageArray[randomNumber()]  +"\"></div>";

				document.getElementById("").innerHTML = mHTML;

				if(document.all) 
				{
					document.getElementsByName("photo")[currentPhoto].style.filter="alpha(opacity=100)";
				} 
				else 
				{
					document.getElementsByName("photo")[currentPhoto].style.MozOpacity = .99;

				}

				mInterval = setInterval("crossFade()",FADE_INTERVAL);
			}

			function crossFade() 
			{
				if(pause)return;
				currentOpacity[currentPhoto]-=FADE_STEP;
				currentOpacity[secondPhoto] += FADE_STEP;
				if(document.all) 
				{
					document.getElementsByName("photo")[currentPhoto].style.filter = "alpha(opacity=" + currentOpacity[currentPhoto] + ")";

					document.getElementsByName("photo")[secondPhoto].style.filter = "alpha(opacity=" + currentOpacity[secondPhoto] + ")";

				} 
				else 
				{
					document.getElementsByName("photo")[currentPhoto].style.MozOpacity = currentOpacity[currentPhoto]/100;
					document.getElementsByName("photo")[secondPhoto].style.MozOpacity =currentOpacity[secondPhoto]/100;
				}
				
				if(currentOpacity[secondPhoto]/100>=.98) 
				{
					currentPhoto = secondPhoto;
					secondPhoto++;
					
					if(secondPhoto == imageArray.length)
						secondPhoto=0;

					pause = true;
					xInterval = setTimeout("pause=false",3500);
				}
			}
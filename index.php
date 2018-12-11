<!DOCTYPE html>
<html>

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>WEBBE</title>
	<!-- <link rel="stylesheet" href="styles/style.css"> -->
	<link rel="stylesheet" media="screen and (min-width: 641px)" href="styles/ostyle.css" type="text/css" />
	<link rel="stylesheet" media="screen and (max-width: 640px)" href="styles/mstyle.css" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
	 rel="stylesheet">
	<link rel="icon" type="image/png" href="img/logo.png" />

</head>

<body onload="demarrage()">
	<div class="all">
		<!--*****************************************************************************-->
		<!--*****************************************************************************-->
		<!--*******************************PAGE DE DEBUT*********************************-->
		<!--*****************************************************************************-->
		<!--*****************************************************************************-->
		<div id="pdd">


			<div id="background-pdd">

				<img src="img/logo.svg" id="logo" onclick="animation()">

				<p id="text" onclick="animation()">Clique ici !</p>

				<img src="img/fleche.svg" id="fleche" onclick="animation()">

			</div>
		</div>
		<!--*****************************************************************************-->
		<!--*****************************************************************************-->
		<!--***********************************HEADER************************************-->
		<!--*****************************************************************************-->
		<!--*****************************************************************************-->
		<div class="p1">
			<div id="ancre-debut"></div>
			<?php include ("header.php") ?>

			<!--*****************************************************************************-->
			<!--*****************************************************************************-->
			<!--**********************************CONTENU************************************-->
			<!--*****************************************************************************-->
			<!--*****************************************************************************-->

			<!--***********************************-->
			<!-- PARTIE 1 SLOGAN + RESEAUX SOCIAUX -->
			<!--***********************************-->

			<div id="fleche-retour">
				<a href="#ancre-debut"><img src="img/fleche.svg" id="fleche-r"></a>
			</div>

			<div id="backgroundcontainer" class="filtre-bleu">
				<div>
					<div id="colbase">

						<h1>
							DÉVELOPPEZ <br> LE WEB À VOTRE <br> <span style="color: #FF5729;">IMAGE !</span>
						</h1>

						<h2 style="color: #F5F2DC;">Faites confiance au fantôme pour créer votre site internet !</h2>

					</div>

					<!-- LIEN RESEAU SOCIAUX -->

					<a href=""><img src="img/facebook.png" id="reseau-1"></a>
					<a href=""><img src="img/twitter.png" id="reseau-2"></a>
					<a href=""><img src="img/youtube.png" id="reseau-3"></a>


				</div>
			</div>
		</div>
		<!--***********************************-->
		<!--         PARTIE 2 SERVICES         -->
		<!--***********************************-->
		<div id="p2">
			<div id="ancre-service"></div>
			<!--ANCRE SERVICES-->

			<div class="col100full">
				<div id="col100">

					<h2 id="service-titre" style="z-index: 2;">SERVICES</h2>

					<!-- CREATION VISUELLE -->

					<div class="services" id="col33" style="z-index: 3">
						<div><img src="img/icon1.svg"></div>

						<h3>IDEES</h3>

						<p>Nous créons de A à Z votre site web, en suivant votre vison au maximum tout en ajoutant notre savoir-faire et
							en nous démarquant, que ce soit du codage du site ou de la rédaction en passant par l’aspect visuel. </p>

					</div>

					<!-- CREATION VISUELLE -->

					<div class="services" id="col33" style="z-index: 3">
						<div><img src="img/icon3.svg"></div>

						<h3>REFERENCEMENT</h3><br>

						<p>Faites-nous confiance pour rendre votre site internet le plus visible et réputé du secteur, pour que le web
							soit un véritable atout dans votre entreprise et vos projets.</p><br>

					</div>

					<!-- CREATION VISUELLE -->

					<div class="services" id="col33">
						<div><img src="img/icon2.svg"></div>

						<h3>MAINTENANCE</h3>

						<p>Une fois le site mis en ligne, notre travail ne s’arrête pas là. Nous nous chargeons en effet de veiller sur
							votre site, de corriger les problèmes potentiels et de vous tenir au courant d’éventuelles mises à jour.</p>

					</div>

				</div>
			</div>
		</div>
		<!--***********************************-->
		<!--           PARTIE 3 BLOG           -->
		<!--***********************************-->
		<div id="p3">
			<div id="crea"></div>
			<!--ANCRE CREATION-->
			<div id="contprinc" onclick="supprimer()">

				<div id="cont1">
					<a href="" id="blog-tag" style="color: black;">PATRICK ANDREE</a>
				</div>
				<div id="cont2">
					<a href="" id="blog-tag" style="color: black;">ACROMEDIA</a>
				</div><br>
				<div id="cont3">
					<a href="" id="blog-tag" style="color: white;">EQUI-POIL</a>
				</div>
				<div id="cont4">
					<a href="" id="blog-tag" style="color: black;">CANISHOP</a>
				</div>

			</div>
		</div>
		<!--***********************************-->
		<!--           PARTIE 4 ABOUT          -->
		<!--***********************************-->
		<div id="p4">
			<div id="ancre-about"></div> <!-- ANCRE ABOUT -->

			<div id="full" class="filtre-blanc" onclick="agrandir(this)">

				<!-- <div class="fullscreen-bg">
					<video loop muted autoplay poster="video/video_presentation_webbe.mp4" class="fullscreen-bg__video" id="videof">
						<source src="video/video_presentation_webbe.mp4" type="video/mp4">
					</video>
				</div> -->

				<div id="video">

				</div>


				<div id="col100">

					<h2 id="service-titre">ABOUT</h2>


					<img src="img/logoWebbe.svg" id="logo-pre">


					<div id="presentation-entre">
						<p>Bienvenue sur notre site Web ! Nous sommes 4 amis basés à Mulhouse s'étant rencontrés pendant notre DUT, et
							nous avons décidé de collaborer pour créer notre agence. Notre groupe est très polyvalent, nous avons en effet
							chacun notre petit rôle dans lequel nous sommes passionnés, et nous allons vous les présenter. Codage,
							infographie, rédaction, tout un éventail de domaines que l'on vous offre dans nos prestations, en restant à
							l'écoute de votre projet, de vos idées et en vous proposant notre touche personnelle.</p>
					</div>


					<!-- MAXIME CAVERIVIERE -->

					<div class="about" id="col25">
						<div><img src="img/tete4.png" style="width: 100%"></div> <!-- photo -->

						<h3 style="color: #454445">MAXIME CAVERIVIERE</h3>

						<p style="color: #454445">Créatif et passionné par me multimédia depuis tout petit, ce choix de carrière et de
							formation était une évidence pour moi. Les journées ne se ressemblent jamais et chaque demande étant unique,
							elles représentent toutes un nouveau défis.</p>

						<a href="http://www.maxime-caveriviere.fr">Son portfolio</a> <!-- portfolio -->
					</div>

					<!-- BASTIEN ORLANDINI -->

					<div class="about" id="col25">
						<div> <img src="img/tete3.png" style="width: 100%"></div> <!-- photo -->

						<h3 style="color: #454445">BASTIEN ORLANDINI</h3>

						<p>Je suis l’infographiste au sein de l’agence WEBBE. C’est moi qui crée les logos, les chartes graphiques et
							certains aspects visuels des sites de nos clients. Pour ça, j’utilise essentiellement les outils de dessin ou
							représentation graphique sur ordinateur. </p>

						<a href="http://www.bastienorlandini.fr">Son portfolio</a> <!-- portfolio -->
					</div>

					<!-- YANN LEHE -->

					<div class="about" id="col25">
						<div><img src="img/tete1.png" style="width: 100%"></div> <!-- photo -->

						<h3 style="color: #454445">YANN LEHE</h3>

						<p style="color: #454445">Passionné par le web et le multimédia, j’ai décidé de poursuivre dans cette voie et
							d’en
							faire ma carrière. En effet, je suis le rédacteur web du site internet Webbe, je suis chargé d’écrire les divers
							articles et de rédiger de manière générale le contenu de ce dernier.</p>

						<a href="http://www.yannlehe.fr">Son portfolio</a> <!-- portfolio -->
					</div>

					<!-- THIMOTHE PORTELLI -->

					<div class="about" id="col25">
						<div><img src="img/tete2.png" style="width: 100%"></div> <!-- photo -->

						<h3 style="color: #454445">TIMOTHE PORTELLI</h3>

						<p>Depuis tout petit j'aime crée des histoires et les mettre en scène c'est pourquoi j'ai toujours voulu devenir
							responsable des médias. Aujourd'hui chez webbe, je peux créer des pubs pour les clients tout en donnant à
							celle-ci des âmes artistique. </p>

						<a href="http://www.timotheportelli.fr">Son portfolio</a> <!-- portfolio -->
					</div>

				</div>

			</div>
		</div>
		<!--***********************************-->
		<!--         PARTIE 5 CONTACT          -->
		<!--***********************************-->
		<div id="p5">
			<div id="contact-page"></div>
			<!--ANCRE CONTACT-->
			<div id="colfull" onclick="supprimer()">

				<!-- INFORMATIONS ENTREPRISES -->

				<div class="contact backform" id="col50" style="height: 720px;">
					<h3>WEBBE.</h3>
					<div id="textinfo">
						<p><b>IUT de Mulhouse</b><br>68200 Mulhouse<br>61 Rue Albert Camus</p>
						<p><b>contact@webbe.com</b></p>
						<p><b>07 25 48 79 62</b></p>
					</div>

					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3191.330006869563!2d7.299506106509935!3d47.73143973072612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x450c137065789ac3!2sIUT+de+Mulhouse!5e0!3m2!1sfr!2sfr!4v1527664356254"
					 width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>

				<!-- FORMULAIRE DE CONTACT -->

				<div class="contact" id="col50" style="height: 720px;">

					<h2 id="contact-titre1">NOUS</h2>

					<h2 id="contact-titre2">CONTACTER</h2>

					<h2>Nous contacter</h2>

					<form>
						<input type="text" name="" placeholder="Nom / Prénom"><br>

						<input type="text" name="" placeholder="Nom de l'entreprise"><br>

						<input type="text" name="" placeholder="Adresse mail"><br>

						<textarea placeholder="Message"></textarea><br>

						<input type="submit" name="" value="Envoyer">
					</form>

				</div>

			</div>
		</div>

		<div id="footer">

			<?php include ("footer.php") ?>
		</div>
	</div>





	<script>
		if (window.innerWidth > 641) {
			function animation() {

				var fond = document.getElementById('background-pdd');
				var logo = document.getElementById('logo');
				var fleche = document.getElementById('fleche');
				var text = document.getElementById('text');
				var apparetour = document.getElementById('fleche-r');

				fond.style.minHeight = "0vh";

				logo.style.width = "0px";
				logo.style.height = "0px";
				logo.style.opacity = "0";
				logo.style.transition = "1.5s"

				fleche.style.width = "0px";
				fleche.style.height = "0px";
				fleche.style.marginTop = "0px"
				fleche.style.opacity = "0";
				fleche.style.transition = "1.5s"

				text.style.fontSize = "0px";
				text.style.marginTop = "0px";
				text.style.transition = "1.5s";
				text.style.opacity = "0";

				apparetour.style.opacity = "1";
			}

			function demarrage() {

				var fond = document.getElementById('background-pdd');
				var logo = document.getElementById('logo');
				var fleche = document.getElementById('fleche');
				var text = document.getElementById('text');

				logo.style.opacity = "1";

				text.style.opacity = "1";

				fleche.style.opacity = "1";

				logo.animationName = "slideback";



			}

			function agrandir() {

				var video = document.getElementById('video');

				video.innerHTML =
					"<video src=\"video/video_presentation_webbe.mp4\" style:\"z-index: 100\" controls=\"controls\"height=\"600px\" style=\"top: 200px\" autoplay></video>";

				video.style.opacity = "1";

				var videofond = document.getElementById('videof');
				videofond.pause();
			}

			function supprimer() {

				var video = document.getElementById('video');

				video.innerHTML =
					"<video src=\"\" style:\"z-index: -100\" controls=\"\"height=\"0px\" style=\"top: 0px\" onblur=\"supprimer()\"></video>";

				video.style.opacity = "0";

				var videofond = document.getElementById('videof');

				videofond.play();

			}
		}
	</script>
</body>

</html>
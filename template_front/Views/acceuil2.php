<?php
session_start();
?>
<!DOCTYPE HTML>
<html>

	<head>
		<title>PHPJabbers.com | Free Blog Website Template</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
				<header id="header" class="alt">
					<a href="index.html" class="logo"><img src="images/logo.png"  /></a>
					<nav>
						<a href="#menu">Menu</a>
					</nav>
				</header>

				<!-- Menu -->
				<nav id="menu">
				<ul class="links">
					<li class="active"> <a href="acceuil.php">Acceuil </a> </li>

					<li > <a href="addreservation.php">Reservation</a> </li>

					<li> <a href="about-us.html">Catégorie</a> </li>

					<li> <a href="afficherListeEvenements.php">Evenement</a> </li>

					<li><a href="afficherassociationf.php">Association</a></li>
				</ul>
			</nav>

  
				<!-- Banner -->
					<section id="banner" class="major">
						<div class="inner">
							<header class="major">
								 <h1>WELCOME <?php echo $_SESSION['nom'];?>
								<?php echo $_SESSION['prenom'];?>  
								</h1>
							</header>
							<div class="content">
								<p>commencez a troquer!cest tres simple et efficace sans ituliser de la mannaie reelle</p>
								<ul class="actions">
									<li><a href="#" class="button next scrolly">log out</a></li>
									onsubmit
								</ul>
							</div>
						</div>
					</section>

				<!-- Main -->
					<div id="main">
							<!-- About us -->
							<section>
								<div class="inner">
									<header class="major">
										<h2>TETDALLEL</h2>
									</header>
									<p>Tetdallel est un nouveau remède contre le coût de la vie qui vous permettra de réduire les surconsommations, ,d'élargir la notion du troc et d'assiter à la renaissance des objets
Par conséquent, vous êtes un consommateur actif capable de mener un style de consommation bien planifié.</p>
									<ul class="actions">
										
									</ul>
								</div>
							</section>

							<!-- Blog Posts -->
							<section class="tiles">
								<article>
									<span class="image">
										<img src="images/captur.PNG" alt="" />
									</span>
									<header class="major">
										<h3>CONTACTEZ NOUS</h3>

										<p><br> <span>tel:123456789</span> | <span>mail:tetdalle@gmail.com</span> | <span>facebook tetdallel</span></p>

										<div class="major-actions">
											
										</div>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/capture.PNG" alt="" />
									</span>
									<header class="major">
										<h3>FAIRE DES DONS</h3>

										<p>Nous vous proposons un espace pour faire des dons et même pour choisir votre distanation  nous avons une liste d'associations à votre disposition.

										 
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/bike.PNG" alt="" />
									</span>
									<header class="major">
										<h3> NOS EVENEMENTS </h3>

										<p>Nous vous organisons des événements sportifs, tels que des matchs de football et du tennis, des marathons et des randonnées à vélo juste pour vous aider à briser la routine et à sortir des décombres quotidiens.. </p>

										 
									</header>
								</article>

				<!-- Footer -->
				<footer id="footer">
					<div class="inner">
						<ul class="icons">
							<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
						</ul>
					
					</div>
				</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
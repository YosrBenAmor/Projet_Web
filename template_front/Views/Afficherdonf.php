<?php
include '../Controller/donsC.php';
$donC = new donC();
$list = $donC->listdon();
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>PHPJabbers.com | Free Blog Website Template</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="assets/css/main.css"/>
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
				<header id="header" class="alt">
					<a href="index.html" class="logo"><img src="images/logo.png"  /></a>
					<nav>
						<a href="Afficherdonf.php">Dons<a>
						<a href="#menu">Menu</a>
					</nav>
				</header>

				<!-- Menu -->
				<nav id="menu">
				<ul class="links">
					<li > <a href="acceuil.php">Acceuil </a> </li>

					<li > <a href="addreservation.php">Reservation</a> </li>

					<li> <a href="about-us.html">Catégorie</a> </li>

					<li> <a href="afficherListeEvenements.php">Evenement</a> </li>

					<li class="active"><a href="afficherassociationf.php">Association</a></li>
				</ul>
			</nav>

				<!-- Main -->
				<div id="main" class="alt">

					<!-- One -->
						<section id="one">
							<div class="inner">
								<header class="major">
									<h4>LES DONS FAITS</h4>
								</header>
                                <thead>
                                                
                                                <?php
                                                foreach ($list as $don) 
                                                {
                                                ?>
						<div class="card-body text-center"><th class="card-body text-center"></th><img src="images/<?php echo $don['img_don']; ?>  "  width="300"    height="250"></div>
        <div class="card-body text-center"><th class="card-body text-center">NOM DU DON : </th><?php echo $don['nom_don']; ?></div>
         <div class="card-body text-center"><th class="card-body text-center">VOTRE NUMÉRO : </th><?php echo $don['num_tel']; ?></div>
         <div class="card-body text-center"><th class="card-body text-center">VOTRE ÉMAIL :</th><?php echo $don['email_don']; ?></div>
         <div class="card-body text-center"><button class="btn btn-warnig"><a href="deletedon.php?id_don=<?PHP echo $don['id_don']; ?>">Supprimer</span></a></i></button>
		 <div class="card-body text-center"><button class="btn btn-warnig"><a href="updatedon.php?id_don=<?PHP echo $don['id_don']; ?>">Modifier</span></a></i></button>
                                              <br>
                                              <hr>
                                              <br>
                                                <?php
                                                }
                                                 ?>
                                              
                                              <br>
                                              <br>
                                </thead>
								
								

									
									

							</div>
						</section>

				</div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
    

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<ul class="icons">
								<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
							</ul>
							
							<ul class="copyright">
								<li>Copyright © 2020 Company Name - Template by:</li>
								<li> <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></li>
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
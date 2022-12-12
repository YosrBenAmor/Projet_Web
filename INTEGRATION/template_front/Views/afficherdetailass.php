<?php
include '../Controller/associationC.php';
$associationC = new associationC();
$list = $associationC->listassociation();
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
						<a href="Afficherdonf.php?id=<?php  echo $_SESSION['id']; ?>">Dons<a>
						<a href="#menu">Menu</a>
					</nav>
				</header>

				<!-- Menu -->
				<nav id="menu">
				<ul class="links">
					<li > <a href="acceuil.php">Acceuil </a> </li>

					<li > <a href="addreservation.php">Reservation</a> </li>

					<li> <a href="front.php">Catégorie</a> </li>

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
									<h4>LES ASSOCIATIONS PROPOSÉES</h4>
								</header>
                                <thead>
                                                
                                                <?php
                                                foreach ($list as $association) 
                                                {
                                                ?>
			<div class="card-body text-center"><th class="card-body text-center"></th> <img src="images/<?php echo $association['img_ass']; ?>  "  width="250"    height="250"></div>
        <div class="card-body text-center"><th class="card-body text-center">NOM D'ASSOCIATION : </th><?php echo $association['nom_ass']; ?></div>
         <div class="card-body text-center"><th class ="card-body text-center"> DATE DE FONDATION :<?php echo $association['datefondation']; ?></div>                                             
         <div class="card-body text-center"><th class="card-body text-center">OBJECTIF D'ASSOCIATION :</th><?php echo $association['objectif_ass']; ?></div>
         <div class="card-body text-center"><th class="card-body text-center">ADRESSE D'ASSOCIATION : </th><?php echo $association['adresse_ass']; ?></div>
         <div class="card-body text-center"><th class="card-body text-center">NUMÉRO D'ASSOCIATION : </th><?php echo $association['num_ass']; ?></div>
         <div class="card-body text-center"><th class="card-body text-center">NOMBRE DE POINTS :</th><?php echo $association['nbpt_ass']; ?></div>
         <div class="card-body text-center"><th class="card-body text-center">ÉMAIL D'ASSOCIATION :</th><?php echo $association['email_ass']; ?></div>
         <div class="card-body text-center"><button class="btn btn-warnig"><a href="Ajouterdon.php?id_ass=<?php echo $association['id_ass'];?>&id=<?php  echo $_SESSION['id']; ?>" >Faire Don</a></div>
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
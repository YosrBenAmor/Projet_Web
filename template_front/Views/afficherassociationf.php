<?php
include '../Controller/associationC.php';
$associationC = new associationC();
$list = $associationC->listassociation();
$liste = $associationC->listassociation();
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
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<style>
#show_up{
    width: 200px;
    height: 200px;
    border: 1px solid #ddd;
    display: none;
}
#show_up a{
    border-bottom: 1px solid #ddd;
    display: block;
    padding: 5px;
}
</style>
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
					<li> <a href="acceuil.php">Acceuil </a> </li>

					<li > <a href="addreservation.php">Reservation</a> </li>

					<li> <a href="about-us.html">Catégorie</a> </li>

					<li> <a href="afficherListeEvenements.php">Evenement</a> </li>

					<li  class="active"><a href="afficherassociationf.php">Association</a></li>
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
                                                foreach ($list as $association) {
                                                ?>
                                                
                                        <img src="images/<?php echo $association['img_ass']; ?>  "  width="300"    height="250">
                                                
                                         
                                                <?php
         }
		
        ?>
		<br>
		<br>
                                                <?php
                                                foreach ($liste as $association) {
                                                ?>
<?php echo "|||||||||||||||||||||||||||".$association['nom_ass']."||||||||||||"."|||||||||||||"; ?>

            
                                                   <?php
         }
        ?>
		<br>
		<br>
		<br>
		
		<div class="col-md-3 col-sm-6 co-xs-12 text-center">  <a href="afficherdetailass.php">Voir les détails</a> </div>
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
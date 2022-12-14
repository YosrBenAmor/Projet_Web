<?php

$id1= $_SESSION['id'] = 7;
$_SESSION['phonenumber'] = "99450529";
include_once "../model/reservation.php";
include_once '../controller/reservationC.php';
$error = "";


// create reservation
$reservation = null;

// create an instance of the controller
$reservationC = new reservationC();
if (
	isset($_POST["firstName"]) &&
	isset($_POST["lastName"]) &&
	isset($_POST["address"]) &&
	isset($_POST["phonenumber"])  && 
	isset($_POST["reff"])
	
) {
	if (
		!empty($_POST['firstName']) &&
		!empty($_POST["lastName"]) &&
		!empty($_POST["address"]) &&
		!empty($_POST["phonenumber"]) &&
		$_POST['phonenumber'] == $_SESSION['phonenumber']&&
		!empty($_POST["reff"])
	    

	) {

		$reservation = new reservation(
			
			$_POST['firstName'],
			$_POST['lastName'],
			$_POST['address'],
			$_POST['phonenumber'],
			$_POST['reff'],
			$id1

		);

		$reservationC->addreservation($reservation);
		header('Location: afficherListereservation.php');
	} else
		$error = "Missing information";
}


?>
<!DOCTYPE HTML>
<html>
<head>
	<title>PHPJabbers.com | Free Blog Website Template</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" />
	</noscript>
	<style>
.newspaper {
  column-count: 3;
  column-gap: 40px;
}
</style>


</head>

<body class="is-preload" bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF">


<table cellpadding="2" width="100%">
	<tr>

		 
		<form method="POST">
		<br><br><br>
			<div class="container">
				<div style="text-align:center">
					<h2>Votre réservation</h2>
					
				</div>
				<div class="row">

					<div class="column">

						<label for="fname">Prénom</label>
						<input type="text" id="firstname" name="firstName" placeholder="Prénom"><br><br>
						<label for="lname">Nom</label>
						<input type="text" id="lastname" name="lastName" placeholder="Nom">
						<label for="reff">Référence</label><br>
						<input type="text" id="reff" name="reff"  ><br>
						<label for="phonenumber">Téléphone</label><br>

						<input type="text" id="phonenumber" name="phonenumber" placeholder="+216 12-345-678"><br><br>
						<label for="address">Adresse</label><br>
						<textarea id="address" name="address" placeholder="city , Quartier , rue , num de la maison.." style="height:170px"></textarea><br>


						<!--<input type="submit" value="envoyer"><br>
						<button><a href="afficherListereservation.php">Retour à la liste des reservations</a></button>
						<hr>-->
						<form action="mail.php" method="post">
    <textarea name="texte" rows="10" cols="60"></textarea><br>
    <button name="submit" value="envoyer" class="w3-button w3-green" onclick="move()">Envoyer</button>
	<button><a href="afficherListereservation.php">Retour à la liste des réservations</a></button>
	<button><a href="resulat.php">La réponse</a></button>
	

		</form>
		</div>
		</div>
		</div>

		 

	
		<div class="row">
		<div class="newspaper">
			 
		</div>

		<!-- Wrapper -->
		<div id="wrapper">

			<!-- Header -->
			<header id="header" class="alt">
				<a  class="logo"><img src="images/logo.png" /></a>
				<?php echo $_SESSION['nom'];?> 
					<?php echo $_SESSION['prenom'];?> 
					 
				<nav>
				
				<a href="profile.php" >Profile<a>
						<a href="#menu">Menu</a>
				</nav>
			</header>

			<!-- Menu -->
			<nav id="menu">
				<ul class="links">
					<li > <a href="acceuil2.php">Acceuil </a> </li>

					<li> <a href="front.php">Catégorie</a> </li>

					<li class="active"> <a href="addreservation.php">Reservation</a> </li>

					<li > <a href="adddemande.php">Demande</a> </li>

				
					<li> <a href="afficherListeEvenements.php">Evenement</a> </li>

					<li><a href="afficherassociationf.php">Association</a></li>
				</ul>
			</nav>
			<!-- Main -->
			<div id="main" class="alt">

				<!-- One -->
				<section id="one">
					<div class="inner">
						
					</div>
				</section>

				

			</div>

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
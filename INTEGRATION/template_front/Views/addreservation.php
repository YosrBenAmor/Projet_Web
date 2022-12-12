<?php
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
	isset($_POST["phonenumber"]) &&
	isset($_POST["reff"])
) {
	if (
		!empty($_POST['firstName']) &&
		!empty($_POST["lastName"]) &&
		!empty($_POST["address"]) &&
		!empty($_POST["phonenumber"]) &&
		!empty($_POST["reff"])

	) {

		$reservation = new reservation(
			
			$_POST['firstName'],
			$_POST['lastName'],
			$_POST['address'],
			$_POST['phonenumber'],
			$_POST['reff']

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



</head>

<body class="is-preload" bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF">


<table cellpadding="2" width="100%">
	<tr>

		



		<form method="POST">
		
			<div class="container">
				<div style="text-align:center">
					<h2>Votre Reservation</h2>
					<p>Même les objets peuvent refaire leur vie</p>
				</div>
				<div class="row">

					<div class="column">

						<label for="fname">NOM:</label>
						<input type="text" id="firstname" name="firstName" placeholder=" VOTRE NOM.."><br> 
						<label for="lname">PRENOM:</label>
						<input type="text" id="lastname" name="lastName" placeholder="VOTRE PRENOMe.."><br> 
						<label for="reff">REFFERENCE:</label> 
						<input type="text" id="reff" name="reff"  ><br>
						<label for="phonenumber">NUMERO:</label> 

						<input type="text" id="phonenumber" name="phonenumber" ><br> 
						<label for="address">ADRESSE:</label><br>
						<textarea id="address" name="address" placeholder="cité , quartier , rue , num de la maison.." style="height:170px"></textarea><br>

						<form action="mail.php" method="post">
    <textarea name="texte" rows="10" cols="60"></textarea><br>
    <button name="submit" value="envoyer" class="w3-button w3-green" onclick="move()">Click Me</button>

		</form>
		</div>
		</div>
		</div>

		<map name="workmap">
			<area shape="rect" coords="34,44,270,350" alt="Computer" href="logo.PNG">

		</map>
		<!--<img src="logo.PNG" alt="tetdalel"  width="200" height="100" ">
<map name="workmap">
    <area shape="rect" coords="34,44,270,350" alt="Computer" href="logo.PNG" -->

		  
		<!-- Wrapper -->
		<div id="wrapper">

			<!-- Header -->
			<header id="header" class="alt">
				<a href="index.html" class="logo"><img src="images/logo.png" /></a>
				<nav>
					<a href="#menu">Menu</a>
				</nav>
			</header>

			<!-- Menu -->
			<nav id="menu">
				<ul class="links">
					<li > <a href="acceuil.php">Acceuil </a> </li>

					<li class="active"> <a href="addreservation.php">Reservation</a> </li>

					<li> <a href="front.php">Catégorie</a> </li>

					<li> <a href="afficherListeEvenements.php">Evenement</a> </li>

					<li><a href="afficherassociationf.php">Association</a></li>
				</ul>
			</nav>

			<!-- Main -->
 

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
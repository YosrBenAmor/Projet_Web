<?php

$id2= $_SESSION['id'] = 4;
$_SESSION['email'] = "aa@gmail.com";
include_once "../model/demande.php";
include_once '../controller/demandeC.php';
$error = "";

// create demande
$demande = null;

// create an instance of the controller
$demandeC = new demandeC();
if (
	isset($_POST["name"]) &&
	isset($_POST["mdp"]) &&
	isset($_POST["email"]) &&
	isset($_POST["reffd"]) &&
	isset($_POST["telp"])&&
	isset($_POST["status"])

) {
	if (
		!empty($_POST['name']) &&
		!empty($_POST["mdp"]) &&
		!empty($_POST["email"]) &&
		$_POST['email'] == $_SESSION['email'] && 
		!empty($_POST["reffd"]) &&
		!empty($_POST["telp"])&&
		!empty($_POST["status"])
		


	) {

		$demande = new demande(

			$_POST['name'],   
			$_POST['mdp'],
			$_POST['email'],
			$_POST['reffd'],
			$_POST['telp'],
			$_POST['status'],
			$id2

		);
                            
		$demandeC->adddemande($demande);
		//header('Location: afficherListedemande.php');
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
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<style>
  .error{
    color: red;
}
</style>

<script type="text/javascript" src="controle.js"></script>
	</head>
	<body class="is-preload">
	
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
				<header id="header" class="alt">
					<a   class="logo"><img src="images/logo.png"  /></a>
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

					<li > <a href="addreservation.php">Reservation</a> </li>

					<li class="active"> <a href="adddemande.php">Demande</a> </li>

				
					<li> <a href="afficherListeEvenements.php">Evenement</a> </li>

					<li><a href="afficherassociationf.php">Association</a></li>
				</ul>
			</nav>

				<!-- Main -->
					<div id="main" class="alt">

						<!-- One -->
							<section id="one">
								<div class="inner">
									<header class="major">
										<h1>Votre Demande</h1>
									</header>
									 
								</div>
							</section>

					</div>

				<!-- Contact -->
					<section id="contact">
						<div class="inner">
							<section>
								 
								<fieldset>
								<form action=" " method="POST"  name="louay" onsubmit="return validateForm(event)" >
									<div class="fields">
										<div class="field half">
											<label for="name">Non</label>
											<input type="text" name="name" id="name" />
											<p id="errorNR" class="error"></p>
										</div>
										
										<div class="field half">
											<label for="mdp">Mot de passe</label>
											<input type="text" name="mdp" id="mdp" />
											<p id="errorPass" class="error"></p>

										</div>
										
									</div>
									<div class="field half">
										<label for="email">Émail</label>
										<input type="text" name="email" id="email" />
										<p id="errorMR" class="error"></p>
									</div>
									
									</fieldset>
									<div class="field half">
										<label for="reffd">Référence</label>
										<input type="text" name="reffd" id="reffd" />
										<p id="  adlER" class="error"></p>
									</div>
									
									<div class="field half">
										<label for="telp">Téléphone</label>
										<input type="text" name="telp" id="telp" />
										<p id=" telpER" class="error"></p>
										</div>
										
										<h3>Dans l'attente de votre réponse</h3>
                                            <p id="status_field" class="form-row form-row-wide address-field update_totals_on_change validate-required woocommerce-validated">
                                                <label class="" for="status">status <abbr title="required" class="required"></abbr>
                                                </label>
                                                <select class="status" id="status" name="status">
                                                   <option value="">Votre réponse</option>
                                                    <option value=" reservation accepter">Accepter</option>
                                                    <option value=" reservation refuser">Refuser</option>

                                                </select>
												
                                            </p>
									
										<div class="field half text-right">
										
                                       <input  type="submit" value="envoyer">
									   <br><br><br>

						<button><a href="afficherListedemande.php">Retour à la liste des demandes</a></button>
						<hr>
										</div>
									</div>
								</form>
							</section>
							 
								 
						</div>
					</section>


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
</html>-->
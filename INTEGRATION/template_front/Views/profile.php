<?php
session_start();
?>
<html>
<head>
		<title>PHPJabbers.com | Free Blog Website Template</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		
	<script type="text/javascript" src="validation.js"></script>

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
					<li > <a href="acceuil.php">Acceuil </a> </li>

					<li > <a href="addreservation.php">Reservation</a> </li>

					<li> <a href="about-us.html">Catégorie</a> </li>

					<li> <a href="afficherListeEvenements.php">Evenement</a> </li>

					<li><a href="afficherassociationf.php">Association</a></li>
				</ul>
			</nav>
				<!-- Main -->



                <div>
						<div class="inner">
							<section>
								<header class="major">
									<h2>Commencez a troquer !</h2>
									<h5>Creer un compte</h5>
								</header>

								
								<form action="" method="POST"  name="amin" onsubmit="return validateForm(event)" >
									<div class="fields">
                <div class="mb-3">
                    <label class="form-label">ID:</label>
                    <label class="form-label"><?php echo $_SESSION['id'];?></label><br>
                    <label class="form-label">NOM:</label>
                    <label class="form-label"><?php echo $_SESSION['nom'];?></label> <br>
                    <label class="form-label">PRENOM:</label>
                    <label class="form-label"><?php echo $_SESSION['prenom'];?></label><br>
                    <label class="form-label">EMAIL:</label>
                    <label class="form-label"><?php echo $_SESSION['email'];?></label> <br>
                    <label class="form-label">ADRESSE:</label>
                    <label class="form-label"><?php echo $_SESSION['adresse'];?></label><br>
                    <label class="form-label">NUMERO TELEPHONE:</label>
                    <label class="form-label"><?php echo $_SESSION['tel'];?></label> <br>
                  
                </div>
                </div>
</label>
                </div>
                <div class="text-center mt-3">
                
                    <!-- <button type="submit" class="btn btn-lg btn-primary">Sign in</button> -->
                </div>
            </form>
        </div>
    </div>
</div>

					


				<!-- form -->
				
					<div>
						<div class="inner">
							<section>
							

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
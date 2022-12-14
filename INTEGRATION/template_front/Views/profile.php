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

					<li > <a href="adddemande.php">Demande</a> </li>

				
					<li> <a href="afficherListeEvenements.php">Evenement</a> </li>

					<li><a href="afficherassociationf.php">Association</a></li>
				</ul>
			</nav>
				<!-- Main -->



                <div>
						<div class="inner">
							<section>
								<header class="major">
									<h2> Votre Profile </h2>
									 
								</header>

								
								<form action="" method="POST"  name="amin" onsubmit="return validateForm(event)" >
									<div class="fields">
                <div class="mb-3">
					<br>
					<br>
					<thead>

                      
					<div class="card-body text-center"><th class="card-body text-center">Nom : </th><?php echo $_SESSION['nom'];?></div>   
					<div class="card-body text-center"><th class="card-body text-center">Prénom : </th><?php echo $_SESSION['prenom'];?></div> 
					<div class="card-body text-center"><th class="card-body text-center">Émail : </th><?php echo $_SESSION['email'];?></div>  
                    <div class="card-body text-center"><th class="card-body text-center">Adresse : </th><?php echo $_SESSION['adresse'];?></div> 
					<div class="card-body text-center"><th class="card-body text-center">Téléphone : </th><?php echo $_SESSION['tel'];?></div>  
                     
</thead>
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
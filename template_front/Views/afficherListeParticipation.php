<?php
require_once('../Controller/ParticipationC.php');

$participationC = new participationC();
$list = $participationC->afficherParticipation();
$id=80;


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
					<a href="afficherListeParticipation.php">Participation</a>
						<a href="#menu">Menu</a>
					</nav>
				</header>

				<!-- Menu -->
				<nav id="menu">
					<ul class="links">
						
		                <li> <a href="index.html">Acceuil </a> </li>

		                <li> <a href="blog.html">blog</a> </li>

		                <li> <a href="about-us.html">Catégorie</a> </li>
		                
		                <li class="active"> <a href="afficherListeEvenements.php">Evenement</a> </li>

		                
		                <li ><a href="Dons.html">Dons</a></li>
            		</ul>
				</nav>

				<!-- Main -->
				<div id="main" class="alt">
                    
							<section id="one">
								<div class="inner">
									<header class="major">
										<h1>PARTICIPATIONS</h1>
									 </header>
											<thead>
												
												<?php
		foreach ($list as $participation) {
		?>
        <td><div class="card-body text-center"><th class="text-center">NOM DU L'EVENEMENT : </th><?php   echo  $nom_eve = $participationC->recupererNom_eve($id); ?></div></td>
		<td><div class="card-body text-center"><th class="text-center">NOMBRE DE POINTS À GAGNER : </th><?php   echo  $nb_pt_eve = $participationC->recupererPt_eve($id); ?></div></td>
		<div class="card-body text-center"><th class="text-center">NOM DU PARTICIPANT : </th><?php echo $participation['nom_part']; ?></div>
		<div class="card-body text-center"><th class="text-center">PRENOM DU PARTICIPANT : </th><?php echo $participation['prenom_part']; ?></div>
		<div class="card-body text-center"><th class="text-center">AGE DU PARTICIPANT : </th><?php echo $participation['age_part']; ?></div>
		<div class="card-body text-center"><th class="text-center">MAIL : </th><?php echo $participation['mail_part']; ?></div>
		<div class="card-body text-center"><th class="text-center">NUMERO : </th><?php echo $participation['num_part']; ?></div>	
		<div class="card-body text-center"><th class="text-center">OPTION : </th><button><span role="img" aria-label="no">  <a href="supprimerParticipation.php?id_part=<?php echo $participation['id_part']; ?>">❌</span></a> </i></button> 
		<button><a href="modifierParticipation.php?id_part=<?php echo $participation['id_part']; ?>" name="id_part" >mod</a></i></button>
			<br>
			<hr>
			<br>
			
			
			
			
			<?php
         }
        ?>
         </div>
		 
		
        
		
		    
			
			<hr>
			<br>
			
			
			
			
			
       </thead>
											
	   </div>
							</section>
							

					</div>

				
								

				
				
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

				
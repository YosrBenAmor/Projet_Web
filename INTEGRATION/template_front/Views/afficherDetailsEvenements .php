<?php
require_once('../Controller/evenementC.php');

$evenementC = new evenementC();

$list = $evenementC->listevenements();
$liste = $evenementC->listevenements();

if (isset($_GET['attribut']) && !empty($_GET['attribut'])) {
    $list = $evenementC->search_nor($_GET['attribut']);
} else {
    $list = $evenementC->listevenements();
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
		<link rel="stylesheet" href="assets/css/star.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<link  href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Droid+Sans'><link rel="stylesheet" href="assets/css/star.css">
 <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">	
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
				<header id="header" class="alt">
					<a href="index.html" class="logo"><img src="images/logo.png"  /></a>
					<nav>
						<a href="afficherListeParticipation.php?id=<?php  echo $_SESSION['id']; ?>">Participation</a>
						<a href="#menu">Menu</a>
					</nav>
				</header>

				<!-- Menu -->
				<nav id="menu">
				<ul class="links">
					<li > <a href="acceuil.php">Acceuil </a> </li>

					<li > <a href="addreservation.php">Reservation</a> </li>

					<li> <a href= "front.php">Catégorie</a> </li>

					<li class="active"> <a href="afficherListeEvenements.php">Evenement</a> </li>

					<li><a href="afficherassociationf.php">Association</a></li>
				</ul>
			</nav>

				<!-- Main -->
					<div id="main" class="alt">
                    
							<section id="one">
								<div class="inner">
									<header class="major">
										<h1>NOS ÉVÉNEMENTS</h1>
										
									 </header>
											
									        <thead>
											<form action="" method="GET">
											<input type="text" name="attribut" id="attribut" placeholder="chercher par nom ou lieu d'évenement">
            <input type="submit" value="Chercher" class="btn btn-success">
        </form>
		
		
		
		
											
													
												<?php
	                                           	foreach ($list as $evenement) {
	                                        	?>
        <div class="col-md-10 col-sm-6 co-xs-12 ">
										<img src="images/<?php echo $evenement['img_eve']; ?>  "  width="284"    height="177"> 
               <P>
		     NOM D'ÉVÉNEMENT : <?php echo $evenement['nom_eve']; ?><br>
			 DATE : <?php echo $evenement['date_eve']; ?><br>
			 LIEU :<?php echo $evenement['lieu_eve']; ?><br>
			 DURÉE : <?php echo $evenement['duree_eve']; ?><br>
			 ASSOCIATION ASSOCIÉE : <?php echo $evenement['association_ga']; ?><br>
			 SOMME : <?php echo $evenement['somme']; ?><br>
			 NOMBRE DE POINTS EN RÉCOMPENSE : <?php echo $evenement['nb_pt_eve']; ?><br>
             INTERDIT À CEUX QUI SOUFFRENT DE : <?php echo $evenement['maladie']; ?>
			 </P>
			 
			 <?php if  ($evenement['note']==1)  {  ?>
			 <div class="stars">
			 <i class="las la-star" data-value="1"></i>
			
           
               </div>
			   <?php

                                                  }
                                                 ?>


<?php if($evenement['note']==2)  {  ?>
			 <div class="stars">
			 <i class="las la-star" data-value="1"></i>
			 <i class="las la-star" data-value="1"></i>
			
           
               </div>
			   <?php
			   
                                                  }
                                                 ?>


<?php if($evenement['note']==3)  {  ?>
			 <div class="stars">
			 <i class="las la-star" data-value="1"></i>
			 <i class="las la-star" data-value="1"></i>
			 <i class="las la-star" data-value="1"></i>
			
           
               </div>
			   <?php
			   
                                                  }
                                                 ?>
												 <?php if($evenement['note']==4)  {  ?>
			 <div class="stars">
			 <i class="las la-star" data-value="1"></i>
			 <i class="las la-star" data-value="1"></i>
			 <i class="las la-star" data-value="1"></i>
			 <i class="las la-star" data-value="1"></i>
			
           
               </div>
			   <?php
			   
                                                  }
                                                 ?>
												 <?php if($evenement['note']==5)  {  ?>
			 <div class="stars">
			 <i class="las la-star" data-value="1"></i>
			 <i class="las la-star" data-value="1"></i>
			 <i class="las la-star" data-value="1"></i>
			 <i class="las la-star" data-value="1"></i>
			 <i class="las la-star" data-value="1"></i>
           
               </div>
			   <?php
			   
                                                  }
                                                 ?>







			
			</div>
			  
			
			<div class="col-md-0 col-sm-6 co-xs-12 text-center"><button class="btn btn-warning"><a href="ajouterParticipation.php?id_eve=<?php echo $evenement['id_eve']; ?>&id=<?php  echo $_SESSION['id']; ?>">PARTICIPER</a></button><button class="btn btn-success"><a href="add_rate.php?id_eve=<?php echo $evenement['id_eve']; ?>" name="id_eve">NOTER</a></button>
					
                                       
			<br>
			<hr>
			<br>
			</div>

                                                <?php
                                                  }
                                                 ?>
                                              </div>
											  
                                             </thead>
									
	                            </div>
							</section>

					</div>
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
			<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
 


	</body>
</html>	

				
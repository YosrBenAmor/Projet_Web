<?php
include "../Controller/produitC.php";

$produit=new produitC();
$produitC = new produitC();
$listeproduit=$produit->trierproduitplastique();






if(isset($_GET['recherche']))
                       {
                        $search_value=$_GET["recherche"];
                        
                        $listeproduit= $produit->recherche($search_value);
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
		
	</head>
	<body class="is-preload">

				

	<header id="header" class="alt">
				<a href="index.html" class="logo"><img src="images/logo.png"  /></a>
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

					<li class="active"> <a href="front.php">Catégorie</a> </li>

					<li > <a href="addreservation.php">Reservation</a> </li>

					<li > <a href="adddemande.php">Demande</a> </li>

				
					<li> <a href="afficherListeEvenements.php">Evenement</a> </li>

					<li><a href="afficherassociationf.php">Association</a></li>
				</ul>
			</nav>




 




							<form method="get" action="afficher_produit.php"  class="mb-3">
							<br><br><br>

                                   <input type="text" class="form-control" name="recherche" placeholder="chercher un produit">
                                   <br>
                                   <input style="margin: left 200px ;" type="submit" class="btn btn-primary "  value="Chercher">
                                   <style>
							                  	  input{
                                         
                                         margin-left:100px;
                                         margin-right: 500px; ;

                                        position:relative;
                                      
                                        }
								                    </style>
                                    </form>




                                   




									<br><br>
                    <div class="col-md-12">
                      
                            <div class="card-header">
							<h2  class="card-title">  <strong >Liste des produits :</strong> </h2>
                            </div>
                            <div style="background-color:#2a2f4a ;" class="card-body">
                                


                            <div class="row">
            <!-- Single Product -->
            <?php
				  foreach($listeproduit as $row){
				  ?>
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div id="product-1" class="single-product">
                    <div class="part-1">
                    <?PHP echo "<img width=300    height=300 src='images/".$row['image']."' >"; ?>
                       
                    </div>
                   
                    <div class="part-2">
                    <h2 class="card-title"><?php echo $row['nom_produit'];?></h2>
                    <ul style="color:#483d8b ;"  class="list-group list-group-flush">
    <li class="list-group-item">Réfférence : <?php echo $row['id_produit'];?></li>    
  
    <li class="list-group-item">Points demandés : <?php echo $row['pt'];?></li>

    
    
  </ul>
                    </div>
                </div>
            </div>
            <?php } ?>


			
        </div>



<!-- jQuery -->
			  <!-- card-body-->
			  
             



              </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->











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
<?php
include "../Controller/produitC.php";

$produit=new produitC();
$produitC = new produitC();
$listeproduit=$produit->afficherproduitplastique();






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

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
				<header id="header" class="alt">
					<a href="index.html" class="logo"><strong>Blog</strong> <span>Website</span></a>
					<nav>
						<a href="#menu">Menu</a>
					</nav>
				</header>

				<!-- Menu -->
				<nav id="menu">
					<ul class="links">
		                <li class="active"> <a href="index.html">Home </a> </li>

		                <li> <a href="blog.html">Blog</a> </li>

		                <li> <a href="about-us.html">About Us</a> </li>

		                <li> <a href="team.html">Authors</a> </li>

		                <li><a href="contact.html">Contact Us</a></li>
            		</ul>
				</nav>

				<!-- Banner -->
					<section id="banner" class="major">
						<div class="inner">
							<header class="major">
								<h1>Lorem ipsum dolor sit amet isicing</h1>
							</header>
							<div class="content">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, libero!</p>
								<ul class="actions">
									<li><a href="contact.html" class="button next scrolly">Contact us</a></li>
								</ul>
							</div>
						</div>
					</section>

				<!-- Main -->
					<div id="main">
							<!-- About us -->
							<section>
								<div class="inner">
									<header class="major">
										<h2>About us</h2>
									</header>
									<p>Nullam et orci eu lorem consequat tincidunt vivamus et sagittis libero. Mauris aliquet magna magna sed nunc rhoncus pharetra. Pellentesque condimentum sem. In efficitur ligula tate urna. Maecenas laoreet massa vel lacinia pellentesque lorem ipsum dolor. Nullam et orci eu lorem consequat tincidunt. Vivamus et sagittis libero. Mauris aliquet magna magna sed nunc rhoncus amet pharetra et feugiat tempus.</p>
									<ul class="actions">
										<li><a href="about-us.html" class="button next">Read more</a></li>
									</ul>
								</div>
							</section>

							<!-- Blog Posts -->
						








							<form method="get" action="afficher_produit.php"  class="mb-3">
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




                                   





<div class="content mt-3">
    
            <div class="animated fadeIn">
                <div class="row">
              
                            <br><br>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong style="color:red ;">Liste des produits :</strong>
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
                    <?PHP echo "<img  src='../View/assets/images/".$row['image']."' >"; ?>
                       
                    </div>
                    <style>
                        img{
                            height: 300px;
                            width: 300px;
                        }
                    </style>
                    <div class="part-2">
                    <h2 style="color: #8fbc8f	;" class="card-title"><?php echo $row['nom_produit'];?></h2>
                    <ul style="color:#483d8b ;"  class="list-group list-group-flush">
    <li class="list-group-item">Id_Produit : <?php echo $row['id_produit'];?></li>    
    <li class="list-group-item">Quantite disoponible : <?php echo $row['quantite'];?></li>
    <li class="list-group-item">Prix : <?php echo $row['prix'];?></li>
    <li class="list-group-item">Categorie : <?php echo $row['categorie'];?></li>
    <li class="list-group-item">Réfference categorie : <?php echo $row['idC'];?></li>
    <div class="card-body">
                    <button  type="button" 
                    class="btn btn-default btn-sm">
                    <span class="glyphicon 
                    glyphicon-shopping-cart" >
                    </span>
                <b 	> EXCHANGE  </b> <br><br>
            </button>
    </div>
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





<!-- tri -->
<div>
                <a class="btn btn-success" href="plastique_trier.php?id_produit=<?PHP echo $row['nom_produit']; ?>"> Trier par prix </a>
				
				  <br><br>
				  				  <a class="btn btn-primary" onclick="refresh()"> rafraichir la page </a>
								  <style>
								  button{
                                       margin: 13px 12px 12px 10px;
                                        }
								  </style>
								 
                  </div>


<!---->
<script>
function refresh(){
window.location.reload();
}
</script>


							<!-- Testimonials -->
							<section>
								<div class="inner">
									<header class="major">
										<h2>Testimonials</h2>
									</header>
									<div class="row">
										<div class="col-6">
											<p><em>"Nullam et orci eu lorem consequat tincidunt vivamus et sagittis libero. Mauris aliquet magna magna sed nunc rhoncus pharetra. Pellentesque condimentum sem. In efficitur ligula tate urna. Maecenas laoreet massa vel lacinia pellentesque lorem ipsum dolor. Nullam et orci eu lorem consequat tincidunt."</em></p>
											<p><strong>- John Doe</strong></p>
											
										</div>

										<div class="col-6">
											<p><em>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores temporibus dolorum minus repudiandae, eaque error corporis aliquam, architecto amet itaque nobis. Omnis itaque est dolore, a nostrum numquam. Quae, facilis."</em></p>
											<p><strong>- Jack Smith</strong></p>
										</div>
									</div>
									<ul class="actions">
										<li><a href="testimonials.html" class="button next">Read more</a></li>
									</ul>
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
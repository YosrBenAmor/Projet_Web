<?php
    include_once '../Controller/userC.php';
	
    $error = "";
	//$id=$_GET["id_ass"];
   


    $userC = new userC();
    if (
        
        isset($_POST["nom_us"]) &&  
        isset($_POST["prenom_us"]) && 
        isset($_POST["mdp_us"]) &&    
        isset($_POST["mail_us"])
		 

    ) 
     
    {
        if (
            
            !empty($_POST["nom_us"]) &&  
            !empty($_POST["prenom_us"]) && 
            !empty($_POST["mdp_us"]) &&    
            !empty($_POST["mail_us"]) 
			
		
        ) {
            $user = new user(
               
            $_POST['nom_us'],  
            $_POST['prenom_us'],
            $_POST['mdp_us'] ,
            $_POST['mail_us']
			
			
            );
            $userC->adduser($user);
           // header('Location:afficheruser.php');
        }
        else
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
		                <li> <a href="index.html">Home </a> </li>

		                <li> <a href="blog.html">Blog</a> </li>

		                <li> <a href="about-us.html">About Us</a> </li>
		                
		                <li> <a href="Evenement.html">Authors</a> </li>

		               
            		</ul>
				</nav>

				<!-- Main -->
					<div id="main" class="alt">


				<!-- form -->
					
						<div class="inner">
							<section>
								<header class="major">
									<h4>Créez votre compte</h4>
								</header>

								<form  method="POST"  action="">
									<div class="fields">
										<div class="field half">

											<div class="field">
												<label for="nom_us">Nom</label>
												<input type=text class ="form-control" name="nom_us" id="nom_us"/>
												
											</div>
											
											<div class="field">
												<label for="prenom_us">Prenom</label>
												<input type=text  class ="form-control" name="prenom_us" id="prenom_us"/>
												
											</div>
											<div class="field">
												<label for="mdp_us">Mot de passe</label>
												<input type=text  class ="form-control"name="mdp_us" id="mdp_us"/>
												
											</div>
						
											<div class="field">
												<label for="email_user">Èmail </label>
												<input type=text  class ="form-control" name="mail_us" id="mail_us"/>
												
											</div>
											

											
										<br>
										<br>
										<br>
										<div class="field half text-right">
											<ul class="actions"><br>
												<li><input class="btn btn-success" type="submit" value="Se Connecter"  /></li>
											</ul>
										</div>
									</div>
								</form>
							
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
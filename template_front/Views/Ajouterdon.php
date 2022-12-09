<?php
    include_once '../Controller/donsC.php';
	
    $error = "";
    // create adherent
	$id=$_GET["id_ass"];
   

    // create an instance of the controller
    $donC = new donC();
    if (
        
        isset($_POST["nom_don"]) &&  
        isset($_POST["img_don"]) && 
        isset($_POST["num_tel"]) &&    
        isset($_POST["email_don"])
		 

    ) 
     
    {
        if (
            
            !empty($_POST["nom_don"]) &&  
            !empty($_POST["img_don"]) && 
            !empty($_POST["num_tel"]) &&    
            !empty($_POST["email_don"]) 
			
		
        ) {
            $don = new don(
               
            $_POST['nom_don'],  
            $_POST['img_don'],
            $_POST['num_tel'] ,
            $_POST['email_don'],
			$id
			
            );
            $donC->adddon($don);
           // header('Location:afficherdon.php');
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
		<style>
  .error{
    color: red;
}
</style>
		<script type="text/javascript" src="valid.js"></script>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
				<header id="header" class="alt">
					<a href="index.html" class="logo"><img src="images/logo.png"  /></a>
					<nav>
			            <a href="Afficherdonf.php">Dons<a>
						<a href="#menu">Menu</a>
					</nav>
				</header>

				<!-- Menu -->
				<nav id="menu">
					<ul class="links">
		                <li> <a href="index.php">Home </a> </li>


		                <li> <a href="about-us.html">About Us</a> </li>
		                
		                <li> <a href="Evenement.html">Authors</a> </li>

		                <li class="active"><a href="Dons.html">Dons</a></li>
            		</ul>
				</nav>

				<!-- Main -->
					<div id="main" class="alt">


				<!-- form -->
					
						<div class="inner">
							<section>
								<header class="major">
									<h4>Ajouter un don</h4>
								</header>

								<form name ="yosr" onsubmit="return validateForm(event)"  method="POST"  action="">
									<div class="fields">
										<div class="field half">

											<div class="field">
												<label for="nom_don">NOM DU DON</label>
												<input type=text class ="form-control" name="nom_don" id="nom_don"/>
												<p id="errorNA" class=error>
											</div>
											
											<div class="field">
												<label for="img_don">IMAGE DU DON</label>
												<input type="file" class="form-control"  id="img_don" name="img_don">
												 
												
											</div>
											<div class="field">
												<label for="num_tel">VOTRE NUMÈRO DU TÈLÈPHONE</label>
												<input type=text  class ="form-control"name="num_tel" id="num_tel"/>
												<p id=errorNU class=error>
												
											</div>
						
											<div class="field">
												<label for="email_don">VOTRE ÈMAIL </label>
												<input type=text  class ="form-control" name="email_don" id="email_don"/>
												<p id=errormail class=error>
											</div>
											

											
										<br>
										<br>
										<br>
										<div class="field half text-right">
											<ul class="actions"><br>
												<li><input class="btn btn-success" type="submit" value="Ajouter"  /></li>
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
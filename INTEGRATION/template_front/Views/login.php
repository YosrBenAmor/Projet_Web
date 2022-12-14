<?php

   include_once '../Model/user.php';
    include_once '../Controller/userC.php';

    // create user
    $user = null;

    // create an instance of the controller
    $userC = new userC();
    if (

        isset($_POST["password"]) &&
        isset($_POST["email"]) 
    ) {
       
		if (

            !empty($_POST["password"]) && 
            !empty($_POST["email"]) 
        ) {
			$password = $_POST["password"];
			$email = $_POST["email"] ; 

		$result = $userC->recupereruserByemail($email,$password);
		if($result == null)
			$error ="Email et/ou mot de passe est incorrect";
		else{
        			$_SESSION['id']= $result['id']; 
			        $_SESSION['nom']= $result['nom'];
					$_SESSION['prenom']= $result['prenom'];
					$_SESSION['password']= $result['password'];
					$_SESSION['email']= $result['email'];
					$_SESSION['adresse']= $result['adresse'];
					$_SESSION['tel']= $result['tel'];
					$_SESSION['usad']= $result['usad'];
			    	}
			

			$_SESSION['msg'] = "vous etes connecté ! yay !!!";
            header('Location:acceuil2.php');
        }
        /*else
            $error = "Veuillez verifier votre email ou mot de passe";*/
    }
  
?>
<html>
<head>
		<title>PHPJabbers.com | Free Blog Website Template</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		
	<script type="text/javascript" src="val.js"></script>

	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
				<header id="header" class="alt">
					<a   class="logo"><img src="images/logo.png"  /></a>
					 
				</header>
 
					<div>
						<div class="inner">
							<section>
								<header class="major">
									<h1>Commencez à troquer </h1>
									 
								</header>

								
				<form action="" method="POST"  name="amin" onsubmit="return validateForm(event)" >
									<div class="fields">

										<div class="field">
											<label for="email">Émail</label>
											<input type="text" name="email" id="email" />
											<p id="emailER" class="error"></P>
										</div>
										<div class="field">
											<label for="password">Mot de passe</label>
											 <input type="password" value="" name="password" id="password"/><br>
											<input type="checkbox" onclick="myFunction()"> Démasquer le  mot de passe
											
											<script>
											function myFunction() {
											  var x = document.getElementById("password");
											  if (x.type === "password") {
												x.type = "text";
											  } else {
												x.type = "password";
											  }
											}
											</script>
											
											
										</div>
										<p id="passER" class="error"></P>
								

										<div class="field half text-right">
											<ul class="actions">
												<li><input name="login-submit" type="submit" value="se connecter" class="primary" /></li>
														
													</ul>
													<p>
												Vous n'avez pas un compte? <a href="ajouterUser.php">Créer un compte</a>
												<br>
												<br>
												Mot de passe oublié? <a href="forgot.php">Recupérer votre mot de passe </a>
										</p>	
										</div>
									</div>
								</form>
							
						</div>
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
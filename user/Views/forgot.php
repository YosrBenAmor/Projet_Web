

<?php
   include_once '../Model/user.php';
    include_once '../Controller/userC.php';
	

// create user
$user = null;

// create an instance of the controller
$userC = new userC();
if (
	isset($_POST["email"]) 
) {

	if(isset($_POST['button_pressed']))
	{
		$to    = $_POST['email'];
		$subject = 'Mot de passe oublié';
		
		$headers = 'From: lefi.amine@esprit.tn' . "\r\n" .
			'Reply-To: lefi.amine@esprit.tn' . "\r\n" .
			'X-Mailer: PHP/' . phpversion();

		ini_set('SMTP', "server.com");
		ini_set('smtp_port', "25");
		ini_set('sendmail_from', "lefi.amine@esprit.tn");

		$result = $userC->recupereruserByemailonly($to);
		$pass = array_values($result)[0];
		if($pass == null){
			echo 'Verifiez votre email';
			}
		else {
			
			
			$message = 'votre mot de passe est : '.$pass;
			mail($to, $subject, $message, $headers);
			echo 'Email envoyé !';
			}

	}
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

		                <li class="active"><a href="Dons.html">Dons</a></li>
            		</ul>
				</nav>

				<!-- Main -->


		
					


				<!-- form -->
				
					<div>
						<div class="inner">
							<section>
								<header class="major">
									<h2>mot de passe oublié :c</h2>
									<h5>recupérer</h5>
								</header>

								<form action="" method="post">
								<div class="field">
											<label for="email">email</label>
											<input type="text" name="email" id="email" />
											<p id="emailER" class="error"></P>
										</div>
								<input type="submit" value="envoyer un mail" />
								<input type="hidden" name="button_pressed" value="1" />
								</form>
				<!--				
				<form action="" method="POST"  name="amin" onsubmit="return validateForm(event)" >
									<div class="fields">

										<div class="field">
											<label for="email">email</label>
											<input type="text" name="email" id="email" />
											<p id="emailER" class="error"></P>
										</div>

								

										<div class="field half text-right">
											<ul class="actions">
												<li><input type="submit" name="forgotpass" value="envoyer" class="primary" /></li>
																	
													</ul>
													<p>vous recevrez un email contenant votre mdp</P>
										</div>
									</div>
								</form>
							
						</div>
						</div>
					


-->
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